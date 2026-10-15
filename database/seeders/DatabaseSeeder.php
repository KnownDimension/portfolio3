<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      //  User::factory()->create([
      //      'name' => 'Test User',
      //      'email' => 'test@example.com',
      //  ]);

        $sql = File::get(database_path('cvs.sql'));
        DB::unprepared($sql);



    }
}
