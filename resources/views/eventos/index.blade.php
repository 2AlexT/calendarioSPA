@extends('layouts.app')

@section('scripts')
<script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->

<link rel="stylesheet" href="{{asset('fullcalendar/core/main.css')}}">
<link rel="stylesheet" href="{{asset('fullcalendar/daygrid/main.css')}}">
<link rel="stylesheet" href="{{asset('fullcalendar/list/main.css')}}">
<link rel="stylesheet" href="{{asset('fullcalendar/timegrid/main.css')}}">

<script src="{{asset('fullcalendar/core/main.js')}}" defer></script>
<script src="{{asset('fullcalendar/interaction/main.js')}}" defer></script>
<script src="{{asset('fullcalendar/daygrid/main.js')}}" defer></script>
<script src="{{asset('fullcalendar/list/main.js')}}" defer></script>
<script src="{{asset('fullcalendar/timegrid/main.js')}}" defer></script>

<script>
    let url_eventos="{{url('/eventos')}}";
    let url_show="{{url('/eventos/show')}}";
</script>

<script src="{{asset('js/main.js')}}" defer></script>

@endsection
@section('content')
<div class="row">
<div class="col"></div>
<div class="col-11"><div id="calendar"></div></div>
<div class="col"></div>
</div>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="d-none">
            ID:
          <input type="text" name="txtID" id="txtID">
          <br>
          FECHA:
          <input type="text" name="txtFecha" id="txtFecha">
          <br>
          </div>
            
          <div class="form-row">
            <div class="form-group col-md-8">
                <label>
                    TITULO:
                </label>
                <input type="text" class="form-control" name="txtTitulo" id="txtTitulo">
            </div>
            <div class="form-group col-md-4">
                <label>
                    HORA:
                </label>
                <input type="time" min="07:00" max="19:00" steps="600" class="form-control" name="txtHora" id="txtHora">
            </div>
            <div class="form-group col-md-12">
                <label>
                    DESCRIPCION:
                </label>
                <textarea name="txtDescripcion" class="form-control" id="txtDescripcion" cols="30" rows="3"></textarea>
            </div>
          
            <div class="form-group col-md-12">
                <label>
                    Color:
                </label>
                <input type="color" class="form-control" name="txtColor" id="txtColor">
            </div>
            
          
       
          
          </div>
        </div>
        <div class="modal-footer">
        <button id="btnAgregar" class="btn btn-success">Agregar</button>
        <button id="btnModificar" class="btn btn-warning">Modificar</button>
        <button id="btnEliminar" class="btn btn-danger">Borrar</button>
        <button id="btnCancelar" data-bs-dismiss="modal" class="btn btn-default">Cancelar</button>
      
        </div>
      </div>
    </div>
  </div>
@endsection