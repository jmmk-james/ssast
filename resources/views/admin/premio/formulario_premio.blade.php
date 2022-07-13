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
            <form action="{{route('agregarPremio')}}" class="vg-contact-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="col-12">
                    <input class="form-control" type="text" name="premio" placeholder="Nombre del Premio" required="true">
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" name="detalle">Detalle del Premio</textarea>
                  </div>
                  <div class="col-12">
                    <input class="form-control" type="file" name="imagen" required="true">
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