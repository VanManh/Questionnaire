<?php

/**
 * Created by PhpStorm.
 * User: PullKa
 * Date: 3/2/2017
 * Time: 1:33 PM
 */
namespace App\Repositories;
use App\Surveys;


interface SurveyRepositoryInterface
{
    public function find($id);
    public function all();
    public function getModel();
}