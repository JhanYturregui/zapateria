<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::get();
        return view('colors.index', ['colors'=>$colors, 'tab'=>'color', 'option'=>'indexColor']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colors.create', ['tab'=>'color', 'option'=>'createColor']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:colors',
        ],[
            'name.required' => 'El campo no puede estar vacío.',
            'name.unique' => 'Este color ya se encuentra registrado.'
        ]);

        if($validator->fails()){
            return redirect()->route('create_color')->withErrors($validator);
        }

        $color = new Color();
        $color->name = $request->name;
        $color->save();

        return redirect()->route('index_colors')->withErrors(['Color registrado correctamente.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = Color::FindOrFail($id);
        return view('colors.edit', ['color'=>$color]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $color = Color::FindOrFail($id);
        $color->name = $request->get('name');
        $color->save();

        return redirect()->route('index_colors')->withErrors('Color actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        Color::destroy($id);

        //return redirect()->route('index_colors')->withErrors('Color eliminado.');
    }
}
