<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        for ($index = 0; $index < 200; $index++) {
            $user = $users->random();
            Event::factory()->create([
                'user_id' => $user->id,
            ]);
        }
        //
    }
}
