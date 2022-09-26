<?php
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
?>
<?php if( !in_array( $url, $slugs )) { ?>
    <a href="https://wa.me/5511991196960" class="whast-fix">
        <img src="<?php echo  $base_image; ?>/whats.png" alt="troll">
    </a>
<?php } ?>

<template id="$RlxCookie">
    <div class="rlx-cookie-box">
        <div>
            <strong class="rlx-cookie-box-title">
                Rolex (Adobe Analytics and Content Square)
            </strong> <br />
            <p class="rlx-cookie-box-paragraph">
                <span>Privacypolicy:</span>
                <a href="https://www.rolex.com/legal-notices/cookies.html" target="_blank" rel="noopener noreferrer" class="rlx-cookie-box-link">
                    https://www.rolex.com/legal-notices/cookies.html
                </a>
            </p>
            <p class="rlx-cookie-box-paragraph">Purposes(consent)</p>
            <p class="rlx-cookie-box-paragraph">LegitimateInterestPurpose(s)</p>
        </div>
        <label>
            <input type="checkbox" class="js-rlx-check" onclick="RlxCookie.toggle()" hidden>
            <div class="rlx-cookie-box-check"></div>
        </label>
    </div>
</template>