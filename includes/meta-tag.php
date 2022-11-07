<?php
$domain = get_site_url();

$slugs = [
    "rolex-na-corsage",
    "rolex",
    "contato-rolex",
    "nossa-historia-com-a-rolex",
    "manutencao",
    "novos-modelos",
];

$meta_tags = [
    "rolex-na-corsage" => [
        "title" => "Relógios Rolex em São Paulo | Corsage",
        "description" => "Descubra os relógios Rolex on-line na Corsage. Distribuidor Oficial de relógios Rolex masculinos e femininos. Descubra mais na Corsage.",
    ],
    "rolex" => [
        "title" => "Distribuidor Oficial Rolex em São Paulo | Corsage",
        "description" => "A Corsage situada na Cidade de São Paulo, tem orgulho em fazer parte da rede mundial de Distribuidores Oficiais Rolex, autorizados vender e a realizar a manutenção dos relógios Rolex.",
    ],
    "contato-rolex" => [
        "title" => "Contato Corsage – Distribuidor oficial de relógios Rolex",
        "description" => "Entre em contato com a Corsage e deixe-nos ajudá-lo a escolher um Rolex ou esclarecer as suas dúvidas.",
    ],
    "nossa-historia-com-a-rolex" => [
        "title" => "Conheça a nossa história Corsage - Distribuidores Oficiais de relógios Rolex",
        "description" => "Conheça a nossa história e o início da parceria entre Corsage e Rolex. Saiba mais em nosso site.",
    ],
    "manutencao" => [
        "title" => "A manutenção Rolex | Corsage",
        "description" => "A Corsage tem orgulho em fazer parte da rede mundial de distribuidores oficiais treinados pela Rolex. Você pode nos confiar todas as operações relativas à manutenção do seu relógio.",
    ],
    "novos-modelos" => [
        "title" => "Novos modelos Rolex 2022 | Corsage",
        "description" => "A Corsage apresenta a mais recente coleção de relógios suíços de luxo Rolex. Descubra já as características exclusivas dos novos modelos 2022 na Corsage.",
    ],
];

$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$url = array_filter($url, function ($v) {
    return !empty($v);
});
$url = array_values($url);
$url = end($url);
