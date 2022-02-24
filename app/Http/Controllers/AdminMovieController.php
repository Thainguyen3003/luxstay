<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Country;
use App\Models\Category;
use App\Models\Genre;
use App\Models\MovieGenre;

class AdminMovieController extends Controller
{
    public function formCreateMovie() {
        $countries = Country::all();
        $categories = Category::all();
        $genres = Genre::all();

        return view('admin.pages.movie.createMovie', compact('countries', 'categories', 'genres'));
    }

    public function createMovie(Request $request) {
        try {
            $movie = new Movie();
            $getImage = $request->file('image');
            if($getImage) {
                $path = 'movies';
                $currentTimestamp = now()->timestamp;
                $getNameImage = $getImage->getClientOriginalName();
                $nameImage = current(explode('.', $getNameImage));
                $newImage = $nameImage.'-'.$currentTimestamp. '.' . $getImage->getClientOriginalExtension();
                $getImage->move($path, $newImage);
                $movie->image = $newImage;
            }

            $movie->name = $request->nameMovie;
            $movie->description = $request->descMovie;
            $movie->slug = $request->slugMovie;
            $movie->country_id = $request->country_id;
            $movie->category_id = $request->category_id;
            $movie->status = $request->statusMovie;
            $movie->save();

            $findMovie = Movie::where('slug', $request->slugMovie)->first();
            if($request->genre_id) {
                $listGenre = $request->genre_id;
                foreach ($listGenre as $key => $genre) {
                    $movieGenre = new MovieGenre(); 
                    $movieGenre->movie_id = $findMovie->id;
                    $movieGenre->genre_id = $genre;
                    $movieGenre->save();
                }
            }
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
        $movie = Movie::with('genres')->where('slug', $slugMovie)->first();
        $genres = Genre::all();
        
        return view('admin.pages.movie.editMovie', compact('movie', 'countries', 'categories', 'genres'));
    }

    public function editMovie(Request $request) {
        try {
            $movie = Movie::find($request->idMovie);
            $getImage = $request->file('image');
            if($getImage) {
                $path = 'movies';
                $currentTimestamp = now()->timestamp;
                $getNameImage = $getImage->getClientOriginalName();
                $nameImage = current(explode('.', $getNameImage));
                $newImage = $nameImage.'-'.$currentTimestamp. '.' . $getImage->getClientOriginalExtension();
                $getImage->move($path, $newImage);
                $movie->image = $newImage;
            }

            if($request->genre_id) {

                $listGenre = $request->genre_id;
                $movieGenres = MovieGenre::where('movie_id', $request->idMovie)->delete();
                foreach ($listGenre as $key => $genre) {
                    $movieGenre = new MovieGenre(); 
                    $movieGenre->movie_id = $request->idMovie;
                    $movieGenre->genre_id = $genre;
                    $movieGenre->save();
                }
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
