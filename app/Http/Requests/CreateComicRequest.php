<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateComicRequest extends FormRequest
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
        return [
            'title' => 'required|string|min:4|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il campo Title è richiesto',
            'title.min' => 'Il campo devo contenere minimo 4 caratteri',
            'description' => 'Il campo Description è richiesto',
            'price' => 'Il campo Price è richiesto',
            'price.numeric' => 'Il campo deve essere un numero'
        ];
    }
}
