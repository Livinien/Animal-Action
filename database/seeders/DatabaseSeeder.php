<?php

namespace Database\Seeders;
use App\Models\Animal;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Animal::factory(6)->create();

        // Animal::create([
        //     'owner' => 'Annie',
        //     'firstname' => 'Rex',
        //     'breed' => 'dog',
        //     'wound' => 'Rex broke his leg',
        //     'cure' => 'He will have to come for treatment before that he can no longer use his paw.'
        // ]);


        // Animal::create([
        //     'owner' => 'Juliette',
        //     'firstname' => 'Filou',
        //     'breed' => 'Cat',
        //     'wound' => 'lou has a problem with his left hearing.',
        //     'cure' => 'I\'ll have to come and check it out at our next appointment.',
        // ]);


    }
}
