@extends('admin.plantillas.admin')

@section('label1')
<div class="vg-page page-about" id="about">
    <!-- Profile -->
    <div class="container py-3">
      <div class="row">
        <div class="col-md-4">
            <h4>{{$titulo}}</h4>
            <img src="{{asset('assets/img/stumsa.jpg')}}" width="230px" height="300px">
            <a href="{{route('formularioSorteo')}}" class="btn btn-theme">Agregar Ganador</a>
            <a href="{{route('ssast')}}" class="btn btn-theme"> Salir </a>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6"><h4>{{$titulo2}}</h4></div>
                <div class="col-md-6"><a href="{{route('reiniciarGanador')}}" class="btn btn-warning butonblock">Reiniciar Lista</a></div>
            </div>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ITEM</th>
                            <th>Nombre</th>
                            <th>Premio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0;?>
                        @foreach($lista_ganador as $value)
                        <?php $i=$i+1;?>
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$value->item}}</td>
                            <td>{{$value->nombre}}</td>
                            <td>{{$value->premio}}</td>
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