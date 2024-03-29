@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Galeria</li>

</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>

            <div class="animated fadeIn">
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

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>MIS FONDOS</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        <div class="row">

                                            @if ($general->fondo != "")
                                                <div class="col-lg-2">
                                                    <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                        {{ csrf_field() }}
                                                        <input name="_method" type="hidden" value="PATCH">
                                                        <input type="hidden" name="fondo" value="{{$general->fondo}}">
                                                        <div class="card">
                                                            <img src="{{asset('recursos_fondo/'.$general->fondo)}}" style="width:100% !important">
                                                            <div class="card-body" style="background: #b6a888 !important; color: white !important">
                                                                <center><button type="submit" class="btn btn-primary">Seleccionado</button></center>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endif

                                            <div class="col-lg-2">
                                                <form action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="beige-1.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/beige-1.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="beige-2.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/beige-2.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="beige-3.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/beige-3.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="gris-1.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/gris-1.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="gris-2.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/gris-2.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="gris-3.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/gris-3.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="negro.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/negro.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="blanco.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/blanco.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
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