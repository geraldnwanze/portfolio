<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return match(request()->route()->getName()) {
            'auth.login' => $this->login()
        };
    }

    public function login()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
            // 'g-recaptcha-response' => 'required'
        ];
    }

    public function messages() 
    {
        return [
            'g-recaptcha-response.required' => 'prove that you are not a robot'
        ];
    }

}
