<?php

namespace App\Http\Requests\Article;

use Pearl\RequestValidate\RequestAbstract;

class ArticleStoreRequest extends RequestAbstract
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
            'first_title' => 'required',
            'second_title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'author_id' => 'required|exists:authors,id',
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
            'first_title.required' => 'This field Can\'t be Empty !',
            'second_title.required' => 'This field Can\'t be Empty !',
            'content.required' => 'This field Can\'t be Empty !',
            'image.required' => 'This field Can\'t be Empty !',
            'image.mimes' => 'Image Format must be (jpeg,jpg,png)',
            'author_id.required' => 'This field Can\'t be Empty !',
            'author_id.exists' => 'Author Must Be Exist !'
        ];
    }
}
