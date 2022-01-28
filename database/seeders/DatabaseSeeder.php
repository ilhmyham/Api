<?php

namespace Database\Seeders;

use App\Models\Mentor;
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
        // \App\Models\User::factory(10)->create();
        Mentor::create([
            'nama_mentor' => 'Edy'
        ]);

        Mentor::create([
            'nama_mentor' => 'Ali'
        ]);
    }
}
