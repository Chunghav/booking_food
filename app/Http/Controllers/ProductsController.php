<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $data= Product::all();
        return view('product', ['products'=>$data]);
        
    }
   
     function detail($id)
    {
        return Product::find($id);
        return view('detail{id}',['products'=>$data]);
    }

    public function search(Request $req)
    {
        return $data= Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }

    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->restaurant = $request->input('restaurant');
        
        $product->price = $request->input('price');
        
        
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOrginalExtension();
            $filename ='_'.time().'.'.$extension;
            $file->move('uploads/photo/',$filename);
            $product->photo = $filename;
            
        }else{
            return $request;
            $product->photo = '';
        }
        $product->save();
        return view('product', ['products'=>$data]);
   
    }




    public function show(Request $request, $id)
    {
        
    }

    public function addToCart(Request $req)
    {
        $cart = new Cart;
        $cart->user_id=$req->session()->get('user_id')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return view('product');
    }

    static public function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    public function cartlist()
    {
        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id', '=', 'product_id')
        ->where('cart.user_id',$userId)
        ->select('product.*','cart.id as cart_id')
        ->get();

        return view('cartlist', ['products'=>$products]);
    }

    public function removecart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    public function ordernow()
    {
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
        ->join('products','cart.product_id', '=', 'product_id')
        ->where('cart.user_id',$userId)
        ->sum('product.price');
        
        return view('ordernow', ['total'=>$total]);
    }



}

