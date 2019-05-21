@extends('layouts.app')

@section('content')
<style>
.con {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<div class='con'>
	{!! Form::open(['action' => 'PagesController@addMail', 'method'=>'post', 'class'=>'form-signin', 'style'=>'display:block', 'role'=>'form']) !!}
      <!--<img class="mb-4" src="./Signin Template for Bootstrap_files/bootstrap-solid.svg" alt="" width="72" height="72">
       -->
	  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
	  {{ form::email('mail', '',['tabindex'=>'1', 'class'=>'form-control', 'placeholder'=>'Email'])}}
     
      <label for="inputPassword" class="sr-only">Password</label>
      {{ form::password('password', ['tabindex'=>'2', 'class'=>'form-control', 'placeholder'=>'Password'])}}
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2018</p>
	  {!! Form::close() !!}
  </div>						
@endsection