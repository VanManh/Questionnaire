<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckSurveyRequest;
use App\Repositories\SurveyRepositoryInterface;

/**
 * this is controller to manage Survey' Table
 *
 * Class SurveyController
 * @package App\Http\Controllers
 */
class SurveyController extends Controller
{

    private $model;
    private $classModel;
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __construct(SurveyRepositoryInterface $survey)
    {
        $this->classModel = $survey;
        $this->model = $survey->getModel();
    }

    public function editSurvey($id)
    {
        //$questions = DB::table('questions')->where('survey_id', '=', $id)->get();
        $survey = $this->classModel->find($id);

        if (!$survey) {
            echo '<script type="text/javascript"> alert("Error! Sorry you can\'t connect to this survey "); window.location = "';
            echo route('home');
            echo '"</script>';
        } else {
            return view('question.index', ['survey' => $survey]);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function deleteSurvey($id)
    {
        /** @var Surveys $survey */

        $survey = $this->classModel->find($id);
        if ($survey) {
            foreach ($survey->questions as $question) {
                //DB::table('answers')->where('question_id', '=', $question->id)->delete();
                //Questions::findOrFail($question->id)->delete();
                if ($question) {
                    $question->answers()->delete();
                    $question->delete();
                } else {
                    $survey->questions->restore();
                    return view('warning.delete', ['msg' => 'Survey 1']);
                }
            }
            $survey->delete();
        } else {
            return view('warning.delete', ['msg' => 'Survey 2']);
        }

        return redirect('/home');
    }

    /**
     * @param CheckSurveyRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function PostAddSurvey(CheckSurveyRequest $request)
    {
        /** @var Surveys $survey */
        $survey = $this->model;
        $survey->name = $request->survey;
        $survey->save();

        return redirect("/edit-survey/$survey->id");
    }

    public function GetAddSurvey()
    {
        return view('survey.add');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getChangeName($id)
    {
        $survey = $this->classModel->find($id);

        if (!$survey) {
            return view('errors.400');
        }

        return view('survey.rename', ['survey' => $survey]);
    }

    /**
     * @param CheckSurveyRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postChangeName(CheckSurveyRequest $request)
    {
        /** @var Surveys $objSurvey */
        $objSurvey = $this->model;
        $getSurveyById = $objSurvey->find($request->idSurvey);

        /** Get status of Survey when it is empty */
        if (!$getSurveyById) {
            return view('errors.400');
        }

        $getSurveyById->name = $request->survey;
        $getSurveyById->save();

        return redirect('/home');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewSurvey($id)
    {
//        user join in ORM
//        $contentSurvey = DB::table('questions')
//            ->join('surveys', 'surveys.id', '=', 'questions.survey_id')
//            ->join('answers', 'questions.id', '=', 'answers.question_id')
//            ->select('questions.*','surveys.name','answers.content as contentanswer')->where('questions.survey_id','=',$id)
//            ->get();
//         dd($contentSurvey);
//         use Eloquent Ralation

        /** @var Surveys $survey */
        $survey = $this->classModel->find($id);

        //dd($survey);
        if (!$survey) {

            echo '<script type="text/javascript"> alert("Error! Sorry you can\'t connect to this survey "); window.location = "';
            echo route('home');
            echo '"</script>';
        }

        return view('survey.view', ['survey' => $survey]);
    }

    public function index()
    {

        $surveys = $this->model->paginate(7);
        //dd($surveys);
        return view('index', ['surveys' => $surveys]);
    }
}
