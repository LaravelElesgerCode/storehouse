<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use App\Http\Requests\loginRequest;
use App\Http\Requests\registrRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;  //<----Laravelde parollara şifrələməni tətbiq etmək üçün istifade edilir!
use Illuminate\Support\Facades\Auth;  //<----Istifadıçinin login/parolunu yoxlayır!



class userController extends Controller
{
    public function loginsert(loginRequest $post)
    {
      if(!Auth::attempt(['email'=>$post->email, 'password'=>$post->password]))
       {
        return redirect()->back()->with('mesaj2', 'Daxil etdiyiniz login və ya parol yanlışdır!');
       }
      return redirect()->route('orderss');
    }


    public function logout()
    {
      auth()->logout();
      return redirect()->route('loginn');
    }

    
    public function reginsert(registrRequest $post)
    {
      $modelUser = new User();

      $yoxla = $modelUser->where('email','=',$post->email)->count();
     
      if($yoxla==0)
        {
          $modelUser->image = 0;
          $modelUser->name = $post->name;
          $modelUser->email = $post->email;
          $modelUser->password = Hash::make($post->password);

          $modelUser->save();

          return redirect()->route('registrationn')->with('mesaj1', 'Qeydiyyat uğurla bazadan keçdi!');
        }

      return redirect()->route('registrationn')->with('mesaj2', 'Bu gmail artıq əlavə olunub!!');
    }
}
