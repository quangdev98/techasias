<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
        	[
        		'id'=>1,
        		'title'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
        		'contentHot'=>'Lorem ipsum sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
        		'image'=>'duhvjd.png',
                'image'=>'dusdd',
        		'postDate'=>'2020-01-01',
        		'tag'=>'eee',
        		'content'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
        		'user_id'=>1,
        		'cate_id'=>1,
                'status'=>2,
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
               [
                    'id'=>2,
                    'title'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
                    'contentHot'=>'Lorem ipsum sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
                    'image'=>'duhvjd.png',
                    'image'=>'dusdd',
                    'postDate'=>'2020-01-01',
                    'tag'=>'eee',
                    'content'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
                    'user_id'=>1,
                    'cate_id'=>1,
                    'status'=>2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            
        ]);
    }
}
