<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders=Slider::orderBy('created_at','asc')->get();
        return view('back.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $random = str_random(3).substr(time(), 6,8).str_random(3);

        $sliders = new Slider;

        if($request->hasFile('image')){
            $imageName='slider'.$random.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $sliders->image='/uploads/'.$imageName;
        }
        $sliders->save();
        toastr()->success('Slider Başarılı Bir Şekilde Oluşturuldu', 'EKLEME BAŞARILI');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('admin.slider.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sliders=Slider::findOrFail($id);
        return view('back.sliders.update',compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image'=>'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $random = str_random(3).substr(time(), 6,8).str_random(3);
        $sliders=Slider::findOrFail($id);

        if($request->hasFile('image')){
            $imageName='slider'.$random.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $sliders->image='/uploads/'.$imageName;
        }
        $sliders->save();
        toastr()->success('Slider Başarılı Bir Şekilde Güncellendi', 'GÜNCELLEME BAŞARILI');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $sliders=Slider::findOrFail($request->id);
        if(File::exists($sliders->image)){
            File::delete(public_path($sliders->image));
        }
        $sliders->delete();
        toastr()->success('Silme İşlemi Başarılı');
        return redirect()->route('admin.slider.index');
    }
}
