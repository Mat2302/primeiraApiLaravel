<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    public function index() {
        $titles = Title::all();
        return view('welcome', ['titles' => $titles]);
    }

    public function create() {
        return view('titles.create');
    }

    public function store(Request $request) {
        $title = new Title;

        $title->championship = $request->championship;
        $title->champion = $request->champion;
        $title->sndPlace = $request->sndPlace;
        $title->private = $request->private;
        $title->description = $request->description;

        $title->save();

        return redirect('/');
    }
}
