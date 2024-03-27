<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            ['english' => 'Tamil Nadu', 'tamil' => 'தமிழ்நாடு'],
            ['english' => 'Andhra Pradesh', 'tamil' => 'ஆந்திரபிரதேசம்'],
            ['english' => 'Arunachal Pradesh', 'tamil' => 'அருணாச்சலப்ரதேச்'],
            ['english' => 'Assam', 'tamil' => 'அசாம்'],
            ['english' => 'Bihar', 'tamil' => 'பீகார்'],
            ['english' => 'Chhattisgarh', 'tamil' => 'சட்டீஸ்கர்'],
            ['english' => 'Goa', 'tamil' => 'கோவா'],
            ['english' => 'Gujarat', 'tamil' => 'குஜராத்'],
            ['english' => 'Haryana', 'tamil' => 'ஹரியாணா'],
            ['english' => 'Himachal Pradesh', 'tamil' => 'ஹிமாச்சலபிரதேச்'],
            ['english' => 'Jharkhand', 'tamil' => 'ஜார்கண்ட்'],
            ['english' => 'Karnataka', 'tamil' => 'கர்நாடகா'],
            ['english' => 'Kerala', 'tamil' => 'கேரளா'],
            ['english' => 'Madhya Pradesh', 'tamil' => 'மத்தியபிரதேச்'],
            ['english' => 'Maharashtra', 'tamil' => 'மகாராஷ்டிரா'],
            ['english' => 'Manipur', 'tamil' => 'மணிப்பூர்'],
            ['english' => 'Meghalaya', 'tamil' => 'மெகாலயா'],
            ['english' => 'Mizoram', 'tamil' => 'மிசோரம்'],
            ['english' => 'Nagaland', 'tamil' => 'நாகாலாந்து'],
            ['english' => 'Odisha', 'tamil' => 'ஒடிசா'],
            ['english' => 'Punjab', 'tamil' => 'பஞ்சாப்'],
            ['english' => 'Rajasthan', 'tamil' => 'ராஜஸ்தான்'],
            ['english' => 'Sikkim', 'tamil' => 'சிக்கிம்'],
            ['english' => 'Telangana', 'tamil' => 'தெலங்கானா'],
            ['english' => 'Tripura', 'tamil' => 'திரிபுரா'],
            ['english' => 'Uttar Pradesh', 'tamil' => 'உத்தரப்பிரதேசம்'],
            ['english' => 'Uttarakhand', 'tamil' => 'உத்தரக்கண்ட்'],
            ['english' => 'West Bengal', 'tamil' => 'மேற்கு வங்கம்'],
            ['english' => 'Jammu and Kashmir', 'tamil' => 'ஜம்மு மற்றும் காஷ்மீர்']
        ];

        DB::table('states')->truncate();
        foreach ($states as $state) {
            DB::table('states')->insert([
                'title' => $state['english'],
                'language_tamil' => $state['tamil'],
                'country_id' => 1,
            ]);
        }
    }
}
