<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ordersRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\orders;
use App\Models\products;
use App\Models\clients;
use App\Models\brands;
use App\Models\xerc;



class ordersController extends Controller
{
    public function oinsert(ordersRequest $post)
    {
      $modelOrders = new orders();

      $modelOrders->user_id = Auth::id();
      $modelOrders->quantity = $post->quantity;
      $modelOrders->products_id = $post->products_id;
      $modelOrders->clients_id = $post->clients_id;
      $modelOrders->tesdiq = 0;

      $modelOrders->save();

      return redirect()->route('orderss')->with('mesaj1', 'Sifariş uğurla bazaya əlavə edildi!');
    }

    

    public function olist()
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
        $tqazanc = (($pinfo->sale - $pinfo->purchase) * $pinfo->amount) + $qazanc;
      }

      
       return view('orders', [
       'odata'=>orders::where('orders.user_id','=',Auth::id())
       ->join('products','products.id','=','orders.products_id')
       ->join('clients','clients.id','=','orders.clients_id')
       ->select('orders.id','orders.user_id','orders.quantity','orders.tesdiq','orders.created_at','products.product','products.amount','clients.name','clients.surename')
       ->orderBy('orders.id','desc')->get(),

       'pdata'=>products::where('products.user_id','=',Auth::id())
       ->join('brands','brands.id','=','products.brand_id')
       ->select('products.id','products.user_id','products.product','products.amount','brands.brand')
       ->orderBy('product','asc','amount','asc')->get(),
       
       'cdata'=>clients::where('user_id','=',Auth::id())->orderBy('name','asc','surename','asc')->get(),

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



    public function odelete($id)
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
        $tqazanc = (($pinfo->sale - $pinfo->purchase) * $pinfo->amount) + $qazanc;
      }



      $osay = orders::where('user_id','=',Auth::id())->count();

       return view('orders', [
       'odata'=>orders::where('orders.user_id','=',Auth::id())
       ->join('products','products.id','=','orders.products_id')
       ->join('clients','clients.id','=','orders.clients_id')
       ->select('orders.id','orders.user_id','orders.quantity','orders.tesdiq','orders.created_at','products.product','products.amount','clients.name','clients.surename')
       ->orderBy('orders.id','desc')->get(),
 
       'pdata'=>products::where('products.user_id','=',Auth::id())->join('brands','brands.id','=','products.brand_id')
       ->select('products.id','products.user_id','products.product','products.amount','brands.brand')
       ->orderBy('product','asc','amount','asc')->get(),
        
      'cdata'=>clients::where('user_id','=',Auth::id())->orderBy('name','asc','surename','asc')->get(),
 
      'bdata'=>brands::where('user_id','=',Auth::id())->orderBy('brand','asc')->get(),
      'odelete_id'=>$id,

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

    

    public function odelete2($id)
    {
      $modelOrders = orders::find($id)->delete();
      return redirect()->route('orderss')->with('mesaj1', 'Sifariş uğurla bazadan silindi!');
    }



    public function oedit($id)
    {
      $xsay = xerc::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();
      $psay = products::where('user_id','=',Auth::id())->count();
      $csay = clients::where('user_id','=',Auth::id())->count();
      $bsay = brands::where('user_id','=',Auth::id())->count();
      $osay = orders::where('user_id','=',Auth::id())->count();


       return view('orders', [
       'odata'=>orders::where('orders.user_id','=',Auth::id())->join('products','products.id','=','orders.products_id')
       ->join('clients','clients.id','=','orders.clients_id')
       ->select('orders.id','orders.user_id','orders.quantity','orders.tesdiq','orders.created_at','products.product','clients.name','clients.surename')
       ->orderBy('orders.id','desc')->get(),
 
       'pdata'=>products::where('products.user_id','=',Auth::id())->join('brands','brands.id','=','products.brand_id')
       ->select('products.id','products.user_id','products.product','products.amount','brands.brand')
       ->orderBy('product','asc','amount','asc')->get(),
        
       'cdata'=>clients::where('user_id','=',Auth::id())->orderBy('name','asc','surename','asc')->get(),
 
       'bdata'=>brands::where('user_id','=',Auth::id())->orderBy('brand','asc')->get(),
       'oeditdata'=>orders::find($id),
       
       'osay'=>$osay,
       'psay'=>$psay,
       'csay'=>$csay,
       'bsay'=>$bsay,
       'xsay'=>$xsay,
       
       ]);
    }
    
    

    public function oupdate(ordersRequest $post)
    {
      $modelOrders = orders::find($post->id);

      $modelOrders->quantity = $post->quantity;
      $modelOrders->products_id = $post->products_id;
      $modelOrders->clients_id = $post->clients_id;

      $modelOrders->save();

      return redirect()->route('orderss')->with('mesaj1','Sifariş uğurla yeniəndi!');
    }



    public function tesdiq($id)
    {
      $orders = orders::find($id);
      $ormiq = $orders->quantity;
      $products = products::find($orders->products_id);
      $promiq = $products->amount;

      if($ormiq<=$promiq)
      {
        $miq = $promiq - $ormiq;
        $products->amount = $miq;
        $products->save();

        $orders->tesdiq = 1;
        $orders->save();

        return redirect()->route('orderss')->with('mesaj1', 'Sifariş uğurla təsdiq edildi!');
      }

      return redirect()->route('orderss')->with('mesaj2', 'Sifarişi təsdiq etmək üçün bazada kifayət qədər məhsul yoxdur!');
    } 



    public function legv($id)
    {
      $orders = orders::find($id);
      $ormiq = $orders->quantity;
      $products = products::find($orders->products_id);
      $promiq = $products->amount;

      $miq = $ormiq + $promiq;
      $products->amount = $miq;
      $products->save();

      $orders->tesdiq = 0;
      $orders->save();

      return redirect()->route('orderss')->with('mesaj1', 'Sifariş uğurla ləğv edildi!');
    }
}
