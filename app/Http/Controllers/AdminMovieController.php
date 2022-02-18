<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Country;
use App\Models\Category;

class AdminMovieController extends Controller
{
    public function formCreateMovie() {
        $countries = Country::all();
        $categories = Category::all();

        return view('admin.pages.movie.createMovie', compact('countries', 'categories'));
    }

    public function createMovie(Request $request) {
        try {
            $movie = new Movie();
            $getImage = $request->file('image');
            if($getImage) {
                $currentTimestamp = now()->timestamp;
                $getNameImage = $getImage->getClientOriginalName();
                $nameImage = current(explode('.', $getNameImage));
                $newImage ='movies/'. $nameImage.'-'.$currentTimestamp. '.' . $getImage->getClientOriginalExtension();
                $getImage->move('../storage/app/public/movies', $newImage);
                $movie->image = $newImage;
            }
            $movie->name = $request->nameMovie;
            $movie->description = $request->descMovie;
            $movie->slug = $request->slugMovie;
            $movie->country_id = $request->country_id;
            $movie->category_id = $request->category_id;
            $movie->status = $request->statusMovie;
            $movie->save();
            return redirect('/admin/danh-sach-phim');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function listMovie() {
        $listMovies = Movie::all();
        return view('admin.pages.movie.listMovies', compact('listMovies'));
    }

    public function formEditMovie($slugMovie) {
        $countries = Country::all();
        $categories = Category::all();
        $movie = Movie::where('slug', $slugMovie)->first();
        return view('admin.pages.movie.editMovie', compact('movie', 'countries', 'categories'));
    }

    public function editMovie(Request $request) {
        try {
            $movie = Movie::find($request->idMovie);
            $getImage = $request->file('image');
            if($getImage) {
                $currentTimestamp = now()->timestamp;
                $getNameImage = $getImage->getClientOriginalName();
                $nameImage = current(explode('.', $getNameImage));
                $newImage ='movies/'. $nameImage.'-'.$currentTimestamp. '.' . $getImage->getClientOriginalExtension();
                $getImage->move('../storage/app/public/movies', $newImage);
                $movie->image = $newImage;
            }
            $movie->name = $request->nameMovie;
            $movie->description = $request->descMovie;
            $movie->slug = $request->slugMovie;
            $movie->country_id = $request->country_id;
            $movie->category_id = $request->category_id;
            $movie->status = $request->statusMovie;
            $movie->save();
            return redirect('/admin/danh-sach-phim');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function deleteMovie($slugMovie) {
        $movie = Movie::where('slug', $slugMovie)->first();
        $movie->delete();
        return redirect()->back();
    }

}
