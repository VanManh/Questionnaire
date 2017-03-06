<?php

/**
 * Created by PhpStorm.
 * User: PullKa
 * Date: 3/2/2017
 * Time: 2:03 PM
 */

namespace App\Repositories;
use App\Questions;

interface QuestionRepositoryInterface
{

    public function find($id);

    public function  all();
    public function getModel();
}