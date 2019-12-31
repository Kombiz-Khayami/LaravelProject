@extends('Layouts.main')
@section('content')
<h1 class="mt-5">User Card List</h1>

@foreach($users as $user)
    <ul class="list-group">
         <li class="list-group-item">
            User:  <a href="/Collection/{{$user->UserID}}">{{$user->UserID}}</a>
        </li> 
    </ul>
@endforeach

@endsection