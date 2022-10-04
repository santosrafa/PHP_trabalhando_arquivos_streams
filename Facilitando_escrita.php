<?php

$curso =  "\nCurso de Java";

//file_put_contents: Escreve dados em um arquivo.
//FILE_APPEND: Se o arquivo filename já existir, acrescenta os dados no arquivo ao invés de sobrescrevê-lo.

file_put_contents ('cursos-php.txt', $curso, FILE_APPEND);              
