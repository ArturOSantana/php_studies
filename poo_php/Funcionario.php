<?php 
Class Funcionario{
    private $nome;
    private $idade;
    private $departamento;
    private $salario;

    public function setCriarFuncionario($name,$age,$dept,$salary){
        $this->nome = $name;
        $this->idade = $age;
        $this->departamento = $dept;
        $this->salario = $salary;
        }
    public function getMostrarFuncionario(){
        echo $this->nome . " " . $this->idade . " " . $this->departamento ." " . $this->salario;
       
       
    }


}
?>