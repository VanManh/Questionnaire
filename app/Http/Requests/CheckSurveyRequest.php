<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckSurveyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'survey' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'survey.required' => 'Please fill out Name\'s Survey'
        ];
    }
}
