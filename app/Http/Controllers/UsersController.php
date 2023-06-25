<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function index(){
        $user = User::all();
        return $user;
    }

    public function show($id){
        $user = User::find($id);
        return $user;
    }

    public function store(Request $request){
        try{
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

            return $user;
        } catch(\Throwable $th){
            $pesan = array("pesan"=>$th->getMessage());
            return response($pesan,500);
        }
    }

    public function update(Request $request){
        try{
           $user = User::find($request->id);

            $user->name = $request->name;
            $user->email = $request->email;

            $user->save();
        } catch(\Throwable $th){
            $pesan = array("pesan"=>$th->getMessage());
            return response($pesan,500);
        }

    }

    public function destroy(Request $request){
        try{
           $user = User::find($request->id);
            $user->delete();

        return $user;
        } catch(\Throwable $th){
            $pesan = array("pesan"=>$th->getMessage());
            return response($pesan,500);
        }
    }


}
