<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'id' => 1,
			'image' => 'ddd.png',
			'name' => 'Quang Merce',
			'slug' => 'quang-merce',
			'email' => 'dvq.dev@gmail.com',
            'phone' => '0969030421',
            'address' => 'Nam Định',
            'gender' => 1,
            'birthday' => Carbon::createFromFormat('Y-m-d H:i:s', '1998-07-26 21:30:30'),
            'info' => "22 Year Old",
            'password' => bcrypt('12345678'),
            'level' => 1,
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
