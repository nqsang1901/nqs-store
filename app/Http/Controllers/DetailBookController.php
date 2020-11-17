<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DetailBookController extends BaseController
{
    public function index($name = null,$id=null, Request $request)
    {
        $book = Book::find($id);
        $category = Category::all();
        return view('page.detail',compact('book','category'));
    }
}
