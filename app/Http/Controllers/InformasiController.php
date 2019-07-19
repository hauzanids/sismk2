<?php

namespace App\Http\Controllers;
use App\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    //
    public function index()
    {
      $daftar_informasi = \App\Informasi::all();
      return view('',['daftar_informasi'=>$daftar_informasi]);
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
        'gambar' => 'required|image|max:51200',
        'deskripsi' => 'required',
      ]);

      $image = $request->file('gambar');

      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('img'),$new_name);
      $form_data = array(
        'judul' => $request->judul,
        'gambar' => $new_name,
        'deskripsi' => $request->deskripsi,
        'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
      );

      Informasi::create($form_data);

      return redirect('')->with('success','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
      $lomba = Informasi::findOrFail($id);  
      return view('lomba.edit', compact('lomba'));
    }
    public function update(Request $request,$id)
    {
      // $lomba = \App\Lomba::find($id);  
      // $lomba->update($request->all());

      $image_name = $request->hidden_gambar;
      $image = $request->file('gambar');
      if($image != ''){
        $request->validate([
          'judul' => 'required',
          'gambar' => 'required|image|max:51200',
          'penyelenggara' => 'required',
          'tempat' => 'required',
          'deskripsi' => 'required',
          'waktu_pelaksanaan' => 'required',
        ]);
        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'),$image_name);
      }else{
        $request->validate([
          'judul' => 'required',
          'penyelenggara' => 'required',
          'tempat' => 'required',
          'deskripsi' => 'required',
          'waktu_pelaksanaan' => 'required',
        ]);
      }

      $form_data = array(
        'judul' => $request->judul,
        'gambar' => $image_name,
        'penyelenggara' => $request->penyelenggara,
        'tempat' => $request->tempat,
        'deskripsi' => $request->deskripsi,
        'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
      );

      Informasi::whereId($id)->update($form_data);

      return redirect('/lomba')->with('success','Data berhasil diubah');

    }
    public function delete($id)
    {
      $lomba = \App\Informasi::find($id);
      $lomba->delete($lomba);
    return redirect('/lomba')->with('success','Data berhasil dihapus');

    }
}
