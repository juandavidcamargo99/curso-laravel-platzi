<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ExpenseReport;
use Faker\Generator as Faker;

$factory->define(ExpenseReport::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4, true),
        'valor' => $faker->numberBetween(1000,9000),
    ];
});
