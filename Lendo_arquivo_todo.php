<?php

$arquivo = fopen('Lista-cursos.txt', 'r');                                                  /* fopen:Função abre arquivo */

$tamanhoDoArquivo = filesize('Lista-cursos.txt');                                           /* filesize:Funcao que me entrega o tamanho do arquivo */
$cursos = fread($arquivo, $tamanhoDoArquivo);                                               /* fread:Função que le o arquivo */

echo $cursos;

fclose($arquivo);