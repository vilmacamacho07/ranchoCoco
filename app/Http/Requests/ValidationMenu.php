<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidateCampUrl;
class ValidationMenu extends FormRequest
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
            'titlem' => 'required|max:30|unique:menu,titlem,'.$this->route('id'),
            'url' => ['required','max:150', new ValidateCampUrl],
            'icono' => 'nullable|max:50',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'titlem.required' => 'El campo nombre del menu es requerido',
    //         'url.required' => 'El campo url es requerido',
    //     ];
    // }
}
