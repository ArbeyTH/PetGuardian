<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    public function index()
    {
        $pets = Auth::user()->pets;
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'species' => 'required',
        ]);

        Pet::create([
    'user_id' => Auth::id(),
    'name' => $request->name,
    'species' => $request->species,
    'breed' => $request->breed,
    'birth_date' => $request->birth_date,
]);

        return redirect()->route('pets.index');
    }

    public function edit(Pet $pet)
    {
        if ($pet->user_id !== Auth::id()) {
    abort(403);
}

    return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        if ($pet->user_id !== Auth::id()) {
    abort(403);
}
        $pet->update($request->all());
        return redirect()->route('pets.index');
    }

    public function destroy(Pet $pet)
    {
        if ($pet->user_id !== Auth::id()) {
    abort(403);
}
        $pet->delete();
        return redirect()->route('pets.index');
    }
}