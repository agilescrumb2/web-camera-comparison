<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CompareFullkitController extends Controller
{
    public function addFullkit(Request $request, $id)
    {
        $response = Http::get("https://cameris.my.id/api/fulkit?id={$id}");
        if ($response->ok()) {
            $data = $response->json()['data'];
            $fullkit = null;
            foreach ($data as $item) {
                if ($item['id'] == $id) {
                    $fullkit = $item;
                    break;
                }
            }
    
            if ($fullkit) {
                $fullkits = $request->session()->get('compareFullkit', []);
                $fullkits[$id] = [
                    'id' => $fullkit['id'],
                    'gambar' => $fullkit['gambar'],
                    'nama_fulkit' => $fullkit['nama_fulkit'],
                    'harga' => $fullkit['harga'],
                    'mode_af' => $fullkit['mode_af'],
                    'built_in_flash' => $fullkit['built_in_flash'],
                    'jarak_fokus_terdekat' => $fullkit['jarak_fokus_terdekat'],
                    'kecepatan_pemotretan' => $fullkit['kecepatan_pemotretan'],
                    'zoom_digital' => $fullkit['zoom_digital'],
                    'dimensi' => $fullkit['dimensi'],
                    'iso_efektif' => $fullkit['iso_efektif'],
                    'mode_flash' => $fullkit['mode_flash'],
                    'panjang_fokus' => $fullkit['panjang_fokus'],
                    'resolusi_gambar' => $fullkit['resolusi_gambar'],
                    'image_stabilizer' => $fullkit['image_stabilizer'],
                    'monitor_lcd_ukuran' => $fullkit['monitor_lcd_ukuran'],
                    'monitor_lcd_resolusi' => $fullkit['monitor_lcd_resolusi'],
                    'fokus_manual' => $fullkit['fokus_manual'],
                    'ukuran_sensor' => $fullkit['ukuran_sensor'],
                    'mode_pemotretan' => $fullkit['mode_pemotretan'],
                    'rentang_kecepatan_rana' => $fullkit['rentang_kecepatan_rana'],
                    'bobot' => $fullkit['bobot'],
                    'white_balance' => $fullkit['white_balance'],
                ];
            $request->session()->put('compareFullkit', $fullkits);
            $fullkits = $request->session()->get('compareFullkit', []);
            return view('frontend.pages.compare_fullkit', compact('fullkits'))->with('success', 'Kamera Fullkit ditambahkan dalam list compare');
        }
    }
        return redirect()->back()->with('error', 'Kamera Fullkit tidak ditemukan');
    }


    public function removeFullkit(Request $request, $id)
    {
        $fullkits = $request->session()->get('compareFullkit', []);

        if (isset($fullkits[$id])) {
            unset($fullkits[$id]);
            $request->session()->put('compareFullkit', $fullkits);
            return view('frontend.pages.compare_fullkit', compact('fullkits'))->with('success', 'Kamera Fullkit dihapus dalam list compare');
        }

        return redirect()->back()->with('error', 'Kamera Fullkit tidak ditemukan');
    }

    public function clearFullkit(Request $request)
    {
        $request->session()->forget('compareFullkit');

        return redirect()->route('compareFullkit')->with('success', 'List Compare Dihapus.');
    }
}