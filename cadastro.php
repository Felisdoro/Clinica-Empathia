<?php

    if(isset($_POST['submit']))
    {
        print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('RG: ' . $_POST['rg']);
        print_r('<br>');
        print_r('CPF: ' . $_POST['cpf']);
        print_r('<br>');
        print_r('Sexo: ' . $_POST['genero']);
        print_r('<br>');
        print_r('Data de Nascimento: ' . $_POST['data_nasc']);
        print_r('E-mail: ' . $_POST['e-mail']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone]);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: '. $_POST['state']);
        print_r('<br>');
        print_r('Bairro: ' . $_POST['bairro']);
        print_r('<br>');
        print_r('Logradouro: ' . $_POST['logradouro']);
        print_r('<br>');
        print_r('Complemento: ' . $_POST['complemento']);
        print_r('<br>');
        print_r('CEP: ' . $_POST['cep']);
    }

    include_once('config.php');

    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nasc'];
    $email= $_POST['e-mail'];
    $telefone = $_POST['telefone];
    $cidade = $_POST['cidade'];
    $estado = $_POST['state'];
    $bairro = $_POST['bairro'];
    $logradouro = $_POST['logradouro'];
    $complemento = $_POST['complemento'];
    $cep = $_POST['cep'];

    $result = mysqli_querry($conexao, "INSERT INTO" usuarios(nome,rg,cpf,sexo,data_nasc,email,telefone,cidade,state,bairro,logradouro,complemento,cep) VALUES ('$nome','$rg','$cpf','$sexo','$data_nasc','$email','$telefone','$cidade','$estado','$bairro','$logradouro','$complemento'$cep'));

?>
 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Empathia</title>


    <style>
        body{
            font-family: Arial;
            background-image: linear-gradient(to right, rgb(56,	22,	152), rgb(0, 0, 38));
        }
        .box{
            color: white;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 35%;
        }
        fieldset{
            border: 3px solid rgb(255, 255, 255);
        }
        legend{
            border: 2px solid white;
            padding: 10px;
            text-align: center;
            background-color: rgb(56,	22,	152);;
            border-radius: 8px;
        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 1px;
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 13px;
            color: white;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(56,	22,	152), rgb(0, 0, 38));
            width:100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgba(57, 22, 152, 0.700), rgb(0, 0, 20));
        }
    </style>


</head>

<body>
  <div class="box">
    <form action="formulario.php" method="post">
        <fieldset>
            <legend><b>Formulário de Cadastro</b></legend>
            <br>
            <div class="inputbox">
                <input type="text" name="nome" id="nome" class="inputUser" required maxlength="100">
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="rg" id="rg" class="inputUser" required maxlength="9">
                <label for="nome"  class="labelInput">RG</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="cpf" id="cpf" class="inputUser" required maxlength="11">
                <label for="nome" class="labelInput">CPF</label>
            </div>
            <br>
            <p>Sexo:</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label><br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label><br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>

                <label for="data_nascimento"><b>Data de Nascimento</b></label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>           
            
            <br><br>
            <div class="inputbox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required maxlength="11">
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="email" id="email" class="inputUser" required maxlength="100">
                <label for="email" class="labelInput">Email</label>
            </div><br><br>
            <div class="inputbox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required maxlength="100">
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br>
            <p>Estado:</p>
           <select name="state">
            <option value="1"></option>
            <option value="2">AC</option>
            <option value="3">AL</option>
            <option value="4">AP</option>
            <option value="5">AM</option>
            <option value="6">BA</option>
            <option value="7">CE</option>
            <option value="8">DF</option>
            <option value="9">ES</option>
            <option value="10">GO</option>
            <option value="11">MA</option>
            <option value="12">MT</option>
            <option value="13">MS</option>
            <option value="14">MG</option>
            <option value="15">PA</option>
            <option value="16">PB</option>
            <option value="17">PR</option>
            <option value="18">PE</option>
            <option value="19">PI</option>
            <option value="20">RJ</option>
            <option value="21">RN</option>
            <option value="22">RS</option>
            <option value="23">RO</option>
            <option value="24">RR</option>
            <option value="25">SC</option>
            <option value="26">SP</option>
            <option value="27">SE</option>
            <option value="28">TO</option>
        </select>
        <br><br><br>
            <div class="inputbox">                
                <input type="text" name="bairro" id="bairro" class="inputUser" required maxlength="100">
                <label for="bairro" class="labelInput">Bairro</label>
            </div>
            <br><br>
            <div class="inputbox">                
                <input type="text" name="logradouro" id="logradouro" class="inputUser" maxlength="100">
                <label for="logradouro" class="labelInput">Logradouro</label>
            </div>
            <br><br>
            <div class="inputbox">                
                <input type="text" name="complemento" id="complemento" class="inputUser" maxlength="100">
                <label for="complemento" class="labelInput">Complemento</label>
            </div>
            <br><br>
            <div class="inputbox">                
                <input type="text" name="cep" id="cep" class="inputUser" required maxlength="10">
                <label for="cep" class="labelInput">CEP</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">



        </fieldset>
    </form>
  </div>
</body>