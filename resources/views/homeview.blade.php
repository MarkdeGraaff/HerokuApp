@extends('layouts.app')

@section('content')
    <style>

    .center{
        
    }

    h1{
        color: white;
    }
    .w {
        color: white;
    }
    #i1il{
        color: white;
        text-align: center;
    }
    </style>
    <div class="blackbg">
        <div class="container">
            <div id="i1il">
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">

                    <div class="col-md-6">
                        <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="notavalidemail@mail.com" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right w">{{ __('Code') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>var items = document.querySelectorAll('#i1il');
        for (var i = 0, len = items.length; i < len; i++) {
          (function(){
            var e=this,t=JSON.parse('["50 Jaar alweer!","Laten we eens zien hoe slim je bent.","Veel plezier in deze digitale escape room."]'),r=function(e){
              return parseInt(e,10)||0}
            ,n=function(e){
              return!!e}
            ,o=function(){
              var o=e;
              o.innerHTML='<span></span>';
              var c=parseInt('Infinity',10),s={
                typeSpeed:r('30'),startDelay:r(''),backDelay:r('700'),backSpeed:r(''),smartBackspace:n('true'),fadeOut:n(''),fadeOutClass:'typed-fade-out',fadeOutDelay:r('500'),shuffle:n(''),loop:n('true'),loopCount:isNaN(c)?1/0:c,showCursor:n('true'),cursorChar:'|',autoInsertCss:n('true'),bindInputFocusEvents:n(''),attr:'',contentType:'html'};
              t&&t.length&&(s.strings=t),new Typed(o.children[0],s)};
            if(window.Typed)o();
            else{
              var c=document.createElement('script');
              c.src='https://cdn.jsdelivr.net/npm/typed.js@2.0.11',c.onload=o,document.head.appendChild(c)}
          }
           .bind(items[i]))();
        }
      </script>
@endsection