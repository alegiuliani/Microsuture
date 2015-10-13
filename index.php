<!DOCTYPE html>
<html lang="pt-br">
<head>

	<?php include './inc/head.php';?>

    <title>Microsuture Indústria LTDA. | Brasil</title>
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
							A <a href="products.php">linha de produtos</a> Microsuture &reg; abrange várias especialidades médicas. Dentre elas estão as linhas de oftalmologia, microcirurgia, cirurgia plástica e cardiológica. <a href="contact.php">Peça já um orçamento!</a>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-check-circle-o"></i> Gestão de Qualidade</h4>
                    </div>
                    <div class="panel-body">
                        <p style="text-align: center;">
							A nossa principal preocupação é que os nossos produtos cheguem até os nossos clientes com excelência na qualidade.</br>
							Com nossa experiência, métodos e processos com boas práticas de fabricação, alcançamos a <b>Qualificação Excelente pela Anvisa!</b>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-bullseye"></i> Suturas Cirúrgicas</h4>
                    </div>
                    <div class="panel-body">
                        <p style="text-align: center;">
							Absorvíveis ou não absorvíveis, a Microsuture oferece uma gama completa e inovadora de Suturas Cirúrgicas. E podemos fabricar o seu tipo de fio para indicações específicas.
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