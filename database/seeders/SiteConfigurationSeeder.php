<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siteConfigurations = [
            ['label' => 'Facebook', 'code' => 'facebook', 'attributes' => ['value' => 'facebook']],
            ['label' => 'WhatsApp', 'code' => 'whatsapp', 'attributes' => ['value' => 'WhatsApp']],
            ['label' => 'Address 1', 'code' => 'address_1', 'attributes' => ['value' => 'address_1']],
            ['label' => 'Address 2', 'code' => 'address_2', 'attributes' => ['value' => 'address_2']],
            ['label' => 'Address 3', 'code' => 'address_3', 'attributes' => ['value' => 'address_3']],
            ['label' => 'Address 3', 'code' => 'address_4', 'attributes' => ['value' => 'address_4']],
            ['label' => 'Phone', 'code' => 'phone', 'attributes' => ['value' => 'phone']],
            ['label' => 'Email', 'code' => 'email', 'attributes' => ['value' => 'email']],
            ['label' => 'Phone 2', 'code' => 'phone_2', 'attributes' => ['value' => 'phone_2']],
            ['label' => 'Help Line', 'code' => 'help_line', 'attributes' => ['value' => 'phone_2', 'language_tamil_value' => 'phone_2', 'language_tamil_label' => 'Help Line Tamil']],
            ['label' => 'Whatsapp Group', 'code' => 'whatsapp_group', 'attributes' => ['value' => 'Whatsapp Group']],
            ['label' => 'Whatsapp Group', 'code' => 'play_store_link', 'attributes' => ['value' => 'Whatsapp Group']],
            ['label' => 'Whatsapp Group', 'code' => 'telegram_link', 'attributes' => ['value' => 'Whatsapp Group']],
            ['label' => 'Whatsapp Group', 'code' => 'instagram_link', 'attributes' => ['value' => 'Whatsapp Group']],

            ['label' => 'Whatsapp Group', 'code' => 'facebook_link', 'attributes' => ['value' => 'Whatsapp Group']],
            ['label' => 'Whatsapp Group', 'code' => 'app_store_link', 'attributes' => ['value' => 'Whatsapp Group']],
            ['label' => 'Whatsapp Group', 'code' => 'youtube_link', 'attributes' => ['value' => 'Whatsapp Group']],
       ];
        DB::table('site_configurations')->truncate();
        foreach ($siteConfigurations as $siteConfiguration) {
            DB::table('site_configurations')->insert([
                'label' => $siteConfiguration['label'],
                'code' => $siteConfiguration['code'],
                'attributes' => json_encode($siteConfiguration['attributes']),
            ]);
        }
    }
}
