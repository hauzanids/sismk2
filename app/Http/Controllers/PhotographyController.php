<?php

namespace App\Http\Controllers;
use App\Photography;
use Illuminate\Http\Request;
use File;

class PhotographyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $daftar_photography = \App\Photography::all();
      return view('photography.index',['daftar_photography'=>$daftar_photography]);
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

      Photography::create($form_data);

      return redirect('/photography')->with('success','Data berhasil ditambahkan');
    }

    public function download($id)
    {
        $photography = Photography::where('id', $id)->firstOrFail();
        $pathToFile = public_path('materi/' . $photography->materi);
        return response()->download($pathToFile);
    }

    public function delete($id)
    {
      $photography = \App\Photography::find($id);
      $pathToFile = public_path('materi/' . $photography->materi);
      File::delete($pathToFile);
      $photography->delete($photography);
      return redirect('/photography')->with('success','Data berhasil dihapus');
    }
}
