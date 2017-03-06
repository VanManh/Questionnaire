<?php

/**
 * Created by PhpStorm.
 * User: PullKa
 * Date: 3/2/2017
 * Time: 2:05 PM
 */
namespace App\Repositories\Answer;
use App\Answers;
use App\Repositories\AnswerRepositoryInterface;

class AnswerRepository implements  AnswerRepositoryInterface
{
    protected $model;

    /**
     * AnswerRepository constructor.
     * @param Answers $surveys
     */
    public function __construct( Answers $surveys)
    {
        $this->model = $surveys;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * return Model of Class
     * @return Answers
     */
    public function getModel()
    {
        return $this->model;
    }
}