<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            ['name' => 'test',
             'email'=> 'admin.admin.admin@admin.com',
             'password' => Hash::make('adminadmin2'),
             'created_at' => '2022/01/12 15:15:15',
        ]);
    }
}
