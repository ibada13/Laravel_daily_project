<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Meadvices;
use App\Models\Achives;
use App\Models\BadThings;
use App\Models\GoodThings;
use App\Models\Extra;
use App\Models\objectives;
use App\Models\Rules;
use App\Models\SubTopics;
use App\Models\Toodo;
use App\Models\Topics;
use App\Models\Notes;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
// \App\Models\User::factory(10)->create();
            // Rules::factory(35)->create();
            // Objectives::factory(35)->create();
            // Meadvices::factory(random_int(15,50))->create();
        
            // $elm = Extra::factory(random_int(15,35))
            // ->has(BadThings::factory(random_int(2,10)))
            // ->has(GoodThings::factory(random_int(2,10)))
            // ->has(Achives::factory(random_int(2,10)))
            // ->has(Toodo::factory(random_int(2,10)))
            // ->create();
        Topics::factory(random_int(12,30))
        ->has(SubTopics::factory(random_int(5,10))
        ->has(Notes::factory(random_int(10,20))))->create();
    
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
