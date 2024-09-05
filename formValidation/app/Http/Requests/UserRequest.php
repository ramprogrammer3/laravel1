<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    protected $stopOnFirstFailure = true;
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
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6',
            'age' => 'required|numeric|min:20',
            'city' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.require' => "Please Enter the name",
            'email.require' => 'Please Enter email address',
            'eamil.email' => 'Please Enter valid email address',

            'age.require' => "please enter age",
            'city.require' => "please enter city name"
        ];
    }

    public function attributes()
    {
        return [
            'name' => "Name like Ram",
            'email' => "Email like ram@gmail.com",
            'age' => "Age like 20",
            'city' => "city like Maniyari"
        ];
    }

    public function prepareForValidation(){
        $this->merge([
            'name' => strtoupper($this->name),
        ]);
    }
}
