@extends('layouts.main-layout')

@section('title')
    HomePage
@endsection

@section('content')
    <h1>LISTA PARTITE</h1>
    <ul>
        @foreach ($matches as $match)
            <li>
                <a href="{{route('match', $match -> id)}}">
                    <span>Partita numero {{$match -> id}}</span>
                    <span><a href="{{route('edit',$match->id)}}">&#9998;</a></span>
                    <span><a href="{{route('delete',$match->id)}}">&#10060;</a></span>
                </a>
            </li>            
        @endforeach
    </ul>
@endsection