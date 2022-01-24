<?php

namespace Database\Seeders;
//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => '',
            'email' => '',
            'password' => bcrypt('password'),

        ]);
    }
}
