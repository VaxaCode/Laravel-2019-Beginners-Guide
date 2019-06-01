<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Job;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        //CREATE FAKER DATA FOR THE EXACT COLUMNS WE HAVE
        'posted_by' =>rand(1, 3),
        'job_title' =>$faker->sentence(rand(5, 7)),
        'job_type' =>$faker->word(rand(5, 7)),
        'description' =>$faker->paragraphs(rand(5, 7), true),
        'salary' =>$faker->numberBetween(660, 1290),
        'slug' =>$faker->unique()->slug,
        'category_id' =>rand(1, 6),
        'created_at' =>now(),
        'updated_at' =>now()
    ];
});
