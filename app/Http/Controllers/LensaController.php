<?php

namespace App\Http\Controllers;

use App\Models\Lensa;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LensaController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('https://cameris.my.id/api/lensa');
        $lensas = collect($response->json());
        return view('frontend.pages.lensa', compact('lensas', 'request'));
    }

    public function show($id)
    {
        $response = Http::get("https://cameris.my.id/api/lensa?id={$id}");
        if ($response->ok()) {
            $lensas = $response->json()['data'];
            $lensa = collect($lensas)->firstWhere('id', $id);
            if ($lensa) {
                return view('frontend.pages.detail_lensa', compact('lensa'));
            } else {
                abort('error', 'Lensa tidak ditemukan');
            }
        } else {
            abort('error', 'Lensa tidak ditemukan');
        }
    }
    public function getApi() {
        $lensa = Lensa::all();
        return response()->json(['data' => $lensa]);
    
    }
}