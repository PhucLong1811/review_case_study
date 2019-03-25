<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Long',
        	'email'=>'tinhanh4733@gmail.com',
        	'password'=>'123456',
        	'phone'=>'0123456789',
        	'address'=>'123 Phạm thị liên',
        	'level'=>'1',
        	'image'=>'<img src="<img src="review\storage\app\public\images\0LnLICLabZt3ahPxFw9WasBeC3NSBwRPJDeO1AHH.jpeg">" alt="">',
        	'DOB'=>'2000/1/1',
        ]);
        DB::table('users')->insert([
        	'name'=>'Dung',
        	'email'=>'tinhanh473@gmail.com',
        	'password'=>'123456',
        	'phone'=>'0123456789',
        	'address'=>'123 Phạm thị liên',
        	'level'=>'1',
        	'image'=>'<img src="<img src="review\storage\app\public\images\0LnLICLabZt3ahPxFw9WasBeC3NSBwRPJDeO1AHH.jpeg">" alt="">',
        	'DOB'=>'2000/1/1',
        ]);
        DB::table('users')->insert([
        	'name'=>'Phúc Long',
        	'email'=>'tinhanh47333@gmail.com',
        	'password'=>'123456',
        	'phone'=>'0123456789',
        	'address'=>'123 Phạm thị liên',
        	'level'=>'1',
        	'image'=>'<img src="<img src="review\storage\app\public\images\0LnLICLabZt3ahPxFw9WasBeC3NSBwRPJDeO1AHH.jpeg">" alt="">',
        	'DOB'=>'2000/1/1',
        ]);
    }
}
