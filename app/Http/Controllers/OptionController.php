<?php

namespace App\Http\Controllers;

use App\Option;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class OptionController extends Controller
{
    public function __construct()
    {
        $this->option = new Option;
    }
    
    public function getAll()
    {
        return response()->json($this->option->getAll());
    }

    public function getResult(Request $request)
    {
        return response()->json($this->option->getResult($request->selectedOptions));
    }

    public function getResultPDF(Request $request)
    {
        //$result = $this->option->getResultPDF($request->selectedOptions);
        $pdf = app()->make('dompdf.wrapper');
        $data = [];
        $pdf->setPaper('A3', 'landscape');
        $pdf->loadView('result', $data);
        return $pdf->download('test.pdf');
    }
}
