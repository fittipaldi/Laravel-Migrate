<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $dados = array();
        return view('home.index', $dados);
    }
}