<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('tags', [
            'tags' => $user->tags
        ]);
    }
}
