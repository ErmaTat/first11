<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teamfoot &#8211; Escobars</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Escobars &raquo; Feed"
        href="https://webredox.net/demo/wp/sportsox/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Escobars &raquo; Comments Feed"
        href="https://webredox.net/demo/wp/sportsox/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/webredox.net\/demo\/wp\/sportsox\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.4"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='{{ asset("assets/wp-includes/css/dist/block-library/style.min.css")}}'
        type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='redux-extendify-styles-css'
        href='{{ asset("assets/wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilities.css") }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='{{ asset("assets/wp-content/plugins/contact-form-7/includes/css/styles.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wp-polls-css'
        href='{{ asset("assets/wp-content/plugins/wp-polls/polls-css.css") }}' type='text/css'
        media='all' />
    <style id='wp-polls-inline-css' type='text/css'>
        .wp-polls .pollbar {
            margin: 1px;
            font-size: 6px;
            line-height: 8px;
            height: 8px;
            background-image: url('{{ asset("assets/wp-content/plugins/wp-polls/images/default/pollbg.gif") }}');
            border: 1px solid #c8c8c8;
        }
    </style>
    <link rel='stylesheet' id='sportsox-main-css' href='{{ asset("assets/wp-content/themes/escobars/style.css") }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/bootstrap.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='jquery-ui-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/jquery-ui.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='owl-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/owl.carousel.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='prettyPhoto-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/prettyPhoto.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='animate-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/animate.min.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/font-awesome.min.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bootsnav-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/bootsnav.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wow-animate-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/animate.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='sportsox-montserrat-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/fonts/montserrat-ultralight-webfont.css") }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sportsox-preloader-style-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/preloader-style.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='sportsox-style-css'
        href='{{ asset("assets/wp-content/themes/escobars/includes/css/style.css") }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='sportsox_fonts-css'
        href='//fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7COpen+Sans%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C700%2C700i%2C800%2C800i&#038;ver=1.0.0'
        type='text/css' media='all' />
    <script type="text/javascript" src="{{ asset('assets/wp-includes/js/jquery/jquery.min.js') }}"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="{{ asset('assets/wp-includes/js/jquery/jquery-migrate.min.js')}}"
        id="jquery-migrate-js"></script>
    <script></script>
    <link rel="https://api.w.org/" href="https://webredox.net/demo/wp/sportsox/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://webredox.net/demo/wp/sportsox/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.4" />
    <link rel="canonical" href="https://webredox.net/demo/wp/sportsox/club/teamfoot-copy/" />
    <link rel='shortlink' href='https://webredox.net/demo/wp/sportsox/?p=122' />
    <link rel="alternate" type="application/json+oembed"
        href="https://webredox.net/demo/wp/sportsox/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwebredox.net%2Fdemo%2Fwp%2Fsportsox%2Fclub%2Fteamfoot-copy%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://webredox.net/demo/wp/sportsox/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwebredox.net%2Fdemo%2Fwp%2Fsportsox%2Fclub%2Fteamfoot-copy%2F&#038;format=xml" />
    <meta name="generator" content="Redux 4.4.11" />
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.20 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="{{ asset('assets/wp-content/uploads/2017/10/favicon.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/wp-content/uploads/2017/10/favicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/wp-content/uploads/2017/10/favicon.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/wp-content/uploads/2017/10/favicon.png') }}" />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style type="text/css" class="escobars-custom-dynamic-css">
        .footer-top-bg .right-bg-g:before {
            background: url(http://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/footer-bg.jpg);
        }
    </style>
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body class="club-template-default single single-club postid-122 wpb-js-composer js-comp-ver-7.4 vc_responsive">
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <div class="wrapper">
        @include('layouts.nav')
        <!-- End Navigation --><!-- START PAGE TITILE SECTION -->
        <div class="player-profile-section wr-mega-z page-title-section"
            style=background-image:url(https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/page-title.jpg);>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="section-title profile-title">
                            <h1>Teamfoot</h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pagination-area">
                            <ul>
                                <li><a href="https://webredox.net/demo/wp/sportsox/">Escobars<i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">Teamfoot</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF /. PAGE TITLE SECTION -->
        <div class="club-histry-feature-section">
            <div class="container">
                <div class="row">
                    <div class="inner-container">
                        <div class="col-sm-2">
                            <div class="club-histry-img">
                                <a href="#"><img class="img-responsive"
                                        src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/club-img4.png"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="club-histry">
                                <h1>Club <b>History</b></h1>
                                <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis
                                    faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis
                                    leo. Sed fringilla mauris sit amet nibh.</p>
                                <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit
                                    cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend</p>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="club-histry">
                                <h1>Teamfoot</b></h1>
                            </div>
                            <div class="col-sm-6 col-md-4 no-padding">
                                <div class="club-name club-details-inner">
                                    <h1>Legacy (Italy)</h1>
                                    <p>Football Club</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 no-padding">
                                <div class="club-name club-details-inner">
                                    <h1>Established</h1>
                                    <p>Since 1993</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 no-padding">
                                <div class="club-name club-details-inner">
                                    <h1>Arena / Stadium</h1>
                                    <p>Santiago Bernabeu</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 no-padding">
                                <div class="club-name club-details-inner">
                                    <h1>Coach</h1>
                                    <p>Zinedine Zidane</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 no-padding">
                                <div class="club-name club-details-inner">
                                    <h1>Curent President</h1>
                                    <p>Jose Angel Sanchez</p>
                                </div>
                            </div>
                            <div class="col-sm-4 no-padding">

                                <div class="club-social club-details-inner">
                                    <h1>Social</h1>
                                    <ul>
                                        <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                    class="fab fa-facebook"></i></a></li>
                                        <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                    class="fab fa-x-twitter"></i></a></li>
                                        <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank" rel="noopener noreferrer"><i
                                                    class="fab fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="club-play-histry">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#squad" aria-controls="squad"
                                    role="tab" data-toggle="tab">Squad</a></li>
                            <li role="presentation"><a href="#honours" aria-controls="honours" role="tab"
                                    data-toggle="tab">Honours</a></li>
                            <li role="presentation"><a href="#photos" aria-controls="photos" role="tab"
                                    data-toggle="tab">Photos</a></li>
                            <li role="presentation"><a href="#management" aria-controls="management" role="tab"
                                    data-toggle="tab">Jersey</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fadeIn-Up animatedMini  active" id="squad">
                                <div class="player-total-details">
                                    <div class="player-name-img player-inner">
                                        <div class="profile-image">

                                            <a href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal/"><img
                                                    width="65" height="70"
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/mario.jpg"
                                                    class="attachment-escobars_player_img_club size-escobars_player_img_club wp-post-image"
                                                    alt="" decoding="async"
                                                    srcset="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/mario.jpg 370w, https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/mario-278x300.jpg 278w"
                                                    sizes="(max-width: 65px) 100vw, 65px" /></a>

                                        </div>
                                        <div class="profile-caption profile-caption1">
                                            <h3>#12</h3>
                                            <p>Henry Anderbal</p>
                                        </div>
                                    </div>
                                    <div class="player-country player-inner">
                                        <div class="profile-image">
                                            <a href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal/"><img
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/flag3.png"
                                                    alt=""></a>

                                        </div>
                                        <div class="profile-caption profile-caption2">
                                            <p>IS</p>
                                        </div>
                                    </div>
                                    <div class="player-position player-inner">
                                        <h3>Center-back <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                    </div>
                                </div>
                                <div class="player-total-details">
                                    <div class="player-name-img player-inner">
                                        <div class="profile-image">

                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy/"><img
                                                    width="65" height="70"
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/4-2.jpg"
                                                    class="attachment-escobars_player_img_club size-escobars_player_img_club wp-post-image"
                                                    alt="" decoding="async"
                                                    srcset="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/4-2.jpg 370w, https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/4-2-278x300.jpg 278w"
                                                    sizes="(max-width: 65px) 100vw, 65px" /></a>

                                        </div>
                                        <div class="profile-caption profile-caption1">
                                            <h3>#16</h3>
                                            <p>Henry Anderbal</p>
                                        </div>
                                    </div>
                                    <div class="player-country player-inner">
                                        <div class="profile-image">
                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy/"><img
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/flag5.png"
                                                    alt=""></a>

                                        </div>
                                        <div class="profile-caption profile-caption2">
                                            <p>DR</p>
                                        </div>
                                    </div>
                                    <div class="player-position player-inner">
                                        <h3>Full-back <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                    </div>
                                </div>
                                <div class="player-total-details">
                                    <div class="player-name-img player-inner">
                                        <div class="profile-image">

                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy-2/"><img
                                                    width="65" height="70"
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/john.jpg"
                                                    class="attachment-escobars_player_img_club size-escobars_player_img_club wp-post-image"
                                                    alt="" decoding="async"
                                                    srcset="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/john.jpg 370w, https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/john-278x300.jpg 278w"
                                                    sizes="(max-width: 65px) 100vw, 65px" /></a>

                                        </div>
                                        <div class="profile-caption profile-caption1">
                                            <h3>#18</h3>
                                            <p>Henry Anderbal</p>
                                        </div>
                                    </div>
                                    <div class="player-country player-inner">
                                        <div class="profile-image">
                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy-2/"><img
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/flag3.png"
                                                    alt=""></a>

                                        </div>
                                        <div class="profile-caption profile-caption2">
                                            <p>IE</p>
                                        </div>
                                    </div>
                                    <div class="player-position player-inner">
                                        <h3>Second striker <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                    </div>
                                </div>
                                <div class="player-total-details">
                                    <div class="player-name-img player-inner">
                                        <div class="profile-image">

                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy-4/"><img
                                                    width="65" height="70"
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/lucas.jpg"
                                                    class="attachment-escobars_player_img_club size-escobars_player_img_club wp-post-image"
                                                    alt="" decoding="async" loading="lazy"
                                                    srcset="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/lucas.jpg 370w, https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/lucas-278x300.jpg 278w"
                                                    sizes="(max-width: 65px) 100vw, 65px" /></a>

                                        </div>
                                        <div class="profile-caption profile-caption1">
                                            <h3>#12</h3>
                                            <p>Henry Anderbal</p>
                                        </div>
                                    </div>
                                    <div class="player-country player-inner">
                                        <div class="profile-image">
                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy-4/"><img
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/flag4.png"
                                                    alt=""></a>

                                        </div>
                                        <div class="profile-caption profile-caption2">
                                            <p>IE</p>
                                        </div>
                                    </div>
                                    <div class="player-position player-inner">
                                        <h3>Goalkeeper <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                    </div>
                                </div>
                                <div class="player-total-details">
                                    <div class="player-name-img player-inner">
                                        <div class="profile-image">

                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy-3/"><img
                                                    width="65" height="70"
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/3-2.jpg"
                                                    class="attachment-escobars_player_img_club size-escobars_player_img_club wp-post-image"
                                                    alt="" decoding="async" loading="lazy"
                                                    srcset="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/3-2.jpg 370w, https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/3-2-278x300.jpg 278w"
                                                    sizes="(max-width: 65px) 100vw, 65px" /></a>

                                        </div>
                                        <div class="profile-caption profile-caption1">
                                            <h3>#12</h3>
                                            <p>Henry Anderbal</p>
                                        </div>
                                    </div>
                                    <div class="player-country player-inner">
                                        <div class="profile-image">
                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy-3/"><img
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/flag2.png"
                                                    alt=""></a>

                                        </div>
                                        <div class="profile-caption profile-caption2">
                                            <p>FR</p>
                                        </div>
                                    </div>
                                    <div class="player-position player-inner">
                                        <h3>Winger <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                    </div>
                                </div>
                                <div class="player-total-details">
                                    <div class="player-name-img player-inner">
                                        <div class="profile-image">

                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy-5/"><img
                                                    width="65" height="70"
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/2-1.jpg"
                                                    class="attachment-escobars_player_img_club size-escobars_player_img_club wp-post-image"
                                                    alt="" decoding="async" loading="lazy"
                                                    srcset="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/2-1.jpg 370w, https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/2-1-278x300.jpg 278w"
                                                    sizes="(max-width: 65px) 100vw, 65px" /></a>

                                        </div>
                                        <div class="profile-caption profile-caption1">
                                            <h3>#12</h3>
                                            <p>Henry Anderbal</p>
                                        </div>
                                    </div>
                                    <div class="player-country player-inner">
                                        <div class="profile-image">
                                            <a
                                                href="https://webredox.net/demo/wp/sportsox/player/henry-anderbal-copy-5/"><img
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/flag3.png"
                                                    alt=""></a>

                                        </div>
                                        <div class="profile-caption profile-caption2">
                                            <p>IS</p>
                                        </div>
                                    </div>
                                    <div class="player-position player-inner">
                                        <h3>Defensive <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                    </div>
                                </div>

                            </div>

                            <div role="tabpanel" class="tab-pane fadeIn-Up animatedMini club-honour" id="honours">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="media honours-intro">
                                            <div class="pull-left">
                                                <h3>17</h3> <span>Champion</span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="club-team-title"><b>LA LIGA</b></h4>
                                                <div class="win-list">
                                                    1999,2001,2005,2006,1999,2001,2005,2006,1999,2001,2005,2006,1999,2001,2005,2006
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="media honours-intro">
                                            <div class="pull-left">
                                                <h3>13</h3> <span>Champion</span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="club-team-title"><b>CHAMPIONS LEAGUE</b></h4>
                                                <div class="win-list">2016, 2017</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fadeIn-Up animatedMini" id="photos">
                                <div class="row">
                                    <div class='col-sm-4 col-xs-4 club-gallery gallery'>
                                        <a href="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/s1.jpg"
                                            data-gal="prettyPhoto[gallery2]"><img
                                                src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/s1.jpg"
                                                class="img-responsive" alt="" /></a>
                                    </div>

                                    <div class='col-sm-4 col-xs-4 club-gallery gallery'>
                                        <a href="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/s2.jpg"
                                            data-gal="prettyPhoto[gallery2]"><img
                                                src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/s2.jpg"
                                                class="img-responsive" alt="" /></a>
                                    </div>

                                    <div class='col-sm-4 col-xs-4 club-gallery gallery'>
                                        <a href="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/s3.jpg"
                                            data-gal="prettyPhoto[gallery2]"><img
                                                src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/s3.jpg"
                                                class="img-responsive" alt="" /></a>
                                    </div>

                                    <div class='col-sm-4 col-xs-4 club-gallery gallery'>
                                        <a href="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/3-1.jpg"
                                            data-gal="prettyPhoto[gallery2]"><img
                                                src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/3-1.jpg"
                                                class="img-responsive" alt="" /></a>
                                    </div>

                                    <div class='col-sm-4 col-xs-4 club-gallery gallery'>
                                        <a href="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/4-1.jpg"
                                            data-gal="prettyPhoto[gallery2]"><img
                                                src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/4-1.jpg"
                                                class="img-responsive" alt="" /></a>
                                    </div>

                                    <div class='col-sm-4 col-xs-4 club-gallery gallery'>
                                        <a href="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/5.jpg"
                                            data-gal="prettyPhoto[gallery2]"><img
                                                src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/5.jpg"
                                                class="img-responsive" alt="" /></a>
                                    </div>

                                    <div class='col-sm-4 col-xs-4 club-gallery gallery'>
                                        <a href="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/7.jpg"
                                            data-gal="prettyPhoto[gallery2]"><img
                                                src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/7.jpg"
                                                class="img-responsive" alt="" /></a>
                                    </div>

                                    <div class='col-sm-4 col-xs-4 club-gallery gallery'>
                                        <a href="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/8.jpg"
                                            data-gal="prettyPhoto[gallery2]"><img
                                                src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/8.jpg"
                                                class="img-responsive" alt="" /></a>
                                    </div>

                                    <div class='col-sm-4 col-xs-4 club-gallery gallery'>
                                        <a href="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/9.jpg"
                                            data-gal="prettyPhoto[gallery2]"><img
                                                src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/9.jpg"
                                                class="img-responsive" alt="" /></a>
                                    </div>

                                </div>
                            </div>



                            <div role="tabpanel" class="tab-pane club-jersey fadeIn-Up animatedMini" id="management">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="media">
                                            <div class="pull-left"> <img
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/jersey1.png">
                                            </div>
                                            <div class="media-body club-jersey-text">
                                                <p>Home Kit</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="media">
                                            <div class="pull-left"> <img
                                                    src="https://webredox.net/demo/wp/sportsox/wp-content/uploads/2017/10/jersey2.png">
                                            </div>
                                            <div class="media-body club-jersey-text">
                                                <p>Away Kit</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>

    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim()
                if (value !== '' && value.indexOf('http') !== 0) {
                    this.value = 'http://' + value
                }
            }

            const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField)
            }
        })();
    </script>
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='{{ ("assets/wp-content/plugins/revslider/public/assets/css/rs6.css")}}'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/contact-form-7/includes/swv/js/index.js')}}"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/webredox.net\/demo\/wp\/sportsox\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/wp-content/plugins/contact-form-7/includes/js/index.js')}}"
        id="contact-form-7-js"></script>
    <script type="text/javascript"
        src="{{ asset('assets/wp-content/plugins/revslider/public/assets/js/rbtools.min.js')}}"
        defer async id="tp-tools-js"></script>
    <script type="text/javascript"
        src="{{asset('assets/wp-content/plugins/revslider/public/assets/js/rs6.min.js')}}"
        defer async id="revmin-js"></script>
    <script type="text/javascript" id="wp-polls-js-extra">
        /* <![CDATA[ */
        var pollsL10n = {
            "ajax_url": "https:\/\/webredox.net\/demo\/wp\/sportsox\/wp-admin\/admin-ajax.php",
            "text_wait": "Your last request is still being processed. Please wait a while ...",
            "text_valid": "Please choose a valid poll answer.",
            "text_multiple": "Maximum number of choices allowed: ",
            "show_loading": "1",
            "show_fading": "1"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('assets/wp-content/plugins/wp-polls/polls-js.js')}}" id="wp-polls-js">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/wp-content/themes/escobars/includes/js/vendor/bootstrap.min.js') }}" id="bootstrap-js">
    </script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery-ui-min.js') }}"
        id="jquery-ui-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/owl.carousel.min.js') }}"
        id="owl-carousel-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery.downCount.js') }}"
        id="downCount-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/bootsnav.js') }}"
        id="bootsnav-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/isotope.pkgd.min.js') }}"
        id="isotope-pkgd-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery.prettyPhoto.js') }}"
        id="prettyPhoto-js"></script>
    <script type="text/javascript"
        src="{{ asset('assets/wp-content/themes/escobars/includes/scripts/Tweetie/tweetie.min.js') }}" id="tweetie-js">
    </script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery.appear.js') }}"
        id="appear-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/waypoints.min.js') }}"
        id="waypoints-js"></script>
    <script type="text/javascript"
        src="{{ asset('assets/wp-content/themes/escobars/includes/js/jQuery-plugin-progressbar.js') }}"
        id="progressbar-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/v.carousel.js') }}"
        id="v-carousel-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery.share.js') }}"
        id="sportsox-jquery.share-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery.fitvids.js') }}"
        id="fitvids-js"></script>
    <script type="text/javascript"
        src="{{ asset('assets/wp-content/themes/escobars/includes/js/jQuery-plugin-progressbar.js') }}"
        id="sportsox-progressbar-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/pie-chart.js') }}"
        id="sportsox-pie-chart-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/wow.min.js') }}"
        id="wow-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/slide.menu.min.js') }}"
        id="slide-menu-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/escobar-preloader.js') }}"
        id="escobar-preloader-js"></script>
    <script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/custom.js') }}"
        id="sportsox-main-js"></script>
    <script type="text/javascript" defer src="{{ asset('assets/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js') }}"
        id="mc4wp-forms-api-js"></script>
    <script></script>
</body>

</html>
