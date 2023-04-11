<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OptionRequest extends FormRequest
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
    public function rules()
    {
        return [
            'question_id' => 'required',
            'option_text1' => 'required',
            'option_text2' => 'required',
            'option_text3' => 'required',
            'option_text4' => 'required',
            'option_text5' => 'required',
            'points1' => 'nullable',
            'points2' => 'nullable',
            'points3' => 'nullable',
            'points4' => 'nullable',
            'points5' => 'nullable'
        ];
    }
}