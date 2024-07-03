<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User::all();
        foreach ($users as $user) {
            $profile = $user->profiles()->first();
            if ($profile) {
                DB::table('users')->where('id', $user->id)
                    ->update([
                        'last_login_profile_id' => $profile->id,
                    ]);
            }
        }
    }
}
