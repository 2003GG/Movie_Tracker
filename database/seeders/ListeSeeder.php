<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Liste;

class ListeSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Liste::factory(8)->create();
    }
}
