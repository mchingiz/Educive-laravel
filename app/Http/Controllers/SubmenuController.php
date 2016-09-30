<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Submenu;
use App\Menu;
use App\Category;
class SubmenuController extends Controller
{

  public function edit(Submenu $submenu){
      return view('menu.editsubmenu',compact('submenu'));
  }


  public function create(Menu $menu,Request $request){
      $submenu=new Submenu();
      $submenu->name=$request->name;
      $submenu->link= strtolower("/".preg_replace('/\s+/', '',$menu->name."/".$request->name));
      $submenu->menu_id= $request->menu_id;
      $submenu->save();
      $newcategory= new Category();
      $newcategory->name=$submenu->name;
      $newcategory->submenu_id=$submenu->id;
      $newcategory->save();

      return back();
  }
  public function update(Submenu $submenu,Request $request){
      $submenu->name=$request->name;
      $submenu->link= strtolower("/".preg_replace('/\s+/', '',$submenu->menu->name."/".$request->name));
      $submenu->update();
      return redirect('/menu');
  }
  public function delete(Submenu $submenu){
    $submenu->delete();
    return back();
  }
}
