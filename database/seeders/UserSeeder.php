<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin TE 2020',
            'email' => 'teknikelektro20@unmul.com',
            'phone' => '081234567890',
            'password' => Hash::make('admin'),
            'role' => Role::ADMIN->status(),
        ]);
    }
}
