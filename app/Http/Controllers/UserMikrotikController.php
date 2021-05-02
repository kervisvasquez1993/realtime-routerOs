<?php

namespace App\Http\Controllers;

use App\UserInfoMikrotik;
use App\UserMikrotik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMikrotikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userMikrotik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new UserMikrotik();
        $user->user_id = Auth::user()->id;
        $user->host = $request->host;
        $user->user_host = $request->user_host;
        $user->password = $request->password;
        $user->save();

        return redirect()->action('HomeController@index')->with('flash', 'Se Agrego Un nuevo usuario');
    }

   
    public function edit(UserMikrotik $usermikrotik)
    {   
        
        return view('userMikrotik.edit', compact('usermikrotik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserMikrotik  $userMikrotik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserMikrotik $usermikrotik)
    {
        
        
        $usermikrotik->user_id = Auth::user()->id;
        $usermikrotik->host = $request->host;
        $usermikrotik->user_host = $request->user_host;
        $usermikrotik->password = $request->password;
        $usermikrotik->save();
        return redirect()->action('HomeController@index')->with('flash', "Se Actualizo correctamente");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserMikrotik  $userMikrotik
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMikrotik $userMikrotik)
    {
        //
    }
}
