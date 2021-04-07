<?php

use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('phones')->insert([
        //     'phone' => 'Byron Valdivieso',
        // ]);

        //guardar 20 registros
        $arrays = range(0,20);
        foreach ($arrays as $valor) {
            DB::table('phones')->insert([
                'phone' =>  Str::random(10),
            ]);
        }
    }
}
