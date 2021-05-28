@extends('layouts.main-layout')

@section('title')
    Match # {{$match->id}}
@endsection

@section('content')

    <h1>Partita numero {{$match -> id}}</h1>
    <div class="match">
        @if ($match -> point1 > $match -> point2)
            <div><u><strong>{{$match -> team1}}</u></strong> @ {{$match -> team2}}</div>
            <div>{{$match -> point1}} - {{$match -> point2}}</div>
        @else
            <div>{{$match -> team1}} @ <u><strong>{{$match -> team2}}</u></strong></div>
            <div>{{$match -> point1}} - {{$match -> point2}}</div>
        @endif
    </div>
    <div class="result">
        <h2>Result: {{$match -> result}}</h2>
        <a href="{{route('edit',$match->id)}}"><button>Modifica il match</button></a>
    </div>

@endsection