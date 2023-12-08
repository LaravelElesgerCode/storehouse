<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\brandsRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\orders;
use App\Models\products;
use App\Models\clients;
use App\Models\brands;
use App\Models\xerc;


class brandsController extends Controller
{
    public function binsert(brandsRequest $post)
    {
      $modelBrands = new brands();

      $bsay = $modelBrands->where('brand','=', $post->brand)->where('user_id','=',Auth::id())->count();

      if($bsay==0)
        {
          $post->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4096|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
           ]);


          if($post->file('image'))
            {
             $file = time().'.'.$post->image->extension();
             $post->image->storeAs('public/uploads/brands/', $file);
             $modelBrands->image='storage/uploads/brands/'.$file;
            }

            
          $modelBrands->user_id = Auth::id();
          $modelBrands->brand = $post->brand;
          $modelBrands->save();
          return redirect()->route('brendd')->with('mesaj1', 'Brend uğurla bazaya əlavə edildi!');
        }
        
       return redirect()->route('brendd')->with('mesaj2', 'Bu brend artıq əlavə olunub!');
    }



    public function blist()
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      return view('brands', [
       'bdata'=>brands::where('user_id','=',Auth::id())->orderBy('id', 'desc')->get(),

       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'xsay'=>$xsay,
       'bsay'=>$bsay
      ]);

        //return view('brands', ['bdata'=>brands::orderBy('id','desc')->take(2)->get()]);
        //return view('brands', ['bdata'=>brands::orderBy('id','desc')->skip(1)->take(1)->get()]);
        //return view('brands', ['bdata'=>brands::orderBy('id','desc')->where('brand','=','brand')->get()]);
        //return view('brands', ['bdata'=>[brands::find(3)]]);
    }


    public function bdelete($id)
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      return view('brands', [
       'bdata'=>brands::where('user_id','=',Auth::id())->orderBy('id','desc')->get(),
       'bdelete_id'=>$id,
       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'xsay'=>$xsay,
       'bsay'=>$bsay 
      ]);
    }

    
    public function bdelete2($id)
    {
      $byoxla = products::where('brand_id','=',$id)->count();

      if($byoxla==0)
        {
          brands::find($id)->delete();
          return redirect()->route('brendd')->with('mesaj1', 'Brend uğurla bazadan silindi!');
        }

       return redirect()->route('brendd')->with('mesaj2', 'Bu brend productsda aktiv qiymətə malik olduğu üçün silinmədi!');
    }


    public function bedit($id)
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      return view('brands', [
       'bdata'=>brands::where('user_id','=',Auth::id())->orderBy('id','desc')->get(),
       'beditdata'=>brands::find($id),
       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'xsay'=>$xsay,
       'bsay'=>$bsay 
       
      ]);
    }



    public function bupdate(brandsRequest $post)
    {
      $modelBrands = brands::find($post->id);

      if($post->file('image'))
        {
         $file = time().'.'.$post->image->extension();
         $post->image->storeAs('public/uploads/brands/', $file);
         $modelBrands->image='storage/uploads/brands/'.$file;
        }

      $modelBrands->brand = $post->brand;
      $modelBrands->save();

      return redirect()->route('brendd')->with('mesaj1', 'Brend uğurla yeniləndi!');    
    }

   
}
