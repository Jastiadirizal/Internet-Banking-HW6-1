<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Profile::where('id_user', auth()->user()->id)->first();

        return view('dashboard', [
            'title' => 'Dashboard',
            'user' => $user->nama,
            'saldo' => $user->saldo,
            'data' => $user

        ]);
    }
}
