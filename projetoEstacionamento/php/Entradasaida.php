<?php
//Definindo o Projeto e as Pastas
namespace Projeto\projetoEstacionamento\PHP;
//Específica qual classe eu vou utilizar
use Projeto\projetoEstacionamento\PHP\Entradasaida;

class Entradasaida{
    private string $codigoAleatorio;
    private string $dataEntrada;
    private string $horaEntrada;
    private string $dataSaida;
    private string $horaSaida;
    private string $veiculo;
    private string $cliente;
    private string $telefone;
    private string $cpf;
    private string $valorTotal;
    



 public function __construct(
    string $codigoAleatorio,
    string $dataEntrada,
    string $horaEntrada,
    string $dataSaida,
    string $horaSaida,
    string $valorTotal,
    string $veiculo,
    string $cliente,
    string $telefone,
    string $cpf
    ){

            $this->codigoAleatorio = $codigoAleatorio;
            $this->dataEntrada = $dataEntrada;
            $this->horaEntrada = $horaEntrada;
            $this->dataSaida = $dataSaida;
            $this->horaSaida = $horaSaida;
            $this->valorTotal = $valorTotal;
            $this->veiculo = $veiculo;
            $this->cliente = $cliente;
            $this->telefone = $telefone;
            $this->cpf = $cpf;
           
            

    }//fim do construtor

     public function __get(string $name):mixed{
            return $this-> $name;
        }//fim do get

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do set

        public function imprimir():string
        {  
           return
                   "<br><br>Código: ".$this->codigoAleatorio.
                   "<br>Data Entrada: ".$this->dataEntrada.
                   "<br>Hora Entrada: ".$this->horaEntrada.
                   "<br>Data Saida: ".$this->dataSaida.
                   "<br>Hora Saida: ".$this->horaSaida.
                   "<br>Veículo: ".$this->veiculo.
                   "<br>Cliente:" .$this->cliente.
                   "<br>Telefone:" .$this->telefone.
                   "<br>CPF:" .$this->cpf;
                   "<br>Valor Total: ".$this->valorTotal;
                   


        

        }
    }


