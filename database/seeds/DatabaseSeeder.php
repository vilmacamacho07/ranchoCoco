<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'rol',
            'permissions',
            'user',
            'role_user'
            
            
        ]);
        $this->call(RolTableSeeder::class);
        // $this->call(PermissionsTableSeeder::class);
        $this->call(UserAdminSeeder::class);
        // $this->call(UserSeeder::class);
    }


    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
    
}