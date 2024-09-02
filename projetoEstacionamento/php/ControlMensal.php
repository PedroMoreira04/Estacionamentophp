<?php
   
   namespace Projeto\projetoEstacionaemnto\PHP;
    require_once('MensalistaNovo.php');

    use  Projeto\projetoEstacionamento\PHP\ControlMensal;
    use Projeto\projetoEstacionamento\PHP\MensalistaNovo;
 
 
 
 
 
 
?>
<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>
            <form method="POST">
                <label>Nome</label>
                <input type="text" id="nome" name="nome"/><br><br>
 
                <label>Telefone:</label>
                <input type="number" id="telefone" name="telefone"/><br><br>
 
                <label>Endereço</label>
                <input type="text" id="endereco" name="endereco"/><br><br>
 
                <label>Carro:</label>
                <input type="text" id="carro" name="carro"/><br><br>
 
                <label>Informe a placa:</label>
                <input type="text" id="placa" name="placa"/><br><br>
 
                <label>Cor:</label>
                <input type="text" id="cor" name="cor"/><br><br>


                <label>Data de Pagamento:</label>
                <input type="text" id="datap" name="datap"/><br><br>

                <label>Valor mensal:</label>
                <input type="text" id="valormensal" name="valormensal"/><br><br>
                <button>Finalizar


                
                
                
                
                
                <?php
                    try{
                        $mensal = new MensalistaNovo(   "Henrique","1197869056","lauro gomes","Corsa Wind","tdpt-8960","Branco","10/09",150);
                $nome  = $_POST['nome'];
                $telefone =  $_POST['telefone'];
                $endereco =  $_POST['endereco'];
                $carro =  $_POST['carro'];
                $placa =  $_POST['placa'];
                $cor =  $_POST['cor'];
                $dataP =  $_POST['datap'];
                $valorMensal =  $_POST['valormensal'];

                $mensal =  new MensalistaNovo(
                                    $nome,
                                    $telefone,
                                    $endereco,
                                    $carro,
                                    $placa,
                                    $cor,
                                    $dataP,
                                    $valorMensal
                                   );
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
                ?>
                </button><br><br>
                <?php   
                ?>
            </form>
        </body>
</HTML>
 
</body>
</html>