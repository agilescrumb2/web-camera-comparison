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
                $cameras = $responseData['data'];
                return view('frontend.pages.fullset', compact('fullkits', 'request'));
            } else {
                return redirect()->back()->with('error', 'Invalid response from API: "data" key not found.');
            }
        } else {
            return redirect()->back()->with('error', 'Failed to retrieve camera data from API.');
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