<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class PageController extends Controller
{
  public function index()
  {
    return view('index');
  }
  public function contact()
  {
    return view('contact');
  }
  public function projects()
  {
    return view('projects');
  }
  public function resume()
  {
    return view('resume');
  }



  public function contact_information_store(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required',
      'password' => 'required',
    ]);

    if ($request->hasFile('profile_image')) {
      $file = $request->file('profile_image');
      $file_name = time() . '-' . uniqid() . '-.' . $file->getClientOriginalExtension();

      $file->storeAs('uploads', $file_name, 'public');


    }

    $user = User::create([
      'name' => $request->name,
      'otp' => $request->otp,
      'mobile' => $request->mobile,
      'email' => $request->email,
      'password' => $request->password,
    ]);

    //  store value to session
    Session::put('user', [
      'name' => $request->name,
      'otp' => $request->otp,
      'mobile' => $request->mobile,
      'email' => $request->email,
      'password' => $request->password,
    ]);

    if ($request->hasFile('profile_image')) {
      return response(view('confirmation', [
        'user_name' => session::get('user.name'),
        'user_otp' => session::get('user.otp'),
        'user_mobile' => session::get('user.mobile'),
        'user_email' => session::get('user.email'),
      ]))->withCookie(cookie('file_uploaded', 'true', 0.20));
    }else{
      return view('confirmation', [
        'user_name' => session::get('user.name'),
        'user_otp' => session::get('user.otp'),
        'user_mobile' => session::get('user.mobile'),
        'user_email' => session::get('user.email'),
      ]);
    }

  }


  public function show_confirmation_page()
  {
    return view('confirmation');
  }


}
