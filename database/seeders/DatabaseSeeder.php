<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\PhoneNumber;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $customer = Customer::create([
            'uuid' => Str::uuid(),
            'name' => 'John Doe',
        ]);

        $newNumber = new PhoneNumber([
            'uuid' => Str::uuid(),
            'number' => '636-555-3226',
        ]);

        $customer->phoneNumbers()->save($newNumber);
    }
}
