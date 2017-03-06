<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Answers
 *
 * @property int $id
 * @property string $content
 * @property int $question_id
 * @method static \Illuminate\Database\Query\Builder|\App\Answers whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Answers whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Answers whereQuestionId($value)
 * @mixin \Eloquent
 */
class Answers extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var  array
     */
    protected $dates = ['deleted_at'];

    protected $answer = 'answers';
    public $timestamps = false;

}
