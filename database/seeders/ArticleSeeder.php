<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [];
        for ($i = 1; $i <= 50; $i++) {
            $articles[] = [
                'title' => 'Bài viết số ' . $i,
                'body' => 'Nội dung của bài viết số ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('articles')->insert($articles);
    }
}
