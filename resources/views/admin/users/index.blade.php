@extends('admin.template.main')

@section('title', 'lista de Usuarios')

@section('content')

  <table class="table table-stripped">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo Electronico</th>
      <th>Tipo</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            @if($user->type == 'admin')
              <span class="label label-success">{{ $user->type }}</span>
            @else
              <span class="label label-default">{{ $user->type }}</span>
            @endif
          </td>
          <td>
            <a href="{{ route('users.edit', $user->id) }}"  class="btn btn-info glyphicon glyphicon-pencil"></a>
            <a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Desea eliminar el usuario?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {!! $users->render() !!}
  <br>
  <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo Usuario</a>
@endsection
