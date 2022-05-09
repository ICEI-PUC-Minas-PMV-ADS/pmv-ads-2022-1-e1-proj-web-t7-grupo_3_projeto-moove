<?php
    include_once('navbar.html');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src='bootstrap.min.js'></script>
        <title>Locar carro</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
            body{
                background-image: url('img/imagem2.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                font-family: Arial, Helvetica, sans-serif;
                
            }
            form{
                margin-top: 10%;
            }
            label{
                font-size: 20px;
            }

        </style>
    </head>
<body>
    <!--início do formulario-->
    <form action="funcionalidades/alugarCarro.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <label class="form-label">Modelo:</label>
                    <input class="form-control" type="text" name="modelo">
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-2">
                    <label class="form-label">Ano:</label>
                    <select class="form-control" name="ano" style="width: 100px;">
                    <?php for($i=2000;$i<=2022;$i++){ ?><option value="<?php echo $i ?>"><?php echo $i; ?></option><?php } ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Motor:</label>
                    <select class="form-control" name="motor" style="width: 100px;">
                        <option value="10">1.0</option>
                        <option value="14">1.4</option>
                        <option value="16">1.6</option>
                        <option value="20">2.0</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Kilometragem</label>
                    <input class="form-control" type="number" name="km">
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <label class="form-label">Cor:</label>
                    <input class="form-control" type="text" name="cor">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Câmbio:</label>
                    <select class="form-control" name="cambio">
                        <option value="manual">Manual</option>
                        <option value="automatico">Automatico</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <label class="form-label">Combustivel</label>
                    <select class="form-control" name="combustivel">
                        <option value="flex">Flex</option>
                        <option value="gasolina">Gasolina</option>
                        <option value="alcool">Alcool</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Formato</label>
                    <select class="form-control" name="formato">
                        <option value="hatch">Hatch</option>
                        <option value="sedan">Sedan</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-6" style="margin-top: 20px;">
                    <input type="file" name="arquivo">
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top: 20px;">
                <div class="col-md-1">
                    <button type="submit" class="btn btn-success" name="cadastrar">Cadastrar</button>
                </div>
            </div>
        </div>
        
    </form>
    <!--Final do formulario-->
</body>
</html>