<?php

namespace Cinema\Http\Controllers;
use Cinema\User;
use Redirect;
use Session;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['create', 'edit', 'show']]);
    }
    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view ('usuario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("usuario.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

     Session::flash('message',' Usuario Creado correctamente');
     return Redirect::to('/usuario/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $users = User::paginate(2);
        if($request->ajax()){
            return response()->json(view('usuario.users', compact('users'))->render());
        }
        return view('usuario.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.editar',[ 'user' => $user ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
     $user = User::find($id);
     $user->fill($request->all());
     $user->save();

     Session::flash('message',' Usuario actualizado correctamente');
     return Redirect::to('/usuario');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('message',' Usuario Eliminado correctamente');
        return Redirect::to('/usuario');
    }
}

