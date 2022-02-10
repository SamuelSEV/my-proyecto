@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Solo los usuarios autenticados pueden acceder a esta sección.</p>
        
        @endauth

        @guest
        <h1>Bienvenido</h1>
        <p class="lead">Por favor logeate o registrate</p>
        @endguest
    </div>
@endsection