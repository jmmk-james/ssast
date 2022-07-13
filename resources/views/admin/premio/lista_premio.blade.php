@extends('admin.plantillas.admin')

@section('label1')
<div class="vg-page page-about" id="about">
    <!-- Profile -->
    <div class="container py-3">
      <div class="row">
        <div class="col-md-4">
            <h4>{{$titulo}}</h4>
            <img src="{{asset('assets/img/stumsa.jpg')}}" width="230px" height="300px">
            <a href="{{route('formularioPremio')}}" class="btn btn-theme">Agregar Premio</a>
            <a href="{{route('ssast')}}" class="btn btn-theme"> Salir </a>
        </div>
        <div class="col-md-8">
            <h4>{{$titulo2}}</h4>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Premio</th>
                            <th>Detalle</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lista_premio as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->premio}}</td>
                            <td>{{$value->detalle}}</td>
                            <td><img src="{{asset('storage/premio/'.$value->imagen)}}" width="100px" height="100px" ></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div> <!-- End profile -->   
</div>
@endsection