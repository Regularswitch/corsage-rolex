
export default class {
    constructor() {
        this.slugs = {}
        this.cookieName = "rlx-consent"
        this.version()
    }
    status() {
        let AllCookies = document.cookie
        let AllCookiesDecode = decodeURIComponent(AllCookies)
        let AllCookiesList = AllCookiesDecode.split(";")
        let ListCookie = AllCookiesList.reduce((acc, isCookie) => {
            let [key, value] = isCookie.split("=")
            acc[key.replace(/\s/gi, '')] = value
            return acc
        }, {})
        return ListCookie?.[this.cookieName] == 'true' ? true : false
    }
    version() {
        window.coBrandVersion = "Hybrid"
    }
    slugHome(slug) {
        this.slugs[slug] = "home page"
    }
    slugContact(slug) {
        this.slugs[slug] = "store contact page"
    }
    slugHistory(slug) {
        this.slugs[slug] = "history page"
    }
    slugMaintenance(slug) {
        this.slugs[slug] = "servicing your rolex page"
    }
    slugNewModels(slug) {
        this.slugs[slug] = "new watches page"
    }
    getSlug() {
        return window.location.href.split('/').filter(s => s.length > 1).reverse()[0] || ''
    }
    dataLayer() {
        if (this.slugs[this.getSlug()]) {
            globalThis.digitalDataLayer = {
                page: {
                    pageType: this.slugs[this.getSlug()]
                }
            };
            this.adobe()
        }
    }
    adobe() {
        if(this.status()) {
            let $script = document.createElement('script')
            $script.src = "//assets.adobedtm.com/7e3b3fa0902e/7ba12da1470f/launch-5de25e657d80.min.js"
            $script.onload = () => {
                _satellite.pageBottom();
            }
            document.querySelector('body').append($script)
        }
    }   
}
