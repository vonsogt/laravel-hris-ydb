<?php

namespace Database\Seeders;

use App\Models\Appreciation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppreciationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appreciation::factory()->count(25)->create();
    }
}
