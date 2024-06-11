<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'email' => ['required', 'email'],
            'age' => ['nullable', 'integer'],
            'description' => ['nullable', 'string'],
            'is_married' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Это поле необходимо заполнить',
            'surname.required' => 'Это поле необходимо заполнить',
            'email.required' => 'Это поле необходимо заполнить',
            'name.string' => 'Это поле должной быть строкой',
            'surname.string' => 'Это поле должной быть строкой',
            'email.string' => 'Это поле должной быть в формате email',
            'age.integer' => 'Это поле должно быть числом'
        ];
    }
}
