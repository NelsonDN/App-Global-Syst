<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pay;
use App\Models\Region;
use App\Models\Ville;
use DB;

class DropdownController extends Controller
{
    //
    public function index()
    {
        $states = DB::table("pays")->pluck('name','id');        

        return view('admin.projets.show', compact('states'));

    }

    public function region($id)
    {
        $regions = DB::table("regions")
                    ->where("pay_id",$id)
                    ->pluck('name','id');
        return json_encode($regions);
    }

    public function ville($id)
    {
        $villes = DB::table("villes")
                    ->where("region_id",$id)
                    ->pluck('name','id');
                    
        return json_encode($villes);
    }
    
}
