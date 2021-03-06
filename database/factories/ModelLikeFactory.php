<?php

use App\Model\Like;
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
$factory->define(App\Model\Like::class, function (Faker $faker) {

	$word = $faker->word;
    return [
    	'user_id' => function(){
    		return User::all()->random();
    	},
    ];
});
