<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class articlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'title'=>'Artigo sobre pesca',
            'preview'=>'sinopse',
            'text'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ab mollitia laborum nihil! Quidem maiores earum vel sit suscipit eos nulla beatae, aperiam, qui eaque quibusdam quos nemo officia ipsa.',
            'autor'=>'Elvy',
            'date'=>'2024-02-09 19:38:00',
            'directory'=>'1707516000',
            'from_category'=>1
        ]);
    }
}
