<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['english' => 'India', 'tamil' => 'இந்தியா'],
            ['english' => 'Afghanistan', 'tamil' => 'ஆப்கானிஸ்தான்'],
            ['english' => 'Albania', 'tamil' => 'அல்பேனியா'],
            ['english' => 'Algeria', 'tamil' => 'அல்ஜீரியா'],
            ['english' => 'Andorra', 'tamil' => 'அன்டோரா'],
            ['english' => 'Angola', 'tamil' => 'அங்கோலா'],
            ['english' => 'Antigua and Barbuda', 'tamil' => 'அண்டிகுவா மற்றும் பார்பூடா'],
            ['english' => 'Argentina', 'tamil' => 'அர்ஜென்டினா'],
            ['english' => 'Armenia', 'tamil' => 'அர்மேனியா'],
            ['english' => 'Australia', 'tamil' => 'ஆஸ்திரேலியா'],
            ['english' => 'Austria', 'tamil' => 'ஆஸ்திரியா'],
            ['english' => 'Azerbaijan', 'tamil' => 'அசர்பைஜான்'],
            ['english' => 'Bahamas', 'tamil' => 'பஹாமாஸ்'],
            ['english' => 'Bahrain', 'tamil' => 'பஹ்ரைன்'],
            ['english' => 'Bangladesh', 'tamil' => 'பங்களாதேஷ்'],
            ['english' => 'Barbados', 'tamil' => 'பார்பேடோஸ்'],
            ['english' => 'Belarus', 'tamil' => 'பெலாரஸ்'],
            ['english' => 'Belgium', 'tamil' => 'பெல்ஜியம்'],
            ['english' => 'Belize', 'tamil' => 'பெலிஸ்'],
            ['english' => 'Benin', 'tamil' => 'பெனின்'],
            ['english' => 'Bhutan', 'tamil' => 'பூடான்'],
            ['english' => 'Bolivia', 'tamil' => 'பொலிவியா'],
            ['english' => 'Bosnia and Herzegovina', 'tamil' => 'பாஸ்னியா மற்றும் ஹெர்செகோவினா'],
            ['english' => 'Botswana', 'tamil' => 'போட்ஸ்வானா'],
            ['english' => 'Brazil', 'tamil' => 'பிரேஸில்'],
            ['english' => 'Brunei', 'tamil' => 'புரூனே'],
            ['english' => 'Bulgaria', 'tamil' => 'பல்கேரியா'],
            ['english' => 'Burkina Faso', 'tamil' => 'புர்கினா ஃபாஸோ'],
            ['english' => 'Burundi', 'tamil' => 'புருண்டி'],
            ['english' => 'Cabo Verde', 'tamil' => 'கேபோ வெர்டே'],
            ['english' => 'Cambodia', 'tamil' => 'கம்போடியா'],
            ['english' => 'Cameroon', 'tamil' => 'கேமரூன்'],
            ['english' => 'Canada', 'tamil' => 'கனடா'],
            ['english' => 'Central African Republic', 'tamil' => 'மத்திய ஆபிரிக்க குடியரசு'],
            ['english' => 'Chad', 'tamil' => 'சாட்'],
            ['english' => 'Chile', 'tamil' => 'சிலி'],
            ['english' => 'China', 'tamil' => 'சீனா'],
            ['english' => 'Colombia', 'tamil' => 'கொலம்பியா'],
            ['english' => 'Comoros', 'tamil' => 'கொமரோஸ்'],
            ['english' => 'Congo (Congo-Brazzaville)', 'tamil' => 'காங்கோ (காங்கோ-பிராசாவில்)'],
            ['english' => 'Costa Rica', 'tamil' => 'கோஸ்டா ரிக்கா'],
            ['english' => 'Croatia', 'tamil' => 'குரேஷியா'],
            ['english' => 'Cuba', 'tamil' => 'கியூபா'],
            ['english' => 'Cyprus', 'tamil' => 'சைப்ரஸ்'],
            ['english' => 'Czech Republic', 'tamil' => 'செக் குடியரசு'],
            ['english' => 'Democratic Republic of the Congo', 'tamil' => 'ஜனநாயக காங்கோ குடியரசு'],
            ['english' => 'Denmark', 'tamil' => 'டென்மார்க்'],
            ['english' => 'Djibouti', 'tamil' => 'ஜிபூட்டி'],
            ['english' => 'Dominica', 'tamil' => 'டொமினிகா'],
            ['english' => 'Dominican Republic', 'tamil' => 'டொமினிகன்'],
            ['english' => 'Ecuador', 'tamil' => 'ஈக்வடார்'],
            ['english' => 'Egypt', 'tamil' => 'எகிப்து'],
            ['english' => 'El Salvador', 'tamil' => 'எல் சால்வடார்'],
            ['english' => 'Equatorial Guinea', 'tamil' => 'ஈக்வடோரியல் கினி'],
            ['english' => 'Eritrea', 'tamil' => 'எரிட்ரியா'],
            ['english' => 'Estonia', 'tamil' => 'எஸ்டோனியா'],
            ['english' => 'Eswatini', 'tamil' => 'ஈஸ்வாட்டினி'],
            ['english' => 'Ethiopia', 'tamil' => 'எதியோப்பியா'],
            ['english' => 'Fiji', 'tamil' => 'ஃபிஜி'],
            ['english' => 'Finland', 'tamil' => 'பின்லாந்து'],
            ['english' => 'France', 'tamil' => 'பிரான்ஸ்'],
            ['english' => 'Gabon', 'tamil' => 'காபோன்'],
            ['english' => 'Gambia', 'tamil' => 'காம்பியா'],
            ['english' => 'Georgia', 'tamil' => 'ஜார்ஜியா'],
            ['english' => 'Germany', 'tamil' => 'ஜெர்மனி'],
            ['english' => 'Ghana', 'tamil' => 'கானா'],
            ['english' => 'Greece', 'tamil' => 'கிரீஸ்'],
            ['english' => 'Grenada', 'tamil' => 'கிரனேடா'],
            ['english' => 'Guatemala', 'tamil' => 'கவுதமாலா'],
            ['english' => 'Guinea', 'tamil' => 'கினி'],
            ['english' => 'Guinea-Bissau', 'tamil' => 'கினியா-பிஸ்ஸாவு'],
            ['english' => 'Guyana', 'tamil' => 'கயானா'],
            ['english' => 'Haiti', 'tamil' => 'ஹைட்டி'],
            ['english' => 'Honduras', 'tamil' => 'ஹோண்டுராஸ்'],
            ['english' => 'Hungary', 'tamil' => 'ஹங்கேரி'],
            ['english' => 'Iceland', 'tamil' => 'ஐச்லாந்து'],
            ['english' => 'Indonesia', 'tamil' => 'இந்தோனேசியா'],
            ['english' => 'Iran', 'tamil' => 'ஈரான்'],
            ['english' => 'Iraq', 'tamil' => 'ஈராக்'],
            ['english' => 'Ireland', 'tamil' => 'அயர்லாந்து'],
            ['english' => 'Israel', 'tamil' => 'இஸ்ரேல்'],
            ['english' => 'Italy', 'tamil' => 'இத்தாலி'],
            ['english' => 'Jamaica', 'tamil' => 'ஜமைக்கா'],
            ['english' => 'Japan', 'tamil' => 'ஜப்பான்'],
            ['english' => 'Jordan', 'tamil' => 'ஜோர்டன்'],
            ['english' => 'Kazakhstan', 'tamil' => 'கஸகஸ்தான்'],
            ['english' => 'Kenya', 'tamil' => 'கென்யா'],
            ['english' => 'Kiribati', 'tamil' => 'கிரிபாட்டி'],
            ['english' => 'Kuwait', 'tamil' => 'குவைத்'],
            ['english' => 'Kyrgyzstan', 'tamil' => 'கிர்கிஸ்தான்'],
            ['english' => 'Laos', 'tamil' => 'லாவோஸ்'],
            ['english' => 'Latvia', 'tamil' => 'லாட்வியா'],
            ['english' => 'Lebanon', 'tamil' => 'லெபனான்'],
            ['english' => 'Lesotho', 'tamil' => 'லெசோதோ'],
            ['english' => 'Liberia', 'tamil' => 'லைபீரியா'],
            ['english' => 'Libya', 'tamil' => 'லிபியா'],
            ['english' => 'Liechtenstein', 'tamil' => 'லிக்டன்ஸ்டைன்'],
            ['english' => 'Lithuania', 'tamil' => 'லிதுவேனியா'],
            ['english' => 'Luxembourg', 'tamil' => 'லக்சம்பர்க்'],
            ['english' => 'Madagascar', 'tamil' => 'மடகாஸ்கர்'],
            ['english' => 'Malawi', 'tamil' => 'மலாவி'],
            ['english' => 'Malaysia', 'tamil' => 'மலேசியா'],
            ['english' => 'Maldives', 'tamil' => 'மாலத்தீவு'],
            ['english' => 'Mali', 'tamil' => 'மாலி'],
            ['english' => 'Malta', 'tamil' => 'மால்டா'],
            ['english' => 'Marshall Islands', 'tamil' => 'மார்ஷல் தீவுகள்'],
            ['english' => 'Mauritania', 'tamil' => 'மௌரிடானியா'],
            ['english' => 'Mauritius', 'tamil' => 'மொரிசியஸ்'],
            ['english' => 'Mexico', 'tamil' => 'மெக்சிகோ'],
            ['english' => 'Micronesia', 'tamil' => 'மைக்ரோனேசியா'],
            ['english' => 'Moldova', 'tamil' => 'மொல்டோவா'],
            ['english' => 'Monaco', 'tamil' => 'மொனாக்கோ'],
            ['english' => 'Mongolia', 'tamil' => 'மங்கோலியா'],
            ['english' => 'Montenegro', 'tamil' => 'மொண்டேனேக்ரோ'],
            ['english' => 'Morocco', 'tamil' => 'மொராக்கோ'],
            ['english' => 'Mozambique', 'tamil' => 'மொசாம்பிக்'],
            ['english' => 'Myanmar', 'tamil' => 'மியான்மார்'],
            ['english' => 'Namibia', 'tamil' => 'நமீபியா'],
            ['english' => 'Nauru', 'tamil' => 'நவரு'],
            ['english' => 'Nepal', 'tamil' => 'நேபாளம்'],
            ['english' => 'Netherlands', 'tamil' => 'நெதர்லாந்துக்கு'],
            ['english' => 'New Zealand', 'tamil' => 'நியூசிலாந்து'],
            ['english' => 'Nicaragua', 'tamil' => 'நிகரகுவா'],
            ['english' => 'Niger', 'tamil' => 'நைஜர்'],
            ['english' => 'Nigeria', 'tamil' => 'நைஜீரியா'],
            ['english' => 'North Korea', 'tamil' => 'வடக்கு கொரியா'],
            ['english' => 'North Macedonia', 'tamil' => 'வட மாசிடோனியா'],
            ['english' => 'Norway', 'tamil' => 'நார்வே'],
            ['english' => 'Oman', 'tamil' => 'ஓமன்'],
            ['english' => 'Pakistan', 'tamil' => 'பாகிஸ்தான்'],
            ['english' => 'Palau', 'tamil' => 'பலாவு'],
            ['english' => 'Palestine', 'tamil' => 'பாலஸ்தீனம்'],
            ['english' => 'Panama', 'tamil' => 'பனாமா'],
            ['english' => 'Papua New Guinea', 'tamil' => 'பப்புவா நியூ கினி'],
            ['english' => 'Paraguay', 'tamil' => 'பராகுவே'],
            ['english' => 'Peru', 'tamil' => 'பெரு'],
            ['english' => 'Philippines', 'tamil' => 'பிலிப்பைன்ஸ்'],
            ['english' => 'Poland', 'tamil' => 'போலந்து'],
            ['english' => 'Portugal', 'tamil' => 'போர்ச்சுக்கல்'],
            ['english' => 'Qatar', 'tamil' => 'கத்தார்'],
            ['english' => 'Romania', 'tamil' => 'ருமேனியா'],
            ['english' => 'Russia', 'tamil' => 'ரஷ்யா'],
            ['english' => 'Rwanda', 'tamil' => 'ருவாண்டா'],
            ['english' => 'Saint Kitts and Nevis', 'tamil' => 'செயின்ட் கிட்ஸ் மற்றும் நேவிஸ்'],
            ['english' => 'Saint Lucia', 'tamil' => 'செயின்ட் லூசியா'],
            ['english' => 'Saint Vincent and the Grenadines', 'tamil' => 'செயின்ட் வின்சென்ட் மற்றும் கிரெனடைன்ஸ்'],
            ['english' => 'Samoa', 'tamil' => 'சமோவா'],
            ['english' => 'San Marino', 'tamil' => 'சான் மரினோ'],
            ['english' => 'Sao Tome and Principe', 'tamil' => 'சாவ் டோம் மற்றும் ப்ரின்சிபி'],
            ['english' => 'Saudi Arabia', 'tamil' => 'சவூதி அரேபியா'],
            ['english' => 'Senegal', 'tamil' => 'செனெகல்'],
            ['english' => 'Serbia', 'tamil' => 'செர்பியா'],
            ['english' => 'Seychelles', 'tamil' => 'சீஷெல்ஸ்'],
            ['english' => 'Sierra Leone', 'tamil' => 'சியேரா லியோன்'],
            ['english' => 'Singapore', 'tamil' => 'சிங்கப்பூர்'],
            ['english' => 'Slovakia', 'tamil' => 'ஸ்லோவாகியா'],
            ['english' => 'Slovenia', 'tamil' => 'ஸ்லோவேனியா'],
            ['english' => 'Solomon Islands', 'tamil' => 'சாலமன் தீவுகள்'],
            ['english' => 'Somalia', 'tamil' => 'சொமாலியா'],
            ['english' => 'South Africa', 'tamil' => 'தென் ஆப்பிரிக்கா'],
            ['english' => 'South Korea', 'tamil' => 'தென் கொரியா'],
            ['english' => 'South Sudan', 'tamil' => 'தெற்கு சூடான்'],
            ['english' => 'Spain', 'tamil' => 'ஸ்பெயின்'],
            ['english' => 'Sri Lanka', 'tamil' => 'இலங்கை'],
            ['english' => 'Sudan', 'tamil' => 'சூடான்'],
            ['english' => 'Suriname', 'tamil' => 'சுரினாம்'],
            ['english' => 'Sweden', 'tamil' => 'ஸ்வீடன்'],
            ['english' => 'Switzerland', 'tamil' => 'ஸ்விட்சர்லாந்து'],
            ['english' => 'Syria', 'tamil' => 'சிரியா'],
            ['english' => 'Tajikistan', 'tamil' => 'தாஜிகிஸ்தான்'],
            ['english' => 'Tanzania', 'tamil' => 'தான்சானியா'],
            ['english' => 'Thailand', 'tamil' => 'தாய்லாந்து'],
            ['english' => 'Timor-Leste', 'tamil' => 'டிமார்-லெஸ்டே'],
            ['english' => 'Togo', 'tamil' => 'டோகோ'],
            ['english' => 'Tonga', 'tamil' => 'டோங்கா'],
            ['english' => 'Trinidad and Tobago', 'tamil' => 'டிரினிடாட் மற்றும் டொபாகோ'],
            ['english' => 'Tunisia', 'tamil' => 'டுனிசியா'],
            ['english' => 'Turkey', 'tamil' => 'துருக்கி'],
            ['english' => 'Turkmenistan', 'tamil' => 'துருக்குமெனிஸ்தான்'],
            ['english' => 'Tuvalu', 'tamil' => 'துவாலூ'],
            ['english' => 'Uganda', 'tamil' => 'உகாண்டா'],
            ['english' => 'Ukraine', 'tamil' => 'உக்ரைன்'],
            ['english' => 'United Arab Emirates', 'tamil' => 'ஐக்கிய அரபு கூட்டாட்சிகள்'],
            ['english' => 'United Kingdom', 'tamil' => 'ஐக்கிய இராச்சியம்'],
            ['english' => 'United States of America', 'tamil' => 'ஐக்கிய அமெரிக்க நாடு'],
            ['english' => 'Uruguay', 'tamil' => 'உருகுவே'],
            ['english' => 'Uzbekistan', 'tamil' => 'உஸ்பெக்கிஸ்தான்'],
            ['english' => 'Vanuatu', 'tamil' => 'வனுவாட்டு'],
            ['english' => 'Vatican City', 'tamil' => 'வாட்டிகன் நகரம்'],
            ['english' => 'Venezuela', 'tamil' => 'வெனிசுவேலா'],
            ['english' => 'Vietnam', 'tamil' => 'வியட்நாம்'],
            ['english' => 'Yemen', 'tamil' => 'ஏமன்'],
            ['english' => 'Zambia', 'tamil' => 'சாம்பியா'],
            ['english' => 'Zimbabwe', 'tamil' => 'ஜிம்பாப்வே']
        ];

        DB::table('countries')->truncate();
        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'title' => $country['english'],
                'language_tamil' => $country['tamil'],
            ]);
        }

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
        foreach ($countries as $state) {
            DB::table('states')->insert([
                'title' => $state['english'],
                'language_tamil' => $state['tamil'],
                'country_id' => 1,
            ]);
        }

        $districts = [
            ['english' => 'Ariyalur', 'tamil' => 'அரியலூர்'],
            ['english' => 'Chengalpattu', 'tamil' => 'செங்கல்பட்டு'],
            ['english' => 'Chennai', 'tamil' => 'சென்னை'],
            ['english' => 'Coimbatore', 'tamil' => 'கோயம்புத்தூர்'],
            ['english' => 'Cuddalore', 'tamil' => 'கடலூர்'],
            ['english' => 'Dharmapuri', 'tamil' => 'தர்மபுரி'],
            ['english' => 'Dindigul', 'tamil' => 'திண்டுக்கல்'],
            ['english' => 'Erode', 'tamil' => 'ஈரோடு'],
            ['english' => 'Kallakurichi', 'tamil' => 'கள்ளக்குறிச்சி'],
            ['english' => 'Kanchipuram', 'tamil' => 'காஞ்சிபுரம்'],
            ['english' => 'Kanyakumari', 'tamil' => 'கன்னியாகுமரி'],
            ['english' => 'Karur', 'tamil' => 'கரூர்'],
            ['english' => 'Krishnagiri', 'tamil' => 'கிருஷ்ணகிரி'],
            ['english' => 'Madurai', 'tamil' => 'மதுரை'],
            ['english' => 'Mayiladuthurai', 'tamil' => 'மயிலாடுதுறை'],
            ['english' => 'Nagapattinam', 'tamil' => 'நாகப்பட்டினம்'],
            ['english' => 'Namakkal', 'tamil' => 'நாமக்கல்'],
            ['english' => 'Nilgiris', 'tamil' => 'நீலகிரி'],
            ['english' => 'Perambalur', 'tamil' => 'பெரம்பலூர்'],
            ['english' => 'Pudukkottai', 'tamil' => 'புதுக்கோட்டை'],
            ['english' => 'Ramanathapuram', 'tamil' => 'இராமநாதபுரம்'],
            ['english' => 'Ranipet', 'tamil' => 'ராணிப்பேட்டை'],
            ['english' => 'Salem', 'tamil' => 'சேலம்'],
            ['english' => 'Sivaganga', 'tamil' => 'சிவகங்கை'],
            ['english' => 'Tenkasi', 'tamil' => 'தென்காசி'],
            ['english' => 'Thanjavur', 'tamil' => 'தஞ்சாவூர்'],
            ['english' => 'Theni', 'tamil' => 'தேனி'],
            ['english' => 'Thoothukudi', 'tamil' => 'தூத்துக்குடி'],
            ['english' => 'Tiruchirappalli', 'tamil' => 'திருச்சிராப்பள்ளி'],
            ['english' => 'Tirunelveli', 'tamil' => 'திருநெல்வேலி'],
            ['english' => 'Tirupathur', 'tamil' => 'திருப்பத்தூர்'],
            ['english' => 'Tiruppur', 'tamil' => 'திருப்பூர்'],
            ['english' => 'Tiruvallur', 'tamil' => 'திருவள்ளூர்'],
            ['english' => 'Tiruvannamalai', 'tamil' => 'திருவண்ணாமலை'],
            ['english' => 'Tiruvarur', 'tamil' => 'திருவாரூர்'],
            ['english' => 'Vellore', 'tamil' => 'வேலூர்'],
            ['english' => 'Viluppuram', 'tamil' => 'விழுப்புரம்'],
            ['english' => 'Virudhunagar', 'tamil' => 'விருதுநகர்']
        ];

        DB::table('districts')->truncate();
        foreach ($districts as $district) {
            DB::table('districts')->insert([
                'title' => $district['english'],
                'language_tamil' => $district['tamil'],
                'state_id' => 1,
            ]);
        }

        $castes = [
            ['english' => 'Kongu Vellala Gounder', 'tamil' => 'கொங்கு வேளாள கவுண்டர்'],
            ['english' => 'Kongu Vellalar Division', 'tamil' => 'கொங்கு வேளாளர் பிரிவு'],
            ['english' => 'Kongu Vellalar Mix', 'tamil' => 'கொங்கு வேளாளர் கலப்பு']
        ];

        DB::table('castes')->truncate();
        foreach ($castes as $caste) {
            DB::table('castes')->insert([
                'title' => $caste['english'],
                'language_tamil' => $caste['tamil'],
                'religion_id' => '1'
            ]);
        }

        $sub_castes = [
            ['english' => 'Kongu Chettiar', 'tamil' => 'கொங்கு செட்டியார்'],
            ['english' => 'Kongu Naatu Vellalar', 'tamil' => 'கொங்கு நாட்டு வேளாளர்'],
            ['english' => 'Kongu Velar', 'tamil' => 'கொங்கு வேலர்']
        ];

        DB::table('sub_castes')->truncate();
        foreach ($sub_castes as $subcaste) {
            DB::table('sub_castes')->insert([
                'title' => $subcaste['english'],
                'language_tamil' => $subcaste['tamil'],
                'caste_id' => '1',
            ]);
        }

        $blood_groups = [
            ['english' => 'A+', 'tamil' => 'A+'],
            ['english' => 'A-', 'tamil' => 'A-'],
            ['english' => 'B+', 'tamil' => 'B+'],
            ['english' => 'B-', 'tamil' => 'B-'],
            ['english' => 'AB+', 'tamil' => 'AB+'],
            ['english' => 'AB-', 'tamil' => 'AB-'],
            ['english' => 'O+', 'tamil' => 'O+'],
            ['english' => 'O-', 'tamil' => 'O-']
        ];

        DB::table('blood_groups')->truncate();
        foreach ($blood_groups as $blood_group) {
            DB::table('blood_groups')->insert([
                'title' => $blood_group['english'],
                'language_tamil' => $blood_group['tamil'],
            ]);
        }

        $genders = [
            ['english' => 'Male', 'tamil' => 'ஆண்'],
            ['english' => 'Female', 'tamil' => 'பெண்'],
            ['english' => 'Other', 'tamil' => 'மற்றவர்']
        ];

        DB::table('genders')->truncate();
        foreach ($genders as $gender) {
            DB::table('genders')->insert([
                'title' => $gender['english'],
                'language_tamil' => $gender['tamil'],
            ]);
        }

        $educations = [
            ['english' => 'PhD', 'tamil' => 'பி.எச்.டி.'],
            ['english' => 'Master of Arts (MA)', 'tamil' => 'ஆர்ட்ஸ் மாஸ்டர் (எம்.ஏ)'],
            ['english' => 'Bachelor of Arts (BA)', 'tamil' => 'ஆர்ட்ஸ் பேட்சலர் (பி.ஏ)'],
            ['english' => 'Master of Science (MSc)', 'tamil' => 'அறிவியல் மாஸ்டர் (எம்.எஸ்.)'],
            ['english' => 'Bachelor of Science (BSc)', 'tamil' => 'அறிவியல் பேட்சலர் (பி.எஸ்.சி)'],
            ['english' => 'Master of Business Administration (MBA)', 'tamil' => 'வணிக நிர்வாக மாஸ்டர் (எம்.பி.ஏ)'],
            ['english' => 'Bachelor of Commerce (BCom)', 'tamil' => 'வாணிக பேட்சலர் (பி.காம்)'],
            ['english' => 'Doctor of Medicine (MD)', 'tamil' => 'மருத்துவ மாஸ்டர் (மி.டி.)']
        ];

        DB::table('educations')->truncate();
        foreach ($educations as $education) {
            DB::table('educations')->insert([
                'title' => $education['english'],
                'language_tamil' => $education['tamil'],
            ]);
        }

        $heights = [
            ['english' => '4ft 6in / 137cm', 'tamil' => '4அடி 6அங்கு / 137செ.'],
            ['english' => '4ft 7in / 140cm', 'tamil' => '4அடி 7அங்கு / 140செ.'],
            ['english' => '4ft 8in / 142cm', 'tamil' => '4அடி 8அங்கு / 142செ.'],
            ['english' => '4ft 9in / 145cm', 'tamil' => '4அடி 9அங்கு / 145செ.'],
            ['english' => '4ft 10in / 147cm', 'tamil' => '4அடி 10அங்கு / 147செ.'],
            ['english' => '5ft 0in / 152cm', 'tamil' => '5அடி 0அங்கு / 152செ.'],
            ['english' => '5ft 1in / 155cm', 'tamil' => '5அடி 1அங்கு / 155செ.'],
            ['english' => '5ft 2in / 157cm', 'tamil' => '5அடி 2அங்கு / 157செ.'],
            ['english' => '5ft 3in / 160cm', 'tamil' => '5அடி 3அங்கு / 160செ.'],
            ['english' => '5ft 4in / 163cm', 'tamil' => '5அடி 4அங்கு / 163செ.'],
            ['english' => '5ft 5in / 165cm', 'tamil' => '5அடி 5அங்கு / 165செ.'],
            ['english' => '5ft 6in / 168cm', 'tamil' => '5அடி 6அங்கு / 168செ.'],
            ['english' => '5ft 7in / 170cm', 'tamil' => '5அடி 7அங்கு / 170செ.'],
            ['english' => '5ft 8in / 173cm', 'tamil' => '5அடி 8அங்கு / 173செ.'],
            ['english' => '5ft 9in / 175cm', 'tamil' => '5அடி 9அங்கு / 175செ.'],
            ['english' => '5ft 10in / 178cm', 'tamil' => '5அடி 10அங்கு / 178செ.'],
            ['english' => '5ft 11in / 180cm', 'tamil' => '5அடி 11அங்கு / 180செ.'],
            ['english' => '6ft 0in / 183cm', 'tamil' => '6அடி 0அங்கு / 183செ.'],
            ['english' => '6ft 1in / 185cm', 'tamil' => '6அடி 1அங்கு / 185செ.'],
            ['english' => '6ft 2in / 188cm', 'tamil' => '6அடி 2அங்கு / 188செ.'],
            ['english' => '6ft 3in / 191cm', 'tamil' => '6அடி 3அங்கு / 191செ.'],
            ['english' => '6ft 4in / 193cm', 'tamil' => '6அடி 4அங்கு / 193செ.'],
            ['english' => '6ft 5in / 196cm', 'tamil' => '6அடி 5அங்கு / 196செ.'],
            ['english' => '6ft 6in / 198cm', 'tamil' => '6அடி 6அங்கு / 198செ.'],
            ['english' => '6ft 7in / 201cm', 'tamil' => '6அடி 7அங்கு / 201செ.'],
            ['english' => '6ft 8in / 203cm', 'tamil' => '6அடி 8அங்கு / 203செ.'],
            ['english' => '6ft 9in / 206cm', 'tamil' => '6அடி 9அங்கு / 206செ.'],
            ['english' => '6ft 10in / 208cm', 'tamil' => '6அடி 10அங்கு / 208செ.'],
            ['english' => '6ft 11in / 211cm', 'tamil' => '6அடி 11அங்கு / 211செ.'],
            ['english' => '7ft 0in / 213cm', 'tamil' => '7அடி 0அங்கு / 213செ.'],
            ['english' => '7ft 2in / 215cm', 'tamil' => '7அடி 2அங்கு / 215செ.']
        ];
        DB::table('heights')->truncate();
        foreach ($heights as $height) {
            DB::table('heights')->insert([
                'title' => $height['english'],
                'language_tamil' => $height['tamil'],
            ]);
        }

        $weights = [];
        for ($kg = 35; $kg <= 150; $kg++) {
            $weight = [
                'english' => "{$kg} Kg",
                'tamil' => "{$kg} கிலோ"
            ];
            $weights[] = $weight;
        }
        DB::table('weights')->truncate();
        foreach ($weights as $weight) {
            DB::table('weights')->insert([
                'title' => $weight['english'],
                'language_tamil' => $weight['tamil'],
            ]);
        }

        $asset_vlaues = [
            ['english' => 'Below 50 lakhs', 'tamil' => '50 லட்சத்திற்கு கீழ்.'],
            ['english' => '50 lakhs - 01 crores', 'tamil' => '50 லட்சம் - 01 கோடி.'],
            ['english' => '01 crores -  2.5 crores', 'tamil' => '01 கோடி - 2.5 கோடி.'],
            ['english' => '2.5 crores - 05 crores', 'tamil' => '2.5 கோடி - 05 கோடி.'],
            ['english' => '05 crores - 7 crores', 'tamil' => '05 கோடி - 7 கோடி.']
        ];
        DB::table('assets_values')->truncate();
        foreach ($asset_vlaues as $asset_vlaue) {
            DB::table('assets_values')->insert([
                'title' => $asset_vlaue['english'],
                'language_tamil' => $asset_vlaue['tamil'],
            ]);
        }
    
        $birth_dosas = [
            ['english' => 'Sun', 'tamil' => 'சூரியன்.'],
            ['english' => 'Moon', 'tamil' => 'சந்திரன்.'],
            ['english' => 'Mars', 'tamil' => 'செவ்வாய்.'],
            ['english' => 'Raagu', 'tamil' => 'ராகு.'],
            ['english' => 'Jupiter', 'tamil' => 'குரு.'],
            ['english' => 'Saturn', 'tamil' => 'சனி.'],
            ['english' => 'Mercury', 'tamil' => 'புதன்.'],
            ['english' => 'Kethu', 'tamil' => 'கேது.'],
            ['english' => 'Venus', 'tamil' => 'சுக்கிரன்.']
        ];
        
        DB::table('birth_dasas')->truncate();
        foreach ($birth_dosas as $birth_dosa) {
            DB::table('birth_dasas')->insert([
                'title' => $birth_dosa['english'],
                'language_tamil' => $birth_dosa['tamil'],
            ]);
        }

        $jathagams = [
            ['english' => 'No Dhosam', 'tamil' => 'சுத்த ஜாதகம்.'],
            ['english' => 'Sevvai Jathagam', 'tamil' => 'செவ்வாய் ஜாதகம்.'],
            ['english' => 'Parigara Sevvai Jathagam', 'tamil' => 'பரிகார செவ்வாய் ஜாதகம்.'],
            ['english' => 'Raagu Kethu Jathagam', 'tamil' => 'ராகு கேது ஜாதகம்.'],
            ['english' => 'Raagu Kethu, Sevvai', 'tamil' => 'ராகு கேது, செவ்வாய்.'],
            ['english' => 'No Jathagam Match', 'tamil' => 'சுத்த ஜாதகம் பொருந்தும்.'],
            ['english' => 'Sevvai Jathagam Match', 'tamil' => 'செவ்வாய் ஜாதகம் பொருந்தும்.'],
            ['english' => 'Raagu Kethu, Sevvai Match', 'tamil' => 'ராகு கேது, செவ்வாய் பொருந்தும்.'],
            ['english' => 'Raagu Kethu Jathagam Match', 'tamil' => 'ராகு கேது ஜாதகம் பொருந்தும்.'],
            ['english' => 'No Horoscope / Do not view horoscope', 'tamil' => 'ஜாதகம் இல்லை  / ஜாதகம்  பார்ப்பதில்லை.'],
            ['english' => "Don't Know", 'tamil' => 'தெரியவில்லை.']
        ];

        DB::table('jathagams')->truncate();
        foreach ($jathagams as $jathagam) {
            DB::table('jathagams')->insert([
                'title' => $jathagam['english'],
                'language_tamil' => $jathagam['tamil'],
            ]);
        }

        $lagnams = [
            ['english' => 'Aries', 'tamil' => 'மேஷம்.'],
            ['english' => 'Taurus', 'tamil' => 'ரிஷபம்.'],
            ['english' => 'Gemini', 'tamil' => 'மிதுனம்.'],
            ['english' => 'Cancer', 'tamil' => 'கடகம்.'],
            ['english' => 'Leo', 'tamil' => 'சிம்மம்.'],
            ['english' => 'Virgo', 'tamil' => 'கன்னி.'],
            ['english' => 'Libra', 'tamil' => 'துலாம்.'],
            ['english' => 'Scorpio', 'tamil' => 'விருச்சிகம்.'],
            ['english' => 'Sagittarious', 'tamil' => 'தனுசு.'],
            ['english' => 'Capricorn', 'tamil' => 'மகரம்.'],
            ['english' => "Aquarious", 'tamil' => 'கும்பம்.'],
            ['english' => "Pisces", 'tamil' => 'மீனம்.'],
            ['english' => "Don't Know", 'tamil' => 'தெரியவில்லை.']
        ];

        DB::table('lagnams')->truncate();
        foreach ($lagnams as $lagnam) {
            DB::table('lagnams')->insert([
                'title' => $lagnam['english'],
                'language_tamil' => $lagnam['tamil'],
            ]);
        }

        $religions = [
            ['english' => 'Hindu', 'tamil' => 'இந்து.'],
            ['english' => 'Christian', 'tamil' => 'கிறிஸ்துவர்.'],
            ['english' => 'Muslim', 'tamil' => 'முஸ்லிம்.'],
        ];

        DB::table('religions')->truncate();
        foreach ($religions as $religion) {
            DB::table('religions')->insert([
                'title' => $religion['english'],
                'language_tamil' => $religion['tamil'],
            ]);
        }

        $parent_statuses = [
            ['english' => 'Alive', 'tamil' => 'உண்டு.'],
            ['english' => 'Late', 'tamil' => 'லேட்.'],
            ['english' => 'Dont Know', 'tamil' => 'தெரியவில்லை.'],
        ];

        DB::table('parent_statuses')->truncate();
        foreach ($parent_statuses as $parent_status) {
            DB::table('parent_statuses')->insert([
                'title' => $parent_status['english'],
                'language_tamil' => $parent_status['tamil'],
            ]);
        }

        $rasi_nakshatras = [ 
            ['english' => 'Aries-Ashwini', 'tamil' => 'மேஷம்-அஸ்வினி.'],
            ['english' => 'Aries-Bharani', 'tamil' => 'மேஷம்-பரணி.'],
            ['english' => 'Aries-Krithigai', 'tamil' => 'மேஷம்-கிருத்திகை.'],
            ['english' => 'Taurus-Krithigai', 'tamil' => 'ரிஷபம்-கிருத்திகை.'],
        ];

        DB::table('rasi_nakshatras')->truncate();
        foreach ($rasi_nakshatras as $rasi_nakshatram) {
            DB::table('rasi_nakshatras')->insert([
                'title' => $rasi_nakshatram['english'],
                'language_tamil' => $rasi_nakshatram['tamil'],
            ]);
        }

        $rasi_navamsams = [
            ['english' => 'Lagnam', 'tamil' => 'லக்னம்.'],
            ['english' => 'Sun', 'tamil' => 'சூரியன்.'],
            ['english' => 'Moon', 'tamil' => 'சந்திரன்.'],
            ['english' => 'செவ்வாய்', 'tamil' => 'Mars.'],
            ['english' => 'Raagu', 'tamil' => 'ராகு.'],
            ['english' => 'Jupiter', 'tamil' => 'குரு.'],
            ['english' => 'Saturn', 'tamil' => 'சனி.'],
            ['english' => 'Mercury', 'tamil' => 'புதன்.'],
            ['english' => 'Kethu', 'tamil' => 'கேது.'],
            ['english' => 'Venus', 'tamil' => 'சுக்கிரன்.'],
            ['english' => 'Maanthi', 'tamil' => 'மாந்தி.'],
            ['english' => 'Mars (V)', 'tamil' => 'செவ்வாய் (வ).'],
            ['english' => 'Jupiter (V)', 'tamil' => 'குரு (வ).'],
            ['english' => 'Saturn (V)', 'tamil' => 'சனி (வ).'],
            ['english' => 'Mercury (V)', 'tamil' => 'புதன் (வ).'],
            ['english' => 'Venus (V)', 'tamil' => 'சுக்கிரன் (வ).']
        ];

        DB::table('rasi_navamsams')->truncate();
        foreach ($rasi_navamsams as $rasi_navamsam) {
            DB::table('rasi_navamsams')->insert([
                'title' => $rasi_navamsam['english'],
                'language_tamil' => $rasi_navamsam['tamil'],
            ]);
        }

        $social_types = [
            ['english' => 'Lower Middle Class', 'tamil' => 'வசதி குறைவு.'],
            ['english' => 'Middle', 'tamil' => 'நடுத்தரம்.'],
            ['english' => 'V.I.P.', 'tamil' => 'வி.ஐ.பி.'],
            ['english' => 'V.V.I.P.', 'tamil' => 'வி.வி.ஐ.பி.'],
            ['english' => 'Royal', 'tamil' => 'ராயல்.'],
            ['english' => 'Dont Know', 'tamil' => 'தெரியவில்லை.']
        ];

        DB::table('social_types')->truncate();
        foreach ($social_types as $social_type) {
            DB::table('social_types')->insert([
                'title' => $social_type['english'],
                'language_tamil' => $social_type['tamil'],
            ]);
        }

        $works = [
            ['english' => 'Agriculture', 'tamil' => 'விவசாயம்.'],
            ['english' => 'Doctor', 'tamil' => 'மருத்துவர்.'],
            ['english' => 'Govt job', 'tamil' => 'அரசு வேலை.'],
            ['english' => 'Not at work', 'tamil' => 'பணியில் இல்லை.'],
            ['english' => 'Private work', 'tamil' => 'தனியார் வேலை.'],
            ['english' => 'Self Employed', 'tamil' => 'சுயதொழில்.'],
            ['english' => 'Software', 'tamil' => 'சாப்ட்வேர்.'],
            ['english' => 'Student', 'tamil' => 'படித்துக் கொண்டிருக்கிறார்.'],
            ['english' => 'Others', 'tamil' => 'Others.'],
            ['english' => 'Dont Know', 'tamil' => 'தெரியவில்லை.'],
        ];

        DB::table('works')->truncate();
        foreach ($works as $work) {
            DB::table('works')->insert([
                'title' => $work['english'],
                'language_tamil' => $work['tamil'],
            ]);
        }

        $physical_statuses = [
            ['english' => 'Physically Challenged', 'tamil' => 'மாற்றுத் திறனாளி.'],
        ];

        DB::table('physical_statuses')->truncate();
        foreach ($physical_statuses as $physical_status) {
            DB::table('physical_statuses')->insert([
                'title' => $physical_status['english'],
                'language_tamil' => $physical_status['tamil'],
            ]);
        }

        $marital_statuses = [
            ['english' => 'First Marriage', 'tamil' => 'முதல் மணம்.'],
        ];

        DB::table('marital_statuses')->truncate();
        foreach ($marital_statuses as $marital_status) {
            DB::table('marital_statuses')->insert([
                'title' => $marital_status['english'],
                'language_tamil' => $marital_status['tamil'],
            ]);
        }

        $registered_bies = [
            ['english' => 'Self', 'tamil' => 'ஜாதகர்.'],
        ];

        DB::table('registered_bies')->truncate();
        foreach ($registered_bies as $registered_by) {
            DB::table('registered_bies')->insert([
                'title' => $registered_by['english'],
                'language_tamil' => $registered_by['tamil'],
            ]);
        }

        $body_types = [
            ['english' => 'Slim Body Type', 'tamil' => 'மெலிதான உடல் அமைப்பு.'],
        ];

        DB::table('body_types')->truncate();
        foreach ($body_types as $body_type) {
            DB::table('body_types')->insert([
                'title' => $body_type['english'],
                'language_tamil' => $body_type['tamil'],
            ]);
        }

        $colors =  [
            ['english' => 'Dark', 'tamil' => 'கருப்பு.'],
         ];

         DB::table('colors')->truncate();
         foreach ($colors as $color) {
             DB::table('colors')->insert([
                 'title' => $color['english'],
                 'language_tamil' => $color['tamil'],
             ]);
         }

         $work_places = [
            ['english' => 'Tamil Nadu', 'tamil' => 'தமிழ்நாடு.'],
         ];

         DB::table('work_places')->truncate();
         foreach ($work_places as $work_place) {
             DB::table('work_places')->insert([
                 'title' => $work_place['english'],
                 'language_tamil' => $work_place['tamil'],
             ]);
         }

         $nakshatra_pathams = [
            ['english' => 'Patham 1', 'tamil' => 'பாதம் 1.'],
         ];

         DB::table('nakshatra_pathams')->truncate();
         foreach ($nakshatra_pathams as $nakshatra_patham) {
             DB::table('nakshatra_pathams')->insert([
                 'title' => $nakshatra_patham['english'],
                 'language_tamil' => $nakshatra_patham['tamil'],
             ]);
         }

         $navamsams = [
            ['english' => 'Patham 1', 'tamil' => 'பாதம் 1.']
         ];

    }
}
