@extends('layouts.app')

@section('titulo')
    Regístrate en Devs
@endsection


@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="imagen">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route ('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre: </label>
                    <input 
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    name="name"
                    id="name"
                    type="text"
                    placeholder="Tu nombre"
                    value="{{ old('name')}}"
                    />                 
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center uppercase font-bold">{{ $message }}</p>
                    @enderror
                </div>               
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username: </label>
                    <input 
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                    name="username"
                    id="username"
                    type="text"
                    placeholder="Nombre de usuario" 
                    value="{{ old('username')}}"
                    />
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center uppercase font-bold">{{ $message }}</p>
                    @enderror
                </div>

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
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña: </label>
                    <input 
                    class="border p-3 w-full rounded-lg"
                    name="password_confirmation"
                    id="password_confirmation"
                    type="password"
                    placeholder="Repite tu contraseña" />
                </div>

                <input
                    class="bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-3 text-white rounded-lg"
                    type="submit"
                    value="Crear cuenta"
                />
            </form>
        </div>
    </div>
@endsection