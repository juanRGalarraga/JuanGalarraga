<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        for( $i=0; $i<50; $i++ ){
            DB::table("items")->insert([
                "item" => "Un item",
                "unidad" => "m2",
                "cantidad" => 23,
                "importe_materiales" => 2300.30,
                "importe_mano_obra" => 200.30,
                "total" => 2500.60,
                ]);
            }
        }
}
