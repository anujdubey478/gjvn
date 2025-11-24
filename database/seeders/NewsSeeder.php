<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = [
            [
                'title' => '📅 2nd Term Session Begins',
                'description' => 'October 6, 2025 — The second term session will start from Monday, October 6.',
                'published_date' => '2025-10-06',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => '🎓 New Session Based on NPA',
                'description' => 'The new academic session will follow updated NPA guidelines for improved learning.',
                'published_date' => '2025-10-01',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => '🗣️ Debate Competition',
                'description' => 'Coming soon for students of Class 7th and 8th — Get ready to express your views!',
                'published_date' => '2025-09-25',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => '🎨 Co-Curricular Activities',
                'description' => 'Exciting new activities for Nursery and KG students are coming soon!',
                'published_date' => '2025-09-20',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => '🖌️ Drawing Competition',
                'description' => 'All students are invited to participate in the upcoming drawing competition.',
                'published_date' => '2025-09-15',
                'order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($news as $item) {
            News::create($item);
        }
    }
}
