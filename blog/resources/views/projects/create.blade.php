@extends('layout')

@section('title')
    projects.create
@endsection

@section('content')
    <h1>Create a New Projects</h1>

    <form action="/projects" method="POST">
         {{ csrf_field() }}
        
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" cols="30" rows="3" placeholder="Project description"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
@endsection