<?php

namespace App\Http\Controllers\Admin;

use App\Directors;
use App\Http\Requests\StoreDirectorRequest;
use App\Http\Requests\UpdateDirectorRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Directors::all();
        return view('admin.director.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.director.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDirectorRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreDirectorRequest $request)
    {
        $image = $this->uploadImage($request->file('image_file'), $request->input('name_en'), [210, 210]);
        //replace image value with image name
        $request->merge(['image' => $image]);
        $status = Directors::create($request->all());
        if ($status)
            return $this->successResponse('admin/directors');
        return $this->failResponse();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Directors $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Directors $director)
    {
        return view('admin.director.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDirectorRequest $request
     * @param Directors $director
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateDirectorRequest $request, Directors $director)
    {
        if ($request->hasFile('image_file')) {
            $image = $this->uploadImage($request->file('image_file'), $director->name_en, [210, 210]);
            //replace image value with image name
            $request->merge(['image' => $image]);
        }
        $status = $director->update($request->except(['_token', '_method', 'image_file']));
        if ($status)
            return $this->successResponse('admin/directors', 'تم التعديل بنجاح');
        return $this->failResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Directors $director
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Directors $director)
    {
        $status = $director->delete();
        if ($status)
            return $this->successResponse('admin/directors', 'تم الحذف بنجاح');
        return $this->failResponse();
    }

}
