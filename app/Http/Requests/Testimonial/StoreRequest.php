<?php

namespace App\Http\Requests\Testimonial;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'foto' => [
                'required',
                'image',
                'max:2048',
                'mimes:jpeg,bmp,png,gif,svg,jpg',
            ],
            'name' => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'foto.required'     => 'Foto harus diisi',
            'name.required'     => 'Nama harus diisi',
            'description.required'     => 'Deskripsi harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berupa jpeg, bmp, png, gif, svg , jpg',
            'foto.max' => 'Foto tidak boleh lebih dari 2MB',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
        if (! $this->wantsJson()) {
            $errors = implode('<br>', $validator->errors()->all());
            alert()->html('Gagal',$errors,'error');
            $this->redirect = route("dashboard.testimonials.create");
            
        }
        parent::failedValidation($validator);
    }
}