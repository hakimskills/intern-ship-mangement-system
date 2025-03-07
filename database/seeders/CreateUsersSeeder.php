<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'Amar',
                'last_name'=>'bouzida',
                'email'=>'amar@gmail.com',
                'type'=>1,
                'id_dep'=>1,
                'password'=> bcrypt('hakimad123'),
            ],
            [
                'name'=>'zinedine',
                'last_name'=>'rebbouh',
                'email'=>'steam@gmail.com',
                'type'=> 2,
                'company_id'=>'1',
                'password'=> bcrypt('hakimad123'),
            ],
            [
                'name'=>'samy',
                'last_name'=>'rebbouh',
                'email'=>'steam2@gmail.com',
                'type'=> 2,
                'company_id'=>'2',
                'password'=> bcrypt('hakimad123'),
            ],
            [
                'name'=>'Alaa',
                'last_name'=>'Bourggaa',
                'email'=>'steam3@gmail.com',
                'type'=> 2,
                'company_id'=>'3',
                'password'=> bcrypt('hakimad123'),
            ],
            [
                'name'=>'saddik',
                'last_name'=>'rebbouh',
                'email'=>'steam4@gmail.com',
                'type'=> 2,
                'company_id'=>'2',
                'password'=> bcrypt('hakimad123'),
            ],
            [
                'name'=>'Hakim',
                'last_name'=>'rebbouh',
                'email'=>'abdelhakim.rebbouh@univ-constantine2.dz',
                'type'=>0,
                'password'=> bcrypt('hakimad123'),
            ],
            [
                'name'=>'Nabil',
                'last_name'=>'belalaa',
                'email'=>'nabil@gmail.com',
                'type'=>1,
                'id_dep'=>3,
                'password'=> bcrypt('hakimad123'),
            ],
            [
                'name'=>'redoun',
                'last_name'=>'nouara',
                'email'=>'redoun@gmail.com',
                'type'=>1,
                'id_dep'=>2,
                'password'=> bcrypt('hakimad123'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
