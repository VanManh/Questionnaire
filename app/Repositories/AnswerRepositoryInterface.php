<?php

/**
 * Created by PhpStorm.
 * User: PullKa
 * Date: 3/2/2017
 * Time: 2:04 PM
 */
namespace App\Repositories;
use App\Answers;

interface AnswerRepositoryInterface
{
    public function find($id);
    public function  all();
    public function getModel();
}