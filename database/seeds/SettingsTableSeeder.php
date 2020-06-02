<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Laravel\'s Blog',
            'address' => 'Kazakhstan, Karagandy',
            'contact_number' => '87009767945',
            'contact_email' => '180103098@stu.sdu.edu.kz'
        ]);
    }
}
