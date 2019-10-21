<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       factory(App\Item::class, 20)->create();
       factory(App\Customer::class, 10)->create();
       factory(App\Vendor::class, 10)->create();
    }
}
