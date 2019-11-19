<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\FirstModel;
use App\ProdukModel;
use App\PelangganModel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(FirstModel::class, function (Faker $faker) {
    return [
        'nama_kategori' => $faker->name,
    ];
});

$factory->define(ProdukModel::class, function(Faker $faker){
	return[
		'id_kategori' => $faker->numberBetween(1,3),
		'nama' => $faker->name,
		'harga' => $faker->randomNumber,
	];
});

$factory->define(PelangganModel::class, function(Faker $faker){
	return[
		'nama' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'no_hp' => $faker->phoneNumber,
		'alamat' => $faker->address,
	];
});