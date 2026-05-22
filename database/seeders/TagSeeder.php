<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'cheesecake', 'raspberry', 'bars', 'dessert',
            'cocktail', 'sidecar', 'brandy', 'classic',
            'leeks', 'lentils', 'braised', 'yogurt',
            'black bean', 'salad', 'confetti', 'spring',
            'green beans', 'haricot vert', 'shallots'
        ];

        foreach ($tags as $tagName) {
            Tag::updateOrCreate(
                ['slug' => $tagName],
                ['title' => $tagName]
            );
        }
    }
}