<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    const PATH_VIEW = 'admin.products.';
    const PATH_UPLOAD = 'products';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->with(['category'])->latest('id')->get();
        return view(self::PATH_VIEW.__FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::query()->get(); 
        return view(self::PATH_VIEW . __FUNCTION__,compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->except('img_thumb');
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        if ($request->hasFile('img_thumb')) {
            $data['img_thumb'] = Storage::put(self::PATH_UPLOAD, $request->file('img_thumb'));
        } else {
            $data['img_thumb'] = '';
        }
        Product::query()->create($data);
        return redirect()->route('admin.products.index')->with('message', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view(self::PATH_VIEW.__FUNCTION__, compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
          $category = Category::query()->get(); 
        return view(self::PATH_VIEW.__FUNCTION__, compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->except('img_thumb');
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        if ($request->hasFile('img_thumb')) {
            $data['img_thub'] = Storage::put('products', $request->file('img_thumb'));
            // xóa ảnh cũ
            if(!empty($product->img_thumb) && Storage::exists($product->img_thumb)) {
                Storage::delete($product->img_thumb);
            }
        } else {
            // Dữ lại ảnh cũ nếu không cập nhật ảnh
            $data['img_thumb'] = $product->img_thumb;
        }
        $product->update($data);
        return redirect()->route('admin.products.index')->with('message', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('message', 'Xóa thành công');
    }
}
