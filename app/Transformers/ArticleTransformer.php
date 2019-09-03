<?php

namespace App\Transformers;

use App\Article;
use Flugg\Responder\Transformers\Transformer;

class ArticleTransformer extends Transformer
{
    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = [
        'Author' => AuthorTransformer::class,
    ];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param  \App\Article $article
     * @return array
     */
    public function transform(Article $article)
    {
        return [
            'ID' => (int) $article->id,
            'First Title' => $article->first_title,
            'Second Title' => $article->second_title,
            'Content' => $article->content,
            'Image' => $article->image,
        ];
    }
}
