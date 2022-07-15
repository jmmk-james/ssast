@extends('admin.plantillas.admin')

@section('label1')
<div class="vg-page page-about" id="about">
    <!-- Profile -->
    <div class="container py-3">
      <div class="row">
        <div class="col-md-6">
            <img src="{{asset('assets/img/stumsa.jpg')}}" alt="Photo Profile">
        </div>
        <div class="col-md-6">
            <h2 class="fg-dark">{{$titulo}}</h2>
            <p class="fg-theme fw-medium">Sindicato de Trabajadores de la Umsa</p>
            <p>Sistema de Sorteo Aleatorio</p>
            <ul class="theme-list">
                <li class="fg-dark"><b><a href="{{route('formularioPersona')}}" class="fg-theme fw-medium">Registrar Item</a></li>
                <li class="fg-dark"><b><a href="{{route('listaPersona')}}" class="fg-theme fw-medium">Listrar Item</a></li>
            </ul>
            <ul class="theme-list">
                <li class="fg-dark"><b><a href="{{route('formularioPremio')}}" class="fg-theme fw-medium">Registrar Premios</a></li>
                <li class="fg-dark"><b><a href="{{route('listaPremio')}}" class="fg-theme fw-medium">Listar Premios</a></li>
            </ul>
            <ul class="theme-list">                
                <li class="fg-dark"><b><a href="{{route('exit')}}" class="fg-theme fw-medium">Salir</a></li>
            </ul>
            
            
        </div>
      </div>
    </div> <!-- End profile -->   
</div>
@endsection