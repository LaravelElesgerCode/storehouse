<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\clientsRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\orders;
use App\Models\products;
use App\Models\clients;
use App\Models\brands;
use App\Models\xerc;



class clientsController extends Controller
{
    public function cinsert(clientsRequest $post)
    {
      $modelClients = new clients();

      $csay = $modelClients->where('email','=', $post->email)->where('user_id','=',Auth::id())->count();

      if($csay==0)
        {
          $post->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4096|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
           ]);

          if($post->file('image'))
            {
             $file = time().'.'.$post->image->extension();
             $post->image->storeAs('public/uploads/clients/', $file);
             $modelClients->image='storage/uploads/clients/'.$file;
            }

          $modelClients->user_id = Auth::id();
          $modelClients->name = $post->name;
          $modelClients->surename = $post->surename;
          $modelClients->tel = $post->tel;
          $modelClients->email = $post->email;

          $modelClients->save();

          return redirect()->route('klientss')->with('mesaj1', 'Klient uğurla bazaya elavə edildi!');
        }

       return redirect()->route('klientss')->with('mesaj2', 'Bu email artıq bazaya elavə olunub!');
    }


    
    public function clist()
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      return view('clients', [
       'cdata'=>clients::where('user_id','=',Auth::id())->orderBy('id','desc')->get(),

       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'xsay'=>$xsay,
       'bsay'=>$bsay
      ]);

        //return view('brands', ['bdata'=>brands::orderBy('id','desc')->where('name','=','alasgar')->where('surename','=','alasgarov')->get()]);
        //return view('brands', ['bdata'=>brands::orderBy('id','desc')->orwhere('name','=','alasgar')->where('surename','=','alasgarov')->get()]);
    }



    public function cdelete($id)
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      return view('clients', [
       'cdata'=>clients::where('user_id','=',Auth::id())->orderBy('id','desc')->get(),
       'cdelete_id'=>$id,

       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'xsay'=>$xsay,
       'bsay'=>$bsay
      ]);
    }



    public function cdelete2($id)
    {
      $cyoxla = orders::where('clients_id','=',$id)->count();

      if($cyoxla==0)
        {
          clients::find($id)->delete();
          return redirect()->route('klientss')->with('mesaj1', 'Klient uğurla bazadan silindi!');
        }
        
       return redirect()->route('klientss')->with('mesaj2', 'Bu klient productsda aktiv qiymətə malik olduğu üçün silinmədi!');
    }



    public function cedit($id)
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      return view('clients', [
       'cdata'=>clients::where('user_id','=',Auth::id())->orderBy('id','desc')->get(),
       'ceditdata'=>clients::find($id),
       
       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'xsay'=>$xsay,
       'bsay'=>$bsay
      ]);
    }



    public function cupdate(clientsRequest $post)
    {
      $modelClients = clients::find($post->id);
      
      if($post->file('image'))
        {
         $file = time().'.'.$post->image->extension();
         $post->image->storeAs('public/uploads/clients/', $file);
         $modelClients->image='storage/uploads/clients/'.$file;
        }

      $modelClients->name = $post->name;
      $modelClients->surename = $post->surename;
      $modelClients->tel = $post->tel;
      $modelClients->email = $post->email;

      $modelClients->save();

      return redirect()->route('klientss')->with('mesaj1', 'Klient uğurla yeniəndi!');
    }


}
