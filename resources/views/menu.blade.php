@extends('layouts.app')
@section('content')
<link href="{{asset('css/app.css')}}" rel="stylesheet" />  
<div class="card">
   	<div class="card-header"><h1><center>Métodos numéricos</center></h1></div>
   	<div class="card-body">
   	   	<div id="app">
   	   	   	<metodos></metodos>
   	   	</div>
   	   	<script src="{{ asset('js/app.js')}}"></script>
   	</div>
</div>

@endsection