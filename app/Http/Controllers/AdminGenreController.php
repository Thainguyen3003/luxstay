<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class AdminGenreController extends Controller
{
    public function formCreateGenre() {
        return view('admin.pages.genre.createGenre');
    }

    public function createGenre(Request $request) {
        $genre = new Genre();
        $genre->name = $request->nameGenre;
        $genre->description = $request->descGenre;
        $genre->slug = $request->slugGenre;
        $genre->status = $request->statusGenre;
        $genre->save();

        return redirect('admin/danh-sach-the-loai');

    }

    public function listGenre() {
        $listGenres = Genre::all();
        return view('admin.pages.genre.listGenre', compact('listGenres'));
    }

    public function formEditGenre($slugGenre) {
        $genre = Genre::where('slug', $slugGenre)->first();
        return view('admin.pages.genre.editGenre', compact('genre'));
    }

    public function editGenre(Request $request) {
        $genre = Genre::find($request->idGenre);
        $genre->name = $request->nameGenre;
        $genre->description = $request->descGenre;
        $genre->status = $request->statusGenre;
        $genre->save();
        
        return redirect('admin/danh-sach-the-loai');
    }

    public function deleteGenre($slugGenre) {
        $genre = Genre::where('slug', $slugGenre)->first();
        $genre->delete();

        return redirect()->back();
    }
}
