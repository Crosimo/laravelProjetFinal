<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'photo1' => 'assets/img/portfolio/portfolio-1.jpg',
            'photo2' => 'assets/img/portfolio/portfolio-2.jpg',
            'photo3' => 'assets/img/portfolio/portfolio-3.jpg',
            'photo4' => 'assets/img/portfolio/portfolio-4.jpg',
            'photo5' => 'assets/img/portfolio/portfolio-5.jpg',
            'photo6' => 'assets/img/portfolio/portfolio-6.jpg',
            'photo7' => 'assets/img/portfolio/portfolio-7.jpg',
            'photo8' => 'assets/img/portfolio/portfolio-8.jpg',
            'photo9' => 'assets/img/portfolio/portfolio-9.jpg',
        ]);
    }
}
