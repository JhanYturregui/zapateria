<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Model;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Model::get();
        return view('models.index', ['models'=>$models, 'tab'=>'model', 'option'=>'indexModel']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('models.create', ['tab'=>'model', 'option'=>'createModel']);
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
            'name' => 'required|unique:models',
        ],[
            'name.required' => 'El campo no puede estar vacío.',
            'name.unique' => 'Este modelo ya se encuentra registrado.'
        ]);

        if($validator->fails()){
            return redirect()->route('create_model')->withErrors($validator);
        }

        $model = new Model();
        $model->name = $request->name;
        $model->save();

        return redirect()->route('index_models')->withErrors(['Modelo registrado correctamente.']);
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
        $model = Model::FindOrFail($id);
        return view('models.edit', ['model'=>$model]);
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
        $model = Model::FindOrFail($id);
        $model->name = $request->get('name');
        $model->save();

        return redirect()->route('index_models')->withErrors('Modelo actualizado.');
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
        Model::destroy($id);
        //return redirect()->route('index_models')->withErrors('Modelo eliminado.');
    }
}
