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
             'name' => 'owner1',
             'email'=> 'owner1@owner.com',
             'password' => Hash::make('aaaaaaaaaa'),
             'created_at' => '2022/01/12 15:15:15',
        ],
        [
            'name' => 'owner2',
            'email'=> 'owner2@owner.com',
            'password' => Hash::make('aaaaaaaaaa'),
            'created_at' => '2022/01/12 15:15:15',
        ],
        [
            'name' => 'owner3',
            'email'=> 'owner3@owner.com',
            'password' => Hash::make('aaaaaaaaaa'),
            'created_at' => '2022/01/12 15:15:15',
        ],
        [
            'name' => 'owner4',
            'email'=> 'owner4@owner.com',
            'password' => Hash::make('aaaaaaaaaa'),
            'created_at' => '2022/01/12 15:15:15',
        ],
        [
            'name' => 'owner5',
            'email'=> 'owner5@owner.com',
            'password' => Hash::make('aaaaaaaaaa'),
            'created_at' => '2022/01/12 15:15:15',
        ],
        [
            'name' => 'owner6',
            'email'=> 'owner6@owner.com',
            'password' => Hash::make('aaaaaaaaaa'),
            'created_at' => '2022/01/12 15:15:15',
        ],
        [
            'name' => 'owner7',
            'email'=> 'owner7@owner.com',
            'password' => Hash::make('aaaaaaaaaa'),
            'created_at' => '2022/01/12 15:15:15',
        ],
    ]);
    }
}
