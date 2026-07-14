<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['nama_skill' => 'HTML5', 'deskripsi' => 'Struktur halaman web semantik.', 'persentase' => 95],
            ['nama_skill' => 'CSS3', 'deskripsi' => 'Styling, layout, dan responsive design.', 'persentase' => 75],
            ['nama_skill' => 'JavaScript', 'deskripsi' => 'Interaktivitas sisi klien.', 'persentase' => 20],
            ['nama_skill' => 'Java', 'deskripsi' => 'Pemrograman berbasis objek dan struktur data solid.', 'persentase' => 79],
            ['nama_skill' => 'PHP', 'deskripsi' => 'Manajemen basis data dan logika server web.', 'persentase' => 60],
            ['nama_skill' => 'Git & GitHub', 'deskripsi' => 'Version control dasar.', 'persentase' => 40],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
