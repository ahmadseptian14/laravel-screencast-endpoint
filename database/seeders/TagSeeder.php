<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Screencast\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags   = collect([
            'Javascript', 'CSS', 'HTML', 'Laravel', 'React JS', 'Vue JS', 'Tailwind'
        ]);

        $tags->each(function ($tag) {
            Tag::create([
                'name'  => $tag,
                'slug'  => Str::slug($tag),
            ]);
        });
    }
}
