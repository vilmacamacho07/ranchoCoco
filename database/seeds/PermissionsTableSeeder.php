<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     * @return void
     */
    public function run()
    {
        //
        factory(Permission::class,3)->create();
    }
}
