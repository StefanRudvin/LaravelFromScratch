@extends('layout')

@section('content')

<h1>Edit note</h1>

<form method="POST" action="/notes/{{ $note->id }}">

	{{ method_field('PATCH') }}

	<div class="form-group">

		<textarea name="body" class="form-control">
		{{ $note->body }}
		</textarea>

	</div>
	<div class="form-group">

		<button type="submit" class="btn btn-primary">
		Update Note
		</button>

	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

<a href="/cards/{{ $card->id }}">Back</a>


@stop