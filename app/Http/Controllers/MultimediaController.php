<?php

namespace App\Http\Controllers;
use App\Multimedia;
use Illuminate\Http\Request;
use File;

class MultimediaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $daftar_multimedia = \App\Multimedia::all();
      return view('multimedia.index',['daftar_multimedia'=>$daftar_multimedia]);
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

      Multimedia::create($form_data);

      return redirect('/multimedia')->with('success','Data berhasil ditambahkan');
    }

    public function download($id)
    {
        $multimedia = Multimedia::where('id', $id)->firstOrFail();
        $pathToFile = public_path('materi/' . $multimedia->materi);
        return response()->download($pathToFile);
    }

    public function delete($id)
    {
      $multimedia = \App\Multimedia::find($id);
      $pathToFile = public_path('materi/' . $multimedia->materi);
      File::delete($pathToFile);
      $multimedia->delete($multimedia);
      return redirect('/multimedia')->with('success','Data berhasil dihapus');
    }
}
