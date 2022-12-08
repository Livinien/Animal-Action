<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    
    // SHOW ALL ANIMALS //
    public function index() {
        return view('animals.index', [
            'animals' => Animal::all()
        ]);
    }

    // SHOW SINGLE ANIMAL //
    public function show(Animal $animal) {
        return view('animals.show', [
            'animal' => $animal
        ]);
    }
}
