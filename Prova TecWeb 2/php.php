<?php

$tabela = $_POST;

unset($tabela["children"], $tabela["nome"], $tabela["idade"]);

$number= count($tabela)-(count($tabela) /2);

 $i=1;
?>
<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="Viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie-edge"/>
        <title>Tabela</title>
        <link rel="stylesheet" href="style.css"/>
        <link href="formulário.html"/>
    </head>
    <body>
        
        <div class="table-center">
            <table>
                <thead>
                    <tr>
                        <td class="row">Nome</td>
                        <td class="idade">Idade</td>
                        <td class="row">Filhos</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="row"><?php echo $_POST["nome"]?></td>
                        <td class="idade"><?php echo $_POST["idade"] ?></td>
                        <td class="row"><?php if(isset($tabela["name-0"])){echo $tabela["name-0"]." - ".$tabela["idade-0"]." anos";}
                        else{echo "Não possui filhos";}?></td>
                    </tr>
                    <?php while($i<$number){?>
                    <tr>
                        <td class="row">&nbsp;</td>
                        <td class="idade">&nbsp;</td>
                        <td class="row"><?php echo $tabela["name-$i"]." - ".$tabela["idade-$i"]." anos";?></td>
                    </tr>
                    <?php $i++; }?>
                </tbody>
            </table>
        </div>     
    </body>
</html>