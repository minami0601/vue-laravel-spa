<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class TaskRequest extends FormRequest
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
            'title' => 'required|min:1|max:10',
            'content' => 'required|min:1|max:30',
            'person_in_charge' => 'required',
        ];
    }
}
