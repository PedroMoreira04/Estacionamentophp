<?php
   
   namespace Projeto\projetoEstacionaemnto\PHP;
    require_once('Entradasaida.php');

    use  Projeto\projetoEstacionamento\PHP\Controlentradasaida;
    use Projeto\projetoEstacionamento\PHP\Entradasaida;
 
 
 
 
 
 
?>
<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>
            <form method="POST">
                <label>Código</label>
                <input type="text" id="codigo" name="codigo"/><br><br>
 
                <label>Data de Entrada:</label>
                <input type="text" id="datae" name="datae"/><br><br>
 
                <label>hora de Entrada</label>
                <input type="text" id="horae" name="horae"/><br><br>
 
                <label>Data de Saida:</label>
                <input type="text" id="datas" name="datas"/><br><br>
 
                <label>Hora de Saida:</label>
                <input type="text" id="horas" name="horas"/><br><br>
                
                <label>Veículo:</label>
                <input type="text" id="veiculo" name="veiculo"/><br><br>
 
                <label>Cliente:</label>
                <input type="text" id="cliente" name="cliente"/><br><br>

                <label>Telefone</label>
                <input type="text" id="tel" name="tel"/><br><br>

                <label>CPF</label>
                <input type="number" id="cpf" name="cpf"/><br><br>

                <label>Valor Total</label>
                <input type="number" id="total" name="total"/><br><br>
                <button>Finalizar

        
                
                
                
                <?php
                    try{
                        $entradasaida1 = new Entradasaida(   "989898","04/12/2004","12:00","05/12/2004","12:00","27.65","ferrari","Pedro","11999999999","239.908.870-09");
                $codigoAleatorio  = $_POST['codigo'];
                $dataEntrada =  $_POST['datae'];
                $horaEntrada =  $_POST['horae'];
                $dataSaida =  $_POST['datas'];
                $horaSaida =  $_POST['horas'];
                $dataSaida =  $_POST['datas'];
                $veiculo =  $_POST['veiculo'];
                $cliente =  $_POST['cliente'];
                $telefone =  $_POST['tel'];
                $cpf =  $_POST['cpf'];                                                                                      
                $valorTotal =  $_POST['total'];

                $entradasaida1 =  new Entradasaida(
                                    $codigoAleatorio,
                                    $dataEntrada,
                                    $horaEntrada,
                                    $dataSaida,
                                    $horaSaida,
                                    $veiculo,
                                    $cliente,
                                    $telefone,
                                    $cpf,
                                    $valorTotal
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