<?php

namespace App\Http\Controllers;
use App\Crud;

use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use DB;
use PDF;

class ItemController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request)
    {
        $items = DB::table("items")->get();
        view()->share('items',$items);

        if($request->has('download')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }

        return view('pdfview');
    }
}

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=auth()->user();
        $user_id = $user->id;
        $datas = $request->get('q');
        $hasil = Crud::orderBy('id', 'DESC') -> where('user_id', $user_id)->paginate(5);
        return view('show') -> with('hasil', $datas);
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $user=auth()->user();
        $user_id = $user->id;

        $tambah = new Crud();
        $tambah->judul = $request['judul'];
        $tambah->isi = $request['isi'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $allowedFileTypes = config('app.allowedFileTypes');
        $maxFileSize = config('app.maxFileSize');
        $this->validate($request, $rules, [
            'gambar' => 'required|gambar|mimes:pdf,doc,csv,ppt|max:10240',
        ]);
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);
        
        $tambah->gambar = $fileName;

        $tambah->user_id = $user_id;
        $tambah->save();
      
        return redirect()->to('/crud');

    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($id) 
    { 
        $tampilkan = Crud::find($id); 
        return view('tampil')->with('tampilkan', $tampilkan); 
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tampiledit = Crud::where('id', $id)->first();
        return view('edit')->with('tampiledit', $tampiledit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        $update = Crud::where('id', $id)->first();
        $update->judul = $request['judul'];
        $update->isi = $request['isi'];

        if($request->file('gambar') == "")
        {
            $update->gambar = $update->gambar;
        } 
        else
        {
            $file       = $request->file('gambar');
            $fileName   = $file->getClientOriginalName();
            $request->file('gambar')->move("image/", $fileName);
            $update->gambar = $fileName;
        }
        
        $update->update();
        return redirect()->to('/crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Crud::find($id);
        $hapus->delete($id);

        return redirect()->to('/crud');
    }
        public function getIconAttribute() {

        $extensions = [
            'exc' => 'excel.png',
            'ppt' => 'ppt.png',
            'pdf' => 'pdf.png',
            'doc' => 'docx.png',
        ];

        return array_get($extensions,$this->extension,'unknown.png');
    }
    
}
