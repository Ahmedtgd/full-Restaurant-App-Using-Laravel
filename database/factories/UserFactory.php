<?php

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
/*
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'phone' =>$faker->phoneNumber, //phoneNumber <- for genrtaing the phone numbers prout from git hub rebo
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Product::class, function (Faker $faker) { //https://github.com/fzaninotto/Faker
    return [
              //'id'=>$faker->numberBetween($min = 1, $max = 20),
              'name'=> $faker->word,
              'description'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
              'price' => $faker->randomFloat($nbMaxDecimals = 100, $min = 1, $max = 10),
              'file' => $faker->imageUrl($width = 640, $height = 480),
              'fil' => $faker->imageUrl($width = 640, $height = 480),
    ];
});


$factory->define(App\Customer::class, function (Faker $faker) {
    return [
              //  'id'=>$faker->numberBetween($min = 1, $max = 20),
                'name'=>$faker->word,
                'email'=>$faker->unique()->safeEmail,
                'password'=>$faker->password,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
    ];
});

$factory->define(App\Card::class, function (Faker $faker) {
    $p_ids = App\Product::pluck('id')->toArray();
    $c_ids = App\Customer::pluck('id')->toArray();
    return [
               //'id'=>$faker->numberBetween($min = 1, $max = 20),
               'quantity'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
               'status'=>$faker->boolean($chanceOfGettingTrue = 10),
               'cid'=>$faker->randomElement($c_ids),
               'pid'=> $faker->randomElement($p_ids),
    ];
});

$factory->define(App\Order::class, function (Faker $faker) {

   $u_ids = App\User::pluck('id')->toArray();
   $p_ids = App\Product::pluck('id')->toArray();
   $c_ids = App\Customer::pluck('id')->toArray();
   return [

                'quantity'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'deliveryStatus'=>$faker->boolean($chanceOfGettingTrue = 50),
                'vehicle'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'uid'=> $faker->randomElement($u_ids),
                'cid'=>$faker->randomElement($c_ids),
                'pid'=> $faker->randomElement($p_ids),

    ];
});

$factory->define(App\Vehicle::class, function (Faker $faker) {


    $u_ids = App\User::pluck('id')->toArray();
    $o_ids = App\Order::pluck('id')->toArray();
    return [
              'status'=>$faker->boolean($chanceOfGettingTrue = 50),
              'vehicle_number'=>$faker->numberBetween($min = 1, $max = 20),
              'uid'=> $faker->randomElement($u_ids),
              'oid'=>$faker->randomElement($o_ids),
    ];
});
*/
