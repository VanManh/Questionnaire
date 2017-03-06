<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckQuestionRequest;
use App\Repositories\AnswerRepositoryInterface;
use App\Repositories\QuestionRepositoryInterface;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

/**
 * this is controller to manage Question's Table.
 *
 * Class QuestionController
 * @package App\Http\Controllers
 */

class QuestionController extends Controller
{

    private $modelQuestion;
    private $modelAnswer;
    private $classQuestion;
    private $classAnswer;

    //
    public function __construct(
        QuestionRepositoryInterface $question,
        AnswerRepositoryInterface $answer)
    {
        $this->classAnswer = $answer;
        $this->modelAnswer = $answer->getModel();

        $this->classQuestion = $question;
        $this->modelQuestion = $question->getModel();
    }

    public function getEditQuestion($id)
    {

        $question = $this->classQuestion->find($id);
        if (!$question) {
            return view('warning.view');
        }
        $answers = $this->classQuestion->find($id)->answers;

        return view('question.edit', ['question' => $question, 'answers' => $answers]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function postEditQuestion(Request $request)
    {
        $objQuestion = $this->modelQuestion;
        $getQuestionById = $objQuestion->find($request->idQuestion);


        $objAnswer1 = $this->modelAnswer;
        $getAnswer1ById = $objAnswer1->find($request->idAnswer1);


        $objAnswer2 = $this->modelAnswer;
        $getAnswer2ById = $objAnswer2->find($request->idAnswer2);


        $objAnswer3 = $this->modelAnswer;
        $getAnswer3ById = $objAnswer3->find($request->idAnswer3);


        $objAnswer4 = $this->modelAnswer;
        $getAnswer4ById = $objAnswer4->find($request->idAnswer4);

        if ($getQuestionById
            && $getAnswer1ById
            && $getAnswer2ById
            && $getAnswer3ById
            && $getAnswer4ById
        ) {
            //if edit question success
            $getQuestionById->content = $request->question;
            $getQuestionById->save();

            $getAnswer1ById->content = $request->answer1;
            $getAnswer1ById->save();

            $getAnswer2ById->content = $request->answer2;
            $getAnswer2ById->save();

            $getAnswer3ById->content = $request->answer3;
            $getAnswer3ById->save();

            $getAnswer4ById->content = $request->answer4;
            $getAnswer4ById->save();

            return redirect("/edit-survey/$getQuestionById->survey_id");

        } else {
            //if edit question fall
            return view('errors.400');
        }

    }

    public function deleteQuestion($id)
    {
        /** @var Question $question */
        $question = $this->classQuestion->find($id);

        if ($question) {
            $question->answers()->delete();
            $question->delete();
        } else {

            return view('warning.delete', ['msg' => 'Question']);
        }

        return redirect()->back();
    }

    public function getAddQuestion($idSurvey)
    {
        return view("question.add", ['idSurvey' => $idSurvey]);
    }

    public function postAddQuestion(CheckQuestionRequest $request, $idSurvey)
    {
        $question = $this->modelQuestion;
        $question->content = $request->question;
        $question->survey_id = $idSurvey;
        $question->save();
        /** @var Answers $answer1 */
        $idQuestion = $question->id;
        $answer1 = $this->modelAnswer;
        $answer1->question_id = $idQuestion;
        $answer1->content = $request->answer1;
        $answer1->save();
        /** @var Answers $answer2 */
        $answer2 = $this->modelAnswer;
        $answer2->question_id = $idQuestion;
        $answer2->content = $request->answer2;
        $answer2->save();
        /** @var Answers $answer3 */
        $answer3 = $this->modelAnswer;
        $answer3->question_id = $idQuestion;
        $answer3->content = $request->answer3;
        $answer3->save();
        /** @var Answers $answer4 */
        $answer4 = $this->modelAnswer;
        $answer4->question_id = $idQuestion;
        $answer4->content = $request->answer4;
        $answer4->save();

        return redirect("/edit-survey/$idSurvey");

    }

}
