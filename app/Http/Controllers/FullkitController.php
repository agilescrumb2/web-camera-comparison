<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FullkitController extends Controller
{
    public function index()
    {
        $response = Http::get('https://cameris.my.id/api/fulkit');

        $fullkits = $response->json();
        // dd($fullkits);
        return view('frontend.pages.fullset', compact('fullkits'));
    }
    public function show($id)
    {
        $response = Http::get('https://cameris.my.id/api/fulkit/' . $id);

        $fullkits = $response->json();
        return view('frontend.pages.detail_fulset', compact('fullkits'));
    }


}