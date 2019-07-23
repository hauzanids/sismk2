<?php

namespace App\Http\Controllers;
use App\Sistemkomputer;
use Illuminate\Http\Request;
use File;

class SistemkomputerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $daftar_sistemkomputer = \App\Sistemkomputer::all();
      return view('sistemkomputer.index',['daftar_sistemkomputer'=>$daftar_sistemkomputer]);
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

      Sistemkomputer::create($form_data);

      return redirect('/sistemkomputer')->with('success','Data berhasil ditambahkan');
    }

    public function download($id)
    {
        $sistemkomputer = Sistemkomputer::where('id', $id)->firstOrFail();
        $pathToFile = public_path('materi/' . $sistemkomputer->materi);
        return response()->download($pathToFile);
    }

    public function delete($id)
    {
      $sistemkomputer = \App\Sistemkomputer::find($id);
      $pathToFile = public_path('materi/' . $sistemkomputer->materi);
      File::delete($pathToFile);
      $sistemkomputer->delete($sistemkomputer);
      return redirect('/sistemkomputer')->with('success','Data berhasil dihapus');
    }
}
