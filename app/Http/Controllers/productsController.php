<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productsRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\orders;
use App\Models\products;
use App\Models\clients;
use App\Models\brands;
use App\Models\xerc;


class productsController extends Controller
{
    public function pinsert(productsRequest $post)
    {
      $modelProducts = new products();

      $post->validate([
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4096|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
       ]);

      if($post->file('image'))
        {
          $file = time().'.'.$post->image->extension();
          $post->image->storeAs('public/uploads/products/', $file);
          $modelProducts->image='storage/uploads/products/'.$file;
        }

      $modelProducts->user_id = Auth::id();
      $modelProducts->brand_id = $post->brand_id;
      $modelProducts->product = $post->product;
      $modelProducts->purchase = $post->purchase; 
      $modelProducts->sale = $post->sale;
      $modelProducts->amount = $post->amount;

      $modelProducts->save();

      return redirect()->route('productess')->with('mesaj1', 'Məhsul uğurla bazaya əlavə edildi!');
    }



    public function plist()
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      $products = products::where('user_id','=',Auth::id())->get();
      $talish = 0;
      $tsatish = 0;
      $qazanc = 0;
      $tqazanc = 0;
      
      foreach($products as $pinfo)
      {
        $talish = $pinfo->purchase + $talish;
        $tsatish = $pinfo->sale + $tsatish;
        $qazanc = ($pinfo->sale - $pinfo->purchase) * $pinfo->amount;
        $tqazanc = (($pinfo->sale - $pinfo->purchase) * $pinfo->amount) + $tqazanc;
      }

      $psay = products::where('user_id','=',Auth::id())->count();

       return view('products', [
        'pdata'=>products::where('products.user_id','=',Auth::id())->join('brands','brands.id','=','products.brand_id')
        ->select('products.id','products.user_id','products.product','products.purchase','products.sale','products.amount','products.created_at','products.image','brands.brand')
        ->orderBy('products.id','desc')
        ->get(),

        'bdata'=>brands::where('user_id','=',Auth::id())->orderBy('brand','asc')->get(),

        'osay'=>$osay,
        'psay'=>$psay,
        'csay'=>$csay,
        'bsay'=>$bsay,
        'xsay'=>$xsay,

        'talish'=>$talish,
        'tsatish'=>$tsatish,
        'qazanc'=>$qazanc,
        'tqazanc'=>$tqazanc
      ]);
    }



    public function pdelete($id)
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      $products = products::where('user_id','=',Auth::id())->get();
      $talish = 0;
      $tsatish = 0;
      $qazanc = 0;
      $tqazanc = 0;
      
      foreach($products as $pinfo)
      {
        $talish = $pinfo->purchase + $talish;
        $tsatish = $pinfo->sale + $tsatish;
        $qazanc = ($pinfo->sale - $pinfo->purchase) * $pinfo->amount;
        $tqazanc = (($pinfo->sale - $pinfo->purchase) * $pinfo->amount) + $tqazanc;
      }

      $psay = products::where('user_id','=',Auth::id())->count();

      return view('products', [
      'pdata'=>products::where('products.user_id','=',Auth::id())->join('brands','brands.id','=','products.brand_id')
      ->select('products.id','products.user_id','products.product','products.purchase','products.sale','products.amount','products.created_at','products.image','brands.brand')
      ->orderBy('products.id','desc')
      ->get(),

      'bdata'=>brands::where('user_id','=',Auth::id())->orderBy('brand','asc')->get(),
      'pdelete_id'=>$id,

      'osay'=>$osay,
      'psay'=>$psay,
      'csay'=>$csay,
      'bsay'=>$bsay,
      'xsay'=>$xsay,

      'talish'=>$talish,
      'tsatish'=>$tsatish,
      'qazanc'=>$qazanc,
      'tqazanc'=>$tqazanc
      ]);
    }



    public function pdelete2($id)
    {
      $pyoxla = orders::where('products_id','=',$id)->count();

      if($pyoxla==0)
        {
          $modelProcducts = products::find($id)->delete();
          return redirect()->route('productess')->with('mesaj1', 'Məhsul uğurla bazadan silindi!');
        }
        
       return redirect()->route('productess')->with('mesaj2', 'Bu products ordersdə aktiv qiymətə malik olduğu üçün silinmədi!');
    }



    public function pedit($id)
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();

      $products = products::where('user_id','=',Auth::id())->get();
      $talish = 0;
      $tsatish = 0;
      $qazanc = 0;
      $tqazanc = 0;
      
      foreach($products as $pinfo)
      {
        $talish = $pinfo->purchase + $talish;
        $tsatish = $pinfo->sale + $tsatish;
        $qazanc = ($pinfo->sale - $pinfo->purchase) * $pinfo->amount;
        $tqazanc = (($pinfo->sale - $pinfo->purchase) * $pinfo->amount) + $tqazanc;
      }

      $psay = products::where('user_id','=',Auth::id())->count();

       return view('products', [
       'pdata'=>products::where('products.user_id','=',Auth::id())->join('brands','brands.id','=','products.brand_id')
       ->select('products.id','products.user_id','products.product','products.purchase','products.sale','products.amount','products.created_at','products.image','brands.brand')
       ->orderBy('products.id','desc')
       ->get(),

       'bdata'=>brands::where('user_id','=',Auth::id())->orderBy('brand','asc')->get(),
       'peditdata'=>products::find($id),

       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'bsay'=>$bsay,
       'xsay'=>$xsay,

       'talish'=>$talish,
       'tsatish'=>$tsatish,
       'qazanc'=>$qazanc,
       'tqazanc'=>$tqazanc
       ]);
    }



    public function pupdate(productsRequest $post)  
    {
      $modelProducts = products::find($post->id);

      if($post->file('image'))
        {
          $file = time().'.'.$post->image->extension();
          $post->image->storeAs('public/uploads/products/', $file);
          $modelProducts->image='storage/uploads/products/'.$file;
        }

      $modelProducts->brand_id = $post->brand_id;
      $modelProducts->product = $post->product; 
      $modelProducts->purchase = $post->purchase;
      $modelProducts->sale = $post->sale;
      $modelProducts->amount = $post->amount;

      $modelProducts->save();

      return redirect()->route('productess')->with('mesaj1','Məhsul uğurla yeniəndi!');
    }
}
