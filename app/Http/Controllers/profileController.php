<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use App\Http\Requests\profileRequest;

use Illuminate\Support\Facades\Hash;  //<----Laravelde parollara şifrələməni tətbiq etmək üçün istifade edilir!
use Illuminate\Support\Facades\Auth;  //<----Istifadıçinin login/parolunu yoxlayır!
use App\Models\User;

use App\Models\orders;
use App\Models\products;
use App\Models\clients;
use App\Models\brands;
use App\Models\xerc;


class profileController extends Controller
{
    public function index() 
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      return view('profile', [
      'profdata'=>User::find(Auth::id())->get(),
      
      'osay'=>$osay,
      'psay'=>$psay,
      'csay'=>$csay,
      'xsay'=>$xsay,
      'bsay'=>$bsay
      ]);
    }



    public function profinsert(profileRequest $post)
    {
       $modelUser = User::find(Auth::id());

       if(Hash::check($post->current_password, $modelUser->password))
         {
           if(empty($post->new_password) or strlen($post->new_password)>2)// strlen <----Parola lazımı uzunluqda element verir(Məs:Parol ən az 2 elementdə olmalıdır!)
             {
               if($post->new_password == $post->repaet_password)
                 {
                   $post->validate([
                      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4096|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
                     ]);
        
                   if($post->file('image'))
                     {
                      $file = time().'.'.$post->image->extension();
                      $post->image->storeAs('public/uploads/profile/',$file);
                      $modelUser->image ='storage/uploads/profile/'.$file;
                     }

                   else
                     {$modelUser->image = $post->current_image;}

                   if($post->new_password>3)
                     {$modelUser->password = Hash::make($post->new_password);}

                   else
                     {
                      $modelUser->name = $post->name;
                      $modelUser->email = $post->email;
                     }
                    
                   $modelUser->save();

                   return redirect()->route('profile')->with('mesaj1', 'Profildə ki, dəyişikliklər uğurla həyata keçirildi!');
                 }  

               return redirect()->route('profile')->with('mesaj2', 'Yeni parol və təkrar parol uyğun deyil,təkrar cəhd edin!');
             }
           
           return redirect()->route('profile')->with('mesaj2', 'Yeni parol doldurulmayıb və ya 3 simvuldan az şifrə daxil edilib!');
         }
       
       return redirect()->route('profile')->with('mesaj2', 'Cari parol yanlışdır!');
    }

}
