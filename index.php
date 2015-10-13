<!DOCTYPE html>
<html lang="pt-br">
<head>

	<?php include './inc/head.php';?>

    <title>Microsuture Ind�stria LTDA. | Brasil</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

	<?php include './inc/menu.php';?>

    <header id="headerCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#headerCarousel" data-slide-to="1"></li>
            <li data-target="#headerCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/carousel/1.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/carousel/2.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/carousel/3.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#headerCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#headerCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"></h4>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-ellipsis-v"></i> Produtos</h4>
                    </div>
                    <div class="panel-body">
                        <p style="text-align: center;">
							A <a href="products.php">linha de produtos</a> Microsuture &reg; abrange v�rias especialidades m�dicas. Dentre elas est�o as linhas de oftalmologia, microcirurgia, cirurgia pl�stica e cardiol�gica. <a href="contact.php">Pe�a j� um or�amento!</a>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-check-circle-o"></i> Gest�o de Qualidade</h4>
                    </div>
                    <div class="panel-body">
                        <p style="text-align: center;">
							A nossa principal preocupa��o � que os nossos produtos cheguem at� os nossos clientes com excel�ncia na qualidade.</br>
							Com nossa experi�ncia, m�todos e processos com boas pr�ticas de fabrica��o, alcan�amos a <b>Qualifica��o Excelente pela Anvisa!</b>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-bullseye"></i> Suturas Cir�rgicas</h4>
                    </div>
                    <div class="panel-body">
                        <p style="text-align: center;">
							Absorv�veis ou n�o absorv�veis, a Microsuture oferece uma gama completa e inovadora de Suturas Cir�rgicas. E podemos fabricar o seu tipo de fio para indica��es espec�ficas.
						</p>
                    </div>
                </div>
            </div>
        </div>

		<?php include './inc/footer.php';?>

	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	$('.carousel').carousel({
		interval: 5000
	})
	</script>

	<?php include './inc/analytics.php';?>

</body>
</html>