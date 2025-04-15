<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function getGallery()
    {

    }

    public function index()
    {
        return csrf_token();

    }
}

