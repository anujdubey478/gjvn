<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topper;

class TopperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toppers = [
            ['class_name' => 'Nursery', 'first_rank_name' => 'Aanvi Kumari', 'second_rank_name' => 'Rudra', 'third_rank_name' => 'Radhika Kumari', 'order' => 1],
            ['class_name' => 'K.G', 'first_rank_name' => 'S. Ritheesh', 'second_rank_name' => 'Shivanya Dubey', 'third_rank_name' => 'Faizan', 'order' => 2],
            ['class_name' => '1st', 'first_rank_name' => 'Mahenoor', 'second_rank_name' => 'Rajveer', 'third_rank_name' => 'Arshlaan', 'order' => 3],
            ['class_name' => '2nd', 'first_rank_name' => 'Vansh', 'second_rank_name' => 'Chetan', 'third_rank_name' => 'Sandhya', 'order' => 4],
            ['class_name' => '3rd', 'first_rank_name' => 'Rohit Haldar', 'second_rank_name' => 'Tanmay', 'third_rank_name' => 'Partik Mathur', 'order' => 5],
            ['class_name' => '4th', 'first_rank_name' => 'Arhaan', 'second_rank_name' => 'Tejas', 'third_rank_name' => 'Ida', 'order' => 6],
            ['class_name' => '5th', 'first_rank_name' => 'Yashvi', 'second_rank_name' => 'Priyanshu', 'third_rank_name' => 'Arushi', 'order' => 7],
            ['class_name' => '6th', 'first_rank_name' => 'Rashmi', 'second_rank_name' => 'Arushi', 'third_rank_name' => 'Srishti', 'order' => 8],
            ['class_name' => '7th', 'first_rank_name' => 'Tanishka', 'second_rank_name' => 'Divyansh', 'third_rank_name' => 'Kanisk', 'order' => 9],
            ['class_name' => '8th', 'first_rank_name' => 'Laxmi', 'second_rank_name' => 'Laksh', 'third_rank_name' => 'Siddhi', 'order' => 10],
        ];

        foreach ($toppers as $topper) {
            Topper::create(array_merge($topper, ['is_active' => true]));
        }
    }
}
