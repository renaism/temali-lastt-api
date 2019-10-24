<?php

namespace App\Http\Controllers;

use App\Option;
use Illuminate\Http\Request;

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
        try {
            return response()->json($this->option->getResult($request->selectedOptions));
        } catch (\Throwable $th) {
           error_log($th);
        }
    }
}
