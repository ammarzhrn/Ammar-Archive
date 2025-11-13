<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('archive.index');
    }

    public function web()
    {
        return view('archive.web');
    }

    public function photo()
    {
        return view('archive.photo');
    }

    public function design()
    {
        
    }
}
