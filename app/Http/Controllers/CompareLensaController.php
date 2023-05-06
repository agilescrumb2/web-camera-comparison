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
            $lensa = $response->json()['data'];

            $lensas = $request->session()->get('compareLens', []);
            $lensas[$id] = $lensa;

            $request->session()->put('compareLens', $lensas);

            return view('frontend.pages.compare_lensa', compact('lensas'))->with('success', 'lensa added to compare list.');
        }

        return redirect()->back()->with('error', 'Failed to add lensa to compare list.');
    }

    public function removeLens(Request $request, $id)
    {
        $lensas = $request->session()->get('compareLens', []);

        if (isset($lensas[$id])) {
            unset($lensas[$id]);
            $request->session()->put('compareLens', $lensas);

            return redirect()->route('compareLens')->with('success', 'Lensa removed from compare list.');
        }

        return redirect()->back()->with('error', 'Lensa not found in compare list.');
    }

    public function compareLens(Request $request)
    {
        $lensas = $request->session()->get('compareLens', []);

        return view('frontend.pages.compare_lensa', compact('lensas'));
    }

    public function clearLens(Request $request)
    {
        $request->session()->forget('compareLens');

        return redirect()->route('compareLens')->with('success', 'Compare list cleared.');
    }
}