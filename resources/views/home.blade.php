@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
