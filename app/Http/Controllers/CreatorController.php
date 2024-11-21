<?php

namespace App\Http\Controllers;
use App\Models\Component;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    //
    public function dashboard()
    {
        $components = Component::where('creator_id', auth()->id())->get();
        return view('creator.dashboard', compact('components'));
    }
    
    public function create()
    {
        return view('creator.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'preview_code' => 'required',
            'copy_code' => 'required',
        ]);
    
        Component::create([
            'name' => $request->name,
            'preview_code' => $request->preview_code,
            'copy_code' => $request->copy_code,
            'creator_id' => auth()->id(),
        ]);
    
        return redirect()->route('creator.dashboard');
    }
}
