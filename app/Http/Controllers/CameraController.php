<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

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
                    $cameras = $cameras->sortBy('price');
                    break;
                case 'high_to_low':
                    $cameras = $cameras->sortByDesc('price');
                    break;
            }
        }
        $totalProducts = $cameras->count();
        $currentPage = $request->input('page', 1);
        $perPage = 2;
        $pagedData = $cameras->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $paginatedCameras = new LengthAwarePaginator(
            $pagedData,
            count($cameras),
            $perPage,
            $currentPage
        );

        return view('frontend.pages.kamera', compact('cameras', 'paginatedCameras', 'totalProducts', 'request'));
    }
    public function show($id)
    {
        $response = Http::get("https://cameris.my.id/api/kamera/$id");

        $cameras = $response->json();

        return view('frontend.pages.detail', compact('cameras'));
    }

    public function search(Request $request)
    {
        $response = Http::get('https://cameris.my.id/api/kamera', [
            'search' => $request->input('search')
        ]);

        $cameras = $response->json();
        return view('frontend.pages.kamera', compact('cameras'));
    }
}