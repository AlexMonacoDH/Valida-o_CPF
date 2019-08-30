<?php

//Importando dependências
require(__DIR__.'/vendor/autoload.php');

//Declaração de uso da classe
use \Bissolli\ValidadorCpfCnpj\CPF;

// Não importa se já vem formatado ou não
//$cpf = new \Bissolli\ValidadorCpfCnpj\CPF('176.964.038-00');



if($_POST){
    //Criando objeto da classe CPF
    $cpf = new CPF($_POST['vCPF']);

    // Verifica se é um número válido de CPF
    // Retorna true/false
    if($cpf->isValid()){
        echo('CPF é válido!!!');
    }
    else{
        echo 'INVÁLIDO!!!';
    }
    $padrao = $_POST['vCPF'];

}
else{
    $padrao = '';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Validação CPF</title>
</head>
<body>
    
<div class="container p-5">
    <form action="" method="post">
    <div class="form-group bg-light p-5 border border-dark">
        <div class="form-group" id="submit">
            <label for="vCPF"><input value="<?= $padrao ?>" class="" type="text" id="vCPF" name="vCPF">Digite CPF para validar:</label>
            <button class="btn btn-primary form-control" type="submit">Validar</button>
        </div>
    </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
