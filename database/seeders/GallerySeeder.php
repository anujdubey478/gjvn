<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Activity images
        $activityImages = [
            '01.jpeg', '02.jpeg', '03.jpeg', '04.jpeg', '05.jpeg', 
            '15.jpeg', '16.jpeg', '17.jpeg', 'act10.jpeg'
        ];

        $order = 1;
        foreach ($activityImages as $image) {
            $sourcePath = public_path('template/image/Activity/' . $image);
            if (File::exists($sourcePath)) {
                // Copy to storage
                $destinationPath = 'gallery/' . $image;
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                
                Gallery::create([
                    'title' => 'Activity Image ' . $order,
                    'image' => $destinationPath,
                    'category' => 'Activity',
                    'order' => $order++,
                    'is_active' => true,
                ]);
            }
        }

        // Pradarsani images
        $pradarsaniImages = [
            'image10.jpeg', '01.jpeg', '02.jpeg', '03.jpeg', '04.jpeg'
        ];

        $order = 1;
        foreach ($pradarsaniImages as $image) {
            $sourcePath = public_path('template/image/Pradarsani/' . $image);
            if (File::exists($sourcePath)) {
                // Copy to storage
                $destinationPath = 'gallery/' . $image;
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                
                Gallery::create([
                    'title' => 'Pradarsani Image ' . $order,
                    'image' => $destinationPath,
                    'category' => 'Pradarsani',
                    'order' => $order++,
                    'is_active' => true,
                ]);
            }
        }

        // Art images
        $artImages = [
            '01.jpeg', 'art6.jpeg', 'art4.jpeg', '02.jpeg', '03.jpeg'
        ];

        $order = 1;
        foreach ($artImages as $image) {
            $sourcePath = public_path('template/image/Art/' . $image);
            if (File::exists($sourcePath)) {
                // Copy to storage
                $destinationPath = 'gallery/' . $image;
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                
                Gallery::create([
                    'title' => 'Art Image ' . $order,
                    'image' => $destinationPath,
                    'category' => 'Art',
                    'order' => $order++,
                    'is_active' => true,
                ]);
            }
        }
    }
}
