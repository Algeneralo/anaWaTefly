<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\Facades\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Custom function for uploading image with specific attribute
     * @param UploadedFile $image image file
     * @param null $name desired name
     * @param array $resize new dimension for resize
     * @param null $path
     * @return string image name
     */
    protected function uploadImage(UploadedFile $image, $name = null, $resize = [], $path = null)
    {
        //get the file desired name or set the original one with timestamp
        $imageName = $name . "." . $image->getClientOriginalExtension()
            ?? Carbon::now()->timestamp . "-" . $image->getClientOriginalName();
        //get file desired path or set it to public path
        $path = $path ?? public_path('assets/img/upload/');
        //if image need to resize
        if (!empty($resize)) {
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize($resize[0], $resize[1]);
            $image_resize->save($path . $imageName);
        } else
            $image->move($path, $imageName);
        return $imageName;
    }

    protected function successResponse($redirect, $message = null)
    {
        $message = $message ?? 'تم  الانشاء بنجاح';
        return redirect($redirect)->with('success', $message);
    }

    /**
     * custom function for redirect if create or update instance fail
     *
     * @param null $message
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function failResponse($message = null)
    {
        $message = $message ?? 'حدث خلل,يرجى المحاولة فيما بعد';
        return redirect()->back()->with('error', 'حدث خلل,يرجى المحاولة فيما بعد');
    }
}
