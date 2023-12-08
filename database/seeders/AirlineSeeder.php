<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Airline;
use Carbon\Carbon;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Airline::create([
		'name' => 'United',
		'email' => 'united@airline.com',
	]);

	Airline::create([
		'name' => 'SouthWest',
		'email' => 'south@airline.com',
	]);
	Airline::create([
		'name' => 'Delta',
		'email' => 'delta@airline.com',

	]);
    }
}
