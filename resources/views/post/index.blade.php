@extends('layouts.app')
@section("tipos_post")
  active
  @endsection

  @section('content')


        <h1 class="h1 alert alert-primary text-center">Tipos de Publicaciones</h1>

        <div class="row g-5 d-flex justify-content-center">
                      <div class="col-5">
                            <figure class="figure">
                              <img src="{{asset("/images/acuerdo.svg")}}" alt="ethe" class="figure-img img-fluid" style="width:200%">
                            </figure>
                      </div>
                     <div class="col-7">
                       <a href="{{url("tipos_post/create")}}" class="btn btn-dark mb-4 text-white" data-toggle="tooltip" title="Insertar nueva publicacion"><span class="icon-pen"> Nuevo</span></a>
                        <table class="table card text-center" style="background: #e1e1e8">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class=" justify-content-center text-center">Publicacion</th>
                            <th scope="col" class=" justify-content-center text-center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datos as $post)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$post->description}}</td>
                            <td><a href="{{route("tipos_post.edit",$post->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar esta publicacion"><span class="icon-compose">Editar</span></a></td>
                            <td><form action="{{route("tipos_post.destroy",$post->id)}}" method="post">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger btn-sm" type="submit"data-toggle="tooltip" title="Eliminar esta publicacion"><span class="icon-bin">Eliminar</span></button>
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
