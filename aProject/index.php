<?php

    $s = '<br/>';

/* Criando variáveis e mudando o valor dela logo em seguida */
    $minhavariavel = 'LUCAS';
    echo 'Meu nome é ';
    echo $minhavariavel;
    $minhavariavel = 'João, porque to afim de mudar de nome';
    echo '<br />Meu nome é ';
    echo $minhavariavel;
    
/* Concatenação em PHP */
    $minhavariavel = 'Ricardão (que pega a sua mulher e deita no seu colchão)';
    echo '<br/>Agora meu nome é '.$minhavariavel.' porque eu quero caralho';
// É diferente do .js por não usar o sinal de "+", e sim o de ponto "."
// Maaaas, se usar aspas duplas, o php entende a variável mesmo dentro da string. Tem que tomar cuidado, se for usar aspas duplas, principalmente pra gerar html dinâmico.

/* Constantes */
    define('nome', 'Lucas');
    define('ajax', 'new XMLHttpRequest');
// É bem curiosa a forma de se declarar constantes em php. Usamos "define('nome-da-constante','valor-da-constante');
// Acho melhor tomar bastante cuidado com isso, porque "define();" parece que estou chamando uma função.

/* Arrays */
// Existem 5 formas de declarar arrays em PHP.    
    //1
    echo '<br/>';    
    $nomearray1 = array('Lucas','Eduardo','João','Ricardão');
    echo $nomearray1[0]; //Seletor
    
    //2 
    echo '<br/>';
    $nomearray2[0] = 'Lucas';
    $nomearray2[1] = 'Eduardo';
    $nomearray2[2] = 'João';
    $nomearray2[3] = 'Ricardão';
    echo $nomearray2[1]; //Seletor

    //3
    echo '<br/>';
    $nomearray3['nome'] = 'Lucas';
    $nomearray3['sobrenome'] = 'Eduardo';
    echo $nomearray3['sobrenome']; //Selector

    //4
    echo '<br/>';
    $nomearray4 = ['Lucas','Eduardo','João','Ricardão'];
    echo $nomearray4[2]; //Seletor

    //5 Multidimensionais
    echo '<br/>'.'Array Muldimensional';
    $nomearray5 = array(array('Lucas','Eduardo'), array('Vieira','Oliveira'));
    echo '<br/>';
    echo $nomearray5[0][0].' ';
    echo $nomearray5[0][1].' ';
    echo $nomearray5[1][0].' ';
    echo $nomearray5[1][1].' ';
    echo '<br/>';
    echo 'Fim Array Multidimensional';
/* Looping - Laços de Repetição */

    // for
    for($i=0; $i < 10; $i++){
        echo '<br/>'.$i;
    }

    //For com função encapsulada em uma variável    
    echo '<br/>'.'here';
    $total1 = count($nomearray4);
    for ($i= 0; $i < $total1; $i++){
        echo '<br/>'.$nomearray4[$i]; // Você tem que colocar na chamada o array, e não o encapsulamento do array. O encapsulamento serve apenas para medir o tamnho.
    }

    //while 
    $contador = 0;
    while ($contador < 10){        
        // Se colocar aqui mostra até o 10.
        echo '<br/>'.$contador;
        $contador++; // Aqui só mostra até o 9.
    }// O while é exatamente a mesma porra que o for, só que tem um syntax mais extensa e não tem uma variável dedicada, como o for tem. A variável tem que ser criada antes.
    
    //do   
    $contador1 = 0;
    do{
        echo '<br/>'.$contador1;
    } while($contador1 == 2); // Mesmo sabendo que contador1 não é igual a 2, ele executou o código. Diferente do while puro, que não iria executar nada.

/* Foreach */
    $array1 = array('Lucas' => 'Eduardo','João','Ricardão'); // O sinal "=>" vira a nominação do item do array. Sem aquilo, Lucas é um item do array. Com aquilo, 'Lucas' se torna apnas a 'numeração' do valor 'Eduardo';
    // Também é possível setar chave para o item do array assim: "$array1[0]['chave1'] = 'Lucas';
    foreach ($array1 as $key => $value){
        echo '<br/>';
        echo $key.' => ';
        echo $value;
    } //foreach é apenas uma forma de percorrer items de arrays.


/* Sleep */
    //sleep(4);
    echo '<br/>'.'Mensagem escrita com atraso de 4 segundos'; 
    // É bem simples. Faz com que o servidor aguarde 4 segundos para emitir a resposta.

/* Die */
    $carro = 'ka';
    if ($carro == 'ka'){ // Troque == por!= e veja a mágica acontecer.
        echo '<br/>'.'Hello World';
    }else{
        die('<br/>'.'O Script parou de ser executado');
    }
    echo '<br/>'.'Isso não deve aparecer caso a função die tenha matado o código';
    //É preciso muito cuidado ao usar die, porque ele para a execução do script, e tudo que vier depois dele não irá funcionar.


/* Fuções nativas */
// Algumas funções precisam de parâmetros. Elas nativamente possuem parâmetros obrigatórios, como é o caso do for e foreach.

    //Data
    date_default_timezone_set('America/Sao_Paulo'); //Pra definir o fusohorário mundial.
    $data = date('d/m/Y H:i:s'); //Como dito, algumas funções precisam e possuem parâmetros obrigatórios. Data é um desses casos. Esses parâmetros definem o formato das horas. Todos os paramêtros dessa função estão disponível na documentação do php.net.
    echo '<br/>'.$data;

    //Adicionar tempo extra na data
    $data1 = date('d/m/Y H:i:s',time()+(60*10)); //Time() pega o horário atual em segundos e possilita o acrescimo com (60*10);
    echo '<br/>'.$data1;

/* Include */   
// Muito útil para tornar o carregamento do seu site dinâmico.
    $titulo_site = 'Título do meu Site';
    include('header.php');
?>
    <h2>Meu conteúdo da home</h2>
<?php
    include('footer.php');
?>

<?php
/* Manipulação de String */
    //Recorte de String
    $string1 = 'Nada a declarar meu senhor';
    echo substr($string1,0,10); //Variável, "0" = Onde começar, "10" = Onde terminar.

    //Explode
    $string2 = 'Lucas Eduardo Vieira Oliveira';
    $exploded = explode(' ',$string2);// Explode quebra onde houver espaço e transforma em array;
    echo '<br/>';
    print_r($exploded); // print_r serve para printar arrays.

    //Implode
    $exploded = implode(' ',$exploded); //Implode pega o array, junta ele em uma string, colocando entre os items o que você quiser. No caso, espaço.
    echo '<br/>'.$exploded;

    //strip_tags();
    echo '<br/>';
    $string3 = '<h1>Lucas Eduardo</h1>';
    echo strip_tags($string3); //remove toda tag html do texto fornecido pelo usuário.

    //htmlentities('');
    echo '<br/>';
    echo htmlentities('<h1>Lucas Eduardo</h1>'); //Faz com que o navegador ignore o html e ainda permita sua exibição como string.


/* Manipulando Arrays */
    //array_merge();
    $result1 = array_merge($nomearray1,$nomearray2); //Junta 2 arrays;
    echo $s;
    print_r($result1);

    //array_intersect_key();
    $result2 = array_intersect_key($nomearray1,$nomearray2);//Mostra apenas os items dos arrays com chaves em comum;
    echo $s;
    print_r($result2);

    //array_map();
    $array2 = ['<p>Lucas</p>','Eduardo','<h1>Vieira</h1>'];
    echo $s;
    print_r(array_map('strip_tags',$array2));//Array map serve para aplicar uma função em cada item do array. Essa função pode ser nativa ou criada. Em ambos os casos, a função precisa já estar feita anteriormente e a chamada se da como string 'aplicarQualquerCoisa'.

/* Formulários, GET e POST */
    //Estudo desenvolvido no arquivo form.php;


/* Sessions e Cookies */

    //Session
    session_start(); // Função obrigatória. Habilita o processo de armazenamento.
    $_SESSION['nome'] = 'Lucas';
    $_SESSION['idade'] = '23';
    echo '<br/>'.'Variável armazenada via session'.'<br/>';
    echo $_SESSION['nome'];

    if(isset($_SESSION['nome'])){ // Verificando a existência de uma session.
        echo '<br/>'.'Esssa sessão existe';
    } else{
        echo '<br/>'.'Esssa sessão NÃO existe';
    }
    
    $_SESSION['idade'] = ''; // Esvaziando uma session.
    echo '<br/>'.$_SESSION['idade'].'Valor vazio confirmado';


    unset($_SESSION['idade']); //Apagando uma session.
    
    if(isset($_SESSION['idade'])){
        echo '<br/>A session ainda exsite';
    } else {
        echo '<br/>A session foi APAGADA';
    }

    session_destroy(); //Apagando todas as session feitas.
    
    if(isset($_SESSION['nome'], $_SESSION['idade'])){
        echo '<br/>As sessions não foram apagadas';
    } else {
        echo '<br/>Todas as sessions foram apagadas';
    }
    
    //Sessions em arrays
    $dados_pessoa = $_SESSION['pessoa'] = array('nome' => 'Lucas', 'sobrenome' => 'Eduardo');
    
    foreach ($dados_pessoa as $key => $value) {
        echo '<hr>'.$key.' => ';
        echo $value;
    }


    // Cookies
    // session_start(); também é obrigatório para cookies.
    setcookie('cidade', 'Cuiabá', time()+(60*60*24), '/');
    // setcookie precisa de 4 parâmetros obrigatórios
        //nome do cookie = cidade;
        //valor do cookie = cuiabá;
        //tempo para que o cookie expire = time();
            //time(); pega o tempo atual. o "+(60*60*24) adiciona mais 24 horas no tempo atual.
        //Permissão para uso do cookie = '/' "a barra significa que qualquer o cookie pode ser usado por qualquer site. Se não for informado, servirá apenas para o site que instanciou.
    echo '<hr>'.$_COOKIE['cidade'];
    
    //Destruindo um cookie;
        // A única forma de destruiur um cookie é, ao invés de adicionar + 24horas no tempo, coloque - 24horas. Coloque um valor negativo e está resolvido.


/* Syntax Alternativa PHP */
    // Consiste em apenas trocar o colchetos para abertura e fechamento por ":" e "endfunção";

    $contador2 = 0;
    while($contador2 < 10):
        echo '<br/>'.'oi';
        $contador2++;
    endwhile;

/* Programação Orientada a Objetos */
    // Objeto
    #Uma pessoa pode ter diversos caracteríticas. Altura, peso, idade. Esses valores geralmente são armaneados em variáveis. Tratando-se de objetos, essas valores armazenos dentro de variáveis são chamados de atributos.
        /* 
        pessoa
        {
            $nome = 'Lucas';  //Atributo
            $altura = 1.83; ///Atributo
            $peso = '84'; //Atributo

            $comer = function(){
                echo 'estou comendo'; //Método
            }

            $correr = function ();{
                echo 'estou correndo'; //Método
            }          
        }       
        */

        class Pessoa{ //Se tratando de classes, a inicial (por recomendação) deve ser maiúscula.
            private $nome = 'Lucas'; //Private significa local.
            private $altura = '1.83'; //Disponível apenas no âmbito local.
            private $peso = '84kg';
        
            public function comer(){                 
                echo '<br/> estou comendo';
                $this->correr(); 
            }

            public function correr(){ 
                echo '<br/> estou correndo';
            }
        }
        //Tratando-se de objetos, a classe deve ser instanciada para que só então possa ser utilizada. Diferente de uma função ordinária, que basta chamá-la no algorítmo.
        //Instanciar significa que você deve armazenar a classe dentro de uma variável, juntamente com o operador 'new'.

        $pessoa = new Pessoa;
        $pessoa->comer();

/* Public, Private, Static */
    //Estudo desenvolvido na pasta pps;



/* Final Class, Heranças, Protected */

    final class Pai{
        public function daddyHello(){
            echo '<hr>';
            echo 'Olá, filha.';
        }
        public function daddyInherit(){
            echo '<hr>'.'Filha, você quer minha herança?';
        }
    }

    class Filha{ //Herdar nada mais é que colocar extends na frente do nome da classe para que ela possa herdar todas as propriedades de uma outra classe.
        //Para filha herdar de pai, use "class Filha extends Pai".
        //Mas isso não será possível caso a classe a ser herdada for declarada como "final class".
        public function daughterHello(){
            echo '<hr>';
            echo 'Olá, pai.';           
        }
        public function daughterResponse(){
            echo '<hr>';
            echo 'Pai, eu até quero, mas você vai precisar tirar esse "final class" da sua declaração';
        }    
    }

    class NewPai{
        public function newDaddyResponse(){
        echo '<hr>'.'Pronto, filha. Você já pode herdar de mim. Tente visualizar o valor que existe na minha conta bancária.';
        }
        public function daddyMoney(){
            echo '10 bilhões de reais.';
        }
    }

    class NewFilha extends NewPai{
        public function newDaughterResponse(){
            echo '<hr>'.'Prontinho, pai. Acho que já posso te herdar.';
        }
        public function daughterInherit(){
            echo '<hr>'.'Fui informada de que minha herança é de ';
        }
        //Apesar da herença, eu posso rescrever esse método herdado.
        public function daddyMoney(){
            parent::daddyMoney(); //Manterá o conteúdo original do método.
            echo '<br>'.'10 bilhões de reais, mas eu acho que deveria dividir esse valor com minhas irmãs';
            echo '<hr>';
        }
    }

    $daddy = new Pai;
    $daddy->daddyHello();

    $daughter = new Filha;
    $daughter->daughterHello();
    
    $daddy->daddyInherit();
    $daughter->daughterResponse();

    $newDaddy = new NewPai;
    $newDaughter = new NewFilha;

    $newDaddy->newDaddyResponse();
    $newDaughter->newDaughterResponse();
    $newDaughter->daughterInherit();
    $newDaughter->daddyMoney(); //E aqui está a herança funcionando. A função daddyMoney() foi declarada dentro da classe NewPai. Ainda assim, eu consegui chamá utilizando a instância de NewFilha, o que seria impossível caso NewPai fosse uma Final Class.

    //Protected
        //Nada mais é que tornar publica uma variável ou um método. Dúvido muito que seja só isso, com certeza há diferença entre public e protected, mas o que foi explicado é isso.



/* Abstract, Self e mais Conceitos */
    //Abstract
    //  é uma classe que pode ser apenas herdada. Isso significa que ela não pode ser instanciada.
    abstract class Abstrata{
        public function func1(){
            echo 'chamando função 1 da classe abstrata'.'<br/>';
        }

        abstract function func2(); //Não da pra criar funções abstratas em classes que não sejam abstratas.
    }

    class HerdeiraAbstrata extends Abstrata{
        public function func2(){//é obrigatório a chamada de uma Função static, ainda que não haja nada dentro, se não da erro.
            echo 'Função abstrata declarada na Herdeira';
         }
    }
    $herdAbs = new HerdeiraAbstrata;
    $herdAbs->func1();
    $herdAbs->func2();

    //self
    //  É apenas uma forma de referenciar-se a classe construtora no caso de querer acessar uma propriedade static, o que é impossível fazer com $this.

    class Exemplo0{
        public static function metStatic(){
            echo '<hr>Método estático';
        }

        public static function funcStatic(){
#           $this.metStatic(); //Não consigo usar o this porque metStatic é estática.
            self::metStatic(); //Agora eu posso porque self funciona para statics.
            Exemplo0::metStatic(); // Essa forma já foi vista anteriormente.
        }
    }

    $exemplo0 = new Exemplo0;
    $exemplo0->funcStatic();


/* Interface e Implements */
    //Interface
    //   Se comporta quase como um classe abstrat, mas difere-se pelo fato de que não pode criar atributos, apenas métodos, que devem ser obrigatoriamente declarados pelo herdeiro.
    //   Se comporta quase como uma function abstract. A diferença consiste em que no caso da interface algum paramêtro deve obrigatoriamente ser passado. Já no caso da abstrata, ela não pode ter um parâmetro.
    //  Interface e Abstract parecem ser bem úteis para desenvolver APIs, uma vez que exigem que o consumidor da API obrigatoriamente declare determinados métodos indispensáveis ao funcionamento da API.

    interface interface1{
        public function printarTexto($par1);
    }

    class Printar implements interface1{
        public function printarTexto($par1){
            echo $par1;
        }
    }

    $printar = new Printar;
    $printar->printarTexto('<hr>Texto inserido na invocação de uma interface');



/* Métodos Mágicos */
    //__construct
    //Serve para criar um metodo que não precisa ser chamado, basta o instanciamento da classe e esse metodo vai ser automaticamente disparado.
    //É um método que não precisa de nome, o próprio nome é construct.

    class Exemplo2{
        private $nome;
        private $idade;
        public function __construct($nome, $idade){//Esses parâmetros não são a mesma coisa que as variáveis criadas acima.
            $this->nome = $nome;
            $this->idade = $idade; 
        }

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }
    }

    $exemplo2 = new Exemplo2 ('Lucas',23); //Os parâmetros devem ser passados no instaciamento. 
    echo '<hr>'.$exemplo2->getNome();

/*  Compare com esse script.
// Primeiro é preciso criar uma função só para pegar o valor na variável1 e depois criar outra função para poder chamá-la com o valor salvo.
// Por que não deixar uma função construct que vai fazer esse trabalho automaticamente? Ai eu só preciso chamar o método com o valor já armazenado.
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

        public function pegarValor($var1){ ###//Essa função ta aqui só pra buscar o valor.
            $this->var4 = $var1;
        }

        public function escreverValor(){
            return $this->var4;
        }
    }
*/



/* Namespace e use */
    //O namespace cria diretório de acesso a determinados trechos do código de uma classe. Isso implica que, na hora de uso da classe, esse namespace deve ser especificado, caso contrário nada será encontrado. Funciona com a mesma lógica de diretórios de pastas do windows.

    #Exemplo sem namespace;

    class Exemplo3{
        public function __construct(){
            echo '<hr> classe 1 instanciada';
        }
    }

    class Exemplo4{
        public function __construct(){
            if(null !== new Exemplo3()){
                echo ' dentro da classe 2';
            }
            echo '<br>classe 2 instanciada<hr>';
        }
    }

    $exemplo3 = new Exemplo3;
    $exemplo4 = new Exemplo4;

    #Exemplo com namespace;
    //Estudo desenvolvido na pasta namespace.


/* Autoload Script */
    //Estudo desenvolvido na pasta autoload;


/* Constantes em Orientação a Objetos */
    
    class Exemplo5{
        const nome = 'Lucas';
        public function __construct(){
            echo '<hr>'.nome.' => Chamada direta: echo nome;';
            echo '<br>';
            echo self::nome.' => Chama com self: self::nome';
            echo '<br>';
            echo Exemplo5::nome.' => Chamada direto da classe: Exemplo5::nome';
        }
    }    
    new Exemplo5;

/* Design Patterns */
    //Factore Design Pattern;
        #Vem de uma comunidade que não gosta do uso do new. Eles usam uma função estática para criar fábricas de classes, criando metodos já com o new embutido.

        //Padrão
        class Cachorro0{
            public function __construct(){
                echo '<hr>Meu chacho se chama Bobby 1';
            }
        }

        class Gato0{
            public function __construct(){
                echo '<br>Meu gato se chama Pitoco 1';
            }
        }
            //Por se tratar de classe com __construct, o mero instanciamente retorn valor, diferente de uma classe que não é construct, situação na qual eu teria que escrever 'new Cachorro0->metodo();        
        new Cachorro0; 
        new Gato0;


        //Factore
        class Animal{
            public static function build($nomeClasse){
                return new $nomeClasse;//Você pode até criar uma validação com if class_exists, se quiser.
            }
        }
            //O que acontece aqui é bem simples: é criada uma função static cuja função é apenas atribuir o new as classes. Essa função static, então, passa a ser uma fabrica de instanciamento de classes. Essa fabrica pega a classe, cola nela um 'new' e devolve pronto para uso direto como classe."Ain, mas essa function pega a classe da onde?' De você animal. Na hora que você escreve a chamada, você vai usar a chamada direta de uma classe " :: ", no caso, a static e especificar o nome da classe, que já irá ser retornada com o new. Veja:
        Animal::build('Cachorro0');
        Animal::build('Gato0');
                //A classe animal tem a função build, que é estatica e exige um parâmetro. Esse parâmetro deve ser o nome da classe __construct, porque build vai pegar esse nome fornecido e colocar um 'new' na frente. Então você tem uma fábrica de instanciamento.
        
        

    //Facade Design Pattern;

        //Padrão
        #Pensando em um contexto de loja virtual, poderiamos, tradicionalmente, desenvolver 4 classes:
                # FecharCarrinho;
                # CalcularFrete;
                # FecharPedido;
                # Loja;

        class Carrinho{
            public function fecharCarrinho(){
                echo '<hr>Carrinho fechado com sucesso';
            }
        }

        class Frete{
            public function calcularFrete(){
                echo '<br>Frete calculado com sucesso';
            }
        }

        class Pedido{
            public function confirmarPedido(){
                echo '<br>Pedido concluído com sucesso';
            }
        }

        $carrinho1 = new Carrinho;
        $frete1 = new Frete;
        $pedido1 = new Pedido;
        $carrinho1->fecharCarrinho();
        $frete1->calcularFrete();
        $pedido1->confirmarPedido();
        echo '<br> ############# Padrão finalizado';

        //Facade
        #Ao inves de eu ficar instanciando e chamando, como o exemplo acima, eu crio uma função englobando todas as outras funções como seu objeto e defino essa única função ao instanciamente e chamamento de todas.
        #Isso com certeza vai fazer o código index ficar zilhões de vezes mais limpo.
        class Loja{
            public function finalizarCompra(){
                $carrinho = new Carrinho;
                $carrinho->fecharCarrinho();

                $frete = new Frete;
                $frete->calcularFrete();

                $pedido = new Pedido;
                $pedido->confirmarPedido();
                
                echo '<br>Compra finalizada com sucesso. Você receberá um email dentro de 24 horas<hr>.';
            }                
        }

        $loja = new Loja;
        echo $loja->finalizarCompra();
        


/* PHP e Banco de dados */
    //A lógica é simples. Você precisa de:
        //1//Sistema de gerenciamento de banco de dados. 
                #No seu caso, é o MySQL. Em posse de sistema, você precisa:
        //2//Arrumar um meio de conectar o PHP a esse banco de dados.
                #Existe uma classe do PHP chamada PDO, que serve exclusivamente para criar conexões com bancos de dados. Conectado ao banco de dados, você precisa:
        //3//Definir o script que será executado no banco de dados.
                #O script deve ser escrito no método prepare(); do PDO, na linguagem sql (queries). Escrito o script, você deve:
        //4//Executar o script.
                #Você executa o código como o método execute(); do PDO. Você pode armazenar esse execute dentro de controladores de fluxo 'if ou afins'.
        //5//Pegar o resultado da execução do seu comando através do método fecthAll();
    

    //Exemplo prático de conexão com Banco de Dados
    /* 
        $pdo = new PDO(
            'mysql: host=localhost; dbname=pedidos', 
            'root',
            '');
        #Consiste basicamente em 3 strings. 
            - A primeira é :
                - O sistema de gerenciamento de bancos de dados.
                - O endereço desse sistema;
                - Qual database desse sistema você quer acessar.
            - A segunda é o loguin;
            - A terceira é a senha;

        ###ATENÇÃO
            Existe um falha de segurança no php que, ao tentar conectar no banco de dados e, por algum motivo falhar, ele retorna na página todos os dados de loguin do seu banco de dados, inclusive a senha, tornando seu sistema totalmente vulnerável. Você pode resolver isso envolvendo o script de conexão em um try/catch.

        try{
            $pdo = new PDO('mysql: host=localhost; dbname=pedidos','root','');
        } catch(Exception $e){
            echo 'Não foi possível conectar-se ao banco de dados';
        }

    */

//Setando carateres em UTF-8
/*  
    #Na hora de estabelecer a conexão com o banco de dados, você deve criar um array que vai conter uma chave e um valor em específico.
        $pdo = new PDO('mysql: host=localhost; dbname=pedidos','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'"));
*/    

//Permitindo exibição de erros
/* 
    #Você deve invocar um método do pdo.
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
*/


//Script de Loguin Ideal
/*  
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=pedidos','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo 'Não foi possível realizar a conexão com o banco de dados";
    }

    #Você também pode definir constantes para serem usadas na instância do PDO.
        define('HOST','localhost');
        define('DB','pedidos');
        define('USER','root');
        define('PASS','');

    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo 'Não foi possível realizar a conexão com o banco de dados";
    }

*/

//Inserido linha de dados em uma tabela de um Banco de Dados
    /*
        #O prepare(); é o método do PDO onde você vai inserir todos os comandos destinados ao banco de dados que você precisa. Obviamente, esses comandos precisam ser escritos na linguagem queries.

        $sql = $pdo->prepare("INSERT INTO `pedidos` VALUES (null,'Lucas','Eduardo','vieiraloader@gmail.com')");

        $sql = execute();

        #Algumas coisas devem ser levadas em consideração:
            - É preciso armazenar o prepare em uma variável. A razão é que as suas queries vao ser levadas até a classe do PDO e então o PDO vai me retornar outros objetos, entre eles o execute(); Se você não armazenar o prepare(); em uma variável, você não vai conseguir ter como acessar esses objetos que retornam do PDO.
            - Se essa inserção for acontecer meramente no back-end, está tudo bem escrever dessa forma ai, MASSS, se essa inserção for acontecer via formulário, jamais utilize essa forma ai, porque ela é suscetível a sql inject. Para resolver isso, você, ao invés de informar os valores no VALUES, coloque apenas '?'. Isso permitirá que você declare os valores apenas na hora do execute, até dos parâmetros deste, coisa que você terá que fazer criando um array. Veja um exemplo:

            $sql = $pdo->prepare("INSERT INTO `pedidos` VALUES (?,?,?,?)");
            $sql = execute(array(null,Lucas,Eduardo,veiralaoder@gmail.com));
                #Como você vai trabalhar com formulário, essas informações estariam sendo buscadas no html e armazenadas em variáveis, o que faria você ter que usar variáveis no array. Exatamente assim:
                $sql = execute(array(null,$nome,$sobrenome,$email));
    */

//Deletando uma linha dados em uma tabela de um Banco de Dados
    #A lógica é basicamente a mesma. Preciso da conexão com o banco de dados. Então eu preciso da query delete que será inserido no prepare();

    /* 
        $sql = $pdo->prepare("DELETE * FROM `pedidos` WHERE `id=4`");
            #ou $sql = $pdo->prepare("DELETE FROM pedidos WHERE id=4");
                #O sinal " `` " é usado quando é preciso inserir caracteres especiais.
            #Se não houver o "WHERE", vai deletar todas as linhas de dados da tabela pedidos;
            #Muito cuidade ao usar esse comando, coloque-o como parâmetros de do executo, para não ficar sujeito a sql inject.

*/ 

//Atualizando uma linha de dados em uma tabela de um Banco de Dados
    #Usamos a mesma lógica, só que, ao inves de DELETE FROM, escrevemos UPDATE `tabela` SET `coluna`='valor'.

    /*
        $sql = $pdo->prepare("UPDATE pedidos SET nome='Lucas',sobrenome='Eduardo',email='vieiraloader@gmail.com' WHERE id='1'");
            #Se não houver o condicionante WHERE, vai dar um replace em todas as linhas nas colunas nome e sobrenome;
            #Você pode colocar duas ou mais condições adicionando "AND", "OR", ;
                    # $sql = $pdo->prepare("UPDATE pedidos SET nome='Lucas' WHERE id='4' AND email='vieiraloader@gmail.com'");
    */



//Armazenando dados de uma tabela em uma variável.
    #A lógica é simples.
/*      -Selecione quais dados você quer; => prepare("SELECT * FROM pedidos");
                    #Você seleciounou todas as colunas com '*', mas poderia selecionar determinadas colunas, basta especificar: ("SELECT `nome`,`sobrenone`,`email` FROM pedidos"):
        -Execute a seleção; execute()/
        - Armazene os dados dentro de uma variável. fetchAll();
    
    //Na prática
        $sql = $dpo->prepare("SELECT * FROM pedidos");
            $sql->execute();
        $info = $sql->fetchAll();
        echo '<pre>';
        print_r($info);
        echo '</pre>;
    #Agora você tem um array dentro de $info com todas os dados da sua tabela pedidos.
    #Por ter um array, isso significa que você pode?
        - dar um print_r($info);
        - usar o foreach em $info;
        - fazer o que quiser com essas informações, visto que foram extraídas do banco de dados e, agora, estão dentro de uma variável.
*/

//Relacionando tabelas e suas colunas e linhas.
    //Primeiro método #Criando filtro entre tabelas com foreach: A lógica também é simples.
/*      - Selecione a primeira tabela, execute a seleção e armazene os dados em uma variável.
            //    $sql = pdo->prepare("SELECT * FROM categorias");
            //        $sql = pdo->execute();
            //    $variavel = $sql->fetchAll();                
        - Dê um foreach nessa variável.
                #Dentro do foreach dessa variável, você deve:
                        - Criar uma variável que receberá o valor da coluna de id da primeira tabela.
                                #($variável1 = $value['id'];), esse $value['id'] vai pegar o valor da coluna 'id' da primeira tabela, uma vez que o foreach já pegou todos os dados do array que é retornado pelo fetchAll(); 
                        - Criar uma nova query de seleção para a segunda tabela com o condicionante WHERE, condicionando que só haverá a seleção da coluna que corresponder à variável que tem armezenado o valor da id da tabela categoria.
                            //    $sql = pdo->prepare("SELECT * FROM posts WHERE post_id = $variavel1");
                            //        $sql = pdo->execute();
                            //    $variavelPosts = $sql->fetchAll();
        
            #Resumindo
                - Selecione a primeira tabela, execute a seleção e armazene todos os dados em uma variável.
                - Dê um foreach na variável com os dados.
                - Dentro do foreach da variável, crie mais uma variável que recebe o valor do da coluna id da primeira tabela.
                - Logo abaixo, ainda dentro desse primeiro foreach, crie mais uma seleção de tabela, mas essa segunda seleção precisa ser feita exatamente da seguinte forma:
                    - Essa selação deve selecionar a segunda tabela.
                    - No seletor, deve haver um condicionate WHERE dizendo que somente seleciona as linhas da tabela cujas colunas correspondam ao valor armazenado dentro da variável do meu primeiro forach, que é a variável que contém o número do id da primeira tabela.
                - Pronto.
            
            #Resultado prático:
            //      $sql = pdo->prepare("SELECT * FROM categorias");
            //           $sql->execute();
            //      $categorias_columns = sql->fetchAll();
            //      foreach($categorias_columns as $key => $value){
            //           $categoria_id = $value['id'];
            //           echo 'Você está vendo posts de'.value['nome'];
            //           $sql = pdo->prepare("SELECT * FROM posts WHERE post_categoria = $categoria_id);
            //           $sql->execute();
            //           $posts_result = $sql->fetchAll();
            //           foreach($posts_result as $key => $value){
            //              echo 'Título do post:'.$value['titulo'];    
            //              echo '<br>';
            //              echo 'Conteúdo do post:'.$value['conteudo'];
            //              echo '<hr>';
            //            }
            //       }

    //Segundo Método #Criando filtro entre tabelas queries.

/*      - Selecione a tabela, execute a seleção e armazene os dados em uma variáve, MASSSS, na selação de tabela, você vai usar algumas queries para:
                - Juntar as duas tabelas; (INNER JOIN)
                - Selecionar apenas as linhas cujos valores das colunas categorias_id e id(da tabela categoria) sejam iguals. (ON)

            #Resultado prático:
            //      $sql = pdo->prepare("SELECT * FROM posts INNER JOIN categorias ON posts.categoria_id = categorias.id"); //Selecione tudo da tabela posts e insira nela a tabela categoria nos momentos em que a coluna categoria_id da tabela posts for igual a coluna id da tabela categorias.
            //          $sql->execute();
            //      $posts_category_results = $sql->fetchAll();
            //      echo '<pre>';
            //      echo $posts_category_results;
            //      echo '</pre>;
                            Muito mais simples que a primeira forma
            
            Existe um pequeno problema nesse script: Algumas linhas viram duplicadas, porque vai acontecer de as duas tabelas possuem colunas com o mesmo nome. Nesse caso, o php vai exibir as duas, mesmo que tenha o mesmo nome, só que a primeira será exibida com o nome real e a segunda será exibida com um índice criado, que seja em números.

            Para evitar que o php escreva duas colunas com o mesmo valor, você pode usar um parâmetro que pode ser especificado no fetchAll "$sql->fetchAll(::FETCH_ASSOC);", que deixará de exibir a coluna da primeira tabela especificada, exibindo somente a última a ser especificada.

            Você também pode "apelidar" uma coluna para que não haja essa duplicadade. Na aula, ele escreveu um comando que eu achei desnecessario e reduntante:
                $sql->prepare("SELECT `posts`.*, `categorias`.*, `posts`.`id` AS `post_id`, FROM `posts` INNER JOIN `categorias` ON `post`.`categoria_id` = `categorias`.`id`")
            Quando eu acho que ele poderia ter feito o seguinte:
                $sql->prepare(SELECT * `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`, `posts`.`id` AS `post_id`");
            Não sei se funciona, mas não veja uma razão pela qual não deva funcionar. Quando eu puder, vou testar.
*/
    

//Queries Extras
    //GROUP BY
        #É uma query que vai juntar as linhas que possuem o mesmo valor na coluna em grupo.
        // $sql->prepare("SELECT * FROM `usuarios` GROUP BY `cargo`");

    //ORDER BY
        #Vai exibir as informações de acordo com uma ordem que você informar.
        // $sql->prepare("SELECT * FROM `usuarios` GROUP BY `cargo` ORDER BY `nome` ASC");
                //ASC = Ascedente > Crescente;
                //DESC = Descendente > Decrecente;
    
    //LIMIT
        #Vai limitar a quantidade de informações que será retornada. No caso, se houver apenas 2 grupos de cargos, informar o limit de 3 vai ser irrelevante, porque não tem essa quantidade. Mas, se for informado o limite de 1, aparece apenas o primeiro grupo.
        // $sql->prepare("SELECT * FROM `usuarios` GROUP BY `cargo` ORDER BY `nome` ASC LIMIT 3");
        #O limit deve estar sempre depois do order, caso este estiver declarado.

    //LEFT JOIN 
        #É a mesma coisa do INNER JOIN, mas com a diferença de que este (inner) não retorna os dados que não batem, diferente do LEFT, que trás, além dos que batem, aqueles que não batem.
        #Só vai retornar aquelas as que não batem da especificação feita à esquerda.
            //("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`")
                #Retorna os que batem e todo o restante de "clientes".

     //RIGHT JOIN 
        #Mesma coisa do right, só que ao invés de retornar toda a tabela da esquerda, vai retornar toda a tabela da direita, e o que não corresponder com a condicionante em `cliente`será descartado.
            //("SELECT * FROM `clientes` RIGHT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`")
                #Retorna os que batem e todo o restante de "cargos".  
                
                
    //LIKE
        #Serve para retornar de acordo com uma informação fornecida.
            //("SELECT * FROM `clientes` WHERE `email` LIKE '%'");= Me retorne os clientes cujos emails comecem/terminem com qualquer coisa.
            //("SELECT * FROM `clientes` WHERE `email` LIKE '%g'"); = Me retorne os clientes cujos emails comecem com qualquer coisa e terminem com g.
            //("SELECT * FROM `clientes` WHERE `email` LIKE '%'"); = Me retorne os clientes cujos emails comecem/terminem com qualquer coisa, mas que entre o fim e o começo deve ter a letra g.

    //BETWEEN        
        //("SELECT * FROM `clientes` WHERE `data` BETWEEN '2017-01-10' AND '2017-12-31'"); = Retorne-me todos os clientes inscritos entre as datas x e y.
    
    //IN       
        //("SELECT * FROM `clientes` WHERE `ud` IN (1,2,3)"); = Retorne-me todos os clientes dos IDs 1,2,3.

    //HAVING CLAUSE
        #Faz a mesma coisa que o where, só que depois do group by. Serve para criar mais um filtro na pesquisa. 
            //("SELECT * FROM `clientes` GROUP BY `vip` HAVING pagamento > 250"); = Retorne-me todos os clients vips que realizaram pagamento maior do que 250 reais.
    
    //Subquery
        #É fazer uma seleção dentro de outra selação.
            //("SELECT * FROM `filmes` WHERE `categoria_id` = (SELECT categoria_id FROM categorias WHERE nome = 'Terror')");
                #Se você se encontrar em uma situação que não sabe o id da categoria, isso pode ser útil, porque você pode simplesmente escrever o título da categoria.

    //Show Tables
        #Você consegue fazer isso através do método query(); do pdo.
        /*

                $tables = $pdo->query("SHOW TABLES");
                $tables = $pdo->fetchAll();
                echo '<pre>';
                echo $tables;
                echo '</pre>;

        */

    //Create Tables
        #Você consegue fazer isso através do método exec(); do pdo.
        /*
                $sql = 'CREATE TABLE cursos (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    nome_curso VARCHAR(255) NOT NULL
                    )';
                )               
                $pdo->exec($sql);

        */


//Evitando conflitos de informações em inserções simultâneas de dados.
/*
    #Você pode criar arquivos em php que se responsabilizaram de travar a escrita em tabelas por um determinado, permitindo que outra classe pegue informações da tabela e só após haja a reescritura.

    $pdo = new PDO ('loguin')
    $pdo->exec("LOCK TABLES `pedidos` WRITE");
    sleep(10);

*/














?>





























