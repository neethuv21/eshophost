<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    function index(){
        $data= product::all();

        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data= product::find($id);
        return view('detail',['product'=>$data]);

    }
    function search(Request $req){
        
     $data=product::where('name','like', '%'.$req->input('query').'%')->get();
     return view('search',['products'=>$data]);

    }
    function addtocart(Request $req){
        if($req->session()->has('user')){
            $cart= new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        }else{
            return redirect('/login');
        }
    }
        static function cartItem(){
            $userId=Session()->get('user')['id'];
            return cart::where('user_id',$userId)->count();


        }
        function cartlist(){
            $userId=Session()->get('user')['id'];

            $products=DB::table('cart')
            ->join('products','cart.product_id','=','products.id')            
            ->where('cart.user_id', $userId)

            ->select('products.*','cart.id as cart_id')
            ->get();

            return view('cartlist',['products'=>$products]);
        }

        function removecart($id){
            cart::destroy($id);
            return redirect('cartlist');

        }
        function ordernow(){
            $userId=Session()->get('user')['id'];

            $total= $products=DB::table('cart')
            ->join('products','cart.product_id','=','products.id')            
            ->where('cart.user_id', $userId)

            
            ->sum('products.price');

            return view('ordernow',['total'=>$total]);
        }
        function orderplace(Request $req){
            $userId=Session()->get('user')['id'];
            $allcart=cart::where('user_id',$userId)->get();
            foreach($allcart as $cart){
                $order= new order();
                $order->product_id=$cart['product_id'];
                $order->user_id=$cart['user_id'];
                $order->status="pending";
                $order->payment_method=$req->payment;
                $order->product_status="pending";
                $order->address=$req->address;
                $order->save();
                cart::where('user_id',$userId)->delete();

            }
         $req->input();
         return redirect('/');

        }
        function myorders(){
            $userId=Session()->get('user')['id'];

            $orders=DB::table('orders')
            ->join('products','orders.product_id','=','products.id')            
            ->where('orders.user_id', $userId)

            
            ->get();

            return view('myorders',['orders'=>$orders]);
        }

}


        
    

