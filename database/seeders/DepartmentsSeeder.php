<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['name_dep' => 'IFA'],
            ['name_dep' => 'TLSI'],
            ['name_dep' => 'MI'],
            // Add more departments as needed
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
