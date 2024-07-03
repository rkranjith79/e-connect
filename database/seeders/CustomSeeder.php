<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


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
