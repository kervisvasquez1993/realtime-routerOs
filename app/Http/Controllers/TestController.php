<?php

namespace App\Http\Controllers;

use App\Test;
use RouterOS\Query;
use RouterOS\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client([
            'host'     => '192.168.10.1',
            'user'     => 'Kervis',
            'pass'     => 'Dynamics123',
            
        ]);
        /* ether1_FO_Cantv */
        // Execute export command via ssh, because API /export method has a bug
        $respuesta = $client->query('/interface/getall')->read();

        $respuestaJson = json_encode($respuesta);
        
        $data = $this->convert_from_latin1_to_utf8_recursively($respuesta);
        return ($data);
    }

    public  function convert_from_latin1_to_utf8_recursively($dat)
    {
       if (is_string($dat)) {
          return utf8_encode($dat);
       } elseif (is_array($dat)) {
          $ret = [];
          foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);
 
          return $ret;
       } elseif (is_object($dat)) {
          foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);
 
          return $dat;
       } else {
          return $dat;
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
