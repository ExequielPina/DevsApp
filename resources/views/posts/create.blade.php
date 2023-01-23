@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection

@push('styles')
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />   
@endpush


@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="/IMAGENES" method="POST" enctype="multipart-form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center"></form>
        </div>
        <div class="md:w-1/2 px-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{ route ('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Título: </label>
                    <input 
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    name="titulo"
                    id="titulo"
                    type="text"
                    placeholder="Título de la publicación."
                    value="{{ old('titulo')}}"
                    />                 
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center uppercase font-bold">{{ $message }}</p>
                    @enderror
                </div>    
                
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">Descripción: </label>
                    <textarea 
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        name="descripcion"
                        id="descripcion"
                        placeholder="Descripcion de la publicación."
                        >{{ old('descripcion') }}
                    </textarea>                 
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center uppercase font-bold">{{ $message }}</p>
                    @enderror
                </div> 
                <input
                    class="bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-3 text-white rounded-lg mb-10"
                    type="submit"
                    value="Crear publicación"
                />
            </form>
        </div>
    </div>
    
@endsection