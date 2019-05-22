<?php

namespace App\Http\Controllers\Admin;

use App\FinanceProjects;
use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostRequest;

class FinanceProjectController extends Controller
{
    private $title = "مشاريع للتمويل ";
    private $route = "financeProjects";
    private $redirect = '/admin/financeProjects';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $route = $this->route;
        $posts = FinanceProjects::all();
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
        $status = FinanceProjects::create($request->all());
        if ($status)
            return $this->successResponse($this->redirect);
        return $this->failResponse();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param FinanceProjects $financeProject
     * @return \Illuminate\Http\Response
     */
    public function edit(FinanceProjects $financeProject)
    {
        $title = $this->title;
        $route = $this->route;
        $post = $financeProject;
        return view('admin.posts.edit', compact('post', 'title', 'route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param FinanceProjects $financeProject
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePostRequest $request, FinanceProjects $financeProject)
    {
        if ($request->hasFile('image_file')) {
            //use old image name to override it
            $image = $this->uploadImage($request->file('image_file'), $financeProject->image, [1920, 1080]);
            //merge request with image variable to save it's name
            $request->merge(['image' => $image]);
        }
        $status = $financeProject->update($request->except(['_token', '_method', 'image_file']));
        if ($status)
            return $this->successResponse($this->redirect, 'تم التعديل بنجاح');
        return $this->failResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param FinanceProjects $financeProject
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(FinanceProjects $financeProject)
    {
        $status = $financeProject->delete();
        if ($status)
            return $this->successResponse($this->redirect, 'تم الحذف بنجاح');
        return $this->failResponse();
    }
}
