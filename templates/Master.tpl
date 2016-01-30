<!DOCTYPE html>
<html lang="en">
	<head>
	{block name=header}
		<meta charset="utf-8">
		<meta http-equiv="X-Frame-Options" content="deny">
		<base href="{$ROOT_URL}" />
		<title>{block name=title}Imoveis{/block}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Imoveis" />
		<meta name="author" content="phreeze builder | phreeze.com" />

		<!-- Le styles -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="styles/style.css" rel="stylesheet" />
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" />
		<!--[if IE 7]>
		<link rel="stylesheet" href="bootstrap/css/font-awesome-ie7.min.css">
		<![endif]-->
		<link href="bootstrap/css/datepicker.css" rel="stylesheet" />
		<link href="bootstrap/css/timepicker.css" rel="stylesheet" />
		<link href="bootstrap/css/bootstrap-combobox.css" rel="stylesheet" />
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

		<script type="text/javascript" src="scripts/libs/LAB.min.js"></script>
		<script type="text/javascript">
			$LAB
				.script("scripts/libs/jquery-1.8.2.min.js").wait()
				.script("bootstrap/js/bootstrap.min.js")
				.script("bootstrap/js/bootstrap-datepicker.js")
				.script("bootstrap/js/bootstrap-timepicker.js")
				.script("bootstrap/js/bootstrap-combobox.js")
				.script("scripts/libs/underscore-min.js").wait()
				.script("scripts/libs/underscore.date.min.js")
				.script("scripts/libs/backbone-min.js")
				.script("scripts/app.js")
				.script("scripts/model.js").wait()
				.script("scripts/view.js").wait()
		</script>

	{/block}

	{block name=customHeader}
	{/block}

	</head>

	<body>

		{block name=navbar}

			{if !isset($nav)}{assign var="nav" value="home"}{/if}

			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="./">Imoveis</a>
						<div class="nav-collapse collapse">
							<ul class="nav">
							{if isset($currentUser) }
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Admin Usu&aacute;rios <i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li {if $nav=='users'} class="active"{/if}><a href="./users">Usu&aacute;rios</a></li>
										<li {if $nav=='roles'} class="active"{/if}><a href="./roles">Fun&ccedil;&otilde;es</a></li>
									</ul>
								</li>
							{/if}
								<li {if $nav=='imoveis'} class="active"{/if}><a href="./imoveis">Imoveis</a></li>
								<li {if $nav=='tipoimoveis'} class="active"{/if}><a href="./tipoimoveis">TipoImoveis</a></li>
								</ul>
								</li>
							</ul>

							<ul class="nav pull-right">
								<li class="dropdown">
								{if isset($currentUser) }
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Bem Vindo <i class="caret"></i></a>
								{/if}
								{if !isset($currentUser) }
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-lock"></i> Login <i class="caret"></i></a>
								{/if}
								<ul class="dropdown-menu">
									{if isset($currentUser) }
										<li><a href="./logout">Logout</a></li>
									{/if}
									{if !isset($currentUser)}	
										<li><a href="./loginform">Login</a></li>
									{/if}	
								</ul>
								</li>
							</ul>
						</div><!--/.nav-collapse -->
					</div>
				</div>
			</div>
		{/block}

		{block name=container}
			<div class="container">

				{block name="banner"}
					<h1>Imoveis</h1>
				{/block}

				{block name="content"}
				{/block}

				<hr>

				<footer>
					<p class="muted"><small>&copy; {$smarty.now|date_format:'%Y'} Imoveis</small></p>
				</footer>

			</div> <!-- /container -->

		{/block}

		{block name=customFooterScripts}
		{/block}

	</body>
</html>