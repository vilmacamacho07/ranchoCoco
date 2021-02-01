<?php
use Carbon\Carbon; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $date = Carbon::now();}
       
        $rol=[
            'administrador',
            'estandar',
            'visor'
        ];
        
        foreach($rol as $key=> $value){
            DB::table('rol')->insert([
                'name' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        
            ]);
        }
    }
}
      