<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('review.list');
    }

    public function create()
    {
        return view('review.create');
    }
}
