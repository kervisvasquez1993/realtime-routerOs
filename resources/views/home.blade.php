@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h5 class="py-3 px-2">Información En tiempo Real de la interfaz <span id="interfazName"></span></h5>
            <div class="card">
                <div class="card-header"></div>                        
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                           <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> rx-byte: <p id="rxByte"></p></span> 
                               
                            </h5>
    
                           </div>                        
                        </li>       
                        <li class="list-group-item d-flex justify-content-between">
                             <div>
                                <h5 class="d-flex justify-content-between">
                                    <span class="font-weight-bold"> tx-byte: <p id="txByte"></p> </span> 
                                </h5>    
                             </div>                        
                        </li>     
                       <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <h5 class="d-flex justify-content-between">
                                    <span class="font-weight-bold"> rx-packet : <p id="rxPacket"></p></span>   
                                </h5>
                            </div>                        
                       </li>   
                       <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <h5 class="d-flex justify-content-between">
                                    <span class="font-weight-bold"> tx-packet : <p id="txPacket"></p></span>   
                                </h5>                            
                            </div>                        
                       </li> 
                       
                       <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> tx-queue-drop : <p id="txQqueueDrop"></p> </span>  
                            </h5>
                        </div>                        
                       </li> 
                       <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> fp-rx-byte : <p id="fpRxByte"></p> </span>   
                            </h5>
                        </div>                        
                       </li> 
                       <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> fp-tx-byte : <p id=""></p> </span> 
                               
                            </h5>
                            
                        </div>                        
                       </li> 
       
                       <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> fp-rx-packet : <p id="fpRxPacket"></p> </span> 
                               
                                
                            </h5>
                            
                        </div>                        
                       </li> 
                       <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h5 class="d-flex justify-content-between">
                                <span class="font-weight-bold"> fp-tx-packet : <p id=""></p> </span>     
                            </h5>
                            
                        </div>                        
                       </li>     
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Unefa</h4>
                    <a href="{{route('usermikrotiks.create')}}" class="btn btn-sm btn-secondary">Agregar Nuevo Usuario Mikrotik</a>
                </div>
                <div class="card-body">
                    @if (session('flash'))
                        <div class="alert alert-success" role="alert">
                            {{ session('flash') }}
                        </div>
                    @endif
                    <ul class="list-group list-group-flush">
                    @foreach($user_routes as $user_route)
                     <li class="list-group-item d-flex justify-content-between">
                         <div>
                             <div><span class="font-weight-bold"> Host: </span> {{$user_route->host}}</div>
                             <div><span class="font-weight-bold">Usuario Host: </span> {{$user_route->user_host}}</div>
                         </div>
                         <div>
                            <a href="{{route('infoMikrotiks.index', ['id' => $user_route->id ])}}" class="btn btn-sm btn-success">Ver Información</a>
                            <a href="{{route('usermikrotiks.edit', [ 'usermikrotik' => $user_route->id])}}" class="btn btn-sm btn-warning">Editar</a>
                            <a href="{{route('usermikrotiks.edit', [ 'usermikrotik' => $user_route->id])}}" class="btn btn-sm btn-danger">Eliminar</a>
                            
                        </div>
                         
                     </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
          
   </div>
</div>


@endsection

@push('scripts')
    <script>
        let nombrePuerto   = document.getElementById('interfazName'),
            defaultName    = document.getElementById('defaultName'),
            fpRxByte       = document.getElementById('fpRxByte'),/*  */
            fpRxPacket     = document.getElementById('fpRxPacket'), /*  */
            fpTxByte       = document.getElementById('fpTxByte'),
            fpTxPacket     = document.getElementById('fpTxPacket'),
            lastLinkUpTime = document.getElementById('lastLinkUpTime'),
            macAddress     = document.getElementById('macAddress'),
            rxByte         = document.getElementById('rxByte'), /*  */
            rxPacket       = document.getElementById('rxPacket'),/*  */
            txByte         = document.getElementById('txByte'), /*  */
            txPacket       = document.getElementById('txPacket'), /*  */
            type           = document.getElementById('type'),
            txQqueueDrop   = document.getElementById('txQqueueDrop') /*  */








          Echo.channel('routerApi')
         .listen('RouterOs', (e) => {
            
              
            

            

           
        })
      
</script>
    
@endpush
