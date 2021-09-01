<?php

namespace Database\Seeders;

use Facade\Ignition\Support\FakeComposer;
use Faker\Factory;
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
            'description' =>"",
            'skill1' => 'HTML',
            'pourcent_skill1' => 100,
            'skill2' => 'CSS',
            'pourcent_skill2' => 90,
            'skill3' => 'JavaScript',
            'pourcent_skill3' => 75,
            'skill4' => 'PHP',
            'pourcent_skill4' => 80,
            'skill5' => 'WordPress/CMS',
            'pourcent_skill5' => 90,
            'skill6' => 'Photoshop',
            'pourcent_skill6' => 55,
        ]);
    }
}
