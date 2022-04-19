<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $filename = time() .'_'. $image->getClientOriginalName();
                $image->storeAs('upload', $filename);

                $gallery = new Gallery();
                $gallery->name = $filename;
                $gallery->save();
            }
        }

        return back();

    }
}
