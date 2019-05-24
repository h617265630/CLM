<?php

namespace App\Http\Controllers\Home;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function imageGallery(){
        return view('home.imageGallery');
    }
    public function articleArchive(){
        return view("home.articleArchive");
    }
    public function videoCenter(){
        return view('home.videoCenter');
    }
}
