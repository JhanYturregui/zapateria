<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Line;

class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = Line::get();
        return view('lines.index', ['lines'=>$lines, 'tab'=>'line', 'option'=>'indexLine']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lines.create', ['tab'=>'line', 'option'=>'createLine']);
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
            'name' => 'required|unique:lines',
        ],[
            'name.required' => 'El campo no puede estar vacío.',
            'name.unique' => 'Esta línea ya se encuentra registrada.'
        ]);

        if($validator->fails()){
            return redirect()->route('create_line')->withErrors($validator);
        }

        $line = new Line();
        $line->name = $request->name;
        $line->save();

        return redirect()->route('index_lines')->withErrors(['Línea registrada correctamente.']);
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
        $line = Line::FindOrFail($id);
        return view('lines.edit', ['line'=>$line]);
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
        $line = Line::FindOrFail($id);
        $line->name = $request->get('name');
        $line->save();

        return redirect()->route('index_lines')->withErrors('Línea actualizada.');
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
        Line::destroy($id);
    }
}
