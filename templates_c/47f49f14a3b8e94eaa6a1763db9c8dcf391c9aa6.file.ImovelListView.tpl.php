<?php /* Smarty version Smarty-3.1.18, created on 2016-01-30 02:07:04
         compiled from "C:\wamp\www\imoveis\templates\ImovelListView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3045256ac0cb8c50549-10290539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f49f14a3b8e94eaa6a1763db9c8dcf391c9aa6' => 
    array (
      0 => 'C:\\wamp\\www\\imoveis\\templates\\ImovelListView.tpl',
      1 => 1454126666,
      2 => 'file',
    ),
    'ba01318050198a6495a70143955dae576317ca6c' => 
    array (
      0 => 'C:\\wamp\\www\\imoveis\\templates\\Master.tpl',
      1 => 1454126664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3045256ac0cb8c50549-10290539',
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
  'unifunc' => 'content_56ac0cb97e5914_04037689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ac0cb97e5914_04037689')) {function content_56ac0cb97e5914_04037689($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\phreeze\\libs\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-Frame-Options" content="deny">
		<base href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
" />
		<title>Imoveis | Imoveis</title>
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

	

	
<script type="text/javascript">
	$LAB.script("scripts/app/imoveis.js").wait(function(){
		$(document).ready(function(){
			page.init();
		});

		// hack for IE9 which may respond inconsistently with document.ready
		setTimeout(function(){
			if (!page.isInitialized) page.init();
		},1000);
	});
</script>


	</head>

	<body>

		
	<?php $_smarty_tpl->tpl_vars["nav"] = new Smarty_variable("imoveis", null, 0);?>


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

				
	<h1>
		<i class="icon-th-list"></i> Imoveis
		<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
		<span class='input-append pull-right searchContainer'>
			<input id='filter' type="text" placeholder="Buscar..." />
			<button class='btn add-on'><i class="icon-search"></i></button>
		</span>
	</h1>


				

	<!-- underscore template for the collection -->
	<script type="text/template" id="imovelCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Id">Id<<?php ?>% if (page.orderBy == 'Id') { %<?php ?>> <i class='icon-arrow-<<?php ?>%= page.orderDesc ? 'up' : 'down' %<?php ?>>' /><<?php ?>% } %<?php ?>></th>
				<th id="header_Titulo">Titulo<<?php ?>% if (page.orderBy == 'Titulo') { %<?php ?>> <i class='icon-arrow-<<?php ?>%= page.orderDesc ? 'up' : 'down' %<?php ?>>' /><<?php ?>% } %<?php ?>></th>
				<th id="header_Descricao">Descricao<<?php ?>% if (page.orderBy == 'Descricao') { %<?php ?>> <i class='icon-arrow-<<?php ?>%= page.orderDesc ? 'up' : 'down' %<?php ?>>' /><<?php ?>% } %<?php ?>></th>
				<th id="header_DataDisponibilidade">Data Disponibilidade<<?php ?>% if (page.orderBy == 'DataDisponibilidade') { %<?php ?>> <i class='icon-arrow-<<?php ?>%= page.orderDesc ? 'up' : 'down' %<?php ?>>' /><<?php ?>% } %<?php ?>></th>
				<th id="header_Imagem">Imagem<<?php ?>% if (page.orderBy == 'Imagem') { %<?php ?>> <i class='icon-arrow-<<?php ?>%= page.orderDesc ? 'up' : 'down' %<?php ?>>' /><<?php ?>% } %<?php ?>></th>


			</tr>
		</thead>
		<tbody>
		<<?php ?>% items.each(function(item) { %<?php ?>>
			<tr id="<<?php ?>%= _.escape(item.get('id')) %<?php ?>>">
				<td><<?php ?>%= _.escape(item.get('id') || '') %<?php ?>></td>
				<td><<?php ?>%= _.escape(item.get('titulo') || '') %<?php ?>></td>
				<td><<?php ?>%= _.escape(item.get('descricao') || '') %<?php ?>></td>
				<td><<?php ?>%if (item.get('dataDisponibilidade')) { %<?php ?>><<?php ?>%= _date(app.parseDate(item.get('dataDisponibilidade'))).format('MMM D, YYYY h:mm A') %<?php ?>><<?php ?>% } else { %<?php ?>>NULL<<?php ?>% } %<?php ?>></td>
				<td><<?php ?>%= _.escape(item.get('imagem') || '') %<?php ?>></td>


			</tr>
		<<?php ?>% }); %<?php ?>>
		</tbody>
		</table>

		<<?php ?>%=  view.getPaginationHtml(page) %<?php ?>>
	</script>

	<!-- underscore template for the model -->
	<script type="text/template" id="imovelModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idInputContainer" class="control-group">
					<label class="control-label" for="id">Id</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="id"><<?php ?>%= _.escape(item.get('id') || '') %<?php ?>></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="tituloInputContainer" class="control-group">
					<label class="control-label" for="titulo">Titulo</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="titulo" placeholder="Titulo" value="<<?php ?>%= _.escape(item.get('titulo') || '') %<?php ?>>" />
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="descricaoInputContainer" class="control-group">
					<label class="control-label" for="descricao">Descricao</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="descricao" placeholder="Descricao" value="<<?php ?>%= _.escape(item.get('descricao') || '') %<?php ?>>" />
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="dataDisponibilidadeInputContainer" class="control-group">
					<label class="control-label" for="dataDisponibilidade">Data Disponibilidade</label>
					<div class="controls inline-inputs">
						<div class="input-append date date-picker" data-date-format="yyyy-mm-dd">
							<input id="dataDisponibilidade" type="text" value="<<?php ?>%= _date(app.parseDate(item.get('dataDisponibilidade'))).format('YYYY-MM-DD') %<?php ?>>" />
							<span class="add-on"><i class="icon-calendar"></i></span>
						</div>
						<div class="input-append bootstrap-timepicker-component">
							<input id="dataDisponibilidade-time" type="text" class="timepicker-default input-small" value="<<?php ?>%= _date(app.parseDate(item.get('dataDisponibilidade'))).format('h:mm A') %<?php ?>>" />
							<span class="add-on"><i class="icon-time"></i></span>
						</div>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="imagemInputContainer" class="control-group">
					<label class="control-label" for="imagem">Imagem</label>
					<div class="controls inline-inputs">
						<textarea class="input-xlarge" id="imagem" rows="3"><<?php ?>%= _.escape(item.get('imagem') || '') %<?php ?>></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="valorInputContainer" class="control-group">
					<label class="control-label" for="valor">Valor</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="valor" placeholder="Valor" value="<<?php ?>%= _.escape(item.get('valor') || '') %<?php ?>>" />
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="emailContatoInputContainer" class="control-group">
					<label class="control-label" for="emailContato">Email Contato</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="emailContato" placeholder="Email Contato" value="<<?php ?>%= _.escape(item.get('emailContato') || '') %<?php ?>>" />
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="telefoneContatoInputContainer" class="control-group">
					<label class="control-label" for="telefoneContato">Telefone Contato</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="telefoneContato" placeholder="Telefone Contato" value="<<?php ?>%= _.escape(item.get('telefoneContato') || '') %<?php ?>>" />
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="tipoImovelIdInputContainer" class="control-group">
					<label class="control-label" for="tipoImovelId">Tipo Imovel Id</label>
					<div class="controls inline-inputs">
						<select id="tipoImovelId" name="tipoImovelId"></select>
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<!-- delete button is is a separate form to prevent enter key from triggering a delete -->
		<form id="deleteImovelButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteImovelButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Remover Imovel</button>
						<span id="confirmDeleteImovelContainer" class="hide">
							<button id="cancelDeleteImovelButton" class="btn btn-mini">Cancelar</button>
							<button id="confirmDeleteImovelButton" class="btn btn-mini btn-danger">Confirmar</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- modal edit dialog -->
	<div class="modal hide fade" id="imovelDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Editar Imovel
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="imovelModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancel</button>
			<button id="saveImovelButton" class="btn btn-primary">Salvar Altera&ccedil;&otilde;es</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="imovelCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newImovelButton" class="btn btn-primary">Adicionar Imovel</button>
	</p>



				<hr>

				<footer>
					<p class="muted"><small>&copy; <?php echo smarty_modifier_date_format(time(),'%Y');?>
 Imoveis</small></p>
				</footer>

			</div> <!-- /container -->

		

		
		

	</body>
</html><?php }} ?>