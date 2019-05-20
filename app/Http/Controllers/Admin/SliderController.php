<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view("admin.slider.index", compact("sliders"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreSliderRequest $request)
    {
        $image = $this->uploadImage($request->file('image_file'));
        //merge request with image variable to save it's name
        $request->merge(['image' => $image]);
        $status = Slider::create($request->all());
        if ($status)
            return $this->successResponse("/admin/sliders");
        return $this->failResponse();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view("admin.slider.edit", compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Slider $slider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Slider $slider)
    {
        if ($request->hasFile('image_file')) {
            $image = $this->uploadImage($request->file('image_file'), $slider->image);
            //merge request with image variable to save it's name
            $request->merge(['image' => $image]);
        }
        $status = $slider->update($request->except(['_token', '_method', 'image_file']));
        if ($status)
            return $this->successResponse("admin/sliders", 'تم التعديل بنجاح');
        return $this->failResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Slider $slider)
    {
        $status = $slider->delete();
        if ($status)
            return $this->successResponse("/admin/sliders", 'تم الحذف بنجاح');
        return $this->failResponse();
    }
}
