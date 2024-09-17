<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //menampilkan catatan(read)
    public function show(Request $request){
        $notes = Note::all();
        return view("note.show-notes",compact("notes"));
    }
    
    //create-formulir
    public function form(){
        return view("note.form");
    }

    //create-aksi
    public function create(Request $request){
        //memvalidasi data
        $request->validate([
            "judul"=> "required|unique:notes,judul|max:255",
            "isi"=> "required",
        ]);
        //membuat data baru
        Note::create([
            "judul"=> $request->judul,
            "isi"=> $request->isi,
        ]);
        //kembali kehalaman daftar catatan
        return redirect(route('notes'));
    }

    //update data
    public function update(Request $request, $id){

        // Mencari post berdasarkan ID
        $note = Note::findOrFail($id);

        // Validasi data yang diterima
        $validatedData = $request->validate([
            'judul' => 'required|unique:notes,judul|max:255',
            'isi' => 'required',
        ]);
        // Memperbarui entitas post dengan data yang sudah divalidasi
        $note->update($validatedData);
        //kembali ke halaman daftar catatan
        return redirect(route('notes'));
    }

    //form untuk update
    public function update_form($id){
        $note = Note::findOrFail($id); // Mengambil data pengguna berdasarkan ID
        return view('note.update-form', compact('note')); // Mengirimkan data pengguna ke tampilan
    }

    //delete data
    public function delete_note($id){
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect(route('notes'));
    }
}
