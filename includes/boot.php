<?php

$base_image = plugins_url('/rolex/public/images');

$domain = get_site_url();

$menus = [
    "{$domain}/rolex-na-corsage" => "ROLEX NA CORSAGE",
    "{$domain}/rolex" => "COLEÇÃO ROLEX",
    "{$domain}/novos-modelos" => "NOVOS MODELOS 2023",
    "{$domain}/manutencao" => "A MANUTENÇÃO ROLEX",
    "{$domain}/nossa-historia-com-a-rolex" => "NOSSA HISTÓRIA",
    "{$domain}/contato-rolex" => "CONTATO",
];

define('BASE_URL_NEW_MODELS', 'https://corsage.com.br/rolex/?cmplp=');
$loop_new_models = [];
$empresa_name = "CORSAGE";

function add_new_model($title, $id, $slug)
{
    $GLOBALS['loop_new_models'][]  = [
        "slug" => BASE_URL_NEW_MODELS . $slug,
        "id" =>  $id,
        "title" => strtoupper($title)
    ];
}

add_new_model('COSMOGRAPH DAYTONA', 'cosmograph_daytona', 'rolex-watches/cosmograph-daytona/m126506-0002');
add_new_model('1908', 'perpetual_1908', 'rolex-watches/1908/m52508-0006');
add_new_model('YACHT-MASTER 42', 'yacht_master_42', 'rolex-watches/yacht-master/m226627-0001');
add_new_model('SKY-DWELLER', 'sky_dweller', 'rolex-watches/sky-dweller/m336239-0002 ');
add_new_model('GMT-MASTER II', 'gmt_master_2', 'rolex-watches/gmt-master-ii/m126713grnr-0001 ');
add_new_model('EXPLORER 40', 'explorer', 'rolex-watches/explorer/m224270-0001 ');
add_new_model('OYSTER PERPETUAL', 'oyster_perpetual', 'rolex-watches/oyster-perpetual/m124300-0008 ');
add_new_model('DAY-DATE 36', 'day_date_36', 'rolex-watches/day-date/m128345rbr-0068');

function render_tpl_new_model($loop, $fn)
{
    $html = '';
    foreach ($loop as $p) {

        $html .= $fn($p);
    }
    return $html;
}

$baseUrl = "https://corsage.com.br/rolex/?cmplp=rolex-watches&cmpfa=";
$baseUrlFoto = plugin_dir_url(dirname(__FILE__)) . "public/images/img-home/";
$prodsHome = [
    [
        "slug" => "cosmograph-daytona",
        "id" => "126506-0001",
        "title" => "cosmograph daytona"
    ],
    [
        "slug" => "1908",
        "id" => "52508-0006",
        "title" => "1908"
    ],
    [
        "slug" => "yacht-master",
        "id" => "226627-0001",
        "title" => "yacht-master"
    ],
    [
        "slug" => "sky-dweller",
        "id" => "336239-0002",
        "title" => "sky-dweller"
    ],
    [
        "slug" => "gmt-master-ii",
        "id" => "126713grnr-0001",
        "title" => "gmt-master ii"
    ],
    [
        "slug" => "explorer",
        "id" => "124273-0001",
        "title" => "explorer"
    ],
    [
        "slug" => "oyster-perpetual",
        "id" => "124300-0001",
        "title" => "oyster perpetual"
    ],
    [
        "slug" => "day-date",
        "id" => "228236-0012",
        "title" => "day-date"
    ],
    [
        "slug" => "datejust",
        "id" => "126234-0051",
        "title" => "datejust"
    ],
    [
        "slug" => "lady-datejust",
        "id" => "279135rbr-0001",
        "title" => "lady-datejust"
    ],
    [
        "slug" => "air-king",
        "id" => "126900-0001",
        "title" => "air-king"
    ],
    [
        "slug" => "sea-dweller",
        "id" => "126603-0001",
        "title" => "sea-dweller"
    ],
    [
        "slug" => "submariner",
        "id" => "124060-0001",
        "title" => "submariner"
    ],
];



