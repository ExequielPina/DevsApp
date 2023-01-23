@extends('layouts.app')

@section('titulo')
    Inicia sesión en Devs
@endsection


@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="imagen">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{ route('login')}}" novalidate>
                @csrf

                @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center uppercase font-bold">{{ session('mensaje') }}</p>  
                @endif
                
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email: </label>
                    <input 
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    name="email"
                    id="email"
                    type="email"
                    placeholder="Email de registro" 
                    value="{{ old('email')}}"
                    />
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center uppercase font-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña: </label>
                    <input 
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    name="password"
                    id="password"
                    type="password"
                    placeholder="Contraseña de registro" 
                    />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center uppercase font-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember"> <label class=" text-gray-500">No cerrar sesión</label> 
                </div>

                <input
                    class="bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-3 text-white rounded-lg"
                    type="submit"
                    value="Iniciar Sesión"
                />
            </form>
        </div>
    </div>
@endsection