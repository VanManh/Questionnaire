<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Surveys
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Questions[] $questions
 * @method static \Illuminate\Database\Query\Builder|\App\Surveys whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Surveys whereName($value)
 * @mixin \Eloquent
 */
class Surveys extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var  array
     */
    protected $dates = ['deleted_at'];
    protected $survey = 'surveys';
    public $timestamps = false;

    public function questions()
    {
        return $this->hasMany('App\Questions','survey_id');
    }
}
