<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RegisterController extends BaseController
{
    public function register()
    {
        $category = Category::all();
        return view('page.register',compact('category'));
    }
}
