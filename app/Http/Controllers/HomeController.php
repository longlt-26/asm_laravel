<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Cart;
use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
  const PATH_VIEW = 'client.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::orderBy('created_at','desc')->limit(2)->get();
        $products = Product::all(); // Hoặc bất kỳ dữ liệu nào bạn muốn lấy
        return view('client.index', compact('products', 'banners')); // Truyền biến $products đến
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

         $data=Product::query()->findOrFail($id);
        return view(self::PATH_VIEW.__FUNCTION__, compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
    public function testEmail()
    {
        $name = 'LE Trong Long';
        Mail::send('email.test',compact('name'), function($email) use($name){
            $email->subject('AUTIMA');
            $email->to('letronglong26012004@gmail.com',$name);
        });
    }
}
