<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Camera;

class CameraController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('https://cameris.my.id/api/camera');
        $cameras = collect($response->json());
        $sort = $request->input('sort');
        if ($sort) {
            switch ($sort) {
                case 'low_to_high':
                    $cameras = $cameras->sortBy('harga');
                    break;
                case 'high_to_low':
                    $cameras = $cameras->sortByDesc('harga');
                    break;
            }
        } else {
            $cameras = $cameras->sortBy('harga');
        }


        return view('frontend.pages.kamera', compact('cameras', 'request'));
    }

    public function show($id)
    {
        $response = Http::get("https://cameris.my.id/api/camera?id={$id}");

        if ($response->ok()) {
            $cameras = $response->json()['data'];
            $camera = collect($cameras)->firstWhere('id', $id);

            if ($camera) {
                return view('frontend.pages.detail', compact('camera'));
            } else {
                abort(404, 'Kamera tidak ditemukan.');
            }
        } else {
            abort(404, 'Kamera tidak ditemukan.');
        }
    }

    public function getApi() {

        $camera = Camera::all();
        return response()->json(['data' => $camera]);
    
    }

}