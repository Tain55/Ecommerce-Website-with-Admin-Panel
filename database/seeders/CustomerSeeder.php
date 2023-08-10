<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customer;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/user.json');
        $customers = collect(json_decode($json));

        $customers->each(function($customer){
            DB::table('customers')->insert([
                'name' => $customer->name,
                'email' => $customer->email,
                'password' => Hash::make($customer ->password)
            ]);
            
        });
    }
}
