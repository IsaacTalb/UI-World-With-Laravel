<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    //
    public function index()
    {
        $components = Component::all();
        return view('components.index', compact('components'));
    }
}
