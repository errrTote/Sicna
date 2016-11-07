<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use Laracasts\Flash\Flash;
use App\Http\Controllers\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        
        $users = User::search($request->name)->orderBy('id', 'ASC')->paginate(5);
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
       $user = new User($request->all());
       if(preg_match('/(?=[a-z])/', $user->password)){
            if(preg_match('/(?=[A-Z])/', $user->password)){            
                if(preg_match('/(?=[0-9])/',$user->password)){
                    if($user->password == $request->password_b){   
                        if($request->file('img')){                            
                            $file = $request->file('img');
                            $name = 'perfil-' . $request->name . '.' . $file->getClientOriginalExtension();
                            $path = 'img/perfiles/';
                            $file->move($path, $name);
                            $user->password=bcrypt($request->password);
                            $user->save();
                        }

                       Flash::info('Registro completo');

                       return redirect()->route('users.index');

                     }else echo "<script>alert('Las contrase\u00f1as deben coincidir.'); window.history.back();</script>";                       
                }else echo "<script>alert('La contrase\u00f1a deben tener al menos un numero.'); window.history.back();</script>";
            }else echo "<script>alert('La contrase\u00f1a deben tener al menos una letra en mayuscula.'); window.history.back();</script>";
        }else echo "<script>alert('La contrase\u00f1a deben tener al menos una letra en minuscula.'); window.history.back();</script>";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('aqui se muestra ',$id);
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
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
       
        if($request->passwordAdmin!=""){                             
           
            $passwordAdmin=$request->passwordAdmin;
            //$passwordUser=$request->password;
            $user = User::find($id);            
        
            if (password_verify($passwordAdmin, \Auth::user()->password)) {
                $user->fill($request->all());                
                $user->save();

                Flash::success('Usuario '.$user->user.' Modificado' );

                return redirect()->route('users.index');
            }else Flash::error('Contraseña incorrecta'); return back();
            //}else echo "<script> alert('Contrase\u00f1a incorrecta'); window.history.back();</script>";
                      
        }else echo "<script> alert('Debe introducir su contrase\u00f1a para guardar los cambios '); window.history.back();</script>";
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
