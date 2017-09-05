<?php

use Faker\Generator as Faker;

$factory->define(ConfrariaWeb\CwSiteLaravel\Models\PostType::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'slug' => $faker->slug,
        'content' => $faker->text(),
    ];
});

$factory->define(ConfrariaWeb\CwSiteLaravel\Models\PostCategory::class, function (Faker $faker) {

    return [
        'post_type_id' => ConfrariaWeb\CwSiteLaravel\Models\PostType::inRandomOrder()->first()->id,
        'title' => $faker->title,
        'slug' => $faker->slug,
        'content' => $faker->text(),
    ];
});

$factory->define(ConfrariaWeb\CwSiteLaravel\Models\PostCategory::class, function (Faker $faker) {

    return [
        'user_id' => App\User::inRandomOrder()->first()->id,
        'post_category_id' => ConfrariaWeb\CwSiteLaravel\Models\PostCategory::inRandomOrder()->first()->id,
        'title' => $faker->title,
        'slug' => $faker->slug,
        'content' => $faker->text(),
    ];
});
