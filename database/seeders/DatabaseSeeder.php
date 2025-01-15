<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    //run buat mendefinisikan data yang akan dimasukkan ke dalam database
    {
        User::create([
    //Fungsi ini digunakan buat dan nyimpan data pengguna baru ke dalam tabel users. 
    //User adalah model yang mewakili tabel users dalam database. 
    //create() adalah metode dari Eloquent yang digunakan untuk membuat model baru dan menyimpannya ke dalam database
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
            // Kata sandi yang disimpan dalam database menggunakan metode Hash::make() untuk mengenkripsi kata sandi password
        ]);
        $this->call(KostSeeder::class);
        //Setelah memasukkan pengguna, seeder ini juga memanggil KostSeeder
    }
}
