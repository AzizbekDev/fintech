<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterApplicationRequest extends FormRequest
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
            'fullname'  => 'required|max:150',
            'course_id' => 'required|exists:courses,id',
            'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'source'    => 'required|max:150'
        ];
    }
}
