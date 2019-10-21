<?php

namespace App\Http\Controllers;

use App\Option;

class OptionController extends Controller
{
    public function getAll()
    {
        $file_path = storage_path('app/options.json');
        $json = json_decode(file_get_contents($file_path), true);
        $options = $json['data'];

        for ($i=0; $i < count($options); $i++) { 
            $options[$i]['id'] = $i;
            $options[$i]['selected'] = 0;
        }

        return response()->json($options);
    }
}
