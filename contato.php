<?php include 'components/header.php'; ?>

	<section class="titulo-interno">
		<div class="container">
			<h1>CONTATO</h1>
			<ol class="breadcrumb">
	            <li><a href="#">HOME</a></li>
	            <li class="active">CONTATO</li>
	        </ol>
		</div><!-- container -->
	</section><!-- titulo-interno -->

	<section class="interna contato">
		<div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <h4>Endereço</h4>
                        <p>Avenida Amintas Barros, 4175, Lagoa Nova / Natal-RN</p>
                        <h4>Telefone</h4>
                        <p>(84) 3206-8500 | 9408-2845 | 3206-5233</p>
                        <h4>E-mail</h4>
                        <p>secretaria@ampern.org.br</p>
                    </div><!-- item -->
                </div><!-- md-4 -->
                <div class="col-md-8 col-sm-8">
                    <div class="form-cadastro">
                        <form>
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" value="" />
                            </div><!-- .form-group -->

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="text" name="email" id="email" class="form-control" value="" />
                                    </div><!-- .form-group -->
                                </div><!-- .md-6 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input type="text" name="telefone" id="telefone" class="form-control" value="" />
                                    </div><!-- .form-group -->
                                </div><!-- .md-6 -->
                            </div><!-- .row -->

                            <div class="form-group">
                                <label>Assunto</label>
                                <input type="text" name="assunto" id="assunto" class="form-control" value="" />
                            </div><!-- .form-group -->
                            <div class="form-group">
                                <label>Mensagem</label>
                                <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                            </div><!-- .form-group -->

                            <button>ENVIAR</button>
                        </form>
                    </div><!-- form-cadastro -->
                </div><!-- md-8 -->
            </div><!-- row -->

            <div class="localizacao">
                <div class="titulo-geral">
                    <h2>LOCALIZAÇÃO</h2>
                </div><!-- titulo-geral -->

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.2386494317484!2d-35.20692478523278!3d-5.821932095781439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2fff2bdf2bce5%3A0x94f4143773375a27!2sAv.+Amintas+Barros%2C+4175+-+Lagoa+Nova%2C+Natal+-+RN%2C+59062-195!5e0!3m2!1spt-BR!2sbr!4v1521223900665" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div><!-- localizacao -->
		</div><!-- container -->
	</section><!-- interna -->
	
<?php include 'components/footer.php'; ?>