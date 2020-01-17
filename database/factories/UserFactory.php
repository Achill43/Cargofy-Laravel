<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Room;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->defineAs(Room::class, 'room', function(Faker $faker){
    return [
        [
            'name'=> 'The Victoria',
            'price'=>374662,
            'bedroom'=>4,
            'bathrooms'=>2,
            'storeys'=>2,
            'garages'=>2,
        ],
        [
            'name'=> 'The Xavier',
            'price'=>513268,
            'bedroom'=>4,
            'bathrooms'=>2,
            'storeys'=>1,
            'garages'=>2,
        ],
        [
            'name'=> 'The Como',
            'price'=>454990,
            'bedroom'=>4,
            'bathrooms'=>3,
            'storeys'=>2,
            'garages'=>3,
        ],
        [
            'name'=> 'The Aspen',
            'price'=>384356,
            'bedroom'=>4,
            'bathrooms'=>2,
            'storeys'=>2,
            'garages'=>2,
        ],
        [
            'name'=> 'The Lucretia',
            'price'=>572002,
            'bedroom'=>4,
            'bathrooms'=>3,
            'storeys'=>2,
            'garages'=>2,
        ],
        [
            'name'=> 'The Toorak',
            'price'=>521951,
            'bedroom'=>5,
            'bathrooms'=>2,
            'storeys'=>1,
            'garages'=>2,
        ],
        [
            'name'=> 'The Skyscape',
            'price'=>263604,
            'bedroom'=>3,
            'bathrooms'=>2,
            'storeys'=>2,
            'garages'=>2,
        ],
        [
            'name'=> 'The Clifton',
            'price'=>386103,
            'bedroom'=>3,
            'bathrooms'=>2,
            'storeys'=>1,
            'garages'=>1,
        ],
        [
            'name'=> 'The Geneva',
            'price'=>390600,
            'bedroom'=>4,
            'bathrooms'=>3,
            'storeys'=>2,
            'garages'=>2,
        ],
    ];
});
