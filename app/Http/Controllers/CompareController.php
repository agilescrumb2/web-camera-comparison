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
            $camera = $response->json()['data'];

            $cameras = $request->session()->get('compare', []);
            $cameras[$id] = $camera;

            $request->session()->put('compare', $cameras);

            return redirect()->route('compare.add', $id)->with('success', 'Camera added to compare list.');
        }

        return redirect()->back()->with('error', 'Failed to add camera to compare list.');
    }

    public function remove(Request $request, $id)
    {
        $cameras = $request->session()->get('compare', []);

        unset($cameras[$id]);

        $request->session()->put('compare', $cameras);

        return redirect()->route('compare')->with('success', 'Camera removed from compare list.');
    }

    public function compare(Request $request)
    {
        $cameras = $request->session()->get('compare', []);

        return view('frontend.pages.compare', compact('cameras'));
    }

    public function clear(Request $request)
    {
        $request->session()->forget('compare');

        return redirect()->route('compare')->with('success', 'Compare list cleared.');
    }
}