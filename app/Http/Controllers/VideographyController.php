<?php

namespace App\Http\Controllers;
use App\Videography;
use Illuminate\Http\Request;
use File;

class VideographyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $daftar_videography = \App\Videography::all();
      return view('videography.index',['daftar_videography'=>$daftar_videography]);
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

      Videography::create($form_data);

      return redirect('/videography')->with('success','Data berhasil ditambahkan');
    }

    public function download($id)
    {
        $videography = Videography::where('id', $id)->firstOrFail();
        $pathToFile = public_path('materi/' . $videography->materi);
        return response()->download($pathToFile);
    }

    public function delete($id)
    {
      $videography = \App\Videography::find($id);
      $pathToFile = public_path('materi/' . $videography->materi);
      File::delete($pathToFile);
      $videography->delete($videography);
      return redirect('/videography')->with('success','Data berhasil dihapus');
    }
}
