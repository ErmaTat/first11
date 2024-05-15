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

<script type="text/html" id="wpb-modifications"> window.wpbCustomElement = 1; </script>
<link rel='stylesheet' id='rs-plugin-settings-css'
    href='{{asset('assets/wp-content/plugins/revslider/public/assets/css/rs6.css')}}' type='text/css' media='all'>
<style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
</style>
<script type="text/javascript" src="{{asset('assets/wp-content/plugins/contact-form-7/includes/swv/js/index.js')}}" id="swv-js">
</script>
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
<script type="text/javascript" src="{{asset('assets/wp-content/plugins/contact-form-7/includes/js/index.js')}}"
    id="contact-form-7-js"></script>
<script type="text/javascript" src="{{('assets/wp-content/plugins/revslider/public/assets/js/rbtools.min.js')}}" defer=""
    async="" id="tp-tools-js"></script>
<script type="text/javascript" src="{{asset('assets/wp-content/plugins/revslider/public/assets/js/rs6.min.js')}}" defer=""
    async="" id="revmin-js"></script>
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
<script type="text/javascript" src="{{asset('assets/wp-content/plugins/wp-polls/polls-js.js')}}" id="wp-polls-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/vendor/bootstrap.min.js')}}"
    id="bootstrap-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery-ui-min.js')}}" id="jquery-ui-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/owl.carousel.min.js')}}"
    id="owl-carousel-js"></script>
<script type="text/javascript" src="{{asset('assets/wp-content/themes/escobars/includes/js/jquery.downCount.js')}}"
    id="downCount-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/bootsnav.js')}}" id="bootsnav-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/isotope.pkgd.min.js')}}"
    id="isotope-pkgd-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery.prettyPhoto.js')}}"
    id="prettyPhoto-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/scripts/Tweetie/tweetie.min.js')}}"
    id="tweetie-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery.appear.js')}}" id="appear-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/waypoints.min.js')}}" id="waypoints-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jQuery-plugin-progressbar.js')}}"
    id="progressbar-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/v.carousel.js')}}" id="v-carousel-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery.share.js')}}"
    id="sportsox-jquery.share-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jquery.fitvids.js')}}" id="fitvids-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/jQuery-plugin-progressbar.js')}}"
    id="sportsox-progressbar-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/pie-chart.js')}}"
    id="sportsox-pie-chart-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/wow.min.js')}}" id="wow-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/slide.menu.min.js')}}"
    id="slide-menu-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/escobar-preloader.js')}}"
    id="escobar-preloader-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-content/themes/escobars/includes/js/custom.js')}}" id="sportsox-main-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js')}}"
    id="wpb_composer_front_js-js"></script>
<script type="text/javascript" defer="" src="{{ asset('assets/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js')}}"
    id="mc4wp-forms-api-js"></script>
<script></script>
