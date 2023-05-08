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
        $fullkits = collect($response->json());
        $sort = $request->input('sort');
        if ($sort) {
            switch ($sort) {
                case 'low_to_high':
                    $fullkits = $fullkits->sortBy('harga');
                    break;
                case 'high_to_low':
                    $fullkits = $fullkits->sortByDesc('harga');
                    break;
            }
        } else {
            $fullkits = $fullkits->sortBy('harga');
        }


        return view('frontend.pages.fullset', compact('fullkits', 'request'));
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
                abort(404, 'Fullkit tidak ditemukan.');
            }
        } else {
            abort(404, 'Fullkit tidak ditemukan.');
        }
    }
    
    public function getApi() {

        $fulkit = Fulkit::all();
        return response()->json(['data' => $fulkit]);
    
    }

}