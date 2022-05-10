@extends('layouts.app')

@section("post_types")
  active
@endsection

@section("content")
  <div class="row mx-5 justify-content-center">
    <div class="col-6">
      <div class="card">
        <div class="card-title mt-4">
            <h4 class="alert alert-primary text-center mx-4">Cargar nueva publicacion</h4>
        </div>
        <form method="POST" action="{{url("posts")}}">
          @csrf
          <div class="row mx-5 d-flex justify-content-center">
            <div class="col-10">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" placeholder=".." name="name">
                <label for="nombre">Nombre</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" id="contenido" placeholder=".." name="content" rows="10">
                </textarea>
                <label for="contenido">Contenido</label>
              </div>
             {{--
             <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="user_id" placeholder=".." name="user_id">
                    <label for="user_id">Id del usuario</label>
                  </div>
             --}}
              <div class="form-floating mb-3">
                <select class="form-control" id="post_id"  name="post_type_id">
                  <option value="">Selecciona un valor</option>
                  @foreach($type_posts as $post_type)
                    <option value="{{$post_type->id}}">{{$post_type->description}}</option>
                  @endforeach
                </select>
                <label for="post_id">Tipo de publicación</label>
              </div>
            </div>
          </div>
          <div class="row my-5 d-flex justify-content-center">
              <div class="col-3"></div>
              <div class="col-3">
                <a href="{{url("posts")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>

              </div>
              <div class="col-3">
                <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
              </div>
              <div class="col-3"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
