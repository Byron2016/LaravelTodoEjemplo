<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                "user_id"=> 1,
                "comentario"=> 'a',
            ],
            [
                "user_id"=> 2,
                "comentario"=> 'b',
            ],
            [
                "comentario"=> 'c',
            ],
            ];

        foreach ($comments as $comment) {
            DB::table('comments')->insert($comment);
        }
    }
}
