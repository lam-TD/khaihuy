<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhanVien;

class NhanVienController extends Controller
{
    public function all() {
        $nv = NhanVien::orderby('id', 'desc')->paginate(10);
        return response()->json([
            "data" => $nv
        ], 200);
    }
}
