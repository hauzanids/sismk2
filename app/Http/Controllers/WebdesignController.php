<?php

namespace App\Http\Controllers;
use App\Webdesign;
use Illuminate\Http\Request;
use File;

class WebdesignController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $daftar_webdesign = \App\Webdesign::all();
      return view('webdesign.index',['daftar_webdesign'=>$daftar_webdesign]);
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

      Webdesign::create($form_data);

      return redirect('/webdesign')->with('success','Data berhasil ditambahkan');
    }

    public function download($id)
    {
        $webdesign = Webdesign::where('id', $id)->firstOrFail();
        $pathToFile = public_path('materi/' . $webdesign->materi);
        return response()->download($pathToFile);
    }

    public function delete($id)
    {
      $webdesign = \App\Webdesign::find($id);
      $pathToFile = public_path('materi/' . $webdesign->materi);
      File::delete($pathToFile);
      $webdesign->delete($webdesign);
      return redirect('/webdesign')->with('success','Data berhasil dihapus');
    }
}
