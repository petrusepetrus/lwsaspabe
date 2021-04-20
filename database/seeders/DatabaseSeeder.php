<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(1)->create(
            [
                'name' => 'Peter Stone',
                'email' => 'peter.stone@agapanthus-consulting.com',
                'password' => bcrypt('sicttasd32'),
                'email_verified_at' => null,
            ]
        );
    }
}
