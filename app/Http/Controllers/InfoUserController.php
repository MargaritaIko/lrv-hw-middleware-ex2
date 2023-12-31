<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoUserController extends Controller
{
    public function index() {
        $table = Auth::user();
        return view('info.infouser', [
            'table' => $table
        ]);
    }
}
