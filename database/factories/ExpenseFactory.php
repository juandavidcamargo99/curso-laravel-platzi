<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Expense;
use Faker\Generator as Faker;

$factory->define(Expense::class, function (Faker $faker) {
    return [
        'expense_report_id' => $faker->numberBetween(1,5),
        'amount' => $faker->randomFloat(2, 1000, 9000),
        'description' => $faker->text(150)
    ];
});
