<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;

class AdminYearController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formCreateYear() {
        return view('admin.pages.year.createYear');
    }

    public function createYear(Request $request) {
        $year = new Year();
        $year->name = $request->nameYear;
        $year->year = $request->year;
        $year->description = $request->descYear;
        $year->status = $request->statusYear;
        $year->slug = $request->slugYear;
        $year->save();

        return redirect('admin/danh-sach-nam');
    }

    public function listYears() {
        $listYears = Year::all();
        return view('admin.pages.year.listYears', compact('listYears'));
    }

    public function formEditYear($slugYear) {
        $year = Year::where('slug', $slugYear)->first();
        return view('admin.pages.year.editYear', compact('year'));
    }

    public function editYear(Request $request) {
        $year = Year::find($request->idYear);
        $year->name = $request->nameYear;
        $year->year = $request->year;
        $year->description = $request->descYear;
        $year->status = $request->statusYear;
        $year->slug = $request->slugYear;
        $year->save();
        return redirect('admin/danh-sach-nam');
    }

    public function deleteYear($slugYear) {
        $year = Year::where('slug', $slugYear)->first();
        $year->delete();
        return redirect()->back();
        
    }
}
