@extends('admin.plantillas.sesion')

@section('label1')
<!-- Page Contact -->
<div class="vg-page page-contact" id="contact">
    <h1 class="text-center fg-dark wow fadeInUp">Ingresar - SSAST ADMIN</h1>
    <div class="container-fluid">
        @if(session('mensaje_error'))
        <div class="alert alert-danger" role="alert">
            {{session('mensaje_error')}}
        </div>
        @endif
      <div class="row py-12">
        <div class="col-lg-12">
          <form action="{{route('login')}}" class="vg-contact-form" method="post">
            @csrf
            <div class="form-row">
              <div class="col-12 wow fadeInUp">
                <input class="form-control" type="email" name="correo" placeholder="Usuario" required="true">
              </div>
              <div class="col-12 wow fadeInUp">
                <input class="form-control" type="password" name="pass" placeholder="Paswword">
              </div>
              <div class="col-12 wos fadeInUp">
                <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Ingresar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div> <!-- End page contact -->
@endsection