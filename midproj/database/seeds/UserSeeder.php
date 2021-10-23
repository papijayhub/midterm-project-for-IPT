<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'lname'=>'Calamba',
            'fname'=>'Jay',
            'address'=>'Matabao, Tubigon, Bohol',
            'phone'=>'09103329678',
            'email'=>'jaycalambapogi@gmail.com',
            'password'=>bcrypt('password111')
        ],
        [
            'lname'=>'Montefalco',
            'fname'=>'Yumi',
            'address'=>'Pooc, Tubigon, Bohol',
            'phone'=>'0910990443',
            'email'=>'twerktwerk@gmail.com',
            'password'=>bcrypt('password211')
        ],
        [
            'lname'=>'Marcos',
            'fname'=>'Bongbong',
            'address'=>'White House',
            'phone'=>'09390329575',
            'email'=>'kanbunsenteknik@gmail.com',
            'password'=>bcrypt('password211')
        ],
    ];

    foreach($data as $usr) {
        \App\User::create($usr);
    }
    }
}
