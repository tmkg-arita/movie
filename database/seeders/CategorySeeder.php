<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                 'name' => 'ベビーファッション',
                 'sort_order' => 1,

            ],
            [
                 'name' => 'ヘルスケア・衛生用品',
                 'sort_order' => 2,

           ],
           [
                 'name' => 'マタニティ・ママ用品',
                 'sort_order' => 3,

       ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                 'name' => 'カバーオール・ロンパース',
                 'sort_order' => 1,
                 'primary_category_id' => 1,

            ],
            [
                 'name' => 'クツ',
                 'sort_order' => 2,
                 'primary_category_id' => 1,

           ],
           [
                 'name' => 'おくるみ',
                 'sort_order' => 3,
                 'primary_category_id' => 1,

           ],
           [
                 'name' => 'ベビーローション・オイル',
                 'sort_order' => 4,
                 'primary_category_id' => 2,

           ],
           [
                 'name' => '手・口ふきウエットティッシュ',
                 'sort_order' => 5,
                 'primary_category_id' => 2,

           ],
           [
                 'name' => '日焼け止め・UVケア',
                 'sort_order' => 6,
                 'primary_category_id' => 2,

           ],

        ]);
    }
}
