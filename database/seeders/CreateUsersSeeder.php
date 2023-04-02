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
                'password'=> bcrypt('hakimad123'),
            ],
            [
                'name'=>'steam',
                'last_name'=>'din',
                'email'=>'steam@gmail.com',
                'type'=> 2,
                'password'=> bcrypt('hakimad123'),
            ],
            [
                'name'=>'Hakim',
                'last_name'=>'rebbouh',
                'email'=>'abdelhakim.rebbouh@univ-constantine2.dz',
                'type'=>0,
                'password'=> bcrypt('hakimad123'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
