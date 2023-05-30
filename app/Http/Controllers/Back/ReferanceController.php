<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Referance;
use Validator;

class ReferanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $referances=Referance::orderBy('created_at','desc')->get();
        return view('back.referances.index',compact('referances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.referances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $referances = new Referance;
        $referances->title=$request->title;
        $referances->slug=str_slug($request->title);
        if($request->hasFile('image')){
            $imageName=str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $referances->image='/uploads/'.$imageName;
        }
        $referances->save();
        toastr()->success('Referans Başarılı Bir Şekilde Oluşturuldu', 'EKLEME BAŞARILI');
        return redirect()->route('admin.referans.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $referances = Referance::findOrFail($id);
        return view('back.referances.update',compact('referances'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $referances=Referance::findOrFail($id);
        $referances->title=$request->title;
        $referances->slug=str_slug($request->title);

        if($request->hasFile('image')){
            $imageName=str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $referances->image='/uploads/'.$imageName;
        }
        $referances->save();
        toastr()->success('Referans Başarılı Bir Şekilde Güncellendi', 'GÜNCELLEME BAŞARILI');
        return redirect()->route('admin.referans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $referances=Referance::findOrFail($request->id);
        if(File::exists($referances->image)){
            File::delete(public_path($sliders->image));
        }
        $referances->delete();
        toastr()->success('Silme İşlemi Başarılı');
        return redirect()->route('admin.referans.index');
    }
}
