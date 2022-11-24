@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Listado de páginas</li>

</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>

            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-8">
                        @if(Session::has('succes'))
                        <div class="alert alert-success alert-dismissible fade show mb-4 mt-4" role="alert">
                            {{Session::get('succes')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4>MIS PÁGINAS</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <a href="{{route('create.pagina')}}" class="btn btn-primary"><i
                                                class="fa fa-globe"></i> Registrar página</a>
                                        <a data-toggle="modal" data-target="#open-selector" class="btn btn-warning"
                                            style="color:white !important"><i class="fa fa-edit"></i> Página de
                                            edición</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="open-selector" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <form action="{{route('current_page', auth()->user()->id)}}" method="POST">

                                                {{ csrf_field() }}

                                                <input name="_method" type="hidden" value="PATCH">

                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                                SELECCIONAR PÁGINA DE EDICIÓN
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                @if (!auth()->user()->current_page)
                                                                <div class="col-lg-12">
                                                                    <div class="alert alert-danger" role="alert">
                                                                        No tiene asignada una página de edición!
                                                                    </div>
                                                                </div>

                                                                @endif

                                                                <div class="col-lg-12">
                                                                    <select name="current_page" class="form-control">
                                                                        @foreach ($data_paginas as $item)
                                                                        @if ($item->id == auth()->user()->current_page)
                                                                        <option selected value="{{$item->id}}">
                                                                            {{$item->dominio}}</option>
                                                                        @else
                                                                        <option value="{{$item->id}}">{{$item->dominio}}
                                                                        </option>
                                                                        @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-success">Seleccionar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="table table-sm">
                                            <thead class="thead-dark">
                                                <th>Dominio</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                            </thead>
                                            @foreach ($data_paginas as $item)
                                            <tbody>
                                                <td><a target="_blanck" href="https://www.{{$item->dominio}}">{{$item->dominio}}</a></td>
                                                <td>
                                                    @if ($item->estado == 'activo')
                                                    <span class="badge badge-success"
                                                        style="width:40%; height:20px; font-size:12px">{{$item->estado}}</span>
                                                    @else
                                                    <span class="badge badge-danger"
                                                        style="width:40%; height:20px; font-size:12px">{{$item->estado}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="icon-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" data-toggle="modal"
                                                                data-target="#modal-delete-{{$item->id}}"><i
                                                                    class="fa fa-minus-circle"></i> Eliminar</a>
                                                            <a class="dropdown-item" data-toggle="modal"
                                                                data-target="#open-{{$item->id}}"><i
                                                                    class="fa fa-text-width"></i> Cambiar dominio</a>
                                                            <a class="dropdown-item" href="{{route('change_theme')}}"><i
                                                                    class="fa fa-thumbtack"></i> Cambiar plantilla</a>
                                                            <a target="_blank" class="dropdown-item"
                                                                href="http://127.0.0.1:8000/{{$item->dominio}}"><i
                                                                    class="fa fa-thumbtack"></i> Ir a página</a>
                                                        </div>
                                                        @include('admin.pagina.modal')

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="open-{{$item->id}}" tabindex="-1"
                                                            role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                            aria-hidden="true">
                                                            <form method="POST"
                                                                action="{{route('update.pagina',$item->id)}}">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalCenterTitle">Cambiar
                                                                                dominio</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            {{ csrf_field() }}
                                                                            <input name="_method" type="hidden"
                                                                                value="PATCH">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <input type="text"
                                                                                        class="form-control {{ $errors->has('dominio') ? ' is-invalid' : '' }}"
                                                                                        name="dominio"
                                                                                        placeholder="Dominio de tu web"
                                                                                        value="{{$item->dominio}}">
                                                                                    @if ($errors->has('dominio'))
                                                                                    <span class="invalid-feedback"
                                                                                        role="alert">
                                                                                        <strong>{{ $errors->first('dominio') }}</strong>
                                                                                    </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Cerrar</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Guardar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection