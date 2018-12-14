<?php include 'components/header.php'; ?>

	<section class="titulo-interno">
		<div class="container">
			<h1>CONVÊNIO</h1>
			<ol class="breadcrumb">
	            <li><a href="#">HOME</a></li>
	            <li class="active">CONVÊNIO</li>
	        </ol>
		</div><!-- container -->
	</section><!-- titulo-interno -->

	<section class="interna cadastro convenios">
		<div class="container">
			<div class="titulo-grande">
                <div class="titulo-convenio">
                    <h4>cadastre-se em nosso</h4>
                    <h2>clube de vantagens</h2>
                </div>
            </div><!-- titulo-grande -->

            <div class="form-cadastro">
                <form>
                    <div class="form-group">
                        <label>Nome do(a) associado(a)</label>
                        <input type="text" name="nome_associado" id="nome_associado" class="form-control" value="" />
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label>E-mail do(a) associado(a)</label>
                        <input type="text" name="email_associado" id="email_associado" class="form-control" value="" />
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label>CPF do(a) associado(a)</label>
                        <input type="text" name="cpf_associado" id="cpf_associado" class="form-control" value="" />
                    </div><!-- .form-group -->
                    
                    <button>ENVIAR</button>
                </form>
            </div><!-- form-cadastro -->
		</div><!-- container -->
	</section><!-- interna -->
	
<?php include 'components/footer.php'; ?>