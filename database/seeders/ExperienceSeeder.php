<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::updateOrCreate(
            ['perusahaan' => 'PT. Arkananta Apta Pratista'],
            [
                'posisi' => 'IT Intern',
                'perusahaan' => 'PT. Arkananta Apta Pratista',
                'deskripsi' => "Membantu tim IT dalam operasional dan pemeliharaan sistem sehari-hari.\nSoftware installation.\nRemote user support.",
            ]
        );

        Experience::updateOrCreate(
            ['perusahaan' => 'PT. Bima Nusa Internasional'],
            [
                'posisi' => 'IT Intern',
                'perusahaan' => 'PT. Bima Nusa Internasional',
                'deskripsi' => "Membantu tim IT dalam operasional sehari-hari.\nTroubleshooting.",
            ]
        );
    }
}
