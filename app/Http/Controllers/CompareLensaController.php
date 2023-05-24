<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CompareLensaController extends Controller
{
    public function addLens(Request $request, $id)
    {
        $response = Http::get("https://cameris.my.id/api/lensa?id={$id}");
        if ($response->ok()) {
            $data = $response->json()['data'];
            $lensa = null;
            foreach ($data as $item) {
                if ($item['id'] == $id) {
                    $lensa = $item;
                    break;
                }
            }
    
            if ($lensa) {
                $lensas = $request->session()->get('compareLens', []);
                $lensas[$id] = [
                    'id' => $lensa['id'],
                    'gambar' => $lensa['gambar'],
                    'nama_lensa' => $lensa['nama_lensa'],
                    'harga' => $lensa['harga'],
                    'bobot' => $lensa['bobot'],
                    'diameter_panjang' => $lensa['diameter_panjang'],
                    'aperture_minimum' => $lensa['aperture_minimum'],
                    'ukuran_filter' => $lensa['ukuran_filter'],
                    'jarak_pemfokusan_terdekat' => $lensa['jarak_pemfokusan_terdekat'],
                    'pembesaran_maks' => $lensa['pembesaran_maks'],
                    'jumlah_bilah_diafragma' => $lensa['jumlah_bilah_diafragma'],
                ];
            $request->session()->put('compareLens', $lensas);
            $lensas = $request->session()->get('compareLens', []);
            return view('frontend.pages.compare_lensa', compact('lensas'))->with('success', 'Lensa ditambahkan dalam list compare');
        }
    }
        return redirect()->back()->with('error', 'Lensa tidak ditemukan');
    }


    public function removeLens(Request $request, $id)
    {
        $lensas = $request->session()->get('compareLens', []);
        if (isset($lensas[$id])) {
            unset($lensas[$id]);
            $request->session()->put('compareLens', $lensas);
            return view('frontend.pages.compare_lensa', compact('lensas'))->with('success', 'Lensa dihapus dalam list compare');
        }
        return redirect()->back()->with('error', 'Lensa tidak ditemukan');
    }

    public function clearLens(Request $request)
    {
        $request->session()->forget('compareLens');
        return redirect()->route('compareLens')->with('success', 'List Compare Dihapus.');
    }
}