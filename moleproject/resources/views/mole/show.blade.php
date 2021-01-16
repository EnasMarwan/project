@extends('layouts.header')
@section('content')
        
                 <div class="wrapper mol-detalis ">
                <p class="name"> name {{$mole->name}} </p>
                <p class="name"> age {{$mole->age}} </p>
                <p class="name"> mother {{$mole->mother}} </p>
                <p class="name"> mobile {{$mole->mobile}} </p>
                <p class="name"> ident {{$mole->ident}} </p>
                <p class="name"> time_arrives {{$mole->time_arrives}} </p>
                <p class="name"> play_num {{$mole->play_num}} </p>
                <p class="name"> game_sellect {{$mole->game_sellect}} </p>
                 </div>

                 <form action="/mole/{{$mole->id}}" method="POST">
                    @csrf
                 @method('DELETE')
                    <button> complete </button>
                 </form>
                 <a href="/mole" class="back"> Back to the all child </a>
        @endsection
