<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminRole = Role::where('code', 'admin')->first();

        User::create([
            'name' => 'Admin EVENT',
            'email' => 'admin@event.com',
            'password' => Hash::make('12345678'), 
            'roles_id' => $adminRole->id,
        ]);

    }
}
