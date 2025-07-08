<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Revira - Support',
            'email' => 'support@revira.com',
            'email_verified_at' => Carbon::now(),
            'status' => 1,
            'password' => Hash::make('password'),
        ]);
    }
}
