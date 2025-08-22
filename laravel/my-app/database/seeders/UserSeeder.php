<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->truncate();
        User::factory()->create(["name" => "Zeus", "email" => "zeus@olympus.gr"]);
        User::factory()->create(["name" => "Hades", "email" => "hades@olympus.gr"]);
        User::factory()->create(["name" => "Poseidon", "email" => "poseidon@olympus.gr"]);
    }
}
