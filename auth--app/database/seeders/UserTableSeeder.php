<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,1000) as $index){
            DB::table('users')->insert([
                'name' => Str::random(5),
                'email' => Str::random(5).'@gmail.com',
                'password' => '12345678'
            ]);
        }
    }
}
