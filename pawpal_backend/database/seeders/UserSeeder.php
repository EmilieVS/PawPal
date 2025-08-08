<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'Jean',
                'last_name' => 'Dupont',
                'post_code' => 59000,
                'phone_number' => 601234567,
                'email' => 'jean.dupont@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Marie',
                'last_name' => 'Martin',
                'post_code' => 75001,
                'phone_number' => 612345678,
                'email' => 'marie.martin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Pierre',
                'last_name' => 'Durand',
                'post_code' => 69001,
                'phone_number' => 623456789,
                'email' => 'pierre.durand@example.com',
                'email_verified_at' => null,
                'password' => Hash::make('password123'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Sophie',
                'last_name' => 'Bernard',
                'post_code' => 13001,
                'phone_number' => 634567890,
                'email' => 'sophie.bernard@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'guardian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Lucas',
                'last_name' => 'Moreau',
                'post_code' => 33000,
                'phone_number' => 645678901,
                'email' => 'lucas.moreau@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Julie',
                'last_name' => 'Leroy',
                'post_code' => 44000,
                'phone_number' => 656789012,
                'email' => 'julie.leroy@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Thomas',
                'last_name' => 'Roux',
                'post_code' => 69007,
                'phone_number' => 667890123,
                'email' => 'thomas.roux@example.com',
                'email_verified_at' => null,
                'password' => Hash::make('password123'),
                'role' => 'guardian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Emma',
                'last_name' => 'Fournier',
                'post_code' => 31000,
                'phone_number' => 678901234,
                'email' => 'emma.fournier@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Antoine',
                'last_name' => 'Girard',
                'post_code' => 86000,
                'phone_number' => 689012345,
                'email' => 'antoine.girard@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Camille',
                'last_name' => 'Bonnet',
                'post_code' => 21000,
                'phone_number' => 690123456,
                'email' => 'camille.bonnet@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($users);
    }

}
