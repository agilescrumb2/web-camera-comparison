<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    public function add(Request $request, $id)
    {
        $response = Http::get("https://cameris.my.id/api/camera?id={$id}");
        if ($response->ok()) {
            $data = $response->json()['data'];
            $camera = null;
            foreach ($data as $item) {
                if ($item['id'] == $id) {
                    $camera = $item;
                    break;
                }
            }
    
            if ($camera) {
                $cameras = $request->session()->get('compare', []);
                $cameras[$id] = [
                    'id' => $camera['id'],
                    'gambar' => $camera['gambar'],
                    'nama_kamera' => $camera['nama_kamera'],
                    'harga' => $camera['harga'],
                    'mode_af' => $camera['mode_af'],
                    'built_in_flash' => $camera['built_in_flash'],
                    'kecepatan_pemotretan' => $camera['kecepatan_pemotretan'],
                    'dimensi' => $camera['dimensi'],
                    'iso_efektif' => $camera['iso_efektif'],
                    'exposure_compensation' => $camera['exposure_compensation'],
                    'mode_flash' => $camera['mode_flash'],
                    'resolusi_gambar' => $camera['resolusi_gambar'],
                    'image_stabilizer' => $camera['image_stabilizer'],
                    'monitor_lcd_ukuran' => $camera['monitor_lcd_ukuran'],
                    'monitor_lcd_resolusi' => $camera['monitor_lcd_resolusi'],
                    'fokus_manual' => $camera['fokus_manual'],
                    'mode_pemotretan' => $camera['mode_pemotretan'],
                    'ukuran_sensor' => $camera['ukuran_sensor'],
                    'rentang_kecepatan_rana' => $camera['rentang_kecepatan_rana'],
                    'bobot' => $camera['bobot'],
                    'white_balance' => $camera['white_balance'],
                ];
    
            $request->session()->put('compare', $cameras);
            $cameras = $request->session()->get('compare', []);
            return view('frontend.pages.compare_kamera', compact('cameras'))->with('success', 'Camera added to compare list.');
        }
    }
        return redirect()->back()->with('error', 'Failed to add camera to compare list.');
    }

    public function remove(Request $request, $id)
    {
        $cameras = $request->session()->get('compare', []);
        if (isset($cameras[$id])) {
            unset($cameras[$id]);
            $request->session()->put('compare', $cameras);
            return view('frontend.pages.compare_kamera', compact('cameras'))->with('success', 'Camera removed from compare list.');
        }
        return redirect()->back()->with('error', 'Camera not found in compare list.');
    }

    public function clear(Request $request)
    {
        $request->session()->forget('compare');
        return redirect()->route('compare')->with('success', 'Compare list cleared.');
    }
}