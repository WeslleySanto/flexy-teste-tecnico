 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="_token" content="{!! csrf_token() !!}"/>
 	<title>Teste Técnico Flexy</title>
 	<!-- Stylus -->
 	<link href="css/bootstrap.min.css" rel="stylesheet">
 	<!-- Fonts -->
 	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- Scripts -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$.ajaxSetup({
		   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
	</script>

 	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media quer\
 ies -->
 	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 	<!--[if lt IE 9]>
 		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 	<![endif]-->
 </head>
 <body>
 	<nav class="navbar navbar-default">
 		<div class="container-fluid">
 			<div class="navbar-header">
 				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"\
  data-target="#bs-example-navbar-collapse-1">
 					<span class="sr-only">Toggle Navigation</span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<a class="navbar-brand" href="#">Flexy - Teste</a>
 			</div>

 			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 				<ul class="nav navbar-nav">
 					<li><a href="{{url('/')}}">Home</a></li>
 					<li><a href="{{url('/transportadoras')}}">Transportadoras</a></li>
 				</ul>

 				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Parâmetros do Sistema<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Faixas de Cep</a></li>
							<li><a href="#">Faixas de Peso</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')
</body>
</html>