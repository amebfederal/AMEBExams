<?php

namespace App\Http\Controllers\SuperAdmin\Banner;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\BannerRequest;
use App\Modules\Services\Banner\BannerService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends AdminBaseController
{
    protected $banner;
    function __construct(BannerService $banner)
    {
        $this->banner =$banner;
        $this->middleware('superadmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $banners  =$this->banner->paginate();
            return view('superadmin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        if ($this->banner->create($request->all())) {
            return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
        }

        return redirect()->route('banner.create')->with('error', 'Banner could not be created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $banner = $this->banner->find($id);
        //dd($banner);
        return view('superadmin.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $id)
    {
        if($this->banner->update($id, $request->all())) {
            return redirect()->route('banner.index')->with('success', 'Banner updated successfully.');
        }

        return redirect()->route('banner.edit',[$id])->with('error', 'Banner could not be updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


        if ($this->banner->delete($id)) {
            return redirect()->route('banner.index')->with('success', 'Banner deleted successfully.');
        }

        return redirect()->route('banner.index')->with('error', 'Course could not be deleted');
    }
}
