<table class="table">
	<thead>
		<tr>
			<th scope="col">Nomre</th>
			<th scope="col">Correo</th>
			<th scope="col">Opciones</th>
		</tr>
	</thead>
	@foreach( $users as $u)
	<tbody>
		<tr>
			<td>{{$u->name}}</td>
			<td>{{$u->email}}</td>
			<td>
				<div class="form-group">
					<a class="btn btn-primary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="{{route('usuario.edit',$u->id)}}"><i class="fa fa-cogs"></i>
					</a>
				<!-- <a class="btn btn-primary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="{{route('usuario.destroy',$u->id)}}">Eliminar
				</a> -->
			</div>
		</td>
	</tr>
</tbody>
@endforeach
</table>
{!!$users->render()!!}