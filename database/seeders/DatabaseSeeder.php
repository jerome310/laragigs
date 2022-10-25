<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Listing::factory(6)->create();

        // Listing::create([
        // 'title' => 'Laravel Senior Developer',
        // 'tags' => 'laravel, javascript',
        // 'company' => 'Acme Corp',
        // 'location' => 'Boston, MA',
        // 'email' => 'email1@email.com',
        // 'website' => 'https://www.acme.com',
        // 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic corporis cupiditate, asperiores facere, eum quaerat sed amet delectus enim illo repudiandae ratione similique numquam earum dignissimos perspiciatis voluptatibus nesciunt alias!'
        // ]);

        // Listing::create([
        // 'title' => 'Full-Stack Engineer',
        // 'tags' => 'laravel, backend, api',
        // 'company' => 'Stark Industries',
        // 'location' => 'New York, NY',
        // 'email' => 'email2@email.com',
        // 'website' => 'https://www.starkindustries.com',
        // 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci. Accusantium omnis reprehenderit, aliquid aliquam quo sunt error atque cupiditate placeat saepe magnam blanditiis inventore repudiandae vitae illo vel amet?'
        // ]);
    }
}
