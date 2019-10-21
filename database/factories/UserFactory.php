<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;
use App\Item;
use App\Salesorder;
use App\Vendor;

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

$factory->define(Item::class, function (Faker $faker)
        {
    return[
        'name' => $faker->name,
        'item_type' => function ()
         {
            $items = ['fragile', 'edible','breakable', 'fancy', 'hardware'];
            return $items [rand(0, 4)]; 
        },
        'sku' => function(){
            $units = ['gallons', 'dozen', 'litres', 'ounce', 'yards'];
            return $units[rand(0, 4)];
        },
        'unit' => function(){
            $units = ['gallons', 'dozen', 'litres', 'ounce', 'yard'];
            return $units[rand(0, 4)];
        },
        'description' => $faker->sentence,
    ];
});

$factory->define(Customer::class, function (Faker $faker)
    {
        return[
            'name' => $faker->name,
            'company_name' => $faker->company,
            'email' => $faker->companyEmail,
            'phone_number' => $faker->phoneNumber,
            'address' => $faker->address,
            'city' => $faker->city,
            'state' => $faker->city,
        ];
}
);

$factory->define(Vendor::class, function (Faker $faker)
{
    return [
        'name' => $faker->name,
        'company_name' => $faker->company,
        'email' => $faker->companyEmail,
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->city,
    ];
});

$factory->define(Salesorder::class, function (Faker $faker)
{
    return [
        'customer_id' => Customer::all()->random()->id,
        'sales_order' => $faker->word,
        'reference' => $faker->word,
        'order_date' => $faker->date,
        'shipment_date' => $faker->date,
        'user_id' => User::all()->random()->id,
        'package_id'=>Package::all()->random()->id
    ]
})