@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
    <h1>Welcome {{ $foo }} !!</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection