@extends('layouts.app')

@section('content')
<a href="{{route('user.create')}}">Crea un nuevo usuario</a>
    <ul>
        @forelse ($users as $user)
            <li>
                <a href="{{route('user.show', $user->id)}}">{{$user->title}}</a>
                <a href="{{route('user.edit', $user->id)}}"></a>
            </li>
        @empty
            <p>No hay usuarios.</p>
        @endforelse
    </ul>
@endsection