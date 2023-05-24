<?php

namespace App\Http\Controllers;

use App\Models\Fulkit;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FullkitController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('https://cameris.my.id/api/fulkit');
        if ($response->ok()) {
            $responseData = $response->json();
            if (isset($responseData['data'])) {
                $fullkits = $responseData['data'];
                return view('frontend.pages.fullset', compact('fullkits', 'request'));
            } else {
                return redirect()->back()->with('error', 'Kamera Fullkit tidak ditemukan');
            }
        } else {
            return redirect()->back()->with('error', 'Kamera Fullkit tidak ditemukan');
        }
    }

    public function searchFullkit(Request $request)
    {
        $query = $request->input('query');
        $response = Http::get('https://cameris.my.id/api/fulkit');
        $fullkits = []; 
        if ($response->ok()) {
            $fullkitData = $response->json();
            if (isset($fullkitData['data'])) {
                $originalFullkits = $fullkitData['data'];
                $filteredFullkits = [];
                foreach ($originalFullkits as $fullkit) {
                    $namaFullkit = strtolower($fullkit['nama_fulkit']);
                    $hargaFullkit = strtolower($fullkit['harga']);
                    if (strpos($namaFullkit, strtolower($query)) !== false || (float)$hargaFullkit <= (float)$query) {
                        $filteredFullkits[] = $fullkit;
                    }
                }
                $fullkits = $filteredFullkits; 
                return view('frontend.pages.fullset', compact('fullkits', 'query', 'request'));
            } else {
                return redirect()->back()->with('error', 'Fullkit tidak ditemukan');
            }
        } else {
            return redirect()->back()->with('error', 'Fullkit tidak ditemukan');
        }
    }
    
    public function show($id)
    {
        $response = Http::get("https://cameris.my.id/api/fulkit?id={$id}");
        if ($response->ok()) {
            $fullkits = $response->json()['data'];
            $fullkit = collect($fullkits)->firstWhere('id', $id);
            if ($fullkit) {
                return view('frontend.pages.detail_fullset', compact('fullkit'));
            } else {
                abort('error', 'Kamera Fullkit tidak ditemukan');
            }
        } else {
            abort('error', 'Kamera Fullkit tidak ditemukan');
        }
    }
    public function getApi() {

        $fulkit = Fulkit::all();
        return response()->json(['data' => $fulkit]);
    
    }

}