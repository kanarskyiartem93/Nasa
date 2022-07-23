<?php

namespace Database\Seeders;

use App\Models\NearEarthObject;
use Illuminate\Database\Seeder;

class NearEarthObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NearEarthObject::factory()->count(100)->create();
    }
}
