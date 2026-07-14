<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'nama' => 'Fiq',
            'headline' => 'Fresh Graduate in Software Engineering | Former IT Intern',
            'bio' => 'Lulusan SMK Negeri 1 Balikpapan jurusan Rekayasa Perangkat Lunak, dengan pengalaman magang di bidang IT. Fokus saat ini adalah mempelajari pengembangan web.',
            'pendidikan' => 'SMK Negeri 1 Balikpapan',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'lokasi' => 'Balikpapan, Indonesia',
            'email' => 'muhtaufiqfirmansyah@gmail.com',
            'linkedin_url' => 'https://www.linkedin.com/in/muhammad-taufiq-firmansyah-1b489a377',
            'instagram_url' => 'https://www.instagram.com/mftaufiq_?igsh=MXFuMXUwamxyZjdreg==',
        ]);
    }
}
