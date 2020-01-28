<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Task;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => 'task'.$faker->word,
        'description' => 'taskDesc'.$faker->sentence
    ];
});
