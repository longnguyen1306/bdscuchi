<?php

namespace Database\Seeders;

use App\Models\SettingTopSearch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTopSearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingTopSearch::create([
            'title' => 'demo',
            'detail' => 'test',
            'image' => 'https://dm1files.storage.live.com/y4m75RCcc1PIh5SfGLpaDqM1V6hlrKVHJZFCUuWy5UH__h52VyNTweYWTWt0nBQmWqF5R2eEcVB5_lDoHxA6Bl_TOhsJpwqcNv3E4E5TGhlJ8rjbsfRU9e1ogue2BJmC9FY4F1K5YdFfYIrjKbNMBk4z_rVhevTCgTW4PaVMHnCjF7Agf7kN4o9-3CibqVZpUoR?width=4656&height=2328&cropmode=none',
        ]);
    }
}
