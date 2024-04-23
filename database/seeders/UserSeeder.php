<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $role = Role::whereCode("admin")->first();
        $tab=[
            [
                "name"=>"Admin EVENT",
                "email"=>"adnmin@event.com",
                "password"=>bcrypt("12345678"),
                // "roles_id"=>1,
            ]
        ];
        foreach($tab as $item){
            User::UpdateOrCreate(
                [
                    "email"=>$item["email"]
                ],
                $item
            );
            
        }
    }
}
