<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Abonent;

class AbonentController extends Controller
{
    public function get_abonent(Request $request) {
        $result = Abonent::all();
        return $result;
    }
}
