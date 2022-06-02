<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('departments')->insert([
            [
                'id' => 1,
            'name' => "Reception",
            'no_of_staffs' => NULL,
            'created_at' => Carbon::now()
        ],

            [
                'id' => 2,
            'name' => "Nursing",
            'no_of_staffs' => NULL,
            'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
            'name' => "Laboratory",
            'no_of_staffs' => NULL,
            'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
            'name' => "Treatment",
            'no_of_staffs' => NULL,
            'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
            'name' => "Optical",
            'no_of_staffs' => NULL,
            'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
            'name' => "Radiology",
            'no_of_staffs' => NULL,
            'created_at' => Carbon::now()
            ],

         ],
       
    );
    }
}
