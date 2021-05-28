@extends('layouts.main-layout')

@section('title')
    Create New Game
@endsection

@section('content')

    <h1>Create New Match!</h1>
    <div class="creation-form">
        <form action="{{route('store')}}" method="POST">
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
                <input class="@error('team1') is-invalid @enderror" type="text" id="team1" name="team1">
            </div>
            <div class="input-form">
                <div>
                    <label for="team2">Team 2</label>
                </div>
                <input class="@error('team2') is-invalid @enderror" type="text" id="team2" name="team2">
            </div>
            <div class="input-form">
                <div>
                    <label for="point1">Punti team 1</label>
                </div>
                <input class="@error('point1') is-invalid @enderror" type="number" id="point1" name="point1">
            </div>
            <div class="input-form">
                <div>
                    <label for="point2">Punti team 2</label>
                </div>
                <input class="@error('point2') is-invalid @enderror" type="number" id="point2" name="point2">
            </div>
            <div class="input-form">
                <div>
                    <label for="result">Team Vincente</label>
                </div>
                <select name="result" id="result">
                    <option value="0">Team1</option>
                    <option value="1">Team2</option>
                </select>
            </div>
            <div class="create-button">
                <input type="submit" value="Create">
            </div>
        </form>
        
@endsection