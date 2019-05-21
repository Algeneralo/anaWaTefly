<?php

namespace App\Http\Controllers;

use App\about;
use App\config;
use App\Directors;
use App\DoneProjects;
use App\FinanceProjects;
use App\Mails;
use App\News;
use App\PartnerRequest;
use App\Partners;
use App\Programs;
use App\Slider;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Home page function
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $news = News::all();
        $sliders = Slider::all();
        //select the message for the current language
        $welcomeAttr = "welcome_message_" . \App::getLocale();
        $welcomeMessage = config::first()->$welcomeAttr;
        return view('website.home', compact('news', 'sliders', 'welcomeMessage'));
    }

    /**
     * About page function
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
//        \App::setLocale("en");
        $about = about::first();
        $directors = Directors::all();
        return view('website.about', compact('about', 'directors'));
    }

    /**
     * Projects page function with 2 types of posts
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projects()
    {

        $doneProjects = DoneProjects::all();
        $financeProjects = FinanceProjects::all();
        return view('website.projects', compact('doneProjects', 'financeProjects'));
    }

    /**
     * Programs page function
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function programs()
    {
        $programs = Programs::all();
        return view('website.programs', compact('programs'));
    }

    /**
     * Partners page function,for showing the form and submitting it
     * when submit it will fire the if condition
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function partners(Request $request)
    {
        if ($request->post()) {
            $request->validate([
                "name" => "required",
                "email" => "required",
                "phone" => "required",
            ]);
            $status = PartnerRequest::create($request->all());
            if ($status)
                return redirect()->back()->with("success", trans('general.success_message'));
        }
        $partners = Partners::all();
        return view('website.partners', compact('partners'));
    }

    public function volunteer()
    {
        return view('website.volunteer');
    }

    public function contactUs(Request $request)
    {
        if ($request->post()) {
            $request->validate([
                "name" => "required",
                "email" => "required",
                "phone" => "required",
                "message" => "required",
                "subject" => "required",
            ]);
            $status = Mails::create($request->all());
            if ($status)
                return redirect()->back()->with("success", trans('general.success_message'));
        }
        return view('website.contact-us');
    }

    /**
     * this function is using for all "more" buttons
     *
     * @param $table -model name
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function details($table, $id)
    {
        //store to send it to view for other posts
        $tableName = $table;
        // Capitalized the string then get the Model from it
        $table = "App\\" . ucfirst($table);
        $post = $table::findOrFail($id);
        $otherPosts = $table::where('id', '!=', $id)->take(5)->get();
        return view('website.details', compact('post', 'otherPosts', 'tableName'));
    }

    /**
     * function for changing language
     *
     * @param $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function localization(Request $request, $locale)
    {
        \App::setLocale($locale);
        //store the locale in session so that the middleware can register it
        session()->put('locale', $locale);
        //check if the previous url was from details page ,if not will redirect to back,otherwise it'll redirect to home page
        if (strpos(url()->previous(), "details") != false)
            return redirect('/');
        return redirect()->back();

    }
}
