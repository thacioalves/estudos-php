<?php

    // Exceção lançada para indicar erros de intervalo
    function divisao($dividendo, $divisor)
    {
        try {
            if ($divisor == 0) {
                throw new RangeException("O número não pode ser dividido por zero");
            }

            $resultado = $dividendo / $divisor;

            echo "O resultado é: " . $resultado;
        } catch (Exception $e) {
            // echo $e->getMessage();
            echo "O número não pode ser dividido por zero";
        } finally { // sempre será utilizado quando um processo precisar ser executado
            echo "<br/>Tratando exceções";
        }
    }
    divisao(10, 2);
