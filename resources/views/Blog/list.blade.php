@extends('Layouts.main')
@section('content')
<h1 class="mt-5">Blog List</h1>

@foreach($blogs as $blog)
    <ul class="list-group">
        <a href="/blog/{{$blog->id}}" > <li class="list-group-item">{{$blog->title}}</li> </a>
    </ul>
@endforeach

@endsection