
window.coBrandVersion = "Hybrid"

var slugs = {
    "rolex-na-corsage": "home page",
    "rolex": "store contact age",
    "contato-rolex": "store contact page",
    "nossa-historia-com-a-rolex": "history page",
    "manutencao": "servicing your rolex page",
    "novos-modelos": "new watches page",
}

var path = window.location.href.split('/').filter(s => s.length > 1).reverse()[0] || ''

if (slugs[path]) {
    // var digitalDataLayer = {
    //     page: {
    //         pageType: slugs[path]
    //     }
    // };
    // _satellite.pageBottom();
}

function checkWhats() {
    _satellite.track("whatsappContact");
}

function checkTelefone() {
    _satellite.track("contactCall");
}

function checkDirections() {
    _satellite.track("getDirections");
}

if (document.querySelector('.swiper-container-rlx_mini')) {
    var swiper = new Swiper('.swiper-container-rlx_mini', {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination-rlx_mini',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        }
    });
}

var RlxCookie = (function () {
    let nameCookie = "rlx-consent"

    let GetCookie = (name) => {
        let AllCookies = document.cookie
        let AllCookiesDecode = decodeURIComponent(AllCookies)
        let AllCookiesList = AllCookiesDecode.split(";")
        let ListCookie = AllCookiesList.reduce((acc, isCookie) => {
            let [key, value] = isCookie.split("=")
            acc[key.replace(/\s/gi, '')] = value
            return acc
        }, {})
        return ListCookie[name]
    }
    let SetCookie = (name, value) => {
        document.cookie = `${name}=${value};path=/`
    }
    let exitCookie = () => GetCookie(nameCookie)
    if (!exitCookie()) {
        SetCookie(nameCookie, "false")
    }
    let notificationTrack = () => {
        globalThis?._satellite?.setVar("Analyticsconsent", GetCookie(nameCookie))
        if (GetCookie(nameCookie) === "true") {
            globalThis?._satellite?.track("PageView");
        }
    }
    let notificationIframe = () => {
        let Iframe = document.getElementById("rlx-corner")
        if (Iframe) {
            let statusNow = GetCookie(nameCookie) === "true" ? true : false
            if (statusNow) {
                Iframe.contentWindow.postMessage("consentTrue", "https://corners.rolex.com")
                Iframe.contentWindow.postMessage("consentValidation", "https://corners.rolex.com")
            } else {
                Iframe.contentWindow.postMessage("consentFalse", "https://corners.rolex.com")
            }
        }
    }
    let render = $el => {
        if ($RlxCookie && $el) {
            $el.innerHTML = $RlxCookie.innerHTML
            let $input = document.querySelector(".js-rlx-check")
            let status = GetCookie(nameCookie) === "true" ? true : false
            if (status) {
                $input.checked = true
            } else {
                $input.checked = false
            }
        }
    }
    return {
        status: () => GetCookie(nameCookie) === "true" ? true : false,
        active: () => {
            SetCookie(nameCookie, "true")
            notificationTrack()
            notificationIframe()
        },
        disabled: () => {
            SetCookie(nameCookie, "false")
            notificationTrack()
            notificationIframe()
        },
        isCheck() {
            let status = GetCookie(nameCookie) === "true" ? true : false
            if (status) {
                this.checked()
            }
        },
        toggle() {
            let status = GetCookie(nameCookie) === "true" ? true : false
            if (status) {
                SetCookie(nameCookie, "false")
            } else {
                SetCookie(nameCookie, "true")
            }
        },
        render
    }
})()
RlxCookie.render(document.getElementById("js-rlx-cookie"))

function toggle_rlx_mobile_menu() {
    let $el = document.querySelector('.menu-mobile-rlx-custom')
    if ($el) {
        $el.classList.toggle('menu-mobile-rlx-custom-active')
    }
}

var SuperPopup = (function () {

    let $pop = document.querySelector("#js-super-popup")
    let nameCookie = "super-popup"

    let GetCookie = (name) => {
        let AllCookies = document.cookie
        let AllCookiesDecode = decodeURIComponent(AllCookies)
        let AllCookiesList = AllCookiesDecode.split(";")
        let ListCookie = AllCookiesList.reduce((acc, isCookie) => {
            let [key, value] = isCookie.split("=")
            acc[key.replace(/\s/gi, '')] = value
            return acc
        }, {})
        return ListCookie[name]
    }
    let SetCookie = (name, value) => {
        document.cookie = `${name}=${value};path=/`
    }
    let exitCookie = () => GetCookie(nameCookie)

    if (!exitCookie()) {
        $pop.classList.remove("super-popup-disabled")
    }
    let active = () => {
        SetCookie(nameCookie, "true")
        RlxCookie.active()
        $pop.classList.add("super-popup-disabled")
    }
    let disabled = () => {
        SetCookie(nameCookie, "false")
        RlxCookie.disabled()
        $pop.classList.add("super-popup-disabled")
    }
    return {
        active,
        disabled
    }
})();


let $menuMobile = document.querySelector('.menu')
if($menuMobile) {
    let $iframe = document.createElement('div')
    $iframe.innerHTML =  `
    <iframe 
        title="Rolex Official Retailer" 
        src="https://static.rolex.com/retailers/clock/?colour=silver&amp;apiKey=e08cdab1a3a8a146194c931c4f03d48d&amp;lang=pt_br" 
        style="width:150px;height:70px;border:0;margin:0 auto;padding:0;overflow:hidden;z-index:0;position:relative;scroll:none" 
        scrolling="NO" frameborder="NO"
        >
    </iframe>
    `
    $menuMobile.before($iframe)
}