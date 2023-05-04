<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sliders = Slider::all();
        // return view('menus.inicio', ['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.agregar-slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider = new Slider($request->all());
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $destinationPath = 'images/slider/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('img')->move($destinationPath, $filename);
            $slider->img = $destinationPath . $filename;
            // dd($uploadSuccess); 

        } else {
            $slider->img = null;
        }

        $slider->save();
        return redirect()->action([imagesController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
