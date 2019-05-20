<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * custom function for uploading images for check editor
     *
     * @param Request $request
     * @return string
     */
    public function uploadCKEditorImage(Request $request)
    {
        $CKEditor = $request->get('CKEditor');
        $funcNum = $request->get('CKEditorFuncNum');
        $message = $url = '';
        if ($request->hasFile('upload')) {

            $file = $request->file('upload');
            if ($file->isValid()) {
                $url = asset('/assets/img/upload/' . $this->uploadImage($file));
            } else {
                $message = 'An error occurred while uploading the file.';
            }
        } else {
            $message = 'No file uploaded.';
        }
        return '<script>window.parent.CKEDITOR.tools.callFunction(' . $funcNum . ', "' . $url . '", "' . $message . '")</script>';
    }
}
