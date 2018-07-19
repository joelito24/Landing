@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <small>Estadisticas</small>
        </h1>
    </div>
</div>
<!-- /. ROW  -->

<div class="row">
    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
        {{--<p>Contactos que han contactado hoy</p>--}}
        {{--<table>--}}
            {{--@foreach($cant['contacts'] as $contact)--}}
                {{--<tr>--}}
                    {{--<td>{{ $contact->created_at }}</td>--}}
                    {{--<td><a href="{{ route('admin.contacts.edit', $contact->id) }}">{{ $contact->email }}</a></td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
        {{--</table>--}}
    {{--</div>--}}
    <div class="col-md-3 col-sm-12 col-xs-12">
        <a href="{{route('admin.services.index')}}" style="color:#FFF">
            <div class="panel panel-primary text-center no-boder" style="background: #00bde0;">
                <div class="panel-body">
                    <i class="fa fa-book fa-5x"></i>
                    <h3>{{$cant['services']}}</h3>
                </div>
                <div class="panel-footer back-footer-brown" style="background-color: #404040;">Servicios</div>
            </div>
        </a>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12">
        <a href="{{route('admin.projects.index')}}" style="color:#FFF">
            <div class="panel panel-primary text-center no-boder" style="background: #00bde0;">
                <div class="panel-body">
                    <i class="fa fa-star fa-5x"></i>
                    <h3>{{$cant['projects']}}</h3>
                </div>
                <div class="panel-footer back-footer-brown" style="background-color: #404040;">Proyectos</div>
            </div>
        </a>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12">
        <a href="{{route('admin.whitepapers.index')}}" style="color:#FFF">
            <div class="panel panel-primary text-center no-boder" style="background: #00bde0;">
                <div class="panel-body">
                    <i class="fa fa-file-o fa-5x"></i>
                    <h3>{{$cant['whitepapers']}}</h3>
                </div>
                <div class="panel-footer back-footer-brown" style="background-color: #404040;">White Papers</div>
            </div>
        </a>
    </div>
</div>

@stop
