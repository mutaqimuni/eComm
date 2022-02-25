<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //type apa2 dummy data. 
        // 1 import database file dulu DB kat ata
        // 2 import hash untuk encrypt data
        // 3 witer function

        DB::table('users')->insert([
            'name'=>'Peter Parker',
            'email'=>'spidey@getnada.com',
            'password'=>Hash::make('12345')

        ]);


    }
}
