<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Role;
//use App\Http\Requests;

class RoleController extends Controller
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
        $roles = Role::where('state', true)->get();
        return view('roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
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
            'description' => 'required|unique:roles',
        ],[
            'description.required' => 'El campo no puede estar vacío.'
        ]);

        if($validator->fails()){
            return redirect()->route('create_role')->withErrors($validator);
        }

        $role = new Role();
        $role->description = $request->description;
        $role->state = true;
        $role->save();

        return redirect()->route('index_roles')->withErrors('Ok');

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
        $role = Role::FindOrFail($id);
        return view('roles.edit', ['role' => $role]);
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
        $role = Role::FindOrFail($id);
        $role->description = $request->get('description');
        $role->save();

        return redirect()->route('index_roles')->withErrors('Rol actualizado.');
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
        $role = Role::FindOrFail($id);
        $role->state = false;
        $role->save();

        return redirect()->route('index_roles')->withErrors('Rol eliminado.');
    }
}
