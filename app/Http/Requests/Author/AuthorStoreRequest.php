<?php

namespace App\Http\Requests\Author;

use Pearl\RequestValidate\RequestAbstract;

class AuthorStoreRequest extends RequestAbstract
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'twitter' => 'required|email',
            'github' => 'required|email',
            'latest_publish' => 'exists:articles,id'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'This field Can\'t be Empty !',
            'email.required' => 'Email is Required',
            'email.email' => 'Not valid Email Format',
            'location.required' => 'This field Can\'t be Empty !',
            'twitter.email' => 'Not valid Email Format',
            'github.email' => 'Not valid Email Format',
            'latest_publish.exists' => 'This Article Does not Exist'
        ];
    }
}
