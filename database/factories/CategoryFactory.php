<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //CREATE FAKER DATA FOR THE EXACT COLUMNS WE HAVE
        'title'=> $faker->sentence(rand(2, 3), true),
        'description'=>$faker->words(rand(5, 7), true),
        'slug' =>$faker->unique()->slug,
        'created_at' =>now(),
        'updated_at' =>now()

    ];
});
