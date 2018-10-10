<?php

use App\Model\Category;
use App\User;
use Faker\Generator as Faker;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\Question::class, function (Faker $faker) {

	$title = $faker->sentence(5);
    return [
        'title' => $title,
        'slug'  => str_slug($title),
        'body'	=> $faker->text,
        'category_id' => function(){
        	return Category::all()->random();
        },

        'user_id' => function(){
        	return User::all()->random();
        },
    ];
});
