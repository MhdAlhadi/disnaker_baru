<?php

namespace App\Http\Controllers;

use App\Models\BKK;
use App\Models\Pencaker;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function bkk($limit = null)
    {
        $data = array(
            'bkk' => $limit == null ? BKK::all() : BKK::limit($limit)->get()
        );

        return view('bkk', $data);
    }

    public function landing()
    {
        $data = array(
            'bkk' => BKK::all(),
            'pencaker' => Pencaker::all(),
        );
        return view('landing', $data);
    }
}
