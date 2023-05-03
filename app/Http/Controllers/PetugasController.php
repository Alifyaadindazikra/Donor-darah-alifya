<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Response;

class PetugasController extends Controller
{
     public function indexPetugas() {
        $donors = Donor::with('response')->get();

        return view('petugas.index', compact ('donors'));
    }

    public function createResponse($id) {
        $donor = Donor::where('id', $id)->first();
        
        
        return view('petugas.send-response')
        ->with('donor', $donor);
    }

    public function storeResponse(Request $request, $id) {
        $request->validate([
            'status' => 'required',
            'schedule' => 'required',
        ]);

        Response::create([
                'donor_id' => $id,
                'status' => $request->status,
                'schedule' => $request->schedule,
        ]);
        return redirect(route('indexPetugas'))->withSuccess('Berhasil Mengirimkan Respon');
    }

    public function editResponse($id) {
        $data = Donor::where('id', $id)->with('response')->first();

        return view('petugas.change-response')
        ->with('data', $data);
    }

    public function updateResponse(Request $request, $id) {
        $request->validate([
            'status' => 'required',
            'schedule' => 'required',
        ]);

        Response::where('id', $id)->update([
            'status' => $request->status,
            'schedule' => $request->schedule
        ]);

        return redirect(route('indexPetugas'))->withInfo("Berhasil Mengubah Respon");
    }

    public function filterResponse($status) {
        $data = Response::where('status', $status)->with('donor')->get();

    }
}
