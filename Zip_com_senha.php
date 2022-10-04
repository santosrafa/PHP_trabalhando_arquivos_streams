<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '1234'
    ]
]);

echo file_get_contents(
    'zip://senhas.zip#Lista-cursos.txt',                                /* Nome do arquivo zip e dentro dele colocando o nome do  arquivo */
    false,
    $contexto
);