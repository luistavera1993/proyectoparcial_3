@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Suscriptores</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('suscriptor.create') }}" class="btn btn-info" >Añadir Suscriptor</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Cedula</th>
               <th>Nombre</th>
               <th>Paquete</th>
               <th>Minutos</th>
               <th>Internet</th>
               <th>Cable</th>
               <th>Total a pagar</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($suscriptors->count())  
              @foreach($suscriptors as $suscriptor)  
              <tr>
                <td>{{$suscriptor->cedula}}</td>
                <td>{{$suscriptor->nombres}}</td>
                <td>{{$suscriptor->paquete}}</td>
                <td>{{$suscriptor->minutos}}</td>
                <td>{{$suscriptor->internet}}</td>
                <td>{{$suscriptor->cable}}</td>
                <td>{{$suscriptor->total}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('SuscriptorController@edit', $suscriptor->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('SuscriptorController@destroy', $suscriptor->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay Suscriptores registrados !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $suscriptors->links() }}
    </div>
  </div>
</section>

@endsection