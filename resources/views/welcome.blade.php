@extends('layout')

@section('content')



    <h1>The welcome page Here</h1>


    @if (Session::has('status'))
    	<h3>{{ Session::get('status') }}</h3>
    @endif

    @if (Session::has('flash_message'))
        <div class="Alert">
            {{ Session::get('flash_message') }}
        </div>
    @endif


@stop