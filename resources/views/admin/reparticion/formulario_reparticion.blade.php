@extends('admin.plantillas.admin')

@section('label1')
<div class="vg-page page-about" id="about">
    <!-- Profile -->
    <div class="container py-3">
      <div class="row">
        <div class="col-md-4">
            <h4>{{$titulo}}</h4>
            <img src="{{asset('assets/img/stumsa.jpg')}}" alt="Photo Profile">
        </div>
        <div class="col-md-4">
            <h4>{{$titulo2}}</h4>
            <form action="{{route('agregarReparticion')}}" class="vg-contact-form" method="post">
                @csrf
                <div class="form-row">
                  <div class="col-12">
                    <input class="form-control" type="text" name="reparticion" placeholder="Nombre de la Reparticion" required="true">
                  </div>
                  <div class="col-12">
                      <hr>
                  </div>
                  <div class="col-6">
                    <button type="submit" class="btn btn-success btn-lg">Registrar</button>
                  </div>
                  <div class="col-6">
                    <a href="{{route('ssast')}}" class="btn btn-danger btn-lg">Cancelar</a>
                  </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            
        </div>
      </div>
    </div> <!-- End profile -->   
</div>
@endsection