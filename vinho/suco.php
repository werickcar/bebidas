<?php
class Suco {
private $sabor;
   
   public function __construct($sabor) {

   }

       public function setsabor($sabor){
        $this->sabor = $sabor;
       }
 
   public function getsabor() {
       return $this->sabor;
   }

   public function mostrarbebida() {
       return "Nome: $this->nome, Preço: $this->preco, sabor: $this->sabor,";
   }
 
   public function verificarPreco() {
       if ($this->preco < 25) {
           return true;
       } else {
           return false;
       }
   }
}
?>