<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            'message'=>'We are here to help you',
            'address'=>'Pokhara,Nepal',
            'email'=>'email.@email.com',
            'phone'=>'1234567890',
            'openTime'=>'sun-friday , 10:00 AM - 5:00 PM',
        ];
        \App\Models\Contact::create($data);
    }
}
