<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::where('state', true)->get();
        return view ('brands.index', ['brands'=>$brands, 'tab'=>'brand', 'option'=>'indexBrand']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create', ['tab'=>'brand', 'option'=>'createBrand']);
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
            'name' => 'required|unique:brands',
        ],[
            'name.required' => 'El campo no puede estar vacío.',
            'name.unique' => 'Esta marca ya se encuentra registrada.'
        ]);

        if($validator->fails()){
            return redirect()->route('create_brand')->withErrors($validator);
        }

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->state = true;
        $brand->save();

        return redirect()->route('index_brands')->withErrors('Marca registrada correctamente.');
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
        $brand = Brand::FindOrFail($id);
        return view('brands.edit', ['brand'=>$brand]);
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
        $brand = Brand::FindOrFail($id);
        $brand->name = $request->get('name');
        $brand->save();

        return redirect()->route('index_brands')->withErrors('Marca actualizada.');
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
        $brand = Brand::FindOrFail($id);
        $brand->state = false;
        $brand->save();

        return redirect()->route('index_brands')->withErrors('Marca eliminada.');
    }
}
