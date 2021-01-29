<?php

    function myAutoLoad($class){
        if(file_exists('classes/'.$class.'.php')){
            echo 'Estaá funcionando';
        }
    }

    myAutoLoad();

?>