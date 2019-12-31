@extends('Layouts.main')
@section('content')
<h1 class="mt-5">User Card List</h1>

@foreach($user as $card)
    <ul class="list-group">
         <li class="list-group-item">
         {{$card->Name}}  {{$card->Quantity}}  {{$card->CMC}} 
            <img src="{{$card->Image}}">
        </li> 
    </ul>
@endforeach

@endsection