@extends('layout')

@section('title')
    projects.edit
@endsection

@section('content')
    <h1>Edit Page</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('patch') }}
        {{ csrf_field() }}
       
       <div>
       <input type="text" name="title" placeholder="Project title" value="{{$project->title}}">
       </div>

       <div>
           <textarea name="description" cols="30" rows="3" placeholder="Project description">{{$project->description}}</textarea>
       </div>

       <div>
           <button type="submit">Edit Project</button>
       </div>
   </form>
@endsection