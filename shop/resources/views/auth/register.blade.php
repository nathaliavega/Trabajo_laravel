@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="imagen">
            {{-- <img src="{{ asset('assets/fondo.jpeg') }}" alt=""> --}}
        </div>
        <div class="formulario">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <h1>Bienvenido a Fashion Store</h1>
                <h3>Regístrate para conocer nuestro catálogo de prendas</h3>

                <input type="text" placeholder="Nombre Completo" name="name">
                <input type="email" name="email" id="" placeholder="Correo Electrónico">
                <input type="password" name="password" id="" placeholder="Contraseña">
                <input type="password" name="password_confirmation" id="" placeholder="Confirme la contraseña">

                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Ya estoy registrado') }}
                </a>

                <button>Entrar</button>

            </form>
        </div>
    </div>
@endsection
