@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('RouterOs ')}}</div>
                
                    @php
                        $vars = json_decode( $clientes );    
                        $puerto = 0;
                        
                        foreach ($vars as $valor) {    
                            $ruta = route('infoMikrotiks.show', ['id' => $id, 'interfaz' => $puerto]);                        
                            echo "<li class='list-group-item d-flex justify-content-between'>
                                <div>
                                    <div><span class='font-weight-bold'> Interfaz: </span> $valor->name</div>
                                    
                                </div>
                                <div>
                                   <a href='$ruta' class='btn btn-sm btn-success'>Ver Información</a>
                                </div>
                            </li>";
                            
                            $puerto++;
                            
                            
                          
                        }
                    @endphp
                  
                        

                    
                            
                
                <div class="card-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
