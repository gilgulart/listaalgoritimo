<?php 
class Worker{
    var $worker ;
    private $wage ;
    
    public function __construct($worker,$wage) {
        $this->worker = $worker ;
        $this->wage = $wage ;
    }
    public function getWage(){
        return $this -> wage ;
    }

    public function menssage(){
     if ($this-> worker === "Maria do Carmo"){ 
        echo "<p> Nome do Funcionário: Maria do Carmo</p><p> Salário: R\$ " . number_format($this-> wage, 2, ',','.') . "</p><p> O funcionário Maria do Carmo tem um salário de R\$ " . number_format($this->wage, 2,',','.') . " em Abril </p>" ;

     }
    }
    
}
?>