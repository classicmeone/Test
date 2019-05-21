@include('layouts.errmsg')
<div class='con'>
        {!! Form::open(['action' => "Miscel@insert", 'method'=>'post', 'class'=>'form-signin', 'style'=>'display:block', 'role'=>'form']) !!}
          
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          {{ form::email('mail', '',['tabindex'=>'1', 'class'=>'form-control', 'placeholder'=>'Email', 'value'=>session('mail',"")])}}
         <br>
          <label for="inputPassword" class="sr-only">Password</label>
          {{ form::password('pass', ['tabindex'=>'2', 'class'=>'form-control', 'placeholder'=>'Password'])}}
          <br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">© 2018</p>
          {!! Form::close() !!}
      </div>		