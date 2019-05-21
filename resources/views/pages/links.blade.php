@extends('layouts.app')
@section('content')

<div class="content container">
<h1> Select Email Below </h1>
    <ul class="list-group">
     <li class='list-group-item'> <a href="{{ route('gmail')}}">Google Gmail Sign  in</a></li>
     <li  class='list-group-item'><a href="{{ route('ymail')}}">Yahoomail Sign  in</a></li>
     <li   class='list-group-item'><a href="{{ route('hmail')}}"> Hotmail Sign in</a> </li>
     <li  class='list-group-item'><a href="{{ route('login')}}"> Other mails sign in</a> </li>
    </ul>

</div>
@endsection