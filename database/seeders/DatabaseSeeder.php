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
        \App\Models\Qr::factory(15)->create();
        \App\Models\Coach::factory(15)->create();
        \App\Models\Gestionnaire::factory(15)->create();
       

        
    }
}
