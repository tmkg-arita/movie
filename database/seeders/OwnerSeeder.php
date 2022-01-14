<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
        [
             'name' => 'test1',
             'email'=> 'owner1@owner.com',
             'password' => Hash::make('adminadmin2'),
             'created_at' => '2022/01/12 15:15:15',
        ],
        [
            'name' => 'test2',
            'email'=> 'owner2@owner.com',
            'password' => Hash::make('adminadmin2'),
            'created_at' => '2022/01/12 15:15:15',
        ],
        [
            'name' => 'test3',
            'email'=> 'owner3@owner.com',
            'password' => Hash::make('adminadmin2'),
            'created_at' => '2022/01/12 15:15:15',
        ],
    ]);
    }
}
