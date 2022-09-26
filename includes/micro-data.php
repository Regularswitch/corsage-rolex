<?php

$domain = get_site_url();
$base_image = plugins_url('/rolex/public/images');

$slugs = [
	"rolex-na-corsage",
	"rolex",
	"contato-rolex",
	"nossa-historia-com-a-rolex",
	"manutencao",
	"novos-modelos",
];

$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$url = array_filter($url, function ($v) {
	return !empty($v);
});
$url = array_values($url);
$url = end($url);

foreach ($slugs as $slug) {
	if ($slug == $url) {
		echo "<script type=\"application/ld+json\">";
		echo json_encode([
			"@context" => "https://schema.org/",
			"@type" => "BreadcrumbList",
			"itemListElement" => [[
				"@type" => "ListItem",
				"position" => 1,
				"name" => "Homepage",
				"item" => "https://corsage.com.br/"
			], [
				"@type" => "ListItem",
				"position" => 2,
				"name" => "Rolex",
				"item" => $domain . "/" . $slug
			]]
		]);
		echo "</script>";
	}
	if ($url == "contato-rolex") {
		echo "<script type=\"application/ld+json\">";
		echo json_encode([
			"@context" => "https://schema.org",
			"@type" => "JewelryStore",
			"name" => "CORSAGE BOUTIQUE ROLEX",
			"image" => $base_image . "/Retailer_plaque_160x80.jpg",
			"@id" => "",
			"url" => $domain . "/" . $slug,
			"telephone" => "+55 11 3758-4953",
			"address" => [
				"@type" => "PostalAddress",
				"streetAddress" => "Shopping Cidade Jardim 12000 Avenida Magalhães de Castro Loja 18 A - piso térreo",
				" addressLocality " => "São Paulo",
				"postalCode " => " 05502-001",
				"addressCountry" => "BR"
			],
			"openingHoursSpecification" => [[
				"@type" => "OpeningHoursSpecification",
				"dayOfWeek" => [
					"Monday",
					"Tuesday",
					"Wednesday",
					"Thursday",
					"Friday",
					"Saturday"
				],
				"opens" => "10:00",
				"closes" => "21:30"
			], [
				"@type" => "OpeningHoursSpecification",
				"dayOfWeek" => "Sunday",
				"opens" => "02:00",
				"closes" => "19:30"
			]]
		]);
		echo "</script>";
	}
}