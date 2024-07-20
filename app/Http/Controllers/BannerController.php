<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    const PATH_VIEW = 'admin.banners.';
    const PATH_UPLOAD = 'banners';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Banner::query()->latest('id')->get();
        return view(self::PATH_VIEW .__FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW .__FUNCTION__,);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $data = $request->except('cover');
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        if ($request->hasFile('cover')) {
            $data['cover'] = Storage::put(self::PATH_UPLOAD, $request->file('cover'));
        } else {
            $data['cover'] = '';
        }
        Banner::query()->create($data);
        return redirect()->route('admin.banners.index')->with('message', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $data = $request->except('cover');
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        if ($request->hasFile('cover')) {
            $data['cover'] = Storage::put(self::PATH_UPLOAD, $request->file('cover'));
//            Xóa file cũ trong storage
            Storage::delete($banner->cover);
        } else {
            $data['cover'] = $banner->cover;
        }
        $banner->update($data);
        return redirect()->route('admin.banners.index')->with('message', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return back()->with('message', 'Xóa thành công');
    }
}
