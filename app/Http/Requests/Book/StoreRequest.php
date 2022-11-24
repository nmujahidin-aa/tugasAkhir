<?php

namespace App\Http\Requests\Book;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'author' => [
                'required',
            ],
            'published_at' => [
                'required',
            ],
            'file' => [
                'required',
                'max:5048',
                'mimes:pdf',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'     => 'Judul harus diisi',
            'description.required'     => 'Deskripsi harus diisi',
            'author.required'     => 'Nama penulis harus diisi',
            'published_at.required'     => 'Tanggal publikasi harus diisi',
            'file.required' => 'File harus diisi',
            'file.mimes' => 'File harus berupa pdf',
            'file.max' => 'File tidak boleh lebih dari 5MB',
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
            $this->redirect = route("create.index");
        }
        parent::failedValidation($validator);
    }
}