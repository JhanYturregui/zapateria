<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\UserType;

class UserTypesController extends Controller
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
        $types = UserType::where('state', true)->get();
        return view('user_types.index', ['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_types.create');
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
            'description' => 'required|unique:user_types',
        ],[
            'description.required' => 'El campo no puede estar vacío.'
        ]);

        if($validator->fails()){
            return redirect()->route('create_user_type')->withErrors($validator);
        }

        $type = new UserType();
        $type->description = $request->description;
        $type->state = true;
        $type->save();

        return redirect()->route('index_user_types')->withErrors('Tipo de usuario creado correctamente.');
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
        $type = UserType::FindOrFail($id);
        return view('user_types.edit', ['type' => $type]);
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
        $type = UserType::FindOrFail($id);
        $type->description = $request->get('description');
        $type->save();

        return redirect()->route('index_user_types')->withErrors('Tipo de usuario actualizado.');
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
        $type = UserType::FindOrFail($id);
        $type->state = false;
        $type->save();

        return redirect()->route('index_user_types')->withErrors('Tipo de usuario eliminado.');
    }
}
