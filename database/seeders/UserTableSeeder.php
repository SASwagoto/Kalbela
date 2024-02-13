<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@news.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), //12345678
        ])->assignRole('Super-Admin');

        User::create([
            'name' => 'Editor',
            'email' => 'editor@news.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), //12345678
        ])->assignRole('Editor');
    }
}
