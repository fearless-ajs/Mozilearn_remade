<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPagesController extends Controller
{
    private $social;
    private $setting;

    public function __construct()
    {
        //Fetch mozisha information from mozisha.com

    }

    /*
     * Home page
     */
    public function home()
    {
        $data = [
            'title'         => 'Mozilearn | Learn new skill and upgrade existing skill  with our awesome array of courses.',
            'description'   => 'A platform to Learn new skill and upgrade existing skill with our awesome array of courses.',
            'keywords'      => 'Mozilearn, learn.mozisha.com, learn.mozisha.com, mozisha, mozisha international, Learn new skill and upgrade existing skill  with our awesome array of courses, Online courses, mozisha e-learning website, scholarship, new skill, learning, online school,
            , online learning center, The learning community dedicated to building  responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Mozilearn | Learn new skill and upgrade existing skill  with our awesome array of courses.',

            'sm_title'         => 'Mozilearn | Learn new skill and upgrade existing skill  with our awesome array of courses.',
            'sm_description'   => 'A platform to Learn new skill and upgrade existing skill with our awesome array of courses.',
            'sm_image'         => 'https://learn.mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('homepage'),
        ];

        return view('general.home', ['data' => $data]);
    }

    /*
     * About page
     */
    public function about()
    {
        $data = [
            'title'         => 'About Mozilearn | Learn new skill and upgrade existing skill  with our awesome array of courses.',
            'description'   => 'A platform to Learn new skill and upgrade existing skill with our awesome array of courses.',
            'keywords'      => 'About Mozilearn, learn.mozisha.com/about, learn.mozisha.com, mozisha, mozisha international, Learn new skill and upgrade existing skill  with our awesome array of courses, Online courses, mozisha e-learning website, scholarship, new skill, learning, online school,
            , online learning center, The learning community dedicated to building  responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'About Mozilearn | Learn new skill and upgrade existing skill  with our awesome array of courses.',

            'sm_title'         => 'About Mozilearn | Learn new skill and upgrade existing skill  with our awesome array of courses.',
            'sm_description'   => 'A platform to Learn new skill and upgrade existing skill with our awesome array of courses.',
            'sm_image'         => 'https://learn.mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('homepage'),
        ];

        return view('general.about_mozilearn', ['data' => $data]);
    }
}
