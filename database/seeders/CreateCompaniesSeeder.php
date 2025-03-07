<?php

namespace Database\Seeders;

use Faker\Provider\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CreateCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'comp_name' => 'wolf street',
                'address' => 'hai remal 2',

                'phone_num' => '0606993383',
                'logo' => 'logos/wolf.png',
            ],
            [
                'comp_name' => 'star not box',
                'address' => 'nouvelle ville 17',

                'phone_num' => '0606993383',
                'logo' => 'logos/star.png',
            ],
            [
                'comp_name' => 'untiltedlux',
                'address' => 'alharash rude 2',
                'phone_num' => '0606993383',
                'logo' => 'logos/untiltedlux.png',
            ],
        ];

        DB::table('companies')->insert($companies);
    }
}
