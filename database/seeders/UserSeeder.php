<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        User::insert([
            [
                'username' => 'admin',
                'email'  => 'admin@admin.com',
                'password' => bcrypt('adminadmin'),
                'role_id' => 1,
                'name' => 'Administrator'
            ],
            [
                'username' => 'pakar1',
                'email'  => 'pakar@pakar.com',
                'password' => bcrypt('pakarpakar'),
                'role_id' => 2,
                'name' => 'PAKAR'
            ]
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
