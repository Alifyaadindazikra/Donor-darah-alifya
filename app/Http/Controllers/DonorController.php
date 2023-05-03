<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDonor()
    {
        return view('pendonor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        Session::flash('nama', $request->nama);
        Session::flash('berat_badan', $request->berat_badan);
        Session::flash('umur', $request->umur);
        Session::flash('email', $request->email);
        Session::flash('no_hp', $request->no_hp);
        

        $request -> validate([
            'nama' => 'required',
            'email' =>'required|email',
            'berat_badan'=>'required|numeric',
            'umur' => 'required|numeric',
            'no_hp' =>'required|numeric',
            'gol_darah' =>'required',
            'jenis_kelamin' => 'required',
            'kartu_identitas'=>'required|image|mimes:jpg,jpeg,png,svg',
        ]) ;

        $image = $request->file('kartu_identitas');//$request file diambil dari tipe file, di ambil foto
        $imgName = rand() . '.' . $image->extension();//kotket (menghubungkan data ke string)(memasukan data ke png)
        $path =public_path('assets/image/');
        $image->move($path,$imgName);
        
        Donor::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'darah' => $request->gol_darah,
            'umur' => $request->umur,
            'jk'=> $request->jenis_kelamin,
            'bb' => $request->berat_badan,
            'foto' => $imgName,
        ]);
        return redirect()->back()->withSuccess('Anda berhasil registrasi');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        //
    }
}
