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
        if ($response->ok()) {
            $responseData = $response->json();
            if (isset($responseData['data'])) {
                $cameras = $responseData['data'];
                // Sort cameras based on the selected option
                // if ($sort === 'price_low_to_high') {
                //     $cameras = collect($cameras)->sortBy('harga')->values()->all();
                // } elseif ($sort === 'price_high_to_low') {
                //     $cameras = collect($cameras)->sortByDesc('harga')->values()->all();
                // }
                return view('frontend.pages.kamera', compact('cameras', 'request'));
            } else {
                return redirect()->back()->with('error');
            }
        } else {
            return redirect()->back()->with('error');
        }
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $response = Http::get('https://cameris.my.id/api/camera');
        $cameras = []; 
        if ($response->ok()) {
            $cameraData = $response->json();
            if (isset($cameraData['data'])) {
                $originalCameras = $cameraData['data'];
                $filteredCameras = [];
                foreach ($originalCameras as $camera) {
                    $namaKamera = strtolower($camera['nama_kamera']);
                    $hargaKamera = strtolower($camera['harga']);
                    if (strpos($namaKamera, strtolower($query)) !== false || (float)$hargaKamera <= (float)$query) {
                        $filteredCameras[] = $camera;
                    }
                }
                $cameras = $filteredCameras; // Assign filtered cameras to $cameras
                return view('frontend.pages.kamera', compact('cameras', 'query', 'request'));
            } else {
                return redirect()->back()->with('error', 'Invalid response from API: "data" key not found.');
            }
        } else {
            return redirect()->back()->with('error', 'Failed to retrieve camera data from API.');
        }
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