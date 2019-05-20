<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Programs;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    private $title = "البرامج";
    private $route = "programs";
    private $redirect = 'admin/programs';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $route = $this->route;
        $posts = Programs::all();
        return view('admin.posts.index', compact('posts', "title", 'route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        $route = $this->route;
        return view('admin.posts.create', compact('title', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePostRequest $request)
    {
        $image = $this->uploadImage($request->file('image_file'), null, [1920, 1080]);
        $request->merge(['image' => $image]);
        $status = Programs::create($request->all());
        if ($status)
            return $this->successResponse($this->redirect);
        return $this->failResponse();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Programs $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Programs $program)
    {
        $title = $this->title;
        $route = $this->route;
        $post = $program;
        return view('admin.posts.edit', compact('post', 'title', 'route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param Programs $program
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePostRequest $request, Programs $program)
    {
        if ($request->hasFile('image_file')) {
            //use old image name to override it
            $image = $this->uploadImage($request->file('image_file'), $program->image, [1920, 1080]);
            //merge request with image variable to save it's name
            $request->merge(['image' => $image]);
        }
        $status = $program->update($request->except(['_token', '_method', 'image_file']));
        if ($status)
            return $this->successResponse($this->redirect, 'تم التعديل بنجاح');
        return $this->failResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Programs $program
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Programs $program)
    {
        $status = $program->delete();
        if ($status)
            return $this->successResponse($this->redirect, 'تم الحذف بنجاح');
        return $this->failResponse();
    }
}
