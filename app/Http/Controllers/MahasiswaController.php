<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use App\Hadiah;
// use Illuminate\Database\Eloquent\Model;

class MahasiswaController extends Controller
{
    public function index() {

        // $mahasiswa = DB::table('mahasiswa')->paginate(5);
        // $mahasiswa = Mahasiswa::all();
        $mahasiswa= Mahasiswa::select('*')->paginate(5);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    
    public function cari(Request $request)
    {
        $cari = $request->cari;
        
        $mahasiswa = Mahasiswa::where('nama','like',"%".$cari."%")
		->paginate();
        return view('/mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah() {

        return view('tambahmhs');

    }
    
    public function cekMhs(Request $request) {

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required|email:rfc,dns,filter'
        ]);

        Mahasiswa::create( $request->all() );

        return redirect('/mahasiswa')->with('status', 'Data berhasil ditambahkan!');
    }

    public function edit($id) {
       
        $mahasiswa = Mahasiswa::where('id',$id)->get();
        return view('editmhs', ['mahasiswa' => $mahasiswa]);
    }

    public function updateMhs(Request $request) {

            Mahasiswa::where('id', $request->id)
              ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email
              ]);

           

        return redirect('/mahasiswa');
    }

    public function delete($id)
    {
        Mahasiswa::destroy($id);
        // return redirect('/mahasiswa');
        return redirect('/mahasiswa')->with('info', 'Data berhasil dihapus!');
    }

}
