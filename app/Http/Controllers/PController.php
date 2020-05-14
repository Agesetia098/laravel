<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PController extends Controller
{
    public function index()
    {
        $biodata = DB::table('bio')->get();
        return view('index',['bio' => $biodata]);
    }

    public function login()
        {
            $biodata = DB::table('bio')->get();
            return view('admin',['bio' => $biodata]);
        }

    public function hapus($id)
        {
            DB::table('bio')->where('id_data',$id)->delete();
            return redirect('/login');
        }
    public function FormTambah()
        {
            return view('tambah');
        }
    public function tambah(Request $request)
        {
            DB::table('bio')->insert([
                'id_data' => $request->id_data,
                'img' => $request->img,
                'nama' => $request->nama,
                'biodata' => $request->biodata
            ]);

            return redirect('/login');
        }

    public function FormEdit($id)
        {
            $bio = DB::table('bio')->where('id_data',$id)->get();
            return view('edit',['bio'=>$bio]);
        }

    public function edit(Request $request)
        {
            DB::table('bio')->where('id_data',$request->id)->update([
                'id_data' => $request->id_data,
                'img' => $request->img,
                'nama' => $request->nama,
                'biodata' => $request->biodata
            ]);

            return redirect('/login ');
        }
}
