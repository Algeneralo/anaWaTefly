<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePartnerRequest;
use App\Partners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    private $redirect = "/admin/partners";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::all();
        return view("admin.partners.index", compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.partners.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePartnerRequest $request
     * @return PartnerController|\Illuminate\Http\RedirectResponse
     */
    public function store(StorePartnerRequest $request)
    {
        $image = $this->uploadImage($request->file('image_file'), null, [210, 210]);
        //merge request with image variable to save it's name
        $request->merge(['image' => $image]);
        $status = Partners::create($request->all());
        if ($status)
            return $this->successResponse($this->redirect);
        return $this->failResponse();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Partners $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partners $partner)
    {
        return view("admin.partners.edit", compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Partners $partner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Partners $partner)
    {
        if ($request->hasFile('image_file')) {
            //use old image name to override it
            $image = $this->uploadImage($request->file('image_file'), $partner->image, [210, 210]);
            //merge request with image variable to save it's name
            $request->merge(['image' => $image]);
        }
        $status = $partner->update($request->except(['_token', '_method', 'image_file']));
        if ($status)
            return $this->successResponse($this->redirect, 'تم التعديل بنجاح');
        return $this->failResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partners $partners
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Partners $partners)
    {
        $status = $partners->delete();
        if ($status)
            return $this->successResponse($this->redirect, 'تم الحذف بنجاح');
        return $this->failResponse();
    }
}
