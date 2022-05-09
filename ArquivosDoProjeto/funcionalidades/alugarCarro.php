<?php
    include_once("../conexao.php");
    
    if(isset($_POST['cadastrar'])){
        $formatos = array('PNG','jpeg','jpg','gif','pdf');
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        if(in_array($extensao, $formatos)){
            $pasta = '../img_seminovos/';
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novo_nome = uniqid().".$extensao";
    
            if(move_uploaded_file($temporario, $pasta.$novo_nome)){
                echo 'Upload feito com sucesso!';
                
            }else
                {
                echo 'Erro, erro ao realizar Upload';
            }
    
            }else{
            echo 'Não existe este formato no array';
            }
        }else{
            $novo_nome = 'sem-foto.jpg';
        }

    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $motor = $_POST['motor'];
    $km = $_POST['km'];
    $cor = $_POST['cor'];
    $cambio = $_POST['cambio'];
    $combustivel = $_POST['combustivel'];
    $formato = $_POST['formato'];



    $pdo->query("INSERT INTO carros_seminovos(modelo, ano, motor, kilometragem, cor, cambio, combustivel, formato, foto_carro) VALUES ('$modelo','$ano','$motor','$km','$cor','$cambio','$combustivel','$formato', 'img_seminovos/$novo_nome')");



?>