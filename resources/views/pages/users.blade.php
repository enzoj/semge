@extends('layouts.app')

@section('content')
    <h1>Usuários</h1>
    @if (count($users) > 0)
        @foreach ($users as $user )
            <div class="well">
                <h3><a href="/users/{{$user->id}}">{{$user->name}}</a></h3>
            </div>
        @endforeach
        {{$users->links()}}
    @else

    @endif

@endsection