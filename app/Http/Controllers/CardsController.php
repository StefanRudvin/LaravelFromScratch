<?php

namespace App\Http\Controllers;


use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    
    public function index()
    {	
    	# Without eloquent
    	# $cards = DB::table('cards')->get();

    	$cards = Card::all();

    	return view('cards.index', compact('cards'));
    }

    /*
    public function show($id)
    {
    	$card = Card::find($id);
    	return view('cards.show',compact('card'));
    }
    */

    # Type hinting the variable. Get an instance of Card automatically. Remember that wildcard in routes must match!

    public function show(Card $card)
    {
        $card->load('notes.user');

        #return $card;

    	return view('cards.show', compact('card'));
    }
}
