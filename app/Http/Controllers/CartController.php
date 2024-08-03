<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product, Cart $cart){
        $quantity  = request('quantity', 1);
       $quantity = $quantity >0 ? floor($quantity) : 1;
        $cart->add($product,$quantity);
        // dd(session('cart'));
        return redirect()->route('cart.view')->with('success','Thêm sản phẩm vào giỏ hàng thành công');
    }
    public function view(Cart $cart){
        // dd($cart);
        return view('cart-view');
    }
    public function DeleteCart($id, Cart $cart)
    {
       $cart->delete($id);
       return redirect()->route('cart.view')->with('warning','Xóa sản phẩm trong giỏ hàng thành công');
    }
    public function UpdateCart($id, Cart $cart)
    {
        $quantity  = request('quantity', 1);
        $quantity = $quantity >0 ? floor($quantity) : 1;
       $cart->update($id, $quantity);
       return redirect()->route('cart.view')->with('success','Xóa sản phẩm trong giỏ hàng thành công');
    }
    public function ClearCart( Cart $cart)
    {
      $cart->clear();
      return redirect()->route('cart.view')->with('warning','Xóa sản phẩm trong giỏ hàng thành công');
    }
}
