<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;

class PageController extends Controller
{
    public function index(){
        $pages=Page::orderBy('created_at','desc')->get();
        return view('back.pages.index',compact('pages'));
    }

    public function edit($id){
        $pages=Page::findOrFail($id);
        return view('back.pages.edit',compact('pages'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $pages=Page::findOrFail($id);
        $pages->title=$request->title;
        $pages->content=$request->content;
        $pages->slug=str_slug($request->title);

        if($request->hasFile('image')){
            $imageName=str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $pages->image='/uploads/'.$imageName;
        }
        $pages->save();
        toastr()->success($pages->title, 'GÜNCELLEME BAŞARILI');
        return redirect()->route('admin.page.index');
    }

    public function switch(Request $request){
        $article=Article::findOrFail($request->id);
        $article->status=$request->statu=="true" ? 1 : 0 ;
        $article->save();
    }
}
