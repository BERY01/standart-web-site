<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Article;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::orderBy('created_at','DESC')->get();
        return view('back.categories.index',compact('categories'));
    }

    public function create(Request $request){
        $isExist=Category::whereSlug(str_slug($request->category))->first();
        if($isExist){
            toastr()->error($request->category.' adında bir kategori zaten var!');
            return redirect()->back();
        }
        $category = new Category;
        $category->name=$request->category;
        $category->slug=str_slug($request->category);
        $category->save();
        toastr()->success('Kategori Oluşturuldu');
        return redirect()->route('admin.category.index');
    }

    public function update(Request $request){
        $isSlug=Category::whereSlug(str_slug($request->slug))->whereNotIn('id',[$request->id])->first();
        $isName=Category::whereName($request->category)->whereNotIn('id',[$request->id])->first();
        if($isSlug or $isName){
            toastr()->error($request->category.' adında bir kategori zaten var!');
            return redirect()->back();
        }
        $category = Category::find($request->id);
        $category->name=$request->category;
        $category->slug=str_slug($request->category);
        $category->save();
        toastr()->success('Kategori Güncellendi');
        return redirect()->back();
    }

    public function delete(Request $request){
        $category=Category::findOrFail($request->id);
        $count=$category->articleCount();
        if($count>0){
            $article=Article::where('category_id',$category->id)->forceDelete();
        }
        $category->delete();
        toastr()->success('Kategori Silindi','Başarılı');
        return redirect()->back();
    }

    public function getdata(Request $request){
        $category=Category::findOrFail($request->id);
        return response()->json($category);
    }

    public function switch(Request $request){
        $category=Category::findOrFail($request->id);
        $category->status=$request->statu=="true" ? 1 : 0;
        $category->save();
    }

}
