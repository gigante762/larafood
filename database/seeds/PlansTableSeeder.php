<?php

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name' => 'Plano A',
            'url' => 'planoa',
            'price' => 250,
            'description' => 'Um plano A básico que atentende a pequenos negócios',
        ]);
        Plan::create([
            'name' => 'Plano B',
            'url' => 'planob',
            'price' => 399,
            'description' => 'Um plano B que atentende a pequenos e médios negócios',
        ]);
    }
}
