<?php

namespace App\Http\Requests\Article;

use Pearl\RequestValidate\RequestAbstract;

class ArticleUpdateRequest extends RequestAbstract
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
            'image' => 'mimes:jpeg,jpg,png',
            'author_id' => 'exists:authors,id'
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
            'image.mimes' => 'Image Format must be (jpeg,jpg,png)',
            'author_id.exists' => 'Author Must Be Exist !'
        ];
    }
}
