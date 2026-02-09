<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {

        $name = 'David';
        $habits = ['Exercitar', 'Estudar', 'Ler livros', 'Meditar'];

        return view('home', compact('name', 'habits'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
