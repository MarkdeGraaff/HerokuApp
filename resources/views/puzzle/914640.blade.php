@extends('layouts.app')

@section('content')
<style>
    .i1il{
        text-align: center;
        margin-top: auto;
        margin-bottom: auto;
    }
</style>
<div class="container i1il">
    <audio controls autoplay>
        <source src="sounds/Message1.wav" type="audio/wav">
    Your browser does not support the audio element.
    </audio>
</div>
@endsection