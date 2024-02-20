<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            SiteSeeder::class,
            RoleTableSeeder::class,
            UserTableSeeder::class
        ]);

        $sqlFiles = [
            public_path('backend/bangladeshsql/divisions.sql'),
            public_path('backend/bangladeshsql/districts.sql'),
            public_path('backend/bangladeshsql/upazilas.sql'),
        ];

        // Loop through SQL files and import them
        foreach ($sqlFiles as $file) {
            if (File::exists($file)) {
                DB::unprepared(File::get($file));
            }
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
