<?php

namespace App\Http\Controllers;
use App\Typography;
use Illuminate\Http\Request;
use File;

class TypographyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $daftar_typography = \App\Typography::all();
      return view('typography.index',['daftar_typography'=>$daftar_typography]);
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

      Typography::create($form_data);

      return redirect('/typography')->with('success','Data berhasil ditambahkan');
    }

    public function download($id)
    {
        $typography = Typography::where('id', $id)->firstOrFail();
        $pathToFile = public_path('materi/' . $typography->materi);
        return response()->download($pathToFile);
    }

    public function delete($id)
    {
      $typography = \App\Typography::find($id);
      $pathToFile = public_path('materi/' . $typography->materi);
      File::delete($pathToFile);
      $typography->delete($typography);
      return redirect('/typography')->with('success','Data berhasil dihapus');
    }
}
