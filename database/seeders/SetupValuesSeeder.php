<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetupValuesSeeder extends Seeder
{
    public function run()
    {


        $genders = [
            'Female',
            'Male',
            'Nonbinary / Nonconforming',
            'Transgender',
            'Trans Male / Trans Man',
            'Trans Female / Trans Woman',
            'Agender',
            'Gender Queer / Gender Fluid',
            'Third Gender',
            'Prefer Not to Say'
        ];

        $languages = [
            'English',
            'Spanish',
            'French',
            'German',
            'Mandarin',
            'Arabic',
            'Hindi',
            'Portuguese',
            'Bengali',
            'Russian'
        ];

        $ethnicities = [
            'American Indian / Alaska Native',
            'Asian',
            'Black / African American',
            'Hispanic / Latino',
            'Native Hawaiian / Pacific Islander',
            'White / Caucasian',
            'Prefer Not to Say'
        ];

        // Insert languages
        $setup = DB::table('setup')->where('setup_value', 'Languages')->first();
        foreach ($languages as $language) {
            DB::table('setup_values')->insert([
                'setup_id' => $setup->id,
                'setup_value_label' => $language,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        // Insert genders
        $setup = DB::table('setup')->where('setup_value', 'Gender')->first();
        foreach ($genders as $gender) {
            DB::table('setup_values')->insert([
                'setup_id' => $setup->id,
                'setup_value_label' => $gender,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        // Insert ethnicities
        $setup = DB::table('setup')->where('setup_value', 'Ethnicity')->first();
        foreach ($ethnicities as $ethnicity) {
            DB::table('setup_values')->insert([
                'setup_id' => $setup->id,
                'setup_value_label' => $ethnicity,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

?>