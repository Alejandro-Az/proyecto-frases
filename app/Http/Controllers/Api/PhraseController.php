<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phrase;

class PhraseController extends Controller
{
    public function index()
    {
        $phrases = Phrase::inRandomOrder()->take(1)->get();
        return response()->json($phrases);
    }
    
}
