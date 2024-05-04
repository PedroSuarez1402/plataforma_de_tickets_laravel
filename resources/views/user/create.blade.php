@extends('layouts.app')
@section('content')
    <a href="{{route('user.index')}}" class="text-blue-500 hover:underline py-2 px-2">Volver</a>
    <div class="max-w-md mx-auto mt-8 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl mb-4 font-bold">Crear Nuevo Usuario</h2>
        <form method="POST" action="{{route('user.store')}}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-gray-700 font-bold">Nombre de Usuario:</label>
                <input type="text" name="name" id="name" class="form-input mt-2 block w-full">
                @error('name')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="lastname" class="block text-gray-700 font-bold">Apellido:</label>
                <input type="text" name="lastname" id="lastname" class="form-input mt-1 block w-full">
                @error('lastname')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-bold">Correo de Usuario:</label>
                <input type="email" name="email" id="email" class="form-input mt-1 block w-full">
                @error('email')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-bold">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-input mt-1 block w-full">
                @error('password')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="rol" class="block text-gray-700 font-bold">Rol:</label>
                <input type="text" name="rol" id="rol" class="form-input mt-1 block w-full">
                @error('rol')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="state_user" class="block text-gray-700 font-bold">Estado:</label>
                <input type="text" name="state_user" id="state_user" class="form-input mt-1 block w-full">
                @error('state_user')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md mt-4">Crear Usuario</button>
        </form>
    </div>
@endsection
