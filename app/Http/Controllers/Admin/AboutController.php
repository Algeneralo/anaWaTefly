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
        $about = about::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutRequest $request, $id)
    {
        $this->mergeRequestWithHeadMessage($request);
        $status = about::where('id', $id)->update($request->except(['_token', '_method', 'head_name']));
        if ($status)
            return redirect('admin/about')->with('success', 'تم تحديث البيانات بنجاح');
        return redirect()->back()->with('error', 'حدث خلل,يرجى المحاولة فيما بعد');
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
