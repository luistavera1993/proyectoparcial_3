@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Suscriptor</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('suscriptor.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="cedula" id="cedula" class="form-control input-sm" placeholder="Numero de cedula">
									</div>
									<div class="form-group">
										<input type="text" name="contrasena2" id="contrasena2" class="form-control input-sm" placeholder="Contraseña">
									</div>
									<div class="form-group">
										<input type="text" name="nombres" id="nombres" class="form-control input-sm" placeholder="Nombre del Suscriptor">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="paquete" id="paquete" class="form-control input-sm" placeholder="Paquete">
									</div>
								</div>
							</div>

							<div class="form-group">
								<input type="text" name="minutos" id="minutos" class="form-control input-sm" placeholder="Minutos">
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="internet" id="internet" class="form-control input-sm" placeholder="Internet">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="cable" id="cable" class="form-control input-sm" placeholder="Tipo de cable">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" name="total" id="total" class="form-control input-sm" placeholder="Total a pagar">
							</div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('suscriptor.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection