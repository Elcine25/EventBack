<?php

namespace Database\Seeders;
use App\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tab=[
            [
                "name"=>"Administrateur",
                "code"=>"admin",
            ],
            [
                "name"=>"Visiteur",
                "code"=>"visitor",
            ],
            

        ];
        foreach($tab as $item){
            Role::updateOrCreate(
            [
                'code'=>$item["code"]

            ],
            $item
        );
        }
    }
}
