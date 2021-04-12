<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Auto;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auto::factory(20)->create();
    }
}
