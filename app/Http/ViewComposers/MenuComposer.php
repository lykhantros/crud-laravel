<?php
namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class MenuComposer{
    public function compose(View $view){
        $_menu = Category::where("menu",1)->orderBy("position")->get();
        $view->with("_menu",$_menu);
    }
}