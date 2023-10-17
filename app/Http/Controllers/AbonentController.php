<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Abonent;

class AbonentController extends Controller
{
    public function get_abonent(Request $request) {
        $search = empty($request->input('search'))?"%":"%".$request->input('search')."%";
        $result = Abonent::where('name', "LIKE", $search)
        ->orWhere('dolgnost', "LIKE", $search)
        ->orWhere('organization', "LIKE", $search)
        ->orWhere('podrazdelenie', "LIKE", $search)
        ->get();
        return ['search' =>$search, 'abonents' => $result];
    }
}
