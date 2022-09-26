<?php $domain = get_site_url(); ?>
<div class="super-popup-box super-popup-disabled" id="js-super-popup">
    <div class="super-popup-content">
        <div>
            <p class="super-popup-paragraph">
                Corsage usa cookies para garantir uma melhor experiência no site.
                Ao continuar sem alterar suas configurações de cookies, pressupõe-se seu
                consentimento com nosso uso de cookies neste dispositivo. Essa configuração
                poderá ser alterada por você a qualquer momento, mas isso poderá prejudicar a
                funcionalidade em nossos sites.
                <a href="<?php echo  $domain; ?>/politica-privacidade" class="super-popup-link" target="_blank">Termos de uso</a>
            </p>
        </div>
        <div>
            <button class="super-popup-btn" onclick="SuperPopup.disabled()">RECUSAR</button>
            <button class="super-popup-btn super-popup-aceitar" onclick="SuperPopup.active()">ACEITAR</button>
        </div>
    </div>
</div>