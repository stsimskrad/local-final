<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \DB::table('users')->insert([
            'email' => 'admin@dost.com',
            'password' => bcrypt('dost9ict'),
            'role' => 'Super Administrator',
            'is_active' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
        ]);

        \DB::table('user_profiles')->insert([
            'firstname' => 'Ra-ouf',
            'lastname' => 'Jumli',
            'middlename' => 'Indanan',
            'gender' => 'Male',
            'user_id' => 1,
            'mobile' => '09557650803',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // $this->call(AllotmentsTableSeeder::class);
        // $this->call(AllotmentListsTableSeeder::class);
        // $this->call(AllotmentBalancesTableSeeder::class);
        // $this->call(DisbursementsTableSeeder::class);
        // $this->call(ListPrivilegesTableSeeder::class);
        // $this->call(ListCoursesTableSeeder::class);
    }
}
