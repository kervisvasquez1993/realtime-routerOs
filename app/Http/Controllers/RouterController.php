<?php

namespace App\Http\Controllers;

use App\Router;
use Illuminate\Http\Request;

class RouterController extends Controller
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
     * @param  \App\Router  $router
     * @return \Illuminate\Http\Response
     */
    public function show(Router $router)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Router  $router
     * @return \Illuminate\Http\Response
     */
    public function edit(Router $router)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Router  $router
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Router $router)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Router  $router
     * @return \Illuminate\Http\Response
     */
    public function destroy(Router $router)
    {
        //
    }

    public function pruebaIfo()
    {
        $info = Array( 

                      [0] => Array 
                       ( 
                               [id] => "*5", 
                               [name] => "ether1_FO_Cantv",  
                               ["default-name"] => "ether1",  
                               [type] => "ether",
                               [mtu] => "1500",
                               [actual-mtu] => "1500",  
                               [l2mtu] => "1580" ,
                               [max-l2mtu] => "10222", 
                               [mac-address] => "C4:AD:34:E0:2E:C8" ,
                               [last-link-down-time] => "feb/27/1970 02:07:13" , 
                               [last_link_up_time] => "feb/27/1970 02:23:01" , 
                               [link-downs] => 1 ,
                               [rx-byte] => 485210928364,
                               [tx-byte] => 949454410008 ,
                               [rx-packet] => 4589517867,
                               [tx-packet] => 2816571101,
                               [rx-drop] => 0, 
                               [tx-drop] => 0, 
                               [tx-queue-drop] => 2356996,
                               [rx-error] => 0 ,
                               [tx-error] => 0 ,
                               [fp-rx-byte] => 4852109283649, 
                               [fp-tx-byte] => 949454410008 ,
                               [fp-rx-packet] => 4589517867 ,
                               [fp-tx-packet] => 2816571101 ,
                               [running] => true ,
                               [disabled] => false , 
                                 [comment] => ":::Interfaz para FO CANTV port 4"
                       ),   
                       
                       [0] => Array 
                       ( 
                               [id] => "*5", 
                               [name] => "ether1_FO_Cantv",  
                               ["default-name"] => "ether1",  
                               [type] => "ether",
                               [mtu] => "1500",
                               [actual-mtu] => "1500",  
                               [l2mtu] => "1580" ,
                               [max-l2mtu] => "10222", 
                               [mac-address] => "C4:AD:34:E0:2E:C8" ,
                               [last-link-down-time] => "feb/27/1970 02:07:13" , 
                               [last_link_up_time] => "feb/27/1970 02:23:01" , 
                               [link-downs] => 1 ,
                               [rx-byte] => 485210928364,
                               [tx-byte] => 949454410008 ,
                               [rx-packet] => 4589517867,
                               [tx-packet] => 2816571101,
                               [rx-drop] => 0, 
                               [tx-drop] => 0, 
                               [tx-queue-drop] => 2356996,
                               [rx-error] => 0 ,
                               [tx-error] => 0 ,
                               [fp-rx-byte] => 4852109283649, 
                               [fp-tx-byte] => 949454410008 ,
                               [fp-rx-packet] => 4589517867 ,
                               [fp-tx-packet] => 2816571101 ,
                               [running] => true ,
                               [disabled] => false , 
                                 [comment] => ":::Interfaz para FO CANTV port 4"
                       ),   
        ) ;           
                       );
                    
    }
}
