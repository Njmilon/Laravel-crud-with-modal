<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $user = Crud::all();
        return view('crud.index',compact('user'));
    }
    public function create(Request $request)
    {
        // dd($request()->all());

        $request->validate([
            'firstName'=> 'required',
            'lastName'=> 'required',
            'email'=> 'required|email|unique',
            'phone'=> 'required',
            'Password'=> 'required|password',
            'address'=> 'required',
        ]);
        Crud::create([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>$request->Password,
            'address'=>$request->address,
            'male'=>$request->flexRadioDefault,
            'female'=>$request->flexRadioDefault,
        ]);

        return redirect()->back()->with('message','New User Created Successfully');
    }

    public function edit($id)
    {
        $editProduct = Crud::findorfail($id);
        // dd($editProduct);
        return view('crud.edit',compact('editProduct'));
    }

    public function update(Request $request,$id)
    {

        $updateUser = Crud::findorfail($id);
        $updateUser->update([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>$request->Password,
            'address'=>$request->address,
        ]);

        return redirect()->route('crud.index')->with('message','User Information Updated Successfully');
    }

    public function destroy($id)
    {
        Crud::destroy($id);
        return redirect()->back()->with('message','User Deleted Successfully');
    }
}
