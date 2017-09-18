<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Cadastro de usuários
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li> Usuários</li>
			<li class="active">cadastro de usuários</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-12">
				<div class="box box-warning">
					<div class="box-header with-border">
						<h3 class="box-title">Informe os dados do usuário</h3>
					</div>
					<?php if(isset($msg)){
						echo "<div class='box-header with-border'>".$msg."</div>";
					} 
					?>
					<div class="box-body">
						<form role="form" action="cadastrausuario" method="POST" class="form-horizontal">
							<div class="box-body">
								<div class="form-group">
									<label for="nome" class="col-sm-2 control-label">Nome</label>

									<div class="col-sm-10">
										<input type="text" name="nome" id="nome" class="form-control" placeholder="Informe o nome do usuário">
									</div>
								</div>
								<div class="form-group">
									<label for="login" class="col-sm-2 control-label">Login</label>

									<div class="col-sm-10">
										<input type="text" name="login" id="login" class="form-control" placeholder="Informe o login do usuário">
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">Email</label>

									<div class="col-sm-10">
										<input type="email" id="email" name="email" class="form-control" placeholder="Informe Email de contato">
									</div>
								</div>
								<div class="form-group">
									<label for="senha" class="col-sm-2 control-label">Senha</label>

									<div class="col-sm-10">
										<input type="password" id="senha" name="senha" class="form-control" placeholder="Informe a senha do usuário">
									</div>
								</div>
								<div class="form-group">
									<label for="perfilid" class="col-md-2 control-label">Perfil</label>
									<div class="col-md-10">
										<select class="form-control" id="perfilid" name="perfilid">
											<option value="">Selecione</option>
											<?php 
											if(isset($resultadoPerfil)){

												foreach ($resultadoPerfil as $perfil) {
													echo '<option value="'.$perfil->perfilid.'">'.$perfil->descricao.'</option>';
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12 col-sm-9 col-lg-9"></div>
								<div class="col-xs-12 col-sm-3 col-lg-3"></div>
							</div>
							<button type="submit" class="btn btn-primary" style="width: 100%">Cadastrar Usuário</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</section>
</div>

<script src="../assets/js/jquery/jquery-2.2.3.min.js"></script>
<script>
	var base_url = '<?php echo base_url() ?>';
	$(document).ready(function () {

	});
	function buscaInfo(perfil){
		var perfil = perfil;
		var url = base_url + "home/buscausuarioperfil";
		$.post(url, {
			perfil: perfil
		}, function (data) {
			$('#resultado').html(data);
		});
	}
</script>