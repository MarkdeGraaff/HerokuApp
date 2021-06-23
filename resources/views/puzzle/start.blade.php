@extends('layouts.app')

@section('content')
<body>
    <style>
        img{
            color: white;
            position: absolute;
            margin: auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
    </style>
    <div class="img-container"> <!-- Block parent element -->
        <img src="images/Hidden.png" alt="Image kon niet geladen worden.">
    </div>
</body>
@endsection