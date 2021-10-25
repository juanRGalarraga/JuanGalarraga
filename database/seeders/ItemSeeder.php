<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run(){
        Item::factory(20)->create();
    }
}
