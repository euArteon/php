<?php
   
namespace sessao2;

class Class2{
        public function __construct(){
            new \sessao1\Class1();
            echo '<br>classe 2 instanciada<hr>';
        }
    }

?>