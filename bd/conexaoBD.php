<?php

    $_conecta = mysqli_connect('mysql.hostinger.com.br	','u780848234_eder','clabbers','u780848234_mapa
');
        if (!$_conecta) {
            echo 'Não foi possível a conexão com o banco: ' . mysqli_error($_conecta);
        } else {
           /* echo 'Conexão ok<br/>';*/
        }


?>
