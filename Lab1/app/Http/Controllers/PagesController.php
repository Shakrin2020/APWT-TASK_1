<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pageCheck(){
        return view('pages.home');
    }

    public function pageHome(){
        return view('pages.helloPage');
    }

    public function pageService(){
        $names = array('Adventure','Fiction', 'Novel', 'Comic', 'Horror'); 

        return view('pages.service') ->with('names', $names);
    }

    public function pageAboutUs(){
        return view('pages.about us
        ');
    }

    public function pageContactUs(){
        return view('pages.contact us
        ');
    }

    public function pageOurTeams(){
        return view('pages.our teams
        ');
    }
}
