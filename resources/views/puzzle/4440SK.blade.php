@extends('layouts.app')

@section('content')
<style>
    #i1il{
        color: white;
        text-align: center;
    }
</style>
<div class="container">
    <div id="i1il">
        Pagina 8, Chapter 1, Regel 3, Letter 5, 7, 12.<br/>
        Pagina 16, Chapter 2,  Regel 5, Letter 1, 5, 10.<br/>
        Laatste pagina nummer. (Laatste 5 pagina's worden niet meegeteld!)
    </div>
    <embed src="pdfs/Classic_Tales.pdf" type="application/pdf" width="100%" height="600px" />
</div>