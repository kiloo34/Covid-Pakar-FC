<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        $datas = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'pakar'
            ]
        ];
        collect($datas)->each(function ($data) { Role::create($data); });
        Schema::enableForeignKeyConstraints();
    }
}
