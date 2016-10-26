<?php

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->freeEmail,
        'password' => bcrypt('qweasd123'),
        'remember_token' => str_random(10),
        'role' => $faker->randomElement(['admin', 'member'])
    ];
});


$factory->define(App\Book::class, function(Faker\Generator $faker) {
	 return [
	 	'title' => $faker->text($maxNbChars = 30),
	 	'author' => $faker->name,
	 	'category_id' => $faker->randomElement(\DB::table('categories')->pluck('id')->toArray()),
	 	'description' => $faker->text($maxNbChars = 200),
	 	'published_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
	 	'cover' => $faker->imageUrl($width = 480, $height = 640),
	 	'stock' => rand(3, 10),
	 	'who_insert' => $faker->randomElement(\DB::table('users')->where('role', 'admin')->pluck('id')->toArray()),
	 	'created_at' => \Carbon\Carbon::now()  ,
	 	'updated_at' => \Carbon\Carbon::now()
	 ];
});