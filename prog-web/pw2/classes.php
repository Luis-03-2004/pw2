<?php 
class Carro {
    public $cor ;
    public $modelo ;
    public function __construct ( $cor , $modelo ) {
    $this -> cor = $cor ;
    $this -> modelo = $modelo ;
    }
    public function mensagem () {
    return " Carro de cor " . $this -> cor . " e modelo " . $this -> modelo ;
    }
    }
    $carro1 = new Carro (" verde " , " Ford ");
    echo $carro1 -> mensagem ();

?>