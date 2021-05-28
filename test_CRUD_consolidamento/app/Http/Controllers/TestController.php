<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class TestController extends Controller
{
    public function home(){
        
        $matches = Match::all();
        //dd($matches);
        return view('pages.home',compact('matches'));
    }

    public function match($id){

        $match = Match::findOrFail($id);
        //dd($match);
        return view ('pages.match',compact('match'));
    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $request){

        $validate = $request -> validate([
            'team1' => 'required|min:3|max:128',
            'team2' => 'required|min:3|max:128',
            'point1' => 'required|int|min:85|max:130',
            'point2' => 'required|int|min:85|max:130',
            'result' => 'required|boolean',
        ]);
        $match = Match::create($validate);
        //dd($match);
        return redirect() -> route('match',$match -> id);
    }

    public function delete($id){

        $match = Match::findOrFail($id);
        $match -> delete();
        return redirect() -> route('home');
    }

    public function edit($id){

        $match = Match::findOrFail($id);
        return view('pages.edit', compact('match'));
    }

    public function update(Request $request, $id){

        $validate = $request -> validate([
            'team1' => 'required|min:3|max:128',
            'team2' => 'required|min:3|max:128',
            'point1' => 'required|int|min:85|max:130',
            'point2' => 'required|int|min:85|max:130',
            'result' => 'required|boolean',
        ]);
        $match = Match::findOrFail($id);
        $match -> update($validate);
        //dd($match);
        return redirect() -> route('match',$match -> id);
    }
}
