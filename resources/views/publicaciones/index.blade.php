@extends('layouts.app')
@section("reaction_type")
  active
  @endsection

  @section('content')

  <!DOCTYPE html>

      <div class="container">
        <h1 class="h1 alert alert-primary text-center">Publicaciones</h1>

        <div class="row g-5 d-flex justify-content-center">
                      <div class="col-3">
                            <figure class="figure">
                              <img src="{{asset("/images/noche.svg")}}" alt="ethe" class="figure-img img-fluid" style="width:200%">
                            </figure>
                      </div>
                     <div class="col-8">
                       <a href="{{url("posts/create")}}" class="btn btn-dark mb-4 text-white"data-toggle="tooltip" title="Insertar nueva reaccion"><span class="icon-pen"> Nuevo</span></a>
                        <table class="table card" style="background: #e1e1e8">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class=" justify-content-center text-center">Nombre</th>
                            <th scope="col" class=" justify-content-center text-center">Contenido</th>
                            <th scope="col" class=" justify-content-center text-center">Id del usuario</th>
                            <th scope="col" class=" justify-content-center text-center">Id del tipo de post</th>
                            <th scope="col" class=" justify-content-center text-center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datos as $posts)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$posts->name}}</td>
                            <td>{{$posts->content}}</td>
                            <td>{{$posts->user}}</td>
                            <td>{{$posts->description}}</td>
                            <td><a href="{{route("posts.edit",$posts->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar reaccion"><span class="icon-compose">Editar</span></a></td>
                            <td><form action="{{route("posts.destroy",$posts->id)}}" method="post">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta reaccion"><span class="icon-bin">Eliminar</span></button>
                            </form></td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                     </div>
                     <div class="col">
                       <div class="row">
                       </div>
                     </div>
                   </div>
      </div>


  @endsection
