@extends('layouts.app')

@section('content')
<style>
.w {
    color: white;
    font-size: 300%;
}
#i1il{
    text-align: center;
}
</style>
<div class="container">
    <div id="i1il">
    </div>
    <style>
        img{
            color: white;
            position: absolute;
            margin: auto;
            top: 2;
            left: 0;
            right: 0;
            bottom: 0;
        }
    </style>
    <div class="img-container"> <!-- Block parent element -->
        <img src="images/Morse.jpg" style="height: 60%;" alt="Image kon niet geladen worden.">
    </div>

<script>var items = document.querySelectorAll('#i1il');
    for (var i = 0, len = items.length; i < len; i++) {
      (function(){
        var e=this,t=JSON.parse('["SEQ1: .---- ---.. .....","SEQ2: ....- .---- ..---","SEQ3: .---- ..---"]'),r=function(e){
          return parseInt(e,10)||0}
        ,n=function(e){
          return!!e}
        ,o=function(){
          var o=e;
          o.innerHTML='<span class="w"></span>';
          var c=parseInt('Infinity',10),s={
            typeSpeed:r('120'),startDelay:r(''),backDelay:r('700'),backSpeed:r(''),smartBackspace:n('true'),fadeOut:n(''),fadeOutClass:'typed-fade-out',fadeOutDelay:r('500'),shuffle:n(''),loop:n('true'),loopCount:isNaN(c)?1/0:c,showCursor:n('true'),cursorChar:'|',autoInsertCss:n('true'),bindInputFocusEvents:n(''),attr:'',contentType:'html'};
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