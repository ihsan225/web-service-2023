<?php

namespace App\Http\Controllers;
use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index(){
        $komentar = Komentar::all();
        return $komentar;
    }

    public function show($id){
        $komentar = Komentar::find($id);
        return $komentar;
    }

    public function store(Request $request){
        try{
            $komentar = new Komentar();
            $komentar->komentar = $request->komentar;
            $komentar->save();

            return $komentar;
        } catch(\Throwable $th){
            $pesan = array("pesan"=>$th->getMessage());
            return response($pesan,500);
        }
    }

    public function update(Request $request){
        try{
            $komentar = Komentar::find($request->id);
            $komentar->komentar = $request->komentar;
            $komentar->save();

            $pesan = "Komentar berhasil di update!";
            return response($pesan,200);

        } catch(\Throwable $th){
            $pesan = array("pesan"=>$th->getMessage());
            return response($pesan,500);
        }
    }

    public function destroy(Request $request){
        try{
            $komentar = Komentar::find($request->id);
            $komentar->delete();

            $pesan = "Komentar berhasil di hapus!";
            return response($pesan,200);
            
        } catch(\Throwable $th){
            $pesan = array("pesan"=>$th->getMessage());
            return response($pesan,500);
        }
    }
}
