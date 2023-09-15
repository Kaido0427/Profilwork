<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorejobRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'titre' => 'required',
            'description' => 'required',
            'image' => 'bail',
            'jobcat' => 'required'
        ];
    }
    
    protected function prepareForValidation()
    {
        if ($this->image == null) {
            $this->request->remove('image');
        }
    }
    
}
