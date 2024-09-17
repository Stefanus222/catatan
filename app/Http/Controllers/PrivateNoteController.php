<?php

namespace App\Http\Controllers;

use App\Models\PrivateNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateNoteController extends Controller
{
    
    public function show(Request $request){
        $user_id = Auth::user()->id;
        $notes = PrivateNote::where("user_id", $user_id)->get();
        return view("privateNote.p-notes", compact("notes"));
    }

    public function adminShow(Request $request){
        $notes = PrivateNote::all();
        return view("privateNote.hanyaAdmin", compact("notes"));
    }
}
