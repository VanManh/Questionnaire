<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
	class Answers extends \Eloquent {}
}

namespace App{
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
	class Questions extends \Eloquent {}
}

namespace App{
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
	class Surveys extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

