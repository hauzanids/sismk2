<?php

namespace App\Http\Controllers;
use App\Nirmana;
use Illuminate\Http\Request;
use File;

class NirmanaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $daftar_nirmana = \App\Nirmana::all();
      return view('nirmana.index',['daftar_nirmana'=>$daftar_nirmana]);
    }

    public function create()
    {
      return view('create');
    }

    public function store(Request $request)
    {
      // \App\Lomba::create($request->all());
      $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'materi' => 'required|file|max:100000000',
      ]);

      $materi = $request->file('materi');

      $file_name = rand() . '.' . $materi->getClientOriginalExtension();

      $materi->move(public_path('materi'),$file_name);

      $form_data = array(
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'materi' => $file_name,
      );

      Nirmana::create($form_data);

      return redirect('/nirmana')->with('success','Data berhasil ditambahkan');
    }

    public function download($id)
    {
        $nirmana = Nirmana::where('id', $id)->firstOrFail();
        $pathToFile = public_path('materi/' . $nirmana->materi);
        return response()->download($pathToFile);
    }

    public function delete($id)
    {
      $nirmana = \App\Nirmana::find($id);
      $pathToFile = public_path('materi/' . $nirmana->materi);
      File::delete($pathToFile);
      $nirmana->delete($nirmana);
      return redirect('/nirmana')->with('success','Data berhasil dihapus');
    }
}
