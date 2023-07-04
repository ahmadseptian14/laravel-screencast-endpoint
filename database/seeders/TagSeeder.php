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
<<<<<<< HEAD
        $tags   = collect([
            'Javascript', 'CSS', 'HTML', 'Laravel', 'React JS', 'Vue JS', 'Tailwind'
=======
        $tags = collect([
            'Javascript', 'PHP', 'HTML', 'CSS', 'Laravel', 'Lumen', 'Tailwind CSS', 'React', 'Vue'
>>>>>>> 7aedd114d72900b0a2f3fbb058ae4cf5e3b2f477
        ]);

        $tags->each(function ($tag) {
            Tag::create([
<<<<<<< HEAD
                'name'  => $tag,
                'slug'  => Str::slug($tag),
=======
                'name' => $tag,
                'slug' => Str::slug($tag),
>>>>>>> 7aedd114d72900b0a2f3fbb058ae4cf5e3b2f477
            ]);
        });
    }
}
