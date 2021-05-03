@extends('layouts.app')

@section('content')
<div class="container">
@php
    $vars =   (array) json_decode($arrayTest); 
@endphp
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $vars['name'] }}</div>                        
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> rx-byte: </span> 
                                {{$vars['rx-byte']}} 
                            </h5>

                        </div>                        
                    </li>       
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> tx-byte: </span> 
                                {{$vars['tx-byte']}} 
                            </h5>
                            
                        </div>                        
                    </li>     
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> rx-packet : </span> 
                                {{$vars['rx-packet']}} 
                            </h5>
                            
                        </div>                        
                    </li>   
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> tx-packet : </span> 
                                {{$vars['tx-packet']}} 
                            </h5>
                            
                        </div>                        
                    </li> 
                    
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> tx-queue-drop : </span> 
                                {{$vars['tx-queue-drop']}} 
                            </h5>
                            
                        </div>                        
                    </li> 
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> fp-rx-byte : </span> 
                                {{$vars['fp-rx-byte']}} 
                            </h5>
                            
                        </div>                        
                    </li> 
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> fp-tx-byte : </span> 
                                {{$vars['fp-tx-byte']}} 
                            </h5>
                            
                        </div>                        
                    </li> 

                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> fp-rx-packet : </span> 
                                {{$vars['fp-rx-packet']}} 
                            </h5>
                            
                        </div>                        
                    </li> 
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> fp-tx-packet : </span> 
                                {{$vars['fp-tx-packet']}} 
                            </h5>
                            
                        </div>                        
                    </li> 

                    
                    
                    
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
