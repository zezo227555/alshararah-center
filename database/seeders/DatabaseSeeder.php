<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'zidan',
            'email' => 'zidan@gmail.com',
            'password' => Hash::make('zidan227'),
        ]);
        // for ($i=0; $i < 50 ; $i++) {
        //     News::create([
        //         'title' => 'خبر جديد',
        //         'details' => 'تفاصيل عديدة عن الخبر',
        //         'image' => 'app-1.jpg',
        //     ]);
        // }
    }
}
