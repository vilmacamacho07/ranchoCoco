<?php

use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name'=>'Vilma',
            'lastname' => 'Camacho',
            'username' => 'ranchoad',
            'password' =>Hash::make('pass123')
        ]);

        DB::table('user')->insert([
            'name'=>'Juanito',
            'lastname' => 'Cocos',
            'username' => 'est',
            'password' =>Hash::make('pass123')
        ]);
        
        DB::table('user')->insert([
            'name'=>'Daniela',
            'lastname' => 'Cocos',
            'username' => 'vis',
            'password' =>Hash::make('pass123')
        ]);

         
        DB::table('role_user')->insert([
            'rol_id'  => 1,
            'user_id' => 1,
            'estado'  => 1
        ]);

         DB::table('role_user')->insert([
            'rol_id'  => 2,
            'user_id' => 2,
            'estado'  => 1
        ]);

        DB::table('role_user')->insert([
            'rol_id'  => 3,
            'user_id' => 3,
            'estado'  => 1
        ]);   
    }
}
