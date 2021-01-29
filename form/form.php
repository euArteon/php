<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Formulários - GET & POST</title>
</head>
<body>
        <?php
            /* GET */
            $nome0 = @$_GET['nome0'];
            $email0 = @$_GET['email0'];
            echo $nome0.'<br/>';
            echo $email0;
        
            /* POST */
            $nome1 = @$_POST['nome1'];
            $email1 = @$_POST['email1'];
            echo $nome1.'<br/>';
            echo $email1;

            /* POST & ARRAYS */
            if(isset($_POST['act2'])){
                foreach ($_POST['valor'] as $key => $value) { /* //Se eu não tivesse colocar [] no valor lá do input do html, eu não precisaria do foreach. Mas como coloquei, a única forma de dar echo é usando foreach pra percorrer o array. Se eu não tivesse colocado o [], bastava eu armazenar o valor em uma variável e então dar echo. */
                    echo $key.'=>';
                    echo $value.'<hr/>';
                }
            }
            ?>
    <form method="get">
        <!-- GET -->
        <div>
        <input type="text" name="nome0" placeholder="Insira seu nome completo aqui" />
        <input type="text" name="email0" placeholder="Insira seu melhor email aqui" />
        <input type="submit" name="act0" value="ENVIAR" />
        </div>
    </form>
    <form method="post">
        <!-- POST -->
        <div>
        <input type="text" name="nome1" placeholder="Insira seu nome completo aqui" />
        <input type="text" name="email1" placeholder="Insira seu melhor email aqui" />
        <input type="submit" name="act1" value="ENVIAR" />
        </div>
    </form>   

    /* Trabalhando com post e arrays */

    <form method="post">
        <input type="checkbox" name="valor[]" value="10" /> <!-- Se eu não colocar [] no valor, na hora de dar submit, somente o último do valor vai ser exibido. -->
        <input type="checkbox" name="valor[]" value="20" />
        <input type="checkbox" name="valor[]" value="30" />
        <input type="checkbox" name="valor[]" value="70" />
        <input type="submit" name="act2" value="ENVIAR" />
    </form>
</body>
</html>