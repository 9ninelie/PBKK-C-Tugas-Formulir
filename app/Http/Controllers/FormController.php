<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function show(Request $request){
        $request->validate([
            'nama' => 'required|alpha',
            'email' => 'required|email:rfc',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
            'float' => 'required|numeric|between:2.50,99.99',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        $request->image->storeAs('public/images', $request->image->getClientOriginalName());

        $results = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'float' => $request->float,
            'image' => $request->image->getClientOriginalName()
        ];

        return redirect('/result')->with(['results' => $results, 'status' => 'Submitted!']);
    }

    public function result(){
        $results = session()->get('results');
        return view('result', ['results' => $results]);   
    }
}
