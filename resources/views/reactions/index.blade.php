@extends('layouts.app')

@section("reaction_type")
    active
@endsection

@section('content')
    <h1 class="h1 alert alert-primary">Reacciones</h1>
    <div class="row mt-5">
        <div class="col">
            <a href="{{url("tipos_reacciones/create")}}" class="btn btn-success" >Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-8 offset-2">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Reacción</th>
                    <th scope="col">Acciones</th>

                </tr>
                </thead>
                <tbody>
                @foreach($datos as $reaction)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$reaction->description}}</td>
                        <td>
                            <a href="{{route("tipos_reacciones.edit",$reaction->id)}}" class="btn btn-primary">Modificar</a>
                            <form method="POST" action="{{route("tipos_reacciones.destroy",$reaction->id)}}">
                                @csrf
                                @method("DELETE")
                               <button type="submit" class="btn btn-danger">
                                   Eliminar
                               </button>
                            </form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection