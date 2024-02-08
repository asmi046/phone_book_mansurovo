<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Abonent;

class AbonentController extends Controller
{
    public function get_abonent(Request $request) {
        $search = empty($request->input('search'))?"%":"%".$request->input('search')."%";
        $organ = empty($request->input('organization'))?"%":$request->input('organization');
        $result = Abonent::where('organization', "LIKE", $organ)
        ->where(function ($query) use ($search) {
            $query->where('name', "LIKE", $search)
            ->orWhere('dolgnost', "LIKE", $search)
            ->orWhere('organization', "LIKE", $search)
            ->orWhere('podrazdelenie', "LIKE", $search);
        })->get();

        $organization = Abonent::select('organization')->groupBy('organization')->get();
        return ['search' =>$search, 'organ' =>$organ, 'abonents' => $result, 'organization' => $organization];
    }
}
