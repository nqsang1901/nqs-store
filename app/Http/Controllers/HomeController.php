<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slide;
use App\Model\Category;
use App\Model\Book;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController
{
    public function index(Request $request)
    {
        $slide = Slide::all();
        $category = Category::all();
        $book = Book::all();
        return view('page.index',compact('slide','category','book'));
    }
}
