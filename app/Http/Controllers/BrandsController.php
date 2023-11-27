<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
    public function index(Request $request)
    {
        $query = "SELECT * FROM brands";
        $params = [];
        if ($request->get('name') !== null) {
            $query .= ' WHERE name = :name';
            $params[':name'] = $request->get('name');
        }

        return view('brands', ['brands' => DB::select($query, $params)]);
    }
}
