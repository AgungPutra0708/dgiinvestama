<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\contact;
use App\Models\faq;
use App\Models\home;
use App\Models\partner;
use App\Models\product;
use App\Models\service;
use App\Models\testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'dataHome' => home::all(),
            'dataAbout' => about::all(),
            'dataProduct' => product::all(),
            'dataService' => service::all(),
            'dataTesti' => testimoni::all(),
            'dataPartner' => partner::all(),
            'dataContact' => contact::all(),
            'dataFaq' => faq::all(),
        ];
        return view('template.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(home $home)
    {
        //
    }
}
