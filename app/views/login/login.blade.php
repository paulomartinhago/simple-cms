<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Simple CMS - Login</title>

	    <!-- Bootstrap core CSS -->
	    <link href="/css/bootstrap.css" rel="stylesheet">

	    <style type="text/css">
	      	html, body {
	        	background-color: #eee;
	      	}

	      	body {
	        	padding-top: 40px; 
	      	}

	      	.container {
	        	width: 300px;
	      	}

	      	/* The white background content wrapper */
	      	.container > .content {
	        	background-color: #fff;
	        	padding: 20px;
	        	margin: 0 -20px; 
	        	-webkit-border-radius: 10px 10px 10px 10px;
	           		-moz-border-radius: 10px 10px 10px 10px;
	            		border-radius: 10px 10px 10px 10px;
		        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
		           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
		                box-shadow: 0 1px 2px rgba(0,0,0,.15);
	      	}

		  	.login-form {
				margin:0 40px;
		  	}

		  	.info {
	        	width: 310px;
	        	margin: 0 auto;
	      	}

	    </style>
  	</head>

  	<body>
  		
  		@if( $status == 'erro' )
			<div class="info">
	            <div class="alert alert-dismissable alert-danger">
	              	<button type="button" class="close" data-dismiss="alert">&times;</button>
	              	<strong>Erro!</strong> E-mail ou senha inválido(s).
	            </div>
	        </div>
        @endif

		<div class="container">
	    	<div class="content">
		      	<div class="row">
			        <div class="login-form">
			          	<h2>Login</h2>
			          	<form action="login" method="post" role="form">
				            <fieldset>
				              	<div class="form-group">
					                <label>E-mail</label>
					                <input class="form-control" name="email" placeholder="exemplo@servidor.com.br">
					            </div>

				              	<div class="form-group has-error">
					                <label>Senha</label>
					                <input type="password" class="form-control" name="password" placeholder="*******">
					            </div>

				              	<button class="btn btn-primary" type="submit">Acessar</button>
				            </fieldset>
			          	</form>
			        </div>
		      	</div>
	    	</div>
	  	</div> <!-- /container -->

  	</body>
</html>