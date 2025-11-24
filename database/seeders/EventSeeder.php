<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => '✏️ Essay Writing Competition',
                'description' => 'Showcase your creativity and writing skills in this exciting competition!',
                'for_classes' => 'Class 5th to 8th',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => '🎨 Drawing Competition',
                'description' => 'Unleash your creativity and color the world with your imagination!',
                'for_classes' => 'Class 1st to 8th',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => '🗣️ Debate Competition',
                'description' => 'Enhance your confidence and speaking skills — participate in the inter-class debate!',
                'for_classes' => 'Class 6th to 8th',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
