<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;
class MenuController extends Controller
{
    public function show(){
        $data=Menu::all();
        return view('menu.menu',compact('data'));
    }
    public function edit($id){
        $data=Menu::find($id);
        return view('menu.editmenu',compact('data'));
    }

    public function delete($id){
        $menu=Menu::find($id);
        $submenus=$menu->submenus;
        foreach($submenus as $submenu){
          $submenu->delete();
        }
        $menu->delete();
        return back();
    }
    public function create(Request $request){
        $menu=new Menu();
        $menu->name=$request->name;
        $menu->link= strtolower("/".preg_replace('/\s+/', '',$request->name));
        $menu->save();
        return back();
    }
    public function update($id,Request $request){
        $menu=Menu::find($id);
        $menu->name=$request->name;
        $menu->link= strtolower("/".preg_replace('/\s+/', '',$request->name));
        $menu->update();
        return redirect('/menu');
    }

}
