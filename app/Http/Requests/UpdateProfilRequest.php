<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => [
                'required', 'string', 'max:255'
            ],
            'email' => [
                'required', 'email', 'max:255',
                Rule::unique('profiles', 'email')->ignore(Auth::user()->id)
            ],
            'no_hp' => [
                'numeric',
            ],
            'no_rekening' => [
                'required', 'numeric', 
                Rule::unique('profiles', 'no_rekening')->ignore(Auth::user()->id)
            ],
        ];
    }
}
