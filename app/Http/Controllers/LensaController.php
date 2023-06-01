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
        if ($response->ok()) {
            $responseData = $response->json();
            if (isset($responseData['data'])) {
                $lensas = $responseData['data'];
                return view('frontend.pages.lensa', compact('lensas', 'request'));
            } else {
                return redirect()->back()->with('error', 'Lensa tidak ditemukan');
            }
        } else {
            return redirect()->back()->with('error', 'Lensa tidak ditemukan');
        }
    }

    public function searchLens(Request $request)
    {
        $query = $request->input('query');
        $priceFilter = $request->input('price_filter');

        $response = Http::get('https://cameris.my.id/api/lensa');
        $lensas = [];

        if ($response->ok()) {
            $lensaData = $response->json();
            if (isset($lensaData['data'])) {
                $originalLensas = $lensaData['data'];
                $filteredLensas = [];

                foreach ($originalLensas as $lensa) {
                    $namaLensa = strtolower($lensa['nama_lensa']);
                    $hargaLensa = strtolower($lensa['harga']);

                    // Filter berdasarkan query dan price_filter
                    if (
                        (strpos($namaLensa, strtolower($query)) !== false || (float)$hargaLensa <= (float)$query) &&
                        (!$priceFilter || (float)$hargaLensa <= (float)$priceFilter)
                    ) {
                        $filteredLensas[] = $lensa;
                    }
                }

                $lensas = $filteredLensas;
                return view('frontend.pages.lensa', compact('lensas', 'query', 'request'));
            } else {
                return redirect()->back()->with('error', 'Lensa tidak ditemukan');
            }
        } else {
            return redirect()->back()->with('error', 'Lensa tidak ditemukan');
        }
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