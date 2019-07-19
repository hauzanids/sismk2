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
      return view('beranda.index',['daftar_informasi'=>$daftar_informasi]);
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

      return redirect('/beranda')->with('success','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
      $informasi = Informasi::findOrFail($id);  
      return view('beranda.edit', compact('informasi'));
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
          'deskripsi' => 'required',
        ]);
        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'),$image_name);
      }else{
        $request->validate([
          'judul' => 'required',
          'deskripsi' => 'required',
        ]);
      }

      $form_data = array(
        'judul' => $request->judul,
        'gambar' => $image_name,
        'deskripsi' => $request->deskripsi,
      );

      Informasi::whereId($id)->update($form_data);

      return redirect('/beranda')->with('success','Data berhasil diubah');

    }
    public function delete($id)
    {
      $informasi = \App\Informasi::find($id);
      $informasi->delete($informasi);
    return redirect('/beranda')->with('success','Data berhasil dihapus');
    }
}
