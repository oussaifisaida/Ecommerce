<?php

namespace App\Http\ViewComposers;

use App\Category;
use Illuminate\View\View;

class HeaderComposer
{
    public function compose(View $view){

        $view->with('categories',Category::where('is_online',1)->get());
    }

}
