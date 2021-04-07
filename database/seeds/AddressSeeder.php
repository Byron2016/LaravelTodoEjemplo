<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //guardar 20 registros
        // $arrays = range(0,5);
        // foreach ($arrays as $valor) {
        //     DB::table('addresses')->insert([

        //         'country' =>  Str::random(10),
        //     ]);
        // }

        $users = [
            [
                "user_id"=> 1,
                "country"=> 'a',
            ],
            [
                "user_id"=> 2,
                "country"=> 'b',
            ],
            [
                "country"=> 'c',
            ],
            ];

        foreach ($users as $user) {
            DB::table('addresses')->insert($user);
        }
    }
}
