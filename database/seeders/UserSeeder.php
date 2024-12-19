<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'password' => bcrypt('password')],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => bcrypt('password')],
            ['name' => 'Bob Brown', 'email' => 'bob@example.com', 'password' => bcrypt('password')],
            // Tambahkan pengguna lainnya...
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
