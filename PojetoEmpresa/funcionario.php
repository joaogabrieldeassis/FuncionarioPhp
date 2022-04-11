<?php
class Funcionario
{
    private $nome;
    private $cidade;
    private $salarioPorHora=0.0;
    private $horasTrabalhadas=0;
    private $salarioFinal=0;
    //gets e sets Nome
    public function getNome()
    {
        return $this->$nome;

    }
    public function setNome($receberNome)
    {
        $this->$nome = $receberNome;
    }
    //get set Cidade
    public function getCidade()
    {
       return $this->$cidade;
    }
    public function setCidade($receberCidade)
    {
        $this->$cidade = $receberCidade;
    }
    //get e sets Salario por hora
    public function getSalarioPorHora()
    {
        return $this->$salarioPorHora;
    }
    public function setSalarioPorHora($receberSalarioPorHora)
    {
        $this->$salarioPorHora = $receberSalarioPorHora;
    }
    //get e set das horas trabalhadas
    public function getHorasTrabalhadas()
    {
       return $this->$horasTrabalhadas;
    }
    public function setHorasTrabalhadas($receberHorasTrbalhadas)
    {
        $this->$horasTrabalhadas = $receberHorasTrbalhadas;
    }
    //get e set Salario Final
    public function getSalarioFinal()
    {
        return $this->$salarioFinal;
    }
    public function setSalarioFinal($receberSalarioFinal)
    {
        $this->$salarioFinal = $receberSalarioFinal;
    }
    //Metodos
    public function CalcularSalario()
    {
        $this->$salarioFinal = $this->$horasTrabalhadas * $this->$salarioPorHora * 30;
        return $this->$salarioFinal;
    }
    public function MostrarDados()
    {
        "Seu nome é : ".$nome. " " "Sua cidade é :" .$cidade. " " "Seu salario por horas trabalhadas são: " .$horasTrabalhadas.
        " " "Suas horas trabalhadas são: " .$horasTrabalhadas. " " " E por fim seu salario final é :".$salarioFinal.
    }
    public function DarAumentoAoFuncionario($aumento)
    {
        $this->$salarioFinal+=$aumento;
        return $this->$salarioFinal;
    }
    
}
?>