<html>
<head>
<title> Welcome </title>

</head>
<body>
       @include("layouts.app")
       <h2> Welcome select your email to access our hidden treasure </h2>
       <div>
      <a href="{{route('mlog')}}"> Yahoomail </a> <a href="{{route('mlog')}}"> Gmail </a> <a href="{{route('mlog')}}"> Outlook </a> <a href=""> Others </a>
       </div>
</body>

</html>