<?php

    include('class.php');

    /* Primeiro instanciamento */
    $instancia = new Exemplo;
    
    #$instancia->var1 = 'Variável local, não vai funcionar';    
    $instancia->var2 = '<br/>Variável pública, agora deve funcionar';

    #$instancia->metodo1(); //Não funciona porque é privada.
    //Variáveis e método privados estão disponíveis apenas dentro da classe.
    //Você não criou a classe, você instanciou ela. Ela foi criada no outro arquivo.
    //A função das classes é justamente essa: um modelo que pode ser "clonado = instanciado" para uso infinito.
    $instancia->metodo2();
    echo $instancia->var2;

    /* Segundo instanciamento */
    $instancia1 = new Exemplo;
    $instancia1->var2 = '<br/>Mesma variável, só que com conteúdo diferente';
    echo '<br/>';
    $instancia1->metodo2();
    echo $instancia1->var2;
    /* Consegue perceber o poder disso? Você pode, ao criar uma classe, deixar uma variável totalmente dedicada a receber um valor de fora. Assim, o usuário entra com essa informação em um input, por exemplo, ou um programdor coloca de acordo com a necessidade dele, e então, através dessa variável que você deixou em sua classe, você armazena essa informação para que ela seja usada no script que você criou dentro da própria clase. É como dizer "mano, toma aqui esse pc, a única coisa que você precisa fazer para ele funcionar é colocar a placa de vídeo, o resto já está montado". */

    /* Static */
    // Não entendi a utilidade disso, o cara é muito ruim pra explicar. Mas consegui perceber que é uma forma de usar métodos e variáveis de uma classe sem tem que instanciá-la, ou seja, chamando-a diretamente. 
    //UPDATE-Agora, depois de um tempo que escrevi o paragráfo acima, consegui presenciar um caso que me faz ter uma noção da utilidade. Serve mais para dar o poder de preferências para o usuário. Por exemplo, na hora que o usuário de um app preferir o modo noturno, coloco um botão onde ele clica e esse método static é inserido. Nada precisa de fato mudar no meu código, mas a forma como o resultado é exibido fica diferente. É uma questão de preferência.
    echo '<br/>';
    echo Exemplo::metodo3();
    echo '<br/>';
    echo $instancia1->metodo3();
    echo '<br/>';
    //$instancia1->var3 = 'static'; //Não funciona porque o valor definido la na classe é estático.       
    //echo $instancia1->var3; //Não funciona porque o valor definido la na classe é estático.
    Exemplo::$var3 = 'Valor da classe definido fora do ambito local';
    //Agora entendi mais ou menos. É como escrever dentro da classe, e não fazer o instanciamento para uso fora da classe. Perde a característica programação orientada a objetos.
    //UPDATE. Static torna impossível trocar o valor da propriedade. Se eu usa-se "Exemplo::variavel; = avalaldlçad a" eu poderia simplesmente alterar o valor caso não houvesse static declarado na classe, porque "::" é o mesmo que alterar direto na classe. Agora, se eu coloca-se static e essa variável já tivesse valor declarado, ainda que usa-se "::", não poderia alterá-la. 
    echo Exemplo::$var3;

    /* Mini Script Orientado a Objetos */

    $instancia1->pegarValor('Lucas');
    echo '<hr>';
    echo $instancia1->escreverValor();












?>

