<?php

$arquivo = fopen('Lista-cursos.txt', 'r');                                      /* fopen: Função para abrir um arquivo, 'r' de read. */

while (!feof($arquivo)){                                                        /* fgets: Função que pega uma string até o final da linha */
    $curso = fgets($arquivo);                                                   /* feof: Fim do arquivo */

    echo $curso;
}

fclose($arquivo);                                                               /* fclose: Funçao para fechar o arquivo, porque não será mais utilizado */