<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')-> insert([
            'description' => '',
            'skill1' => 'HTML',
            '%skill1' => 100,
            'skill2' => 'CSS',
            '%skill2' => 90,
            'skill3' => 'JavaScript',
            '%skill3' => 75,
            'skill4' => 'PHP',
            '%skill4' => 80,
            'skill5' => 'WordPress/CMS',
            '%skill5' => 90,
            'skill6' => 'Photoshop',
            '%skill6' => 55,
        ]);
    }
}
