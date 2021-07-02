<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for ($i = 0; $i < 1000; $i++) {
        DB::table('staffs')->insert([
            'name'=>Str::random(10),
            'email'=>Str::random(4).'@gamil.com',
        ]);
    //}
    }
}
