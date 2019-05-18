<?php

namespace App\Http\Controllers\Admin;

use App\about;
use App\Directors;
use App\Http\Requests\StoreAboutRequest;
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
        $directors = Directors::all();
        return view('admin.about.index', compact('abouts', 'directors'));
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
        //replace the head message value to json to store the head name with the message
        $request->merge(['head_message' => json_encode(['head_message' => $request->input('head_message'),
            'head_name' => $request->input('head_name')])]);
        $status = about::create($request->all());
        if ($status)
            return redirect('admin/about')->with('success', 'تم الانشاء بنجاح');
        return redirect()->back()->with('error', 'حدث خلل,يرجى المحاولة فيما بعد');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = about::findOrFail($id)->forceDelete();
        if ($status)
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        return redirect()->back()->with('error', 'حدث خلل,يرجى المحاولة فيما بعد');
    }
}