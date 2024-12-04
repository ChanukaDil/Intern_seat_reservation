<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Array of hardcoded user data
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => bcrypt('password123'), // Use bcrypt for hashing passwords
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'password' => bcrypt('securepass456'),
            ],
            [
                'name' => 'Bob Johnson',
                'email' => 'bobjohnson@example.com',
                'password' => bcrypt('mypassword789'),
            ],
        ];

        // Loop through each user and create them in the database
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
