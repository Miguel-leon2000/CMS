@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('index.blog')}}">Listado de blogs</a></li>
    <li class="breadcrumb-item active">Registro de entrada</li>

</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>

            <div class="animated fadeIn">
            <form method="POST" action="{{route('update.blog',$blog->id)}}" role="form"
                            enctype="multipart/form-data">
                <div class="row">

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

                    <div class="col-lg-9">
                        
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="card">
                                <div class="card-header">
                                    <h5><strong>REGISTRO DE ENTRADA</strong></h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        </div class="col-lg-12 form-group">
                                            <input type="text"
                                                class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}"
                                                style="margin-bottom:20px !important" placeholder="Titulo de entrada"
                                                name="titulo" value="{{$blog->titulo}}">
                                            @if ($errors->has('titulo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('titulo') }}</strong>
                                                </span>
                                            @endif
                                        <div>
                                        </div class="col-lg-12 form-group">
                                            <textarea name="contenido" id="editor">{{$blog->contenido}}</textarea>
                                            @if ($errors->has('titulo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('titulo') }}</strong>
                                                </span>
                                            @endif
                                        <div>
                                        
                                        </div class="col-lg-12 form-group" >
                                            <textarea name="excerpt" class="form-control" placeholder="Descripción corta" style="margin-top:30px; height:80px !important">{{$blog->excerpt}}</textarea>
                                            @if ($errors->has('excerpt'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('excerpt') }}</strong>
                                                </span>
                                            @endif
                                        <div>
                                        

                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                            <h5><strong>IMAGEN DE ENTRADA</strong></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    </div class="col-lg-12 form-group">
                                        <input type="file"
                                            class="form-control {{ $errors->has('imagen') ? ' is-invalid' : '' }}"
                                            style="margin-bottom:20px !important" name="imagen">
                                        @if ($errors->has('imagen'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('imagen') }}</strong>
                                            </span>
                                        @endif
                                        <img src="{{asset('blog/'.$blog->imagen)}}" style="width:100% !important">
                                    <div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endsection