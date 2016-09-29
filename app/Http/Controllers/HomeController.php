<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Menu;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $menus=Menu::all();
        view()->share('menus', $menus);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function mainpage()
    { $menus=Menu::all();
      return view('index');
        return view('index',compact('menus'));
    }
    public function contact()
    {
      return view('contact');
    }



}
