<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\grouptaskscoordinatorleaders;
class GroupTaskCoordinatorLeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        grouptaskscoordinatorleaders::factory(5)->create();
    }
}
