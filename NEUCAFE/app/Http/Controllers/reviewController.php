<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Models\outlet;
use App\Models\review;
use RealRashid\SweetAlert\Facades\Alert;

class reviewController extends Controller
{
    public function index(){
        $id_outlet = session('id_outlet');
        $rating = review::where('id_outlet',$id_outlet)->get();
        return view('reviewPelanggan', ['rating' => $rating]);
    }

}