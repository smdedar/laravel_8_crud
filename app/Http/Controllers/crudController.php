<?php

namespace App\Http\Controllers;
use App\Models\crudUser;
use Illuminate\Http\Request;

class crudController extends Controller
{

    public function index(){

        $users = crudUser::all();
        return view('crud.view',['users'=>$users]);
    }


    public function add(){
        return view('crud.add');
    }



    public function edit(Request $request, $id){
        $user = crudUser::find($id);
        return view('crud.edit',['user'=>$user]);
    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:10',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

        crudUser::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
        ]);

        return redirect('/')->with('message','Add User Successfully');
    }


    public function update(Request $request, $id){
        $user = crudUser::find($id);
        $user -> update($request->all());

        return redirect('/')->with('message','Update Successfully');
    }



    public function delete(Request $request, $id){
        $user = crudUser::find($id);
        $user -> delete();

        return redirect('/')->with('message','Delete Successfully');

    }


}
