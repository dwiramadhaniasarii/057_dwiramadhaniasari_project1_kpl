<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
                'name' => 'Dwirmdsari',
                'email' => 'dwirmdsari@gmail.com',
                'role' => 'manager',
                'password' => bcrypt('12345678')
            ],[
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin')
            ],[
                'name' => 'Tiyok',
                'email' => 'tiyok@gmail.com',
                'role' => 'pegawai',
                'password' => bcrypt('anthony')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
