
    <?php
        function sacar ($conta, float $valorASacar) 
        {
            if ($valorASacar > $conta ['saldo']) {
                exibeMensagem("Você não pode sacar");
            } else {
                $conta ['saldo'] -= $valorASacar;
            }
            return $conta;
        }

        function exibeMensagem (string $mensagem) 
        {
            echo $mensagem . "</br>";
        }

        function depositar (array $conta, float $valorADepositar) : array 
        {
            if ($valorADepositar > 0 ){
                $conta['saldo'] += $valorADepositar;
            } else { 
                exibeMensagem("Depositos precisam ser positivos.");
            }
            
            return $conta;
        }

        function TitularComLetrasMaiusculas (array &$conta)
        {                       //strtoupper - letras maiusculas
            $conta ['titular'] = strtoupper($conta['titular']);
        }
        ?>