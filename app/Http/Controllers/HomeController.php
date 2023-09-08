<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  index(){

        $data['menu']= 'accueil';
        $data['title']= 'accueil';

        return view('home',$data);
    }

    public function contact(){

        $data['menu']= 'contact';
        $data['title']= 'contact';

        return view('pages.contact',$data);
    }

    public function apropos(){

        $data['menu']= 'à propos';
        $data['title']= 'à propos';

        return view('pages.apropos',$data);
    }

    public function services(){

        $data['menu']= 'services';
        $data['title']= 'services';

        return view('pages.services',$data);
    }

    public function location(){

        $data['menu']= 'location';
        $data['title']= 'location';

        return view('pages.location',$data);

    }

    public function detail(){

        $data['menu']= 'detail';
        $data['title']= 'detail';

        return view('pages.detail_voiture',$data);

    }

}
