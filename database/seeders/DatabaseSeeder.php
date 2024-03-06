<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CameraDaily;
use App\Models\Titik;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Hendri',
            'email' => 'hendri@patel.co.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Fauzan',
            'email' => 'fauzan@patel.co.id',
            'password' => bcrypt('12345')
        ]);

        Titik::create([
            'slug' => 'jl-kol-h-burlian-km-8-depan-trakindo',
            'name' => 'JL Kol H Burlian KM 8 Depan Trakindo'
        ]);

        Titik::create([
            'slug' => 'jl-kol-h-burlian-km-5',
            'name' => 'JL Kol H Burlian KM 5'
        ]);

        CameraDaily::create([
            'user_id' => 1,
            'titik_id' => 1,
            'slug' => '120240306',
            'catatan' => 'Coba Catatan'
        ]);

        CameraDaily::create([
            'user_id' => 1,
            'titik_id' => 2,
            'slug' => '220240306',
            'catatan' => 'Coba Catatan'
        ]);

        CameraDaily::create([
            'user_id' => 2,
            'titik_id' => 2,
            'slug' => '220240307',
            'catatan' => 'Coba Catatan'
        ]);
    }
}
