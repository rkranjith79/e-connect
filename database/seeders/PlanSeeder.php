<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'title' => 'Basic Plan',
            'expire_in_days' => 365,
            'attributes' => [],
            'profile_count' => 1,
            'order_by' => 1,
            'price' => 40,
        ]);
    }
}
