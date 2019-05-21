@extends('layouts.sawi')
@section('title', "Contact Us")
@include('Sawi.slider')
<link href="{{ asset('css/contact/main.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/contact/util.css')}}" rel="stylesheet" type="text/css" />
@section('content')
<div>
    <span style="float:left">
     <h4> Left Float </h4>
    </span>
    <span style="display:inline;"> <h2 ><strong>Our Location </strong></h2>
        <hr />
                    <div>
                        <h4>234/80 -UFG , New Street,</h4>
                        <h4>Switzerland.</h4>
                        <h4><strong>Call:</strong>  + 67-098-907-1269 / 70 / 71 </h4>
                        <h4><strong>Email: </strong>info@yourdomain.com</h4>
                    </div>
    </span>
    <span style="float:right"> 
    Right Float
    </span>
 </div>
<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
    <div class="container-contact2">
        <div class="wrap-contact2">
                	{!! Form::open(['method'=>'post', 'class'=>'contact2-form validate-form', 'role'=>'form']) !!}
                <span class="contact2-form-title">
                        Contact Form
                </span>
                <div class="wrap-input2 validate-input" data-validate="Name is required">
                 {{ Form::text('name', '',['tabindex'=>'1', 'class'=>'input2'])}}
                   <!-- <input class="input2" type="text" name="name"> -->
                    <span class="focus-input2" data-placeholder="NAME"></span>
                </div>

                <div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    {{ Form::email('email', '',['tabindex'=>'1', 'class'=>'input2'])}}
                   <!-- <input class="input2" type="text" name="email"> -->
                    <span class="focus-input2" data-placeholder="EMAIL"></span>
                </div>
                <div class="wrap-input2 validate-input" data-validate = "Message is required">
                  <!--  <textarea class="input2" name="message"></textarea> -->
                    {{ Form::textarea('message', '',['tabindex'=>'1', 'class'=>'input2'])}}
                    <span class="focus-input2" data-placeholder="MESSAGE"></span>
                </div>
                <div class="container-contact2-form-btn">
                    <div class="wrap-contact2-form-btn">
                        <div class="contact2-form-bgbtn"></div>
                        <button class="contact2-form-btn">
                            Send Your Message
                        </button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection