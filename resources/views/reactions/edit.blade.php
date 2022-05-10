@extends('layouts.app')

@section('reaction_type')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-body ">
                    <h5 class="card-title alert alert-success">Modificar reacción</h5>
                    <form method="POST" action="{{route("tipos_reacciones.update",$tipos_reaccione->id)}}">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="reaction" class="form-label">Reacción</label>
                            <input type="text" class="form-control" id="reaction" name="description" value="{{$tipos_reaccione->description}}">
                        </div>
                        <div class="row ">
                            <div class="col">
                                <a href="{{url("tipos_reacciones")}}" class="btn btn-danger card-link">Cancelar</a>
                                <button type="submit" class="btn btn-primary card-link">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection