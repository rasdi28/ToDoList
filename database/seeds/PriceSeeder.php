<?php

use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PriceSeeder::class);
    }

    public function run(Faker $faker)
    {
	for ($i = 0; $i < 20; $i++) {
		DB::table('users')->insert([
			'name' => $faker->name,
			'email' => $faker->unique()->safeEmail,
                        'password' => bcrypt('password@123'), // Can also be used Hash::make('password@123')
                        'email_verified_at' => now(),
                        'remember_token' => Str::random(10)
               ]);
	}
}


}
