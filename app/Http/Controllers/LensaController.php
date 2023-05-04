<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LensaController extends Controller
{
    public function index()
    {

            $response = Http::get('https://cameris.my.id/api/lensa');

            $lensas = $response->json();
            // dd($lensas);
            return view('frontend.pages.lensa', compact('lensas'));
        }

        public function show($id)
        {
            $response = Http::get('https://cameris.my.id/api/lensa/' . $id);

            $lensas = $response->json();
            return view('frontend.pages.detail_lensa', compact('lensas'));
        }

        public function search(Request $request)
        {
            $query = $request->input('query');

            $response = Http::get('https://cameris.my.id/api/lensa/search?q=' . $query);

            $lensas = $response->json();
            return view('frontend.pages.lensa', compact('lensas'));
    }
}