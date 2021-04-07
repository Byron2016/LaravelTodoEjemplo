<?php

use Illuminate\Database\Seeder;
use App\Rol;
use App\User;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rol::class, 3)->create();
        
        foreach(Rol::all() as $rol){
            $users = User::inRandomOrder()->take(rand(1,6))->pluck('id');
            $rol->users()->attach($users);
        }
    }
}
