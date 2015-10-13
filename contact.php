<!DOCTYPE html>
<html lang="pt-br">
<head>

	<?php include './inc/head.php';?>

    <title>Microsuture Indústria LTDA. | Brasil - Contatos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

	<?php include './inc/menu.php';?>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contatos</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li class="active">Contatos</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-8">
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
				src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=-23.4875721,-46.6707602&amp;spn=56.506174,79.013672&amp;t=m&amp;z=15&amp;output=embed">
				</iframe>
            </div>
            <div class="col-md-4">
                <p>
					Rua Lavínio Salles Arcuri, 791<br>Casa Verde Alta, 02564-000<br>São Paulo
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Telefone">T</abbr>: (11) 3966-4033</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="E-mail">E</abbr>: <a href="mailto:vendas@microsuture.com.br">vendas@microsuture.com.br</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="HorÃ¡rio Comercial">H</abbr>: Segunda - Sexta: 7:30 as 17:30</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://pt-br.facebook.com/pages/Microsuture-Ind-Com-Imp-Exp-e-Rep-de-Mat-Cir-Ltda/262348597108549" target="_"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Envie nos uma mensagem:</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nome Completo:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Por favor, informe seu nome completo!">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefone para retorno:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Por favor, informe um telefone para contato!">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Endereço de E-mail:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Por favor, informe seu e-mail!">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensagem:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Por favor, informe sua mensagem!" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </div>

		<?php include './inc/footer.php';?>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

	<?php include './inc/analytics.php';?>

</body>

</html>