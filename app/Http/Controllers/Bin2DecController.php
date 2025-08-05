<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bin2DecController extends Controller
{
    public function index()
    {
        return view('bin2dec');
        # akan mengarahkan ke view/blade/tampilan bin2dec yang akan ditampilkan di browser
    }

    public function convert(Request $request)
    {
        $request->validate(['binary' => 'required|regex:/^[01]+$/', ]);
        # untuk validasi input bahwa yang dimasukan hanyalah angka 0 dan 1

        $binary = $request->input('binary');
        # validasi yang sudah dibuat kemudian dibungkus dengan $request
        $decimal = bindec($binary);
        # fungsi yang dibuat untuk mengubah angka biner menjadi decimal

        return view('bin2dec', compact('binary','decimal'));
    }
}
