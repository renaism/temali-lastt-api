<?php

namespace App\Http\Controllers;

use App\Option;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Error;

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
        $result = $this->option->getResult($request->selectedOptions);
        $pdf = app()->make('dompdf.wrapper');
        //$pdf->setPaper('A4', 'portrait');
        $pdf->loadView('result', array('result' => $result, 'name' => $request->name));
        return $pdf->download('result.pdf');
    }

    public function test()
    {
        $result = $this->option->getResultAllTest();
        return view('result')->with('result', $result)->with('name', 'Sugeng Winterwood');
    }

    public function testPDF()
    {
        $result = $this->option->getResultAllTest();
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('result', array('result' => $result, 'name' => 'Sugeng Winterwood'));
        return $pdf->download('test.pdf');
    }
}
