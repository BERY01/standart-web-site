<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Article;
use App\Models\Slider;

class Dashboard extends Controller
{
    public function index(){
        $contacts=Contact::orderBy('created_at','desc')->get();
        $contact=Contact::orderBy('created_at','desc')->get()->take(1);
        $categories=Category::orderBy('created_at','asc')->get();
        $article=Article::orderBy('created_at','asc')->get();
        $sliders=Slider::orderBy('created_at','asc')->get();
        $hit=Article::sum('hit');
        return view('back.dashboard',compact('contacts','contact','categories','article','sliders','hit'));
    }
}
