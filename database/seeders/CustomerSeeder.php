<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Database\Factories\CustomerFactory;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::factory(10)->create();
    }
}
