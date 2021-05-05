<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index()
    {
        return "Listado principal de autos";
    }

    public function create()
    {
        return "Crear un auto";
    }

    public function show($auto)
    {
        return "Has seleccionado el auto $auto";
    }
}
