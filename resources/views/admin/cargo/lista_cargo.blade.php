@extends('admin.plantillas.admin')

@section('label1')
<div class="vg-page page-about" id="about">
    <!-- Profile -->
    <div class="container py-3">
      <div class="row">
        <div class="col-md-4">
          <h4>{{$titulo}}</h4>
          <img src="{{asset('assets/img/stumsa.jpg')}}" width="230px" height="300px">
        </div>
        <div class="col-md-4">
            <h4>{{$titulo2}}</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cargo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lista_cargo as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->cargo}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <a href="{{route('formularioCargo')}}" class="btn btn-theme">Agregar Cargo</a>
            <a href="{{route('ssast')}}" class="btn btn-theme"> Salir </a>
        </div>
      </div>
    </div> <!-- End profile -->   
</div>
@endsection