<?php

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker){
    return [
        'first_title'=> $faker->name,
        'second_title'=> $faker->name,
        'content'=> $faker->text,
        'image'=> $faker->image(),
        'author_id'=> $faker->numberBetween(1,3),
    ];
});

