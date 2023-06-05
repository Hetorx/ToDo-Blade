<?php

namespace App\Http\Controllers;

use App\Models\Page;
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
    
    public function show($id) {
        $page = Page::find ($id);

        return $page;
    }

}