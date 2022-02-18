<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use App\Models\Movie;

class AdminEpisodeController extends Controller
{
    public function formCreateEpisode() {
        $listMovies = Movie::all();
        return view('admin.pages.episode.createEpisode', compact('listMovies'));
    }

    public function createEpisode(Request $request) {
        $episode = new Episode();
        $episode->movie_id = $request->movie_id;
        $episode->name = $request->nameEpisode;
        $episode->episode = $request->episode;
        $episode->description = $request->descEpisode;
        $episode->link = $request->linkEpisode;
        $episode->slug = $request->slugEpisode;
        
        $episode->save();
        return redirect('admin/danh-sach-tap-phim');
    }

    public function listEpisodes() {
        $listEpisodes = Episode::all();
        return view('admin.pages.episode.listEpisodes', compact('listEpisodes'));
    }

    public function formEditEpisode($slugEpisode) {
        $episode = Episode::where('slug', $slugEpisode)->first();
        return view('admin.pages.episode.editEpisode', compact('episode'));
    }

    public function editEpisode(Request $request) {
        $episode = Episode::find($request->idEpisode);
        $episode->name = $request->nameEpisode;
        $episode->description = $request->descEpisode;
        $episode->description = $request->slugEpisode;
        $episode->status = $request->statusEpisode;
        $episode->save();
        return redirect('admin/danh-sach-quoc-gia');
    }

    public function deleteEpisode($slugEpisode) {
        $episode = Episode::where('slug', $slugEpisode)->first();
        $episode->delete();
        return redirect()->back();
    }
}
