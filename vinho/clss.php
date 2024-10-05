<?php
abstract class Bebida {
   private $nome;
   private $preco;
   
   public function __construct( $nome,$preco) {
       $this->tipo = $tipo;
       $this->safra = $safra;
   }
 

   public function setnome() {
       return $this->nome;
   }

   public function getpreco() {
       return $this->preco;
   }
 
   public function mostrarbebida() {
 
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