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
     *
     * @return void
     */
    public function run()
    {
        $admin = User::query()
            ->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'is_admin' => true
            ]);
        $admin->cart()->create();

        $user1 = User::query()
            ->create([
                'name' => 'Koyoi',
                'email' => 'member@member.com',
                'password' => Hash::make('password'),
            ]);

        $user1->cart()->create();
    }
}
