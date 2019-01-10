<?php
namespace Sanjeevscet\Blog;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class BlogController extends Controller
{

    public function index($timezone = NULL)
    {
       $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('blog::time', compact('current_time'));
    }

}