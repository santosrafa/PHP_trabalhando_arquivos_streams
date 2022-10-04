<?php

$arquivoCursos = new SplFileObject('cursos.csv');                       /* SplFileObject: É um objeto de arquivo e o nome do arquivo cursos.csv. */

while (!$arquivoCursos->eof()){
    $linha = $arquivoCursos->fgetcsv(';');                              /* Enquanto desse arquivo nao atingir o final eu vou lendo linha a linha */

    echo $linha[0] . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());                        /* Aqui é possivel verificar quando o arquivo foi criado */

echo $date->format('d/m/Y');


