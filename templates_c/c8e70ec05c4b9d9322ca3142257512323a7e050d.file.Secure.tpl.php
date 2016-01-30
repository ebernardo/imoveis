<?php /* Smarty version Smarty-3.1.18, created on 2016-01-30 02:06:37
         compiled from "C:\wamp\www\imoveis\templates\Secure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2616456ac0c9d1474d8-30997389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e70ec05c4b9d9322ca3142257512323a7e050d' => 
    array (
      0 => 'C:\\wamp\\www\\imoveis\\templates\\Secure.tpl',
      1 => 1454126664,
      2 => 'file',
    ),
    'ba01318050198a6495a70143955dae576317ca6c' => 
    array (
      0 => 'C:\\wamp\\www\\imoveis\\templates\\Master.tpl',
      1 => 1454126664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2616456ac0c9d1474d8-30997389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROOT_URL' => 0,
    'nav' => 0,
    'currentUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56ac0c9d8700b6_23596362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ac0c9d8700b6_23596362')) {function content_56ac0c9d8700b6_23596362($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\phreeze\\libs\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-Frame-Options" content="deny">
		<base href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
" />
		<title>Imoveis Autentica&ccedil;&atilde;o Padr&atilde;o </title>
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

	

	
	

	</head>

	<body>

		

			<?php if (!isset($_smarty_tpl->tpl_vars['nav']->value)) {?><?php $_smarty_tpl->tpl_vars["nav"] = new Smarty_variable("home", null, 0);?><?php }?>

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
							<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Admin Usu&aacute;rios <i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li <?php if ($_smarty_tpl->tpl_vars['nav']->value=='users') {?> class="active"<?php }?>><a href="./users">Usu&aacute;rios</a></li>
										<li <?php if ($_smarty_tpl->tpl_vars['nav']->value=='roles') {?> class="active"<?php }?>><a href="./roles">Fun&ccedil;&otilde;es</a></li>
									</ul>
								</li>
							<?php }?>
								<li <?php if ($_smarty_tpl->tpl_vars['nav']->value=='imoveis') {?> class="active"<?php }?>><a href="./imoveis">Imoveis</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['nav']->value=='tipoimoveis') {?> class="active"<?php }?>><a href="./tipoimoveis">TipoImoveis</a></li>
								</ul>
								</li>
							</ul>

							<ul class="nav pull-right">
								<li class="dropdown">
								<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Bem Vindo <i class="caret"></i></a>
								<?php }?>
								<?php if (!isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-lock"></i> Login <i class="caret"></i></a>
								<?php }?>
								<ul class="dropdown-menu">
									<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
										<li><a href="./logout">Logout</a></li>
									<?php }?>
									<?php if (!isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>	
										<li><a href="./loginform">Login</a></li>
									<?php }?>	
								</ul>
								</li>
							</ul>
						</div><!--/.nav-collapse -->
					</div>
				</div>
			</div>
		

		
			<div class="container">

				


				


	<?php if (($_smarty_tpl->tpl_vars['feedback']->value)) {?>
		<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value, ENT_QUOTES, 'UTF-8', true);?>

		</div>
	<?php }?>
	
	<!-- #### this view/tempalate is used for multiple pages.  the controller sets the 'page' variable to display differnet content ####  -->
	
	<?php if (($_smarty_tpl->tpl_vars['page']->value=='login')) {?>
	
		<form class="well" method="post" action="login">
			<fieldset>
			<legend>Informe seu usu&aacute;rio e senha</legend>
				<div class="control-group">
				<input id="username" name="username" type="text" placeholder="Usu&aacute;rio..." />
				</div>
				<div class="control-group">
				<input id="password" name="password" type="password" placeholder="Senha..." />
				</div>
				<div class="control-group">
				<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</fieldset>
		</form>
	
	<?php }?>



				<hr>

				<footer>
					<p class="muted"><small>&copy; <?php echo smarty_modifier_date_format(time(),'%Y');?>
 Imoveis</small></p>
				</footer>

			</div> <!-- /container -->

		

		
		

	</body>
</html><?php }} ?>
