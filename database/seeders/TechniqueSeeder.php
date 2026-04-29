<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technique;

class TechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technique::create([
            'title' => 'Box Breathing',
            'category' => 'breathing',
            'description' => 'A tactical tool to reset the nervous system. Four seconds in, four hold, four out, four hold.',
            'duration_mins' => 5,
            'min_stress' => 4,
            'max_stress' => 10,
        ]);

        Technique::create([
            'title' => 'The Ocean Floor Breath',
            'category' => 'meditation',
            'description' => 'Deepen your focus by visualizing the stillness of the deep sea while maintaining rhythmic tidal breathing patterns.',
            'duration_mins' => 20,
            'min_stress' => 1,
            'max_stress' => 6,
        ]);

        Technique::create([
            'title' => 'Body Scan Release',
            'category' => 'physical',
            'description' => 'Progressively relax every muscle group from your crown to your toes, releasing stored tension.',
            'duration_mins' => 15,
            'min_stress' => 5,
            'max_stress' => 10,
        ]);

        Technique::create([
            'title' => 'Gratitude Flow',
            'category' => 'journaling',
            'description' => 'A guided prompt series to help you identify the subtle moments of beauty in your daily landscape.',
            'duration_mins' => 10,
            'min_stress' => 1,
            'max_stress' => 5,
        ]);

        Technique::create([
            'title' => 'The Morning Sun Salutation',
            'category' => 'physical',
            'description' => 'A vibrant physical sequence to awaken the spirit and align the body\'s energy channels with the day ahead.',
            'duration_mins' => 15,
            'min_stress' => 1,
            'max_stress' => 7,
        ]);

        Technique::create([
            'title' => '4-7-8 Ritual',
            'category' => 'breathing',
            'description' => 'The classic "natural tranquilizer" for the nervous system, ideal for evening relaxation and sleep prep.',
            'duration_mins' => 8,
            'min_stress' => 6,
            'max_stress' => 10,
        ]);

    }
}
