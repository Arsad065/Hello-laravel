@extends('layout')

@section('title')
    projects.index
@endsection

@section('content')
    <h1>Projects</h1>

    <a href="/projects/create"><h2>Create Projects</h2></a>
    

    @foreach ($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach
@endsection