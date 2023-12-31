<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<style>
    body {
          background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/fond.png') center center fixed no-repeat;
	        background-size: cover;
        	height: 1200px;
    }
</style>

<?php
include('assets/exo_php/header.php')
?>


    <section class="cc-menu merriweather py-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-light merriweather">Nos variétés</h3>
            </div>
            <br><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/cheesburger.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Burger</h5>
                            <p class="card-text">
                                cheeseburger, double steack, big burger...
                            </p>
                            <a class="btn btn-primary" href="burger.php">Nos burgers</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/pizza-au-chorizo.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pizza</h5>
                            <p class="card-text">
                                chorizo, tartiflette, saumon...
                            </p>
                            <a class="btn btn-primary" href="pizza.php">Nos pizzas</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/shutterstoc.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pâtes</h5>
                            <p class="card-text">
                                truffes, carbonara, légumes...
                            </p>
                            <a class="btn btn-primary" href="pate.php">Nos pâtes</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/nems.png" class="card-img-top " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Asiat</h5>
                            <p class="card-text">
                                sushis, nems, ramens...
                            </p>
                            <a class="btn btn-primary" href="asiat.php">Nos asiat</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/composer.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Wrap</h5>
                            <p class="card-text">
                                boeuf, poisson, poulet...
                            </p>
                            <a class="btn btn-primary" href="wrap.php">Nos wraps</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/sandpoulet.jpg" class="card-img-top2" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Sandwich</h5>
                            <p class="card-text">
                                boeuf, poulet, vegie...
                            </p>
                            <a class="btn btn-primary" href="sandwich.php">Nos sandwichs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <br><br>
    <?php
include('assets/exo_php/footer.php')
?>
    


		<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>