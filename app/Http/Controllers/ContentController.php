<?php

namespace App\Http\Controllers;

use App\Models\Content;

class ContentController extends Controller
{
    public function index() {
        $content = Content::all();

        return view('welcome', compact('content'));
    }
}
