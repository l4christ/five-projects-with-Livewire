<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $continents = [
            ['name' => 'Europe'],
            ['name' =>'Asia'],
            ['name' =>'Africa'],
            ['name' =>'South America'],
            ['name' =>'North America'],
        ];

        foreach ($continents as $continent) {
            \App\Models\Continent::factory()->create($continent)
            ->each(function ($c){
                $c->countries()->saveMany(Country::factory(10)->make());
            });
        }
    }
}
