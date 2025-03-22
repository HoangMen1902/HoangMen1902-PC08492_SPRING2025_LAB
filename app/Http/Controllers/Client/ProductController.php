<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug) {
        return view('Client.detail', ['slug' => $slug]);
    }
}
