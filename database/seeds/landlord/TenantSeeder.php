<?php

use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//Default Settings
		DB::table('tenants')->insert([
			[
			 'name' => config('app.main_database'),
            'domain' => config('app.url'),
            'database' => config('app.main_database'),
			],
		]);

		
    }
}
