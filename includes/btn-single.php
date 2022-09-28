<?php

add_action("woocommerce_product_meta_end", "single_rlx_btn_to_whats");
function single_rlx_btn_to_whats()
{
    global $product;
    $name = $product->get_title();
    echo "
        <br />  
        <button 
            class=\"single_add_to_cart_button button alt\" 
            onclick=\"window.location.href='https://wa.me/5511991196960?text=Olá, quero saber mais informações sobre *{$name}*'\"
        >
            Enviar Orçamento
        </button>
    ";
}

add_action( 'shoptimizer_sidebar', 'single_rlx_btn_to_whats', 10 );
