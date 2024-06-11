<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'description'=>'esto es la primera taska',
            'dateEvent'=>'2024-04-07',
            'id_user'=>1

        ]);
        DB::table('tasks')->insert([
            'description'=>'esto es la segunda taska',
            'dateEvent'=>'2023-04-07',
            'id_user'=>1

        ]);


    }
}
