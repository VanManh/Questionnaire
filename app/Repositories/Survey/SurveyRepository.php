<?php

/**
 * Created by PhpStorm.
 * User: PullKa
 * Date: 3/2/2017
 * Time: 2:05 PM
 */

namespace App\Repositories\Survey;

use App\Surveys;
use App\Repositories\SurveyRepositoryInterface;

class SurveyRepository implements SurveyRepositoryInterface
{
    /** @var Surveys  */
    protected $model;

    /**
     * SurveyRepository constructor.
     * @param Surveys $surveys
     */
    public function __construct(Surveys $surveys)
    {
        $this->model = $surveys;
    }

    /**
     *  get all row in Survey model
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * get a row in table with id
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null|static|static[]
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * this is function return Model of Class
     * @return Surveys
     */
    public function getModel()
    {
        return $this->model;
    }
}