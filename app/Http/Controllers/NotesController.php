<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;

use App\Card;

class NotesController extends Controller
{
    //
    public function store(Request $request, Card $card)
    {	
    	/* Long way
    	$note = New Note;

    	$note->body = $request->body;

    	$card->notes()->save($note);
    	
		Other way
    	$card->notes()->save(
    		new Note(['body' => $request->body])
    	);
    	
		Other way
    	$card->notes()->create([
    		'body' => $request->body
    	]);

    	Other way
    	$card->notes()->create($request->all());
    	*/

    	$card->addNote(
    		new Note($request->all())
    		);

    	return back();
    }
}
