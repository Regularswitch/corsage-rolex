<?php
add_filter('woocommerce_loop_add_to_cart_link', 'btn_loop_shop', 10, 2);
function btn_loop_shop($button, $product)
{
    if (true) {
        $button_text = __("View product", "woocommerce");
        $button = '<a class="button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
    }
    return $button;
}

add_action('woocommerce_single_product_summary', 'link_single_prod_whats', 1, 0);
function link_single_prod_whats()
{
    global $product;
    function custom_button_replacement()
    {
        global $product;
        $name = $product->get_title();
        $sku = $product->get_sku();
        echo "
            <br />  
            <button 
                class=\"single_add_to_cart_button button alt\" 
                style=\"padding: 20px; margin-bottom: 20px;\"
                onclick=\"window.location.href='https://wa.me/5511937074535?text=Olá, quero saber mais informações sobre *{$name}* de referencia *{$sku}*'\"
            >
                Enviar mensagem
            </button>
        ";
    }

    if (true) :
        if ($product->is_type('variable')) {
            remove_action('woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20);

            add_action('woocommerce_single_variation', 'custom_button_replacement', 20);
        } else {
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

            add_action('woocommerce_single_product_summary', 'custom_button_replacement', 30);
        }
    endif;
}
