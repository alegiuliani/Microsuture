<!DOCTYPE html>
<html lang="pt-br">
<head>

	<?php include '/inc/head.php';?>

    <title>Microsuture Indústria LTDA. | Brasil - Produtos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

	<?php include '/inc/menu.php';?>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Portfólio de Produtos</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li class="active">Portfólio de Produtos</li>
                </ol>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="./images/products/microcryl.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="./images/products/microester.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="./images/products/micromonoabs.jpg" alt="750x500">
                        </div>
                    </div>

                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Produtos MicroSuture</h3>
                <p>MicroNylon &reg;</p>
                <p>MicroPoly &reg;</p>
                <p>MicroSeda &reg;</p>
                <p>MicroAço &reg;</p>
                <p>MicroMonoABS &reg;</p>
                <p>MicroCryl &reg;</p>
                <p>MicroÉster &reg;</p>
                <h3>Linhas</h3>
                <ul>
                    <li>Oftálmica</li>
                    <li>Microcirurgia</li>
                    <li>Cirurgia Plástica</li>
                    <li>Cardiológica</li>
                </ul>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Produtos Relacionados</h3>
            </div>

            <div class="col-sm-4 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="./images/products/microcryl.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-4 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="./images/products/microester.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-4 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="./images/products/micromonoabs.jpg" alt="">
                </a>
            </div>

        </div>

        <hr>

		<?php include '/inc/footer.php';?>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<?php include '/inc/analytics.php';?>

</body>
</html>