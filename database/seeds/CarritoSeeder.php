<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CarritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // DB::table('carritos')->insert([
        //     'title' =>  Str::random(10),
        //     'precio' => rand(10, 99),
        //     'cantidadExistente' => rand(10, 99),
        //     'cantidadComprometida' => rand(1, 9),
        //     'thumbnailUrl' => Str::random(10),
        // ]);
        //guardar 20 registros
        // $arrays = range(0,20);
        // foreach ($arrays as $valor) {
        //     DB::table('carritos')->insert([
        //         'title' =>  Str::random(10),
        //         'precio' => rand(10, 99),
        //         'cantidadExistente' => rand(10, 99),
        //         'cantidadComprometida' => rand(1, 9),
        //         'thumbnailUrl' => Str::random(10),
        //     ]);
        // }

        // DB::table('carritos')->insert(
        // [
        //     "precio" => 500,
        //     "title" => "Café",
        //     "thumbnailUrl" => "http://picsum.photos/id/0/600",
        //     'cantidadExistente' => rand(10, 99),
        //     'cantidadComprometida' => rand(1, 9),
        // ],
        // [
        //     "precio" => 300,
        //     "title" => "Pizza",
        //     "thumbnailUrl" => "http://picsum.photos/id/10/600",
        //     'cantidadExistente' => rand(10, 99),
        //     'cantidadComprometida' => rand(1, 9),
        // ]);
        $users = [
            [
                "precio"=> 500,
                "id"=> 1,
                "title"=> "Café",
                "thumbnailUrl"=> "https://picsum.photos/id/0/100",
                //"thumbnailUrl"=> "https://picsum.photos/300?random=1",
                'cantidadExistente' => rand(10, 15),
                'cantidadComprometida' => rand(1, 9),
            ],
            [
                "precio"=> 300,
                "id"=> 2,
                "title"=> "Pizza",
                "thumbnailUrl"=> "https://picsum.photos/id/10/100",
                //"thumbnailUrl"=> "https://picsum.photos/300?random=2",
                'cantidadExistente' => rand(10, 15),
                'cantidadComprometida' => rand(1, 9),
            ],
            [
                "precio"=> 100,
                "id"=> 3,
                "title"=> "Agua",
                "thumbnailUrl"=> "https://picsum.photos/id/20/100",
                //"thumbnailUrl"=> "https://picsum.photos/seed/picsum/300",
                'cantidadExistente' => rand(10, 15),
                'cantidadComprometida' => rand(1, 9),
            ],
            [
                "precio"=> 50,
                "id"=> 4,
                "title"=> "Sandía",
                "thumbnailUrl"=> "https://picsum.photos/id/30/100",
                //"thumbnailUrl"=> "https://picsum.photos/seed/picsum/300",
                'cantidadExistente' => rand(10, 15),
                'cantidadComprometida' => rand(1, 9),
            ],
            [
                "precio"=> 10,
                "id"=> 5,
                "title"=> "Mango",
                "thumbnailUrl"=> "https://picsum.photos/id/40/100",
                //"thumbnailUrl"=> "https://picsum.photos/seed/picsum/300",
                'cantidadExistente' => rand(10, 15),
                'cantidadComprometida' => rand(1, 9),
            ],
            [
                "precio"=> 150,
                "id"=> 6,
                "title"=> "Chela",
                "thumbnailUrl"=> "https://picsum.photos/id/50/100",
                //"thumbnailUrl"=> "https://picsum.photos/seed/picsum/300",
                'cantidadExistente' => rand(10, 15),
                'cantidadComprometida' => rand(1, 9),
            ]
            ];

        foreach ($users as $user) {
            DB::table('carritos')->insert($user);
        }
    }
}
