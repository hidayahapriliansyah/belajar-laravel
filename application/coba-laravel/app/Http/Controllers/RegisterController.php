<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index()
  {
    return view('register.index', [
      'title' => 'Registration',
      'active' => 'login'
    ]);
  }

  // cara pertama
  // public function store()
  // {
  //   return request()->all();
  // }

  // cara kedua
  public function store(Request $request)
  {
    // return $request->all();

    $validatedData = $request->validate([
      'name' => 'required|max:25|min:3',
      'username' => ['required', 'min:3', 'max:12', 'unique:users'],
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6|max:255'
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);
    
    // cara flash pertama tanpa with
    // $request->session()->flash('success', 'Registration success! Please login.');

    // cara flash kedua dengan with
    return redirect('/login')->with('success', 'Registration success! Please login.');
  }
}
