<?php

$teclado = fopen('php://stdin', 'r');                                                   /* stdin: Significa teclado */

$novoCurso = fgets($teclado);

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);                       /* file_put_contents: Adicionando o conteudo */

                                                                                        /* FILE_APPEND: Para não apagar o conteudo que ja tem lá. */

