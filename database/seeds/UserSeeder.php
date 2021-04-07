<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'Byron Valdivieso',
        //     'email' => 'bgva@yahoo.com',
        //     'password' => Hash::make('12345678'),
        // ]);

        // DB::table('users') ->([
        //     'name' => 'Byron Valdivieso',
        //     'email' => 'bgva@yahoo.com',
        //     'password' => Hash::make('12345678'),
        // ]);

        $users = [
            [
                "name"=> 'Byron Valdivieso',
                "email"=> 'bgva@yahoo.com',
                "password"=> Hash::make('12345678'),
            ],
            [
                "name"=> 'usr_01',
                "email"=> 'usr_01@yahoo.com',
                "password"=> Hash::make('12345678'),
            ],
            [
                "name"=> 'usr_02',
                "email"=> 'usr_02@yahoo.com',
                "password"=> Hash::make('12345678'),
            ],
            [
                "name"=> 'usr_03',
                "email"=> 'usr_03@yahoo.com',
                "password"=> Hash::make('12345678'),
            ],
            [
                "name"=> 'usr_04',
                "email"=> 'usr_04@yahoo.com',
                "password"=> Hash::make('12345678'),
            ],
            [
                "name"=> 'usr_05',
                "email"=> 'usr_05@yahoo.com',
                "password"=> Hash::make('12345678'),
            ]
            ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
