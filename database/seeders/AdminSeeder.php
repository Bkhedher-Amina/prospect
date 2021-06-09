<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'cin'  =>'09893658',
            'name' => 'Admin',
            'email' => 'amina@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('adminpassword'),
            'is_admin' => 1,
            'approved_at' => now(),
            ]);
    }
}
