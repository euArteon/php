<?php
    class Exemplo{
        private $var1;
        public $var2;
        public static $var3;
        public $var4;

        private function metodo1(){
            echo 'método 1';
        }

        public function metodo2(){
            echo 'método 2';
        }

        public static function metodo3(){
            echo 'método 3 - via método estatico';
        }

        public function pegarValor($var1){
            $this->var4 = $var1;
        }

        public function escreverValor(){
            return $this->var4;
        }
    }










?>