<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // if($this->isMethod('PATCH')){
        //     return [
        //         'title' => ''
        //     ];
        // }
        return [
            'name' => 'required|max:30|min:3',
            'surname' => 'required|max:50|min:5',
            'phone' => 'required|max:9|min:9',
            'email' => 'required|max:40|min:9'
        ];
    }
}