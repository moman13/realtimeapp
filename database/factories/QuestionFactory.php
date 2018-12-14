<?php
use App\User;
use App\Model\Category;
use App\Model\Question;
use App\Model\Reply;
use App\Model\Like;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
  $title = $faker->sentence;

    return [
          'title'=>$title,
          'slug'=>str_slug($title),
          'body'=>$faker->text,
          'category_id'=>function(){
            return Category::all()->random();

          },
          "user_id"=>function(){
            return User::all()->random();
          }

    ];
});
