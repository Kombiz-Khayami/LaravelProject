@extends('Layouts.main')
@section('content')
<h1 class="mt-5">Testing page </h1>

<p>{{$myVar}}</p>

@if(Request::route()->named('meme'))
<p>{{route('meme')}}</p>
@endif

@endsection