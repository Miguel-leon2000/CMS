@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Listado de entradas</li>

</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>

            <div class="animated fadeIn">
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

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>LISTADO DE ENTRADAS</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <a href="{{route('create.entrada')}}" type="button"
                                            class="btn btn-success">Registrar entrada</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="table table sm">
                                            <thead class="thead-dark">
                                                <th>Titulo</th>
                                                <th>Opciones</th>
                                            </thead>
                                            @foreach ($entradas as $item)
                                            <tbody>
                                                <td>
                                                    {{$item->titulo}}
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" data-toggle="modal" data-target="#modal-{{$item->id}}">Eliminar</a>
                                                            <a class="dropdown-item" href="{{route('edit.entrada',$item->id)}}">Editar</a>
                                                      
                                                        </div>
                                                        @include('admin.entrada.modal')
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