<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nama', 'headline', 'bio', 'pendidikan', 'jurusan',
        'lokasi', 'email', 'linkedin_url', 'instagram_url', 'foto'
    ];
}
