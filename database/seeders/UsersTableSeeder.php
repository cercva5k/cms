<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'group' => '1',
            'name' => 'CMS Admin',
            'email' => 'admin@goart.ge',
            'password' => bcrypt('987654321'),
        ]);
    }
}
