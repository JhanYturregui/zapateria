<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Person;
use App\Role;

class PersonController extends Controller
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
        $people = Person::where('state', true)->get();
        return view('person.index', ['people' => $people, 'tab' => 'person', 'option' => 'indexPerson']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('state', true)->get();
        return view('person.create', ['roles' => $roles, 'tab' => 'person', 'option' => 'createPerson']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Data form
        $document_type = $request->get('document_type');
        $document_number = $request->get('document_number');
        $name = $request->get('name');
        $lastname = $request->get('lastname');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $cbUser = $request->get('Usuario');
        if($cbUser === null) { $cbUser = "";}
        $cbCustomer = $request->get('Cliente');
        if($cbCustomer === null) { $cbCustomer = "";}
        $cbProvider = $request->get('Proveedor');
        if($cbProvider === null) { $cbProvider = "";}
        $cbStaff = $request->get('Personal');
        if($cbStaff === null) { $cbStaff = "";}

        $validator = Validator::make($request->all(), [
            'document_type' => 'required',
            'document_number' => 'required|max:11|min:8|unique:person',
        ],[
            'document_type.required' => 'Debe seleccionar un tipo de documento.',
            'document_number.required' => 'El número de documento es obligatorio.',
            'document_number.unique' => 'Número de documento ya registrado.',
            'document_number.min' => 'El número de documento debe tener al menos 8 caracteres.',
            'document_number.max' => 'El número de documento debe tener máximo 11 caracteres.',
        ]);


        if($validator->fails()){
            return redirect()->route('create_person')->withErrors($validator);
        }

        $person = new Person();
        $person->document_type = $document_type;
        $person->document_number = $document_number;
        $person->name = $name;
        $person->lastname = $lastname;
        $person->email = $email;
        $person->phone = $phone;
        $person->address = $address;
        $person->user = $cbUser;
        $person->customer = $cbCustomer;
        $person->provider = $cbProvider;
        $person->staff = $cbStaff;
        $person->state = true;
        $person->save();

        return redirect()->route('index_person')->withErrors('Ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dni)
    {
        $person = Person::where([['state', true],['document_number', $dni]])->first()->toJson();
        print_r($person);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
