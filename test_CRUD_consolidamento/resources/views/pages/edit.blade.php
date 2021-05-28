@extends('layouts.main-layout')

@section('title')
    Modify game # {{$match->id}}
@endsection

@section('content')

    <h1>Modify Match Number {{$match->id}}</h1>
    <div class="creation-form">
        <form action="{{route('update',$match->id)}}" method="POST">
            @csrf
            @method('POST')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="input-form">
                <div>
                    <label for="team1">Team 1</label>
                </div>
                <input class="@error('team1') is-invalid @enderror" type="text" id="team1" name="team1" value="{{$match->team1}}">
            </div>
            <div class="input-form">
                <div>
                    <label for="team2">Team 2</label>
                </div>
                <input class="@error('team2') is-invalid @enderror" type="text" id="team2" name="team2" value="{{$match->team2}}">
            </div>
            <div class="input-form">
                <div>
                    <label for="point1">Punti team 1</label>
                </div>
                <input class="@error('point1') is-invalid @enderror" type="number" id="point1" name="point1" value="{{$match->point1}}">
            </div>
            <div class="input-form">
                <div>
                    <label for="point2">Punti team 2</label>
                </div>
                <input class="@error('point2') is-invalid @enderror" type="number" id="point2" name="point2" value="{{$match->point2}}">
            </div>
            <div class="input-form">
                <div>
                    <label for="result">Team vincente:</label>
                </div>
                <select name="result" id="result">
                    <option value="0" 
                        @if ($match->point1 > $match->point2)
                            selected
                        @endif
                    >Team1</option>
                    <option value="1" 
                        @if ($match->point1 < $match->point2)
                         selected   
                        @endif
                    >Team2</option>
                </select>
            </div>
            <div class="create-button">
                <input type="submit" value="Update">
            </div>
        </form>
        
@endsection