<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\User;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contador = 0;
        factory(Project::class, 10)->create();
        foreach(Project::all() as $project){
            //$users = User::inRandomOrder()->take(rand(1,6))->pluck('id');
            //$project->users()->attach($users);
            //echo 'contador es: '.$contador++;
            $users = User::inRandomOrder()->take(rand(1,6))->pluck('id');
            //echo $users;
            $project->users()->attach($users);
        }
    }
}
