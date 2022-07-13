@extends('admin.plantillas.admin')

@section('label1')
<div class="vg-page page-about" id="about">
    <!-- Profile -->
    <div class="container py-3">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-6">
              <h3>Participantes</h3>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary butonblock" onclick="cargar()" id="botoncargar">Cargar >></button>	
            </div>
          </div>
                
          <div class="table-wrapper-scroll-y my-custom-scrollbar">  
            <table class="table table-size table-striped" id="persona">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Item</th>
                        <th>CI</th>
                        <th>Nombre</th>
                        <th>Paterno</th>
                        <th>Materno</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lista_persona as $value)
                    <tr class="table-size">
                        <td>{{$value->id_persona}}</td>
                        <td>{{$value->item}}</td>
                        <td>{{$value->ci}}</td>
                        <td>{{$value->nombre}}</td>
                        <td>{{$value->paterno}}</td>
                        <td>{{$value->materno}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4">

          <div class="row alert alert-success">
              <div class="col-md-4"><h2 id="cantidad"></h2></div><div class="col-md-8">Participantes Habilitados</div>
          </div>
          <div class="row">
            <form action="{{route('agregarSorteo')}}" method="post">
                @csrf
                  <div class="row">
                    <div class="col-12">
                      <select name="id_premio" class="form-control" required="true">
                        <option value="">Seleccionar Premio</option>
                        @foreach($premio as $value)
                        <option value="{{$value->id}}">{{$value->premio}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <input type="hidden" name="id_persona" id="id_persona" required="true">  
                    </div>
                    @if(session('mensaje_error'))
                    <div class="col-12 alert alert-danger" role="alert">
                      {{session('mensaje_error')}}
                    </div>
                    @endif
                  </div>

                  <div class="row">
                    <div class="col-12 alert alert-success">
                      <div class="row">
                        <div class="col-4"><b>ID</b></div><div id="rid" class="col-8"></div>
                      </div>
                      <div class="row">
                        <div class="col-4"><b>ITEM</b></div><div id="ritem" class="col-8"></div>
                      </div>
                      <div class="row">
                        <div class="col-4"><b>C.I.</b></div><div id="rci" class="col-8"></div>
                      </div>
                      <div class="row">
                        <div class="col-4"><b>Nombre</b></div><div id="rnombre" class="col-8"></div>
                      </div>
                      <div class="row">
                        <div class="col-4"><b>A. Paterno</b></div><div id="rpaterno" class="col-8"></div>
                      </div>
                      <div class="row">
                        <div class="col-4"><b>A. Materno</b></div><div id="rmaterno" class="col-8"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <button type="button" class="btn btn-success butonsorteo" onclick="start()" id="botonstart">Start</button>	
                    </div>
                        <div class="col-md-6">
                          <button type="button" class="btn btn-danger butonsorteo" onclick="stop()" id="botonstop">Stop</button>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <button type="submit" class="btn btn-success butonblock">Registrar</button>
                    </div>
                  </div>
            </form>
          </div>
        </div>
        
        <div class="col-md-4">
          <h3>Ganadores</h3>
          <div class="table-wrapper-scroll-y my-custom-scrollbar">  
            <table class="table">
                <thead>
                    <tr>
                        <th>ITEM</th>
                        <th>CI</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lista_ganador as $value)
                    <tr>
                        <td>{{$value->item}}</td>
                        <td>{{$value->ci}}</td>
                        <td>{{$value->nombre}}</td>
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