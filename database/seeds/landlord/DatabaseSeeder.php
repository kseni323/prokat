<?php

use Illuminate\Database\Seeder\landlord;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		
		$this->call([
		   TenantSeeder::class,
		]);
    }
}
