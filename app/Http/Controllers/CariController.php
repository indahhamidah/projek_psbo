<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Crud;

class CariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->get('q');
<<<<<<< HEAD
        $hasil = Crud::where('judul', 'LIKE', '%' . $query . '%')->paginate(5);
=======
        $hasil = Crud::where('judul', 'LIKE', '%' . $query . '%')->paginate(10);
>>>>>>> upstream/master

        return view('result', compact('hasil', 'query'));
    }
}
