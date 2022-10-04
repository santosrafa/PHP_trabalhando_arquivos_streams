<?php

$arquivo = fopen('cursos-php.txt', 'w');

$curso = 'PHP I/O: trabalhando com arquivos e streams';

fwrite($arquivo, $curso);                                                           /* fwrite: Função para escrever no arquivo */

fclose($arquivo);