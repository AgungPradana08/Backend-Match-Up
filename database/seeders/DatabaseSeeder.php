<?php

namespace Database\Seeders;

use App\Models\Sparring;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('sparring')->insert([
            'nama' => 'Bayern Munchen',
            'olahraga' => 'Sepak Bola',
            'aksebilitas' => 'Terbuka',
            'tanggal' => '2023',
            'lokasi' => 'Berlian Sport Center',
            'biaya' => '19k',
            'deskripsi' => 'Ayo kita jadi juara ucl sebelum psg menjuarai, tapi kan gua belum tau kalo kita apakah bisa menjadi juara selanjutnya',
        ]);
        // Sparring::factory(10)->create();
    }
}
