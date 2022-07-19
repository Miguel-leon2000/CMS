@extends('layouts.admin')
@section('contenido')
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Listado de plantillas</li>
                
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
                                                    <a href="{{route('create.pagina')}}" class="btn btn-primary">Registrar página</a>
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
                                                                <td>{{$item->dominio}}</td>
                                                                <td>
                                                                    @if ($item->estado == 'activo')
                                                                        <span class="badge badge-success" style="width:40%; height:20px; font-size:12px">{{$item->estado}}</span>
                                                                    @else
                                                                        <span class="badge badge-danger" style="width:40%; height:20px; font-size:12px">{{$item->estado}}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Opciones
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#modal-{{$item->id}}">Eliminar</a>
                                                                            <a class="dropdown-item" href="{{URL::action('PlantillaController@edit', $item->id)}}">Editar</a>
                                
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