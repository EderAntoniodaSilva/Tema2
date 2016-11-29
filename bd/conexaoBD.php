<?php

    $_conecta = mysqli_connect('localhost','root','123456','CadastroDePostos');
        if (!$_conecta) {
            echo 'Não foi possível a conexão com o banco: ' . mysqli_error($_conecta);
        } else {
           /* echo 'Conexão ok<br/>';*/
        }


?>
