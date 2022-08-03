<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomePageController extends Controller
{
    public function index(Request $request){
        $letra = $request->inicial;
        $usuarios = User::all();
        $usuarios = User::where('name', 'like', $letra.'%')->get();

        return view('usuarios')->withUsuarios($usuarios);
    }
}
