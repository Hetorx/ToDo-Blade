<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index () {
        $pages = [
            'about' => 'A little bit more information about us!',
            'contact' => 'Contact us by facebook or instagram!',
            'way' => "<Img which shows the best way to our office>"
        ];

        dd($pages);
    }
    
    public function show($slug) {
        $pages = [
            'about' => 'A little bit more information about us!',
            'contact' => 'Contact us by facebook or instagram!',
            'way' => "<Img which shows the best way to our office>"
        ];
        return $pages[$slug];
    }

}
