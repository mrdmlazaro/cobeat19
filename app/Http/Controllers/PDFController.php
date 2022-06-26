<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
class PDFController extends Controller
{
    // function to display preview
    public function preview()
    {
        return view('preview');
    }
    public function generatePDF()
    {
        $pdf = PDF::loadView('preview2');    
        return $pdf->download('ProofOfEligibility-Gigachadthis.pdf');
    }

    
}