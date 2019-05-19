<?php

namespace App\Http\Controllers\Admin;

use App\config;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreConfigRequest;

class ConfigController extends Controller
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
    public function store(StoreConfigRequest $request, $id = null)
    {
        //find the configuration by id or create new one
        $status = config::updateOrCreate(['id' => $id,], $request->all());
        if ($status)
            return $this->successResponse('admin/', 'تم التعديل بنجاح');
        return $this->failResponse();
    }

}
