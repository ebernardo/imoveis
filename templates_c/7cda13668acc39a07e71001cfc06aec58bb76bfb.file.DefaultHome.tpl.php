<?php /* Smarty version Smarty-3.1.18, created on 2016-01-30 02:06:06
         compiled from "C:\wamp\www\imoveis\templates\DefaultHome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:796956ac0c7e3e5a05-95184211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cda13668acc39a07e71001cfc06aec58bb76bfb' => 
    array (
      0 => 'C:\\wamp\\www\\imoveis\\templates\\DefaultHome.tpl',
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
  'nocache_hash' => '796956ac0c7e3e5a05-95184211',
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
  'unifunc' => 'content_56ac0c7e9a2bc6_06575859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ac0c7e9a2bc6_06575859')) {function content_56ac0c7e9a2bc6_06575859($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\phreeze\\libs\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-Frame-Options" content="deny">
		<base href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
" />
		<title>Imoveis | Home</title>
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
		

		

	<div class="modal hide fade" id="getStartedDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>Iniciando com o Phreeze</h3>
		</div>
		<div class="modal-body" style="max-height: 300px">
			<p>Este aplicativo foi gerado utilizando o gerador modificado do Phreeze. Deve ser 
			modificado para o uso em aplica&ccedil;&otilde;es de grande porte, este aplicativo &eacute;
			apenas um ponto inicial para seu aplicativo. Uma p&aacute;gina foi criada para cada tabela em seu 
			banco de dados. Clique nos links na barra de navega&ccedil;&atilde;o superior para 
			visualizar as p&aacute;ginas.</p>

			<p>O aplicativo gerado &eacute; um ponto de partida para a sua necessidade. Todas as p&aacute;ginas s&atilde;o geradas
			de forma padr&atilde;o e algumas delas podem sofrer altera&ccedil;&otilde;es para se adequar as suas necessidades. 
			Pode ser que o gerador gerou mais c&oacute;digo do que voc&ecirc; realmente necessita. Voc&ecirc; pode e deve excluir os 
			controladores, m&eacute;todos e pontos de vista que voc&ecirc; n&atilde;o precisa.</p>

			<h4>Controladores de Interface</h4>

			<p>Os controles de interface do usu&aacute;rio para campos de edi&ccedil;&atilde;o s&atilde;o gerados com base nos tipos de colunas do banco de dados. 
			O gerador n&atilde;o sabe o prop&oacute;sito de cada campo. Por exemplo, um campo INT pode ser melhor apresentado como uma 
			campo normal, um campo do tipo picker ou um checkbox por exemplo. &Eacute; poss&iacute;vel que o campo n&atilde;o deva ser editado pelo 
			usu&aacute;rio. O gerador n&atilde;o sabe essas coisas e por isso faz um melhor palpite baseado em tipos e tamanhos das colunas. 
			Voc&ecirc/ provavelmente ter&aacute; que mudar a controles de Interface que s&atidel;o melhores para a sua aplica&ccedil;&atilde;o. Bootstrap oferece uma s&eacute;rie 
			de grandes controles de interface do usu&aacute;rio para voc&ecirc; usar.</p>

			<h4>Controladores</h4>

			<p>Um controlador foi criado para cada tabela no aplicativo. Os controladores est&atilde;o localizados em / libs / Controller /. 
			Voc&ecirc; deve modificar os controladores de acordo com sua necessidade. Um exemplo pode ser uma tabela usada em uma atribui&ccedil;&atilde;o de muitos-para-muitos.</p>

			<h4>Modelos</h4>

			<p>V&aacute;rios arquivos de modelo foram criados para cada tabela no aplicativo.
				Os arquivos de modelo est&atilde;o localizados em / libs / Model /.
				Se o seu esquema ou tabela de banco de dados for modificado, voc&ecirc; pode voltar a gerar apenas o DAO (de acesso a dados de objeto)
				arquivos, selecionando o pacote DAO-Only no construtor de classe. basta depois, trocar os arquivos no diret&oacute;rio / libs / Model / DAO /, 
				em seguida, voc&ecirc; pode fazer com seguran&ccedil;a	altera&ccedil;&otilde;es em seu esquema de banco de dados e c&oacute;digo regenerado sem perder qualquer
				personaliza&ccedil;&atilde;o.</p>

		</div>
		<div class="modal-footer">
			<button id="okButton" data-dismiss="modal" class="btn btn-primary">Vamos L&aacute;...</button>
		</div>
	</div>

	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
			<h1>Sua Aplica&ccedil;&atilde;o<i class="icon-thumbs-up"></i></h1>
			<p>Esta aplica&ccedil;&atilde;o foi gerada automaticamente utilizando a vers&atide;o modificada do Phreeze.
			 Utilize esta aplica&ccedil;&atilde;o como um ponto de partida para gera&ccedil;&atilde;o de uma app.</p>
			 
			 <p>Note que nesta vers&atilde;o modificada, foi implementada uma autentica&ccedil;&atilde;o padr&atilde;o para facilitar
			  a constru&ccedil;&atilde;o e o aprendizado. Ela pode ser modificada de acordo com a necessidade.</p>
			
			<p>Por padr&atilde;o, o Phreeze utiliza o Bootstrap como estilo e &eacute; poss&iacute;vel customizar e alterar o mesmo 
			sobrescrevendo o tema atual. Verifique novos temas em
			<a href="https://wrapbootstrap.com/?ref=phreeze">Bootstrap</a>
			e <a href="http://www.google.com/search?q=bootstrap+themes"> para mais reposit&oacute;rios</a>.</p>
			
			
			<p><em>Imoveis foi gerada com Phreeze na vers&atilde;o 3.3.9 CARPANESE.
			Rodando com Phreeze <?php echo $_smarty_tpl->tpl_vars['PHREEZE_VERSION']->value;?>
<?php if (($_smarty_tpl->tpl_vars['PHREEZE_PHAR']->value)) {?> (<?php echo basename($_smarty_tpl->tpl_vars['PHREEZE_PHAR']->value);?>
)<?php }?>.</em></p>
			
			
			<p><a class="btn btn-primary btn-large" data-toggle="modal" href="#getStartedDialog">Inicie Agora</a></p>
		</div>

		<!-- Example row of columns -->
		<div class="row">
			<div class="span3">
				<h2><i class="icon-cogs"></i> Phreeze</h2>
				 <p>Phreeze &eacute; um framework MVC + ORM para PHP que fornece servi&ccedil;os de 
				 roteamento de URL, de acesso DB orientada a objeto e JSON RESTful que s&atilde;o 
				 consumidos pela camada de vis&atilde;o...</p>
				<p><a class="btn" href="http://phreeze.com/">Sobre o Phreeze Oficial &raquo;</a></p>
			</div>
			<div class="span3">
				<h2><i class="icon-th"></i> Backbone</h2>
				 <p>Backbone.js &eacute; um Framework JavaScript que &eacute; utilizado para fornecer
					modelos do lado do cliente, a liga&ccedil;&atilde;o do modelo e persist&ecirc;ncia usando AJAX
					chamadas para os servi&ccedil;os de back-end RESTful.</p>
				<p><a class="btn" href="http://documentcloud.github.com/backbone/">Sobre o Backbone &raquo;</a></p>
		 	</div>
			<div class="span3">
				<h2><i class="icon-twitter-sign"></i> Bootstrap</h2>
				<p>Bootstrap pelo Twitter fornece um layout de cross-browser limpo
				e componentes de interface do usu&aacute;rio. Bootstrap &eacute; um kit de ferramentas de front-end completa com
				componentes prontos para uso funcionais.</p>
				<p><a class="btn" href="http://twitter.github.com/bootstrap/">Sobre o Bootstrap &raquo;</a></p>
			</div>
			<div class="span3">
				<h2><i class="icon-signin"></i> Bibliotecas</h2>
				<p>Tamb&eacute;m foram utilizadas neste framework, bibliotecas open-source como:
				<a href="https://github.com/eternicode/bootstrap-datepicker">datepicker</a>,
				<a href="https://github.com/danielfarrell/bootstrap-combobox">combobox</a>,
				<a href="http://fortawesome.github.com/Font-Awesome/">FontAwesome</a>,
				<a href="http://jquery.com/">jQuery</a>,
				<a href="http://labjs.com/">LABjs</a>,
				<a href="http://documentcloud.github.com/underscore/">Underscore</a>,
				<a href="http://www.smarty.net">Smarty</a>,
				<a href="https://github.com/jdewit/bootstrap-timepicker">timepicker</a>,
				<a href="http://docs.jquery.com/Qunit">QUnit</a>.
				Todas as bibliotecas e plugins utilizados neste framework s&atilde;o livres para uso pessoal e comercial.
				</p>
			</div>
		</div>

		<hr>

		<footer>
			<p>&copy; <?php echo smarty_modifier_date_format(time(),'%Y');?>
 Imoveis</p>
		</footer>

	</div> <!-- /container -->



		
		

	</body>
</html><?php }} ?>
