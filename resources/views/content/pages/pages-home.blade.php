@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Inicio')

@section('content')

@role('admin')
<div class="container">

    <div class="row">
      <h1>Bienvenido a tu panel de gestión</h1>
       {{-- <div class="col-md-8">
            <h2>Buscar usuario</h2>
            <form action="{{ route('pages-home') }}" method="GET" class="mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar..." name="search" value="{{ $search ?? '' }}">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
            @if (session('successMessage'))
            <div class="alert alert-success">
                {{ session('successMessage') }}
            </div>
            @endif
            {{-- <ul class="list-group">
                @forelse ($users as $user)
                    <li class="list-group-item">
                        {{ $user->name }} - {{ $user->email }}
                        <button class="btn btn-primary btn-sm float-end" onclick="showEditForm('{{ $user->id }}', '{{ $user->name }}', '{{ $user->email }}', '{{ $user->getRoleNames()->first() }}')">Modificar datos</button>

                    <form action="{{ route('delete-user', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm float-end">Eliminar</button>
                    </form>
                    </li>
                @empty
                    <li class="list-group-item">Usuario no encontrado.</li>
                @endforelse
            </ul>
        </div>--}}
    </div>

  {{--   @if (session('successMessage'))
        <div class="alert alert-success mt-3">
            {{ session('successMessage') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-8">
            <div id="editFormContainer" style="display: none;">
                <h2>Modificar datos del usuario</h2>
                <form id="editForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Rol</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>--}}
</div>
@endrole

@role('user')
<h1>Bienvenido a tu panel de gestión</h1>
@endrole
