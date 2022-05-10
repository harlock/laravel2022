@extends('layouts.app')

@section("post_types")
  active
@endsection

@section("content")
  <!DOCTYPE html>
  <div class="row mx-5 justify-content-center">
    <div class="col-6">
      <div class="card">
        <div class="card-title mt-4">
            <h4 class="alert alert-primary text-center mx-4">Actualizar publicacion</h4>
        </div>
        <form method="POST" action="{{route("posts.update",$post->id)}}">
          @csrf
          @method('PUT')
          <div class="row mx-5 d-flex justify-content-center">
            <div class="col-10">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="newname" placeholder=".." name="name" value="{{$post->name}}">
                <label for="newname">Nuevo nombre</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="newcontent" placeholder=".." name="content" value="{{$post->content}}">
                <label for="newcontent">Nueva Descripcion</label>
              </div>
              {{--
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="newuserid" placeholder=".." name="user_id" value="{{$post->user_id}}">
                <label for="newuserid">Id del usuario</label>
              </div>
              --}}

              <div class="form-floating mb-3">
                <select class="form-control" id="post_id"  name="post_type_id">
                  <option value="">Selecciona un valor</option>
                  @foreach($type_posts as $post_type)

                    <option value="{{$post_type->id}}" {{$post_type->id==$post->post_type_id?"selected":""}}>
                      {{$post_type->description}}</option>

                    {{--
                    @if($post_type->id==$post->post_type_id)
                    <option value="{{$post_type->id}}" selected>{{$post_type->description}}</option>
                    @else
                      <option value="{{$post_type->id}}">{{$post_type->description}}</option>
                    @endif
                    --}}

                  @endforeach
                </select>
                <label for="post_id">Tipo de publicación</label>
              </div>
            </div>
          </div>
          <div class="row my-5 d-flex justify-content-center">
              <div class="col-3"></div>
              <div class="col-3">
                <a href="{{url("posts")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

              </div>
              <div class="col-3">
                <button class="btn btn-primary" type="submit" data-toggle="tooltip" title="Guardar cambios">Guardar</button>
              </div>
              <div class="col-3"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
