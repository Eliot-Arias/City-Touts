<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Slider;
use Illuminate\Http\Request;

class imagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imagenes = Images::all();
        $sliders = Slider::where('status', '0')->get();
        return view('menus.inicio', ['imagenes' => $imagenes, 'sliders' => $sliders]);
    }

    public function paquetes()
    {
        $imagenes = Images::all();
        return view('menus.paquetes', ['imagenes' => $imagenes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.agregar-galeria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagen = new Images($request->all());
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $destinationPath = 'images/paquetes/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('img')->move($destinationPath, $filename);
            $imagen->img = $destinationPath . $filename;
            // dd($uploadSuccess); 

        } else {
            $imagen->img=null;
        }
        
        $imagen->save();
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
