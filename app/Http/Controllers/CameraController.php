<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

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
        }


        return view('frontend.pages.kamera', compact('cameras', 'request'));
    }

    public function show($id)
    {
        $response = Http::get("https://cameris.my.id/api/camera?id=$id");

        $cameras = $response->json();
        return view('frontend.pages.detail', compact('cameras'));
    }

}