<?php

namespace Database\Seeders;

use App\Models\SocialMediaLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        SocialMediaLink::truncate();

        // Seed new data with default URLs
        SocialMediaLink::create([
            'youTube' => 'https://youtube.com/@readyhomez?si=fM4dnLloTB8UHc5Z',
            'youTube_show' => true,

            'instagram' => 'https://www.instagram.com/ready_homez_?igsh=MWY3bmlzbHpsOWhvbw==&utm_source=ig_contact_invite',
            'instagram_show' => true,

            'facebook' => 'https://www.facebook.com/share/c6fdtLJrNcK9AGQc/',
            'facebook_show' => true,

            'linkedin' => 'https://www.linkedin.com/',
            'linkedin_show' => false,

            'twitter' => 'https://twitter.com/',
            'twitter_show' => false,
        ]);
    }
}
