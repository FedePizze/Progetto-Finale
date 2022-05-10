<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index() {
        
        $types = Type::all();

        return response()->json(
            [
                'results' => $types,
                'success'=> true
            ]
        );

    }

    public function show($slug)
    {
        $types = Type::where('slug', '=', $slug);

        $types = Type::all();

        return response()->json(
            [
                'results' => $types,
                'success' => true
            ]
        );
        
    }
}


