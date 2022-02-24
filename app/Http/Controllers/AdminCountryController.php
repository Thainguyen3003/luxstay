<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class AdminCountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formCreateCountry() {
        return view('admin.pages.country.createCountry');
    }

    public function createCountry(Request $request) {
        $country = new Country();
        $country->name = $request->nameCountry;
        $country->description = $request->descCountry;
        $country->status = $request->statusCountry;
        $country->slug = $request->descSlug;
        $country->save();

        return redirect('admin/danh-sach-quoc-gia');
    }

    public function listCountry() {
        $listCountries = Country::all();
        return view('admin.pages.country.listCountries', compact('listCountries'));
    }

    public function formEditCountry($slugCountry) {
        $country = Country::where('slug', $slugCountry)->first();
        return view('admin.pages.country.editCountry', compact('country'));
    }

    public function editCountry(Request $request) {
        $country = Country::find($request->idCountry);
        $country->name = $request->nameCountry;
        $country->description = $request->descCountry;
        $country->slug = $request->slugCountry;
        $country->status = $request->statusCountry;
        $country->save();
        return redirect('admin/danh-sach-quoc-gia');
    }

    public function deleteCountry($slugCountry) {
        $country = Country::where('slug', $slugCountry)->first();
        $country->delete();
        return redirect()->back();
    }
}
