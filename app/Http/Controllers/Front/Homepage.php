<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Referance;
use App\Models\Config;
class Homepage extends Controller
{
    public function __construct(){
        if(Config::find(1)->active==0){
            return redirect()->to('site-bakimda')->send();
        }
        view()->share('categories',Category::inRandomOrder()->get());
    }


    public function index(){
        //tarihe göre sırala
        $data['articles']=Article::where('status',1)->orderBy('created_at','desc')->simplePaginate(8);
        $data['articles']->withPath(url('hizmetler/sayfa'));
        $data['pages']=Page::orderBy('order','ASC')->get();
        $data['sliders']=Slider::orderBy('created_at','asc')->get();
        $data['referances']=Referance::orderBy('created_at','desc')->get();
        return view('front.home', $data);
    }

    public function single($category,$slug){
        $category=Category::whereSlug($category)->first() ?? abort(403,'Böyle bir kaynak bulunmamaktadır');
        $article=Article::where('status',1)->whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403,'Böyle bir kaynak bulunmamaktadır');
        $article->increment('hit');
        $data['article']=$article;
        return view('front.single',$data);
    }

    public function category($slug){
        $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kaynak bulunmamaktadır');
        $data['category']=$category;
        $data['articles']=Article::where('status',1)->where('category_id',$category->id)->get();
        return view('front.category',$data);
    }

    public function contact(){
        return view('front.contact');
    }

    public function contactpost(Request $request){
        $rules=[
            'name'=>'required|min:5',
            'email'=>'required|email',
            'topic'=>'required',
            'messages'=>'required|min:10'
        ];
        $validate = Validator::make($request->post(),$rules);
        if ($validate->fails()) {
            return redirect()->route('contact')->withErrors($validate)->withInput();
        }

        $contact = new Contact;
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->topic=$request->topic;
        $contact->messages=$request->messages;
        $contact->save();
        return redirect()->route('contact')->with('Başarılı','Mesajınız başarılı bir şekilde iletildi. En kısa süre içerisinde dönüş yapılacaktır.');
    }
}
