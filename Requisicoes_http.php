<?php

$contexto = stream_context_create([                                                             /* stream_context_create: Criando um contexto */
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste do corpo',                                                          /* content: Conteudo da requisicao */
    ]
    ]);

    /* httpbin.org: É uma API onde pode ser realizado os metodos */



    echo file_get_contents('http://httpbin.org/post', false, $contexto);