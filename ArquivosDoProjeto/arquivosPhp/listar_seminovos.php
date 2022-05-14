<?php
    include_once('navbar.html');
    include_once('conexao.php');

    $stmt = $pdo->query('SELECT * FROM carros_seminovos');


?>
<html>
<head>
    <title>Seminovos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src='bootstrap.min.js'></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            background-color: #f2f2f2;
        }

        #principal{
            margin-top: 120px;
            margin-bottom: 80px;
            
        }
        .card{
            margin-top: 20px;
            
        }
        .card-img-top{
            height: 180px;
            
        }
        #icone{
            width: 20px;
            margin: 0px 10px 8px 0px;
        }
        .card:hover{
            border: 1px solid #ffc320;
        }


    </style>
</head>
<body>
    <section id="principal">
        <div class="container">
            <h2>Selecionados para você</h2>
            <div class="row">
                <!-- Laço de repetição para listar os carros -->
                <?php foreach($stmt as $row){ ?>
                <div class="col-md-3">
                    <div class="card" style="width: 17rem;">
                        <a href="#"><img class="card-img-top" src="<?php echo $row['foto_carro']; ?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['modelo'],' '; echo $row['motor'][0] . '.' . $row['motor'][1]?></h5>
                            <h6 class="card-title"><img src="img/km.png" id='icone'><?php echo $row['kilometragem'];?><img src="img/calendario.png" id="icone" style="margin-left: 30px"><?php echo $row['ano']; ?></h6>
                            <a href="#" class="btn btn-warning">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

</body>
</html>