@extends('layouts.app')

@section('reaction_type')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-body ">
                    <h5 class="card-title alert alert-success">Agregar reacción</h5>
                    <form method="POST" action="{{route("tipos_reacciones.store")}}">
                        @csrf
                        <div id="content_description" class="mb-3" data-bs-toggle="tooltip" title="Campo Obligatorio">
                            <label for="reaction" class="form-label">Reacción</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                   id="reaction" name="description" value="{{ old('description') }}">
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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