<?php   

    include('class1.php');
    include('class2.php');

    $exemplo1 = new sessao1\Class1;
    $exemplo2 = new sessao2\Class2;

    //Também é possível usar o 'use', o que tornará dispensado o uso de especificação na chamada da classe.

    use sessao1\Class1; //Da pra fazer a mesma coisa dentro das classes;
    use sessao2\Class2; //Da pra fazer a mesma coisa dentro das classes;

    $exemplo1 = new Class1;
    $exemplo2 = new Class2;
    //Funciona da memsa forma.

    use sessao1\Class1 as classe_one; //Posso atribuir apelidos próprios para as classes.
    use sessao2\Class2 as classe_two; //Basta adicionar o 'as' e o apelido.

    $exemplo1 = new classe_one;
    $exemplo2 = new classe_two;

?>
