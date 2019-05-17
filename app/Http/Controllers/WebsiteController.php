<?php

namespace App\Http\Controllers;

use App\about;
use App\config;
use App\Directors;
use App\DoneProjects;
use App\FinanceProjects;
use App\News;
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
        $slider = Slider::all();
        //select the message for the current language
        $welcomeMessage = config::select('welcome_message_' . \App::getLocale());
        return view('website.home', compact('news', 'slider', 'welcomeMessage'));
    }

    /**
     * About page function
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $about = about::first();
        $directors = Directors::all();
        return view('website.about', compact('about', 'directors'));
    }

    /**
     * Projects page function with 2 types of project
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function partners()
    {
        $partners = Partners::all();
        return view('website.partners', compact('partners'));
    }

    public function volunteer()
    {
        return view('website.volunteer');
    }

    public function contactUs()
    {
        return view('website.contact-us');
    }

    public function details($table, $id)
    {
        // Capitalized the string then get the Model from it
        $table = "App\\" . ucfirst($table);
        $data = $table::findOrFail($id);
        return view('website.details', compact('data'));
    }
}
