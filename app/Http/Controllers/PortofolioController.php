<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortofolioRequest;
use App\Http\Requests\UpdatePortofolioRequest;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolio = Portofolio::all();
        return view('portofolio.index', [
            'portofolio' => $portofolio
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portofolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortofolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortofolioRequest $request)
    {
        $validatedData = $request->validate([
            'foto_portofolio' => 'image|file|max:1024',
            'title_portofolio' => 'required',
            'name' => 'required',
            'tanggal' => 'required'
        ]);
        
        if ($request->file('foto_portofolio')) {
            $validatedData['foto_portofolio'] = $request->file('foto_portofolio')->store('post-images');
        }

        Portofolio::create($validatedData);


        return redirect()->route('portofolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        return view('portofolio.edit', [
            'portofolio' => $portofolio
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortofolioRequest  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortofolioRequest $request, Portofolio $portofolio)
    {
        $validatedData = $request->validate([
            'foto_portofolio' => 'image|file|max:1024',
            'title_portofolio' => 'required',
            'name' => 'required',
            'tanggal' => 'required'
        ]);
        
        if ($request->file('foto_portofolio')) {
            $validatedData['foto_portofolio'] = $request->file('foto_portofolio')->store('post-images');
        }

        $portofolio->update($validatedData);


        return redirect()->route('portofolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();

        return redirect()->route('portofolio.index');
    }
}
