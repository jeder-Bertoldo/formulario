<?php
if(isset($_POST['submit'])){
/*    print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('Genero: ' . $_POST['genero']);
    print_r('<br>');
    print_r('Data nascimento: ' . $_POST['data_nascimento']);
    print_r('<br>');
    print_r('Cidade: ' . $_POST['cidade']);
    print_r('<br>');
    print_r('Estado: ' . $_POST['estado']);
    print_r('<br>');
    print_r('Endereço: ' . $_POST['endereco']);
}
*/
include_once ('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$data_nasc = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco =  $_POST['endereco'];

$conect = mysqli_query($conexao, "INSERT INTO usuario (nome, email, telefone, sexo, data_nasc, cidade, estado, endereco)
 VALUES('$nome','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco')");

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Formulario Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name ="nome" class="inputUser" id="nome" required>
                    <label for="nome" class="labelInput">Nome completo</label> 
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name ="email" class="inputUser" id="email" required>
                    <label for="email" class="labelInput">email</label> 
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name ="telefone" class="inputUser" id="telefone" required>
                    <label for="telefone" class="labelInput">telefone</label> 
                </div>
                
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento"> <b>Data de nascimento:</b></label> 
                    <input type="date" name ="data_nascimento" id="data_nascimento" required>
                </div>
                <br><br>
                <div class="inputBox">
                     <input type="text" name ="cidade" class="inputUser" id="cidade" required>
                     <label for="cidade" class="labelInput">Cidade</label>
                 </div>
                 <br><br>
                <div class="inputBox">
                        <input type="text" name ="estado" class="inputUser" id="estado" required>
                        <label for="estado" class="labelInput">Estado</label> 
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name ="endereco" class="inputUser" id="endereco" required>
                    <label for="endereco" class="labelInput">Endereço</label> 
                 </div>
                 <br><br>
                 <input type="submit" name="submit" id="submit">

            
                
            </fieldset>
        
        </form>
    </div>
</body>
</html>