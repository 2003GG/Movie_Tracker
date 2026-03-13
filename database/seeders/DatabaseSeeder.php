<?php

namespace Database\Seeders;

use App\Models\categorie;
use App\Models\Liste;
use App\Models\User;
use Database\Factories\CategorieFactory;
use Database\Factories\ListeFactory;
use Database\Factories\MovieFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategrieSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ListeSeeder::class,
            CategrieSeeder::class,
            MovieSeeder::class,

        ]);
        User::factory(10)->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
