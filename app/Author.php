<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";
    protected $fillable = ["name", "email", "location", "github", "twitter", "last_published"];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function latestBook()
    {
        return $this->hasOne(Article::class, "last_published")->latest();
    }
}
