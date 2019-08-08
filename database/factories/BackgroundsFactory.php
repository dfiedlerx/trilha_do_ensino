<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Background;

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

for ($i=0; $i<15; $i++)
{

    $factory->define(Background::class, function ($i) {
        return [
            'name' => $i . '.jpg',
        ];
    });

}
