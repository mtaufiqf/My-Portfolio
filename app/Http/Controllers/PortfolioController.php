<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $experiences = Experience::all();
        $skills = Skill::all();

        return view('portfolio', [
            'profile' => $profile,
            'experiences' => $experiences,
            'skills' => $skills,
        ]);
    }

    public function editFoto()
{
    $profile = Profile::first();
    return view('edit-foto', ['profile' => $profile]);
}

public function updateFoto(Request $request)
{
    $request->validate([
        'foto' => 'required|image|max:2048', // maksimal 2MB
    ]);

    $profile = Profile::first();

    $path = $request->file('foto')->store('profile', 'public');

    $profile->update(['foto' => $path]);

    return redirect('/')->with('success', 'Foto berhasil diupload!');
}
}

