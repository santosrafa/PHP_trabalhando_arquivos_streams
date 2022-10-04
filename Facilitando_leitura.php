<?php

$cursos = file_get_contents('Lista-cursos.txt');                                        /* file_get_contents: A Função irá conseguir ler todo o arquivo */

echo $cursos;