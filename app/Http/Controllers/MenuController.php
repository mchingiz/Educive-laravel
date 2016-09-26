<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
class MenuController extends Controller
{
    public function show(){
        $data=Category::all();
        return view('menu.menu',compact('data'));
    }

    public function delete( $id){
        $data=Category::find($id)->delete();
        return back();
    }
}
