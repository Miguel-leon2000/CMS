@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Sección dos</li>

</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>

            <div class="animated fadeIn">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{route('update.seccion_dos',$seccion_dos->id)}}" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="row">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if(Session::has('succes'))
                        <div class="col-lg-8">
                            <div class="alert alert-success alert-dismissible fade show mb-4 mt-4" role="alert">
                                {{Session::get('succes')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5>DATOS DE SECCIÓN DOS</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <input type="text" placeholder="Titulo de la sección uno" name="titulo"
                                                class="form-control" value="{{$seccion_dos->titulo}}">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <textarea name="descripcion"
                                                id="editor">{{$seccion_dos->descripcion}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>IMAGEN</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <input type="file" class="form-control" name="imagen">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <img src="{{asset('secciones/'.$seccion_dos->imagen)}}" style="width:100%">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" class="btn btn-success btn-block">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection