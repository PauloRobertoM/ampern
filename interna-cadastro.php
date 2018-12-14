<?php include 'components/header.php'; ?>

	<section class="titulo-interno">
		<div class="container">
			<h1>CADASTRO</h1>
			<ol class="breadcrumb">
	            <li><a href="#">HOME</a></li>
	            <li class="active">CADASTRO</li>
	        </ol>
		</div><!-- container -->
	</section><!-- titulo-interno -->

	<section class="interna cadastro">
		<div class="container">
			<div class="titulo-grande">
                <div>
                    <h4>ATUALIZE SEU</h4>
                    <h2>CADASTRO</h2>
                </div>
            </div><!-- titulo-grande -->
            <div class="form-cadastro">
                <form>
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="" />
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" name="endereco" id="endereco" class="form-control" value="" />
                    </div><!-- .form-group -->

                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="form-group">
                                <label>Bairro</label>
                                <input type="text" name="bairro" id="bairro" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-5 -->
                        <div class="col-md-5 col-sm-5">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" name="cidade" id="cidade" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-5 -->
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <label>UF</label>
                                <input type="text" name="uf" id="uf" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-2 -->
                    </div><!-- .row -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" name="email" id="email" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-6 -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-6 -->
                    </div><!-- .row -->

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Identidade</label>
                                <input type="text" name="identidade" id="identidade" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Matrícula</label>
                                <input type="text" name="matricula" id="matricula" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Data de Nascimento</label>
                                <input type="text" name="data_nascimento" id="data_nascimento" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-4 -->
                    </div><!-- .row -->

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Senha atual</label>
                                <input type="password" name="senha_atual" id="senha_atual" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Nova senha</label>
                                <input type="password" name="nova_senha" id="nova_senha" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Repita a nova senha</label>
                                <input type="password" name="confirma_nova_senha" id="confirma_nova_senha" class="form-control" value="" />
                            </div><!-- .form-group -->
                        </div><!-- .md-4 -->
                    </div><!-- .row -->
                    
                    <button>ENVIAR</button>
                </form>
            </div><!-- form-cadastro -->
		</div><!-- container -->
	</section><!-- interna -->
	
<?php include 'components/footer.php'; ?>