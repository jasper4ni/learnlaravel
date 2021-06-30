<html>
  <head>
    <title>App Name - @yield('title')</title>
  </head>
  <body>
  	<div>
  		@yield('content')
  	</div>

  	<div id="ary"></div>
	
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    var app = @json($array);
    $('#ary').html(app)
    $('#ary').append(app)
</script>