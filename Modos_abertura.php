<?php

$arquivo = fopen('cursos-php.txt', 'a');                                            /* a: Ele colocar o cursor no final do arquivo. Emtão apartir do final do arquivo podera começar a escrever */

$curso = "\nPHP Exceptions: tratamento de erros";

fwrite($arquivo, $curso);                                                           /* fwrite: Função para escrever no arquivo */

fclose($arquivo);