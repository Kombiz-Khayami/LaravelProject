@extends('Layouts.main')
@section('content')
<h1 class="mt-5">Card List</h1>

@foreach($cards as $card)
    <ul class="list-group">
        <a href="/Card/{{$card->id}}" > <li class="list-group-item">{{$card->Name}}</li> </a>
    </ul>
@endforeach

@endsection