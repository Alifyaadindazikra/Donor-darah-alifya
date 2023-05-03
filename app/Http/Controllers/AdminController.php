<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Donor;
use App\Exports\DonorExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function indexAdmin() {
        $donors = Donor::with('response')->latest()->get();
        return view('admin.index', compact ('donors'));
    }

    public function indexMessage($id) {
        $donor = Donor::with('response')->where('id', $id)->first();
        // dd($data);
        return view('admin.send-message', compact('donor'));
    }

    public function cetakPdf() {
            
        // return date('d-m-y');
        $tanggal = date('l, d M Y');

        $donors = Donor::with('response')->get();

        $pdf = PDF::loadview('admin.donor_pdf',['donors' => $donors]);
        return $pdf->download("Data Pendonor $tanggal.pdf");
    }

    public function exportExcel() {
        return Excel::download(new DonorExport, 'Donor.xlsx');
    }
    
    public function search(Request $request) { 
        if ($request->search) {
            $donors = Donor::where('nama','LIKE','%'.$request->search.'%')->get();
            // dd($donors);
        } else {
            return back()->withErrors('Data Gagal Di Temukan');
        }
        return view('admin.search', compact('donors'));
        
    }

}
