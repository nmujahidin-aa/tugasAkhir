<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore(request()->route()->parameter('id'))->whereNull('deleted_at'),
            ],
            'name' => [
                'required',
            ],
            'roles' => [
                'required',
            ],
            'phone' => [
                'required',
                Rule::unique('users')->ignore(request()->route()->parameter('id'))->whereNull('deleted_at'),
            ],
            'avatar' => [
                'nullable',
                'image',
                'max:2048',
                'mimes:jpeg,bmp,png,gif,svg,jpg',
            ],
            'password' => [
                'nullable',
                'min:8',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama tidak boleh kosong',
            'name.string' => 'Nama harus berupa string',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter',
            'email.required' => 'Email tidak boleh kosong',
            'email.string' => 'Email harus berupa string',
            'email.email' => 'Email harus berupa email',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter',
            'email.unique' => 'Email sudah terdaftar',
            'avatar.image' => 'Foto harus berupa gambar',
            'avatar.mimes' => 'Foto harus berupa jpeg, bmp, png, gif, svg , jpg',
            'avatar.max' => 'Foto tidak boleh lebih dari 2MB',
            'password.min' => 'Password minimal 8 karakter',
            'roles.required' => 'Role tidak boleh kosong',
            'phone.required' => 'Phone tidak boleh kosong',
            'phone.unique' => 'Phone sudah terdaftar',
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
            $this->redirect = route('dashboard.users.edit', request()->route()->parameter('id'));
        }
        
        parent::failedValidation($validator);
    }
}