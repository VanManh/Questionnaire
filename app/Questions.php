<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Questions
 *
 * @property int $id
 * @property string $content
 * @property int $survey_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Answers[] $answers
 * @property-read \App\Surveys $surveys
 * @method static \Illuminate\Database\Query\Builder|\App\Questions whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Questions whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Questions whereSurveyId($value)
 * @mixin \Eloquent
 */
class Questions extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var  array
     */
    protected $dates = ['deleted_at'];
    protected $question = 'questions';

    public $timestamps = false;

    public function answers()
    {
        return $this->hasMany('App\Answers','question_id');
    }
    public function surveys()
    {
        return $this->belongsTo('App\Surveys');
    }
}
