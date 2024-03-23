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
        /*\App\Models\Qr::factory(15)->create();
        \App\Models\Coach::factory(15)->create();
        \App\Models\Gestionnaire::factory(15)->create();
        \App\Models\Sport::factory(15)->create();
        \App\Models\Facture::factory(15)->create();
        \App\Models\Salle::factory(15)->create();
        \App\Models\Admin::factory(2)->create();
        \App\Models\Abonnement::factory(15)->create();
        */
        \App\Models\Groupe::factory(15)->create();
        \App\Models\Seance::factory(15)->create();
        
    }
}
