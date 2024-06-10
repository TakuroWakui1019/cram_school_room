<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
   public function run()
    {
        $this->call(RoomSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TimelineSeeder::class);
        $this->call(ChatSeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(ReplySeeder::class);
    }
}
