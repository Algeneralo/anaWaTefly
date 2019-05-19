<?php

namespace App\Http\Controllers\Admin;

use App\about;
use App\Directors;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = about::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAboutRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAboutRequest $request)
    {
        $this->mergeRequestWithHeadMessage($request);

        $status = about::create($request->all());
        if ($status)
            return $this->successResponse('admin/about');
        return $this->failResponse();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param about $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAboutRequest $request
     * @param about $about
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $this->mergeRequestWithHeadMessage($request);
        $status = $about->update($request->except(['_token', '_method', 'head_name']));
        if ($status)
            return $this->successResponse('admin/about', 'تم التعديل بنجاح');
        return $this->failResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param about $about
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(About $about)
    {
        $status = $about->forceDelete();
        if ($status)
            return $this->successResponse('admin/about', 'تم الحذف بنجاح');
        return $this->failResponse();
    }

    /**
     * Replace the head message value with json data to store head name and message as json
     *
     * @param Request $request
     */
    private function mergeRequestWithHeadMessage(Request $request)
    {
        $request->merge([
            'head_message' => json_encode(['head_message' => $request->input('head_message'),
                'head_name' => $request->input('head_name')
            ])
        ]);
    }
}
