<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        $query = DB::table('posts')
        ->orderByDesc('view')
        ->limit(10);
        $data = $query->get();
        return view('Txn', ['data' => $data]);
    }
}
