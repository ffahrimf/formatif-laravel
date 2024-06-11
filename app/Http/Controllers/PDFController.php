<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Dosen;

class PDFController extends Controller
{
    public function printDosen()
    {
        $dosen = Dosen::all();
        $data = ['tdosen' => $dosen];

        $pdf = PDF::loadView('dosen.dosen-print', $data);

        return $pdf->stream('view-dosen.pdf');
    }
}
