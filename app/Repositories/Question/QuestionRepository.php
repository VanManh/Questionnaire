<?php

/**
 * Created by PhpStorm.
 * User: PullKa
 * Date: 3/2/2017
 * Time: 2:05 PM
 */
namespace App\Repositories\Question;

use App\Questions;
use App\Repositories\QuestionRepositoryInterface;


class QuestionRepository implements QuestionRepositoryInterface
{
    protected $model;

    /**
     * QuestionRepository constructor.
     * @param Questions $surveys
     */
    public function __construct(Questions $surveys)
    {
        $this->model = $surveys;
    }

    /**
     * get all row of table
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * return Model fo Class
     * @return Questions
     */
    public function getModel()
    {
        return $this->model;
    }
}