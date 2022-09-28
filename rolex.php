<?php

/**
 * Plugin Name: Rolex
 * Description: Interação com Rolex, este plugin cria template de páginas
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Regulars Witch
 * Author URI: https://regularswitch.com
 */

defined('ABSPATH') or die('não perturbe');

function rlx_script_style_include()
{
    wp_enqueue_style("rlx-swiper-css", '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style("rlx-style", plugins_url("public/css/style.css", __FILE__));
    wp_enqueue_script("rlx-lib", '//static.rolex.com/retailers/clock/retailercall.js');
    wp_enqueue_script("rlx-swiper-js", '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
    wp_enqueue_script("rlx-adobe", '//assets.adobedtm.com/7e3b3fa0902e/7ba12da1470f/launch-5de25e657d80.min.js');
    wp_enqueue_script("rlx-scripts", plugins_url("public/js/scripts.js", __FILE__), array(), false, true);

    include __DIR__ . "/includes/btn-single.php";
}
add_action('init', 'rlx_script_style_include');

function get_all_template()
{
    $templates = [];
    $templates['page-rolex.php'] = "Rolex home";
    $templates['page-colecao.php'] = "Rolex coleção";
    $templates['page-novos-modelos.php'] = "Rolex novos modelos";
    $templates['page-manutencao.php'] = "Rolex manutenção";
    $templates['page-historia.php'] = "Rolex história";
    $templates['page-contato.php'] = "Rolex contato";
    return $templates;
}

add_filter('page_template', 'rlx_template_include');
function rlx_template_include($page_template)
{
    foreach (get_all_template() as $nameFile => $label) {
        if (get_page_template_slug() == $nameFile) {
            $page_template = dirname(__FILE__) . '/' . $nameFile;
        }
    }

    return $page_template;
}

add_filter('theme_page_templates', 'rlx_templates_register', 10, 4);
function rlx_templates_register($post_templates, $wp_theme, $post, $post_type)
{
    foreach (get_all_template() as $nameFile => $label) {
        $post_templates[$nameFile] = __($label);
    }
    return $post_templates;
}

add_shortcode('relogio', 'rlx_relogio');
function rlx_relogio($atributes = [], $content = null)
{
    return file_get_contents(__DIR__ . "/includes/relogio.php");
}

function rlx_hooks()
{

    function rlx_add_relogio()
    {
        echo "<span style=\"margin-top: 15px; display:block;\">";
        include __DIR__ . "/includes/relogio.php";
        echo "</span>";
    }
    add_action("nectar_before_header_button_list_items", 'rlx_add_relogio', 20);

    function rlx_add_footer()
    {
        include __DIR__ . "/includes/footer-links.php";
    }
    add_action("nectar_hook_after_footer_widget_area", 'rlx_add_footer');

    function rlx_add_whats()
    {
        include __DIR__ . "/includes/footer-whats.php";
        include __DIR__ . "/includes/popup.php";
    }
    add_action("nectar_hook_before_body_close", 'rlx_add_whats');
}
add_action('init', 'rlx_hooks');
