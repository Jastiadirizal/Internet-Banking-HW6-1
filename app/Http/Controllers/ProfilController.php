<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\UpdateProfilRequest;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();

        return view('profil', [
            'title' => 'Profil',
            'user' => $user
        ]);
    }

    public function edit()
    {
        $user = Profile::where('id_user', auth()->user()->id)->first();

        return view('profil', [
            'title' => 'Profil',
            'user' => $user->nama,
            'data' => $user,
        ]);
    }

    public function update(UpdateProfilRequest $request)
    {
        $user = Profile::where('id_user', auth()->user()->id)->first();

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_rekening' => $request->no_rekening,
            'updated_at' => now()
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Profil berhasil diperbarui');
    }

}
