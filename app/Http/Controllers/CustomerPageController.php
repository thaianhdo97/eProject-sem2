<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerPageController extends Controller
{
    //create control to navigation pages in site
    //get insdex view
    public function index() {
        return view("customer/index");
    }
    //get about view
    public function about() {
        return view("customer/about");
    }
}
