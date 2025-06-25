<?php

namespace App\Http\Controllers;

use App\Caseip;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function searchcaseip(Request $request)
    {
        $cari = $request->input('q');
        
        $caseip = Caseip::where('warna', 'LIKE', "%$cari%")->get();

        if ($caseip->isEmpty()) {
            return response()->json([
                'success' => false,
                'data' => 'data tidak di temukan'
            ], 404)->header('Access-Control-Allow-Origin', '*');
        } else {
            return response()->json([
                'success' => true,
                'data' => $caseip
            ], 200)->header('Access-Control-Allow-Origin', '*');
        }
    }
}
