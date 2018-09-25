<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Size;

class SizeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::get();
        return view('sizes.index', ['sizes'=>$sizes, 'tab'=>'size', 'option'=>'indexSize']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sizes.create', ['tab'=>'size', 'option'=>'createSize']);
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
            'size' => 'required|unique:sizes',
        ],[
            'size.required' => 'El campo no puede estar vacío.',
            'size.unique' => 'Esta talla ya se encuentra registrada.'
        ]);

        if($validator->fails()){
            return redirect()->route('create_size')->withErrors($validator);
        }

        $size = new Size();
        $size->number = $request->size;
        $size->save();

        return redirect()->route('index_sizes')->withErrors('Talla registrada correctamente.');
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
        $size = Size::FindOrFail($id);
        return view('sizes.edit', ['size'=>$size]);
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
        $size = Size::FindOrFail($id);
        $size->number = $request->get('size');
        $size->save();

        return redirect()->route('index_sizes')->withErrors('Talla actualizada.');
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
        Size::destroy($id);

        //return redirect()->route('index_sizes')->withErrors('Talla eliminada.');
    }
}
