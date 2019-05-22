<?php

namespace App\Http\Controllers;


use App\Mails;
use App\PartnerRequests;
use App\Volunteers;
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

    /**
     * function for reteive and show all request from users(contact,partner request,and volunteer request)
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function emails()
    {
        $mails = Mails::all();
        $partnersRequests = PartnerRequests::all();
        $volunteersRequests = Volunteers::all();
        return view("admin.emails", compact('mails', 'partnersRequests', 'volunteersRequests'));
    }

    public function destroy($table, $id)
    {
        // Capitalized the string then get the Model from it
        $table = "App\\" . ucfirst($table);
        try {
            $status = $table::findOrFail($id)->delete();
            if ($status)
                return response()->json(["status" => 200]);
        } catch (\Exception $exception) {
            return response()->json(["status" => 500, "error" => $exception->getTraceAsString()]);
        }
        return response()->json(["status" => 404]);
    }
}
