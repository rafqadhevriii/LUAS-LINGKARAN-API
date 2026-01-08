<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;

class LingkaranController extends Controller
{
    public function hitungLuas(Request $request)
    {
        $jari = $request->input('jari');
        $luas = 3.14 * $jari * $jari;

        return response()->json([
            'pesan' => 'Berhasil menghitung luas lingkaran',
            'jari_jari' => $jari,
            'hasil' => $luas
        ]);
    }
}
