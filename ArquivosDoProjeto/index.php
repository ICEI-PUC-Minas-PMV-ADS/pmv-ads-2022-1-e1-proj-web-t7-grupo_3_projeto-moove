<?php
    include_once('navbar.html');

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dadd5e2854.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!--Início Home-->
    <section id="home" class="d-flex">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-md-12 capa">

                    <div id="carousel-move" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <h1>O melhor geito de se alugar um carro</h1>
                                <button type="button" class="btn btn-custom btn-lg btn-amarelo">
                                    Veja como
                                </button>
                                <button type="button" class="btn btn-custom btn-lg btn-branco">
                                    Carros Disponíveis
                                </button>
                            </div>
                            <div class="carousel-item">
                                <h1>Alugue Agora <br> e descubra</h1>
                                <button type="button" class="btn btn-custom btn-lg btn-amarelo">
                                    <i class="fa-solid fa-car"></i> Cadastre
                                </button>
                            </div>

                            <button class="carousel-control-prev" type="button" data-target="#carousel-move"
                            data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carousel-move"
                            data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--fim Home-->

    <section id="carros-destaque" class=""><!--início carros destaque-->
        <div class="container">
            <h2>Carros em destaque</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-slide" data-ride="carousel" id="destaque-carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active d-flex align-items-end">
                                <img src="img/gol.png" class="">
                            </div>
                            
                        </div>

                        <button class="carousel-control-prev" type="button" data-target="#destaque-carousel" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#destaque-carousel" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </section><!--fim carros destques-->

    <section id="depoimento" class="d-flex">
        <div class="container text-center">
            <h2>depoimentos de nossos clientes</h2>
            <div class="row">
                
                <div class="col-md-4 text-left">
                    <div class="depoimento-caixa ">
                        <div class="imagens-depoimento">
                            <img src="img/aspas-laranjar-300x300.png" width="100" class="aspa">
                            <img src="img/pesso1.jpg" class=" rosto">
                        </div>
                        <div class="depoimento-texto text-justify">
                            <h3>Laís Marques</h3>
                            <span>Cliente da Moove</span>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A incidunt amet doloribus labore optio expedita eius suscipit sed error, nostrum rerum magni veritatis aliquid? Ullam officiis officia inventore eos unde?</p>
                   
                        </div>
                    </div>  
                </div>
                <div class="col-md-4 text-left">
                    <div class="depoimento-caixa">
                        <div class="imagens-depoimento">
                            <img src="img/aspas-laranjar-300x300.png" width="100" class="aspa">
                            <img src="img/pessoa2.jpg" class=" rosto">
                        </div>
                        <div class="depoimento-texto text-justify">
                            <h3>Feliphe Ferreira</h3>
                            <span>Cliente da Moove</span>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A incidunt amet doloribus labore optio expedita eius suscipit sed error, nostrum rerum magni veritatis aliquid? Ullam officiis officia inventore eos unde?</p>
               
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-left">
                    <div class="depoimento-caixa">
                        <div class="imagens-depoimento">
                            <img src="img/aspas-laranjar-300x300.png" width="100" class="aspa">
                            <img src="img/pessoa3.JPG" class=" rosto">
                        </div>
                        <div class="depoimento-texto text-justify">
                            <h3>Lucia Nonato</h3>
                            <span>Cliente da Moove</span>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A incidunt amet doloribus labore optio expedita eius suscipit sed error, nostrum rerum magni veritatis aliquid? Ullam officiis officia inventore eos unde?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>