<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício PHP </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container backgroundFormulario">
        <form action="" method="post">
            
            <label for="">Nome: </label><br>
            <input type="text" id="nome" name="nome" value=""><br>
            <label for="">Cidade: </label><br>
            <input type="text" id="cidade" name="cidade" value=""><br>
            <label for="">Salário por Hora: </label><br>
            <input type="text" name="salarioPorHora" id="salarioPorHora" min="0" step=".01"><br>
            <label for="">Horas Trabalhadas: </label><br>
            <input type="text" name="horasTrabalhadas" id="horasTrabalhadas" min="0" step=".01"><br>
            <label for="">Aumento: </label><br>
            <input type="text" name="aumento" id="aumento" min="0" step=".01"><br><br>

            <div class="container">
                <input type="submit" class="btns" value="Cadastrar" name="btnCadastrar">
                <input type="submit" class="btns" value="Calcular Salário" name="btnCalcular">
                <input type="submit" class="btns" value="Mostrar Dados" name="btnMostrar">
                <input type="submit" class="btns" value="Aumento Salarial" name="btnAumentar">
            </div>
            
        </form>
    </div>
    
</body>
</html>


<?php 
    require_once "funcionario.php";
    $funcionarioRecebe = new Funcionario();
    
    if(isset($_POST["btnCadastrar"]))
    {
        $funcionarioRecebe->setNome($_POST['nome']);
        $funcionarioRecebe->setCidade($_POST['cidade']);
        $funcionarioRecebe->setSalarioPorHora($_POST['salarioPorHora']);
        $funcionarioRecebe->setHorasTrabalhadas($_POST['horasTrabalhadas']);
        $funcionarioRecebe->setSalarioFinal($funcionarioRecebe->CalcularSalario());

        echo "<div class='container'><h3>Usuário Cadastrado com sucesso</h3><div>";
    }

    if(isset($_POST["btnCalcular"]))
    {
        $funcionarioRecebe->setSalarioPorHora($_POST['salarioPorHora']);
        $funcionarioRecebe->setHorasTrabalhadas($_POST['horasTrabalhadas']);
        $salario = $funcionarioRecebe->CalcularSalario();
        echo "<div class='container'><h3>Salário do Funcionário: <span id='salarioColor'> $salario</span></h3></div>";
    }

    if(isset($_POST["btnMostrar"]))
    {
        $funcionarioRecebe->setNome($_POST['nome']);
        $funcionarioRecebe->setCidade($_POST['cidade']);
        $funcionarioRecebe->setSalarioPorHora($_POST['salarioPorHora']);
        $funcionarioRecebe->setHorasTrabalhadas($_POST['horasTrabalhadas']);
        $funcionarioRecebe->setSalarioFinal($funcionarioRecebe->CalcularSalario());
        $dados = $funcionarioRecebe->MostrarDados();
        echo "<div class='container'><h3>$dados<h3><div>";
    }

    if(isset($_POST["btnAumentar"]))
    {
        $funcionarioRecebe->setSalarioPorHora($_POST['salarioPorHora']);
        $funcionarioRecebe->setHorasTrabalhadas($_POST['horasTrabalhadas']);
        $funcionarioRecebe->setSalarioFinal($funcionarioRecebe->CalcularSalario());
        $aumento = $funcionarioRecebe->DarAumentoAoFuncionario($_POST['aumento']);
        echo "<div class='container'><h3>Salário com aumento: <span id='salarioColor'>R$  $aumento foi o aumento dado</span><h3><div>";
    }

?>