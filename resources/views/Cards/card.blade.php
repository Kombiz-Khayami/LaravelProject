@extends('Layouts.main')
@section('content')
<h1 class="mt-5">{{$card->Name}}</h1>



<img src="{{$card->Image}}"><br>

Converted mana cost : {{$card->CMC}}<br>

@if($card->Promo==1)
Promo : true <br>
@else
Promo : false <br>
@endif

@if($card->Foil==1)
Foil : true <br>
@else
Foil : false <br>
@endif

Image : <a href={{$card->Image}}> image </a> <br>
@endsection