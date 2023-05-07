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
            $fullkit = $response->json()['data'];

            $fullkits = $request->session()->get('compareFullkit', []);
            $fullkits[$id] = $fullkit;

            $request->session()->put('compareFullkit', $fullkits);

            return view('frontend.pages.compare_fullkit', compact('fullkits'))->with('success', 'Fullkit added to compare list.');
        }

        return redirect()->back()->with('error', 'Failed to add fullkit to compare list.');
    }

    public function removeFullkit(Request $request, $id)
    {
        $fullkits = $request->session()->get('compareFullkit', []);

        if (isset($fullkits[$id])) {
            unset($fullkits[$id]);
            $request->session()->put('compareFullkit', $fullkits);
            return view('frontend.pages.compare_fullkit', compact('fullkits'))->with('success', 'Fullkit removed from compare list.');
        }

        return redirect()->back()->with('error', 'Fullkit not found in compare list.');
    }

    public function compareFullkit(Request $request)
    {
        $fullkits = $request->session()->get('compareFullkit', []);

        return view('frontend.pages.compare_fullkit', compact('fullkits'));
    }

    public function clearFullkit(Request $request)
    {
        $request->session()->forget('compareFullkit');

        return redirect()->route('compareFullkit')->with('success', 'Compare list cleared.');
    }
}