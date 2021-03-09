<?php

namespace App\Http\Controllers;

class GamesController extends Controller
{
    /**
     * Display the games home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }
}
