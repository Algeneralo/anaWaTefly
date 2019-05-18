<?php

namespace App\Http\Controllers;

use App\config;
use App\Http\Requests\StoreConfigRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * get the site configuration
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $config = config::first();
        return view('admin.index', compact('config'));
    }

    /**
     * Update the site configuration if exist or crate new one then return the status
     *
     * @param StoreConfigRequest $request
     * @param null $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function configStore(StoreConfigRequest $request, $id = null)
    {
        //find the configuration by id or create new one
        $status = config::updateOrCreate(['id' => $id,], $request->all());
        if ($status)
            return redirect()->back()->with('success', 'تم التعديل بنجاح');
        return redirect()->back()->with('error', 'حدث خلل,يرجى المحاولة فيما بعد');
    }
}