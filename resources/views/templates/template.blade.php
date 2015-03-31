<!DOCTYPE html>
<html>
<head>
	<title> 

 Gerar</title>
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/config.css" rel="stylesheet">
	
</head>
<body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
          @if (!Auth::guest())  
            <ul class="nav navbar-nav">
              <li><a href="#"> {{{ Auth::user()->name }}}</a></li>
              <li><a href="#">Trocar de senha</a></li>
              <li><a href="/auth/logout">Sair</a></li>
            </ul>
          @endif
          @if (!Auth::guest()) 
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/auth/login">Admin</a></li>
            </ul>
          @endif
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
<div class="content container">
	@yield('content')
</div>
</body>
</html>