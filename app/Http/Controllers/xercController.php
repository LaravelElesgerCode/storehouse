<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\xercRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\orders;
use App\Models\products;
use App\Models\clients;
use App\Models\brands;
use App\Models\xerc;

class xercController extends Controller
{
    public function xinsert(xercRequest $post)
    {
      $modelXerc = new xerc();

      $modelXerc->user_id = Auth::id();
      $modelXerc->appointment = $post->appointment;
      $modelXerc->amount = $post->amount;

      $modelXerc->save();

      return redirect()->route('xarcc')->with('mesaj1', 'Xərc uğurla bazaya elavə edildi!');
    }


    public function xlist()
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      return view('xerc', [
       'xdata'=>xerc::where('user_id','=',Auth::id())->orderby('id','desc')->get(),

       'xsay'=>$xsay,
       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'bsay'=>$bsay
      ]);
    }


    public function xdelete($id)
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

       return view('xerc', [
       'xdata'=>xerc::where('user_id','=',Auth::id())->orderBy('id','desc')->get(),
       'xdelete_id'=>$id,

       'xsay'=>$xsay,
       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'bsay'=>$bsay
      ]);
    }


    public function xdelete2($id)
    {
      xerc::find($id)->delete();
      return redirect()->route('xarcc')->with('mesaj1', 'Xərc uğurla bazadan silindi!');
    }


    public function xedit($id)
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      return view('xerc', [
       'xdata'=>xerc::where('user_id','=',Auth::id())->orderBy('id','desc')->get(),
       'xeditdata'=>xerc::find($id),

       'xsay'=>$xsay,
       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'bsay'=>$bsay
      ]);
    }


    public function xupdate(xercRequest $post)
    {
      $modelXerc = xerc::find($post->id);

      $modelXerc->appointment = $post->appointment;
      $modelXerc->amount = $post->amount;

      $modelXerc->save();

      return redirect()->route('xarcc')->with('mesaj1', 'Xərc uğurla yeniləndi!');
    }

}
