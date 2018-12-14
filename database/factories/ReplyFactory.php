<?php
use App\User;
use App\Model\Category;
use App\Model\Question;
use App\Model\Reply;
use App\Model\Like;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body'=>$faker->text,
        'question_id'=>function(){
          return Question::all()->random();
        },
        'user_id'=>function(){
          return User::all()->random();
        }
    ];
});
