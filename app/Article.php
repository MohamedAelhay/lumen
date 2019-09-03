<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = ["first_title", "second_title", "content", "image", "author_id"];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
