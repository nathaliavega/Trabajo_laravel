@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="imagen">
            {{-- <img src="{{ asset('assets/fondo.jpeg') }}" alt=""> --}}
        </div>
        <div class="formulario">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h1>Bienvenido a Fashion Store</h1>
                <h3>¡Ingresa y sigue disfrutando!</h3>

                
                <input type="email" name="email" id="" placeholder="Correo Electrónico">
                <input type="password" name="password" id="" placeholder="Contraseña">
                

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Recuperar contraseña') }}
                    </a>
                @endif

                <button>Entrar</button>

            </form>
        </div>
    </div>
@endsection
