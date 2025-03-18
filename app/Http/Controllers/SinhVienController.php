<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinhVienController extends Controller
{
    public function index() {
        $users = DB::table('sinh_viens')
        ->select('sinh_viens.name AS sinh_vien_name', 'khoas.name AS khoa_name')
        ->join('khoas', 'khoas.id', '=', 'sinh_viens.khoas_id')
        ->get();
        $countKhoa = DB::table('khoas')
        ->select(DB::raw('COUNT(*) AS sinh_vien_count, khoas.name as khoa_name'))
        ->join('sinh_viens', 'khoas.id', '=', 'sinh_viens.id')
        ->groupBy('khoas.id')
        ->get() ;
        return view('SinhVien', ['users' => $users, 'count' => $countKhoa]);
        
        // $countKhoa = DB::table('khoas')
        // ->select(DB::raw('COUNT(*) AS sinh_vien_count, khoas.name as khoa_name'))
        // ->join('sinh_viens', 'khoas.id', '=', 'sinh_viens.id')
        // ->where('khoas.name', '=', 'TKDH')
        // ->groupBy('khoas.id')
        // ->count('sinh_viens.id');
        // return view('SinhVien', ['data' => $countKhoa]);

    }
}
