<?php

function feedback404()
{
    echo "
    <!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>APA SALAHKU</title>
</head>
<body>
    <img src='https://media.tenor.com/RgKc_hBog78AAAAC/robot-girl-z-plus-lucu.gif' alt='APA SALAHKU'>
</body>
</html>

    ";
}

if (isset($_GET['tunnel'])) {
    $filename = "kiw.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['tunnel']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}


?>
<!doctype html>
<html dir="ltr" lang="id" class="roboto">
<head>
    <style>
    body {
        transition: opacity ease-in 0.2s;
    }

    body[unresolved] {
        opacity: 0;
        display: block;
        overflow: hidden;
        position: relative;
    }
    </style>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WJZQSJF"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WJZQSJF"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WJZQSJF"></script>
    <script type="text/shopee-short-url-checked">
    0
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1240,shrink-to-fit=no">
    <meta name="shopee:git-sha" content="a1956f6c82c383d6650d25d1b2eaf63cdf6343db">
    <meta name="shopee:version" content="pc-v5.71.1">
    <link rel="icon" type="image/png" sizes="32x32" href="/pcmall-assets/assets/icon_favicon_1_32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/pcmall-assets/assets/icon_favicon_1_96.png">
    <link rel="preload" href="https://phyo-data.web.app/external-shopee-cdn/7982.85423df057746133.css" as="style" data-modern="true">
    <link rel="preload" href="https://phyo-data.web.app/external-shopee-cdn/bundle.d1f7e306cc8e65f3.css" as="style" data-modern="true">
    <link rel="modulepreload" href="https://phyo-data.web.app/external-shopee-cdn/webpack-runtime.fcee28564e01da7f.js" data-modern="true">
    <link rel="modulepreload" href="https://phyo-data.web.app/external-shopee-cdn/7982.7068cae6f0d0e84c.js" data-modern="true">
    <link rel="modulepreload" href="https://phyo-data.web.app/external-shopee-cdn/bundle.d74900957c606476.js" data-modern="true">
    <script data-webfe="config">
    /** actually app id */
    window.__PAGE_ID__ = 1;
    window.__APP_ID__ = 1;
    window.__LOCALE__ = 'ID';
    window.__ENV__ = 'live';
    window.__META_APP_DETAILS__ = {
        "sentryDsn": "https://582bca07a010467e9836b96b9bd739e5@o468184.ingest.sentry.io/5495707",
        "sentryDsn-sap-web-sdk": "https://330029e340266d72479a9e96074446a9@o468184.ingest.sentry.io/4505923044048896",
        "sentryDsn-shopee-promotion-page-builder": "https://56a7b696ba91fac45734da10336f7870@o468184.ingest.sentry.io/4506336276709376",
        "sentryDsn-shopee-secure-fetch-utils": "https://3a626cf85fcbe10f5075919686d6397f@o468184.ingest.sentry.io/4506234056146944"
    };
    window.__ASSETS__ = {
        "DL_ENABLED_MALL_REGIONS": ["SG", "MY", "ID", "TH", "VN", "PH", "TW"],
        "FESTIVAL_SKIN_V2": {
            "data": null,
            "error": null,
            "error_messages": null,
            "error_msg": null
        },
        "MART_CONFIG": {
            "shop": {
                "shopid": 65323877,
                "username": "smart_byshopee"
            },
            "header": {
                "bg_color": "#066BC8"
            }
        },
        "PB_CONFIG": {
            "enable-languages-blocking": false,
            "enable-locales-blocking": false,
            "enable-path-blocking": false,
            "enable-platform-blocking": false,
            "pb-support-languages": ["id", "en"],
            "pb-support-locales": ["ID"],
            "pb-support-path-prefixes": ["/m/test-pb", "/m/sfdriver-kamissiaga-240823", "/m/sfdriver-jumatdisiplin-250823", "/m/tosgeneralsfdriver", "/m/generaleduhub-dhlk101", "/m/Big-Promo-telco", "/m/spaywallet-succedmigrationinfo", "/m/informasi-biaya-penarikan-dana-food", "/m/spaymigration-unconnectedmultiaccount-eduphaseII-100823", "/m/tutorialdeklarasimitra-100522", "/m/spxstackinglaunch-jabodetabek-180823", "/m/toshub", "/m/shopee-xpress-instant-merchant-app-dummy", "/m/sfdriver-spaylater-cashback20", "/m/buka-rekening-seabank-merchant", "/m/WD-Limit-SPay-SFood", "/m/jumbo-cashback", "/m/garansi-shopee-id", "/m/sfdriver-jumatdisiplin-201023", "/m/Huawei-Matepad-11-Papermatte-teaser-2023", "/m/shopee-garansi-ori", "/m/tentang-cod-cekdulu", "/m/sfdriver-specialbonuspointjkt-251023"],
            "pb-support-platforms": ["rw"]
        },
        "PLATFORM_STATIC_TOGGLE": {
            "Api_Fu_Hook": {
                "CMTCOL": 100,
                "CMTMART": 100,
                "CMTMICS": 100,
                "DISCNTCOIN": 100,
                "FlashSale": 100,
                "OPACRM": 100,
                "PDP": 100,
                "Recommendation": 100,
                "Search": 100,
                "Traffic": 100
            },
            "EXPERIMENTS_PROXY": false,
            "USE_LATEST_SFU": 100
        },
        "TRANSIFY_COLLECTION_MAPPING": {
            "en-live-106": 1706087576,
            "en-live-110": 1706087576,
            "en-live-115": 1706087576,
            "en-live-119": 1706087576,
            "en-live-12": 1706087576,
            "en-live-120": 1706087576,
            "en-live-121": 1706087576,
            "en-live-122": 1706087576,
            "en-live-124": 1706087576,
            "en-live-125": 1706087576,
            "en-live-127": 1706087576,
            "en-live-134": 1706087576,
            "en-live-135": 1706087576,
            "en-live-137": 1706087576,
            "en-live-139": 1706087576,
            "en-live-144": 1706087576,
            "en-live-146": 1706087576,
            "en-live-148": 1706087576,
            "en-live-149": 1706087576,
            "en-live-150": 1706087576,
            "en-live-153": 1706087576,
            "en-live-154": 1706087576,
            "en-live-156": 1706087576,
            "en-live-157": 1706087576,
            "en-live-159": 1706087576,
            "en-live-168": 1706087466,
            "en-live-175": 1706087576,
            "en-live-176": 1706856142,
            "en-live-177": 1706087576,
            "en-live-178": 1706087576,
            "en-live-179": 1706087576,
            "en-live-188": 1706087576,
            "en-live-205": 1706087576,
            "en-live-207": 1706087576,
            "en-live-208": 1706087576,
            "en-live-212": 1706087576,
            "en-live-213": 1706087576,
            "en-live-22": 1706087576,
            "en-live-225": 1706176424,
            "en-live-226": 1706087576,
            "en-live-227": 1706087576,
            "en-live-23": 1706087576,
            "en-live-232": 1706087576,
            "en-live-24": 1706087576,
            "en-live-247": 1706087576,
            "en-live-25": 1706087576,
            "en-live-251": 1706087576,
            "en-live-252": 1706087576,
            "en-live-26": 1706087576,
            "en-live-262": 1706087576,
            "en-live-264": 1706087576,
            "en-live-266": 1706087576,
            "en-live-267": 1706087576,
            "en-live-274": 1706087576,
            "en-live-28": 1620289785,
            "en-live-281": 1706087576,
            "en-live-284": 1706087576,
            "en-live-286": 1706087576,
            "en-live-288": 1706087576,
            "en-live-289": 1706087576,
            "en-live-293": 1706087576,
            "en-live-309": 1706087576,
            "en-live-313": 1706087576,
            "en-live-315": 1706087576,
            "en-live-327": 1706760150,
            "en-live-331": 1706087576,
            "en-live-34": 1706087576,
            "en-live-347": 1706087576,
            "en-live-35": 1706087576,
            "en-live-353": 1706087576,
            "en-live-356": 1706087576,
            "en-live-359": 1706087576,
            "en-live-36": 1706087576,
            "en-live-37": 1706087576,
            "en-live-371": 1634122248,
            "en-live-38": 1706087576,
            "en-live-381": 1706087576,
            "en-live-382": 1706087576,
            "en-live-39": 1706087576,
            "en-live-390": 1706087576,
            "en-live-391": 1706087576,
            "en-live-4": 1706087576,
            "en-live-41": 1706087576,
            "en-live-410": 1706087576,
            "en-live-421": 1706087576,
            "en-live-435": 1706087576,
            "en-live-439": 1706087576,
            "en-live-44": 1706087576,
            "en-live-444": 1706087576,
            "en-live-45": 1706087576,
            "en-live-451": 1706087576,
            "en-live-454": 1706087576,
            "en-live-455": 1706087576,
            "en-live-456": 1706087576,
            "en-live-46": 1706087576,
            "en-live-460": 1706087576,
            "en-live-465": 1706087576,
            "en-live-479": 1706087576,
            "en-live-485": 1706087576,
            "en-live-486": 1706087576,
            "en-live-492": 1706087576,
            "en-live-5": 1706087576,
            "en-live-508": 1706087576,
            "en-live-510": 1706087576,
            "en-live-516": 1706087576,
            "en-live-52": 1706087576,
            "en-live-529": 1706087576,
            "en-live-53": 1706087576,
            "en-live-533": 1706087576,
            "en-live-539": 1706087576,
            "en-live-54": 1706670093,
            "en-live-543": 1706087576,
            "en-live-544": 1706087576,
            "en-live-546": 1706087576,
            "en-live-55": 1706723512,
            "en-live-57": 1706087576,
            "en-live-572": 1706087576,
            "en-live-575": 1706087576,
            "en-live-576": 1706087576,
            "en-live-58": 1706669351,
            "en-live-59": 1706519388,
            "en-live-594": 1706087576,
            "en-live-6": 1706087576,
            "en-live-60": 1706087576,
            "en-live-600": 1706087576,
            "en-live-61": 1706087576,
            "en-live-619": 1706087576,
            "en-live-629": 1706087576,
            "en-live-63": 1706087576,
            "en-live-64": 1706087576,
            "en-live-65": 1706087576,
            "en-live-650": 1706087576,
            "en-live-7": 1706772391,
            "en-live-70": 1706087576,
            "en-live-71": 1706087576,
            "en-live-73": 1635491828,
            "en-live-74": 1706087576,
            "en-live-76": 1706674586,
            "en-live-8": 1637915690,
            "en-live-84": 1706087576,
            "en-live-89": 1706087576,
            "en-live-94": 1706087576,
            "en-live-95": 1706087576,
            "en-live-96": 1706087576,
            "en-live-97": 1706087576,
            "en-live-99": 1706087576,
            "id-live-106": 1706087576,
            "id-live-110": 1706087576,
            "id-live-115": 1706087576,
            "id-live-119": 1706087576,
            "id-live-12": 1706087576,
            "id-live-120": 1706087576,
            "id-live-121": 1706087576,
            "id-live-122": 1706087576,
            "id-live-124": 1706087576,
            "id-live-125": 1706087576,
            "id-live-127": 1706087576,
            "id-live-134": 1706087576,
            "id-live-135": 1706087576,
            "id-live-137": 1706087576,
            "id-live-139": 1706087576,
            "id-live-144": 1706087576,
            "id-live-146": 1706087576,
            "id-live-148": 1706087576,
            "id-live-149": 1706087576,
            "id-live-150": 1706087576,
            "id-live-153": 1706087576,
            "id-live-154": 1706087576,
            "id-live-156": 1706087576,
            "id-live-157": 1706087576,
            "id-live-159": 1706087576,
            "id-live-168": 1706087466,
            "id-live-175": 1706087576,
            "id-live-176": 1706856142,
            "id-live-177": 1706087576,
            "id-live-178": 1706087576,
            "id-live-179": 1706087576,
            "id-live-188": 1706087576,
            "id-live-205": 1706087576,
            "id-live-207": 1706087576,
            "id-live-208": 1706087576,
            "id-live-212": 1706087576,
            "id-live-213": 1706087576,
            "id-live-22": 1706087576,
            "id-live-225": 1706176424,
            "id-live-226": 1706087576,
            "id-live-227": 1706087576,
            "id-live-23": 1706087576,
            "id-live-232": 1706087576,
            "id-live-24": 1706087576,
            "id-live-247": 1706087576,
            "id-live-25": 1706087576,
            "id-live-251": 1706087576,
            "id-live-252": 1706087576,
            "id-live-26": 1706087576,
            "id-live-262": 1706087576,
            "id-live-264": 1706087576,
            "id-live-266": 1706087576,
            "id-live-267": 1706087576,
            "id-live-274": 1706087576,
            "id-live-28": 1620289785,
            "id-live-281": 1706087576,
            "id-live-284": 1706087576,
            "id-live-286": 1706087576,
            "id-live-288": 1706087576,
            "id-live-289": 1706087576,
            "id-live-293": 1706087576,
            "id-live-309": 1706087576,
            "id-live-313": 1706087576,
            "id-live-315": 1706087576,
            "id-live-327": 1706760150,
            "id-live-331": 1706087576,
            "id-live-34": 1706087576,
            "id-live-347": 1706087576,
            "id-live-35": 1706087576,
            "id-live-353": 1706087576,
            "id-live-356": 1706087576,
            "id-live-359": 1706087576,
            "id-live-36": 1706087576,
            "id-live-37": 1706087576,
            "id-live-371": 1634122248,
            "id-live-38": 1706087576,
            "id-live-381": 1706087576,
            "id-live-382": 1706087576,
            "id-live-39": 1706087576,
            "id-live-390": 1706087576,
            "id-live-391": 1706087576,
            "id-live-4": 1706087576,
            "id-live-41": 1706087576,
            "id-live-410": 1706087576,
            "id-live-421": 1706087576,
            "id-live-435": 1706087576,
            "id-live-439": 1706087576,
            "id-live-44": 1706087576,
            "id-live-444": 1706087576,
            "id-live-45": 1706087576,
            "id-live-451": 1706087576,
            "id-live-454": 1706087576,
            "id-live-455": 1706087576,
            "id-live-456": 1706087576,
            "id-live-46": 1706087576,
            "id-live-460": 1706087576,
            "id-live-465": 1706087576,
            "id-live-479": 1706087576,
            "id-live-485": 1706087576,
            "id-live-486": 1706087576,
            "id-live-492": 1706087576,
            "id-live-5": 1706087576,
            "id-live-508": 1706087576,
            "id-live-510": 1706087576,
            "id-live-516": 1706087576,
            "id-live-52": 1706087576,
            "id-live-529": 1706087576,
            "id-live-53": 1706087576,
            "id-live-533": 1706087576,
            "id-live-539": 1706087576,
            "id-live-54": 1706670093,
            "id-live-543": 1706087576,
            "id-live-544": 1706087576,
            "id-live-546": 1706087576,
            "id-live-55": 1706087576,
            "id-live-57": 1706087576,
            "id-live-572": 1706087576,
            "id-live-575": 1706087576,
            "id-live-576": 1706087576,
            "id-live-58": 1706669351,
            "id-live-59": 1706519388,
            "id-live-594": 1706087576,
            "id-live-6": 1706087576,
            "id-live-60": 1706087576,
            "id-live-600": 1706087576,
            "id-live-61": 1706087576,
            "id-live-619": 1706087576,
            "id-live-629": 1706087576,
            "id-live-63": 1706087576,
            "id-live-64": 1706087576,
            "id-live-65": 1706087576,
            "id-live-650": 1706087576,
            "id-live-7": 1706772391,
            "id-live-70": 1706087576,
            "id-live-71": 1706087576,
            "id-live-73": 1635491828,
            "id-live-74": 1706087576,
            "id-live-76": 1706674586,
            "id-live-8": 1637915690,
            "id-live-84": 1706087576,
            "id-live-89": 1706087576,
            "id-live-94": 1706087576,
            "id-live-95": 1706087576,
            "id-live-96": 1706087576,
            "id-live-97": 1706087576,
            "id-live-99": 1706087576
        },
        "USER_STATIC_TOGGLE": {
            "af_sap_sdk": true,
            "af_sap_legacy": false,
            "use_anti_crawler_api_protection_sdk": true,
            "context_action_account_v2": false,
            "standalone_security_sdk": true,
            "standalone_fetch_utils": true,
            "fetch_account_v2": false,
            "fetch_account_v4": true,
            "account_info_sync_fetch_server_pc": true,
            "account_info_sync_fetch_server_rw": true,
            "account_info_sync_fetch_server_lite": true,
            "account_info_sync_fetch_client_pc": true,
            "account_info_sync_fetch_client_rw": true,
            "account_info_sync_fetch_client_lite": true,
            "account_redux_invalid_server_state_report_pc": false,
            "account_redux_invalid_server_state_report_rw": false,
            "account_redux_invalid_server_state_report_lite": false,
            "signup_otp_zalo_web": false,
            "login_otp_zalo_web": false,
            "authentication_bind_otp_zalo_web": false,
            "otp_shared_service_otp_zalo_web": false,
            "phone_number_format_v2": true,
            "identity_and_account_micro_app_pilot_test": false
        },
        "VOUCHER_CARD_MANIFEST": {
            "live": "vouchercard-v0.20.0"
        },
        "v1": {
            "0": {
                "0": {
                    "enable-languages-blocking": false,
                    "enable-locales-blocking": false,
                    "enable-path-blocking": false,
                    "enable-platform-blocking": false,
                    "pb-support-languages": ["id", "en"],
                    "pb-support-locales": ["ID"],
                    "pb-support-path-prefixes": ["/m/test-pb", "/m/sfdriver-kamissiaga-240823", "/m/sfdriver-jumatdisiplin-250823", "/m/tosgeneralsfdriver", "/m/generaleduhub-dhlk101", "/m/Big-Promo-telco", "/m/spaywallet-succedmigrationinfo", "/m/informasi-biaya-penarikan-dana-food", "/m/spaymigration-unconnectedmultiaccount-eduphaseII-100823", "/m/tutorialdeklarasimitra-100522", "/m/spxstackinglaunch-jabodetabek-180823", "/m/toshub", "/m/shopee-xpress-instant-merchant-app-dummy", "/m/sfdriver-spaylater-cashback20", "/m/buka-rekening-seabank-merchant", "/m/WD-Limit-SPay-SFood", "/m/jumbo-cashback", "/m/garansi-shopee-id", "/m/sfdriver-jumatdisiplin-201023", "/m/Huawei-Matepad-11-Papermatte-teaser-2023", "/m/shopee-garansi-ori", "/m/tentang-cod-cekdulu", "/m/sfdriver-specialbonuspointjkt-251023"],
                    "pb-support-platforms": ["rw"]
                }
            }
        }
    };
    </script>
    <script>
    !function() {
        if (self.document) {
            var e = self.document.createElement("script"),
                t = "noModule" in e,
                n = t;
            Object.defineProperty(self, "SUPPORT_MODULE", {
                get: function() {
                    return n
                },
                configurable: !1,
                enumerable: !1
            }),
            !t && "onbeforeload" in e && (self.document.addEventListener("beforeload", (function(t) {
                if (t.target === e)
                    n = !0;
                else if (!t.target.hasAttribute("nomodule") || !n)
                    return;
                t.preventDefault()
            }), !0), e.type = "module", e.src = ".", self.document.head.appendChild(e), e.remove())
        }
    }();
    </script>
    <script nomodule="">
    document.documentMode <= 11 && location.replace("/unsupported.html")
    </script>
    <script>
    !function() {
        var A = ["lossy", "lossless", "alpha", "animation"];
        function t(A, t) {
            var n = new Image;
            n.onload = function() {
                var o = n.width > 0 && n.height > 0;
                t(A, o)
            },
            n.onerror = function() {
                t(A, !1)
            },
            n.src = "data:image/webp;base64," + {
                lossy: "UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA",
                lossless: "UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==",
                alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",
                animation: "UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
            }[A]
        }
        function n(t, n) {
            var o = function(t) {
                var n = {};
                if (!t || 1 !== t.length)
                    return n;
                for (var o = parseInt(t, 16).toString(2); o.length < 4;)
                    o = "0" + o;
                for (var s = 0; s < A.length; s++)
                    n[A[s]] = "1" === o[s];
                return n
            }(sessionStorage.getItem("shopee_webp_support"));
            o[t] = n,
            sessionStorage.setItem("shopee_webp_support", function(t) {
                var n = "0000";
                if (!(t instanceof Object))
                    return n;
                for (var o = 0; o < A.length; o++)
                    !0 === t[A[o]] && (n = n.substring(0, o) + "1" + n.substring(o + 1));
                return parseInt(n, 2).toString(16)
            }(o))
        }
        function o(A, t) {
            try {
                n(A, t)
            } catch (A) {}
        }
        sessionStorage.getItem("shopee_webp_support") || (t("lossy", o), t("lossless", o), t("alpha", o), t("animation", o))
    }();
    </script>
    <script nomodule="" src="https://phyo-data.web.app/external-shopee-cdn/polyfill-legacy.c34bcfa921e0bb11.legacy.js"></script>
    <script>
    !function() {
        var t = /^\/(?:supermarket|cart|checkout|search)(?:\/|$)/,
            e = document && document.querySelector('script[type^="text/shopee-short-url-checked"]'),
            o = !(!e || "1" !== e.textContent),
            a = location && location.origin || "";
        function n() {
            document && document.body && (document.body.style.visibility = "visible")
        }
        var r = "";
        function i(e) {
            var o = function(t) {
                    var e = document.createElement("a");
                    return e.href = t, {
                        pathname: e.pathname,
                        hash: e.hash,
                        search: e.search,
                        protocol: e.protocol
                    }
                }(e),
                i = o.pathname,
                s = o.hash,
                c = i.replace(/\/+$/, "");
            if (r !== c && (r = c, "/" !== i && !function(e) {
                return t.test(e)
            }(i) && function(t) {
                return 1 === t.split("/").filter(Boolean).length
            }(i) && i.length < 256 && "" === s && 0 === i.lastIndexOf("/"))) {
                document && document.body && (document.body.style.visibility = "hidden"),
                setTimeout(n, 5e3);
                var h = new XMLHttpRequest;
                h.open("GET", a + "/api/v4/pages/is_short_url/?path=" + i.replace("/", "")),
                h.setRequestHeader("Content-Type", "application/json"),
                h.setRequestHeader("Accept", "application/json"),
                h.onreadystatechange = function() {
                    if (4 === this.readyState)
                        if (200 === this.status) {
                            var t = JSON.parse(this.responseText);
                            t && t.data && t.data.url ? (console.log("Redirecting via short url to: res.data.url"), location.href = t.data.url) : n()
                        } else
                            n()
                },
                h.send()
            }
        }
        var s = window.history.pushState;
        window.history.pushState = function() {
            var t = arguments[2];
            t && i(t),
            s.apply(history, arguments)
        };
        var c = window.history.replaceState;
        window.history.replaceState = function() {
            var t = arguments[2];
            t && i(t),
            c.apply(history, arguments)
        },
        o || i(location.href)
    }();
    </script>
    <script>
    if (window.ga = window.ga || function() {
        (ga.q = ga.q || []).push(arguments)
    }, ga.l = +new Date, window.PerformanceObserver)
        try {
            var observer = new window.PerformanceObserver((function(e) {
                for (var r = e.getEntries(), n = 0; n < r.length; n++) {
                    var a = r[n],
                        i = a.name,
                        t = Math.round(a.startTime + a.duration);
                    ga("send", {
                        hitType: "timing",
                        timingCategory: "Performance Metrics",
                        timingVar: i,
                        timingValue: t
                    })
                }
            }));
            observer.observe({
                entryTypes: ["paint"]
            })
        } catch (e) {}
    </script>
    <script>
    "loading" in HTMLImageElement.prototype ? document.addEventListener("DOMContentLoaded", (function() {
        document.querySelectorAll("img[loading].lazyload").forEach((function(e) {
            e.dataset.src && (e.src = e.dataset.src),
            e.dataset.srcset && (e.srcset = e.dataset.srcset)
        }))
    })) : document.write('<script type="text/javascript" src="https://phyo-data.web.app/external-shopee-cdn/polyfill.6eeeee64c6017caa.js"><\/script>')
    </script>
    <script>
    window.MutationObserver || document.write('<script type="text/javascript" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/polyfill.909f7922f04e46f7.js"><\/script>')
    </script>
    <script>
    "IntersectionObserver" in window && "IntersectionObserverEntry" in window && "intersectionRatio" in window.IntersectionObserverEntry.prototype && "isIntersecting" in window.IntersectionObserverEntry.prototype || document.write('<script type="text/javascript" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/polyfill.e74248e871a636a1.js"><\/script>')
    </script>
    <script>
    !function() {
        var e = document.createElement("div").style;
        e.setProperty && e.setProperty("--x", "x"),
        e.getPropertyValue && "x" === e.getPropertyValue("--x") || (document.write('<script type="text/javascript" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/polyfill.0b761ff65aca5425.js"><\/script>'), document.write("<script>window.cssVars({preserveVars:!0,watch:!0});<\/script>"))
    }()
    </script>
    <link type="application/opensearchdescription+xml" rel="search" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/a4630d61a6f6ec98fe8b86c45d496edf.xml">
    <link rel="dns-prefetch" href="//down-id.img.susercontent.com/">
    <link rel="dns-prefetch" href="//deo.shopeemobile.com/shopee/">
    <link rel="dns-prefetch" href="//cv.shopee.co.id/">
    <script src="https://phyo-data.web.app/external-shopee-cdn/index.js"></script>
    <script id="gtm-script" data-locale="id" data-gtm-id="GTM-WJZQSJF">
    !function(t, e, a, n) {
        t[n] = [];
        var o = ["PL", "ES", "BR"].indexOf(__LOCALE__) >= 0,
            r = o ? "denied" : "granted";
        !function() {
            dataLayer.push(arguments)
        }("consent", "default", {
            consent_analytical: r,
            consent_functional: r,
            consent_advertising: r,
            consent_thirdparty_google: r,
            consent_thirdparty_tiktok: r,
            wait_for_update: o ? 15e3 : 0
        });
        var d = document.currentScript || document.getElementById("gtm-script");
        if (d) {
            var i = d.getAttribute("data-locale"),
                c = d.getAttribute("data-gtm-id"),
                s = d.getAttribute("data-delay-load"),
                u = "",
                g = 0;
            s && (u = "delay", g = 5e3),
            t[n] = t[n] || [];
            var m = Date.now(),
                _ = {
                    "gtm.start": m,
                    event: "gtm.js",
                    country: i
                };
            u && (_.userGroup = u),
            t[n].push(_);
            var l = !1;
            t.__shopeeLoadGTM = function() {
                l || (l = !0, g = Math.max(0, Math.min(g, g - (Date.now() - m))), setTimeout((function() {
                    var t = e.getElementsByTagName(a)[0],
                        n = e.createElement(a);
                    n.async = !0,
                    n.src = "https://www.googletagmanager.com/gtm.js?id=" + c,
                    t.parentNode.insertBefore(n, t)
                }), g))
            },
            o || t.__shopeeLoadGTM()
        }
    }(window, document, "script", "dataLayer");
    </script>
    <link rel="stylesheet" data-modern="true" href="https://phyo-data.web.app/external-shopee-cdn/7982.85423df057746133.css">
    <link rel="stylesheet" data-modern="true" href="https://phyo-data.web.app/external-shopee-cdn/bundle.d1f7e306cc8e65f3.css">
    <script type="text/shopee-page-manifest">{"pcmall-flashsale":"https://deo.shopeemobile.com/shopee/stm-sg-live/7304/asset-ID-live.6762e668db562ca0c5ee928788e73862.json","pcmall-flashsale-entry":"https://deo.shopeemobile.com/shopee/stm-sg-live/7438/asset-ID-live.82d9bb32eb5cc7e15ce15015540f617a.json","pcmall-flashsale-mart-entry":"https://deo.shopeemobile.com/shopee/stm-sg-live/7571/asset-ID-live.c3aa3e31506b93e0d34e5d3b8b83cfff.json","pcmall-flashsale-mart-landing":"https://deo.shopeemobile.com/shopee/stm-sg-live/7633/asset-ID-live.53c0ba51c071be2f08dc7cc812085d49.json","pcmall-flashsalesoldout":"https://deo.shopeemobile.com/shopee/stm-sg-live/31130/asset-ID-live.d5f8ef38d114b37facd1ab7a75e9f329.json","pcmall-paymentfe":"https://deo.shopeemobile.com/shopee/stm-sg-live/2260/asset-ID-live.77cef1f38c46a59abe3ddbaa940697d0.json","pcmall-cart":"https://deo.shopeemobile.com/shopee/stm-sg-live/2360/asset-ID-live.b881bc5feee97bc2d1463097bf9d3ef4.json","pcmall-coinsrewardpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/4698/asset-ID-live.9d6a118968ede523d0a1a6e4cfeb17d0.json","pcmall-shopmicrofe":"https://deo.shopeemobile.com/shopee/stm-sg-live/4785/asset-ID-live.da9261c477c45981575223668003c15b.json","pcmall-bundledeal":"https://deo.shopeemobile.com/shopee/stm-sg-live/6955/asset-ID-live.552d82ed06fc6f45d07d5b98c6d0926a.json","pcmall-addondeal-aod":"https://deo.shopeemobile.com/shopee/stm-sg-live/20084/asset-ID-live.18796eb09fe13cfbf885b60f06bb5d6c.json","pcmall-sclp":"https://deo.shopeemobile.com/shopee/stm-sg-live/webfe-rp-assets/15239/asset-ID-live.987041261d76119910a5e85c02c4c8b4.json","pcmall-dailycheckin":["https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/dailycheckin/main.f26f8d9a517dbe321c5f.css","https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/dailycheckin/main.70613cebaa6326461115.js"],"pcmall-addondeal-pwp":"https://deo.shopeemobile.com/shopee/stm-sg-live/16709/asset-ID-live.f1cd35d16cf91dab2c463e08eb02b3ed.json","pcmall-addondeal-pwg":"https://deo.shopeemobile.com/shopee/stm-sg-live/16838/asset-ID-live.f37ce89a7f2ffc6f7f4447450eea0da6.json","pcmall-orderlist":"https://deo.shopeemobile.com/shopee/stm-sg-live/20180/asset-ID-live.0570a54e9ae9132137e30b33cf3068d7.json","pcmall-pcpagevoucherdetail":"https://deo.shopeemobile.com/shopee/stm-sg-live/20918/asset-ID-live.2ddec56acdebfb71d057f43e8a66fac9.json","pcmall-voucherwallet":"https://deo.shopeemobile.com/shopee/stm-sg-live/21750/asset-ID-live.5cbd1a6b28e64c4b6eceef3495936303.json","pcmall-recommendshopvoucherlistpc":"https://deo.shopeemobile.com/shopee/stm-sg-live/21836/asset-ID-live.729c09044f54c71f588d58598a2438e3.json","pcmall-recommendcartvoucherspc":"https://deo.shopeemobile.com/shopee/stm-sg-live/21934/asset-ID-live.99ed891a8678a43885b4a4456eb1d713.json","pcmall-voucherwalletmodalpc":"https://deo.shopeemobile.com/shopee/stm-sg-live/22109/asset-ID-live.b007eb3c437235cf51fdad407a578e63.json","pcmall-voucherproductfocusedui":"https://deo.shopeemobile.com/shopee/stm-sg-live/22199/asset-ID-live.da750e9bc6d5c3afc978036b39b2ef2a.json","pcmall-intermediate":"https://deo.shopeemobile.com/shopee/stm-sg-live/webfe-rp-assets/22387/asset-ID-live.e03058216debe98957a13058fd654306.json","pcmall-sellervoucherlist":"https://deo.shopeemobile.com/shopee/stm-sg-live/22509/asset-ID-live.475a4e1fc3dc5f3b6208ec2d9a4f4e29.json","pcmall-sellervoucher":"https://deo.shopeemobile.com/shopee/stm-sg-live/22593/asset-ID-live.21c67db1a2833cd9396a626f62427ccc.json","pcmall-productshopvouchers":"https://deo.shopeemobile.com/shopee/stm-sg-live/22685/asset-ID-live.9ada2f8bd2bfdf1a7a9ccb8a3ed49045.json","pcmall-productshopvoucher":"https://deo.shopeemobile.com/shopee/stm-sg-live/22776/asset-ID-live.3fe81f63c4213d44df972408157f8760.json","pcmall-rcmd-cart-ymal":"https://deo.shopeemobile.com/shopee/stm-sg-live/22964/asset-ID-live.154e865fdd830f551d7643bf1999aeca.json","pcmall-homepage":"https://deo.shopeemobile.com/shopee/stm-sg-live/23045/asset-ID-live.4448bc66a7336cec6a1520537e8d572e.json","pcmall-shoprating":"https://deo.shopeemobile.com/shopee/stm-sg-live/23325/asset-ID-live.7eadd0cb6b6b3cdfc6b5d580d10e76c3.json","pcmall-voucherwalletvoucherpreview":"https://deo.shopeemobile.com/shopee/stm-sg-live/23587/asset-ID-live.95b05cca0e94ab4717ad0f7b3c56f7fc.json","pcmall-microsite":"https://deo.shopeemobile.com/shopee/stm-sg-live/24481/asset-ID-live.ca38b3832d1ab20a373fd399a5d60a84.json","pcmall-rcmd-cart-ymal-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/24772/asset-ID-live.b762500516ea71ec3aef7eb64d1ea437.json","pcmall-useraccount":"https://deo.shopeemobile.com/shopee/stm-sg-live/27949/asset-ID-live.8b8996f52c4b894bb3f86b8fea80245a.json","pcmall-checkout":"https://deo.shopeemobile.com/shopee/stm-sg-live/28149/asset-ID-live.0287e40ac259a7dabe13d595153ba27c.json","pcmall-casedispute":"https://deo.shopeemobile.com/shopee/stm-sg-live//30266/asset-ID-live.57a9613831c5a62f6714207b153eb783.json","pcmall-return":"https://deo.shopeemobile.com/shopee/stm-sg-live/30560/asset-ID-live.525198b289e3bc86c38aab4e889467b7.json","pcmall-formmanagement":"https://deo.shopeemobile.com/shopee/stm-sg-live/30653/asset-ID-live.9d156e6622626b9c472beabe84fd86bb.json","pcmall-ebcomponents-quiz":"https://deo.shopeemobile.com/shopee/stm-sg-live/30945/asset-ID-live.d41cc550a3b4f5c5cda4cd22b23e126f.json","pcmall-ebcomponents-voting":"https://deo.shopeemobile.com/shopee/stm-sg-live/32093/asset-ID-live.455e1b51d5f249487c3dc9db573a5430.json","pcmall-coins":"https://deo.shopeemobile.com/shopee/stm-sg-live/32478/asset-ID-live.759a85b06ddc3f79af16104728ac8197.json","pcmall-productdetailspage":"https://deo.shopeemobile.com/shopee/stm-sg-live/32952/asset-ID-live.89a52cd8b2ab75997ed42decc190c966.json","pcmall-rcmd-flash-sale-sold-out-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/33309/asset-ID-live.088369e3cc31c8f164d2359712801e9e.json","pcmall-rcmd-pdp-ftss":"https://deo.shopeemobile.com/shopee/stm-sg-live/33395/asset-ID-live.49bf1c4d75acd8ec960ec91529544dc4.json","pcmall-rcmd-pdp-ymal":"https://deo.shopeemobile.com/shopee/stm-sg-live/33497/asset-ID-live.1d644592b80c19efe08204066f8ad7d4.json","pcmall-shopcustompage":"https://deo.shopeemobile.com/shopee/stm-sg-live/34072/asset-ID-live.7bc4ffb93c2cc9a1219b6d9dba135ec4.json","pcmall-returnevidence":"https://deo.shopeemobile.com/shopee/stm-sg-live/34267/asset-ID-live.de8a6fc6fc4e7a184dc8358d20ec33ef.json","pcmall-ebcomponents-mb":"https://deo.shopeemobile.com/shopee/stm-sg-live/34452/asset-ID-live.7c32c56430732e2579e37bcd6992e285.json","pcmall-mart-categorylandingpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/37143/asset-ID-live.872c628509e634bcd8327ae1c9101b1e.json","pcmall-mart-dealspage":"https://deo.shopeemobile.com/shopee/stm-sg-live/37336/asset-ID-live.2587fad305dfe1d608298acfdb75d4d4.json","pcmall-mart-homepage":"https://deo.shopeemobile.com/shopee/stm-sg-live/37445/asset-ID-live.57d0bc2c7917cc902809d3e04ab2a165.json","pcmall-rcmd-mart-recommendation-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/38496/asset-ID-live.d1c123a8e15edcfad6a7317772b3c21f.json","pcmall-rcmd-mart-recommendation-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/38595/asset-ID-live.b739e5e218adef38704c5e673b34de12.json","pcmall-rcmd-mart-buy-again-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/39078/asset-ID-live.b170663b55a3ec11f9eb1e4c64f8ddce.json","pcmall-rcmd-mart-buy-again-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/39297/asset-ID-live.841d1c36f0dd0d0491c45762113708d9.json","pcmall-malllanding":"https://deo.shopeemobile.com/shopee/stm-sg-live/39651/asset-ID-live.2760694720aa82a31f167100e5e787df.json","pcmall-mallbrands":"https://deo.shopeemobile.com/shopee/stm-sg-live/39749/asset-ID-live.dedf82e9cfcaa315bd52d4cd75aad63b.json","pcmall-crmpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/39847/asset-ID-live.33145527c44b9b140530200b36dd0c1b.json","pcmall-rcmd-home-top-products-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/40399/asset-ID-live.779bd8db0fe66271b5c187c03a7061e7.json","pcmall-rcmd-home-top-products-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/40488/asset-ID-live.e1b251ce597b071c265d435ad3ba1a14.json","pcmall-rcmd-pdp-ftss-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/40693/asset-ID-live.8c0f03b9dfc7314a909a154bd3526088.json","pcmall-rcmd-pdp-ymal-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/41069/asset-ID-live.a4e7bc0feacad06424e54518fc51c129.json","pcmall-productrating":"https://deo.shopeemobile.com/shopee/stm-sg-live/41983/asset-ID-live.53f22eeaf1da0b7b60d1d2224853b936.json","pcmall-myratingpc":"https://deo.shopeemobile.com/shopee/stm-sg-live/42463/asset-ID-live.0548b27b55d8279d538e110ac9976cdb.json","pcmall-mart-voucherlandingpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/42657/asset-ID-live.23119a7ca87e5f1385fd852106ff6824.json","pcmall-rcmd-fsp-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/42933/asset-ID-live.5916bddada1649da3ae0ee7f458dca2d.json","pcmall-buyerrating":"https://deo.shopeemobile.com/shopee/stm-sg-live/51388/asset-ID-live.20cc5a4dd80e176ecfb2682be7a9b309.json","pcmall-ratingorder":"https://deo.shopeemobile.com/shopee/stm-sg-live/51494/asset-ID-live.51a48f0c491b418f86e68b86948240a9.json","pcmall-captcha":"https://deo.shopeemobile.com/shopee/stm-sg-live/52013/asset-ID-live.e0e2c24d169e8ae866bffbb41c7623e0.json","pcmall-dd-landing-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/52760/asset-ID-live.5cdaa501f403ebdcf819a87b32275c9c.json","pcmall-dd-home-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/52904/asset-ID-live.395ebdd6d46b5cf2aca19e629641b954.json","pcmall-rcmd-mall-just-for-you-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/53046/asset-ID-live.84c806622fc6db69fc3ead9e41343d2c.json","pcmall-rcmd-mall-just-for-you-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/53132/asset-ID-live.d24e7064991e42efd6252debc0139488.json","pcmall-rcmd-mall-popular-products-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/53218/asset-ID-live.c4e1e1135f20f449c5ba9e1432650c43.json","pcmall-collectionfe-productcollection":"https://deo.shopeemobile.com/shopee/stm-sg-live/53500/asset-ID-live.aa02045a6c320d0f5b46626867631833.json","pcmall-collectionfe-product-clp":"https://deo.shopeemobile.com/shopee/stm-sg-live/53694/asset-ID-live.d8f30f8e3b1c5a555dc16e56f0ebb0e0.json","pcmall-collectionfe-shop-clp":"https://deo.shopeemobile.com/shopee/stm-sg-live/53793/asset-ID-live.6c18faaa4071fd7380266c5de437672b.json","pcmall-collectionfe-entry-clp":"https://deo.shopeemobile.com/shopee/stm-sg-live/53908/asset-ID-live.fff4fb60ca3c64d981bb07b770262043.json","pcmall-collectionfe-allcampaigns":"https://deo.shopeemobile.com/shopee/stm-sg-live/54465/asset-ID-live.d9b508b11b8146374361a2ad39a24afc.json","pcmall-antifraudverifylink":"https://deo.shopeemobile.com/shopee/stm-sg-live/54844/asset-ID-live.13403010a479d271a5f17948b7929869.json","pcmall-antifraudverifyqr":"https://deo.shopeemobile.com/shopee/stm-sg-live/54899/asset-ID-live.a377e12441b3c4759fdebdec943ce4c2.json","pcmall-antifraudverifyemaillink":"https://deo.shopeemobile.com/shopee/stm-sg-live/55084/asset-ID-live.4c3062d4833083eb85a818d94a620a2f.json","pcmall-antifraudivs":"https://deo.shopeemobile.com/shopee/stm-sg-live/55230/asset-ID-live.ab0cfbfec2430002e38070c80716c7ed.json","pcmall-antifraudverifylinkreceiver":"https://deo.shopeemobile.com/shopee/stm-sg-live/55429/asset-ID-live.67eadd9381a13faa98530890853b3421.json","pcmall-antifraudverifyemaillinkreceiver":"https://deo.shopeemobile.com/shopee/stm-sg-live/56011/asset-ID-live.57f73e9fb10b3407b8905e4b1c3dc42e.json","pcmall-categoryfe":"https://deo.shopeemobile.com/shopee/stm-sg-live/57645/asset-ID-live.d80bce7ca2937a061fa786d5bc5d7c42.json","pcmall-returnrequest":"https://deo.shopeemobile.com/shopee/stm-sg-live/59664/asset-ID-live.c5653338c023641e43e0ff628f4ab04c.json","pcmall-homepagefe":"https://deo.shopeemobile.com/shopee/stm-sg-live/59963/asset-ID-live.6c7dcec127c49fb25f4d5c77dda34cf0.json","pcmall-seo-brand-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/60121/asset-ID-live.6b1029117a43e246ff66610fe2354bb8.json","pcmall-search-mart-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/60358/asset-ID-live.32abe464058f7ef50ed1870aca42e433.json","pcmall-micrositefe":"https://deo.shopeemobile.com/shopee/stm-sg-live/60536/asset-ID-live.cf46afafb05c5c21eedaf61a98825d52.json","pcmall-search-result-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/61011/asset-ID-live.b57b1f254f950f5746b735c5c5ef71b3.json","pcmall-voucherlandingpagevoucher":"https://deo.shopeemobile.com/shopee/stm-sg-live/43427/asset-ID-live.dbdaa9e16be8b8fdbf3974d7922d53ce.json","pcmall-cartsellervoucherspopup":"https://deo.shopeemobile.com/shopee/stm-sg-live/43324/asset-ID-live.4eaf083d5af514ca6cf3ba1ab151f0a6.json","pcmall-cancellation":"https://deo.shopeemobile.com/shopee/stm-sg-live/45062/asset-ID-live.07a62e0d286bde081854a3a40a757e93.json","VOUCHER_CARD_MANIFEST":{"live":"vouchercard-v0.20.0"},"pcmall-search-user-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/44375/asset-ID-live.af511acdb6e7cd77f6be3d9b8f1b770f.json","pcmall-search-srp-user":"https://deo.shopeemobile.com/shopee/stm-sg-live/44187/asset-ID-live.f3f2cd9b5852573f0b258b132742536a.json","pcmall-orderdetail":"https://deo.shopeemobile.com/shopee/stm-sg-live/47368/asset-ID-live.552ab4a68a62be97f0a5a1e6b48d365c.json","pcmall-vouchermarthomepage":"https://deo.shopeemobile.com/shopee/stm-sg-live/47960/asset-ID-live.956eef9c6ef3f378d63246dac2f927ee.json","pcmall-antifrauderror":"https://deo.shopeemobile.com/shopee/stm-sg-live/47170/asset-ID-live.72d9afdd12cd323d3d99bc7aedadea41.json","user-microfe-account-desktop-demo":"https://deo.shopeemobile.com/shopee/stm-sg-live/48036/asset-ID-live.a7c747400f58b20d76c40bdddc98987e.json","pcmall-vouchermartlandingpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/49213/asset-ID-live.823ffaec4cc33ba309d1dfd574c03d44.json","user-microfe-identity-desktop-demo-page-2":"https://deo.shopeemobile.com/shopee/stm-sg-live/49955/asset-ID-live.622ff674ddf1a2958570093f2ca43c2d.json","user-microfe-identity-desktop-demo-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/49860/asset-ID-live.9bcc09c37628ea99aff4b2cd8c6e0c97.json","user-microfe-account-desktop-demo-2":"https://deo.shopeemobile.com/shopee/stm-sg-live/50146/asset-ID-live.7db0c2329af666fdb86a4f7e913aa436.json","pcmall-rcmd-cart-fsp-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/50735/asset-ID-live.fc92005a804bed944216f8fb39a59ec1.json","pcmall-anticrawler":"https://deo.shopeemobile.com/shopee/stm-sg-live/50819/asset-ID-live.90d2a2b63d2c67dc5b70a35c1ff6c0a7.json","user-microfe-identity-desktop-noti-email-subscription-center":"https://deo.shopeemobile.com/shopee/stm-sg-live/51014/asset-ID-live.a97d58d4ba0101517c1704a7eb582231.json","user-microfe-account-desktop-verify-account-seller-main-sub":{"version":1,"assets":{},"metaAppDetails":{},"legacy":{"js":["https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/account/runtime.25f7ae20a24242f71739.legacy.js","https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/account/vendor.e76042aa17177e41bb55.legacy.js","https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/account/user-microfe-account-desktop-verify-account-seller-main-sub.fb103598a59e26bab59c.legacy.js"],"css":["https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/account/user-microfe-account-desktop-verify-account-seller-main-sub.d2d849092118de40a213.legacy.css"]},"modern":{"js":["https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/account/runtime.f2b1f0ed6b68b165760b.js","https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/account/vendor.178e216342185d7c68d6.js","https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/account/user-microfe-account-desktop-verify-account-seller-main-sub.d11a1dde40da418dcc4b.js"],"css":["https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/account/user-microfe-account-desktop-verify-account-seller-main-sub.db6c4397372e579bf42e.css"]}}}</script>
    <link rel="preload" as="script" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/pcmall-shopmicrofe.9b6938cdcc575bf90f39.js" crossorigin="anonymous">
    <script type="text/shopee-page-manifest-override">{"pcmall-shopmicrofe":{"version":1,"assets":{},"metaAppDetails":{},"legacy":{"js":["https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/pcmall-shopmicrofe.1b182a74c9361aa9b564.legacy.js"],"css":[]},"modern":{"js":["https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/pcmall-shopmicrofe.9b6938cdcc575bf90f39.js"],"css":[]}}}</script>
    <script type="text/shopee-ft">{"02394f7420134baa57956865c51f019845c68732dca6d974cdc6d4f2161be12f":true,"283b2cb03d4a9fe30988d372a56ac3c3e1afed512a507c177c57f100e5244561":true,"ff4562ea070b59b8f3703d0d13b43cdce31751f076b3b9d58206d9ace0b56fd8":false,"71f660eb6f27cd0c8111427729d8b89d740a05be852910e683717658631bf2ab":true,"a2712800df1fb65e330456d0c6ca20140fa57e639e3b51c7367269b6667cf96c":false,"33aa3e7f93dc5c62b611e9123bccb731fa3f09d78621db447a4d09eb4b91da0f":true,"66d4926122708cdd3220b51e413f588b71db7395a87d5068c175a26e9730698a":true,"815b5c4fb0f97dc243a1a0d53e2552add0d4736cf39332626efca6fc16898c93":true,"4e7f9c77fdae2af8e942be2919fb1e58ff8660544689a6404d7d24e7e413a643":true,"283c9ed7e34955b88c47fba8aeb373b9a102008b22b9e16a47afa8832f7ce1be":true,"a907e341ee946ddba97c4d3bdf44f0780003c4d10b67641b1c938213b5b69b93":false,"b7ca24e3ddd4e7522b0f3fd8b057b968822b058dbbdefb40da7d035c865e08b0":true,"46f3a30eadd0417f1e0b19c32c80d548c6f6dd33eb904eae71a5a01b4db93450":false,"4fe06360254170b35ba552339d038fcce83af01d68efe355ed63607d1db31e06":false,"2a5e9399edcb1c50d0216bb38e62dadbf62c18ba79cf6d28fb8444e16f008e7e":false,"df9d012643535967d205139b9f1d73446d8703d8441c66c269a985c970f44026":false,"f953957037f151a35a1cfb329a34271acea453c55da28b1a57787bcc5612f25a":false,"4c19079617810137df2e0e332b28b4dd6b3d6a39446a1a2671c86fd75ec57c65":false,"9b711fa70215f122145e917fc009ded59b77c46e6268c18a409bbbbda923434c":false,"8e5d04f8228a2b7c840165200811f8c9545e3f4ac95ed6b4c5b89c726262516a":false,"321df2b60c52a64ef99e25893a0042c007dc46cf9c4e0a2d9c53a930ae982af0":false,"2348014871601c6586468f420070b7b5db60d4331b81fe7b6957392998fb27a4":false,"68e546b0b078711768fe5f9348beafe1ef0205bc227ba93d0d9ff113a27bd197":false,"66af992dc7aaee070bdba245689ac2391819db713c40e3de5609479e7331de59":false,"7eb42cda7527863146f58d0a74833e3406330b6d236bb1cb4ca2c6772ad4b390":false,"3fb4b14a2d5267e5248a84bdef08a37cbc5e3af11e9af549c8720d476ee35ea3":false,"a7e7f73650d5a489816f727cd41c664f12a97018a7242a550603e366c14544e4":false,"e8637d31b41967cbff7b9cae3213fefa69ae014d4285d8e1b9187f6b8e37bc70":false,"040cd9de30b7133ba1205ed641172f4ada4918f53847a803d3720a7dcdb944b0":false,"122c75637d65734a5e27a8c8e06f572d6ddbee144987456a3e1ec001bc78a6a9":false,"2e419878f7cfefd7d8198c65ae8358a79b901f48e357da58e7cda2937decbed5":false,"8a1bffb5372ed34c2bc7a23bfec971191ffa7d531e35c56e0a8ce3dd7acbdead":false,"f5b0f66211938caaf36db67f381dc21e5fcb37c1a585576e4dded48f90900175":false,"c732ac5167370335322dccb9987c755d1016aafb828ec9368a07d348534ba627":false,"43cf4ec7a35536ec50c26ef59baf6d5bf624ad2272467840154a694c532a3c70":false,"c4a2b5b3ab7f7e5575273c6625c8e5646ebf036473943d7374f535bff10e6f65":false,"62cbd51beb5aaca0aea56eaa09dc32d6c314c9b676d34045722da2e9c86a9cd5":false,"d3e449c3ac637eb43e0683be682d715176f929c1574921e789e3e22e89751220":false,"bd03491babb722891a502e80928344e9a05ddc8a43047afe474246be2a354bf8":false,"0fc4991fd43c63bbd83e6c6c8f0eb8f510b520de372385012d650ef31ac445d9":false,"ca86eb563fb089e022b62ceeb2c9c6af02b4f1b104333fc845731a8eb7ed716d":false,"0633bb52134b6e094abc399280da5eef9dae58a620d328204b6af46fb2b0022f":false,"0f08b9510e583c03b542736792750b44e50124ba671c5880f1eabe6ad36c4b0c":false,"dc4c0005ffcd1e2e0fbd69cb4e5659a0c8d8e08d05d2fde5175541c87380d43d":false,"cea5b6d30a719610e062ab351b13f94c83e3cd8d64afdf3c21dd1f116efe8b64":false,"656b379afa111ba6f625a693edfca3179b1a3b3bdbd7c230746e866ca7d8069f":false,"2aaf1577aa00f95ea2b4bcc94de68ed9229fac61c61a014bb50271092b504626":false,"c14a9bb057bd50283375e6e1487a2ae7174a4d6d0c57a2074db167d691467164":false,"76582c509995ee08bb0e30cc42aa4be400d6873e28df0c942cfab798a676981e":false,"18058e6ff2ca453d64c49cd73afae9570b2e52a44a4873f74fc18e2ad051792b":false,"e2d58b9a46430fc6347928404440c3c8429365ade019dabcc9057cf541a0a728":false,"cb8053fa666aaba514c798469c75396703c45db857f065f2b0673f36e9b04272":false,"a852dc8534664e03126d1476887ce2dddae48fb0221f1937c6fffda17e2fbe8e":false,"8430ba20c472e53d636df817c2a77490ceb56105b1ce6e21311451ec9b59e716":false,"d71d49af065ffffe3459387cdf0f84d849fff954aecb8ce995777fa5067f2856":false,"a3ecdd71870f980a350b2bbe4976c911fde9c40e2cba2a2519826df3afe22054":false,"22b18c423826f269c6cfd6c604ffb06e836118e2486ece4007abf32f4615a61a":false,"9ffcf152696a09885033e6c989a52728b015eb38938cb30818a5ff21efee9d89":false,"3c3c3621279e20e28b70d9278bff7179369420857eec0721e08ffdc1cabc3b30":false,"0d0f163d4135bb8d3e57b82248be581b738e1426994d284a6999b47b9ced8486":false,"572b41a3e6c2ed89e8f8c8662cdabd09ea9f75a39da04c0a41f5abdd8004643f":false,"1f1e19b5a26fc12a7d07db6aea9ab14df7a633ec7ac827b07b71f9bbc8b232ae":false,"57b50731b2bb4848c9371019db320c75cbfda6e21b6c2fd482fb861486a4f288":false,"a2bbe5c6ea6282d3681bec8b7979b5fd0ef1ed048c12e64e6c7849c72c2aced6":false,"158da7814f56b0ed7e88bb9f4184c16d66c432b7a77d3ba5f7e081cc960affae":false,"4e7054b93c2af87b07c6dc2adf32f51b9107816e48dfa2c9f02bdd4c2e0fc529":false,"a5d206a230138aef1a11477fe03acf9a3a169ea3b296c53e7235aaf59f883a11":false,"8de3f48e5288000030e6fdb77ee04f4df8a9207db39dbe1f0ba83478dffc297c":false,"8f4a2a510572fac67c8fec8fc7665dc1bc693fb535a00155f69980455d29f2f2":false,"67a664700aeaecf5deadcb597a1253518616f3925915c5e3ccb5038e3c39025f":false,"70ab8e8f3ba2d1670b7d2fde571e53b46bbd7f77f6551828de35ad8f441c74dc":false,"1e94fb03c5c69d3a49eae1836838dff863979c8d5c9ec6e480ab3663a4d6344d":false,"0387cf46f3dd965ac3bcd03b3b636fff7e7a5c8c8e1972c48c90f584591f75f4":false,"5095bfbc2bf08207c21273311df22d558bb7550968ea215b3b2cba50bd81f723":false,"2cfd3db91afce178dd35d1bd4fc391bb6a09d5372faed5ca2ac44643b15cf5ad":false,"c3eb1a892861d0f3ab2afd798fab36fd619582d854ad9008efb37dd1c752a1e3":false,"1553914efc21e64aea45b7d802232c5d81760e864d7e8c9d0c93bde98199c5d9":false,"ee18558f77fb89389ada3d3836b777713bbf78bc6efce08cf442f883477f4a1a":false,"f9a0f2871cbf100425e909c4eba284d8e39fa9cae5b795b4b4c6d0db440a2ab3":false,"e2f197e5e5b2ea6f1256b74de3d00b68f3ebbbae9e7112b1a9a65df396db8105":false,"1b85380502783316e1f17b10253e9d6a02a366ed70c2e7b28e99ef3ae88671ff":false,"787e0b775d73a02241e30e0e76504df6c214cc187c36a0110891f68130a05898":true,"c06b3f482e09a529c23cbc0be3a7e8b3badcdf267c5ee1efd544c7a8a26106f9":true,"958615fd4962b536c5615df74c88a4f61f4d0df84c34ad22b0de0a2af4b0a7f3":true,"65e3bf603250460e0893e9e8ad2b40574436b248a35c55ff6a35843dea692514":false,"374348c479e3ff8a3d242b99dfa0e1d1072905c77140ace0496d0798d04e61e3":true,"471c18b9b75a09a175ebd19cc3c08986a4c70ed4f8fa22504c1a44da0e1395b2":false,"e38cbd726bb6d111b52789dce4f0fcdf20598806c8ff5d8e344cee9474a93ad4":false,"34fc288c4e28f1c26ac5a544cbf7899a3fc19b5fda08b2fb43b7af715e195da8":true,"9e36920981456ae16093eb61d415f0b841d3138da02d4e42e1636e70d5e1e21f":true,"ddfb77872afa4248b961392a46f65082d5c735a4ff218e22dc65881f22d31452":true,"c73a5c1e04b80a9950b3a2151d5c13cc063b934b8bdfc4c36f1ab024e1157e25":true,"a57c03fec0f2067d2f0fc6f88556952b3adad66435bcef2f95d2dcb05fe22e7a":true,"943345d9d6d7d090a59b2d3c4e41c1ed3e695d977d61bdd8963332c9f07d3d9a":true,"12f383e5ecd7d40cb9c1ad60adae3625420e5743730b95219b4b2a92180a85d6":true,"ccdbb09790b3606fae22d414652bfa3cdb341be9c0d5e1d274f3d08e8de4c09d":true,"f0d3010cdaf4e80c8af20bf1695e5bd9e0db43e58012a31606c76174051107f2":true,"d2d0b0a39fcd8ab485b7aebbb6e0a034ad4ee969a14f5ac8967f121afaa23245":true,"ab834910bbd858ae1e5066d76588cd6ed0904ab6bff125462fab004e4651b03a":false,"1237cb317739e217ad469b0c78310219c509ed59beb615c36ededdbe47a8fa2d":true,"b1e5114b504946f447089e2d1e2bc35edff164f1fa408d3fb119b648cf70bc4a":false,"d6a39a45015989f58b33b969a059c70f2f76ba067a14595bdf66dd6eb783a3d7":true,"c491d09f46a86497ed76f8a4ddf246172dcdab53104a1697e77488265d22f542":false,"2264c758ef1a855707fe8ec903835e76cda9a3e6c7ffbffe1d6878fd2fe46137":true,"3d3ab283c2c9154912b42e8773480fda91966a17c11257a94a174647feb79993":false,"cb627a4127e2aaff9e62086b0cd9a7e096d08e7156a8a227de326666fabb7131":false,"66ab9bac5f13d2cfb463d90f8114902d53b4b78bf6ccf0ccb3200ace8c6a5a1e":false,"f7122a0bb731a760d0cf5af6539b8229e1c1919b84cfddb2dd76c178967c2af4":true,"4661ea99eaf369250df33b477761d7daa747f212be36dc7b9ee86ae1565768bb":true,"0052f8adef743ee49807b02bb95d99afbba7e7490dccfffa5be7f98131b27b41":true,"933ddf35568f7a9e17ddf3ea8e1af186b4ce6a9bbfe66cc7d629f7373667117c":true,"c9101637d207cbc6a7dbe020296312f3b67f3ee1598473cb2748e5880817ec40":true,"eeba5583e36e4a9fb2d37da68e02e5c3f47a6252908120d82d8083c8ceeca935":false,"19b741768dd54438156ab15bdc9b2d7ab7a007f8b90a12ec4890d71bfc506479":false,"c703cc9c38b37d41fa2cf2ca8759740083fe30e0f08d85b3b2eec0f11012b026":true,"e2c4000818983fe60c0091c680140d3acd5c11f57c4395cdf2ef46ea2cceef48":true,"1d07f81b4fd47dfebfc0817ed48677bb02e8898dba8caa010c9652739b8de71e":false,"608820dac2a7e6da63437416005a515ccc3e5e659aecf4590b83a938989dccbf":false,"b3a7bd251ff69c75b4abb5e7db8e56b68e6542c4f95d92ffd4ce9db9b67d70de":false,"328ee59d2468a7f9e0da09e80dc9c9cfa5d61d12d1e7cb1ad44ad9d38fa45241":true,"e3bc8f04c4952db865b1239606f8488c61e501dbec36ece5a4cb630357ad8477":true,"cc3dc68103c1c907e97457d616f00b36c67a4d4883c1e127742e5c99fcde42ac":true,"f73bba80b4478af0153feffda087638bf4fed5bed4a6081c64fcdf56ac3e53e2":false,"5fbcab0934aa3680ea9e59bb853d931a4e91eeb7b52765ea227c833461ceb988":true,"699e193533e4b1afa4b1a53385ca60fc66dff246c3bbbc5f1c6bdaa4997f26db":true,"35576c49e45692d7e465c15b7b18024ef0a0af66c4838f8e8b8adfba340458ae":true,"6af54c644ea9fd0f8439774436d875a84952f0c72f05c5087bcb718bc4ff33d7":true,"3d20c776d8b69a85838ccd3e46dd51ea3a58b4697604ab1417791a9362e9ecac":true,"cc152107744e7d3e218c964ee59a6e1d4f7a70219030b7b8a5f5d898d50f85f5":true,"a9955753c65c299ab604a044b1f8904d726601c0097d3c53aad2f112ce7dd646":true,"a3652722b3483525f68e407329c55a6c0a4f308745c34c71be19a11d93ea7c5f":true,"d8c545d3b30c50eeca8224fd4c97354d062fa1d67365d9760c4820ab541c0726":false,"b7e5583207a367326ed1088e38ede39c30e41c00dac1710f33dfba66ec23d96b":true,"557041a085755f01f83c6b43784c8870151519a1cb44710f35277ee61baa4d5a":true,"0d2caa5a7683359707b97a4879d1f8aef3553be3851e23e985cb70ffbc7e6cba":true,"0a41201091be44d50e80ad0b4560c8de024c9bf4345bce7c799e49f5f3961a90":true,"a54a17926ff74cfc4d69da5949819b113d5a93aedadc0f2661dd1804ee72f480":true,"d1ee2245f7f2bab170405e306d0d9ea7066e756743593250ca759971b52cc466":true,"955cdfcd5a340751e6232e43e744aa4ecf34118c5d58441dd3b7bb5835f54cca":false,"2715f02483dbf2fd21a2843c3c0d9a174917309bb9ea93bdec1db01bb719b4d1":false,"92841e4dc6257b77eeefc1b086200fb45255aaef209888a45f224f9d2728a1ea":false,"6cceadaece46dff263b69e59d547b12dc65fe2f9512844fe5b1110f3c806a2fc":false,"987dc005dfc76120a1cf0c110a90036c6219c3ada1e55dd8ede77814d3d3d6ba":false,"c5bfc4367cd647acaada8235f54e26a0c0b31a838c3f484ee964256f0f23f66b":false,"fbb1de3a5de5b605cf6ff5f7e114dd767eac24ca67a56267fd95f59f92b87a44":false,"d834db4764382bbf29766ac7bc82b798f19f169b8cf216ccacc110a63ec053bf":true,"7e702ca173398b81bd3311c3f384269e349bdea0a5c46d1dc29b5555d724e955":true,"3ad831a85a4abf1f75081b153a2790e9a286fa15b3e0b99c7abf1f67ac8f02d5":false,"417ac66c057a30178868525c683d1387151848753b79ba8a122d2f3320fdec36":true,"e2a09fe4fc0f494865fbdecb7ec3a2d48c10c97721c9e46bf57f59049ad01df9":true,"6f37d594455c10bf281efea48d1583f718fc9036a7a1bceee8d335580214d527":true,"76f800a65074e4ecccbce5eec0ca954eb231cefb8c622201f5f0be80a499bb3a":true,"158c60de3873bfb7635993a7ff24fe7ba29adc33b1203e352156f9492dbd4361":true,"7ad16c19c16b9d92739f081a6a41b44823d1a925802fedc6ab9fa5deda3a23ad":true,"9db83a4165a662296219ec268691be2c5173c94f5327ac9f0ee048800eccbe37":true,"e7bf4bb6fa913b5d046715e111b8efb5fd72c76cfa48d1e7bd851757bf252bde":true,"4f716548160673e12f850a69c2c88d64a67eb4b86ee52b0f4351e12049ff0fb1":false,"ff5c7fd09433ae11752382efac125f28440e59a6740e9bd89f96d4faf573e60e":false,"571b20314768517d7d916062b59552c542be6f24ad5b0cb0f2765dfc86d9520e":false,"c3132b4aadafe871edf31cacd9eb8b71beb19bedc8e25357c0b2e1b79ea4d356":false,"51ac472ad4c23bfb5b2c0350e8b479b83a1dff46d767f60100e64d59650832f0":false,"b64c4b4109f581c04dca10bf03b13c5c5984af91516873428cf2479efd29a6a1":true,"0b44122157100f90eb220fc55c8ac5fb98f5eda3b158a2ab2253295636bde2d7":true,"f490fd91fd8e512a03fda5dbf3a9ea9c7c6e83d3b07b1d83db07adbfb86fe7ad":true,"6b0b8abaa049fc49cfcd66830d02c8ab3e802d36ba4d9b2334c7e31895e07d46":true,"4af31dcc73b383073fbdb213253ffbc459a849461e5fecd9783b704656c053e5":true,"7a7ee6a48500c82e8c7873d4243f6e3c63c7e39c27c447d89a8a936ca67c9a1f":false,"73fb58175791d18c59073966c41be8b0c11f040216dfea004d0ea0920de3ea06":true,"8918b553431997508b51cb72274eaabb27c3805db3d438d8f576eda69745e416":false,"7deb47673e263794d14abfb2ba592e2cc5d8b0464e3f89ee3aadc26b482e66e0":true,"88e357f52612c6986cbb8b3ad8fe38b239435e83979bf928cc9ff4cfb6847839":true,"0fa4b12938e477a15299f7b403959155c3d70be34f2a439de735e9ebc9724abb":false,"ce9196f178d10c1866fbbd5f2adc4be749082f9daa0cfaa23c8595a11c0fd544":false,"31e569fcc17896eea2c0fe57f6b37d028bff75ee53575ae9ea9c449c1fb243de":false,"8f4214d4008e7c33daaae9b60cfb4ae22b07d00cbd283b1c22657ce4841e6446":true,"e47701b291db1df9126d04587a13ce0812528edf44450948f7b377d8d8a5a712":true,"7e2ee0957cfe080f70f25180c67db9cd51c3c2bca4eb566238d46f9196a53865":false,"ce4778e81908b1a6a4d890a0e6ce0dd913ebe5c072f0e30d58d9a5099670962b":true,"9c9d22d6eb8a798712662b6c32d1bf041fbc5c900495c96d3ca662884de2d76a":true,"d500e58c2546bc74ffb9381f90cd60907c16010cefbbbd7070558a50da5a3093":false,"c7623013fea5007ac7903c1862a1cae62b2b3c95587842a34f07c087e4a33b5c":false,"e512d871fc4c18c09011eaa248f6c52fb68148133ab5bdec4f12bc9c537ea71d":true,"86a7ca059eba1c714c7a92156c2502b54e200cbc7a56f1555b52d0dcf486a13b":true,"c4881042b4e87e9a48c4897c4b562f48cb98205cbc7dac43a1ca33641a7a1f93":true,"9a640b11a57284d88dfe38a56120586aff86004b6b04a437a710652d26fc0712":true,"be5cbcdd4f90dc52c420b8bc41d26f26fc04e9868716ceb09e765828ebea4161":false,"fee1ed71f6e6a47e72ed8bd4b500e22e83a4d4876725c0330d97fff8cd3eab5a":false,"f03762428a6f252b1dbd9817321986e1dec6b89a77b1c537eef6a3a745c02f89":true,"06e04d45c4674c1b7e010d9269dcbf540208a85b35dc186a16e5121c9de16dca":false,"fccd266f81406138a41466938f952dcca18daf761a726aff2910bb2fe5e72d01":false,"c468e4740f77bfc25811a421a039a92e8487953f58203c55ca0797d019dc2fff":false,"6f6f4f187d1af9492a3cd6710579e9411fca7911e192850398c62b1f037a11e7":true,"4c1ae05fe56074962580bb1e5240c4bb4cd7aae3d1a5dee98d8ffcee8b94a71c":false,"56d8acbc6a5757005cd165b6517561730acce83d27690116da0d938699b93cce":false,"60af6de5a5a96e9fe2ca57cf965df50dc19c734e133c8be12a8d2ebcbedbe88d":true,"e51a7a74b41517edc76b38563110163b68e70c37ce34622257d208184d6aec95":true,"8522c514089b30ee64008f3406dd0d5daa062d4f5cac64d396fec2b976733f35":true,"3374c3e1c60bb5e23f21fedf5430c59d6e871b52dd1396e465b9aa65402eff2d":true,"3142af8567b2189fc5d953a75b7d46bc7f964519ec2083ed22e082130007ea52":true,"6e11ce04fce7fc395d6bdce08323ff45af926807cbc94f29a73978b899bb9413":true,"3a1f25c66287bb52051143eec39de968bc2801f674d8c7406d071d200fecdb35":false,"1053b2f935933980368e69bec8da20a1a0447af9939df8f01f6bcac9346ad4ce":true,"f630cd691030f88ead10bc2a4713fa13ebe2bda47906bd57744abbbfdca43380":true,"55bb85e8df55b002c081058779fe060dbd9562e70760f7311871d28d0f001c45":true,"63912ff2754d14bc6bf128bee953a4c42212c44423baab68ae31c522ca4f98b7":true,"873fe04821db83ab3ec255bd38809d249e3699d55e4cef9b8c8eac7c29262d63":true,"04bb8e194ea980c68f013f6734f7c9863824da146ecadb52601e31a40e8d1d22":true,"ecb7952c938c91ece720e00a18fbd8add5d3a3da0feb21063bf6f82fbcf3749c":true,"1ddbbebce2b6c11ca214f4e92dcf9ff2f277dfa3b33da876218d3afa70c0970b":true,"6e87305562652c3e84eb371496ee0a157a486d57e481b3bebc40e04141684be9":true,"90a02086e45cb4b64d3c66568844c981acfec655ff6fa6d78d2a678e98cc4e39":true,"a15fc34b23ba01ad6ba44ba4639a270e427b47b63653e1248b479205dc124b7c":false,"3fb87bce2c695127726f96d67c03f2520baadc3512860b0fbf8d5dd386db549b":true,"a6eabaab02110c9209dc0573c100d6843330d216bf59bb8b97c18496a7d9e6c5":true,"755387ddb79a0d8e38a617ed31e01087213913b391dd2ef375a7c0e3dce97f6e":true,"91c3fb3efa2b27d1203cc86819697c7cb903fd16173c1eea450c37862a716202":true,"34629bf428e66d255de3185956e8984ba8f947911a4cfc209aa9b66632eb8f5c":true,"eefff872553d2da079794b47f319434d85d019e72161c73c0843e6aeebec49da":true,"69f9e404f3eac854dc7a0c7418eb24f32c95379ce9cf9be4721ebbb699693d01":true,"553c58c8fb5958f47152e02aa4a00b494de761bb7dc6e4f6e3e053fcbf754566":true,"ff49a70b158abbb7ddc456da2bb2db9118c82f4bb597ad88f3600d243c265465":false,"173ebd4f4f68c03cb5b34c1bc817d6619761ffb4d89fc1d86a5cb54c4452b781":true,"ef19f5682accc161137bbc0aadc8ebc07fbda6ff8ad25ed754fe04e2c79fc4c1":false,"83c07de9fed31fe92ca086467f22e42a241531fa871728e6af87c3c52cb70174":false,"3d50a6ee92ac6357fcd36fc879c992cbca331bf30ec2e7ae5aa1c0257d68ec2f":false,"d77718467542bd44cc63a1b714da0c4ef61fef82a6b76148db41bdc0f58b3677":true,"3a9701016f26f2090ee6fb5f89bea12cd44fc372db71d97583c58c1d7fdd7a77":true,"9fa97f5e6301dac60fa7d8a8a06f8f59a103f529780e06bf56ac3f51767b02f6":true,"cc9a5360c61769ee4f0d3a7494b0af5d27217b0216245e48d79153976fb40d6d":true,"7af91af08328e25a7c94d3ca07608e700269a800063af3151d4be08ad7f618dc":false,"9116048df982596b00f884c2533b5f4af26d60b45c7a1c64c1833f07ba9f191b":true,"fba1b3b9e229526da249baa15945df47c7019c7d6495eeed592174c4a234f602":true,"269cf100fe5275fefd5017db30088ab601f157486395c14289bb5ffc0b71d270":true,"a43b5e87f378ebb244a7d0a0ab1c07f809256699f193fc50b061e372967228b0":false,"0dd8033e68b887d3fa320e60ad68bbaa48cf5593f7f64301e85c90fb8367ee76":true,"910d2756809bbd84d2143d279f7597da80bbf5421c4d8dcf99003567b77eb34b":false,"d62205b334c38634191efd8b0602004a6ef8ef993cf3dbe7131d95ab49538d42":true,"a14f3d6f8ade6d1f90ded48a5583cf9a42bafc598604f10f6acc8211bef44c85":false,"8b6d8d76ed106a324ff49741677f67ce388f2be85c2a1b6369782f6113957dfd":true,"38e93103684609d7e5e9da64340703fd2db58fc6c1ad349e4d79e5b5e605a4ba":true,"a26b0018f484b72484b5bc2d2390f3ddc24c4cc03298b5c79a3690a899e7fcc0":true,"5e9538561d0366893b652e0caa61e6c649862fc5d5f6bede09d85802e55571f8":false,"711cadc2bd9478ff4377d0cb17ee41df7d8669d18bb5403309cb3b8606e62d69":true,"3e826d17ccc750785d270c5094748c110e72166e8977ea375d9712f641467ebf":true,"1e4cff15be2ee55a637bd60504cbae61c8193b9d19c76c759b11112508210544":true,"d2b1cd2ab3cc8795dd4e4dc2c37252667007b0b70168f1e20e3d0aaea1602880":true,"f373c9e6dd961e9f47951f4d0fb3e8becc7a38af17105f2983ac4c5b58f887d7":true,"1de1b9bece86ac00c37239939cedfca4a04926beab1408bfdbd14455b4143881":true,"a75607dcdb20be1cb6a4bfbe83d97c56e041fa00ab050e170772e5719806b3ee":true,"122fa499be4efb81da312541d065b81c3370fe1f9a334d22de7fdc5b0aea8908":false,"5fe7d1a2f05caa8bc8419790a693874533137bc664fbc242b5c02048fc61c74b":false,"c62e5483dfd11fd3e48851d43662ca44cfec423d372f266fa669a64ef92ff8fe":true,"d9d95663a60c5ea6a757851f80d63e1fc96da5d31433c4d0e554b85cb8c183b8":true,"6afaebbc0c0bf6a54b83ae24297a4114db848ccfb0700e4bb166941e4c4482cc":false,"c780246a61efda07943ba90057179e8b6b2b3a8fe1677decd2c8c3904dcca746":true,"84c9fdb7072504795009a6fa847341e447253a5c1cf472f02700aee91104637a":true,"17437ad6f29579909010fb79be3c0c2ae79efd79b08c7386a12fb1a368545036":false,"cf01491c45e634ef3260c7657fe1d376e40debef8fa74616f48cd6500f6edb3a":true,"203b9744225f135e515c968fa3fd64fc0c8ec2b546bf5553e6ea13c96563347f":true,"cb4be749cd98069daf517a135d3f0d913a8b4fa839ac0dc0af1e0829f1cf17f4":true,"629c5de68d333c073e8f3dd693e56f3c091d27a292773022e1a54235b2235cad":true,"5f96962edcec148825847c2b22aac2f72c97ccf7f035aebe6a3955d1c6ab6db1":false,"4d5b9b92d3a4b4a1e0db4201d3282113a078093827529425270ea42144ffbe78":false,"fcc1a1c8dd40061f8cf808612c6874607394b8c6c447d06e821a51ff68168ca4":false,"9d5425c8fff85c67d282fc8dbaa011f9d8ef0a6aaccfedbc3d04b2b6448eb49d":true,"c049a90691bcf91d050f58bfaf3fe37e8f81a035f4537d64b7b7ae60a51ff777":false,"96bccd331ba438820aff246a0e72eb8f43b83e0045912681f76c0c724b05c626":false,"ec3eccfb89689efc5bbde5cd84834d5a727045850980fdd1bca6a37536899ea5":true,"d3e78789b74f3769ef43b7b7bdf91c7b77d6c7a414b795971038d0211ad5605b":true,"941a330eb7c3b214246b2e15caf4c5f2540a36ec4f920cbc293ad9d281d62bd5":true,"59481b690043b8a627530d2d9cbe831c5700867b96fdbed09e76e708d0cc0f4a":false,"5aba5e60f95a4504488bec89a8944da6cb3fd4b10aeb92822cd22636beefc6f4":true,"8f16c61aa94c5fce3454a205abc5b88c384b0116173a442029e67e5bc330060a":false,"993b9ee5780710ba48c76f7d521a48c4ad49b8374e4829184d2c8a12cb39435a":false,"2920a5548c017a94407daca04f17a880f7a1283b39ad26562cb65fc8d91248ae":false,"62efba2288872b6558284fc7b8d06cf6dcb3b244faadb575dbf17c2c26ddd9a9":false,"cdf62a29a8c89aff0417356f3b99aee92d7f82d20e34aa4e0fd5d6743f01e06b":false,"77fa8076091151658af614727c3b5e02800c32f0924dd70c6803488fb2cceee7":false,"bf0639e9cbbf2e2760461d142c0ec65f4eaa9d5405b29c01ca0fe284f03d0edb":false,"375a0b3f1b8b52144225730c9239a3e3602619708822b2c3dbaa098da443eb45":false,"2ff0748dcc041f53e0b3bf424e05870e2da0d2539cfdddb55370ac12850b4eaf":false,"ab7cc5825497f0dc5b9a5cdd724b84e6e7ce8f3370350b5e32079de4d44516f2":false,"7d427168e3c65c11cba92ac62947cca30de8c922fd51a236abeac5260cb324b1":true,"e25db449ac484b4eb1480518ad46b642a95d3767a2b5f6f6be2a7043898b182c":false,"03140c3276010292fcc264406bc1a909e0179cdc625097d44eb19b7beaf3edaf":true,"415ba53fa989d22d0f378d325ecf753faeda5446c8abbe3f6c4aaa628f31abc3":true,"22a5083fe7c608aa2b2ccb930b5c5177792f22f5cdd945dd2991770dceefb348":true,"73f2e27fad4c18cc9f5b3b7560d8aa9011788aa456a9e84e931c16c615f13b55":true,"b22ee44934860bdd0ea519c71d2b4e2aa320eb6f52f392da92195be8e9eb7702":false,"b50dd266ec6efde0d30952619fdea75099e79538ae839379f4bd632b54e6685c":true,"aa14e95cd7b7cffb86792026fb4124b797737e7096977c7db8ca311901f5b05c":true,"9e4eeae59f5205a78e7114d539bf3487a971cf7a17782a92c7b0fbdc1c8e36a7":true,"733e62171cd5f7a315aab3dde08b6ceda14c90bc26405fd6f41e51670d6ea73d":true,"4bbefac3de2bf2d9abd5acc7c65fbe4be8439296617235c16d4c3d8b61b7b062":true,"eebda5459f2445b7810fcdf25c882b3f585802d152bf7764a49866620065fc8e":false,"29482ba50421f4e404f5e796f27059ea9e9a358a3e568c4a59d6effd5ac668b9":true,"90e129b15d5461378142e3756f63b6192ed22049d1cb519e9ab0951d7ad93ce4":true,"2754268c1c1e86a0de58f11aa7eb21677eb91f25edc4b4da90fa8193c55342b9":false,"72fdf2b2825740dfa06bf1b2d2e5698acec5cd313fa74cac5e4454a124998abb":false,"1da02df83ea1ac50f9ea118c377e78c7c714cabf481fa9ba2e482f7cc76cb26c":true,"63ddb721e801faa4f6466e9e315750e33ae0cf3a751d7fa4dd529b9d6746c97a":true,"0e41022543b0865c97662a2cb5c9876056f369c8bc7f966f41295b5db4281a12":true,"8e56044355190f62b128e6bfa8eb9b5b4bbd378521a55c9e0b69a3e57c3afeab":true,"4c8f079c56f34d1f2ca4101b5718082c1028ee4f2fc022640da99d65a75cbdf1":false,"c0b848df13a31dc7b6883775e04b8de8465c70698f901fd61632105c0430e0ae":true,"d3805e5f76f6607153bc6282169585b583f24a29f63a8ba7aded3e5e9ff1e137":false,"53b5b6077acaa318b4b04a8e54972542ddc59201d24b90c9e5c924e07cd6b9ec":true,"10fdd9253bbf85f47b6782ddb51b479b8c0fad9d3129912078e5c9c2d01ff3fb":true,"1573602badcf62694094147828fa096d56a635d7184104d0a112a772ea24a40b":false,"4b1671f7ce360374e86781c5ce1c4e98c0c95b80b7094e659d2f2aff9ec93d38":false,"de1fa145b7acce2df928f08761b642296b573af5b1c70a37e439db1f795778e9":true,"db8b236dc8f0146c8f4ea3a20c9f11d88b10dd0a55c499f2a1e0d56c87ebab26":false,"f545ac75aa695a56ae9fd4b51bc08546c47a8a82502a3e2c5f28f5a06c9244f0":true,"a5c4f701b4dbf481e6e57081918f7042994b243ee280e2c22db844b9dfd1d979":false,"fb0d7ced8838ec3015ade0525b359b47bc31e0bc9193f932da6057d10ab28b28":false,"90a7882a894c410da40c06dca1bf977d408f7651b8efdea6a17f4bfb2e3cd091":false,"8d16dc95fbdc8f600a81a8e9fe95aa4712e311c14011c930b481bda18553b2e9":false,"b89fa433e55379e39d253ff5f53113cd5a1ea36780847dfbe38d9372f696a877":false,"966f38172876fbed24f6d7813bf18071d73f66d57254f27a7ad0532a58e860b5":false,"9b2a63a4f3d60521e9ac52be3bf051a4cdaf74ca5b52c8ac9e3903b97e22e6e7":false,"3d3941e4664daa3dbd3153f3ca90fb3d533e411befd6c5cc480cdd96de50a3c1":false,"48272f7b05be5bd401d9110fad5cdc469cc1146c26814ce8ee49bf5a5ead114e":true,"42228715b1ef2226e71150a209711b7f7212648c4cd399944d0c02a4a36046d2":false,"073d214200447b8d97154821807c8dee89b28a432b51cee8df1188c76af835e1":true,"c24c538d196bbd5949ea7441fa30966a4a05b1f8408165f92529da836cdf29a6":false,"2453da9bd2e9115ca99fe4a4366dbf2b4710ea674ac5bdd2c618382164382270":true,"73f8492d255b5dc3a6f121afcf48407d72e27cecc3127845bba03d12f1b2f587":true,"ce81a785555613fda4420d1c54fc06b1ece5c16fd88342f9c484d3ff00e84845":false,"ddb3599f5414c0e6ca8eb911fc2f8151efd4f7e4aa449a6a8161dd9b52214bf0":false,"5a647d4211971ff8d5f1b7c1f4a1264a50c04a98f1d8eb9a1d722e890ada6814":true,"c1d35d576b66f078d82841b59ea21a66c7b44624f28e3be225ecdcba96dfaf12":true,"56335ac9210be1431e486ae59cc1ca42f95e6c15d3d03873e4aaeb6a52a44b19":true,"c55f80a8f12362f5511ec9c21acc2e721b9372b37a353c0385c96d1f9112d8cc":true,"8a95ddf688108b9fd13e37295c360cf7da79f980e52fb5a8696111f9295723d9":false,"9433da57dbbb1251039ff6021bcc73556469ffd54299c5b5c81f1ed4fff4fb4f":true,"5300b3c9a4d45840c20cfee7dee67f032e9b458aa676f6ed1c6e7c2b2f0396cb":false,"5066c00222f66124655f5741503cfb0fb0152ae26b90a2b2f3c4c91e5ad77533":true,"aa3400bfdde339046d5737cdcef95ae740b83a7e76989f333bc411c4e5c8fe53":false,"c1a2ffb21e3177c9f215104581377269912e329efbadf268344117570f1f8dd0":true,"62391a6af0892dabdde38836b5ffab4fc37248e0c5c8ca916c38526bcb3eed24":true,"9978fbd798db1d45f4a0f8ab95e3e11318b61ff66d8ba98cff75d7cf064dcac2":false,"3281c8ef024e84ee7a67af64cc16e6df8852235e0b881d6a7d18a76155632bef":false,"77b23bd3f9577c6ed0dfe4a3756aa2c1b954ef81aaa548e9d02ab885e98f1f43":false,"7fb5f47057c3b0f1538e97bbf2bf1ac37558a3b815202bc6a7f95a765b3faddf":true,"b9043363969641fb00d4ae9f65d9cb245763292b6701cf02bb571ff426dc73dc":false,"dd708230825f2c47e43a3080039150bc6ac646f5cb9f69cd72c8a64adf586aa3":true,"cf2f869bb7bf6918b535b5f5d5ab7d8f52e634df8d353e1e0a64421b56ac375a":true,"9a99643164308767b3de8d40baa179fa87d8fe90885351f2f9fc7daf81aab40c":true,"c0ebbeb66ada1e439e51d24aaf0863085976261b97ca2e85994ee835a3740efc":false,"f961cc78286c51584902ea77f0c35958c4d806db8f7dc539f8cb00143a3e710a":false,"6d01bb9711a7933217288ef6fb8f7a1459d9796620f24072873d84d213e11c1c":false,"46d0f0184cc63294cc426f8bc192a236798494b312516b6ac07f13d39f255509":true,"c761657a327944a3aaac30d154fd0ece5517496143dd8325f546be466de93580":true,"2d1b4f9cea55fad26bd8652ee1b7056470880411148edb437639b1450c702c2e":true,"d77b5d9f9f7c218bfd53eb7abaf5d564040fcbdd89e931e3fd588d5e38a0eccd":true,"fdea2b4f9ae3eb8915e8529118c817c0c7dd031abc2d38676a85cd0e787b855b":true,"41222202d5e6ee586e53fd15c8b15412eafb5e4d21724f9f6229630bf0e236f5":true,"4f4d9eba0fa799d6da483c6a0d9cfe03a275ded62d8f6fb7641351dc2f8e5241":false,"5c5d66d19c131853d96ecd42bd2568c39dbf16dd1e00340dc64f98e0c2dbb21a":true,"3acdf67230678f8c3c9e9f26f289e158c51099e98e94fa885887ba9a95fe8345":false,"a0c7cf3262e14129642e511cc69af4ccbc2b6121b121a6863aa94487d77787e2":true,"46efde7e7bcce6f32a88e2ff63cf2166d6250964e1c4b2c69f90a4b5700d35e9":true,"5ad2a39b3d76c79b951bf0a3f6c2d6a7e036cd90560463284b4d1a034011b244":true,"6a7df090c67ff6db37dbf283ba49a6eaa7ddad8319d3f6edc4e5ffaa11b1ebd4":false,"91f8cf572ba78d2ce0203ac462623d33f175c6d2f40b9838debf6c6aedd843e0":true,"786ce21b6b04236c8e0cd18553c1a4a9b35a91fc9dc018b448a57d2993b524a1":true,"ac7c44778609adb9d8fd073ecdbb8d67881477fd2ba4e2268c325192c9dd83bd":true,"f1194ed73b70d2913139851045600f93fb235fd868c31c14fd53175dd4b60b8a":true,"a08937f4aad5e30534f37df03c5b7fd24d1f84cd86ae52e3a4e27623a5874734":true,"6082b742a7208bcae5369a5e2f223563e2cb0eecaec2111fde5408ef5c3cd08c":false,"f80b8b0e1501d62efdf7c9972332731b4b12acdaad68a8c0919ae2bdef06cc46":true,"bbf0f14d912264826a00f1a3bc8711c2fd5f2f23fb7d41b661867baecdc8d2d9":true,"6533d3f4bbfff8f8ad910f9bd0504d6c4c0b7a5ea0005bd2ca75b35ac4e28fd6":true,"b8f06017f512d245c48ed49bf143b95f1090b18c4715003dad0bb96329b7de50":true,"52438521a85d76b575a48cb022cf1cf289218e7bd05e56731ff540c0a5aca67b":true,"fcbac4b7bad49b0ded085e6cdcdfe594962c41851d925969bababf12cb98f152":true,"f1ad00c0281c5e9fd2e3a1799da1b8b7a070c1cba2621f8f9c3e9029e8a83651":true,"fa54d99bf7d240bf27bbca79ba6019a3b6f66404c49e79f1029445cb1025feb2":true,"4de99c3d17fd6f09f78f0c82afec7eba3f241371ea12fbca98dd564574b4ac88":false,"b7d2de05f09666928ce41efaca547c202d1d07d5683f03fd44fcfaa618a2ed1a":false,"831598fa6e086947aa47e8febd0b7805c53294bdb745fdcf201823817d5df555":true,"fa4615b2618c88d14ba98cc202331206e9a89917f026a8b3d00750792b6cdfdb":true,"c8db1828311c276bdf7858871d9afb2e8d5ece58dbe59a62d795ac59a1d2261e":true,"2c157477525d6837fabc4e4d4b1c05a9db45f65a8482105553d0a03018b97ce5":true,"cd83d1d0df0093e592aa910e6b42458c674b06cbc59ce98407a3d3ae535efad6":false,"616091e9ce9ab2b337d2c1603a4abc5b81234f4b9fc6f86f0252428546377a9d":true,"90f35cb7852523664e36a06ed9a18f101dec0b7ed417f8556139d4bd26fb361c":true,"9e72f581449a94d574f640cd37d90c1f2b19a6388ae64d6faab228fe122b69cc":false,"21919bd24c30ad4fc71abb9ccc01dd0f1200ca4640c6713b2f39fa1aaef0df0e":true,"d41416bcfb4ae178f651d565a44621c042f7ea4236d073e3f14d101a2f0a1897":false,"dcf7407b36c3bd9cd9a4f177d781ca51b665c88f40891e1ffeb5c7dc5329c499":true,"a47bfdc92171ba82acfb1600ef11c4d6f66e14afd27248fa2612f5439abac268":true,"95937aec9158074fddec073554cf894d693977ebed408854043d6c82cac56dfb":true,"634fc07390ae9f6219af0065bd3fa6e310958d51f7aff87aa6fb3a8ef5893ae3":true,"002b9ae1975e82d014203f932763b9577903c332ec074f8813fe74608351d134":false,"da1cf93d5b47311f427cad4e9eb44e3699d875e3944c29b25eed4e3b5820376e":true,"3117df4f59c93ee2b0b719beaf0e155e1a9c4a56d02536a2174a3c9750676040":true,"5ad53b97ac0207cfeffb0788b9908e7588d8e96a67592244316767d081a15e68":true,"7475d1474f0787ba2aa9351b53823cb02cb44374e4e9e3c85245ac17b9568a00":true,"c8a04b352b4cb9a2a52fd4743625b1541f0cad9ab1ce14cdf64de971efac0223":true,"3b12e3d009110b97684f6a853efcc023fcc97abc4c82327594c868fb1a5c0c14":false,"c2865c41fc3dff6a84c59d55855e90796018faf85fe56930cd60d6cc3bace7d9":true,"d29839e71bf8d58d7754f50478f44893483bda79bd343456a1b4c92b8091138d":true,"20721960dc1ad77f86e686f28c189d3780789d2d21a863462cd40c33623a83f8":true,"dbe59d3d5de06ceb81f98b0f0177fe7e2b9691ed8a2dd5de0c8e97ec57d1c81d":true,"b5979b559f09e2e06bea312db9824a68b4090a13c4b84cd72f23f0f2457d24e6":false,"5e12e2e8fae9b0ecc8573a9bf2ffa4af0f3b57864540be38d02b5dfd17909c74":true,"5b5e484a88d21e9b657b978a557d6292b6bbbfa98745c594c9b6eff4ff03f43c":false,"a3f5240a249874b60d89ff9114bbe74299c863c2ca0de3a8c1f22ce91c5dddbf":false,"302d7a38f6f2a94fe602dcf6eb41eb30c7267a97032c9a787e179de6d4730441":false,"b6c9b4ba3dba7a526005eaf32ebba1d1e1dc82609d30047c44ee472cfcc9b63e":true,"4b3d1bf62c4cf5ed44d5a432a333532150211f7cb05e113322a22b8d7ad4c553":true,"750169a368b04209baef3670e3cf62f00cc24200394a38fb5660ab0cef15e638":true,"ff810bb7b3992bb65fabd1171db65126860699b6c610bca526ab05cdaad152c0":false,"5fb52f233c86b2487b59c96c6e0b0b2a3906d08658fd9de2228aeeee7633cac9":false,"f93fe7af2c7eaee5ae763ba1829475f8685ad11aaffa1911cf45291923736497":true,"34491859787119438f88441a351a0fcb123f3a9b9a6501f1c1a709a69137f490":true,"689382c91b5d24c023a51df38f5474a19dc427804992935105e04e910b1f6044":false,"ee0aec0f4e37da8f4c729867b0fb910e577f99982350a12f976270d0266f5ffc":false,"f1c64d5d435dddda74d5d2d50275dcae8b268610d4bdca25066eafcbdcfd1d43":false,"597e41985a02e55a75722fd4e58f64ce6e2bb71a8811224087935259c90108e7":true,"c580da1395379d1dbe642d7cf660d10f8ca563e61ff06d70fd4d3d15f20c5b5f":true,"57874c14b9c0e6e7dc5d21324000ba19bac0838e0b048a1702d5886810dace70":true,"b7b980be563cb2fbd674460157e7a24217b8aa9ab761a7c3a8ee792d788f6818":true,"36f3e4e84a049d72a24fed29b0ae3bc8f57b6a02c9d993c134b18ca11420b38d":true,"65f44ae0f25b74555da132dddecb756c5c6bdab69874753abd9713c70d231ce8":true,"1971cfb47a2ad2d71834e49d614617801496490b417e56498b8d52f8faaec7c2":true,"447c196577fc86af421b723fc6d03a8cd9105bdfcbac686e83c7804b933165b0":false,"faad6fbed04bac6e86f6624832ff4ed988d6ada892aa33ae25eb34181546d307":false,"5a7c2b39f782d8ced5d091af791209a3e58368bdc0655098304b963461721dec":true,"f67592a45cdfa34fc8bbcd267178dc4c8f54edc04674a0d6547516b000b24231":true,"4e62306244c11ef1eefaad3b7dc583641cf3b6620eafd521dcbccd48f30ae00a":true,"ebab1de71217fdb0768ba151feefe8b31867b7443d718016597005ab790ad399":true,"794d4a504a949eb528d92fbd084283695c0b0e798bf7efa7aae64877e947d759":true,"dcfe7ee081c77c19500e2973302456a7c28640457ecf39e4e26ea949effc36f0":true,"ab994e225765f74b1186848996d656077ec05939f327579d2e8f0a29d0878e57":true,"9d1ccc3bf51e069c5b4a6d6d7934a2032fe53d869b1edcfd2385b2c195eab6db":true,"a5cd7eff35adee651072e78ea17a38dff3864065f79e775c3fa29ef984a9130b":false,"3c97759c49cdb9664465e4c35dcfdacec8a7263f92b853d33e06ebd353ed4450":false,"b41bab8006821eaaca63f54a51f70f0f38429647a23450a49651b996d6941b5d":false,"2a55cba06c6933e247c37c4500d254f128e377f81a3138520f5610b2dd4e0327":true,"4ddf966ddd427b1a865fe48d9291ee2522a74baddec36d73bba4044bf950794e":true,"d728143128050f04f6050fb1ce05690013885b807eb69ea722acbfbb791e4e7f":true,"02d30305462a65265469a666dc46b7a25685957c1aa71dd5a65c2e2168e899da":false,"cf5a0eb65578c4a4cb9db85c92946b806056cab7f03e69e465b5f45937bde651":true,"b4cef50180454f961eb0fabac8e6add09097c827736f21cb4b3685c80f7b79f9":true,"0e89b8db10e198120d3803aa9f3ea2a894e82928f3ca5cb46430d52e28ce1481":true,"f5b5f2ed9709c7ca56e284889409da1a8e064e2d08c1e9c836bf3ff980ffa002":true,"809a552d54909cf5fb7d9115d74427f00f209f77b2a0d3f8ff4249cdb84b1d19":true,"b35dc91d286d6a01ea70a746cdfbe95d8ff0d4ad41c7b89d2e9a8c611326b810":true,"e99871bb19b436265e6e6b244a9e4df638f864f3d583ed3cc786d8137e1a67aa":false,"f5bbc27118e509dda03fd05288379cdc7612d3e6c014df6a46bb7e1a549f4b5f":true,"e39108d7bf623a8ba1a7d1fe4330a13a5656e193783890723b07588e8c0b6eee":true,"a00829f08bf49bed948fb0a9bf17e30d81eb26acf0977d8ecc894b038ba7599b":true,"be16de61bfecbe8455faac2732b464b0e7f3d88db0385e66c156a392973ecab4":true,"68b93f834e0fc649ac77285909dcb2df497d5f7b8b33db5727e00575ece02bd6":true,"e66704903c2f21c212eab21023adb33323e160e05734d9c929b8b886e7d38561":true,"8a119de441d8a261a095f2e370a16cf2ac503378af100d6e80a93b510975ba9f":true,"5782ecc9b7f3c1fdc4d6e95b5188cbca535773758323b82821e87518b62f1bb1":true,"9449e1c5169e4efaa973a6c4d498cd0bb30384667382d1fa6f53258b76bc56b0":true,"664f1b573aef6b51b8e57cfc693c570a771d97872bba79e71028ad42715ff6cf":true,"c78364771d79c18f747d354159fb39c30d621cf8b47905c9aaa34e8bca0b56f5":false,"bff8a37a51b43c74be6720f4dc6b26e68b85678914c8ee1cd71c629b22a535f7":false,"c5e2cb9be5c05de97628730d05740e67d24be6d71576357e17fbca5d57fdf142":true,"144fff9bdf2fc3cc8c406748a26837c502e5547e7e97cc72153ef0fe8e978b89":false,"3a62fe8c8e8bfaf20fc8a7e781a2fc47912e2a47321ffae79067c580ecd48f93":false,"626af6778d1132c516e53acd455ae153baa6cc4ea490d952a7689fe3de434979":true,"657ced90d1b79174a95afd2ced7513286a7790f429805ede814842fade243b57":true,"9f15dc5caedbdc87fb18d839a74bc7684aa971a771312c134fa7734dd4f34420":false,"41dbad28c95f4e2edf03462409ae4a8a787480ee9d0745d28c3c745771ce1734":true,"9d29c648d8ab2e1d5800123398607c7fb42e9f02e5cbcd837a0695e0899516d9":true,"22a2b53bf37f1b1e61edcd55ae1129ae0461efa89aa387bfb21cf87ffabd8990":true,"a39ca0ba2710e6e50c1b9ef190696d65f6a27babc24a7a8358b78bbf659528a8":true,"9817dd38943e4d91a7e1a3844cd792f7422ee718c07647d75d6f652d5874d9bd":true,"047be5540e28ff3cd6f0a121471cb44b8193074ea37a75621066a54f78464bf3":false,"ccae56e19b846169b796d8d421472773f167c6df4995915344ea4bbb35c00812":true,"eceec562c1660278e321581ebf7ce7e75b5bc41e8c02e08fec1bcdbbcef31793":false,"b37f3291764016243e25907c7bf6c5c8e82660478ca0c39a08433ea65667b47c":true,"e4ce113e15522ed6ee57f5f93dee8b2d65d56781c052f3e83796e7b279159d77":true,"7f0f86dcfe0ed082ddcf267b72499d17fb6b31f94382a51a468acdeb9120dd33":false,"1b0fa5cab54d2b7382faba904f3e0d5e0e8080b6e9e8d8c2641f54a5313a3da0":false,"713ed85b2745e996d9ddecfd2b9255aeea77879d9e367c8469926c99f6d8b3bb":true,"ac77d48f0393524e18e186a527a4c17525b63ea005397745fa778768b3164977":true,"e99d8dd0b25ae596c8ea95ec6a85c14ed14130983ea45691f6d2db9fce159e07":true,"d73a6791e48235086625f1e1aa0e94c8761e46f20289165474219591f172ed1f":true,"2742d9a4516416cc47a6f9fea3ccc39060031c74d2b7ee6e71b9c4724bd68c90":true,"ba650010205af948c1e2e4fc9da812dd565fda087a343a3c4e635cb6df397820":false,"803ad7f8548cb1e7ee52bb6f5c41649702b6712cdd97bf122e25a4cc19b98634":false,"edc42bf3bfe233c6fa577671faa66ba17340420afb4b02256b4c302a3de1ef23":true,"e602479b2d5bddefe07a9da2c029f92be6f2d7c2f55652eba051588c0c9d234f":true,"42e447c93b3db2fcfbbf9281fbe881225aa917a28fd6ffee342132e972fd6d55":true,"677ace0b2ac482c01f8b87cdd93b42fb23668944683bf02263f87499b47230aa":true,"08f866da88e51aa6f21502b23c4518b846b569a2ea70035d72c85815d65b4a29":true,"6dd70eb27224f47e804b0123c65c820a1c0cfba91ff85abc2c83e4a500a6fcfc":true,"7df0412c6bee701c0ab31a3c6176f79ba9c621ebbd96572849ff4f54a7bfc24a":false,"1da93c3d6ab347cd63cde6a68581e006033b135db3140c8bd35494a954d3e632":true,"3d19e98ab239af5172ed469a8abc2ed7bd789137b27abaa463d9b7c5e3c4f768":true,"81bbafd2f63844931e79a1ae99e832d0c0285da088ed39160749f547b1042f09":true,"70327e25f358eaddd7fc6501ed430e0ab9ba0549bd7bc765cfb2d01de789f720":true,"301599b1900270dce8328ea18265ea4d71d6da77bb7f71f3f06d83a2c170f65f":false,"afc440671a8134f03f1cae09f6d6fe091a6cf9ba85196b033656dd4cb44a162b":false,"f469bc54892fb4917db1a18e5cad5c12115a1880a9b23deeda58cce62fc493f5":false,"17681edcf76f0b0fdadfe5bc018c093dc28b0c0805955c37496f98597ce82909":false,"e34a8c58d684906d823bb916265caa81cfaa64c1f2f5f251e7235e88454cb89c":false,"ab506736e74a6513d2986ae20cb49b7088daf2c89078d8ca0507fb00129e5a0a":true,"389cd953fe8edf688a8b70c7939063c81129e0fe552c5686f44b63599b4d03cd":true,"6a3d313c62ffffa2229d922ed49bbce69f8f696533e5a5f7b30297e1f0e997eb":false,"6248d5b75e29f4066044e8ecfba0231b5e3c42c58a29c4162f578817691e9a0b":false,"02ce50e37d4c363eaa7faee5da782de57796daf737674c2cdf6da01145ef82e9":false,"5165707b62b250240f2100b057fd3f484f02646a8cab1a159cc83b289dc25f35":false,"46126aa9b82e7e302e1f3461fcf23069e2274a521f551033c724d1e540264e2a":true,"ae76991ad8f78a54114d9f2b93172f3a2597a8bf6259b2bce6d952969c43dd3b":false,"8e05834fa64b69288756cdf57d35e43d2d265bf08dfa6b6c0d000259c2d9ca20":false,"63ab3273394318138e18ef52710227a78661a74a4f48131175d701da3b022f73":true,"deff5a57759b2a572a2c4adce5e4cc9f1b7628863702b28433c1daf3a62e8a62":false,"00037d867de5428748acfd8e71e583fe6aec5c6b624d184353ab55885933960f":true,"e82023fc1b3ec30234decbdb78a055ad32487cbc07a54fd03cc417ec287b37e4":true,"ac62b79c31323aaf4049b929108789b8c843d0147b93ebc75e6ea2aea92e2d1f":true,"521f051893d1146c8cd38ea1027137d49deea05b6220dc3e69cd31bdff89317f":true,"1de415eef1a910db45128a9ea43a1be67cbd7165cc8b78404648a5f893329d15":true,"3dc593c816582ad0e04482c7539f9def1b9104640348eef4a0295314a9a3ee66":true,"8533c8e8e5bbddbe81e3f21f9a2d0418099c6dd408c3b3f169587839528ef730":true,"21c464f44739d13ba324f5eba712537b51d9b03b316660218d74a06931785adb":false,"365c793380923a2c4bbf509041fbeca779858585c582181c421699631725a14b":true,"7f57f2c43d83939bf5300e745928c796d9471766fc8494b217439eaaf0fbb406":true,"e70e8eba3dd0c74bb30cd3d4e8dc089f5e8ea80f1ed1fa2368671fd61d19f3d1":false,"02f1b583eb998749f7c9edb16b58781eb858b9fa210f69cabf7c5de46734b2d4":false,"13eb5196869c30f9c4a3592266b02bab3c812ec3e1714fbf26b0ce8125e938eb":true,"f7a888f00f0741cda0980264d7960f94c7befb6f2659af2300d419c93428e120":false,"10168d6c5edcc41dd0ef8e6ebf5c32b0d9575a78fddf195b1842792cccf3d2d1":false,"5124a94e12839576ba356c74d04a50f2a63c19991c81de22a8df81121811df37":false,"d70de9fff038fc031f9d53d5a22e1f7c35e8d9dceac82bec7b114b341f929042":false,"1e9f674e4c2e2c8a1044b0b52ccba0ceef28f540e1283d80fb4a5c638b2b135e":true,"2197046b1e4986b458e9cc6b0519b5c5ab6fdf0ec8d4dd9015d3d284eb54319b":false,"2174087a04f0fab295deb9f44911e5e3a237adc8cb0a3299a8a86d7af4fc1ac5":false,"f361f1396f9c59ac74fb17ad2c16f43815ddec9b45af696aa7c3c910b74fa9c0":true,"8c7ef974b478f4ff772083b2b53aabbb5509f98da14c959b3122b4e3e2f8920f":false,"977c7d81e738ce6be01823bc5a5cd9931dbc2037a027a7e3c8db5b4483be6ba8":false,"9310a74f506b0c3e3c8cc5a273e1b72d5c5f75f1d493e1d3b60b7a053f766cb0":true,"a49b12caf3a3475a7830532d7a3faee25860e84aaeef45f4d3c570a58d16a5db":true,"921d86b199ef3a4948417350dcef181691ba6340661df31c92b72f787392d005":true,"2327e50c7bbaffeb4e0740b6cddee3c5b2ed06d55c811d069e8cee84b810cf08":true,"f01155fb7309533def4d75c493e7f61b50ca957359a7dbd56863ac3cbf0ebb07":false,"d97f9c01ef9ada58c82ad79983cd5b48cc030fac2b418b3033e556a5a83705ea":true,"b0c462c7bd90ade6e0b9cf35c71814ec84b1f8d93ee7cbccfcc7fc2b6f951ced":false,"6bd3615cf78078af6f0ae0cddc5d5ce38685735862754b14b5c637c2aa166d99":true,"e21721ff24700b5243ab7060c60a9b8fad2c9ec1d1e465d09d6f0567fe022dca":true,"265385155aa658cabf67ba4d9d021cdb00e4f475a0e93032e0cdf7954ec4e50a":true,"3a87709cc052edd4f600f216310a38900432ea172a007acb34ec90825b2ce843":false,"ee202a13c61fd366a2fdc1a9beebed8ff69d0c6132b181b46739a27134b59c4a":false,"2f8de330ec14e012b0a04238498588321d9797ea6bdc1ddb89a1c73e0f021704":false,"9772d27c5af8d4fba16a3b6f4922c72f80c5c229adae754ab477f824fe47e608":true,"db68f46221763e24e30b0e0b440ad89fdd1066757d63adc7d8671247a632f41f":true,"8d761a4ee0db33c9f59519ae290369e5d9ee1097147a82f537d00cb38e2398f8":true,"bb20c7ef160af58e05fe7995e5bd5f02cee1d23f09ec5700065f09cc3a79803e":false,"81185c4f34970e9ff1f1caaf4c9eee93fdf83c25a396c572d5a0a8785f2cfc14":true,"e1dbdb08c2cc57b45f1c2306d1195617bbc2a3d38d88e0150a4546d2df42c83f":true,"37f4d718a56fc882a1a1e3b8b2742504fa730522a8bc7427c0e6c9cee4adc35c":true,"3ce3ec32547c525309a3b348094e13e849b5baec523b0e356e337db073266ded":true,"8b1872fed23c5c47ec648fa384d27a5264a51a72b8606a1d8f0cdc17fead5a15":false,"fbfeaa27cff2f1ec57dc6ed413bccf8a216edca3f728dc8e0067a9ab43a02b7c":true,"8b4f6facbce03785e90298890a55346882deffcf56bb2fd6385832fa56a8c08d":false,"3b9fb84418f0350335bf92aa12871dc1a6c441e0f4dbc918d42c83c1efa1ffa0":true,"ad4a39edc4918d06be1c02f37fef9fc4f0a0ea571dcc0d84e80fbd62f9905880":true,"4634cebe1b6659509cd597d518b3ea0ae83b697af79b8ed25350a149cb9b786b":true,"09ab7bd3e29d736365066a6d445cab7ca1fad76f926b1b6ab105f86461a77025":true,"af215d3633660402855f0097d25bf2ed86aaa012689edf64c17e542a687fbd16":true,"7f8edb7b5ea6e2255fcbdc2429f97c7ce09d7252f6b629d1aec1032b4960733e":true,"f3a73396012227d529a35b87f6090987082837c41303be50f771c2d870ab8a30":true,"ec127605c96236a1efe667018b3e4853982ca43772fecef11e2a4b4e83c19d13":true,"b505e0804e1eeb940ef97cb00a26ee4846499ccfc387b44d48db56117860e234":true,"2d11268e7551005e9e6a375e315469ffc52b0f9b7311be86e4459b95f3caf437":true,"b79877c68bfb5884b9ad1b263fb9f0fda52097b46fb71af1e23200f20ad1453a":true,"eb0c02bc558df94a5b1a58ba11e21814b71c468091621755847a575a487da8e4":false,"8d6ca827a1ee6d90f07a57e57dc443c123607ea8e89ae63e1e0c98a890086ffb":true,"72cc65850a4ca3da17dbfe35ceb6d8394c27968b68615618629b3158c84d6025":true,"7e414c06de6275ceea7596491751e2bcd6e3a36349daec0e18ba5b6907e10465":true,"b074c9ceed1159f371306e6e1ee6b2a84188c53558a92a26c09998d9c13ead29":true,"d6e05e84b93c1ae03bb9bc31415c6d1b09820a70bf746d105f127111bfcc913b":true,"722a28701443070ce50325c46cac7c64a572b7696873b5e9e31d88942c9b2f04":false,"3702ff23a261f76323ee71f383f32c4e058ab4583f2ec73a862d89238b91770d":true,"69ac75d3570a49ae908078e483744e627e8a6ccb633766e1c8a64d752d6c57e2":true,"754a0a89cf9c0eb12a060c3f2e48af60d90b6018c5d6090d5adaac162ba222c9":false,"884c1a1a772ed495f1f68e38e2b7b1d4fc2a132149af47f05c5dd2393455098d":true,"8decea3002aaae662a597fc9203d1d017c8b842ae3c5d894cfdf93f671d10ef5":true,"eba3b357463de18c4ba53c93b1f8b45ccba76d33abdb415d380f3c7a71a3684f":false,"d4c0d0778e870c13a1c55f7bbab93eaacf1253f79bfefaaca26928b5bec50881":false,"52570c6debeeb1515e0d9222a5d603acaba0ab548f67a23b7bc8dafc1576c120":true,"885852077ffd8ae0fb90280b88ce36dd45d8ac015855625c8a96db6a1777dac9":true,"01a90bcd08831d14a1a19077a0615065d54c27cf2d962d8ec3e1b88319409d09":false,"6ea7bf42deae8be55ec28d8c7fdd1090579b834bd5e67bcc1007e56ccad2b127":false,"caa858c49bc0901f9d9f8b16bfd0c587aaf2477b5ce1bf279c0cf9e48f1657df":false,"cde22d87f78b43328bee26ae1afc5b7f5ee4fdfa2adaf0991118c32897cf5fd7":true,"e4e35c4e798529354e31c29ee91e87a81c4c360573eca2b361a6b50f95860d76":true,"ed2c3ef8f60c785a5db6b11e34c35f02fbe0bb9900f3cec2b26c3fe144132478":true,"a71b66b08850d97b7d0d3eebb89dc5206098b77a956c9a221f534f6c4f65f72c":false,"2fd3ea3bf38873574188bca97986366615f5cba1aa740e487984f3a162fe7663":true,"9367bb1bbb8af78a7beff30e19243afbef578f2bd62adb9c9bc2bd46bf769ce2":true,"48408bc62d12c5f56b1d3a081a1c8e3dccbc047cf69bcd14b28d32f31b17cb81":false,"a7c82adf4631098f0502e52ffc0466a9b42ae4315d093bbd4c313fc9e4aadfe8":false,"bffdbeea65c5282e85b960fbf85aa4629640ec3da86d600ad0ea3b0ff5345574":false,"d3db896abeeccacb19afcb6f29410acc0c964fd8860747bb26de45d55f61ecff":false,"a8b965bf55cced416f06be033be7da744c0bdb22fe6e5bb0dd21f780f781daf3":false,"88a3dfc7163fc221ac25a4f4cb8051e910b4f3eafcd839440b570eca140677bd":true,"d47bac311cce4f6a7e475d4068079d8c33d8e60bc677d44e7dd10e0c85836937":true,"0e1011aed1ae6dbd1e114c89e727b024128e60b2a4846ade55146e478bd40c66":true,"22638b78cdd77dd00f058501188977bf47b9f1f48c4781b818a58b1eb5cc00f4":true,"0b507588996c23844be8b7c2ddb655e78bf2986ddd995a0c941cbefdf341d0e9":true,"31f4a3475ca21613dca11c2af4d5eec4cd29f924d23595a81c796c67ab768e0a":true,"528bf184ffffb38702344c20b1ae84ffd5c74cb8a1ba710c5d724a0a8c7fbc71":true,"2e02440dcf34db83f9934d13289d9b3248a42fba0476b1afc16a2552caf5976c":true,"f6014880108e5231e1c8748b2b464c38972051d49a792deae0728ffb7079b3a9":true,"5e3cacfa59e87e54c2f227248a1831d843e40d15d522fb56c8b8a650fd2491be":true,"c6d4cb5e8eeadb8dd91484ca21f07482093fb8e4de6fc6924d60cf0f46b680ba":true,"9fc5a82a1efbbf0fa1bf4f557317eb92d4d3bb88b21b081635b0c88ff189b1c6":true,"537d9db39a09a6ccee751b7c66f85bfd81a0c43ea39369274c95161722eb64a4":true,"b0cdc2349db9a3563e1423ce90e58a81321b6334aaa77231972c5f5534c5fc05":true,"a33aa88d9260d07ce7314b786c5141dd4e983fe183e30ea6881b9b0a4e43d116":false,"f89655c5556e7713784435c8f0a3c6e24624cc2b2507b44a5d5d01bc009c3d56":false,"b38c23cc84e741f413be14740f22a17f770c2efc68a268626c5e1cfee1750cec":false,"1c57c16fac12ec7c27a0646a955e422a5f177b9a00ca37f23bf923c156f23663":false,"aaa0498f89383b931809f6bf9e67d06d543442c6c78304e150dd156a1a841ced":false,"f4281814855c53a7015fa4a41e9099d267d73a8256ccc60f4187794c6cdfba6b":false,"4700f5d502445661915ee942b11665a2cbf275c3967f0892f6e0a19d4ec51501":false,"67cfd4310744609c5667f2d6d3ea7c0f11d68ca241126e553350662df5775538":true,"e045a96e15cca80af85e2f45d1a397c3eff9bbaf073680da7115d097f302ec27":true,"c94dac1951d96e8becc862142038fff4e24abb933956ffc6e024ec82ac736bf9":false,"413b04334c903ebbfb3312a0ad5be9f9545b8074178e05488d4150920004242b":false,"b2118bc20f0944d8fdaa424c2265a02944c918e2dbfe0b00c44cb7bd6f1699b8":true,"253de9490952b866142118b250f2f681377507d5a9d1f7d81e224a6178df9211":false,"9e871912558204fadf852854349f4a09b5c483ad6133b404c17298be5b4ad7ca":false,"298eb6ef72b867647e77f9460cb0ee12c54361d6f6daeff68325123cca7356b7":true,"18b24697bb05c708ffec236ecfacf3c9ac029bbf1b91cc0393e12b911765832b":false,"560d16195bc52b81a7fa8262efac688d0294aee4cdc7279d5af80a3492c879f5":true,"b720d64f85bd53d352f8d9acf8390c727300440a3424039c9dc22bde72a0588d":true,"0e96e30c577c62dba1c24a30bdcd99a54b9bf8996ea1db1c666865526b533419":true,"bf5a173f115870a4e1cbd08382ad1bed613e8c42ed93a8e3fb7e2d46fdcea99b":true,"34ef440b891948152c37db2afcc7e84c431f277c29358436c88ddf53b8ba3fb6":false,"64f612ebe98eac70369bcf6e50368ccdc9b47e13c1a82a19d76490fdbd11a396":true,"0f7b6d255611cc460ff92d77623faf9778916af8aad0df04f37a1a8fb4074659":true,"b0b313ad77eade3117d072121ae1c09cf791d9df27cfd4aef91a7c3b2608446c":false,"3080c9ac5a22e8d21948173aebe4217be1ebfd5836a9246e58bec960794b9bff":false,"500c8b3d5c7101f5d1a9b9f1b17ff3a4fd5bb30516f0d5f44eeb30462a8809df":true,"f26dba41670cbddf95bc3c1d4f6eeb956e687bed3143a767c8192caa2d51748c":true,"98f329ad4103d280b18cb72c0746310898e9545cb1fba59348a329f8024eafc6":false,"33638b0e211dde693347663e515d57c5592030630a23fef8753953ad6d517bed":false,"d8515f0e364f2f77fc64da31cb77ced56c0487ce984b3ced5711b2c613cf4f02":true,"f0c7bf24fc2a5ff6b950cbb89dfa774b37d164a3a951fc47f62369ee05c1e4c2":false,"7c5319051245ad8d3ad9f9ae8012e43f9064269460ded0039675f543b583a420":true,"be2cc38f8d5d06b3d5abc1de2f4aa540a21e534412cdfa62ecce38047d1d6b67":false,"5b5bd2ecc9f1ad698f585385ad91232fb23256a4d106a9120dae27b79322f53a":true,"62c63ec38ad9467fb5f2a04698f13f3045a3573d30694e71f51d7944807d94d8":false,"31ccbc16b50763b8d607e982454304ded53812f95b997dd0ce46705b906ab1fd":true,"152cd9e67e95818945044d724052655d1b9cca8ef413021da9dd14aaf3649694":true,"aac5d9ef8f90c33d7a57aade3ec2302d1ab6b2047cc5b0d02793020008956d4e":true,"5b25c859fe57e172be45dc368f1097bb9722c444c36042f845d6dcbd792de57a":false,"badf7cccf8f223a5bbebc73d0164905fee1ac5ce191a1d91da1ea992df8373fa":false,"4adc4c44d4e83dfb376f39916c093b186c6c2192ff4ca01efd4fe4836de5a3f4":false,"d8d0fbee87de34233da418c6d4eb9ed1e4ecb2143c1a8757ddc73ee34a5271ca":false,"52da08464fa059fc98561a848f47f34bf463fad0374246bfab215b814f15c11b":false,"88a00e565c2a60b75db264d8292bb99b9ad7747fce4a5399a5fa96c5207e9b65":false,"434c58acd48294c000cd86046f8b797f824c1dc0728499c701388a8038b2645e":false,"e0451fbc674980e1d3d858e86ac5b6dc0255670efc91f15337e0aa7600c592bc":false,"abb9fd86983fe2d0455d68bdbd0d5fcbba9ac3f48e8541903ff6621c9a424c66":false,"26ffd6d46ef38f25481cc2f3dfbbf61aba6ffd7ddf2a6fa9ddb314090d901ffe":false,"4f22bfeba631b47901743f36c88a1532a8a3e7560d9b69029d34e22e8a5309e5":false,"a10a6f7a7226add99f8576eaa883566bb8625c62d2c0428cf0b4fc1efc247616":false,"a726a3491191a84fc492a8908ef60da67d79f9a56a645c70ef321e87516232ab":true,"395a7f085da45ec357efa42aecdfd3ff7acada99892b50fca47c7a4cc220da17":true,"af484303eda2bf0df3331a67006e07df9fa0503d7f04f2019a5f87e005fa672e":true,"18f5dd7da5531efb397b0c4e2a5876aca0df6ba47df17e57a8cc69886219147b":true,"8809a91be6e68faf6a710393bfac7c2d73c4daa688eb94bb125e72985b4a382e":true,"c3a41e8a972a203a7362b2ffaf7d9b7f6a7ce72f436f21f6b804f14a737a5996":false,"b6dde5d1014f5657bdf9fc05d672b028124571598d9fdbab300bc5fdb3e1e22d":true,"f861c3ccd4f6b8d482e1218f0cb3d9fd3a460be33c5e4277b574ad99dc9de4e5":false,"e2fb26a449dbbabd70aebd61e6bf64396df2e6dde58f17a56b8a03560110788b":false,"6919ff08b674ae993002a9cbd5845f90ba3b035873ddf455316c461dbb6ce768":true,"4e7517143480ade87916f4f8983ab85c5357ebf36f3b9a000cebfc15415da811":true,"f1dd568239c812fe62aa1bb4f75374847a94295bff701e039d54116af44403a0":true,"66e637b8a75d5fda6ae9255c882edbee8c6a76a1fcb84ce89de2a580ad7e33c2":true,"77810feb52fb54be299c4a22828c1c4562d46de5a544d5ad2e7759fef908521d":true,"d5bad19555e4eddeb1b219bd43a0d33b4791e3b4c9a5f845fb68b5d0c6a1b225":false,"191fa4275496a523a8504e08a6576be731735d74f7ae890b472def2c078e2779":true,"f8fb8bdeab6ad7d94228ded8727d2cc20bbdecc9c9949936520582cd65c0f493":true,"d2fd9dd1d45f31849a60a328b004d1ed8b116a09d1850ccc26dce0bcc9c6c9c0":false,"c2e33ac8c22132154c5021fe0209255a351af2bb1bf6f39437343d6a9309ec4b":true,"7d0934f275fc72cf4a501923c991797c0a78d6401601ef3154d4a38d59ff0b6c":true,"f2e997ad8cb4cdf221cf182d32879469c4b85ea0a7892db0999d94c307e9646d":true,"0113a7bdb61b2acf237a84ef1da24b3b9686eee576ab91ded8d1318b67891235":true,"1bd14f63670a28cac00231c3c7881fb29caeaa2da27a63fcf50b9e055cb6aaae":true,"c03f402d85a72a2be5463f1806350e4ab0d987579d43071f3ae3987935fe52d6":true,"70a9d8d02a320e4bf08e30de4a347db697ad59dca314d63d7825b28d8b05372c":true,"6355d047e626e6d1d0ddc17ba9516b9b37e881a19c3a85260045048281c96470":true,"0a695376d912d89d28e64dd91b6e51f22da9a8f29c58d677f482f13921693e76":false,"5d40c0e23012bb6cef7103218db3d6d268179a5b99d6980d18d2342a58fb8a11":true,"44f9dbf4b5a4dd7e92107128fabd6e2f57bde3efc5c5043e892ec9276e39c30d":false,"b7a8bea6ac9e0958e6d5f2747a22badaf9af4be26a3d343529d10246bae2f114":false,"2aac8992c828935a8afaa394277341f56b51486e6c806ea88261e8d9bfd7a82e":true,"a0a3fc78ca55cdadf455544848579dfb8c168b6419b198f9267af92e3e842527":true,"3fcb9cecf33aaf909e7ccdb9ff9236a1327e86b24077629d3d29f7969ac9ac95":true,"20976090df187d7b9f4b854352303478a2ce9ca6ae000de6cf4080d1232982bf":true,"033433e291b5df1edf5686e194999853205066635e15bb6e41a167d6531c41c2":true,"05cd7fe089032d778e60b01f03b9c6464cb6087e361bf6950362aec7dd967f6a":true,"0c8fc3a2d87cd66e0465885c5e16cd1753be2ccd3f24b1d5ec1e4cb698fd73c9":true,"83bdbe18a04585db597840bd5c2372bf4e8931449ff0853130fc4e86d422aaff":true,"66d7e15f49834b02d66fbbbe53747e6f397a9299da0ac0fe3bb479394002e190":false,"6ce536b627006cd5c304ba0c93b17b3f3be4ca6aa71a4be793c858ec9d388b01":true,"559df50c89dce0430fea5ea6e6611dfe6ffba6a226193fc3fa51ca40cf87fe43":false,"7face7942023e57b5d449de394c43b7627c0e0674f0e5196e41c033d670e3b2b":false,"54280d623980d05c0cc9f3d13a12b6ed3a9a78bfe5ce2d4db5159572ac721fc0":true,"daa24e0265e1a382468c3d28cbffec68fea779294308740f79eeac0e9eecfbba":false,"d43cb82a7f8b1c15aabefa431eadc6f201de33e279eacd54b5eb8493b2079d01":true,"143600c2cda0996a745ab6a02e1cc77026db6520095c0040bd56db69e563ac7f":false,"52bd17c9462521877416f521ce41ba921f84414ac4eb06cd1bbb45c122b65a00":true,"9984c31ffeb35f189fdfce2ad95d36c94caac722cc565844ba9734b2314d7fe3":true,"75a4a1022b424751d7c6ee497db7f382f699b947cdecc9b6c0adc16de65c4847":true,"7a6e34260af94edebe7413ae4b3a624d0b1ff538c378306ce7d284ea1139e2fd":true,"274aa585a70abc87630972e1b8b6aaafbeb7465cf6da8335b19c4e32b941fa1b":true,"f2dc568938a27fbca73d211b915c37ed1697d7a7c4e2e8dbf2c861feb0782db1":true,"5b97fc9a6c9f16ff85e1f0758f3a2024af481c1ed03ba36ee0d0c0f1ece7b232":true,"4f63ce40f50997058c522ced8f6e7d787780f6e576dbc491d89421c0b40a95e3":false,"6a32b393b402302a3e40ab16492328e4b98764c54df13874a3c8804f72d94eef":true,"85295309374f1cf8ae56811fc44b54cd9dbc37c407e463bbefeeb69e7a449f02":true,"70e69b4db3ba9a7e1c90919007f0c700f224011dbce5d229e306bf2a80c908b6":false,"6fa9db7f1bee4dfac13a2742a74dc6a0609b3e32cfa80613cd342e7b1546a3e2":true,"edcbf14d246b37be9bed1b29318012455d6b5e651d063206a99bfaeaabe854ac":true,"86e26fd90b965eb4e17e54e28b1f1617cb8522be76f229a17771a612b7cc55fb":false,"bf37749eff3796c8adf87fce6cc06faa5a222d8fb60fc451d24640daaaf0ea39":true,"a99b2743eba768e8d31d7863af567109d92b87a672c7204eafc3d62be87b3eaf":false,"02ba7d7466cc16274f40d82037c77cb06fe7df2c6409ffbb61c2b9bc5db31124":true,"79750f69ca0efe383b053157702f7c4e0e7ec153e1cf57babf1e390e1441a9b9":false,"8b7791c568058716d51f96860c55c64e92dbbad6fe587db587f050c667d9f0fa":true,"295a552fdc382dc8bb5599f8eed133311de3bb1814e508c9f79b4dbd5ca1b0ae":true,"12a3c82008cdbeadea1d0070830acca0d641ff884bebe3f2b79dd8f8f8836492":true,"abdd1604f1cc30bdd3d098c8134afa912afca71cc835a0d91f0b705a6a9f1ad3":true,"6e6c4a7b6dfd11cf2a48ef05615df0b2a5c044c1f47054c88715c2734b06a4e2":false,"4bafd0b40dbf7caabc24f888c910f63208b25593318ff76341403260b4f25c67":false,"cbfc3fa9318c2d617adfbf789612efc6e560e805ced4edd3dd1a6ef78ce4bcc0":true,"6cc717dba7c6f75cec6e8ac669d3b444f72234d635a4c137189b5c4c1a1cc5df":true,"b28ec735c4361ef370dccc2fe69f11e306548a080c493d73bfa9a32d65b165c8":true,"7ac9882a9fd93c0b4516adc83b5ccfdf8da9a6275a03b4f5fa992cd0ab1ab183":false,"de2390f192e22554f5ddd9c72671499d4289cde68810f5068694283f9b4fea52":true,"f075074e6ff80a9cef62075426874dd0abc6e47c46c613056e1933f60c4b5230":true,"27e2a85975ac8dda52ac1ba555713407fb1275b1c87756d541c99207edf32bce":true,"9d34d28f5ecb1e8793a13e18f8dbc07bcea626dc553881725232975f241d6d92":true,"334aa97f0bac22fb437780defc47c4eebd9946542d772faa73e776561afdc3ad":true,"3577dbb52dab3df4920cdf2480b7759b4f9a25aba96a7e4443b8dad6da2a90a8":true,"0e6b4f98afb06f7eb8e7f76d1d371f8307ac54d091e8f6cf9a5ce414268a77e0":true,"49ce60a9e53b9c794218825a904a31980d4f18c9fe3e41d53c0930fe664b9acb":true,"4b2859d64f4ee26770a4349857b86391b212c1d45c7f586995b0427fde6e6685":true,"00edef63ff49dc955b192fe44a72139e33ef735df8812bf7236775d4dcb3ae48":false,"eb274319a413e94be05439669e9d9aeccf385e48d99dddce7ed5a78715e2bca4":true,"24bb26602acbb630ce53d9c6ba246b733a87d35f9d6ccd82084b40336c7a4e8b":true,"cf67e94f774bb6b4cb384fefea05d555875da8aa3d4ed9d980939a8d56ffc6f6":true,"27d5d2c3e1f882cb9b242c47fff3bac0c97096f68bdff04d884c281c783a2b3e":true,"7119d3354f29d973b4f4b4cbfcd412c04b0cf947417a6b611f7d50f5dd037a3f":true,"d92cfe6bd6ff31e485dd0929aaa2c53d97184dda0cda366c62be702746807228":false,"2a2f519536f7841c35b0a1bf5c3d74dc9887cacf70ece5977a4100ac4f124290":true,"d755826d20f0aa0dcd4746caa9e02ffd97858ee32195e89b7013b239c85f2dd5":true,"2722c96a9bfd1248557c61a37dd13246d2924dd5a2ee13b8be0c1940fdbaa3d4":true,"459f3f7790231591f7b40594e6e95501f7ea7b926af7cd31284a9f5f767b9069":true,"5233f3af1ca7f5f158ecae7d8f1d2a29020e1758f4f45b492dfb1a62c567488b":true,"16e8c9eab35eddbf43126f0e1ed404143d18f259b4141444060f60cc81170b1e":true,"e9d3c5b5d12d608c1ae4eea51f63d6e48607d8db42bbd4ff39b9c7f14f9de2c5":true,"ee603d892ac0d684fffc2a23b89819a3aee82cfe74ecb89c80d5fbee0b5be4e5":true,"538bfd8bf599e53fcfcdc4273f7ea0de68d1aa40e16f5a450dbd54b48dd5a5ad":false,"b25014910f30c05f685b1c3fa16d15ec812416247838bc3b88e3ccec9c35d3c5":false,"660fdb4e48a395e3c1a40f8f84abb6fdd9ba9b765a66c7a819807798a46875c1":true,"0a15d80b2ff273ed6a0cfd41647a41b55ac4774e8c663d7e4137fa304d75a9d3":true,"39f4875400a7d18a45e94d72fd37e30c92647cb4011c5bcf4d2899441b27973b":false,"c12209ce813e9a495221efeddac5ba1af0dfa29f102fa1d80319ac836c452494":false,"09fe07b3e915b9db5b969431712ff0dd7578597f6c6c7a825d520677de9b755a":false,"7ce9b803928b3587b23c73b3dbb2d2bbf778bb8696f777031951e55176e5a9f9":true,"591b82c059df4b61e4a370a018cb3802f91b943d60ff328ae439f2f4fd546cab":true,"f024f3713c7171b66a222db6c7510d5a3c457cbd945f9b1229b61b123dd7d6cd":true,"bb158376dea0c88d7785badca03e6d2b4bf5527a49659e8c7790067c1d6616ab":true,"b1c837a01ea15fb99085c0696cecd6237810c4e5eacd2b7d3028246ceda227e1":true,"0f4422ec10286e80e32dd332a22999c4f3416816f213586940b3ecf82009c44e":true,"845f9dbe16fba4de07bef296c41ec5342a3da319955ea0182851a677e72b8424":true,"4af5459e063740fd7a6bb03ef81e180dfc8b6526e24d4c57878c9c312f377bb6":true,"27512391a49c1abf15270ada2c985f87575dceca42bead00524d5dc07bb30536":true,"1e9043e7ea172e98c2fd0aa6ca337fff2d9cf3b3b3765250f48d99e1ed2cbedd":true,"536f3d580f0419f0ce1fd0a5610eb858d889968c7cac80a23b0cb10a53b28f0f":false,"c884a199ddc6bd4b06f5cf8ba53aaf2e54dee4f502e8b4ded460297dd51566fb":true,"6041e54bde32d9ea261b9329d4fb19fe6783fd4add7fb4f2db81426cce5303a7":true,"a9c08768d0a0d20926c3fa702bf1234288ec7c98252258e864d4c0f1e5b848c9":true,"0ead152a38303da2ab3f7567585ee90301c53f37d1a656db8816e506861865e6":false,"95addc67d09d2ea17c3d2874410fa76d4a84697839fb229c4baaa9f5525f0e02":false,"f1e8fe6f2c2489c2b1190958199c9b88eef776b8f3de87910e82d8923e24a62b":false,"07608f65ac06806712d522c2c0d617505095e95a9374ea294eb02599f9cae006":true,"9154623c437e3dbd0dfac88cb24b3640c7f5a7caf81fdc7b31a23b606f7c1894":true,"57b8cd040c5d895e111a7ff681a264c441eb18121ad61e773e6e7c1c8eea6cf4":true,"2854c657bb3b6fb2a2855ca598b113d4895a82713d79968a1bf7f9f2011cef9c":true,"d0c65a548ce0e0b78de6482537c76eb924eab4439dafe7cb8aac7c72fcab8680":true,"724d898ec3bea942400d63f61c94bc83eab862833d47ecfe01f9f7c20b52ce14":false,"9ada27bd9d0264731668356bae0fd4c3f9440ee0caee426112860a29cb83fcb6":true,"f02287fccccb697d806d6896ca1b40a67e6f89a0f069c0732a15e75cd8e61688":false,"fbc59bac52bb60134566856256fe057d7992a3a96d39bf6179f81683fbc780f5":true,"fa1b9840ec7e289ab1a7bb72e64516a57582f1f451d95e969a03add61d69a393":false,"2ca9a6841b5976901ba626aebb7ebed0ecf62e39d4dc0b1e2e89393b5b77276b":true,"1dcbe4245a69bbd252903bd368d1bf2774c0997694414502c5b3fe5602a3ff14":false,"a3aa3d5b7d60bfd848f6f26c5a084bdaf22fea5eefdb4d7778ba6311a7816370":false,"09a500ff578adecad241c849b8041453b2a9ccf61467d00b2af4e5c0b9a9d1a7":true,"0f793daec01302d8e34ee4c82fd18cc85c75ebac95c01fa89904235601413804":false,"ad79cc5e74db575ab6cfab4b30bb547575ea47b85d08cd87dc0449f5a2327d9b":false,"823c55577429f17d3678b4cc0437310d5e4257c025a773989bd2f8db6de63159":true,"0eae10cf90065227ada36185ff1bcf14d663a1adca7917633832eac22d8cf035":false,"ee1d4640cc1dc9358cf8122e2cf76b9c240fc779f1aa7eab470522c7a4c3fd33":false,"5c639a8d25dc074ba5ffc40e46729a6e3867e38c7e0762f255c41d6dba775de0":false,"30798ab48a9447e13993755286e06f53ae7e94a7f987f3075aa01c9533964f7a":true,"b86926f40f0cecbda652ae2007cfea92306cb5bc46e494ed10af4f7a08755475":true,"1b88c35f0470eaefecd28a431c42513c757a95d9b345435ec6addabec7bfa28e":true,"a0f3cf1b8f224564e6ce3dc08451b10f2923e6700fc26f282ddc9051829f6a28":true,"ffd0469a71093a97263952177b5106961ec68d58c867e55168c23aa5d484e757":true,"d6951d818e4d50b69cee750480e87af55df4054c1ff24aa6c52712baa09dc77f":false,"d71cb294aa864d6099b110307e9bac5f35688fb1ea0c1906143d285558b20aed":true,"9e90b0e39d1741ab5d74ec36d7c339448e9283d00da7e3582d00c0415154d16d":true,"f4d01610fa8112db62fd1a9a501176349d080e6dcab31adecec37d0d5ecfaddd":true,"8cd61d81c11aed35fa7aa87f87ec0faaf240602058cf9fe1e2b0487aea861cd8":false,"7a0e465162b6debb13e69c70b7a98fe337bad2c5d9f42f33aa68afe91222b719":true,"2e81d3624232428f836225fdbdeffd796240005ab28536465354f9c8451d8263":false,"439773ef67181fba1d7ca8afe34c853c6aabdbf057ae1b6502a663f2080d5574":true,"4a87145be31ce93d0d2002604b0818503ebdf7ce31e037e1b5aa13bde4348be8":true,"fa95ee39b523c539b8f4e85d6207adf30e16b776e13a164b7504fce7abe618ff":true,"10fd5a6daeb55b0d641eefb5d8a03ced6ac30eae74dd9d2bf21a80a8a622acd4":false,"96aa94ce22c4a99f249f8dbe81fc65cb6fe527b82b2e4fb5dce7fdc6e1cb3ac7":true,"9b9a659fdfc5828f9c085c224f830444fe7f4d73e0c615b5b7a64318c1c96fc7":false,"59829d29a4a664786d7b362a5b797a57aa0e87861daf86920525d1a1315e8078":true,"a6e5d5115265b64bd30787827083b23cbf4b36940bdcb0f65f6551b001ed9451":false,"b2079444b4dd4b4e32d98aa660ebe608dda54732fbd827acff65767fb977ee76":true,"12481b98dbd828b1e41c9fc7130eab5fa55c9e7cdcdad2b9130518feb5f481ca":true,"bcef88795e3d2634b2be5356a67798e854213ab827d5451f78f7d1231a718020":true,"38095c7569924de34d80b13c8d44c742b682d6a586058e62ac128e00c6c11fa2":true,"3a5b0218d2055b0ef58a1b14682198953cff5f3864a5b55657822e18ee12eb41":true,"58644e0ee75ba8cb2f7bf9cb90917a9e5eb314515636a1cd8a6442e44848bffc":false,"5f7c53140532792ecfb63950c211850eee443c12a61926de7569704fe6d2611b":true,"b05c42e890cf64207912f59da52d8a441e5a951ebc805728af655126ab4dd4f3":true,"80ea3b8495e727d635cdd76227249e50ecb12407b4970e077cc7a1291cb6f77b":true,"00a7f4a81292d0f8f70f0aaa4b61ba10bb928ef2c63db63e15d3bcdcae53b5e0":true,"28193937106eb408c8b4c5b66169de59f7d1912e8ca7ab88d84b50858480961d":true,"cc3f23f282ec434927ac6b32bbad35ca9c7b5a222eb24f06cde402b684e4ca14":true,"e7007771e35e85ce1766a80eda7c71d0f6aa87dc34f548e3fd70fbfb36b4836b":true,"700fb6b09612dae14e8acec52ad579a05c795525028cb22c62d65c71cb55a8f7":true,"23214e3b99b2928aa3bb7af8d06c9487393e505610334bdc34b9c30b925c952f":true,"5856b3ce2dbceba48b91ed7320f0d26526ab7a4513ae91c4d10c99ad000811aa":true,"f3abba867429dd836910bc71914e738f17e57bb692b07a318697a8c5057a2cd0":true,"54e1c3aeff8bd3c9f3cd2cab9bb43dc7f96daae9e31d4facd945987b698db85b":true,"d560d1cdd4f7ef35359ce86b83598ca0d41ee319cb546133cc8a39412efbe762":true,"aa24e57e9d28d042b1f4213d80aa789e0e16984ade77781dc78b45e1f4461adb":true,"5fa5ef1cc3800c68d3ce1f9c1944f5f2a596f586ac227beeaf6c11e2eb8d411d":true,"73bd4adba51f550c2a8482d23ef9cd492c84a6ad624bbee81f52192fd06e87ea":true,"02b58db2541bd53a5322bc2bdea98db42034b3da208e6fe8b68ff22a441231c5":true,"c6f61bf0950ab9d89a22f1996814e3876cf30bee566f1cb770d9f416300b8f32":true,"d805db60e1a52eb2f3089783a2b6fcc5cbd63f82120d8a40b9bba2cb5497bc04":true,"cc424d127ed3a5a3fe76cab36d9fd4231668a77f80b7da5a35626d0e7ea8cafb":true,"427719ada9c41640bf8eefe290b5f2d4b16bc2a264517ca8f46403ed70ebceac":true,"e790a08a7de0a38fa76725d589ac3c57ab6f18facc58cd95dd62352ffa028958":true,"eb87bae2d5a90ee8d0e0e24902d5682398f07d04855966cd111840b1e8986fae":true,"e43a73c9b030bc33c277c964d151c79627c4b1047f1ad233a1809b0116d7063e":false,"db380d1347b1403648383a06ea8d1f34f946f4549b0a72c410cca90f7f6fc2cf":true,"2d5643815c1613de3cdcc7bc1c8bbc3920a6019f866c0b439dbb8c2dc1677d39":true,"c7e0adda6bcd00a8b65aa5a9f18ab6a412cfd1ebdbc1978f640a1ebe651c8b1d":true,"bff0b6041574399c343fed2da7bd73f8f850a3c2246dc305e4bf97fa58131f72":false,"2fa70867ee5191f475a8a1fe2599de1d4c91a78abbaa916b2db31c570ab9d3a2":true,"0f3475e5b5541d19c0daff13c239a140c4c9cf5b8a218d4b3d01a3b866d102e8":false,"7ec2beddbad697884d9d3dcb7417be2839b08b8f4eae09c7c4010f0f698cb3c1":true,"708d96f0177fa74a871251a7a0c23497bd0ea3e47ee98c49e6e75405eaa48768":true,"d4144881f58a425c3cffe93fd58e2b9961dd69f718fb205c967ea2af9a8bc0be":true,"e0b5bace6b5ff1498edab96535ae7349cc2be375a2683a4713bfa0980236fe58":true,"9abe8fcbc41ec729c570c9e03ac735f2613afe591cee746cd33237af52795f9f":true,"a35e579e3aaa23ecbba5aff69c928dcd5746eee8b9ac264c62efbf10b46b0863":true,"a6cddc75591a230bf9ea78558625259eee0075c16823414e780f80aa9e6d6564":true,"1699f3ad3b4723f7725149f0c267573fd39d877474105bf21b47a39770a57a16":true,"4cffadfcb44c9c4c213eb485fd4060e55318567b39019298c75b6bf928da5182":true,"1c4ef42ac1c1e14010c8c4bff0781ff806588520342be461d88ae24683da2d41":true,"320e3b610d0cb6de03d9a36087e8331a9ebe9fba83c237f866051a88e538904d":true,"45731f4e2667c63ece2a87609838552491badf458a54be027f4e07f5f2a37467":false,"35cfd3dd8952673c6f2d5e6ec75aa1937f116fd2abf3f4bf20a164eac84fb2e1":true,"ffcdbdc1e4762848e84995e2d9cf0d4be3c51f2d4e059e9ec8a687135f5bae23":true,"ba53bdb788e97bb4375fddb1550c8fadaf61e9b707fa010cad9fa4db5b2a683a":false,"6863648b6f56d91e4e2d5b8a05820ffe80af398f5abbe545e250fb00e8453a71":true,"7562de23c10923d7f96894b2018bfe2c87ae4ce846966e13af1824b31dc6eb97":true,"e0a51a4322cad46b812590bc512b177b6142f7cdb42d594566fb2e7138ab2b25":true,"88c3d94c9d87b1100e09a639920905fd9f1d2603a1acde2fc7c928c16c3be221":false,"0a8988e6797b4aed789a1f667b19b2589f23362f6f3d7ecf4013caf305c0c8b5":true,"4ff803b0339907e1de272fe68dc5509d8035b67d65f56cce949cf12074f3f5eb":true,"1fb9ac49f6d0851c9aa4051966091312e1cbc30817534a46140a63dfaa29789b":false,"2c9610dd3108d303a6250c439a5da3db245e052cb17a4a5af80229e4d21291a1":true,"85ab4a335b072f5f0bad4391f1b777e4b974116558b83d5b8182a78a7ef667ed":true,"48367f8e8d7669a7afff7a228d3c10e577c182407b109bf01cee9b261f3d145f":true,"24c3763f2fc0b4b8ff73e6f56be750e8a73c45e6198f5c2611ea5f3b652a37db":false,"14da93f1302867e030175d3d8ea0313e3531d6030d0489eda6616f1981580745":true,"aae0cdad841047e7dee4e73390fe37d79b3895fa5a90792e7c10fa59da4d2475":false,"8f56da9e624cf5c5985aff21001b0d457682544bdff991577b631c3f2999d50d":true,"635d6878c84445daf3cc9103f102c8fae8bcd99485dab2c21ca39aece2c45466":true,"60aed2a8ab82fadbd3886a12ee6fd323760aacaca019a664c6012124dfe0816a":true,"7b1d871c976171db2c438a75b2cf53ab2497d7660307b379a69999e2b3980138":true,"237356aa1911f81fdbd6bbc456681c14fa6ce419efbbb589bd6cace24218fd06":false,"c65833f1064ee19f7e85ff7aec2237ffcf7ad161d152126eb8e983305a8cd02b":true,"07b3835ebfa9b26697f2f82d52ee3d0ccbd148aabca76a50bb69afc6b665395d":true,"3508df21d0b262333b6ae1108e4324da05723b4a586c20ccf694ac6f08b8864c":true,"1a04ac0024456653c6c58101224832fb7f22ac385695e363350e47546523221a":true,"4cfa95a0e8a9017f087e88a28b0fe14485df1a9bfac572008dd735d2c65499fd":true,"227d6b72f4d2a4838d72e03be4425353b06b82e12939128c67c917084fd7b983":true,"f89d7eaaf754d5304e301e52b0ecb42ad9bfb39fecd01f83bfd691968a6ebc6e":false,"ace5ab2852674af1ecf5b60a29ccf85ecd4a058462cd63c57c02025b5f904021":false,"63b8f1921723e96b6fa22e1deaf0f53c93899ac21978bad01f4f281cc4d3edca":true,"ce30716ff4acb8c9be8c5bfb9090854dac6b87fecc93847e5270035a69161f17":false,"577a6e879338e531a0af2c5e22b8e5ae71e91cc1acb16146c6e37d9c2ea164bc":false,"b25ec8998b34cc86aabf0a5bb6f30e0b79ea99d8bc585ee43d710f2208804e84":false,"331c1a11806773546194e1a1c0051981b9fd299185153bd5397bd938d0dcf923":true,"202bbd288a1d785a6b8a7ed12e5f114548f0d6973adeb88511ae2dfd307e502c":true,"52df1a18cecf653167c9f716e878e41090db367dc752add4db9a63ae4db79175":true,"6fbb6b4771ad6853ae7f72ca6fa6544b1983ef4349a7d9738b2c0ad383f1d9a3":false,"ff6ff5ddf89dda184900df4264977ce701c57b38b84a9aa5e1393b26c9811980":false,"81d26d5122868e55e138a1eace6e8f5827c0814189ffa8f0fb2b888e2dfeff71":true,"e6334f386a6d12923c0948de3b958ecc3cd7d0f29e6420bd63b401a16ec69182":false,"3f805aaae4cf2cdd32db38cf0226ceb8e11fe71caed2f9e797fd055cc0033c2f":true,"3369cdaf99250873fca115b0626adeefce7a27bf28f213af2cc9b46dbd79f9d9":true,"7da10403cc2d29223c4ac720aae6e63d0a4f9497200083398a1826f578434f4f":true,"88a58c7db161b9083d2b3e4ef44a2e894121def672ba86ccee49a9f3c9682bcf":true,"4844d219aa86a720aeec95799aa4fb4aeaba04117524ecf34769d33e53ea491c":true,"a1f7995d914fe635da74f2b4df1e9a29ae3f2e14600f31cdaa2b7b67a56db4c1":true,"7c7cfe61514b0f04e1df794e4cd42c6fb6f0b560ad318f614d4cab2dd40db4f5":false,"64b133e7da0485463d758384dc604906b74400e55300713fd67919816e44cf12":true,"1e1e7418585c62bdf86b9dc0a0c5cf4188cfc909fb0b4ed5694d6be989b3ea30":true,"4b3c5d6092e6cad0e7d2d3f9e97cc520072791d90e0b8ef6e534b11aa2c1501d":true,"6002230a98bd2e5f74870f0c4216053f806e92365c8c225e515403c77740bb5c":true,"54494ffc8561f013f031a058fb90497dedbc2705eabfca39853f19fbe35c6af9":true,"06f9af84364b8d837f3168632b2b9805e14fa96af69ea87c1cc0075a4864080b":false,"b0891a55a1f36269397264b550e1885163f49fcfa34a2ac1fa1f49058b80c9c0":false,"1af401f63adc8d259afe084b48e63b16de4f105c920aff373342f340b3b8b39b":true,"3b12f9762b8b4f7be0d45da2386b0aed35c51f60a6cca6328abae582d0c6fb6a":false,"cb8641aaf2ab787084ccd57ec72b8fc902f8a62f91ccb7c957c0946261aea3c7":true,"6c836269958d91b6702af860453bd96e6424b161539bb0fb6241fd8717e3e56a":true,"a4f4c5d9b80c3804ca1484d51d1647784b55325c1d34f3fe59ec32121d296ef9":true,"bcc7314cd1a27da546a8781c2cf0cbd65ba2a08fa07266940bce21e30978b719":false,"01ac35cfa4c163fd87dd345a5ce190f7938611b1c0dc40ded7a0d151bd072e7c":true,"06ab79f1209a131adab106961df27fd7f97b7ff38fb9988551c3d7cdd7fcbd99":true,"d4701f79c6800c27ef56c79dd645c9232b795f615321da7d3f252843268ec3b9":true,"f92280dddf26196f11b40afc8f324417293ea80389f313e349597963a8997930":true,"d5ae99e50026e3dfa6afe4d9f96aad85f59e3c8cb1ed83aab4b1cb01b9b80b7a":true,"52398e3fdc54a2dd2ed7ede9113c9cd7a13976e0bcefd318644ca9404fb7ee8b":true,"6d36f74a7ace1a1be02aca05fb51bc4ede032d8d1680100a16fe422a47a83165":true,"b46f01f1d27ef9e8218e1e4e141d55bf9ec4242f841c2852969e4ebb21ff6635":true,"8e80f5ede122f751c19e74eb6eda4f07814de13ded1e694da54ff3690a455064":true,"a16991a006714498a956dec2478da100fc038436b2e32a155c819c475662cc04":true,"fee05648d8a09e9faff8068b8dbda36fd6def86480b5c506f9543f48e88deeec":true,"35d06e508e4f9187167a0c69b33218f9a26f1d2c2c42781253880046b23a98ae":false,"cd85f31a281f320769657e74722677e300ab3237258d663dc42624e70685cb35":false,"7b6bb6a46a19b75dc8a6ca488f6442622498a7b34991966fb2b7ec0f4bd060d7":true,"3b95d3b336784407e9d3ca97af0430052341181380c2787a24dc2c02a372e13b":true,"794f0c23037ab3517836ee0b0eab14fc346c3b62b5eedc1bae9b9bb34d09ea1d":false,"1ba778e8ba29f072247c3216e3419f1c303ac74ff3b91cba2f51b1a679401a0d":true,"56de3c7050d3f250b07e2d991cdbe0855c3467fb70db034edc5ecf09d8e25aa9":false,"fa28c5a76533be1ef0de6c5811b8367a7f5d770a11a51afa3181529fc07c4b5e":false,"0d6302e747bc663f9a94dce3c1a71e4eb3b0aff94720b11da2128be22b7a1de6":false,"e342621675a08cdc0f8104cfe9d3090c8af6e911a063e91f27ddb47b6365db97":true,"2ad676fafae53ffb2d582e52ac5912bb9f63dd27eadc826b549a985f0cf02949":true,"d94626a08c9ee9bdf4a15aa12b53d43f4447b752a3d321b8d9b0c9077ee38208":true,"a49bae081dd9525c8c52d2e6c1ff570735154d7921fcd20a20e7e82bfc36cdda":true,"2420563808aaa0602d4db52d5c83984185f1cfe2fc6def991f705d6846b041f1":true,"e358b048c82ecf7b37e0dcfd9427a0399a574d3324b1accf29fa58e4430108d5":false,"3b6636c1f583bd0b7f18721f6e8fb9b05df2f3e85bde3b727fbaac8d392fcd7c":false,"144ec58c71a370e4fa3d224c47929e5d3d6510cf28763675af0915bbbe503bde":true,"df353885b893240c508cd3cf14190f6f1f2ee035eade0ccf76f09ceceb566bed":true,"849351c532aa7d1e3128f8f6db3aa84ef9320eb73d8d4d0097cac2f1382dca83":false,"890ed8a4c10d7e6356c14b2d50fb6ae0fc4f2092c0fc850b248c76dd41671d73":false,"275a9ec1c8ee0ccc2a15b36ebf926ef2edf98b8518ba358c6d4c2225f7cdf78a":true,"1d89123967b7787888baeea9f4d64fe489740a15750689db452daecfb16744cf":false,"e126f74c036084b5da1dad8092a1d493dd983e50f906524a722765bfacf326a5":true,"dbfd25df567b09c62a3435222f3c0abe157d56c5f7fc20bca82643472d41b8ce":true,"7e8cf8aa4441b3f97a472eb02f58e00a2d0f08c5cc9a9976c86b7534bd24a723":true,"8b59eab615cdd0af76284e3735329709a62a17780a19cea483d9de9ed1b66f7f":false,"201e5329d0c65042ff96950cec271c71b7d80f8b99d465391f1eb7d312fc060c":true,"42b79dd7f3cfcc55286b534e23275c5e5dd8ef616e6c8037118c8d590d737d32":false,"6a62496e4de93e2e3d15fbc46ef95c5f5e73455d37f084e924150b05007ca414":false,"62e54050484f59bda5133af8e85c8a20d269928b9dde640e31703aad85174f35":false,"69da07b4454b8ca5cb40863f3e3efec83c45ef4689b4b2486aea8cdab2497877":true,"8a200a377ed2a04e19bf084f52a5ede2f988242f588b59f6f50e7fc3728e7983":true,"e43472a80569c00f00a6d5da996dc4624af10b7b482eeabf5721a287e431faf4":true,"dfd645e8dd96827312797b14f2971d8dde45879df1675df40acab019fc046d83":false,"6cc0aa995c4d8b8d72cda0276d738594e07861189ed984c6acf1c908cb07f4ee":true,"124eb33f846ad06508d6721f0b9cec1249f349b0566d0329816731b577ef6453":true,"90efdae0b283e88e96ee0822b7611fc2dbe40687845d4c92c39d372fccf0043b":true,"ed8c86cafefe5c02c87ca2d7c103d7fd7cb902b6a021c8270194ad736ddcfad2":true,"b90bd276d2cbf2c610e81f0c976a711c3f8e8c0fbf48e8251e72307f0a777dd5":true,"3a2ea4030ebdd4c69f5c17cf38f3bceed6b745462f6b6ee923eeea17d4c87c18":true,"b2fd090f59981887b99df9722ed9102c4944af4b9cca335257f5fdc83784d259":false,"ec69697786a74400dfacacd608e17fc1ec8aa9a3e2b92dcdd9476ca586fcbf9d":true,"fd9867c2e525dbf5f7b0e322772064ddf145907156e10ba395c592f628ef4758":false,"8e1db810f3310b1a5129ad18887e9bc0af566f15b77a9b09b260cedc9d554318":false,"47418c2e34261a90fdedacfbb72cda5a1b358c0a9472bb8ae97abeccfd874edb":false,"34a47827ef6362987ed747a0d2fad0f07419e253748923d3ece63ad0c47f03f3":false,"d10292887031af7ae2d54e67a999b1aec99283b070e7680a3a758bd0045dba1a":false,"3969105f27fc28e7e824ae38b5ae99be4d761e4e5f0050737bb6675cc5206c4d":true,"58228cd630fe17c7010dd849add3a97e66b16dafb2da9df3fd8163c3b8a87baa":true,"8abd3a093eadbd7b9b255c6a1073c44e3ee548b7a0202f6ec39c0f434e79105c":true,"a3ca1a596dc574b2a8b78b896b90c592f7e6a015a496d84281223535935e1f81":false,"a9e86dc4e31003f93d7c5f2593f9d9e5cae09ed2f45fbe93856b50f6efbd4d32":false,"39ce6b94e06597a51c6ec39adc76914497fe37baf92034b41f703a826e3c222a":true,"fcc0163a145fd439463da1296a3bed73bc1c93cee50ebe4edbc6162053be5f79":true,"d384b0ed3295d1ca7915b952a704f353c4e3369adb94cad880128a4eba7b285f":true,"7bdc307d6b3aed70f8c7b7ca5919de675b1010c50210b2505c6dfb42e540eef2":true,"d8baad5446b0f3b1501204d97d43aaf8ac18705be2c30924202ac4a3ea02737c":true,"a823b1c2e621a30f6da08bd881a6e52c90cad8310f489fa0e9e25f7bd4031cf6":true,"dbab4c6d89df0534b7b07dcbe0df7d2e56072174026634436dc6fa7dc411c273":false,"f12b4c6c921d5f2cdd7c077d062241b568be1e17bdecf29ddc4868190082d43f":false,"99e653cd33118f6b6c27802e4d3fc74b0fd8e28c3305ee95d6c6bb6c99471d28":true,"738b0c2025900cc332b39eb1d44dcd82b3d1b3afed990a558e27254405afdb60":true,"dd7f1854929650bd60c49efc2089e1e0c151f529c14a1784b92399c2b2e5b14e":false,"295ef824c7760ecb9fc49701e3f1e19350dedfce9ac490620348de4ec72ca004":true,"1030af7ae4fd3475af1a151815deec50bf8e6e95c56c277855d09ed16a9655ea":true,"e3cedbc7b6a75e37a2c566c7f1fe139f80d9e9e18b7741467960b2c27e8b2289":true,"72e3345e63d6070a265bef880ca4950c8631c90f0a887d53c4773c1c436be0f0":true,"be6321f22ffa3b8cbc179a2d848f63dbee87c9cd586b64d7e11f2dfae4ca9fd4":true,"d4815670dada874bef68844e66836373e4b5fd36909c161f706f45e75c022d19":true,"fba8d209266a1a1c18811396667905c84c1ec88d0963939dbb71d945c9e26909":true,"5899bdcc79a85289866fafe2ed2575e11f15c0aed141daab49fff50ebc3a2a15":true,"d8ba5971ba301df00eba1b7c740dd03632e50a7126dbd49d97f65b0b70e7d11a":true,"1eb02ee774f167298cf9ea23b4246052a57e3487ed1809690d0a7f3c6d304b7d":true,"c5aa894ae430da241d2ee054540eb47fe4f948510bdf23799b9f732e1be48cd4":false,"26ba5449e589e6417f94fd9da805bed8f287e345ac8404b6f5bc21fcba39451e":true,"7097048793dd15034def48380bf1ee6b46c67b7cf6e225770fa31293a03b0fbc":true,"e1dcb5ecb8275cf086837bce86f92a277c6bdefa500078a6c9a5a122f4142d6e":true,"22d1a0a2edd4ce9a7af203796b1f723179c10d57a9698a71ec67335df9f95c92":false,"9e6945ff0b931208e73063babb0a1bc8d246a03025a2965936316fbe4543e628":true,"c55ce85b0cc6150faaf9fd8d7570eabf468b84bed52f64e19a95a09e7adcd325":false,"e427369790c0dba88d29878baa03ae92e5dbf310bf08b0325bfc0324a36332cb":false,"8be13dffa3e92ebe1f56e1bd0bf29212a05012d536181d8df31545b83698080e":true,"1445e1c8782ee534e414362d76a407d09d0ab4776bac0f4a04d5a90079b08cc7":true,"7057e722083386652d2c25ea9c8f63eea247f42943bd2abdd7804b8ee76b05c5":true,"bcfff8c8025d5bc0e304420cd741e8248f023bcc4304bc8ce58fea699fb6faf8":true,"ae81efe6e5a11084e9ca6691298706f54f1155df057bddf28eff57d4c316276c":true,"2a98d083b3c4b173e16a90d75cabfaef6981337f462e3e0848902667ff68cd37":false,"0c2685ede5d518b892e7073c4011e243160060d0f837233a168c77f6321c1a0e":true,"452c176bb1401dcc566bdaf65b246867aed92d5abec0d4a621031ec028ba78f8":false,"b45a85f44e89fd8e4191c4798e7805c124966a60bc77b1c535fdb10bdca8fec0":false,"49c0ac6620076a711750e14be80b5a72eddcd06624b5a4b35c6705d4b3b997a4":true,"171b882559c4adbb8cfcf1a83e9a9af8e4eeeaea16058beceb4ef451a71ca865":true,"2264ca8b7bd00b675a8c1f68556f68481791ff2449ffb7b7b2951fc3ebb65e5d":false,"d532d0c412ac8cab71a0daab17f0e049799dcdeec2ee9127a5613cf88da00b32":false,"1505ab88d36eb468b46ebd3c3fabd79a8fabfe5863b77a109f9aa31312e003ea":false,"a81ce9f15405c2ebbfb1e581f7b99000b4e16d1b5967b62744d9ad2bb0798b25":true,"de81100b94fbcc17aec66d87ac7afe110eb77d68f0b277a799b083bff70d133d":false,"b3daeef5ad141848e08cd07be2974488e24e1244d4ddaa15dd42cce2d57ce8a0":true,"6de8de89e3513eef5ceac31b3f97b30bc123a9d3fb5ed06112b5dd3ba8d9fc8a":true,"c0bd4b793e62c76f1a8e1f53db3a8dba103bcc1cd2826219f73786d3e7208b70":true,"735a4835a926063e9c0f1d30b35e4f279321a87797631354deffe069306ed196":true,"3d82d3b6d8a010c6ad131e5e39332ddc5b67dec7154e3001d519479ad76b82bc":true,"739652ccda619b299244cae570db4d1e7cae182c517c2d954d9b6d0553779ad5":true,"ce8ee32decae0140361676cc285faaca017d84d2cbb753f1288e831571ad5e74":true,"460b7d7aa90ea5dbda206a8e277c4ef5c24c650331104f2e616e823567c7543b":true,"d9ea897b49da108b7ba0c649c513c5d02db86814f8106506ecb2a1a51b57a201":true,"dd77da31844e2a8c0a4a0ba982855f0a5d6672101a5e970cd4cc70289f0074e8":true,"32877818656d77ffc4d6d9e3677d5c8493a77760c288321bba6031a495e5b021":false,"961f59467acad83822ff8acf89600c1d8b95b4500cc268cff471217c5a456f0e":true,"81359b3a9e5503fac73d0bc1249a5ace3d1d708678b6c55db0842d494029f0b8":true,"a4783e73f11e2f661b35416fbc0f9964d89eb0e55e89816c02872efb8caeb631":false,"f508a0e0483ae6f1acea10167a592c537a8a104c3c12361436b26fa0218993c3":true,"3f0d6b5d0f5977e35e879f0dbff6100b42bc5975acd882b30626efd440703293":true,"4c361f8b46c8e0367c14a9176bcd8d7865e2dc42253617cc6bf2c1f2604ec1cd":true,"a244296a2ca9d8d1ad180653e1418cd1ace7f5e1de1088371fae4b7a87417f28":true,"df0548acb0a682d6011b495d38a811f4cf0be2b16776723dcc4e1fe770b5965c":true,"52b49ef856f71594d322c5d5f8ca4bb8076759ea7fc17e93d7ed35f773e229ff":false,"bd53f84de3a77ccf7fc4daf919e0d4c80d652c53fd6befd465f3a0f90ee63844":true,"a9562c0b25586ec879d0d265f0a474fe583dbfef31c7397a2a72dc6b2815ed7c":false,"caa40bc13924220bbec12855e507d989b415eab66355df46c02a0841ee3a6871":false,"9a68b2f8d836a12485bad7542049b65d7fbc4f929b88e2b3743b8928fa85361f":true,"9f03afff7871dc2f61703279b1d2b6c7e0efe73f99d54d69c89c51e64e6037c3":true,"3aba4b986200c0a6347b3612091b0271e7df4056317f281b26fa82a5127e0a69":true,"c102833f4083672876833267e87e78a1a89070fb7004d151556864b7f1122fce":false,"1f7997ddd90d3e8ba7a05d599ae665586c0c2ef4bb9f14dbd655b7442e34531d":true,"a02dff1e0d2f773f4fd733a3af253cb867c8889c5e55786ff57d9c22c3a66214":true,"e80fe5c3a54241ef79bc400be9ffa89a52861b053b7bf2e2ac281730e50dc896":false,"34d07a07e80e4ee5fade3d83ee31b34ea6a97f1230b500893c55fa03492cfc2c":true,"7d6f0817688fce47d2afb52a989aebdcee53f1df87c4a7970bb9c0bc7b3aa97a":true,"d86b6f8e98c610ac3e0d4ff311d7606730fef8a32463702be1aa264c95e47830":true,"97dc21a8a11e15200ad078051792f65c233215cbf526f9a4857fbbfc2c4b6a7d":true,"5da407632f43c2a24bb9be9cc01a20dd7ad877dd56367078056742554dc4c889":true,"a9667bf1bd8fcb4eb31b294e5be90ca9d3be6c5013fc9f190d3e2c32c0bb109b":true,"2aeb4dae5b8d943cc284906457eb869fc195456e57f1aa5eb4560d784edc7e2b":false,"40ccf5bf2800cf65d0333b7e912d5f5ad13475f37039bc69dba8845884086b13":true,"c78e4bad044c0c3a3b4b255d34565b99ac46929c825cd519563b045dc85c4e57":true,"1c310b5bb61ebb018b9b51dae6765f1d454bc5b1396d29dc2eda485853dc8f21":true,"db5f9052254a6a6d3add628cc9949aa2ef6e63346863a9af3f22ba6277cb7ccc":true,"950307ea24a390f2f0a799b411e8f8e7fafcddc5ed48f431b23b0b42231ee0c1":true,"8c322ad85bff7b07abc41545d83bc7a4450c8885559ad45164db41a2ba5db416":true,"bd788317a7a5c01953be9eebb55f67a810a2fb5c1257773534c62310f166e5d6":true,"3a644e58fe164bca9e8a88dfb4844fdceed23fca9998606715a25d3193f33a5e":false,"5e39e8eb7de261a6551e65d06ac53d7b61455dee9b6636b405bb4dd63482f05c":false,"3478035412177d626db6f526d106b38f04f71c04ff8cfb6b5cbedb28dc2cb160":true,"ad72aa30129de0776b7c8a4c679828809bcb612089c2aba75a73ba77f16ba4a5":true,"8497d1052735541f60fb7887bb3fad4d30cfba9034a15f0c0c73072ebb689831":true,"223217b9fa035ee0e3f7a8236517a87b0c04c6fee451a70a19d2c9bd95b6994d":true,"5d30f2839819f01b3094f47d65622d6639c809032034b17d4ce12531e8c76966":true,"d816b1e2c66ab5ee222dab25cd4aa23c11d83c58046ce03add03ae169ab27925":false,"45293b99a070fd3662f7d35fc6e243482c2098b9b1c0cc0487eece27f975e5a7":true,"97d61d45d78adff155226938ae6fa62d28231660fd061b5eb380e682a9eda993":true,"f70e65551f606949d6f75e2cdfbac9a09baf36d3afe0d693e7b8db2323f40803":true,"ace11b415ddd80104e374c58c719671cd23dd3f3cf67046056ab6d7024a3d4eb":true,"5124f99e574f3343ef9258651af444f77a67ae1041bf59e879f4dabc3b97895f":true,"d4adfd1a3b3ca782069f618cabcaf2d83419e2c5529d35efc2a6d89a29cc365e":true,"a7ec52392432ffbef97626782101a900c67cd6627a4cc40c546e45b51cd38551":true,"6803aae22d7aac0fe3418e6b59b85483e72506cc88216f2247c50c56212cd78d":true,"fee61ccf27c289deb43f82d6c916266bb16c478167e6abbf156c463c023ecdb6":true,"fadd27268277e9a30bb7f335afc0950f5241eb9952c15764534e14ac05a911c8":true,"347e0cfbb0adfd7173a5f48f65eb0e50ba55940aa65f12fe066750779ecc8a9a":true,"4fe44bccf806276b1d1c2ed2713968e5019347616e54a583c795c4e566226ade":false,"a6111fecbfb6a79d6a01c176da9a39f63599352d975d54a78d1d7808276662a1":true,"15a72b638221941626b69b852433eab0b497bf894d0061ce7ed9b922228daeff":true,"bc92b692b2f60a97ccfe04b85c4ee11bbd0d37c6ced95ad595ac86deccd08b0a":true,"54f7dd74c1e593edf5845925f69f23103744938873c042c90d81eddf22868ab4":true,"84d776cab5d864223f739ac94566d7453c02772314cc9ad5d03d22e6553b534f":true,"bd8bb66c200cee6c8c3e365018a6093573bc824b33b609103ed2a596b400dada":false,"ede1d7ab755b860afd04d805489a7e841744f845db634bd61c88f7f8c29cfe99":true,"4b3c5c395f9abb2e7c101a3b5af30a8e8dbef70f1835c45ccee6b55395456026":false,"703610d3eb1e40c24a78d1a827cadc0cfcb02bccdd7a1709042670c9978a3675":false,"8e4a18d94cdf27849ef12f6b7d68caaa2d41687d4c8b4bfa1ac92359dfbaf67f":true,"0b8015e8e8174817c459a48f4015975cdce4e50d2ed24d94e8927510a8372bb1":true,"27dcff1267ed0c726131d27ea62d5ed32bd3ada29c5c9c641a0908bf5be93e3d":false,"826a47a3b3f529e763fedb6e9505cf02b5be9219844a11daa4d96c8796a8e827":true,"0f01375ae77783206507458e2f5840e0c0d534c518bc486d70038f712052ff6b":true,"ba3008f666ea784cc81505593277181f589635576c4a73f9851d32e6648c4754":true,"c808a7d3db14c747377e97e700647ed8c91f66093bba705aa24c390580124eeb":false,"c8ddd89e5fd387da7987e49b770a49f7abdec327e57b91ca0b6cd424f8b50c60":true,"f405c1c4f2ce6c9c10c819f7d703299cf850663a6791df0defbfd2b27da3c01f":true,"a1a1d0900d70adc1636b6bfe5b596b961cca2e463d9eac72853236b6c9d42ea8":true,"19745f835a3c3b2e33dc7c856dde9150fc93826aa14398a927fe1f6e09c94dd2":false,"fd191b96d021451c0a43c32a03f7d953833ca76ebff5d641feb21a35c1aa5641":false,"da2fa35213094aa974a55a3d939f9a8ecc90d359c150e5cf26c81fbc175ae545":true,"dddf265d67a04256e122d9c67b5662d94f88d5e9f5f15e2d534c71b4252cc7aa":true,"25f835cc9288a07922abe2aa6849e6df6b15d8e0a8b1e3ebcab1869f3cbb0d11":true,"f6800ad8f2ac6b106286f2f13b48bb1270faa79c355d62fccfd726966ea53c25":false,"19648bc32c5e7014d690caf78a53e86639e448a26acd459dcb52817cd98a8092":true,"959cb8a72e41cfd6a3bb7ae76b3b78e295f511aa9b1260c231d875cce4b86273":false,"2c7c9f743eaeb6b143bbbe278b31d8c748836c511b6f94c9d8e71deb5afe0939":true,"0e1cdff0223a7432e4063e2c73497a1c250b67bb12e2bf1f18fd880762a31fa6":false,"0a4223f8e3fbaab5896b4a36340e7a7b2d98d4ee986755d29e3cde61b1930ebc":true,"82fe470dcdac4932cf212edfd31d3e0f339aa3b361d2ebac6674640bd64004f8":true,"da29fe835107d2a348700298e7bc44a7101eae754a4696cfb30fb6f61dcb3d0c":true,"f6e7c45781c1add8ceaafaab80f475906a2df30b020cd63c5f68b02c21e04025":true,"04225a1e04e34c1c63db3590a5feb4f259244446567301409b22c2cff4d0349d":true,"7a2549d5de4b7d943f9a535e4ba252df97069a6e2032ee727016148cb77eba43":true,"64fa5fc3a64e8a1a563745642eece3bf1c1ce3182f11775b9c013153e8ac4200":true,"ab6af208edabba89abab7554b399e2f8ff5a626be319a0bad8e7b45d8a51b50b":true,"8741f1d4a4648c59470d78276ea36e5afaca0b5a43a791307f80e81f270d9d7d":false,"edd34e5afe9cae61c4a5499ba99cd18febfcf1bb62cead049b8687532ebe3bd0":false,"cb00c1d33a5a6d6a1c7844d8ae4e9ca24a1490378549b8e73cb399c320e5310e":false,"b8a8e3c23e697ddfc3ef57cf812d8765a3c87b49beefa325f36ccb4374b5a426":true,"351fc348fdcb12069356ffee0806bc293967f205b6a42be3dc4c1e34b1e8f898":true,"129a24c266d60484026c94f321597742646c42a5d8a5e5b7c284c7d663ebccf4":false,"f0c18dffe6158787e9512acf841c18fd5f1e84448ff63a0d5c5a80ec7094fdfa":true,"dfb55e3c44ea2e907e9041c0f4c5e6cee52c1b1ec28738b4b40ec34ef96d7a09":true,"1b50e9b042177276e1d7b3d1c38ffe1dab7af8aadd0f1a42c5996e97e08a0398":true,"7712b49aa8b6bac47c371d6fe1abe2eb81cf20d2c81f004fe5e8dc4fc2d18408":true,"9ceb8721b0a591ccd0799270a6a5da87b41ca480d2a3dc7695fe1271281ab585":true,"a5467114f9f7cdb4babcb4dae25d714c0752e750c3127a084d186bba0994774f":false,"c93b0c46f9f48ab620a2a05ee2988926776a5976861df08079aafbae68c37320":true,"bc635ecb6bcddcc845ef6ab6b3db2eead45b7ac99c3f2063559f9e0e88376814":true,"8e600d93c538408daf6f1a9148bd55b941b909029d8bf1420235b9b059f516f3":true,"f9ca9d3654e4c001211821a80a6d6d71edb6d15ee9d885f2bef93255e9297d88":true,"3dc0f1c4c6a8ddd6640678d8addaaa702010051f96e284759ea07ca2fccd01ce":true,"06bf4621b8c4a48fd700fb009e823c9fc8304a34bb0aacc15b19ced1d0657bd8":false,"2be92b542a827f3fd9b5fb785602e862bc1aaa63977518df5d45dd393e91f046":true,"24ed1440f40ee6c1795491de24f994e1ddb28fe2dbb6b3060a0cac463c5602f5":false,"9b036f48f784635b8b2f25ca0b870749e3a20ccc75f2c1847cef2e856ec46b35":true,"9962e61af1115181abe7babd331a930a646d5fbc8db36a8da274c883416b3f28":true,"5312f63a621d69241cc2134114e0263ac60c4a874b83672ce18e0a8ac5c252d0":false,"fd80423e030062eec0341abcd49155c0ad2e9bbfaa6f36166e63fcb40c9b37b1":true,"4ad4c864da6414897a059d08e90ab0684041b5853f9ae37c3bfc6b835fa2df8f":true,"3c6214d200958b6afa351b2a6686eee329f711e36fa66d8765e00dc670846e52":true,"ee2df5e9f51fdf601e52d2b54c19bf8176b23895b5c8fcfded5cdc4d405ea8e3":false,"915575aa53ec4d826bcd5a28fa94f4ece9525615a8a9ecc6c001330245eafb14":true,"1bb386113405624957b84fb7e3e71e7c5c34eef639bc10039252d43ff9f61ae0":true,"9c4f1f7ff7548e83f52f0339dd69b3ad91f54a6c7411bc08d44e0e6228b1fe2b":true,"2aaa170b5393f7c053a028dd11efd6413281c27be663e7b94c92cb91e2df6ffb":true,"498bf843671bb6071f7a0d5a5f217691fa7cdfb09dbe551c008d8f19c27c09f6":false,"a7d14d61645fef7e4677b5fc747422613cc458bc5ed0185f255193bf706f569d":true,"7715764ce7fa844e0ae31eb5edee907a4e8650632db9ab560bc08cb62da70f94":true,"6af541eead7497ffa36022bdb885e0384879fffe66acec8c6697d767aa1cc128":false,"a7c13ec8c99ac8816bf2f1e59fac4f1c0cd2f7a159997c1f09086efe68818caf":true,"5644e6e7001d8687d223a21cab038914bb9669a06068623ed69fc18ff805ca9d":true,"15382ba1cc577c9490ea13096011d62ee4374a2f3fc9cb2e8142094707799caf":true,"b803b3d8b405f95f660e984a54c528e23d6c2dc46f8746919cf33d190fbb9113":true,"fd66f05749148003c0cb0a9916cf8f27dbcb9bd9b71038784a3eea2df86f712e":true,"bd13d9313f362e86a10dd7edf30d87b0e79b26187eca8b6ca32c58a57319ed7c":true,"dac3c5a8af91045833a2c76c5a6842d805ac58802d2df21164201a695209447f":true,"d870addf5c2ca6a56b3179e8539a3904d21f10a6c297fab8dcf6b108795e3944":true,"3f1f341d384fd4ad83fbebc64582a6c4ad9a2b6eaa40c74a8f4b05f58a7fcef4":true,"e17b1df115eb8d830afb2b57153ab1d91457692eb0414460fbf9f2f59199c8df":false,"21b5ebe58852b2b8b2c41475e834a0681af64f2ca573d00c1d0340afe6e623b7":true,"6dcd80ef482905a057270ed41371a8ac8db83365bb16b33ecd71cdea6002670c":true,"819a35abd9d1bfcbab3fb8a7afff68568f3efb6e68d2a6b19e7309a867bca539":true,"25f47a115758ed772cba71f14e9ea12478685bb1df2df71e79727204e3b1a040":true,"2986e580aad71d78a2f4cd3430c346c555ba890c7b9ec137fe8ff89816569237":true,"591ecb0adee26b0d675fe596aa889bcb60b6a9aff9a041d158a1e8147168a1b5":true,"0c8cb24f794e1c68dff5f487326b6befa928e8de67bb9173879f1a4c5c1c9ad4":true,"7b93c13cf25ed9d1a4893d2f585f3c7f87c5d71bd33c9bb81ea5260e0081865f":true,"7adfb4928411cfe74643c6b77ed1e49193dcb969b1d902bc84ad2f0d567d74af":false,"5840e7ae5d1e2a57be43236b55fb45657886e1e48892627d803a6dbb7ae803a3":false,"105beb8118772c77ab7a6f9178e9d66771ad57d095fec510ea66e5816fe602f5":true,"decaa26fc81c12b1523f1f86057939abd3744d15be51b01288023dfc6e752333":false,"d39298252f03f70c94cfd87473b8750a065d65ea30b8982e1def2e96c1435ef1":true,"4f8bd68a0f9b47a0313de77e6aa73dd6bdefc8ae58262f7730b9d63171312799":true,"2a39fc9d7ad4e5055926200dfed4406327a32760b70bcc02f939463116affc8a":true,"02d75677eb9c4a2c10fbd964293244dc6cdf56fb3a80d5e08975c5b9fcb55376":true,"4c7bd26f0c08c0fc5aac2015ef3c3d35ed65d765506b8fe28540923811f157b0":false,"bc359398950001084a4b26b15010a5edc0b778abc4b901c0a115ba1d3d740c59":true,"1621ebe5b6ccf4ab3927bbdd274195b6575067972959640031c0878ecef2eb10":true,"67de0e86eb34f54f65176231c8e3aa4ed97e6f3b35bd916edbc238d88ceb74ee":false,"07abb62fd82baea4b6e292bf55cbac44c328a7aa5115bf7312681bd84dbdc66d":true,"35930c02b79e61b5770bcdcc841843d322be8207174ad59235b58c5227e744b5":false,"87bd3d63f93261513a7ff04fbecd59f24810f5c8517bb4ce51bf92cc5daa120f":false,"25c4c4773345db500ae3738e23b9e2ed48fe51754f07680906e42dd82181283f":true,"f01b053612b9dc24dbab20cf7944b0937391012f50675077649130538c074aad":false,"e9c33ab044f2678b268faf212e04af706befe04feb5461de7f742eee2ffbb0a3":true,"6ab1cb4bdbaecba9b363cdd662acafd4bb1d3de4cf8e76161be20da857d9c29f":true,"1269b7053eee4479122645a41175072ff9e64f33b1423eaf163018a7af35eeba":true,"7e30f458cd1b85613ad0d56ec72cf2744c5695106c326604c2d066fee0762f6c":true,"0c7f10ff3857c39b651cb98b52a67b6ee7a0edc34653997cccc3f63e72254255":false,"28b3a5eda382de71b6e0b06abf478d04512262b67a81ae60e1593a3b9e7d641c":true,"78d9ad7dd0e29806824d0ef99c698028cc277d21d448445f237a693ab01442c8":true,"b682bbcd6deaabbf90c280458b1795cd88c77bd5c932d133e3a6d23460696af9":false,"81417830fa27e5c6ac6caab6d444aa765dd9d3e57779339220d8957b636e4ade":true,"b9ef265f0ee7a43d8d6001a75d5c04d78c9b457fb833a682802ab2030a71e6ba":true,"dbf5ab634fe41ee445e0dba22b5ac3fae11c83db15653993a989cba25c988b68":true,"65a1450fde8e03db17a0140c0322207c7a073b301e0a576f8dca3ea40a34b7db":true,"ff8a3f739e16c293fccea8ecbc9458f8a2864b4c1f8cb6636daa2c5ca0cd0565":false,"ecaf0d60f667ecf4552da7d91e96d536b6a73515a925ff1839a561694f25b13d":true,"d9f34dee484805d085af2031ca78cbeb6b52fc98d95bf12e39a3cae14120f961":true,"fb655144d267b84b5dd3c951d4c9e360a1545f7984381912fb007625f1c8a7f6":true,"fac3430f2db10bc476f781161f37caf7426596f10997031416744b837faf07ef":true,"db62ec70281004184f63d0e3b2d182197c0f4727d50eee6ee5879bcfb53fb298":true,"f1c0607f8ea7b2df3e9dcf9904a2ebb13021b25d591207e73eead91f21bb86f1":true,"d57e4fab7ada90e2159b8969d9f34bab55d8fb3ebe75cef13b248bcc74a77db0":true,"1c86a8fac6c380469197d4f5ad94970399c90c1a0888520936d853eae9ae1474":true,"4775a905efac78b4899c556f727f0c607afef003de9c9838b8963945c01c44c4":false,"e855ce670cb54ca29c75af2f9f983f313902feed0e7ff3ed63ba5a40fb83e44e":false,"cc8ed1ff5cc57ec88d83e39027fda10616eb37ec49ecdab716ff5f6c596e957c":false,"9e759dd6a2caded4bd3bbadc0161db684fc16b3f18ff0abe8841b66246c4fedc":true,"71304b6eacead7e89108b3ae862b6cc410c62714aa6371cb6bc4d4c8bed691c9":true,"0ee728ab5c72ff678f421caa6768061647d02f7c27955f53669859695163a4e0":false,"a120357608e921d2b3d221aecb98eb6e4c74495226e0d8c33ba6df9cf6c6a37f":true,"949757fea4974c716bf37cba50c73f3e5c930b3394ba05e73905fbaa89875e5d":true,"c8a1ca44a674552d749b1be9a216fca9b1028ecae005f47a86ec91f6bb54cd3e":false,"a3d59c6a1945cec1a1275d2c08cd16e90e74eec8f30bea2b586e4674e62ab8b6":false,"0a8312d32241d9c2883ec2940984abac010e36fdecafa3820952d521be125967":true,"58485d307af6dd994f79482d47339d6f672885a81c0df9ee750485dbdc453539":false,"5b7082ddc27d739c983685b57abf17a472d4d9972c4797aac266fabf2bb76212":true,"522f1640cea4f9e86794294632b93979176a2a521996c8f1e86c4ad4350284d6":true,"77c14fb921977df6311fc0eca3887e8cd6d56fe3e8078222cfae90655cf8ba2c":true,"82aaf84f5ea2c4c1b9722cd630b0c849009d990ae8805ebd1cae75ed48905b25":false,"14b4e5a83ffd40d91407dece8b48f08455583888e2c3c2c9a0168bf6d41599ba":true,"8911a4365df0baab309bdae1fe213c0fe76b35c20168d282260ddaf01203b8b6":true,"ce4951982adcd508be2b8becfe1722f3355b931d2ecce01b2b18e33e6fdfe548":true,"66acf9d1f62f12f04e8fea510bed1b2b0fa48674577f01856fc9d82845c00458":true,"b3d3076feaacbef13395558cb73f63b981fb6021c2a67c78ace761957ea627ea":true,"9a8b38f9cdea3d3ef944fccaccb8a28b27a26fdb9ca533468685a869a94f1781":false,"5a519e1fa5adff17d05ebc2e9b0ad75ee9baf0be7ff0ee9e0584799b0959e283":true,"015f4ed7b6f3e567bc7eae172de2de68a5c0b58b76b87ce570f8b87936acf425":true,"166f075a3c9cd2c5e9b760b6c2bc427385f54f44f0997f1d9fb1f9d2d50701d0":true,"eb63c45e26abc48d31d907da837e5653d982437b4d3d6e0a4714a17084316285":true,"9f472d7ed9c6431ba71ea94335b4998ba3624a989e31b4e210d20e00383f99fd":true,"de449a6abff49acfcbb793fb29e05de427601490a0bf8d824cfa0460be5c18c0":true,"3a8c772b52ff7c18d3059f5d8ac477183c73a0a8a2c2d7dc2d6db0eb495cb51a":false,"9deca8c4abc2bcc29fdde8cc0b98ab896b873f6304a166a00491d5fcf2d05527":true,"14852a50cc48db748ee4c885391628de23f7b62fec6c346a57514dcdd3448d1a":true,"ffe0577e0ebe974d14f6fcfb3df03cd09ddbc1553622858813a7c80e438b5e3b":false,"b908a245826bbb99377a3bc140bb6d6ce9fe77233fac213cd109519a60e69184":true,"a9482494572007201c98a62e1e57d2da75ad02c8ca42b1b2a0e7bccf5577697a":false,"b8f29a3b064ca587e5b16fd941991b6b8f329c40f152ad78bf845f8a859c8cbc":false,"3d6d389c5ce2ce026e14bff88f8653f1193955a86be237f66e55736aebb3abfd":true,"516540bc3069a674cbc447d69318cfe8d4710ade897a4bfa7198566ab3a0039e":true,"e40a94062ea1bd5c7e489a0b27ac7987c9422930ef2f8bde1d47340bfdfd84b5":true,"401964215a9c6d77a3fee1864a089105af6bf829d7d93f26119ccfd4d2bb79b3":true,"40f6cd10fd9a94f599cea0134b61ee33ae0c0aa5af3816348feefb5984fd84f6":true,"6f012a0a5e3a61f13deeb0addb6185d3df46f9e436d8bdfc33c799a67cad61fe":true,"a9d9bdb05fd8a0dd13fc952b23f83cee3a34d8f706060afa7abf6d65aa587aee":true,"37beaeaacc76119e4dab4302de50e1a4c2fb241b359d92c77f34621a3bf3d5f8":false,"a2b226653382987a4c64d4ce5451827c8dad329a87fc9cee8d249541ad69d6dc":true,"d9c47ff5bf4a28330278680d79bbf32da52d7d8038e55197c9f4b2fc0e53f533":true,"22c5b985e33d0de5711fcdcfc2c310928735a08151c6f1dbc7a8db9d4679dfc1":true,"d1010c3fded0146aa7ddc643d062ed1f6474582094ebc044b129772b5b41b97a":true,"cbb18a14bcc905b10d10301f363717db09e8fea799a16264a6a7acab6f8bea46":true,"261d4719e2c9dfd5018cdfc3b750fff9e05fa71a70c454bfe4096a73d70a203e":true,"83efa76a7d2475586fed0e0e892c5fa3b3077265fdf376375233ac5ace71e1c6":false,"09772dcf1408d03ce913367bc28d18a889973c4ef63a7b4ea840aa56556fb39a":false,"b28b4c2488b0f3ba65701e273769201e9258e77289ebc5e5afcb1a1b1e019f30":false,"7cffd9a1e8d3e61f7b18047efcbc9b3c5cd60666a2553e3383f9199ab0eddd2c":true,"8461ad3e30ec518ce8e898c44df884307eddc8a21a426d7991204b36533c3987":false,"0a184845b524b56c6114a14576b1ed1e284e519693bcc222dbcd69b2601cc93b":false,"2ad99f7bd45fd2537f95227a9acf5bf3b0a6022bfc7c89f4b64995c457339a72":false,"f2ac6558fff15acb501274c391f38afc92e549d44efa11da119d3db3a201ff9d":false,"c23a0e8adffaaa3b2b730fa7867c37f9f5ce3418823f578606385f5f79808fb7":true,"bef25b6d63b6bda5f78fcf28d4b7ecb078cd2e3ee6790c1be9c57ffc43c46f26":true,"46a30ce48ad0917cf989bae9199e25e4b2078d3d5475b8bf57ab283fce89e78a":true,"1c6db5a39a7625281d135167818e5f5948aed320a7059565c3a43bf6bb32584e":true,"643837418f5d07d9f1007ee2a1aecbd492ac903d935fe524fef18527ec480162":true,"fedbff7fc3448726f2f8f8565ae3b088ddda537bf68c00cc05ef9881dea89802":false,"04731458e9c93e02c6366ee89cde06728bdd35be952dc8561d5d42c33071500f":false,"7f11e1c717d05f6795a7ec16d74403daaa8787e1cf66b58497c66af8922a602b":true,"3eb6d6cc4b974428a9d69b3fb6b9d6da92b0fb4f59124ada871fc8395f8978ba":true,"5ff190bbf556d4f93e69d9ff133798bbe6b5cc93598549068f846d054e290663":true,"0135a82ae7f0e80297db768f1cc5b2a4fa0868ac5ddffa01a4a7ebdfe6545276":true,"145aab7e02e65b48cdcb47e39a97ad63527824b9e6f0b1abf7afad98ba2603a1":true,"4499b4ca09e6ee0953f0726f221cddfaa16d571ed86f7666792366736320ad4e":true,"f907a43429433fe4bf7e03b213034fffc15a158fb3281d64f1c5712a0d9a19e5":true,"f95d5ba65191f2370b78e9db2f43d23d6845c824b5406a1380463e5c12b64529":true,"aa079e5b9d64e13a7848ea8d154e1c687bb6a6e5cf4e73628ae6f949387ae9ba":false,"01304016190e322ce6b16d92dc03ec54363105c30a8dfc1a4bdf3f3a65d615e4":false,"fda6ba71e89408344c47670690216b46ea5c9763c25cc5c9f86ebc96c0dd022e":true,"b941fc7f67ada866de6c2104926c98934100290abda946c7f64f459fd29c5503":true,"1c3c749cc69d05d143c08e324dc24e2351ebb39b09395bb4c98ee3cf3a74e79d":true,"8bef38cc55c7b8c9a31fe0a42d9a9fe25ca7d242e95a13cd6d5c6ee0b134c4f0":true,"7794704280b1da729ab5d740297b35152ccf8694be8e0e9a593b829d155f2bb3":true,"adc5d24e1840fa4db067070d9e6bfcf54d2cbd5f1d822f77072ae96e2c25a87c":true,"fd72592f22c0f1d5b11dac191e78d588b06de71d5fe8305b180b7a3ecc4e3d5a":true,"af05197d2213989d7af2444317dbbe2921161f70930546992149f07b4b2ca8a6":true,"eefdf6609df772fd483dd034c757447d9cc7c18f25433648381bb92ab1cc5a1d":false,"60d098d42c7b02322bd6dea22c89347a99a8d826e1307ea88faef8c7dd6779aa":false,"c402256b3b86382dc3d903bde01c4d549938e9d28e3200b87714b6f127ad4271":true,"700e2fa5b5665d825ff1c670c6428177ae64caea826d70baffa5bcacb5f84e1d":true,"9e6e11588410b1510393cc8d5f7bbbc23b8fed3001db97b9a57bd40df9a3f52f":false,"8fd7190673de788a84403d76239d3b1f78cd9ee0b815209a0a82a8f6e4bd1310":true,"6f17a14c151f218bc974638bf929da3c16682db8cb9535ff3ef319ae6ed77cc1":true,"010bb43a9b0b0061fb234fb7b16fcda5d4ded091dda25ce3637ccf8c30c082b1":true,"ab5e654f040523cff24efdbce7fbd34efb490bac9e1377fe70a44db3a661a154":true,"218b015314ecc31500b62af6ca96495c5296522e8de9c510f7f41619f47b5349":false,"23b5ccb9cade522358e94b8221dde1c828764e224e8ae6be8c28d65d72bb3afa":false,"9d936714231aa941020ea91868219418c2a53a893caee1f815f5ece4be2ffb35":true,"5e75a1d920da78752c2be5e63760eea5522d861a6771b4b9556aa0c417817259":true,"996ddc3b4602366511cff396452edc46d2efae8f62d04b1df8cff7f205d77ae9":true,"83c1f708ace9ce9632463607c87adf7027968b54dec4a7e7e980b43a37ce17f3":true,"87ffd4eb635bba298e9e32971f907a48cf2d54e14b578ef43dc92b3727fe2213":true,"1b14c5202873c1d52f34d9486c00de5ebf1287d353ee0b310189450e52c381cb":true,"98104db87d0145d040369ea814d24a65d3fce858d4ce1706c4a65ffe0f2d488c":false,"31a759bd3111652ac777b17129c47a844f9871694204610afbeafa11cf7d567e":false,"a8246787a0972dc0475f4a08ad390b082dfebf24e6fe96db1d8b92b7918954f7":false,"19ec93005778f9eb61d75a8831e4b5c906ac205355420a2bc79da227a8f2c4a2":false,"7b27b668e258b97286f9dfa6176ae9983fac91aaf260dd8476518a1916521c3e":true,"b476e086263868380accf96336be22368f085f391d49d4448c28555ca710e17e":true,"d3973704c3e9fd633e147d99a86cf7a409c30b0a914bfc5b1e11ca773640b228":true,"b42ef97711a4522163cd9bed2e2d857f9f79222c2a13b39cda0c282fe84902c3":true,"c47812e5330061d9be325424a4b29e0c1054027d00b82e37e2c7501652f0a6cc":true,"2544773699922e6cf9b9387cb53b76adb9426747c533453ea71a85dcd302525a":true,"b2df49ada16bb3c5638b100c587778fe1fd78f0c419493522016e6f4e8a48056":true,"90953b48cd41a1e621340e70e6b5ba99b2551ae2806ff1f2981e094d39516058":true,"8d733f15d6e759a076babc644857e26fd322e771de3ddff3498d3b5cbd75c57d":true,"b3accac78f59717d016e02027d97d01940f2cf64448d58f7f0b83ff06aa0569e":true,"ce861f5d2d8ba2b7d86ba402d51350c56bc567879f7f4014baeb53c783d78e88":true,"5ab6480790b9baa358f773183a026bba41aedc0588754d1b9b02ede91dbca234":true,"cce0c1cb64512e4e4c00b8a39b4bd89cd6a389a2705b1adc3666fe17532d82a1":true,"471e9921056472b57a10e2eed3ef164456da7e93c9d84f16cf119abdf64f4641":true,"70d65125af10820a5594029e267d7eb078fda34006f753b056d66a3f1b3b0d25":true,"751efa3e0d291c963b38fea8a095204f6cbbd50a74fb339f4a07e7a8ca20257c":true,"6f3f5998f615ba82004d21534d74ad25893180ceb14f6437c0e64783c97891ed":true,"5d55881824455430bdaaec606ffcc4a0d3242e624cf2f150f3df66b99a9f1ad4":true,"ebbd5a095fed62bfe8cf245856af2a54991dd3fd777362bdd32a640a562342a8":false,"6dcfdbb379eb25e4f5566d04a827f94f024af2c1899370e4c0b6a5045810d5bc":false,"9f703f00918123cbe6f65eeb8046c56e1dc2d171bce1633dfe6c8d813cdd24db":false,"b2935dfd3c1f0ae80e7b1810c5450e9290dfb2dcc56141e8bfc796a77fbd2075":false,"34d45a466f6a21ff44f3a552402a2131576971babe09164f0741ddb0ce272179":false,"44844a141791f25c8406088eb8bd03143f07e446dce52d0caeb62ace09ed8254":false,"cbbec850b840e4f55775116eec61e41fe54d2c06ae0625ebfab7c02e326e1b5a":false,"f7ba905597a1f6fdc34eda5eab1d5bd819579e8f27a5eafc8c3acfb11e29215f":false,"cdd80a2270204ebef97b70e98dbf581de78745637f651ada11680f63d9294220":true,"76f7ea4267ed2b2acf32d717bc7be97dac2612d270ae809ffbf753e8352f07a6":true,"ff858fd06a100d09b5a32bf106244adafb93e47e0586057538569f3bcff80bd8":false,"f902dd642f8b016ebdb361405755e1052a8cb5f597b4690b8a3105a06df3ccd3":true,"bc43dcdaf23b8f24044ff04228c4542fc53b2f0e7ae0c5b2cf26593e0580d0f4":true,"7d998f535f7ce166aa2f5f28f337a9c208367a79cd5444b98cd89868764d9b19":true,"bc314d63b9fe4c9b114b86a34299b90b4a8cfd7844e1d10566202901105358db":false,"ef7c8ae2aca045eef8ca1bec16d69676a2696bca28b8b7bd2daa33bf49ffe78a":true,"845160ae0d9897c2fc3e3ad1e257ed65ed3e4d65c86c17eae2ca3e90f7f893d3":true,"afadcd19ee2296e442b9413ef4885a0f9a24a9f51c7f9f0bf9656cf9f2e3540a":true,"c778924ffbabc659682c7e20e9a164fd827f0dbbafd842e7f7f131106b051d75":false,"810515168ac039fe322d20420d8332f5b8ae066cd8e23994f1a6deef575992ce":true,"8fa43540deec67ddc382cea18c139067a834f16b849a856a5d1d91bf5d377d49":false,"8fa081f515e0410d5219e26ec0b044b6f423d70a53719ac044fd6e018f2c14d7":false,"8d5b94c0d10d56d97696a6489ae1ba7c0dafe1cd4f91ec29b0850066afd7cb86":true,"eff863c0b07235637b1c18be73b664c5d91fed9de107cfec84b562290ae1ba13":true,"53bf0df8d448345cd942c9eb36730dd843c9a4e590923ce9e3aa5b93fc88f135":true,"3c463ae75ddc782dd727b6d478ac4ac511b6ed9d4f01a55a33aa53d24a4a288e":true,"b88a9d68eff879dce8e696c00b423f81cf301d5748b6503bb9d71bec9e7cd420":true,"a113b65fb8a4c85d26f4b115fc2c9164b1242dbc0af6082869db9cac12a8c830":false,"633a86dc13b5e119d011420d21940d816c944783afe6e695d44e7d52232bf4ef":true,"a8b2732b0038adbf75e68a505b79b2b26623cb0937df7882cb552ff2a36d1679":false,"e0decd1da7d4ef811b5d018da0bc8b5a40bdc1b1f6ed8416b0e7c1c207da961f":false,"1c8bbf8fd0ff166d58796717f420103acd67099401aa8f8c1b29194bc82bb9be":true,"d1383387cb8bafda7535f271b30db2ae50bd11a52ba88198f52e2bfbc3f83d59":true,"45b165250ae9e98065a7e7d3d436095cb70f22aa32cff11007b9aaf1a30aa3b8":true,"c5ee6695f1152c683960e8953885b148488c289e349f9899f851120022329dbb":false,"4a1456acf7990918e62bc4eeeb93438ac279b369b16b49d4c415863490b3a3cf":true,"1229929c8661faa46598d8e308dcb4520997eeb82877528ef758e3eb5fca0b24":true,"df444d1cbd2859a555861ec0d9bb54b7b49a5cb0c6b9ed0fa3228f7111537fb4":true,"5cff5810a74eb01c64cfb9355ac17b71a3a2279e9145c07623bb4af61b5f4c5a":true,"0fafb48feba02beea98d1a2fc913198a5b1d0ea88f9d4afe8b84b79215e419cd":true,"7f9cba7d7952951e5f02bbd87ac49c42c58f08d3327d89c0b75243355be38765":true,"869ae3eb632d87a40aac8a99266bf8cd530bcdb60457e33663481fad724ce63f":true,"9dc2c9e19be86a1c6298a4e1b0529cae36fb04ce6affe67722a860ff0487fd1f":true,"45f3dbf11d683173a4275cefaf274a5047adb082344ead57102e787c0a35c0be":false,"312f29040cf2faf6fa4ede806e25b6b5cc8d5f42a299bf8c4c3109e30aa244ef":false,"0b746d687bd175a7febd6a17e1d0d1e3a66ff1898dce87aa54e5b427d70649bc":false,"1b1839f3533b2d6b05481f777f767541192abf8db3c2d8d4f6e55c6e681c90dc":false,"1f2a032ae7eab89126465028008ca18b8a2bb49db401795ca6e01fa51a65313d":false,"620d4f38ec9f3c79043f29ab0c8fe4e034846ad9ac806e432e661ba2c327869d":true,"244abb4db08e19fe34595b6b8d5c329c84df1f56d9544ae0b1d9cea83a93d58e":true,"a453db176534837d1e33d745991e41ab664d8de716594ab5c0ac47a338e8a4ee":true,"eb9a6faa740006d0bc87352fb456a16e70c534282aba05bdf9fd8216901a8fc2":true,"15d443815f55d5b76990a36f07b3c48ecf95453b69f1c799067cd977e4a29428":true,"0379566faaebc3a111d95d0fe822e7d1996fe3738bf2781c3ae0a6ffad919821":true,"da4bf4f2acb9adee0a0a97386dd227409b3d76b71695f79c2bf019c708c784b3":true,"9c14f52555ceb930642627aec28db3305802f5885cb7470cb330672b58e860c0":false,"2f37d651e2b8e39c71700b5310e10bfcf03f4d87f9accd72b9f266f9ac5fbe84":true,"bf7d80d7d100f0c4877a9eeb1e9ba4f6367fc3d2115134c80771cb641d30f707":true,"ed69793e35832b6c34ad08b33ae8ea676a9fae24a930970c0390ae3932157046":true,"662aedbe6d358403ac85e06d2a26211b3299b1ad32434aff31d1e512a7cc9081":false,"25f3631d20e5cff4e67579604fc045cd7f133b0081c75cf4e580fcb86868579d":true,"846d4fcb55c0fff7fab6687e7088a46cc3f74b525c7f28de08513b0b59d3695b":true,"188d10de1ec0ba002e76e5a78a806f166661a485478fee4eb18dac859a02ff25":true,"43dfbf12863a6e7fbba65312ca164424c8aa208b6df36e4df5f48132a2ca8990":true,"9032858e84ae719081c49ea01b117f44d72d8eadbebdf3d63e3337ac212992d8":false,"9fc34c45a90c2e7ab9801b1810b1765ad51825bcd80ee89d757717254ae28f79":true,"3cf65b43f7513fd91848355e565782dc58ce574380a9321a075faa477d71cf28":true,"bd7d900bb26a2eb1687103fc1ed8a98ee104e905ba5aaa0aab9534b8fed04f26":false,"67182c4a349a797f879f0a5ff5e6546375f51cc21eaea92f9f4811bbf39e25df":false,"1e5467f652f1bdb8c4e7786f8470cc12e82377cc723f08d144164bf26c0152d0":false,"5a0a7952e50659acce6b0b177ae3f9c010172534fac1d78238dbcf41b5501df0":false,"c293b33afc2b9f84b641062ebcc9855b8fee6fbf373679022d4af190a2ee81a8":true,"ca7296b2e44a916d06e0970aee0c8595f53058763df2e73cb6452f829deb97c0":false,"81f99a3fb72a56ee3c70f40905299d073a31adc0afae9af5a7606c4ba2cef78b":true,"ce80cd441fa51b2183b7f08c634ec0c33e7084750905d231f4c66294ff67b227":false,"414ae9d6f7b1d0f8411b62a9a89decb583217d828fce6719e3b75f9cafdd334d":false,"f3fd8d4748518d0b1d5d4d6ed0d1050e31686a47e5668f25166475011fad328c":true,"f1b1a8d565c1249c39e1d10b39f387b56391a1c01468448951a375bf2a14e873":false,"1bea4338f16618834dd509797b593a377f10445c71e5841770feee4798b86c5a":false,"8eebae81b28e99c57474e9e8d0a39a4b357a441db5d836a7db5afb752138b43e":false,"c340b6a74701456ed2c8daa046b6b8dc4bbb82fdb182c424689ca8e2f52bc9bc":false,"7886d332328b484271d02819fe57838b90d3a2cc10237c5cd57bb4d0c478b831":false,"bc5d711e1d2fface3f457db1276d89d8351e0eaf8dce2b61589e1cde6d7f8664":true,"d5968c06cb13d21336d7718c3060529a0f44198201642ab7349463794c83815c":true,"3d3a3274924d0c2369f3761d890c7cb6696f01d69b8ac156f40933b07eeb3429":false,"e3f3e2dea5371f32de646be21604167654dd9f9c553a01b66f726014d1958ca3":true,"32c33c35591375b85134d90044517f2b0ad360a3769cd98f23d83a748f3f5d47":true,"596063c444058fe0f5d716d837ed52afce91c6273d72eeef249994c83d82d48a":true,"6e99cf7200a5dcf79e19aa15a8da3979793bfdf0e722cea3fda116619502fdd1":true,"a6dd9cfcbe7d6e01cba2ed3bd35c61f9242545c668dc3ecbd85ee7d45410e02d":false,"9488f4e654a4e80e11266a9c03df28fb81ce6aa8fc87f59420546c452b5cbfc9":false,"98e26d678680c46ee11726606b519a792dc209591308bfe4278b233d0481d065":true,"893ea27b2aee94a7f073873d2897b1513a9f302762ab9988d91b3c93a336bc65":true,"fb7a29defc7290a8915849281eb47315c84ef621edce6259af98bcc1462c402d":true,"8081fcf7d130c598c8fe1c0ecb4cc0e9621cf565cc5e05a95ab9d5abddb60f68":true,"46d813747f70d3210c29108a138d162203ba07330ee86085c1c78342d838691f":true,"df6cfa7cdb4fd924b67013ba40d9052c73cd38a0f2d639fa44c087ac5f3de44b":false,"79677fc9d3f158e9222014cad4d49bc35fd57fd2fd1f3c3cf21ca4e7f1dd6c90":true,"4535e48361843063106cf782286b5156cabc543b1774c4ca681d228a37750801":true,"a29a163ffe330c37e798435e2926626c3a17f6617848633c352d5be0b82fef7e":true,"b1ec1a600cf4c2026205053d0d58821033181eeee6ac6c5582d42bc8a185d3e9":true,"b81b8cb2a9776d7159e31727b03f953e45804d01b8ab46713a6b21a3c32040f6":true,"c23a98c475752ab4600f740680e227d35f7c8970d6dabcc4e5163e6dad6de94f":true,"989e4a6cddb9ac804eeaab9e7eb9aca38b8cfa0be9251ea52d45d3534a517e6b":true,"25835efce97901169e12a6a30d8ffee7d2bbd830b3a1475f4c590a39846cecb2":false,"45085fad4110e47a41468618f6b5fc7a7b322ea889e5c11bcdd3e961efa22e15":false,"381db6c055ea4dfef9b59062a4596732ce9e0fbb74098e34cf12ea22c2624d2e":false,"feb5f7a2810c90258b126797cc5990998a84f1596f5bb3133b5c5d7eb2b7d613":true,"fed412f485660a5ad3497bbd8caeada70cf1bbe502538693eee437614d4152d2":true,"49048b2ad443228d74fa78aa6889c47d039793dac508618fe3a6bcd4f2270c7d":true,"2147f5b95c215f7eb6498c899fbfd4630f32dd82c5860c7f6a26ec3febf5e7d0":true,"915d09fdd08455adba7bc7c070042a652ac8e5df0895aed613a52062e7205a3d":true,"9f3bdfa4fefd70109f28852bfc93e3c8842b731dbefd0a7ce3bb00799afe26b2":true,"c1fc2b30a027bfeea567b8caf8d229fe9399c6407dbc102ac2129e6edbc52698":true,"73b970236571c022aa767f43041cee42f29ae4ecce630762b401d5f82ca1dba9":true,"947218e2cec9a6ade1cc2d056ffd649968b90377025a763513f613da0a8e1ce6":true,"59afcd2a3a35cd0d9536ca157d9ce39b362092a7f56d8053bab8980ac066d72e":true,"0dbaca693031911dd26f498837401a86c51728492072ea9980f71224256ea689":true,"fa590b11b57403f88f7f7208ba09bc348629fbd9eaf58e11073c6d4d3ac0f2a1":true,"ce20ec5f88b6c534929becb58aaa0d4b8738473820018fef46190288b3a79b97":true,"8e4065af6d5700df7e1619a879c630307146a1dd88e9f61985c9385d2b56e94d":true,"926486f87215e31e55cf9a28af8fbabbee267891f05e79fe3ecf07f7059c50d8":false,"f4a3a1869f25f8803347228344f52c04a18c34e21bed4ac657634ee32464fa72":true,"89522d2fb57524aec0bc9eb90e88311470c364e530658832b189e6fddb297a4c":true,"2f9c93ff688d65e8921982c35ce71a3fc3222bba2bf4c1488cdf29243b69f469":true,"b9ca75c3f6764aff338b18a3b110bc8670686f297ec6a9cd493be5dcf8334133":true,"fd2dc389f222bdf556fa87bf69c12bca92c10c9b321200459de8971c01b2c30b":false,"750b11723931ebecf0ed5575ffca7931cdfe6f767a3ca4d48e8c5bb8f9ea50c0":true,"864298f86de5eacb2b49101460e72222727ac6b80069b70e89d8dcadf29d1826":true,"e38d5a771f857b83ef8165e3ab141cb27b5ea076eefff1ef9b035d085c09d300":true,"1e1edcb38133ecc84fd3be8b8c6f837da2bcc173e76d34ae4f1df8f1e3c2392e":true,"0b868b5b02455d7f7d5cd2fe453f3596e7ec8778bf2df7b4f4cf522f392303da":true,"6eee96f177f5eb03fa6b52d279da7c1df33c5998234bdd14ad1b1695547296ef":true,"3d61f25afde07005ce462e5d99723f2d0ed0999773e501271d4cfefe4263f9eb":true,"3bf66d060c76f0153479b051bd75dfe2382203bfd80f0e925555acf173b58d70":true,"5c3a693a7b2249951c73a58d07011543d2bde6e79bb357e9ca9d95c72a449714":true,"95f2f2ec72fe004399b37c2e14ff8165f2890273a57fd1379cd2b38276426178":true,"ea739ce6b88bd7068b046fdbf30ead027826d92b7589ebb00f98613beefa944d":true,"7d8342b3194dc0e78c55b801b8cecfd230b4077e44e29b4bb41306c92f52cd9b":true,"3334542ef3d9c92b251a38b511e05d098adede664dfe68ee14890ca6e739112f":false,"13787293df548bf3c47508bf10fdefef77a445536e04cd3502e3b9139efaa773":true,"b9d01002588126a763436daefc1c5ca0e374e5411b9572e52895749863512771":false,"3dddeca8138fcffb9142b6bd3356e11bc71405d5ad4052a0c45feb830ae23043":true,"59466231289a766919cd328794bb9ba74071bcc5d317683a2cd43f88c476ab47":true,"a7fe68ab4600fbf3c9b11bc288f07e121a5af84fd9344f6a2c6a5945dc107f5c":true,"86654da18e51bb13a23613ab4795f77bc907e996b32c4fc981bd903eb1f72813":true,"6e66d68caefd3846662487c4d7553eeb2ef868f49be875dfa1454e5047599af6":true,"cba8827edc33a6459fad485ad54dc4aca18e4ab464338a9d24d08066f35d0e62":false,"92fb2ff5eeaa519b726c0c35614e463156ab32b80faf28a4bb583e03a6434268":false,"8afe4d2f4727c1382a6f3f7409647499df0cd63295db26b1119dcc1319c275a4":false,"0d5c31b792344b0e503f55dc79311c989db79f201d8dbe0d1646c3b62fbdd876":true,"0cc2a2fa2728475f57ff78e59318f5d28749281191a067b608372b58bc1c5bdc":false,"e23b8ef63d63d2eca5a15ee0ec65806324af519b180a313e2eee3cdd9afea36c":true,"b67ea9f40ea72045f6711f586cef323bb21d28d38d7e4447a56ba156d6bb5186":false,"14b78b011ba596cb560f3ff2abcfab49d3e05ed7099c561fdd4a7a3953100a5b":true,"57aca4ce59589d32de12bbff208010960e63f2006dc59a90bf75151c7704fe3e":true,"15c07aa031f0103d33303b8ad39f20f593eddea62a6f7cdc8100e9f4a9402cff":true,"bde2099b004ea55504f79456d162e87d3e61004352980a144b1d8fafa32a85fa":true,"cd0a011324e7b63b2841703b88d37bb33eea3e7c8d9426a86294d98848796214":true,"9a3b12cf0a9485c845e38928147377f180e382f3e9dce0671e9ec065ab27c638":true,"cb251002f38126945b615f6c745856d6168e026e33fd08c0575d83ad9a3390d9":true,"04a9693f0cbc1b307e95d15c8afc576694a219c06c6416999f8f26af0450fb33":true,"a45afb86f097c6112dd51be64861adc3d2bd5da035a82582ba4e18e7173dcb49":true,"c73e65546bdc588008ca4e5e77573657376189755d9d0802e7016071101700c4":true,"77d368e25a0657a768a80d9a4b12cba27c1d95e6cf7486fd1e53e18936c637c7":false,"fa5e42a37382e5390767d638928095d0d3e2ed3fa63affc4408cb203938f3b03":false,"d3318897c5fed4996991c6d22432ec89f6fdce9af3b471ae08047ac7db419c18":true,"787b060146321a88bf79a30a04f888db251316a34c8c772e4cf58ce5d9709100":false,"ae12ad98e85bf1537b0325ad014c35bb0efbbfb32a0e10af7681866c60654c15":false,"0c951be72f6df2dce02e34f49c707a6d1f829749f54e92700c10364ab0857de8":true,"19ddf9bfccb9a9eac56bbc9b8246980a6caa8c06e8c1259ec06bfb5c67a89703":true,"49b0f1b1331707b005f7584ce536baa942759a08b63e9e7b262d22528c8348fb":false,"503eb7a4d4eb6aaea839ea7647ead31814d0dc76f83d6b575a598e22c46ceb4a":true,"26a2e85ba88a10a53343cdbd5c237c0539dfc735f71c5fc427b070db19e2adaa":true,"1677774e1f9a6e5496b013479e75b9a9c16b654491735bf7c168966f7284c755":true,"e4a529b1ccc7f48701b536fea8ae7665bce39332a698a0349f221a32356bd653":true,"f5a4131857b91c35e4fec3dd0505c8e0111a98cbe8902da2c893e229f84f5bcf":true,"9029984e2012a64abaa8e2f3fb86f65b1485d2dfee630a6fea7eca9bd2a10e52":true,"50d82e4269b28a90d6a9581194faae6f43cb8fd8c135dc40fc1a025500c3e385":true,"dafa1c491f302fa521c252c3c3cc1cd193edf6517548acbc485604d85063eda5":true,"c34dcc4fad07eae8bd64e7efdc173b6978019d9c1f67aefef0e4ed52580266d4":false,"d0975c61d0939b023fcf500f02d4a348a2092d061595743430a7931d6ec33c02":false,"980a47d950e1e9c243be55488f4991a36a67a61ec68f0a19344cc38fb86fe6f9":true,"0dcbdf79f8e3e532ae28e01313f461204061ad31f16be1f2d9b33017747e5d42":true,"9658f7e69b1d53e8cf53266254f689624253a791d697e0da0a38d82e25dca083":false,"93b4a68177f42c20f8c4efc1682c25fc1ec6c4bda858ba8dc88de4447e2c1256":true,"66dad27e64435e17f4675f2009e7962ff6040cdfd3ff5e0d2e2c41a3b9b4cff9":true,"0cd0ebd4df21ce8b60d2e9bb8163a4e15229b3bfd258e626b07521b70cc4d6a8":true,"5e2cc71e88726222a507809805b87d7596162e64407e42e30b5d1da45fe3c5dc":false,"3807cc4be68afd6728c93dff3d6cfda8e21c0afd51bd6bab6d94cbee4f46e5bf":false,"23efdc86b06415ee6d4447086f9ad4925ea7f7898ad66d887977665b4016b585":false,"a4b991e2ba64f4885945b57c24981194681ab8ef19c7c2b950c28556d1e763a2":false,"f82e7c2089233907c1b258d69bdbbb672ae04c9b602ef31a825ff3a87a32bc2b":false,"bb86f3043ff52665eeadf5ba42b4d5209259f84b173e73ec428614a6978ab45b":false,"54ca084341e005b960ee8b9d2f9292332b6683e07561f5627e1340f8951ab804":true,"1f5b63bde991bf204dbdc0c12607a1cfadd9366c8cd4cf1940ffd70839950560":false,"afdf27e6713f21bb329cbb1cf35e7ebd0956ec06e62966e014bf1cab609ccdec":true,"09d60f0ac6294462dfc880f8ac2fca2e1b45a3ba44677934cc1a204c0c1dff02":true,"424ef522dc469680886ab084afde7abab125684e8319a4bd4701b3d9453d8409":false,"d421074e10b0c6f0cbc426c5073c67b7e3f717c43388acc1c71788a0b618b69b":true,"3b997e7558c6be7216b1b555cfc70b88e6c56242e09b0116b92afe33356921c5":true,"6dfefd1c8419b2a5c9386e513fa8dac119595edab574427f645ea0b17c92c693":false,"331f0930243e72c67474a41875c2300cc08d6051041e51e907ad79d6c0a4575c":true,"6ad4105618c4b351cc13507b7c0e77d7417b2eb1a8926285594709060ef955ee":true,"3f9642a2e5a85db1e4ca3b28d47b10314a4daa9a34ebc663baa9e2b59dbba4be":true,"e393f3723b259a863cd15f5665a3a88aea40dd27fbbf8f14fe1def5a46fa624b":true,"e84b60322f5391d83630b580c87fda3f89d44498238c75beba15df1d68190391":true,"dda70df1553dd60fb2919e9db14cd45a427f559aac8f350e91435a71ee50e156":true,"9c71628d843a7846f80576905f8a7f380a1bd6eeb6a12572d2e991c2c05afc08":true,"8cfea2ee0c3d0f0baef0711399f16e43cabdc15f926e50187e3a40dc7e3dad06":true,"3bbb4c5d93025f3f2c649cbdb30be7930e693e75a18e328d0dedb63f54f9950d":true,"8ac8dd3de298a6f3c6b513e896e7314daedf3cd2c72641bdaf0397297cabbb45":true,"d2380adc24638f62c75bab9b78b8982120e80533a26920cae3761b4732d6b453":true,"29cff15ee474afbc71a669135ccb3f4835bda073e262ea7dedb4e7b87103ae4a":false,"7ccf6d74fe3f1e5d6f6afe106376c81036b8df0cbb91c0e1acb00a8e7f8919bd":false,"6d20d67df7121954b69226c492eb89454339579044840ba3a6767ffdc4436f25":true,"de4e6408c4b97fb183de3eb9f0d46cd05fd1b1e244804425d66ab88da4ba26ef":true,"2123c518b593d354f51911e13934c1f3fd4c5ea63f67d9c9133bd27c9a245c5a":true,"265c5064ce465b18ce13b2e56e1f15afef2096fb05c04d61ff865693df21d92c":true,"772610a9318aa6552595700a005047296d88d2537c807a1a3cf17e93f2a70cd5":false,"a0634b1b75a45821bfd90246abc341634c44653cf3e860cd08bc695c47e1e8b7":true,"8b8bd69162da4409290ac374ad16c7f9465c805e442d1586acc99ac63148781c":true,"df37ca199d7a3552db940b5f7b959ae9ed070188b4195acedb8459ccf95b4066":true,"f46cb33d2d42f666452112455b2e572ae848e72ad0fd7a3e7d1e1449342996b2":true,"be6e16240b863e97855a7c7ebcb8b59ab36f610fa128d2f9a4ff3406d499b848":true,"e5975015ab81b627ac7f8b6cb71d75e14e09038c6da829e8de93b77c78c01976":true,"3ab4883cf0a60ab32d71e4e1e71aa59d6fbe76090c2240bb7f4cf05b582846dd":true,"6d7b1251402b210b0a1031a6bc061a8dc441fded2dafc1409861cf5946eea518":true,"879f848cfea1fbfab512fba455348e6b612fad7b115d96a51026fa58a5ee808a":true,"1f00dacab7ed793e97114f43f4274d19598667263cd6c2c7fead903a6fdbf8db":true,"59ce4b4b4dca57e74352cf9ee90c8f33f115a6176e4937f9ffb273b108661946":true,"960abf6ddd4d4b3f47d2d234eb191168edcfd9601838058cace0dc2f2cac2f2d":true,"33fbbaa3447e1dde5fa651077b8975f54a058c0fcec48b3eb79b6e18348e143e":true,"edf8b4cc3f3cd55050d1ad3833f7726d0896d3a155e0ca73aa067d12fdfbaf0d":true,"1577eb82295c7378450c990a83800ee160ff777c30538e892c08de52101af420":true,"a6fb68309294f40b07544450ae6952824b2225764eb25f613dd3f9428553cc89":true,"a65ac5b22708dbaadab98061fa7c81998ce8a74916c4eaf9540867e4611bcec0":true,"5b07a9efd25658c96478f23d489ce37a373f8f2ad8cc2edba025a421c3d6456d":true,"c5e0d08efe4103e5dc40f7f839d1e9390d4d053bd9a323fca07dc892c0152546":false,"13069c419587958be00595ec87f8ac484a91e970ad6636a45f7ee7ea553389ac":true,"aaacf6edfe3a1bacdb9dc6ce79779734d17a6bc38d614bfc31800f030cdc83c2":false,"0dd95b9bf6f1202e07211a70cfc330976f67617d95725dead13f20b083bacd5e":false,"e0299b56aef24199ab383475876a4e24fbb5ac8e76825f34d77ea92604e3e509":true,"ef3b3b4eea1be55605cfeca18d4fb7db6ee6d62c1baaa82d868c3ec1a9689596":true,"aa447e7d533af4292003808bb166a2089f25e984992fd6eda0bf1f690da792b5":true,"601d03340140205fa14f7c26342951eb14e3ef1b34d51a4f54d0ac5278d3d49f":true,"3d2bbffe1d8142900abdae99730ff3140ebeb2a21e845d4aeff12dfeb0fb2cec":true,"c93fc61332129bcd2c80a8238b627c039602faf326f85de9828f6962e48c9bea":true,"28c8eba769cd243b5e00957ff3099b941311d1cef7117b928465006f82f02d68":true,"35b6d0d2d28734dd98b20ce018aa19f8818a3a3dd0998562f8177a5c0ecc81f1":false,"f300d8de13e7b1840e2166efa1c98fefcbaee49e7a0b281ccebc2cb909f38be6":false,"48db364ca62fbe5533387944eb0bc6378e67f44a22fba0464a12c29f8f4c3050":true,"eb4a9348000d9a6f861e661c2aabcb324ff131bce9296393df5487ea5003e473":false,"6bbd4939d5c49b7615d6a5d839f6acbcd196f5366c9626e56d473cdd9ba5b4f2":true,"2653ccbc1644925687b5aedfc720d5a14e055738ddabd3425db6854943e9892f":false,"801fab6842759811c24d5042ed6579eb5e2884fe719fa3b3a2cf1ad48cc8c7f9":false,"ae10adf82c9d0692ebd703dca8d5252ac05bbea6af11df133ff7fa3f3630f00b":false,"38ac0aa37f9a117cf3b994a4eae5130e42b449fc38855bfa42f39a7e22cdd64b":false,"6e1c3e347a9ab44116e55b5fe5b646f826f560fe57fef6932ce2f1a7c9116052":false,"a03f1cd337f52aed140b0e9ab53df4bb6ad70e3e0597a55ea9f34e27e8f9d935":true,"fbede9d56454c8851c9f85ae43cf06834434914cb994ea8a9242f4f8d553cda5":true,"d02fb85012fee38c316d80b8561ac9f580f680b67584d26024448aa4157e78c0":true,"975e44a431587f3016b9eaf2e1d494d1bf515784ab2178fc74da62b914f431e0":true,"97d8343a17585075d053c1196817f8f577421c7cdc9762b9221a1eb6e76c6b66":true,"ba0e66b34139733c0d81eb901081ecce3cb17775e0a2504a98a2a5e58273af19":true,"db2e6f97f06d97dbd6b796fbde51986c5d83e1a9b4bb3d487ec8ce3488676beb":false,"c03ec2e8ad2573bb2169d3c1a1f456b56c33497c452e8cbe7d12f976c9b54e84":true,"ee5b34788a0563143dc6a8910112a75afac6d06e1c44bfc8ec4a6d96091b4be9":true,"32d78a68e5a71b79d714ea0645b029a1b77787d87c01e8597d07f0e898e1ee01":true,"36d7ef004f8f7aeed6a59d2000c5292e314685c37d3312b1424396cf3ba78e00":true,"ae4a244f3ab7d30e9c6ef9574da47ea0c1dafe2c133db0277ded33a4d9a0d7f4":true,"e03044f5eec2e3736ffb904b932e20364a7e4250dd23abdfe776ebc84ca5ee77":true,"583d9b94ad0c3fa8e3f41aab2891db26cbffab7e1906e4a3eda36a457b4b3e2e":true,"71f5d14a2cea174ad84ad6077103f5a02a3a259747839c46cf715e627a5206ce":true,"88e5c3d9cf2ac2578df46031b782f543fade16413e29acfe20c3b1700c83c534":true,"7c53a623511c5338995b442ea3052660d4eed2b49ae466030b96f706722721bc":true,"3998e8b88921c5ecd8d35fd54ff60fdd9ea9f386c9907edb331b8e80d332cada":true,"ff7aecc438377fb5880b8ff8e5d92523bf3f6c9104448652f795ed1141bc0056":true,"4d1792cad97ffeeeaebbeba7716275d2d64245cdd399147381035828d9a84485":false,"63de0b55205b527801c2b72e3397148d71abd1f58c5d5fcb7df322ffc1357190":true,"aa69aca8d093b28df32b1ea6769995d4b8551e4f3f9c4165485904601a1e39cc":false,"f4f6714ae8990c4dcaf42652df46b221863190c03c4c6f58e1fae4e4a265723a":false,"3fd125530d7af750fd079f92424053ef95fbdffe4e1e48d8440d251b92d8bd9b":true,"e919e4b1e99ae80672a2f44861b430f9e9408da27f22693c53ac4a6d48e47512":false,"08ea97302e54a414e989ac266668d8947e9b1c685ad125abdefed9aed9535c1a":true,"18a91062ee39f8fc2a46a5e6f8e3ab58cbf2d45cfdd27ccc0b04390560241331":false,"8ef4bfa1f29b4c125c7d2cf8c724fb0122ad2a3471bff7be7972b43617aa2c15":false,"ad0c10ba3fe785c3e98b724eefdb7adf358adcbe01735f9536e3152393f5026b":false,"6cbbc69709d5bc92b8ad392c4694eff62a6ab81f8b960060c2fd428e487a816a":true,"7ea8c72265e6f5ce8aa98fc98a2317fb185c8a6cc2af344eea283cb40d0069fe":true,"d9ae3535ea7d59c44e670875a2d0003bd449404b1f4beeb0cce96b1760f386d9":false,"354cd685077c48763af7918b68bb523a422f973ce73da10f428c84e03ef25c5e":true,"f27b5e7ae08b268d02b01bc8d497004cf9482abb8bfdd3d0d6df204801a0a834":false,"b814b72ea400ca1de0f0edfbcd1e116f6e0c2ed03fb45ff27663476d9bdb8354":true,"8b31a550318edbea44a101fe5cb098e581c69c5f64e2d08cc6156816b4128135":true,"67b739092545e7e1a96c571c5b75d00908139b4562497a0830f24812e05d50f5":true,"f320fc33acc9308cabeedf18ab00bf55b5cd4161f7e6e58449313df306f3c5a6":true,"a7cd65eafd6707fe4c7d4fd89b76340295ebd594e0fcfb0b0301723c54385f8d":false,"3f16fcfd9df70d85634cbfa553f63f94978345b4bef08f9e4ae815b78c7d562b":true,"25a30b2233033ce085410cc88f38052e74bb8d2708533b2c63c0cfa317ebcb45":false,"f91142dfea30b7d18a96705d7f4d6a36476c3b998c2739be20ab30e6b5df405f":false,"bc10189c40e786a86e7998665d0b7ddb00b4bb1470edec2f2e9f2d801889993d":true,"02324b6d0b45b41a371ccc8610db58bc5820b3e5707bc2678fbbe9bca1044b67":true,"2ec2a43397ab5c661381135fc56455034597cca6fa806558fa63dde316eecacc":true,"7cfec1b790112a406ca1caf1958c75b3616d3e5d302430899b3131c87870bb03":true,"fc76df6d0b86a405f05fffc48dc6ea4625a766bd7d69a9969fc0e5536689d8a5":true,"8702ada12b00d10aa72d43e5ee90bd4b6dbeb98c2af0165443be09596a51bc83":true,"2511767368ab6aeadee08bb8cf121d824d34203bf11d65d5f6ace2434cdf8847":true,"0265fa3aed66c9d2b83c63c6620d91fbf8faf98aba1fc7b72fbe90d9804cb285":true,"54ba272b9860927ff55ea49b3af023393519dab9bc544c952c21632e234ffb00":true,"aece83ab710a6bf6b21414ecc36c8156ebd806a401d70abd4fcfb12bef8bf689":true,"18eb617abb01ea662df0bb5825cb511d0014645a1d67b59e6e01cb3b37a975e1":true,"8c4093bdc13f4bd52d9f02be84d3663c755d6b7919b29fe301fd04f50d1fc6fc":true,"b88ec18ef750d9297336ec0a0f0d616e1ce7cbbae9b7277f7faaab69e5fe7f4e":true,"9bc3899aec379e2436752934354aeed32a33dd4209c7305835895587db54ab1d":true,"df8b07e8477f53a495ac530207b85465260745ef85d093035bb54e4a4d6f30ae":true,"fc93ab0baf7c7c98bffa98686173f6fcdd1c5d78b74087a83d0ce3aa70d2cd96":true,"9a148a6a252647d2d6269903185542229f82c0d4cabb6a43a7b19ee5c3d94cc3":true,"e22bf8542e63f0c98a3aeae7d8c5748649f5a35550bf49de1f3619e4a422dfac":false,"1ac03847fafd7d7518378d993e5d0189654a5ca494742ac9449fb7b63e495f7a":true,"0b0469ffa4b1056211e4a92498b4e702222a7415bcf3011a85af264f2c9e79f8":true,"66cd5a55f37c3c2f3764cc81fc78fd09348c00756f93ac0468f88ddb20f131fb":true,"003978e360dfeadc0c3896958a6110a5298c425e330848f6833b42dc90da5185":true,"00d62354903daee270ca3d1441cfce08ad2384a728aa42f4d7b3fb4f3d0b6104":true,"5aff415d5c728bf7e25b433e418f53cd20a7bb9e1ac48b4c0f10124b73e02106":true,"c3e79d290896912ca7fda4472b1a4652dcda1d08c3caea338846fb570dd7e02c":true,"47dc8e9dd6880f48b2c1c0fda0483b82929374c176aed5ac0de645d01621f19a":true,"46e820924f2e749be42c2703683df6fcd270cea8be9572c4860cfe7639415689":true,"2bd02ac55c9e98738cd0ae2f79e05440e9bbe83020414b3de41f92b3cb7e85cf":true,"4258663d632fde8ae83d9fce46cc9a9e183795e3c8be20182ca3d04d97ac2db9":true,"4a7a510c86ecd4cef7469fbb387515cce6eeea799b303057fe897cea604a268b":true,"cc7cb8946f522e11dc02ce9cd19ee1a97967f7c13210076b9be56682d2122c92":true,"1db21e633979d2b8691ecd547e0a5212053b68020947929cef01d9ad114e878e":true,"27cf462c9a13eab77f19f356a188d963d8704da09e25ded082a6e7da1a6c031a":true,"9375ab056dcbec20b2c4e4d0e0de52d19b05bbee5874ad10d713b2028aa6aaa9":true,"8c9fca4eb01ef60aa76cadb2067a7124c92c9bbb843b9d4a1e3427ed95dbfaf4":true,"cc6b327a04f888fb2d8b6f3ad2e52bc073df50b13a95ebb6d1c4c9cf417ae941":true,"e7af4e1b210589789d0bd818b2c4703599410d0fd5a1b7794b19d6fe3e1239c0":true,"34c3e45fa31d197a53bf9421d7e61003313cee27516e76fc5b3646bf9dc8477a":true,"b3d9a05a781cdc27d1c3913af659dff175e558ec4cb6cc3a396a3bc367538f28":true,"48183cd99c4c3008547aedf5079ca2407fec918be926e49b1f8f9d31cecceb9a":true,"e8255747d91996d98152a8497af8026b55f671497ac38298972a65563916a2ba":true,"7d8bde26a7b13d8a1e7a272a92a369f816809d67ba5a7f060b88ffb08948b8e2":true,"6b62d406b26a43dcdadfd3b0bd2f625aa1b8e32261a73cd1331324547c0646c4":false,"4fab07bed9e77580a4580cb38ce17675b82a2a69865c89b81ef2687c4152ed80":true,"a7c3444d0b9a4775dac7c366fbf874884543d15db4f3fa4cc1815ccc7ec1a176":true,"a37fa14b83d90fe570bc91763e7864cb8f9d75c50864bfbb3617a815c76961ac":true,"86a179010e418da6876dde9349e8c5b629c2c07b3d932f47c77d54774afca329":true,"487c9bc9bed46a58adc3c13bae28662d00a11791a63a38af6db3bc94cba22e26":true,"9dc120da51962d8d5283fa7518b60bf2a32877d0de5ffd29ee50fe50ab963093":true,"bc40e7f4375fe8484c076e9fc6fa4b5a29673c8bdae9df2bb5542804eb0ad13c":true,"d5428415b657baa73a1fc0996adee2fe87220248c0cf6d02e89fe5a6c51d6e3f":false,"2d0ca9fe3a389c422a2cb745b6660350ddb9db71d66426c0503ebc26722766bf":false,"d16914302bb135faf3b1e804cd06040ba25029cbc1eeeeec9ed777ff55db2063":true,"42b3e39a8d8ecf2b37f24fab9506b50ded0af79d5599d608a7de4d3189d4f880":true,"a07eea8b28cb3bba15bb8e47522e02e64eab127f2e4581d505c33ab952210435":false,"80696234e999c1ceb2bd53fa8573a993ade9e46e2b65640d0b53ac790e2c8876":false,"ad1a9101849a15c3a933320ca4f714ed977721d1687cfac7d022339d4fc3eb4f":true,"3a7d969a06483ca9763350e2cdc31340129b4ba6ed751686a40edcf9d9a05ad9":true,"07a00ea08a79eca2bfcc463a8485e72583195129deb6f2e73a17934437e258d6":false,"e18a09c36ce8d6efe1e9cbcd729cea70ee48fcd43a744bd5e6dbaf86d8d5da7e":true,"5350ad1f624a442e5027c6e533b0e4a72f0278226b0040c5a35e0709b9e87006":false,"467433fc82377af1843e52bc7ae0301a0ec781740fad3055686b99df7d0a538b":false,"1dcb6de200af9ebffbf16b179947c70b851f6e850ecdb9b5ecdf203eb272fbc9":true,"fca899c416fe4979950d6c2f183756f8be42e103dd4f201824f944c06259dd93":true,"8845aa26017451eb482ca3621a844b9af1ede3b81bf528b7885f40b9992d078a":true,"82bece06d47d4baebc05a1af18499dda00aa164d98a1e182744d0170fb758330":true,"69cead58839518a857e0a3e4a32ef94da19cf420be05d1bc4b0ce70b48ea89c2":false,"d30b1b639bb493ec959037a23ef25ff14cc72b4b28461f77e9e2e389cdc5cf3c":false,"3876a53f64f13ed4773089e5d45e2b59735c43d74dedb96818991c187954a053":false,"c862f0c68b47e5aba8addcd18aacc81d946a35706a24ccce3bd44287efb13e43":true,"65e9968c0be19d6851ebd0220539ddb02be6cdc28430268a991d03305f3f6daf":false,"4e5615649d082f94db6bcb6f95d4866dc430675030480586168733ce8d8e11ee":false,"84fbc261c793af1c7909c5988e21269f09fc17f990e77e863e2f817e248fa9d7":false,"2c656ff33ba5fb2c404843210b7f778c8ba5e1aa6f28b8d03d36fbc48f57cc5e":false,"76d7ef0492a362e508526e471b8db8520f5946d3ccf342b40fd030af562d14b7":true,"16bd05216d9934268a6d40eafeb0c0b91b973fc896284d43b791db7c4bb07181":true,"2b83688f532005e2cd5b50f653bcc430659d4668f16b47f501235126038a00a8":false,"7fb5e8902f216c7d000aff7c69aec9df686818c4c52700bb2d9af2b2d26058cb":true,"7fb20219434dca6b3e716e41125817030c945344233953641cb4f49c2a486f22":true,"1898422e4fdae8e8aa518270d7bcf393eabddfcf7d7354b2ba9549fac51c1837":true,"61d10902b30c890eec455e090667c2c561df4649b221a0d9bc822a1711a9162f":true,"cc506b4bf5bac68283c82f3c44d869fae543cebd80453ff9aa2f990e28157e91":true,"700484fecb371509c93c61803317ecc0e7db71965bb78f0bfba1b294cdd05b4e":true,"f522663fa1b756b411c44cf42c356ba645a37984d65c68e724671a8c20f5392c":true,"1d4a7567da0ffc7dd9e4e7d6dea374a24ad6a62a45cf4babc588ad6f8c36db10":true,"b946c6c107cc00effba96c4931da473333d4c987a7a839d0dac64fa124c4bbad":true,"0b125a5526162a5ede9b349b2f936278f4fc7cad56ce0041592ec7781e6d18e5":false,"a39f590b6a44a2e27d0357bd11ce86fd71552d6fab41a4a8689935b70e831f2a":true,"d49025f94dd4350c15fd359d871ecbdfa613b98a214001aa86cdf19fffe9bb73":true,"7be10e7867ff8ed86a1b93311b9fd9a6680fe955d2b3b5a0bbc3214dcaa08297":false,"078ad9007e3c33026ad0e12cdf4b79e76fcb87392dd02f69ff5b246ad2210c1d":true,"f95bdcecfa2a147259350bd398538e19e2fc52599dcc4ced5c3a38162b36549b":false,"a6a33cba3466b7a42093b034883d6988a7e341ce57caceeb93578e393376a283":true,"be53f6780f2860834d2b64ee6b05e0bc0f973683f76dd271b4e02f556afd669f":true,"2a392dcb1a7c7686e77dc6a9a10a9f7789f53578f888a0d7854d0820ee68cf23":false,"087e7a5d818b5b89659d37ab93aec8ed7dab8ac79dca4b505e39562141212786":true,"f9385c385806e9c4edda2c7ca1fba1bada9e9ae96afaffad2ed92b64db40b2cc":true,"a2c1e9be2f4a9f70062e6012a3d3621c97083a792d32cc6961262d069e41b814":false,"30a22dde321f1b38b8a36b1afa2f6aaa1dd566f1cc8ac1e98e78296087b98b45":true,"a1c4d3b87e0e82d11b4ea6415efe860f507bd553154a4d22539c6b2a1632bb68":false,"7dbdb53e48a05c972f310729656f4c7257454ac76eaf58931283183ae4ae35f8":true,"037436d3862f68e21c8dba59ed2a067ace7413e17e86577229273959e4d4bf6b":true,"1246a79c18182ed21971e114142e37376acb6c9d2520cb0ce49831c0021010a3":true,"f601538334e27ff6cafb89c9795a2f481bd1eaeadb289e43994b89cd2a8d879e":true,"5de21df862ba311b49126055b1f5c094eb95bb5da7a3f0d6138cf825fb78c1b7":true,"207f80a5270f9af24ac3119109e62b9360e8b93e2cc32c45c7c5e4256c9c7e95":false,"5a0ad2d3529b559f01ede9f829f00745868dd58af4f1e80a8aa10ed0706748cc":true,"de41d78cbd85a9aaab166471f51d84fea8532d238bc53dac5af2cb01706cc200":true,"89e10f98fe1fbb4d1d7e80839e6a22735458ea456e52c5dd3e27188f44bf8f12":false,"17d04c03793ebd62576640476d8aa5ebc9fc6ed75db25667e465b4463c0db48b":true,"3af65e3d326952e7918f88253cdaf67ae418ad8102e15a7db974285d57961a36":true,"9bea9c0d77c76aa46cf68d8ddd3cfbd2ec098bea4770aac12980ee8d2f46d576":true,"01d79b2b45be6ac5842bf39eeeca5e033464d14283b798b3865c8f62abd639d2":true,"8bc586346c176b62c14bb67f031ba25a7c899aaefe5e88243a36de77c8325c27":true,"bc861a4e33b9bdf05c5b518badb3f918b4dc6ba398ec17481b9c7f8e2296c005":true,"54dcb8e0a409a87cd5836328c9921afab023b257770f66654d27528b27d27e43":true,"9d08b3bebc2ab8f45bdf11ca474b6b2eb0d18ec693907f4a7ee351d56200bd8d":true,"a475705722d44508931d655df3aa76475bf8e3b19c1cba63c5aa192a52d8fd97":false,"ddde93c04bd3c3341a18af0bea6613257e175a4f970f7e60d36f1891e9689339":true,"3cef77039046aec5f5170882c67e3b86bc310872f33671d98741dd3d154886a1":false,"e36037cb9e526feeccb00e0b488ab078d54d860a489d3e8e16ef3d2ba7483c3b":true,"4323c8816adb0c3e7c3c04786ee52e0828d22b9a931f7e4188c0cd90be0f4032":true,"754151b112a4e7b14c63a6ce4f0ae03692f61b5168724167899e14042b8c0be8":true,"bfaaac5d9f37cea64f76a0a2d967169cac902b7ad910bbb9c67ebfd6498f079e":true,"194a6174ec25111d27528f2aea643a527249b79cd2109e434ba2ef7fb79e9b84":true,"6040c1b57b9b6f45878c78ae129949a577afb4b33c0ba2138ac4fd1d51c10e46":true,"8115d5952f43b8b08daa4c2707ff7877005211ae4a668607bf0011f6ab56397d":true,"b9e40088a4213ff7152607f38df5c07d16f4be9baab1440bf3c5433caa51ec9e":false,"d76bdd3c49c827745abd2713ee91f6b7d35722393116678fafbb286183829b3c":true,"9704a8a6770aa2545a57fa5692cb03aaa5ba1a89a70a72666a88720d88bd7c3d":true,"333f0a21b62758ca286c45cdfba609788d223d27eb671fdf68eea5fda5c1a5f5":true,"5aebfa66cf72b10631ca6eaab1fb91e60bab16bc3f4aea27577d9678954d5119":true,"5af647a77f8bda0f0f436028de294eecb09be2761c8aa9c76438e5678df0d905":true,"2e8bbb6d9c8b51cc52e5cefabdef7f7c4fe1a6dbbddc02bf449dc49a30820e90":false,"c9df611026c98ee6e958b2629f087e666291e0a69062dd3cdbbf738d817aa522":true,"c5dec905841c8efb8f897f12db78e255f16bb7e1ce39dc8525bd1e56af279425":true,"e16742ef21091878afb7d37bd1b2465914998b1001fba8157dd086d4f4938658":true,"066f424c41b4684f1c5d8494489d038de2adf84f4efe96027be514dec0e428ee":true,"9d0625b1f853d61d97cfbf1512c34a9c5c546a1c6e6b3232b7b1dd34c094d842":true,"46071cfc791d77e1ef6d10758068f13dfe3f8edb57821afec894d8cdf367c9f4":true,"40a3bfe21403b31ddf3728a8d799aa9afb3f211d7a93f7d54d6d5bcc6a371c59":true,"8dceed6972fa962a9dc65924dca8c87ee33feeb5b2cc40cbd8bcd51e82d13d78":true,"6422f02174d1beec0dbd68fe7b3dd8a7885ec9f0ad5794ed798045a29499ea4c":true,"6569f45f2fc1fc23ce80d3a5916ff778c9f8a11d74889fd3c5bda0fb621ae60a":false,"aa56cc44ef662f2ba107e1ac82dd8eddda2d9ec63822bf9ec993914db565c1a6":false,"e61cce33129d1926b1404c54e3f0020c7c2465789c5490ebc0f3a5c62ccab020":false,"777b5fb6172159e88f6e407cc8fab524ab8f19ca4f4701202eff8462e6f80d1b":false,"daf086573519ffe92feeb70989a9ba8aa6e866798c2c438e429efa6e8de4f2f8":true,"4a1387ea2680b8908e452818333c4f0d73a12c78bc3b4fb7d87194909d02d76d":true,"1d7116729ecfc5adfbe287d9d2c68874c39ba4997b5b18868dfac3e7695cb187":true,"e09be6dbff3cfba14909d70dadd6df87618e1c5c8a48cffac46de6e0532b040d":false,"fbb985bb64f1ca36331cb3034dae792d1670a0044d6f1a19b5067ee34f0ae76b":true,"1f486d399ad53a41f7ab78ed64fba6e9b42fbcf24e9feeea6320dfd40982c73a":false,"c96178ad6f6368d773ff7769e760256909e782182cac524fa5ee08d6ad76365c":false,"164507770d876e87fff9a2ad02a3b3306e16a1384ffea5908c383d683a8658be":true,"83867319a1fc1bad25f3fc0bfbf5d587e8a2a6b4929399883d8d03311c4dda58":false,"324168ff76abeff3cd0b4430d7920d717781a7968a9f301993163d175a04bee0":true,"b9fccbae8518d572841d89ed3d282660f30e210ae8bca78a0f0e944720c0e4cf":true,"4bbc693c69dc5542620d63c861f8ce3e357ea154aaceacb6bbd3242d46e3f410":false,"8e77432f3c88e9e6aa3443e135c66687e3a51f6facab3e62dbf0c532b7e6f850":false,"9193391666f778692fb6e915a093b29d62cbbc89dfe34af30a1325da7ceffcef":false,"f79e911e145f888d6934f7121acd71064e569306fd79b9cba69f2ea1ac1ca4bc":false,"c41f036c9a387668d621f52a194a3661b5cc0f98a9f66c6a0a9eebd7ca6534ee":true,"1b143d9155469b2e6d5ba2e6f49f68f2cb5745fb86f0e153f5d69168f75473f2":true,"1c1da2644c80e1cbbeafa0206ca9f0f2f576d4aa10a1fd05cd44319f37cfc491":true,"b7fa1d30cc1b31e0f254659df487a7cbb2cc861ba6295398c739e403f6c8b6a7":true,"f36a756a1bc5fdcacdf7c5285f383b4e09e757d7dbddb2703fb5e5bdcc792b33":true,"1c47af666bf0dd16c443367d6874be1effe72cdb9cbefa1e5201200640044132":true,"542649e07c860d3c51c1a1efd1f932214c4014d7cee52db08447f040f82e43dd":true,"7c0faa9f6b9196fc75e3eeee9d1fe378778b10ce806590f5583edff03ac3900c":true,"f89bebdcc51a806ae36d37596477e73b50122e9b99489dd9da4874001cddb11b":true,"5402558ec7d06e0c95fe6c2b602e225e52e3808485622ff24205b4b43f0ddb30":false,"16a9f0ed72009c2a1469f355903b297b58c49da1b157c23793d2b2386331f1ca":true,"caf94878b8ebbee7adfbf703264236a89f5e05bfa62f74cfad62986a854964b7":false,"15bf5ab8edf59e6e18058926dc96617fc63ccd49e8800bbd6cfc9aa687f6f82d":false,"7bc74fda1cad304e7bd5135a56890f0cb7e69089bd47e5129fc85afdfa663faa":true,"70cf38adce5764cb13f466cd850c6e7600ad4c1afc7423980cabad6812c5d6f9":false,"823f9579cc5894c29449a3265be579636884c4826853f669f81230c24d976050":true,"3ce6d6e71ce198c801fbfd46ef7740db8250738b2b514d289010ea6e6a65edee":true,"629332b4299de38db25fabdedc75c5aa40f0c3093850717de64f91e732783f06":true,"f8e4d1f61cc42ed496139e01a0bf74fb67d1c2def1c24023345cca4a7d2780d4":true,"90887cc7be95df5fab3fd79a38e92df74a2019bc1be128d6805b92326f1e09b3":true,"e25c6aaf0ff359dde67b0fd7b9494cd4b8859dcc046e4a55a0f4bb2b3675f639":false,"0dca05c534a80748ada2fc9922829b09152a2e54b2091e5f417432fb2edecb70":true,"5af086730068db511001b19c182bd0773a321db297414f3604eee52cc369d26c":true,"095275fdb040b6b125c1b6dfffc6c589d39498ef65e345f4d787d12bb90d7b23":false,"0cef74f047c8a9144f4ec72ca8b9ed9eee87cb47c08c6c438cd8c7fcf437373f":true,"06e8df9939427f1b5c3a3211c1632ab0a344c205ffb20f16022115d5a4ab3e31":true,"ce21d6f5f3e3a23e6609730e67bf8a7bc5a50d82e50d91f355ec1ad9abdb55df":true,"49eac0ee1740d9fac8db0df75b01036816d6cdabb0c9119b06256bfc675f0cd6":true,"628c68792c83da31ddbafa01ce506f236b526c1ecffced60120d3b3c943b26a5":true,"cc8a63fca1df7b8918f690be3bd27c9081742cfff3e084fb7e010bfd50df82e3":true,"4d66cdb2135ff8978374f0362718450f62292948c98965fba17a105c8b291ae4":true,"1a745f8a327a5b8bb03b998950c1b29eba5c825308ba76645ac3276aef6c7b32":true,"ca3d74ba57d801c64db703b09de8d1b757eb9339cd862c5473e5fb887ee96276":true,"c6e137460dc640715ea441640cad94344bf0e76db141ebf19a0f41969b902aa8":true,"11b0fe25f40dea6d97c4de3054e9ff34c0d1dd8672b9c0ad06e8e696ed6e4a30":true,"83a6d46608e37b08062878dce07dfe2e299660c76e2ef4244d3f03fbae2ecd6f":true,"268b530c74340cf526d283c6c1a5fbb973bc77bfe9e85705494ef1c04142cd80":true,"a83c010684941a707bbf5d07c9119eba70df3dd6d79254ea531c453250be5a39":true,"b43c465b5dc101b19f29720e86423ce50d629e846f41ce7b2f68548c884207ec":false,"f1ba28bf1f993ca4079c1b1f07845e4656e2eb4b90e265d852bb17518af68d77":true,"d0c637702940becec469652ef8cf87bc6c25f7658cb32cce09f59fdefc575b14":false,"ec06c5e7a0d1d3299ccb548f802a5d5fb7d6b0d6fee98a4fcb98036e3c5237b2":true,"adec6714df8767b68dfeb1374fac323b658e444bb21ab11a888aa3e8129110e5":false,"a44bcae357642c9be7a4d552435b00638bd8a046d4d730c4fb04475ad0d3fe78":false,"9908545c23d92e34ca6921d2407c6794e139b38de28cadb760a249aaa2911908":true,"202faf53d926fc64ccf3c53ac133e9aef81e28c419bbbe2e759dc2bec9b9c7ab":false,"deea65922e2a5273f8d48a24dd5895a139d6e852d487b78231d7bd9c4df9bcb0":false,"a4ee16107afc2c1f7eea47fc5f06a0860757f6309556c211346534c6ca48fb30":true,"239de6787e0e58d177c5be494a29946c8fffa85718d7e9925d553cec475aff1f":true,"478720630854e5dda2a166d1ca58cd21d435e2ed4d43e7e232da3f19c7b8b2c8":true,"4cac7cb2652b03bc4ad9afa0a393ec425ad3d5a10f055b2c3f5672e5a2a88c22":true,"efbb67c499607507ba28041e1ca605e51ddbadf061db436c533c13546fd29c5c":true,"5c8e3f194e9573b1442073d9d2d7d337ae8ba3865991a66f1fd798d6afd9fade":false,"e5b8015fc0ce68c2e932a1f0eff155a528bfdc64fa06888fa7948539d8479f7a":false,"87d39327503bf7459985c18eedf657185842cfed3d2a1a35237652e75414ef6c":false,"11014d13e391d869e859c963a874d9cdb05ffecee6043a021567b019588b680b":false,"59970c8a4ea1f1ee84ec7ceaad7be0dc6a46b6c88ef55f0ac9f8ed3d22b1dc2f":false,"a16f131b7b09d634cf67ec6172ff0861cdee6c43eb2ad259942956e60876d71e":true,"f620186bf1f2ef61086bc5c597a56cf0fc5e1c3452ff4f706f539797fc11afec":true,"94104d854dc4a5a006d582c6929a99319402b442a2e01d934dfa6f76175f4e63":true,"b7bbab5afcb7e22fa2a4682d0f91f29c51512baa6764290de4f75683527f815f":true,"931588bf93e976ff6e7f19644b0b6f6cd583d8c3398dcde9088f72e5a7033085":false,"e05819e6a264a2280695efda716c831e63c6d6b6f6ab96b853c81f14d7206fb4":true,"a5a34970667fdc2962e6cd24cdeb7c98b45bc519c15bf449281e8b960ef518e2":false,"0165f4a8397fa90c7f8ca55a846251d9ec32acf78fa1165ad8660ac2f734d53f":true,"49180a57a51eac23ba8fd1145462999ad60f554e88a3018c9926d14901f1decc":false,"c2da35d346edd79248920268f8750fe4387b8638f19f4cd987a3bd0329ee4346":true,"f1bc0928b442777cfdae798c20a25a0785024fd7eabe79f392d9f4fef9070bb6":false,"f092ab39a8501d58e692e777e62a15c91905f50ec46e8be81a2183f61f5b93ae":true,"d8c814eca9ea49147f8dfe8c9c9386e638db190e92c6b39969748e485f63540e":false,"da60634f2ac14fe98fef6c663dfe6efbd76ae96364bd4446c8e0c7a18a5eb5a9":false,"f693e58ba15ccc57ba432dafd7f2d4719d310b43c1f66e74a88a605192bb98c7":true,"182f2d059ec937f95e7ff4eff428bef9ec6307957e6607460eddef80e2d6cd24":true,"052260b126ccda04cfafd5228d22e7333d4744f4af826ab3e0499e423ecf1d83":true,"8590092c3d55815c033e8b442b8304dd789c28d2543a4e28a20289ebbd4a86aa":false,"4d9298f48a3104fd60b3dfc737722a1e8cae0c7ced7ccbade82e3d42d26d7bb7":true,"14fbb8d0575ad8ae328ec1fe4c46bf41a7470027f27b056ea7b380be5e672b66":true,"4278f5ee9eb9e9c59adde8d02886cf4a174ea0acc375a34401a861dd6db1eea4":true,"eefb87f8f40c2e0a55f42639b32954f1afc7c02e037cbfdef53a0d63478962f2":true,"b3d6adfa9eb2d8e360c195cd8b78e1522b440a23272b50f171c8510a67ceaeaf":true,"9a52b36a8b86580965bf943fc80f13a51346690c0a7cca1cad88b3ab83e4c133":true,"d671ea7e77f9b662f5569d90b19760a3a0ea42d7cb7060c9b511c21fd67310df":false,"d4e5aacfdf1cff84d0f0b70ed28d1d2acf5d8194a13062ec10ac355fbc907fbd":true,"acf51ad163b409e1988adcfca30c68293f70723ca81e1bcf67e4ad9b5edaa293":true,"adf6e6b806420bf7afaea31e03fc75be483e1de9bcd284aa99ad7a4c61d13bb9":false,"8caa57054e2e5fe1e95ff556a8adba572ee6ad3994b3cce7751670ef7797c268":true,"f942f40879acbec25c0b10a57640d7c0b4bd1e031fb2ad6afc5165e4958907fc":true,"53bd356602e7c9a1ce20fbf14f33786aa5f86a9fc07955f59ee0d50954b71fef":true,"f4f463b9e40638470b95fa0896608c1dbb54386585ed5bbc962b6825b8af89e7":false,"ef90071fa969d216304d3e554a6b7c41bfe990095346ae98cb03279e095a38f1":true,"dff6908476a01e33c4e9f09dfa8241417318250c8c95369241c612c33e7b4a6b":true,"49a349eec819f0e0052727cb2dcdf20f862a9145c8e0797bdc3ce9bba2cf34bf":false,"c0ade3af32db1bea895af2cbfad0c6bf0d77bd8891eb9988b8bdcc3da4e17af0":true,"1f5d0ce89975de46b6456693d019e0ebc5b23443e4991cd9e1a226f629e16bee":false,"f818077cfe288a4c7670a5fefb9ec22606bb071b34da9444085c54f368f5e213":true,"f4ab7d5813709dcb8e90fab99aaef560d52ba40b7f93b2427ec094d5925f170c":true,"f7677c84b33302e1b6a86c40c3369bd29a95960252f2bd365ecdad8f6e7c6c36":true,"352a5087418d0dfcb32456d8cd28ede6bdc219e6e2f5e0b1eacd2a47d3aa2224":true,"51f44232699292e0a2575f7f14b80f3d0935af8f28255b1f37576ab4511c8df2":true,"cfcbfeb9dcd10d859bf34cab82c73450260cb6ab1c0e7f146ef0ba8f744c1e0c":true,"205f3d634228d206ff960b997ef3bc7605246c8413cf0fdd2031af3cf63ddf09":true,"5d78938edb40ce266a0b0040bdb997961e51d7f4ab083d057d4112d01f0a89f7":true,"4d78b769b503e64309c19af115b5368d6c2e77c2bd7d6cf2640242f72ddb8e01":true,"a4346d7d5ca48714b1ac1c1e7eb1b8730da678aed46bfd54c72cee659b68f726":true,"c20c7910c582de3513d26a127b06753c71f1d090facfcfeade5eb38150e4e561":true,"a268c28d361ed2eaba63deac6b4dd7b58d1b5f8cc081eb2ecad52eb2587aa259":false,"48630a06cb583fb15eb8cf88c92b0f2d10d9f1589833134fdeee54170f4ccfd3":true,"018f201f566ed10c6373e0f9fa4516786145e388f70a46f1b4d425612a6aa37c":true,"b7616293191f8a80f9fd63a7660ed95675626572b0753853b316e6ffa9fcc928":true,"a97d661ff7776fca658c17470952b457568147e46f0868bfc619b95515baa0a3":true,"ac4b314d1572e3a29750f46886f36a314b7117dc3bb6304994bf5fd56d9a75f5":true,"b71d006ba26c1f6ed11819382c5b800d7660756c8ed968fcf51d618177d2d19c":true,"778750869f8b843b4a4914542fffe11ea7ebc2c6971795addf3b3a830bc8758a":true,"dde6b6f4cbff0f17dba3d8766b08919a6984ddd5abdc021ed4cbfd291adb6330":true,"1fb1fb063833a6fe71ff9f0af22d65c454a2b0f1717aece87fbc5fff6805fa6f":false,"481253db98820c2439d761a614da1267bd057095bfe19f73501d47b625472244":true,"d3dbf8820db8af29606276ae194468450ef65f49e86c5b2eeeb5ec3edf1d405f":true,"b25bd7d22083bb039b80e9a8d3429f4a56cf1c720a8674816877eb30f69dc63f":true,"0003d127bf8b5e25d85bd3f45a82dc1ddd888b6365e669c830fad90574f7e8e1":false,"7793de246d9a119ad2d82a9dffdbf055b6c62b01303c4aafc083b3bdb03a4935":true,"b54082cf7e309a878d8da6479abbc4a911e402508f32667c8815bfa432418989":true,"019641ae15359a1b8d3d5fb0310537d1da5850a6402973f3b037ac0db45201ff":false,"111dd89814a507147ad2551fab57d46e4823ca8235906ab5c1577780b524443a":false,"03351cb3e86dd64687c2a4f61d8c51121ceff3835ff8eb3a5e8fe7e6877d4a91":true,"b7ae7f458589f592ecd650b02811b4147373ce0af498c07fa3e5582914c8a8cb":false,"0604faf77532e864ae3b378ce1da00c7c8296a8e782387d5dd6956fe1028fba5":true,"7a6757db35d10ba36e14a6a8975fe67906ca0e0200e6a3ace77d842a35221abd":true,"2e072eb2e68ea5c9a991a11fa174b6dd38e529221d3644f701868985a66b5a44":false,"0a5bd33a7ec45313c39fbfa0df845cf14953ffc2d7d42cb2f7267b44a1de44e2":false,"f1cb643a9b05139a60ea58d21c63689f02d9e6b323af4462d220939a1f1b53c9":true,"d32ac1dfb2528665207602e8b827b4c9b90f712faaa1ad9c74d830e6c03cd808":false,"852bd52b01dc65e82a8d743c493163a38e007ccb993e30b75a264c4401ebb5c5":true,"02c4aa88eee2f04b95e199183dd08015f0bf3f44d1fd1aeaf25ba390592ed586":true,"b044add01a3d6c4bbc7ac5f5bd199a4a04bdd4c6ff18491541e0eba8f2a66c3a":false,"c9c1614cd653311f9423915f658205f011c7c2243f9654184137b4ef514253ac":true,"7575ba1dde2f60f466ad6e774ff56f32899e03856fbd30fa8374dedab78b882e":true,"9e54e875e7d9dd82a8db8ba37863c390744647335fd533173f65f78afd53e248":true,"51a70519307adb3882f492c58125b8b73f01f2b7e97a26bfae825d3ad64dc68a":true,"0190cbd0ad4658afa665776392c213c15688fce04c91d57e66f29a37b633ad33":true,"abe7cd576005623266eae3912c705850063986dbe151a1e1c382afd7504dd5f1":true,"f4e4d47455a45df6cbc25a5e0165fa672408865bd52b883bd639a5ef1f6a77cd":true,"d95bd2f16baa4990ce86ef96b070c3d23d37e8df2b988df7ce2886f8e65ec09f":false,"fef41aa1ce7abcd0e8c2529acbf2bd7fdc12f2b864829fba575929bf0a3222cf":true,"7065c5117530e61f05759eedf73761396a4747546d580d669562e83aa2c77f7f":false,"66ef4b8bf1fd58ea134df961980532d14bf3fe640482875f2b27efe33ce5c9a1":true,"0307716ad0fbdbbf1c8b4b7b2cd1a624aff73aa416dfc2db850d682739899ba9":false,"a40f5787c56054ce932957844502ca6c9a1892334cbf6e92fbceb3c85dcb8c1e":true,"8f313088ca104835df3a0827f2bfdebec9af4971c31479b0a3f2f657a8a4c65d":true,"ccdf554cf6c4571bb23966c2a9d35444dae0da6b62a0df97c591e4d1c57adf27":true,"7c172a0a8c2c38dfec269df9a0e0de71779fb39a8c63bdd0fca90a67d8866add":true,"0dd7a41948f3074b9f01a98ed95aba1fd4949b120d5d17bb56482d40e7b354ec":true,"2011a12a6fc7b1e23313d4370123a8e34a7a179e385fb63e124505c978e8cea3":false,"10935f50fba4673c52ca655d5d7654fb6cce259e9cb0e05a2440a9c980f17e97":false,"18f66f1d60cfa24b1a91d81c52b49c73f5805699c09fde925ca5a0636872b2a3":true,"11901dd7cd2694e0d2e6122a3da238453e33d01ef2ccad532fe990be59ea7de5":false,"dcfd3026353d1782bc2f06bd9d8d0e5f8495b759e335ffcbd7d3991de87422fe":false,"2384644a6b18e635dc58a2ba51c0ffced0f61bfafb5ae8aa841323ec1ddb8929":true,"b75ec9bfd0d07f044edb0f896d6b6d1804058e4aac11ca49cd9c7c68ad47e286":true,"32972e4645733ab9132f8c8631108503dc982fead1a5637cbbb0490960e92081":true,"2e75a774de75f21e804948753322bbeda335ae321efe6772d6bbccdcc5e1feb3":false,"8efb20daafe81a559db08c006f6a2dec4ec686fa57cde5ea7c21b60c15c9fb00":true,"b734fbdb4125743b0f7f32e592c7d87e13aad6da991138fa887cc2bba2a00490":true,"85e274c99580bb85669dddf4aa09c55b8bf80f49e3610e46d5950d4ff1d49dc0":true,"26774e695d5416b5dccc957dcbf0dfa0999627819aee9c0d3912a0c07985dcea":true,"a26afcb0de6c1e7667cbc6faa774226eebc2bcd902f2655bbb9a34b705fbb129":true,"21186b5496a753747da7118fdc53915292de7f424e1a49a2bc3185e89b76cb0e":true,"549a93d52e79cd49f2b3f87f8c53be556e8aa326ce7a6d24c247d89be1b6562e":true,"e300e60258b0634d8d6ea453ed1c38655656bd0b838b5c8c177689815397022f":true,"b966ac44d08bf7d92f663c4b4f5ff886fed367d2cd10a5d06fcc0a35ed607f59":true,"7c70be4f1ef38b37b8c89e725c609a9ea898230ab0281ec9e500b86e4e66b51b":false,"84394372da98631657d06203fd3fc07e8dfb2dd098000995a1105e5e3e470ac2":true,"c7f27b9b47821ad0b93ba95a44b2afb9c2296a92187e12abdfda755d4e86afaf":true,"f057e8df756348efa4d98faee8415ac11147d0ac1c3f007ca63902af6f8af983":true,"b44f732b1081d0caf8af72b5d4e1653b9057af3551b22e302bad690e6685e860":true,"add4950284f3b1b1e70eb4d2c0d2dad7631d75f77f7dc32fc5dc233a0d88f349":false,"ca5b318e85ac634b8d7987a77350c3ce8b1f899debf0913b013df00cd4b64116":false,"5ae7a873244d8d6bc7b1fb4a452a5043660c6ea86718c7c2295b0a0862dcdd22":true,"891010db87392d31be003614c4fe8aa7592d9a3fd8862186d95a27c2407de258":true,"afd10421c1cc0f5bd6336078f9ead3bdba5dcd8818e3c95da9f546f33d1b4bed":true,"9f2841d72ac7df94ebebe919f0ddb2f819298c6deb16f44fd2530035c3135300":true,"884b6e0ddffd87cf9bee32011bf8f6a69beefe31fc227a145d200bad8f2a25c5":true,"d831e8d4f4c1513bd2cce5e347e8635ece5e0577f5c1ee34d563a8de4a8b4dd7":true,"c502ee5865e2e8e88af383e1da1e91d8d950c773574044f05473c6a63e883319":false,"0a771b5912c20216eb22922338eef601bb23d3a5b9adf84e82e97010e11eed22":true,"914011fadcfa8b8bb9f011ed3333d90adbf3359550f43f10aa76441cb758375c":true,"b4afa367c8a1348789f4b546487a17a96a5d1bd6d7a0e7b80d735a6b3e8d3d60":false,"74606f358d15ba2a3bac042ce6f28715d2a2e20807bda6ec2ac00527200a9135":true,"24768d24ef6cf8d6484f384b63b215c78085f08b2f3ed552d48e1d17870d67a8":false,"cbcfe21b888f0dbbb094ff9d5832ac94ece6abcdb7c8d3e8cfc7da0debe7b9a1":false,"eef0d4f0ba38c931a4e7f90ccaec429d37fc5d19a69766a4e5549fdbaffcbfbd":true,"66b06b6212c0f6e48abfb4675789599a45451dea574cc84596ac9876942f5188":true,"febd37564df501b1325fd583bf40f6e10ea764ebd966b4da1b7c01d11a396369":true,"ab577b870f2ce608b36970142f91c777f2575a8110343f22354d0848a75c1fad":true,"70ea67ac6c484880784e7fed2e6037f98ce4151cb0e00ebc20855fada94ddead":false,"240250d341f7bbe8d81c08c6997ccc34765823b371e4962942f42699317415b6":true,"526f0175149b2549b57afdfc7184b59b6c877b822a086a5a467fda220cb2aa8a":true,"22be9a8a937f3cb0142879b63a6420e5aa2a9554125252941a27482fa96df481":true,"eb0eb85df72a0d077122954bcfbc71c3ecfee8598e42ae83331c3af482a704ea":true,"f62c1fc4cfb8def60f649f3de7756d715808e9e81bb510c72b106a6581c57d19":true,"3a3fcd28906d083e3f4bb5526a896f93d415668755e828d200cc128597facb84":true,"1078822c789bfb66bacdf909f71f4b0bb056819c959405e4c264c5b9324bd2f4":true,"af21e7b4fe9b95001bbabc17cd44b21b41c8f90dcda94a13858bd27dbd570850":true,"4febe949a4d5fa8166e2a5e32f451c84e113c498fd4fcee53bfd388a76f2bd24":true,"b6b4b3e715b85ffe9a371f5db5cec7616a57632cd6f962fc34d9515a7eda71df":true,"fcdf0d2a8fe7f3314f13acc81234b0ef4c648ecb5c7b6296116d44ff772ca308":true,"0d2323b8cac16ca99645386f9e1e515f4468bf412f41a867d361b48a6fcb9226":true,"e010fa516d3abe7e543950ed20e0874c23017b2c9038d601fc08dd4abc899f79":true,"644569410b06b3656b01f1c283a23b257f34bebaaf82965b9d50ce279ecaea42":true,"70c2207c15fcf330bff850e11945b26994a6d6798c3814ac87da68b2405bd43a":false,"55b8318cb44e54d8e3063a49818eb5d0627e70ee45d798f03fb4edf5b7073a8e":false,"2ee9fad8458b768ad5b7c0c8d903a20d5b1878495742b27f4acf665df068b540":true,"accc3364d6cebe8cb4a7e3de407a7e3e7635f13effcbe1fdebcfb829510ed428":true,"9b5dd083551dde939629a587a2a9345fe092f79d18831a14e5f766680f3fe06c":true,"34db5ddb6fcf9f8cd445447d387e3f55d8ce2b8deb354aade4df1b8922d4ae29":true,"3815ce45ef1bba5f4f2f92e04910e04b69a95e222491ad5c5105266d23297445":false,"038e54b54199ac91a245385951deb090905d2f1429d370ff4fcf6c230241e6c0":true,"23819b7a49126a582fa52160648e5512f1f7838f9740e72f022259a265ab045a":true,"8ad92fbc7b3b6beba42054d25346f1460df4941e54b63a7f304961e3e88edc2a":true,"fbf91ec9e48ec2fb96ec9f819aec84f9501876a78d7b0031cdada09322a78967":true,"5df5df02c1f720eb2c7d0049f1d315f8d3fbbb906be1e0b18d0328f772631032":false,"4096d8413027f03d88d59913037c85eba4a9d57d56e601bad18866da7d080620":false,"5c8040c3ecd279e4f4eadf7ba0897425a4bdddc2228a7380e478f30e87fcc043":false,"5e24fa090115dc59bba892b04e55c86c47f53c5ae692b3d63a4f5c24a4ce8c1a":false,"1e0ac23abdfc46143e9632737c8a0b974a558b292a9740fd7e2c1e6ca2442c70":true,"6fd08c47ab5a20763ef32752786c407d3f48584f4cd3fbe5af947c9e4ba78af2":true,"193bf28c01a9060ccc9f16371e264a9cdd980ec734fc91a33c831d8f6900741b":true,"7306586ffdfe02cee848bb3641b9191657a2405445de57d62e7f7a698d7db3f1":true,"eac08859c7dd9728c194096c9c2ceadd9ced1574f7bb8b1a0bd4f375c24f8ff6":true,"8ded38204e58b3f8af8d1618dc23303fba0ea8ca5d526183d7f091b774fafc4c":true,"3492891d53e44141209ccf6e01c6e8deb0a14a8c91f657799de57898aca0c7e6":false,"967160e68f0ae2258da59e9432a90971744d18218b67f3d9422bf137f65920e8":true,"cf0e94536c43240674c9b76fb9d4a15e4a26dff6cf3479fdbfb4b6b7b31f2d5a":true,"2fd99b03f77cab8dc563ca64e7f4b4c8c313d6e163b2a5154c51a6be83e78148":false,"a20fe995c07e18b6acb36c2a8c31c7d9afc837f9bd7514ba4d52a90f5cebda05":false,"13f1ba57f331ed1a1cacc632c677a04feded55be0d4a40e5dedab213a655a4de":false,"e9d253ecc21f9dfcded3ff4794037fa3b2bbff0527eb54368d8f0a88dfe0a63f":false,"47f05bf978c9e085330725ea8e7d8e798823631a72e830ee3404d0df32094e6d":true,"2067cbdb4018fb34dbfc552ced3df5a51a78856cfe42ee9a2c41b63391d3d975":true,"1b517ba48ca499ce30b59f04083e282f61aaca99bfb2876f7a328a04c1f0544a":false,"b6f1d9280ab8a963a7d04d59a49956f56bee0bf71506cdb94252a2660a1035ce":true,"ab52e2cdb2491d2cfff5cbee7171ad4b8731da5859e1a513d2c4841fffb786a8":true,"1144c1b514bd3c8ac849849421845e18bccaa54e9ee13716b4c1ebcd228ef1e1":false,"07f8942107dd987f3ceac08fb22ec5d384784048fdb8886ba22c611101d20392":true,"26509dd6b2f2f61f75ffce041be7f30eae3453361529927fb9354c079dbb4c7f":true,"db22e873b50ae51e27f23b80ef1beb84fad425b311ddd801d7517f9d5410c8a7":true,"09df7b1a8331849b1908ad48cb88a2a6f4c7ed46ac29d87f8da1ce30c26c5783":true,"96c22f991d7b9a81dc6bcb98de941487391f44d9db2c1add20a1aeafa7521639":true,"fd057fd55574b5c9fc89b1f2319cd38de466f021121878956b27101f5c36fbe6":true,"e0228deed375d120dde6c47c1d2dafa9d41f00bde890285942affee8915c45fd":true,"c8df346efaed758e88943d6ceaf4f40c4c22c6fd4952ef109ffbde8cf8c7d837":true,"dda54dcddd102c1836c356d00b82895a4f382be1472b73ed37bdc4948beb9919":true,"b0df11c1bfeb51ead727ef48b8957086f99a2b3bfe524546142797a3fe180149":true,"10361393ae6ddb3cfa27f22e4410ba05641f7d382726f4c602db6383b9574e90":true,"52c0aa412c6ac8f70292c4d8a34c62119f7e8c7c58f8b9a8b6b52cd855710195":true,"5eaa3f52371becaf52a8b22a29a11a899a4853396a0fb46586f10cc6c5d0dde6":true,"08574f7f85a660ffd3fa9030797d19fc09a64dde9a82a2b69ffbbf22546f5ab2":false,"d4de7b687c3ead878059a1b9d5c2d0261a1071a2c9914b14d407bc21cad52f2f":true,"645ead206252d0c8ba22f2446e471bfa14bde5e615ad8e30c5f308c9746e98bf":false,"07d9972e433e7d82826d9de61a4b52477945441331377468340cad36d566ad7c":true,"d003045a0ade3bb0f944323be5abf94fc293ad916207088f6b20370f2740a1a7":false,"ffb6576665fdf4fe540e978b709be9a2742bf5f38c45642cba7decf3fec23a83":true,"2a2d5ded37bb57ecf8af68349f002984cff84ddaf84f0a71be3690f77ce153a9":true,"52e5fbf125619e459e2a61fa37d0b4487dfb19b399d671ce6be97d4235ae5e75":true,"7bcf752f8857fd68a020ca803e0bc4f8db52fe73977804ad7b49fbbeac511d6e":true,"0056cf7ec517a0e12bcf196233b3c9b6faa241d33b4bde272befb3601c277398":true,"53c6c63765d724cd13d2219e25f6022a753f105e46a54e69a63741bde5cb96b7":true,"4de9e34a55ee797133464bb0c127fdcec1edb0e1857631cd29efc10d2ec185e0":true,"dfdf8a47ea42dba6e071d147709992e25b10c181b2ba666ffeb3d3b23ab1ba99":true,"0255489dbe20226b8cc3ea06dffa138765289fe245b3048c773d925769ea9515":false,"38ae3540f9f96e1edcb9ac881b31d9ed8dfb2ee477d37ab96b8be8a098854af9":true,"1295b099bd9d171d3fa30190dd6d0e8771cfd1ae60ea96034c2f7c5cd6e1f0d9":false,"49e24459e6ad7c795d11ffc96cfaea9d2b0f13434ed3c3e7c1845c5c5719316a":true,"298f24df04fdb7e6274a1703b435cab5e62b17c408cc8571d5e841914d258707":false,"c9c213c7d6ef5904a57dad3629f4bf4b0a976d906c3fee36a448b35c7a4b0b4c":true,"952692fcce400fd868fab601b58dfcab1da8bb564003f509bf3caaa17e088d03":false,"5d7146db162bd7aaa62dfefb04f01fe02ec871f5aa152867e0cb98247084041b":false,"94a0f3a6dae384ef13bebe781083b855cc63994c46d4583782b1f073969e8b59":false,"f2f392a733e40acc7fba6351c332332e1cc95775d8807eb1791885225892126a":true,"443c71c6e4262512e658f5d0e90f883d40bc42e54dcf606ede88080f82b7019e":true,"3a69a1612ecf9248e43d567a4bf0e84fca4a0fe213da29dfacfd3e5f3575e195":true,"6ec8bd388258699bfdc78bbaba3d96ac3aee7aa47bf2b9ee57db530fc8420782":false,"d45e7c3ec7e9fb3e0e9708024f4a1508c9c475ed618c7f5ab7fb7410ee1d660d":true,"f5624b5f030e37f4c9955021ef0e979d060296918636662726ed1f4cb79fdf2f":false,"4502e0a61005598f99005cbf4f7122ba8e6184dc2ad51d6edb5e74e5decbdc22":true,"f63f8e6de7130b35700a13fd08224b45f91589d2c7c408740574ede7af6f5c22":false,"1f4f04d8a3ec14c96cb45ff3be502268cdb8ed10b28b212c3976f35aab9db01d":true,"d9242d04310149c25043738e8a42e740d1e4827f0072cc8fc6a30559358d082b":true,"6a4e0cd728504f32f465d9696d8fc82ab563dd537beef584719414d1f2d2245f":true,"48d0871ece86e47f35663c065a7a66e0ed25f124017c0dd2e4dcc81fec0e9b6a":true,"7ec22ce8401de8b46adbc31b27b8281ba5edadb0bfc27da043701169457ca15d":false,"9bba96b424c370260acd2ed5d265d24eec0735be65a312e57ce68a37b34fb4cb":false,"2fcbf1606d0cf89987afac6074c95b71e9ad301096ed2ad4ed4e035831844cb4":false,"73f55e79b571053612acf096ee4c375764e2daf38add08ed311c222dcf82a05a":true,"16ec04d1b062a2837bc5292ac51198a385e098dd5b930efc8124f03334f7f448":false,"426c9fd3db7c1690643b54ea39849c36572378fc7a3520544f963a13f0004bec":true,"3e458eb1a57fbc949be22a0c0444c866db10bc34b6581f74954be55a7a6aad16":true,"d7ea5ddaf8fd6b8eb8fba68121aacbee1e14ca855150f54845f5d9cf2c00593c":true,"9e263d5c65cc9ee21b66bae2023ca870a6e3960b9fc33b8524e144c71ebb3c03":true,"886ea2865645964b86106eed1f3a69a63f5912761a73dac1d50de00f0e16587b":true,"7a057d30ec2c775cc6ec88d61ee6dcc9d0a0137694355cd7bcb1768001585c1d":true,"8eed3f49ac81019ea0e76c0c89c3b48aadc1ec6d40815f8eb9653236aea39e11":true,"ed4e89711a9744d8d678237d024399de21f2c78bdf2a8cb8a6ebefdae5f715aa":true,"c7fb60c537709fe2a5ba779860b53c267eb343d9271c1fcfcc30feedaf805ea1":true,"3fa1f90b0f8e3406b687f6ca586394fce756f37ea9996e3385a1a97ada73294f":true,"de6a7b38ded7f12004ffeabb5ae067c4822096e9d2689b1655fb36fd1f291fde":false,"66622ab7e9486128f68043163ee96c029fdfcadb9deb2115b14182ff806abeab":true,"d5e195e98e8b189616bcbdc92ccf84974d980129f83bbf65f278bd4d17d9a11b":false,"11e6cc7c0cf9a3fade87d3abf2b3876a587dcd2133329aa09a5691d65809c6e3":false,"fdb859134c764231c5a50eb9a1d76c42e484c2cc621d774f4f3a70c778b1bebc":true,"fd21bf39fbed78bc0fe8da50836155deeec185b89f7b7a29d6f23967c033fccf":true,"49a0d9b2def7d83d648b215855d2a19208ab801c4f9f7a9696c698d06705cf5d":false,"a3819f851477c0a3c4f205ab3ec06cefc8725176feb065b83fca5708973a4885":false,"938ac05267aeeb2e24268352000720a77fa53f154b45d705ff31f1769052a18d":false,"050602bdf42ee97270e58b4f52df4fa9d962cd1f98d529511ccb84bf4c1277a4":true,"4ecea484a37cb0b909db475c6507d5a4c712ea087f63a7d746feb096da8b5ddf":true,"d925ace3635c7ca73fc5df48269034241ab48e053bff9e0166ceda97c18a6dc4":false,"fe433e82068e35a3c40eef6fd9a5fa1404e0380aa9c34da5080eaacb887a2322":true,"5ea3fddc76b13c0e802e09192864b1808dab7c9df182d1f04a1a472efb23ffd0":true,"9815b0eb91e53af0822d3d406894d95f90dc60dab32fe568ab701210767032b9":true,"4389849a7930f1ff35f23a772e0d20b553ae2c19b5eb4c7eb83a903c0a17e670":true,"4f7aaa824230bf15fbf61a42c4e8e4425995c879694b5ad593734be1aeb31b0e":true,"66dd795b91b628187fbb000953b05f31888bc6b87010f1921f179ad680add354":true,"0d50eb54263ad235356c6eb1346f81f2ca77ff415b2a7713996f1eb33709713a":true,"4ddf0e11ca38b815b89a7f49dd9a5939966f0bcf3442461a637d8cfa4be0bc4f":false,"985200b114a8791a9af61bd224d90461f14bcd01ac289833850dd0e90894230d":true,"50a2111faab13b6a827826e3701dc664a9636900cca1082c960a2c65d2628c92":true,"89626f7da633b9d25e66187425adc25888653d557d800d41b2601cb713580767":true,"ea791016465c259fbf6d950becaab7440b79895351a48593504ace2eb8bf691c":false,"e23435ad2f7d6b4a56dd03cd73044b9310688415537d9c088d9a11e0bf3f06ca":true,"f461b77e981c27fa9511d73ce32fa9f5889d6be2aea9a825a86dd81dfb3ac9fb":false,"a608b47b760031772ffdfb5db6c384c38dd4713f0c8b7461ab54978a1962e9de":true,"abac8b471e9f4cb406f252ef4785f308782a4f19fae211e2c46f69ca191ff7e0":true,"b6c4d992b2e0c862db15ba49e5dde06cd0259a0b8f1698a9726294f01d54a4e9":false,"0e8376532291ce88a27a54eb10f13ba20886d8ed65387bae3c56255f41ae230c":false,"accb7432b12a0a011316fbe8cd2090337ce13e3cf165922b0e1ec6f60558a3d7":false,"f93c68058d80dc1a4d1d7b09bf41e313f4ae3617a1efd71a8f88ebf3e9d80a49":false,"58c61c980fc57c2cb0580a118c36775efbada26370a9d1acfeddc6e2133d712c":false,"3154d1d7e88ffc4b0c0f2bd2660cb8b6fff88e45110d4311df00911e4052bce4":true,"ad07a7bb5727fa53c058e0185ea52d010f0fc49351167fcedfef790a5003b5fa":false,"580bce591a5c919123a3d27c7242b22c2bf823eb0264f423558f406289a89085":true,"ccbad8fec55ff098c82af980d889a2b916c7afa1343bde1d449a881afa8f7efd":false,"3ae951d1105aba10cb2eaa10ee8a35ccf7e6c0317fe4086573f81c265dcb868f":true,"52e008f801aca4ad9fb2168adacd8fad30b103e111a426f7a11de85285aa55fa":true,"78b620c2a1d2979c940d1a7f6a3a006ee03f6447a2908cb4bf1c1dbc9ff44e40":false,"cfa1a7844d5d08c6442215807fc4ae7100e3af390afdd91e9891c4d65b9a379c":true,"7a3d520639be4eed5570fe95887e5a7abc22bd58e17c09799a1c4ae9cf9ee2cd":false,"caa2df2b369d940278292d0efb614651191e5877dcbe9b1512b6612f5b0426ce":true,"6c8ba22a6207a2941d05dd4f49848842f56436b4c0eb98e837f09e880e6a6a35":true,"3a5d0c4ba35c03def537a095cd49e3802a6c9bb3f2743d80f79070316b45d2b5":false,"e59cf747a6da9cf232d18867c9dd8d995570617af533a1be07ae89c9cf02e118":false,"dbce76d9e420d21b8d64326570fae08b67e46ad120f1c2276342c2275f2489a1":true,"10de86575a1fc811a9fbb88b56545c578704bfd37909cd3dd9d87f86f9ac13fe":true,"70faf568745f4fa9c916005f6f5920d7fca12398df3e40453b5784aa3ecf9238":true,"43217e8726fa7793348a4778c2537e16b6d95df5b74a6eaa910305631f4018d5":true,"3f94e7cf20a1af72dfa4c7af93eea25bbea192cd22e05ab87ddb153a74b35569":true,"3f6a736c172c91c29e404f9ef10c198ecf440b6e5cb4fc35e47e1d85ff354e6e":true,"7aa8079d04dfe0ad82ab9d242007bee6cf38881876b77acde63a7946116c80cc":true,"3d5352d49bb5962fd37c7d07dd52800629937c6bcaf7a51249f2a15849e0c3e1":true,"a4fa4e304606c5525b1ea7dfb36c34e4b9da7b8bbdbc96ff8c9bbd7682c9a9f7":true,"89edcb3a6681a6f433089dcc252cc987b5ff54e143afe66a293e78eaf2ecdb46":true,"4191960eacd95cd053755ed45e5a45336174f9debc5e62487ee25e64586c17d1":true,"b2412048e3a975b377c03d5d8af3bd4378412b9b8a7e4e54d3f915ecf66b4954":false,"be3c97627f0d7577a0f2c06ac94bb65e14a3cd680b719158d378b42919d7e11b":true,"6ac7eea8f76157fe31bc856bb52713e9c5462b36baf801816faa621b6b6c4191":false,"6c1622e7bf572ad3eb8b4b35e5cc3c9b87cf7b6c553b793ad77580b7a823e508":false,"789a4795538af34bed2c269c884bae7b2f07b31a5aa271b1fa1f110b17f235d3":true,"4eee628b2de9a1bcd25b18283565f458f2e3ef1189da1a91b9f2a74665fe3288":false,"64355dd39366cd832322d3c30a4957ce6ac517fe4c7a6a21b2290c8a98eb13b1":true,"b04034cb361f415a3b1750f7c67fe3c117867c8a65fb9c0806d30169009b486e":false,"df656c689c83ec6743f602b8eccb3e812a9acf971d09101f709782fa0362f0ea":true,"215a951bb5f89d90e8b395b42e5a793d3523df3bebe497be64547ea013bea1c4":true,"39b741ba747ad94a794da8675de0f06e0f91db3ad874ef2f08c600fb8e3a23d8":true,"a722756fb014a2a51013907cd5b3965bef1a0f88626675d9fbec98dd19a968c8":false,"1131f5d37e0c91b7cb9c9d68e44aab6145e1bcd10be897734142d799a68a90d6":true,"0ef40260b4b749a3cfaa6a47eeca3ea1f97a0019386c89d34acd62cd1d0fd917":false,"2dc29c7451596a1769e31ba3824853f6561472b64d8e11cb8cedaef9af2eb044":true,"a050d7e5fcf1e52634ae083f78604db8b7c025deec7d9975f6619a9677fa17fd":true,"51ad197511ae4d06adb12242b090315503d2c8a24af6bf0ae53f38ec37319d52":true,"aa36e080530f1d591a4e2ebd250e0d415d9bc563480f1ba9197fa8daaf265747":false,"a419d459f6f088f4ba7a602fa4678853812c74259dece36b181fec021949cc23":false,"132c1576d48212ca969a04d53d02a515da57d6537b5ce28ba519dcfdbeab2cf3":false,"44a9a85a9daaed468e59cc9b69fce007d2d16aa211e0b8c4dec9d89c23e28715":true,"4afe353acae7fb44a749cc3226ecc2a5299f0f5a3177c4312f5d3811b11bc346":false,"01572c543997c366220c506e176faafdca4919ff815be74f7b445e8c3955a0f7":true,"a3a4c46b82b44b8c40f2e2bff6413a46dd544d6e140d932145eef967281352c4":true,"4135f38513f157c3de99902047fe0cd86afbf4737e32c2c3e3fb9806a0c6e720":false,"fe5fd1b5d1382daa2782a6ab65990ff4c10da98ae16572977a06c2adcfad1706":true,"c9120c5f2ee23a8693a6bd89a5261e58c4fd8e11fee3ebcaa0e91de737efdec1":true,"9d2cdda16f0b4dd44295f948732c609c76634e984173beee16fca76b16f53c75":false,"f70696f781f2fa521ddef2d629a79e770aa5796f7a2743ef65b36e30034e0f13":true,"5f99b586880f4b961af2e1d1237991080720ce961a8b59c947698a7ea8d917b1":true,"453fe0171da8070e70a24571bad4028e7b408801acfae3b6ef356a4d07c79d7e":true,"0155039bb74805a2488e8cfc2bc89e97d353212c82d695aa3d4c92ea5bc9781a":true,"fdc8f5be933e85bb3c3e61c7f3b4054192044a2eb75565678a6fcbb3129026ba":false,"fa1a62b349674c27159c0641f839e301490425ab949bb7078622916e8bad217a":true,"a7a657efffd8f24314c7239e34f60b8ad00e5c2ca81eea2883eb90a4aba1bfb6":false,"ff2a6ec5ccd6641828ec2656931924d8ac8688c6904a1497b318f0e0ba7a491f":true,"fbf11596720b35a498796b635173e37c4f05beb64089f9315acf986f4a0f424b":false,"14e35b378511ce748fa707e4d95e77e52efa0d916a84776e119c1dc38dced615":true,"041960a3d7b7edef47239ec3f75ec9b2a21188d9deb193a0f4f0dde3b1c5aec6":true,"caddf700f57b64be5195a9ed112c5e3e9e0a6428d7a288fe169dca14d4005605":true,"91c6ca70f25e742b4ab6f33443d32e71c67c148b76639e93f5d0c9e11c14519e":false,"12126f65e581f3586ca777db7f29cb8b4ba6ad1edd3a8bf1b960d3dd30ef021f":false,"20ce9eb4cc2959b2c088e86ed381f56a9d94afbe551b9ed924be7d2b0d16b66d":true,"061f0aad442b313d13a0fa50ad17d0a7b61b7dae922822febee06f4fa163ced2":false,"d0255231c51d9cb3e5deb543603c7187d2c3fdcb6c6b29ad06b5b795fd7394b0":true,"df5214ab3d4a0cafca4bbdbe506ba1c2a1a5b7a6ad472dbb1f737b20f7e4690d":true,"2f374e5f528db6120f9705ee8c396b91e8d90bfa0ea68d513d3f7857ce1eb871":false,"2554e8c12f80b273591ce9cfb7f19a31ae1c6f2f58be4b3045219b4d9578f836":true,"05a113977f149f389f054121444d7a56a5c949c2ba8aed61255d05e0371481ea":true,"5459e7c319b535965c436cd7359211ba40e17c9d5aae608a0b6145b1744592b8":true,"72d3f66420fa0344bb7f19de77ca441cf5cee3348ab28e8bd7e4f039b4cc2a2f":true,"10349a8b5756e2ff31a70b11c18f5d64036b06694fc4407c5cd410a8144d3924":true,"90bed7e4f112f9181c90f12673e7c066f709c8ade3cf592e4269d3077a532ddf":true,"d4a7c25ba8b27e2e7dbf26e7320e9da7eb4b814a0e87b2722a97e2034d8f9c62":true,"818893bb601bd429e6ffbf9ed588fec8f1d11dd5588a24874cae7dc8cf927892":true,"af1e0c9fc97e80204b259f04b3c740357a92da3a195c23b8f4f6d5ca779f281b":true,"f72ac535d9f58bcf53bb89fc01c645e0c4428211a7a27c40c40ebaa4d65d90c7":true,"466b9ef029a9faedcd3815767ee3173cb76df1bab22a961809d9218ffd8bdebb":true,"c5170906f8af15e1b151aacb8700546ea783878b1713bb749919d6c994873822":true,"8e4b072c9791c1da613446b63446b6c490e827549028e962971b4a1a483ec41c":true,"afe33499039b9ba2f6e66a7f2f6d3340b36bebff051b642b330250b148ee277b":false,"dbb0a394063ce8b8f6a8bc4cb12f5c3d2762eb1343893077e179e4f38653e147":true,"b15cc4f61c600f2685ebe34d999a7e044ba068a74d1ba62c60d49047a117c30e":true,"600b2b4b994f5c5ddff8c0d39663540131d226ffd157889c1c1a3fff1028e27c":true,"47a5a34afef819c81aab027ec54d3f3abf22f56ceee32e0ae1a10e1939a4fe06":true,"ea569fe80ce60a7055bb6a7391ed4a2f94e0018174594ebea156622ad9862f5e":false,"81847cc0f40343946cc68fa7ef467be52487a608fac1d4295008fac092d24529":false,"da77883421785254d408c0c393be95c358f8bc692d7d687f5eb8438780ca35d4":true,"9df58cdff90bc03f1d0eee6ca261790e37846dbd95919389562eeba012e70776":true,"e90d77c926b374d4ba021f8f83e9ed0439a47d429fb7dccdacb220173ca50e00":true,"5495a8225ada4cf0341dc357ec2957ac7469c9d22702da0a07031919eeb687b8":true,"5bf8adf78f034aeda00078677c7fd9b56cf91ea566159f7775e58aad307ac331":true,"bd4362b8f6dab26031d421b296e330d82692974a835a961ba4815b92210fa561":true,"66f175d400e1645178d3958bd11264ec86f1c350092aeb8e6426914bd29af921":false,"5bf24ce3b1b23bd77a4c3454dff375598f1f4de27e257ecfc0b53ada9f6639a1":true,"d42efdd5c9f67db029338aa60305b7a05dd79c2a86b831787b9b466e20d07cc9":true,"ac5d8a216abf7fee626dd2640dc67b54ed7742cf7549f0f9e2107483f6151658":true,"294abdd07b6cf843fbd74d330e228ae6253a6171f8254a741ca602dbf1e1051e":true,"698e34b6dbb48098dad4a287f7b1820a2fbee2f4e2d9087dfedf9e66823c10ee":true,"64fd95b72258ac62506bdc2b2e602b57a45fe562cae459c8300298430e5ac053":true,"76851ad21ea01cee724f1e5d1805d8fa9ed8c0cdcd7c38c087f4d820bac4b202":true,"fde9fe6e130305201d6ed891319d3be4c01d4a71171c29410edfd870a0435e57":true,"5add03f4bf35984a417f4e59eb47e53766780dfc4ac9969655b5c8ba244bdf08":true,"4874a51b3515fa5e75a279a3bc8dc1b6bdf90e07ba3ca2d804a5609610f0ce61":false,"cfdfc2ac7c856ed5bde1d0bc34a6cf550599ee2cdf5613c63f08069756bcf070":true,"9a23803495e4ede8528bee9a06e6ab3d8b44089426150f4ba658cf9acef0264b":true,"dc0775d7fe9f10c2f0e9eab341d2b927392e564d36bcdb7c8fe3605e17268d5a":true,"1d8ebc2ea9df1ead31632ccecd509747ec241079f065eb717c6334669bcc4a30":true,"0f4494c3d1fc699b561f1c536533ac832be9a2ef85031e96727615e43ec7abe1":true,"04c7cb05c59cef8510845d78dfd81c848bf0928f11fec7c3b33ef11199ce184f":true,"1198a8a02f49b7abb9d9e1b958f52895dc9f6a782803e0cce931fa7dec2476db":true,"fd1688fac58464ffed7cfc5ff60787729f8cd4265b9bc65ff1ea2478437fc57f":true,"9e721235f111d07d817ab60d08d2552ecf2b624594c74439066c34c12496c6af":false,"7ac0c361e40f91385c424c93466de1e8de53c477e5466cd3a76bb5ec2eb2b2a6":true,"85e79af50b1e6894a2f8c027c36f687552b857310575538e388494bd87e638cf":false,"eba58d2d5c0efc7d74beb9bf104aad8122e07162feacb53a542f3ada62db92e2":false,"5ed97ca5e23eaa17d7a227d3c15b02ff56e2054492b7dfdd3f8bf168e1e2e4df":true,"c2fee2463805199077e5fb5f817b66c1631542bbf25c68e6ad7603ab53bbfd9f":false,"2e2f6780a54b957e84c59813487b5bec11c4b9574a263c2fd6a44673ac4a9145":true,"be7e0db89de440bfd8a584d5eaa09016c984b1326cf85d7062e636c1ca143cd4":false,"c1343d7961af758573f3308b80fcbba49be68ca26d3b1e2c84d91e15ef060f2c":false,"685096ba23ec8075ed91bed25f4a637d1bc3d09dc8549b89fc5e8d51dbc11558":false,"c3198d2e03f2dfe45f8f8a878f33d617e7c53130370da3d7d7d1e1c7cae85024":true,"77faa8c5ba263d25d64155f4af1505b6c6f039047fa5e75b4f1825d9ac9ce0a8":false,"15c9b6b54c5ee3a7b8eb4d7b836b625ace6616a95a850db347f6fce4e6bc5304":false,"162be3fc4473d8a2f5c617365a418ec915c62108b09e5777b65883642ffcde87":true,"aed25fcdf0e097554bc6a8b6ca93a99da13de166d25a827153047d6da67f6c48":false,"3f9ffc732530d349638d14f71c57e7c88875a02befbd7a9ecc074fa0e9c9d33a":true,"d33b76550792982b82a88e86df32061f8572fd3b5c1f585470a5041626315cca":false,"6500c9e11c5e2278ef105eb161191be3f628411e1a1956a88777b36c9bc4ad6a":true,"d70e703300f947d62d2480b65b90b0750b8bd13030fe61051bb996c7efe4a253":true,"8284913dcbdd7272456159bd85c9a952cdfe14959e073aa4b843e6660b6db630":true,"16292fd02479286cac7bb55d8d02a0d13200a12f9a2c584ef6bda565ebae3a71":true,"6294bee88caa3afe65a66da0c8374216f79387af4bb7663dca05a00597c62ad4":true,"cc8e64dde6959e6e02e29a51d8678bc5af48c81ac30b84aa1d003b0747565551":false,"1d69af68c542bb95434b88dd00bcf5e367cac55e92cceabdddb2d5f8aeeb0bbe":false,"1c7a3131810390b8e1eefe5939ce9a28ed270efc5cfca7289c656310214b582c":true,"e9a7a60d9ec3194bf03c5b16d91401de8606d25245d1b2d7e7f62870d027c46e":true,"619e9c9bd1f07685c6472325ffa157d4891d6a1bd493c963edb0d674cb981e43":true,"1d15ce4d2206db7e2a6b54615037568020f5d64931f050439a7d48a8c66b456b":true,"a470fe7684709c633dcce912483534ca4e34a184dbb0602d5eb91bacd5b607cc":true,"f69c4cd508b0a5d1cd8fc8c1fc3d628d9dc926280c4c0f7d3eea9d9c2a7adc39":true,"bd0cbbd87d7c0fd1c1b2b836984ca6340d640f1fb309c817f2fc1ee807e40d10":true,"aa9d1c3906bb19a7c23050ef068505eced5a89fe5aaa81c1b9daed6ac7d4afa5":true,"4d2bba4d0083e4aa697bc858a74f2b77d05a3873e5ce4737ecce2eefbaf0d8ef":true,"dcbcb67e93cc9ce3cc8aa9b99a0f583a46078e84d6065dd17e0cf44479ff55b9":true,"eb3c1f2d68f37626f31b967fa6865f225626fe8eb260ae1edc38330a50b50b34":true,"c65b52fe52b54ed6cdc0c2db5167b96fda2207ff17b47bcc889ad20119bd8b79":true,"d6dcb7512e270ca93623e4bc422d37f8899b249c1ce72cc43d67f7bea57e84f0":true,"361f2b7eb4f7683f07464886a708a7c5b6c1075795d12d1c65068621b1dece0a":true,"db6b1dee8fb944d60384b600ffe4a11d7ea8a1ceedb425889a22c49c9617be9e":true,"d679b84f62267ba46374bdc59c372a6a04fcc4012df4c5fa1f62bb8bbc968668":true,"4fc92122d74f455d9cc052e3acf7a0336cb23e9c3101188ea9482d90a10c25b2":true,"971fe959a16702877aec0390f41b25265b7cd94731725a15f4dab3f884ac952b":false,"1be81c0f98ebcbf14610d66e339787fee8ba9f2dd1a4e3b21fb862b4c54d8c51":true,"58a87a85c6b0ee24dae2fc240701948944c920a09f3dd9e085ab7235853e463e":true,"3e18ebc58bc428ed65917a65ce50f9ba0bfdab818f03564057bb2bc2cc585fc5":false,"6e78b476772835097637d11a44ca49a7e4d1c1d36f626a6c18d8f313f99620a5":true,"05aa12ae12c40f7a942393acba2bf9edda76b6bb8645c9abd72763a40afedcea":false,"24611ef9e36f99bbc980df3ddb0fbc2ab163cf6499a685221aba40a2a4d2da70":false,"bc02e02f5e5c43235731c5e4939623f9c693ac90643644572bd9f5342000dccc":false,"bcd31f12b574d65d0c2dfb808bc7fbecbe4069b98b0f273d0ccb5fc9928183c0":true,"03ef462f450dd0139ded53dd2b575368c37ae031cffee22e793f5ec11ab24830":true,"6d32f48b3cedeb611c0cdab1578d86aa513e2a6a2ca7f34f7ff191ee18dafdd8":true,"ec8f6875760f3c60996ffcb40af167b5419071f7897e3305d7f4074e032f9efa":false,"1a4f4ae4af22c92ba15fe0b454658aa7a672681aa03f919b28ce09ba8a3483be":true,"9060cd2f64e9beec2ac3c9af5a58545518d0afeab86dd2188d748f3921ad54e1":true,"4d26401e99d2edf699a2d8c0cd3ab7b29489035c94992b124ea4635aa2064c51":true,"b85de691c97fd611c726a07017e8998b30a80e3d855581dd9062b681541a7777":false,"b6112cdd342ddc9e3316e5cd308a2e353243ed9691653a34e56075437c09f4cb":true,"3418cb0dd686e3f103c96cf0d23e68237c2c11df6b866e17f9e929feb3fad905":true,"1b0ab7ecd638d22fbd8c3e71e0678502d7b12e449f2784ffb69382d746fc9771":true,"e45f8e394f601adb978e347c08b4677cfdf12586fc509c3072f0874c24fb49ff":true,"d24176698f4710e9abcb6908425feab81c616d5c7410398362adcade2a1061e3":true,"695d9cfd4a2dada5030c9c4e61d14caf2aee00bdffc5e91e8a6b84b66e154e97":false,"f8a373efb05be7dd5f911b3f8e85804550df01896ac74781f9923e7b61dd4594":true,"41ebc804de55d05804bf3708b8dbc2f76055037ae80d230b1f4c3ce0252bb961":true,"6b582d9173b2f3897cb1d72d629c52fd8925d94d400ac2ec1ed6641fcbcd4eb3":true,"699e1e6356a7ff7154d54de28892c82d118356e262f2fc65ae209be14e3494dc":true,"1193e1593587d90b1b8975c25a7fb2d8d47242de00e12b8f42ff22a00c178a53":true,"2ad6d3a8036d241e6e9effacc01a0fdc65a5bc08aaeddc3a2f09205d93aa68e4":false,"691b0f800c2b7199ee93542919893fc9014be18f24a0f8a26cb235fd1ca0e363":true,"906f3f6273ed68f74759ee71434aa8422e3e9f99463afd8fcb6141ee4a1e6ae7":true,"c16d1a759eb146686174cb97e8ea9fe7b41bfe55bcccb44cbb45421c065e523c":true,"d9d064cc102ae3f670194642f0945d016ad52d244adf6161a70d19b7765cb1d8":true,"9a4d7adc25222cb9763233d0234630309e19dc47cd7d08e72171150bdbf6f563":false,"01b3842cb9793f1849b7241f52eb417c6175000e2a2360ec30de56aae4b8ab23":false,"47d20cf7e7ca976afdf656b196502e5ca775db595254aaa95439ab5f84d55b40":false,"3f218c1b6d66505305d2c0fa1585fd0adea8ae211683d080a1fce86079aa1698":false,"18d8c7b536abc802d2f616f7bdbdf674645cfbe178a74c69ef84ff776256a46e":false,"64e3fc9e9902c3c013217ee5cf6dffa5fc14441082cc62b1c6364294cf90991c":true,"0763238300119a635b70a378c25aabe7b5de41440b9e6f2b1e50bd223e26b0a4":true,"de39fb09d1251c71fa25b2a0589d8729faca0678079d0f39ef9ff2224dc561e7":true,"9b95e1dc64ed10c745764521e908034705573a05329f708021305f52e29be27c":true,"c54779d9490a1f52f9f8e2aa5529587fbdc68361efbfd1b9538dab0e1d867e24":true,"45520a01e853c188d6c75759d85b30fc23f63236a2c77d0bdd131745a282598e":true,"3ef4ffe27a09f2c6f438c7c29cf4a1d777a290d712f47d922c5393513d6fb2da":true,"ba3f38b1e8bdcf220f82ccf8b8ee27ae358f2da9ada91463bf54943858656b99":true,"7a8f466414da01fd0237fe9f78c873caede83b54eeb09617575b14efe6429ad7":false,"e46af15bebfdec3c33eb8256b42c8f210d077b5b01f214cca0341934f1d746c0":true,"5a226f52da79463f5ea42bb289f12f036a205101ebc1b1541d988641a3586143":true,"ee0477347537f3a0610e6f5bff2d8824c48b2790f2fe33069f1be42ebee99d12":true,"f5041c85fe43171e18836abfec9cb029302b848cf9716f4caf5572e04f503ebd":false,"aa7c5bf0ecb0bfce7450e9151f1f01550374c04deb0290e04908737e692fe665":true,"f7c2e7af04e4957679ac326aa47839f34dcb0b60efba331d7fd96192dfc173b6":false,"0f27b6e6a5fb645eb6df5bedc28071e2714cf96d72e80171b8eed9a40f432000":true,"b960c7a6855cb6ba3408a5ce5a7c58f141adc512a0fd763fcd8cc5d44f485ef3":false,"d7cc0b8f565f132b15d6aace4b49cec74e491d3a2017d518cd461da11498cbfe":true,"119184d9db57bfcfe7caecebd68dbd61dbd2213821bfe8ce90cbbde71a21b815":true,"a34ea3348d3574064ffd8d34f960b50523cd88bbb14f0982140f30cae6ab7603":true,"ef39eeae5c727eac28cd97ede9e9fa3daa7a5c56c682413be64efb6bc14e2268":false,"a785ce7a405fd09be56a0bb29490d7951351a3aa40fd1e3f0edd6ba130a14979":false,"adfca491a7db83647101de57736cdd6431fe387e6ff5d6b8e88787f151049bb2":true,"252eaf7054e09d7fad8fbf1231d48670de5231b51a0e51bbae141dcb2ca7af69":true,"4657ce8e22bd41e9ec886f0ad9db540e6db1022883cc25484aa8ab1dfb33eac1":true,"ddc796d7c233f6116959550b3226adbbfd9eeec405534088f2ecdc6f8ade6392":true,"c203ed38fec2c568535a43ed4f237c664cf14b83e37e6d2d6ad51f4b65a6a1ce":true,"27dde401af6253cb4c89bdc9bfbc200276ecaa3fa72ecd96e47eed1efd8eaa22":true,"3897748281b2219d52e5e90b4653a160000a37ee1e6d74dab73d55e14f414993":true,"275f78799dad935b571e613ae271bd4703f7a2d3a95d64afcd6b04372bc894a0":true,"563d1296463095ec72fc471302d1210df26a4ec4899ce7a3166b70ccef126402":false,"959ce4ce2c05580ce7cf848b5d1235f629363093ccdac8eca69e257a0b51e5a0":true,"91ee81007c836c6982bb94ca1ec6c92c0133e915fed5ed447fda3d83bea71b75":true,"ce4a7e3215f4172e08576d1d24a6d942e79ccac9c0cf8effefc18a4fb8e2b38c":false,"d3cfcaa94b3174d23087a1ce81f2df0d5a7733d0f3ea664e2ba663d2d8086857":true,"8005d48c926e01bde97c3ad30e1296aa2f065570e061da34bb3f490df9d6ba1f":true,"43fa870b393fc42c396c5cb220d88ed9131ac94634d4b750f061ef85b06e5d70":true,"4599a5145bd9acb6b4e789e4773ca414e7418245b5a9012395ae46ea256d17a2":true,"ec690db04c639e0d274278eb8a783e23455ef50f962da95e974f707a0c675ae9":true,"c6ce1b978057b1d9629f0f48007120d0ee165182a96f639de5ec4bdd65c9e712":true,"8c1d7e8086f1eee7ba6d6a696fbe6a56cdc947248495834d6c387d133a23a713":true,"64127d49f70213b747fc51205a1e0606af6018805511e53f13b75bd2149b3aed":true,"d348761d110732123ff73b43f50426c3db5afec5dbfdef1a1b7ae793b1c85f3a":true,"5cd58a4d3fa06eb52b9fbe5b8660c6d3d92c51e2b03df2b93f9fe8813988f0b8":true,"c621323bc943fb4f69d320ccb8537e9f06495e412f2c4b2235103f6fdaf7fb9d":true,"01b3facbf92d14df25ee71a622c8377b572911765e58a35826edb5a63b6a6ecb":true,"eaa3eb95d2fa1b031eb4ee9d5056c525bbc105c449928af2fbf42e95e07b9cae":false,"2cc9b35692be4604a3c0041ced9120272d78607e84e2fd5c735571bf15048c08":true,"09443a5f82a8d358cf8beec465be5aade790808196c8e315f55923d7b77a6213":true,"34abb24790fbf21424e0c9e6f5b4d280193f2d49d81246471b64cc97995db9e1":true,"64742b84900dfd1905f2b55f8eedb5b042e0e875e9ee187c3ef1b604ce5924b8":true,"25ef1526224772609eeb7e10042a00e15dd80397e05f5f8acd1c6c9244048880":true,"74dbb542d468e98d36cca9a2822be2030cd87df8d9dc6e4f73ea8714fbbb86da":true,"7b510335da85463661a9b4b4ea933e56fc163e76a0b1547c2a1b4e903c9dbc59":true,"00a0b2343d1207d0e805413239f6b0390d2167efec503b79c34edc623c6ddd56":true,"fc6072b0430225bccb75725462eac6220815577de0bdb2c2fc547008a7270952":true,"41400ab20fadcf4b592116d57eb3fc8657f07419c73d5d87d7e5364a78b4745c":true,"e387d13a68d671323cfd9a9ddb8d19ced53bb3179791917084155294bbf20eae":true,"4e08bd40b3d85e4d79b5addcc70ea55d67b4bf6adb8c8dc34fae0c89bbcdbffb":true,"326ecb9a489e6bcc454a27ff5eed1453db63cf778cbe76166c0c243131e79398":true,"039237d0e489bfcf137bf594921ef1e3fef020a1cd0ade4a4ba8b33599ad3b60":true,"246042682f9b15667e3bbedb85a966a367c4eb424cab99b8cc7313879a5e7196":true,"8d9d0d722ba075ef2e318f5807eb15832af604c080a038dbd7e4fb07ab448175":true,"29ae187696753aa1d2f748bd60bbadcb2280535a957fedb3c1e0759dab200a60":true,"0e94ea06bac2ea3854c22cc545ee69a88ab4961fa4b30427d007ba53ae356017":true,"e80732b8c7f27474bf1eefa0428232dbff39ba4ed860e8b1c66f5d6b55542492":true,"7f4b04cf0e3abcc796e3c08bebff759c26c1420c2ad51092007455201e6cdf04":true,"17902588350a3ae561bcde705bf7b37ffb7d61d0736956214e9eef1f1f12b683":true,"eb937a86c33dd20758a5e68babb79b7b667013987a97933536c6d9f8203ff350":true,"0e478f5f974e5e0e9b2c6c966d3ccdfa83b82a6d77c918349d223973e87f9e2c":true,"9a9aeb08ce71fe9881ac0920bfeaf25f2923f15c526a74c9a1c5343ad27d4514":true,"6d429230cae86be12a886e7d38eb03d1383c1073124162afc4a5713d4aee5d78":true,"6bba9b58009e883d200165c5f468d9a68cca7a5edd4d0b228b92f9fff7bc76cd":true,"99375b9f422d6009dae2a5db85ae6ce36751abc15b05eec30c2c0af85e32b1a7":true,"d720943758bd001b0f7e476a5f0f48cdf66691a204f1fcb2b267e7cf14f0f5e7":true,"e2437f04973b58f103de90361c5def89d8c95e68667444420e73a0eed42061ab":true,"91f0cd289a2fa3060c07cc7cb3fe9d2350c72ff1aca25b65273e9206e1ba7141":true,"da86878bb1aa14862a3bea027d6c72620acdc48909b091ae02ae2788acc5e1d3":false,"6b6737cb10a6b240729f0a690aa82a363b31df33b773fd948e613078829f8b17":true,"e2e6ab04212d11a4afd3d9b2f9e9ddda2bbb6e9c7ecfefc19d28b2b6179a5a36":false,"045833bbff0012cdc551c06cc5186ef362372afc616f773c0b1717743bcd9168":true,"05deeb1883da67cd07e0c9983cac70abad40b528dd14287452f1dfdf996ba8ca":false,"0a6481d9163be8b0f52407155190a624b844d1fb8b7b63021623565ceb76ec0f":true,"0d9cf248acc6eebd3422b24236caa9e38df44b91c0af6983cb382569849b0f67":true,"29ebe3455938e735fdd9ffc6de659548d4797e300eec2531552182929d943c9d":true,"c9758cb3669bb14b6616413d282d6d1cb0dc779163592a4e720a7de91b08f069":false,"2d92459db74e8f168a4d1488008674dfea113f91a227311f5163167bcee4b138":false,"9b63afb76e6aba5d4976f1719c8c9ee81147c3ba3762f97027d77969d27ee780":false,"565c8b13a50547dc67cee35ad5e2fa0ecbb26fc15ddf04fc85563793aeb3c2ce":true,"2e528020013f85b0c76dc3a46ffdf23992cdb4ebfe1c1a839d3e78642ff7c34f":true,"ed33767ed0bc710a4b11eee0562c59319ad5d8166b79531ef23921645a7bd499":true,"c8c2a5799ebc413083f79c98daff7648eeb3a6d14964030a085283d7c0abe5a9":true,"4ed770716dcf5e99523044965652bb38c715c363fb06282d7fc59beef3be0e19":true,"e775928659e30f0cf6577ea22c956fdf09446a294e57e5512912cbf4a483626c":true,"520124c13203fd2232c19cb4ebea1a768c5f90826dedf52bc09e22be76f0fdba":false,"ed83cf515d70ab95a166a200b137ace4a094ae2d528396a817d43641f50206fe":true,"9e45303efa85e1e5cd8695e876cd418c73129dbef8066fe0a5c69ef495b1de70":false,"e14d4880d9b11155e3ea0c26a9447a9b2e850b9e02777cdbe2ec1493b3a88f75":true,"099a453380a1a96987f219df4f1706c0290506935e915280bc9fa06ae2b0fc04":false,"7ae1f416a5a7db9eaf41cdff1fc51a3cdc9182c897e7c587d09ba22970874cf4":false,"554a7b6594c4e7eaccc8447869b83f53c22a3e8384da04a25cb65c5bd1c81775":false,"5e250f3d18313306a28c3477009184f1b816573ec95239226e47f08d2b14c62d":true,"f966cb1906e1de49a330bc647f1ff05921e68af6e53bda4db5f75585f1cd41c6":true,"ab1ef7c9b81307c5e8853571e4f1853e86de2cca54ebe527a08a3c946c99ae25":false,"56a94317c6035e99d1441c5208912eda1cba46bb49b52fa33b71753822c1b006":true,"3243dbd9005fe69fc657491f50f5d9158341efc2a099b755a47c725d2c73cb36":true,"d6ad17ff7a320eefc349374ccaf0ef0f911106cc94805082a8dc062950dba6a3":true,"b1099a5b7be9093158e2cad402fa1523d20a9c68f75a86bbd77cadfb3f577d70":true,"504d1d3d378d7d3237646358ff620ca5d6522e44d40cc12ad01af92ae425f5f8":false,"ea848acf1965447f4fe9ad145a566825531d0282864bd406838f63aee40d6888":true,"13b57982b6a2d48de066807d674110aec64bfae04ef11ae7140196b9ca28bca8":true,"e9e4b4d32dd3cf9e60594dd52de33cdddc991215916d91f846a5421321522b35":false,"d1f20dca4ec14504c35f8341dc6cf4ef16cfa00f037e4c62bd2fadf356b272eb":false,"703c15ca15e40b2263146c2e35b6e78d1d3a6665301ed9cf83147b8aa8ad81e8":true,"90eaa8724e409bf3c72809fd788c63e29ddba514a1747787633834091677d0ed":false,"5bcbe3c200af2da9ba4980a40c1de5802fda7d4fa250d440d420040a14ce24fa":true,"5495fb30264c4c22be19e42a416b30e64bd773cfd5882ba1567c6a9362ae0c2b":false,"249c3aa1cee4ecb0358468bac97468f16be4cb2132efd0cef64c2be3172de959":true,"56304d736aafa4764c769d4e6daded74a18f9e23ba1a0829f01f5eb371e42e24":true,"b1716502985bc6754489a966cf542f1a9627cd7e23ad26480d27b5cfd0df3f67":true,"71298576552d282e14ecf9dc9e6a8cadabf337ba70468240ce42fbd6bc77565e":false,"eee787936576bdae6ef34840ce504fed188f6429d28f04d9b1a8b3a4c6ac802f":true,"a52e484ef603409b35b0033b00502b5ef24b50380fd019ba947e55561b86aa68":true,"dd8133f7b5a175ef8d1bdccce0a5f988942bd793d4999ad0a28958a8b8788f7f":true,"8d0a0e9ac28118667152338635a0ece95b139133e883af1a37abaf7672268fe4":true,"8dd2b099fa8cf9a79dd4a5ba8cad168b1625fab12e6e9b9d98ab0855e3ac4dc3":true,"e924e06fe659154d39370ca9badaf123dd529b19915576a0b8d4314ffcd26f81":true,"dc09d2ef25562c8d9116db87ddb115fccee45bdef381bd41a794f5e8b9ed8dc8":false,"b709a260f95edf231178d2018c16971a0a91c0149d975977bf22a3bc9150ea33":true,"ef269f8196b7e6a516a79408315bcac9a4c418d0cb3894a04c3b07112de0bb35":true,"0fa79add5fe920b9d8c51f1a5a80a11ba4d74cf1ee508c759fbfbcb4a21c03f9":true,"fd9a6c47fafbd043352c7e49ca4cb3bf2029e8e4bfeaa46b1125593c3479a0b6":true,"a7b7fb93d8dddb8d1d2eccaaaeed1974a92aa4dd159e66db45cd0033705d4109":true,"66dbdfffebb8202503533a1d4ae3a5431d45fd5f572b1c8790db057a9eeda02b":false,"cf1390c48a7800ef8597429ebae9f9909f19386f9e47dc3a919739c2fb076b1c":false,"c69c8607bd4793ce6e3119f518e60515d43ae31c25b0ebf3094fff199cd2d824":false,"6b10bf167bee58e594d6b3c70ea0e2dc95e304728428f0013d5d4496cad84346":true,"6a1879596e5e22a335ad495cb4cb7ad8a8520ebd71b7f470630fd0f3c6aa90f2":true,"80bec3ae82a6be7e2c75022d14368113e716600abf64df1fd61a49797105a417":true,"622f62fcf252cc8f33e231bff383e9940ea0c78741cb72023a949e08a2f3bc45":true,"ccd10f67f76b7d11efeedfa123e192dda96c8bd5eed9bf6a8cb945fc60a1db06":true,"181a430d26d243279440d1210592b3ae985dd0f692f11024af2135ae1b831086":false,"9badb8bb049b3bf4de7cf5c47a65325fbbf69732f7c09375726d359677324e81":true,"9a3ec8a7fd67796fc8a6760de6930d8b4936858e560f688f1760709aac00c636":false,"4627bf33e65829fc0d0780a7e6ff00c584740e395a0e96fe007e63a6d29f94fb":false,"3c1de2e12fa96c29f6dc550c1e2d79b32c2010b9e3e56cda5d2b015d4cb93db4":false,"24dae37db08454f20f866c3eb5d8a56acf62489a51fd971345f4d56062a2c5dc":false,"4cad83563fcf77bf3d3a0ee175453b7510db037d9ccf4bb8f15982aa479eea3a":true,"b6e812adb813ffdc8e8cfa6b30a627f4a4b5fec44a6595c9720efbc8ada91919":false,"28f6dfa0d8a7f32a00634e110f61733ba87e2dddb1dc497ce08ba499bc94ddeb":false,"87a032a562baed72587244f9b6c59a1ab3598f89977ebf287db21963164440c3":true,"777a656ceff39d5d90c1ad4a935c64c0e922c7e93879f643dc5fca88c8db58c9":false,"27a7164144e021223d695b0d0749651211a42415c8db81d27281b03a679acf89":true,"8f669c521472c56d5874188ed717596dd98a1b86d527da924d6dd8deef0ee364":true,"0e4cd80d0cee3d78774f3a3b5d5910bbb86360198c6cd57d2c44002a4f7f1d25":false,"9051a6fb26fc06ec1830cf2b8c41b14dea0bdb49f1c86d1850b83406b6538250":false,"f4dabe7d9385ec304c38ebad19f8c311853bbe47afe349f3e2505967ef9e8853":false,"60db0d6ddb11828c476985c0ec7fbe99b951d40c27e45fb41dfdc6b34b3d641d":true,"6a2975bb4f3d7520f98cc0f33b8dbcc72e24f2f446aaff09d69a23b94c9f8196":false,"8f65a4f864fd2e91cf0145293a1f2f4e19b96e0ff6e32ebef2c128fe44a2370e":true,"54e7e9bcdedb75cb96571de0cd48231d548b40c87d2a2f424a51d948fb3ed369":true,"a4e7078f941d6155ff9171fb141263d590fbecc3272f187355147c34d6026bbd":false,"fa193a999bf503dd187e4111ff7182b9c2b7dab426636d8a855963dfe27efdd0":false,"cafd1d7931ff2f6e4539f1ede942afdc375bd4a16e8c1c0cdc7a35671d4f773b":false,"df52df4113c29a7bc45923953d915e783257ad8eb50cb2bf739e8cfb5d8b1538":true,"1b7cf88d534be0a761aa776f456475985af3477153352683d850b8ea523800bf":true,"25f0d2c9587ff03bb557670811503873395b4ca7f80fe1116a36786a854cce8e":true,"018dec56fe2e6bffdd5878810a9931cdbb7234633c10dc5f83d4f2e18f5dbf48":true,"e3afc1550ac5c35bb207605593de75ed88912335857970fe7c91a34674d312ba":true,"be0847d53980ec8af8deaa7bacfec271513775665e5d8507a372fe6e0445a843":true,"c2161b31f4947d814a1827c01c88b5fd6bb57416693fc61b50026ec3350cd852":false,"1c9afb9641bf12dfdedd665ef3e6110c68ac3a514314cd4f44178e027d9fddc5":true,"c3cbba20d5cb231e4b49828fe4d4845c5bbc8500895c27fffb383a8247f1c989":true,"07a3bcd1f6baf833531b099bc092850228fdd598c9ac82bd60ec5870b65d8915":true,"f8d2930e00a4bec58aa792aa884e7d8d34157fd4ca960a7077da9ede2bdea4ae":false,"98e592870c8fe5650a3aadd38949ba25a094abdce2077e10110996bca67bcde4":false,"66f930290cabd0e2f55dc5e2c69c1e5e2478984522ae1dbae8e40ff1e07a1228":true,"82dbcba1459615c0e3cf25563166b0f46b9f142a1631164b5fa7c9e7fe8fa03b":true,"bcf07d96279a64b7969c4deff0f0d50eddcfe60aca353164175fac95f4b67bfc":false,"a2a8c5aa55cb3ea684bcaf43a99d0f502d128096307f2ce2d98ba95b68cbc4c7":false,"0c67b260dc3696ebc52f4d56effd2945b5f1cbfb1e78c371c1db44cbc1d7e6ab":false,"fc30f2a143bf87d1e4dec56b9e819b95a3a32a633b487d6415dbde22e11a663e":true,"501cd6cb712d165ff348b34f66e240e788f293c36a9a487d77d233007e6f65ef":true,"231485ae47abbe2db2fb6ac1ee8ab529a5f5244591ef2db74bbfb70bbe5163b2":true,"8c1ca922c0ac2741fb8bf9abf0e5b303a772ac6f0751d6e2a4a81d9540e78725":true,"d3177207d1486c217245a66c6c14022dfb5f96ad67173d8ae88c66b63b2ab30b":true,"7865faea371a0b3a0d37d26a0ba2ff36500f83aacba3214e401e826fe04bf69f":true,"3d77faa8f5995ece2824f8de5e2a5bdd5b86d38d1e072e0fb3c4cb03007200fd":true,"ac28a439112a2bace8095d1d885a925c7f58462137836bdf6ff57ee1c64d6c0d":true,"1a833b3b8e14f6c0d9bef8a6025e324c96b6bf2f2f8cf2ca48e98c526b561830":true,"f1282d1e7d0f0712c5ffb93054a2ef99949f52a81ef86d842eb7fb4d0473ec27":false,"1b734431cd2ad45bc32cda6a24ef7fe40c4e8f858e7cb6a0adf0dcfff157a2d5":true,"24ab4043f3c22345f013709f9b7eeee10a3ca47a32b1bd159de0e218b33fc89c":true,"423e9c089c4d8a5190f47959f5edeb50a50c3b121bb1f1a6633b27133623c12b":false,"c1a5aef74e3dd52f37d18057d39518bb4c512646deb55cc4bba2e3b0188cf5a3":true,"7a63963d3ab6c8864393590d4b05d02878279b1f1bbf4757cecc02aa19813ca6":true,"5191f68f6214d7ea8a5eb0720ab30cd2ea80c9cb32cd934ed873d36b66558d28":true,"e8647f4797f3aa47ba112c318dfa1c9337a3e200ef70aff77884d06d69e715f7":true,"3e6755a211b5dcb67946001574df71acb2b94338c729b1cf57a9a496df0c232a":true,"1897835488bec8a2011f52ae31187c54b25a663d6e6abf48ed2d99444be8528c":true,"c6eb3a8f2ea9c755a4638ae8e6982cf7ca31dc2f67fd7eaadd0edbe7a22b3a5a":true,"6e2c764b7db5808cb8056244717c6560874c4a4d09dd8db30353b5dfd882358e":true,"40b29325b6df83aebd6efacd3e8521934348330eaea71ab7966a80bc2af00810":true,"d0de123002356ff7ffe5de60f32e1a940ee69fd9c1b7b0257c0592a27a0135c8":true,"7130d5d64cb61e90e39c3ed688f225a74ee142f279e87484b8c0cc7d95af4bcf":true,"2a4d79f6046bea445e2799d0147a8860febfb1261104c8ebab6fb01154f971fb":true,"bf132e411abc20ba7dc15d744b27fa9407d1e652381d3b47d89740d1606b4b43":true,"127739c1ab3c50518abd683688e9c3bfe5ec335f93e195e20cbd87fa9cf67a50":true,"ef25f489a32a7cecd415de8fafdb9705b0198698e42fdee47cce31fe82627631":true,"b9de7ccacc2418057c4200c43024e90db835dc23501c163a6cc6897d7356b24b":false,"c79ef1736b5d32145e199be8ac2731d9de6935f503dae01e011614ee2465e92f":true,"56c2026b4a4cfa692330ff8a3b4162a6a6f56430e299325c82bd14193cda6612":true,"722f95732503fa52e81bcb9b45e3075ef0b07b9940309ad37431b56e2e26f1ad":true,"d609ed984cf60904eb39ad1b9b22b241c851d8d881f0917c2b2a29a1f9eb6334":true,"192953646ddc6ef6257f9cf4ca4822fe6dcec6406697f5a1f8978992bb067438":true,"f84c53bbf3e84178fba31528e6e806b88a9c4b07d47b10598b7eff307cec7817":false,"511131ce9ea65a160e5e126253baeabb235457d094da6827afbf5ae486f8f4a9":true,"e2589259a536687969e1ea18286f247323e5da5e87139dd738ec29a358b7ee98":true,"9e5d3a10c31d4fd9f045565a07ff992291e0d42c5766b723346d082dd71734a1":true,"91d57695c5b9d021060a9a3ff96a2821675f783d64081a2b444d2faf9beee654":true,"22deec567e2b4775d10e394b2a3ff66d277d1d196f707884cf976e13b7be0c2a":true,"fe2b3b0603f388ef43ed96ba33de8528b96e5aea4bf2b90cf0dbb23b98be4535":true,"58935bbc9703e597ec3c689fbc5506282c07155731f9c497062b08b93ee94abc":true,"b20454cbeb0d3b520a94a686c2cfa045bef50894fee31be59f143d483ffb2524":true,"88cf22158b32c1e81494f0ff1d27a8b94cf65371cce61311924c4f7c5e7d7fa8":false,"5fc967da4870071341e4db7c4219720f4fcf3ad9cd1d2620137f657ce07b2a79":true,"9d866ba17854fd39317fa2491fdd7007aec39bc2e7a44fb9b7e5e597a2dac8e6":true,"14348f56a8902ada1a8fb0fa82eb0f0e5a07194201a21832a7903b88980e9e69":true,"1ce162bf92189d08c871ea0e585a9510df5309cc1512ed8190e21bd4b32b337f":true,"98549b63f97d22547890d688d1bb294ed55598daf1be765e827766239395666d":true,"d159a2dc560c487a8c0c26982da0e8df822d0a6701f086ef0fb8e14244644f5b":true,"7e135c7c12d528aaf77bc6263c3db24864ca14ca8b3b9a829bfb59d946193973":true,"5ddf73d29c2ae6eea1cf224e1cf2b0dad77e517180daa782b9fda2668d19334c":true,"f728d11c1ed6dc9073ddbe0f2e796045633796b10b047626a7986cd9ceb07c61":false,"e911cee6041eb93e3a6e4fc719ce64247ba694e099b6e379f0b348785e14f070":false,"62627c81f8ed7f168477c8d39598e9d45278710b07eac7c24af183b49ed0da9d":true,"f88797491db6c0cf982e9bf0aa1b28b1279a390f0e29e93cb65afa4642b0b223":false,"c65f59b080cd382af913243c730f7eee6a6a1b54dbd2d875263cfb4e164efe95":true,"004e4536e2dfcd05d90ecb99417474b0e8a7428783daf7833e135b704f6fc84e":true,"40ebffd7719bf6b732697ee4893e26a2f2c6befa49142fb94d671bc328a2f4d5":false,"f2fa74f001640749ace88ba598141a67dec5e1d8a27fca16de2fc9a223d34a4d":false,"a9b7095fd41eabe461e900a3bb6113862618c8f03801490a038e92f817b3c89d":true,"b342179ff1f7791cb387b1e35acec5fb5df63f94e50a232a083050669bee0628":true,"bd273fbaac89207acccfd4e061b8c00ccef24b6b04839c1b0d35d9cee50e5d17":false,"0ca698d3167f87f57eb4b4f747093255c8a6ea4d8a24b6d6c15251dd9efe9edc":false,"8c4a263f7d1b05594afd87b43a601674b8cef8c31503a9a9f82387aa2245c647":false,"a0a0dfc114858677b02dfb5370e94675f675988ede87470915a8fc51656d894a":true,"6209d6bd3c90e56672941a18f515d7d68d9adf73a3be15b26468664951fee570":true,"a7f1791b5cf58470518e6abf2f825edfc4855400db0b0d5e379fa986cd346ef4":true,"f957668b9e7aa3c2dfaae59fc5011d7f76f6434b926dd15c53bae02bbe59d4ac":true,"c04dad15006a0c346107b03053540a235caf065161df781fcdebc22a73fe22b4":true,"5bb9d93a08332a8499553d64e4cbb3a6bb14f68cb5f1a44323cf9836582d7c7f":true,"092a44ecb38cc7a486d14f27e463518db5a399e2f0d74e89bf9b9a890bc3b4a9":true,"c2227ce21ce2fbf21874d5e95892564f35fb4df7794f223ba495ea1e7f82068e":true,"cfbed24c8bd9d1ded99d3637dddcd62f4f8dc57efaf313ed46570c896d709118":true,"74e348f552972a2e43d97f9e6c9a04f3b1b2067b2c8acfc492de766944930582":true,"926741c84f695cd798ef55f4ba4f5269935ddfb76bb685fc092df708ad88c77f":true,"817baa5f766c3da9a020f348edd40f24ed8076bb818342fec084e36a5de4dcd8":false,"2a32403c06cb702f4360282b5b4244eb0d71a7f55d4a68d0354922ac07de2ed5":true,"793a6e27c3db2c15fe14db6b4675d70b376e680480da0ec1197a61c56d624419":true,"00dabe6e639dbd670030464c5e11a1be6e7fa3d98d9675edf0f970ec028f1e5d":true,"bad3345920081ca6cb4d89b172a379e117f1145c523ca994089927d5940d7ae6":true,"c533ddbbf360ce51b67ff8198aaddd20c21ceff9fc792a7587b591a304e8bd2d":true,"1552ab49198f0bcf5959bb7e94bc3708f471d29b24e403250102ced96397e665":true,"f59b4156d3ce14636dd8ccf6a259429e50a80bd01e86171b49407d0e251f276a":true,"7380db72a3556fa1fb5bd4435871fb57087c021b32973afc2e37ccb2ce41b815":false,"101e8bd47433b5fbfc1c7ff0b7e52b47d777bee76850d0ffe77e8d09e2b1dd45":true,"20981d61bb86c30ed046fe529c379f7e0a332a2df3ba86693c9881f67e79f106":false,"c5f1de28393fac92ae248ec72eb6d292188bd8089774206c76a12a80f35b4b6a":false,"4fa3d826190afc4d5d3c9dc1706374b9f0a3b520992c53d492baeb943fed524f":false,"cbd80ea6252c1cfe4ae022ecd155e3abde0f5f9240a0f4315bac5eb173a44f6e":true,"5ef374a775af4cc826c5fd61ac8803f0c5c64da945d53a76c375c8add39440d1":true,"29c3ea16ed5bbd15154a78fbe7039744072aa34eb6f3d7fd013dfe5793151e76":false,"9d88a0cab18278cf7c1ff798492bb14d046d5ed4dba05a4d495e0dba2a3fbd8d":false,"6dbe50ffc8813f9d8acffdd4dad9b8997e05bfcea1cb604028ac36930569060b":true,"f89bfc79b573aa41bbbd4848ff3f9d264b5ffa714074a3c48ef15fd450cc2008":true,"bc7f3e9ad5197977d11ca17d3172140f2738020f323ed3b8623ab47190c10371":true,"47c1e38c4650e27a234022716186c22d8623992d1542653424a76c345a6dc47f":true,"c7ef9f47f57e821352961554006d20cf8e4407493eafcc631b2d616819adbdc2":false,"ea7237c82e6a1f29d8ced57a666ebc2747c82e8c12c24308201afd72d7671180":true,"909223ea0912328b0d20990496592028211e901d2c892745ff2289f4f1f60dcd":false,"282581e057703d59fd4cfc9c67aeea36e3e820c5df065cc6bc2be6d06fca1b32":true,"bf47e98207875ff35ae2d6a1a5ec2122a59b5abe5346e2f0ef75090f09b1d1e7":true,"bf3f9de78be7937c0135a618140aa53ae87d91e1090f24fd706044bfb004249a":false,"1642c124c07ae2fe8298114df3a8347d9836e0d141a7080ff562d9e5467a7b58":true,"822d41500f4722abacd883e935dbe57b97b8beb0fc8c5be474f59c2873824c15":true,"3a879a2ac751f741b1ead66c00fd16e6deb1972c2e9385599827c2c70b79f569":true,"aef782a970f89be5ddff6d92a0a31baab92cff2b16342edf6a82c8818bc8bf5d":true,"41ce3cc27b8e84249566e74bdc0a7f31ddde0e4ab029ae94d1338da6ea6889fa":true,"5804bb1a62f5e3c29b97af975a43f3a91a31200e56ce4f216e4341b616a23334":true,"c4974fb2da583b5b0dd780d8422b09ab84909dc8275a991f975d2521112de310":true,"8d3e158fef5e4c6cd2a600277a28a019a00ecf180c90f3afdf5483d351a13001":true,"907880c5cc6210d1cbdda6b025866b8c712385f3f6665abbcdea5d49800e3e63":true,"ee39c977a85307760682c97cbddf1278c079906c11b887930c3a1e939efb77c4":true,"49452013e8f7aa7a870875ed10576eb480752c779691c70d0d508bf551296a08":false,"bc6337a4f134069ba470c3fc2dcb07ec32c781e79b468d7ee3922f00f7c11538":true,"9be248e1984f5075ed8785495582a60967e9cbcbab598b35c63b6ba6be2c59a3":true,"40e69b080565a2937d58d33528ab63c730a2fe409a64974d352bb6fa8ab19ea6":true,"f062eac374e03e408aabac189602a0faa7c01042443efecccf42102279b6b598":false,"33fb777a2d2163d8464bb2a23d216c552f02dd6de9a6c668c7d53d2b074eb4bb":false,"3ef67736160972832201647ac3d380f2413c89a57ec4967e3a4749553e373d49":true,"3ffe223008547906c6689149b25ab09fc6ab8614ad6d5c802eaddcc102439ef0":false,"789fcfb17f262d61ed80a4dab71c40a2b0ab0ce973e88a7aaa1b4fce04524b39":true,"cb59a622cc3989c349d1ab7f04c6db534716266b98fbdea0b77fd38e5608e4f6":false,"e23c50044f282b39285b869aae5be1daa2c5a2bbb94723a3bae42e707b22f039":true,"86f7bfcecf23df018ec1900f6c1fab5b1eca8a8074fbfabf87f13a35753a0e4f":true,"076af50f95910dbfff9d725f0f1f26b6961e86319e694131fc5be2272ccbb666":true,"198798241a91311cd67e4232bcc7c26b5c56bf6ebf21aac9499be35bd23de83c":false,"11f947534d869def7457f0c42e414d3e98605e9922a29b55e2daef344401ab18":false,"5df6f9885743a236e6711fca5d50c8faf70107296ff67a931c838810ca452135":true,"9679a59602134a19e023fdf656051c32a01ed6d08fc5b7bf2177f3cdf4fa5aaa":true,"61cb4a596c2ca1099e387c98d495940015fd41c73f5e1831da325b2fc24aa1b5":true,"7ad76e1d54d5669c0e1f270c5616e5929ed51845d88660488640a6a850983c4a":true,"84a24111622abeda6abcaca090f44591d4577b949e50f22d9094057884115e06":true,"3bc857f3684f04939c6b5fe227539771090df03688bd45e59d219b3ae357ab28":true,"11771e51f9e561211aacb2570731e867f86d1e80ed34340822f9eb7ed820e9f2":false,"7ad20fd610ca4bf24527fc7af69795c9ba56c0507dfc1ad810faeced872415cf":true,"3f06af8af423b484608fe511837fd0566c85c3553174e0ca9ff0fe543a4a3632":true,"57d43bc75bc1cfc6f5148839dadc76d9acbe274e5cdce1fcfcb958fd74794b15":true,"62a801ad623c877954d8d4522f8045758ba05cec24c85a64e569ee6ddadf0b33":false,"75854c54dda35f705a7680e0bb476ce73c722a98ec645d23af696748370142b7":false,"cc164bdeed34c11deff4c1f8d2b8259dd9f2d9aae9611adaf4b4492441c15b12":false,"1d1f717dd32224e18f5af9fd0b3f2952e12d99b4ea3116e4c4376fcbfcace116":true,"e9bea01384b08be021818c9f5d7e3b848f7c5501f1540e255263c60d931daa17":true,"d48925ca6f90b2c5e6bacd9555e0bd70b95256a45f43b10fa99d16f0f4bf2c62":false,"547fab520f55eedf06bd9f52af33eb02e7835284cec3b675be6a1d85f9250267":false,"16b969172bfec31d68e00b57a417d46e5bc2468d182cc4ddf0bd3830fa2e3868":false,"3492c9509d33cbb99e3705f55322227e02c8b5dd5ff0588afb132ef4f4f338a6":false,"08669570c904731e05e779f5514e44367a6c0302ad596295ab076fdf67358606":true,"e43bc5dac79208d20ce636670977aae5b32d3476f7957e6a856a68b6e0362f24":true,"da38d33f34de484d4c9a05cd5a76e9aa9238327d285d84fffbb3d95981a48d39":true,"8ba9c941559e629ef65aff080c79b946fb1608bb4ec6f890b47b82350be2d559":false,"82781a9dc7d7525888f1eaaa2552d7648295058ac76cedc910c26f11ce2fe9a3":false,"1b9e135eeee3b27268849cae965d8aa31ae6e83e53d98bc610e5902ce1d0d558":false,"50512bb8ba101de28d382e8cc11bae375f811450d27d2218fd6fd873412ab6b0":false,"d3261b98de53ceaec4636b3c5b97d8c12ca23104841c2af02f02b995cfc4d41b":false,"dc7b467807bf2b47138bea4a0ee960d5d5a24ac0fa50953060d2f5344d1b51cf":false,"c8fe618c48e723991d5e8b012258249deb25cd2f8b78ffd7496e9bcb645bb499":false,"8c097198a376b6033fd7a3211db34409407a9d5f871c442865dc946c0971206e":false,"b040ffafb524541a27f0eddbb93fd7973676792d25ab6f98667abdc090a0b7dc":false,"375d81d4f8dc880d21cf2efbebd2421a86d3c649e585a350f74549f71d0b1397":true,"86c1cf200e0e6a64c95daeabe4559b0f781991afc1fe2c0341a0579e68a58aa8":true,"77591834b69dfde3dbd9e2e077373ca254ef2a9fdf56b0cbe0e04889485a9f2e":true,"942acda4f5e94d7dde24a36945c1451ac43cf4b359b954f122ece1e7ce75e2d5":true,"de53850bf69afe5a55c6724aa6b7fd82e5da66112caccc0b1d372b8e1819400e":true,"6cdb6740d2b2478fe4bef7a1198d931cbd5ed7ffde1efcb9688d7f6a93d33c7e":true,"ffbf232f1e41c1a9950e30584dba9ed1ab7deacef0ba3301fd3c874daab44fe3":true,"853bb163bf0b7c294d773538422a0f088ba4dea377ab29be3d23f43849fa764f":true,"5a3329b880e86e67e4f6bd2af44c464925a2f449f51bf1f2af9525b06a18c7c6":true,"0b40957c0428ac79887a3a569efb4e58a74c7304f17417dc318be5b19c898c37":true,"13a5f0b8440368bdcba9aa15765e12a5db41e51c12d9e1b1e44ce56b84587ab5":false,"499e292e424d5377dc60e37768970159288437d5173b6ea03cb78ec4b3f3f6f8":true,"0ced6ec58b23f356e33a2b78fe0873a12f87c560752ba86bf30f7dd3580ce012":false,"a830a82dbb921a5e865ededf5fcf90baca77c0bc8e523824850ca4cf9826070c":true,"147274d2c7ff36012289957acd2deb2e8b9239fe76860be3e376dd8fa700bade":false,"33b58dd34519fe9756f03ce168c0cc7f12aa48c43d732ba0193efa0ead44bcf9":false,"addf7ffc26cf358717fee018304155a692a7fe76b8edcf5d959dc1bae8c60358":true,"45215d6e7eaf23af7dc3bcdc90547afc1f86998f6fcd1cd8b41fce0b5d01840b":false,"1c72d784a0f1706307b84eadb3a8671285493c3ec651eff274c6b1a8c6a5e7c3":true,"f7b242aaee94c2969f9118917a78da441a4e02f85c77676d80f408c86ce162ac":true,"e4ed3b6116d3cf1515640c515766b177de480ba612229465d3a35879d9d1dd8c":false,"d291f6f7cf7cd903fb68d4005559b953e1f928e5391b41c28bb0afe271554d79":true,"c89d4dbad1a5356a8fbbdfc824aa803a32a147bcfd6944f85e2573d16e00886e":true,"16c6097c8d1f0cdfc1500b7f9c5e9b88d65ae891d4f308f9225ad95f00088080":true,"d9cba9d50d83f4fefffa4f5963cb5a65593e5a3a9292e055598b80a3c436d2cc":true,"bb4a8e9fc1203951d3450037fb2a65436cb2d168818032007635e40e24e12c85":false,"8f1ca200a807e9b1b7031242f92d2259a3a41100f6f794e2005a1e3902ca0a43":true,"0aae93342dee18f47878645fb987277d882595871052f30d8f67328c0262c6c0":true,"a62ffa98a92cfd1074903d4a5b898ba7f641237e4f89783ca2f3e5820f858fea":true,"f7caec064b213b7b2b7677574a4c2affd610719bb5e0fcc3a97185ef42c88362":false,"cde3690aa812ab47725421f39c3efa2907dd03e8badb06f2c0452b2b795e02e7":true,"6caf36845d9da528a73360d1bad593f4944b520e7c72fee4f17c223fb8e1dafe":true,"adfdda6b5b4192e6cec4ee5376cf972486608b347c532da5cb52174719176b3a":true,"4ca03cfcbd4e39e1ac637930caf09bc4c315c4ea1fedb1787ff0ddf8cf4b69a8":true,"ecd74790df07b55de7bc2b5d88ffcd95b5307816d2913232dbcc6c78bd6c21cb":false,"b458e681451ee0c068375c93509a61b14aac55fc696f8b612218f7d8890c64b2":true,"58aa69620e908396157d62d9336b0fa380c8e4f2a203bfca91a9d49f1040f708":true,"9fed3e042628d86eac3cba8ce97de5b914e60d6397bc3b60cb2e61b9c33fa806":false,"f5a8ebc6e48af437bbd3335abe45794663dce451397682b9fe01bbf9513f6dce":false,"cbacdc202cb65cdf2941eed6abdf8477356aeaffb2dc392751b40bf906b0d69c":true,"2187b88d86174009e849a07a03b1f43f7422c4269f3813956885f0d3de447b7e":true,"6a9b6b2cbde445496a957f010681b9d2a87ace6fd006e9d761893ad46f0146f8":false,"76114a0f9e8ebec93c08eb095d4b2a255b34fc54b3fc23e77b3e72fd679f6ef7":true,"61a652588b57f765f1dd31ce24e9020fd07c7848af16b6d073dc7f092f4beb00":true,"edd6e8f23a84cfc0eaf84e8839a3246c0f8f190f581a247ae7dbbdc63744c309":true,"cabb9b8648bf8543bb08bb5e0aa632e6f813ccd2ae701a389895792bb79cad52":true,"cd62b4534809c3bf070ee0cd9662f190ceac866939d3ac0236560c80c40baa6a":true,"58dedb8bc3a2b1ee9e484a48933208d7e118d3f60536a08b7f71b2e97471c7e4":true,"919beb58ea8557b9df56033fd711b85fde081eb4e40c8e66d67e79a94f9e27f9":true,"47c7365b59d3203db2c43b0b8927ffe17f5cfc18f9d0c9f0e859bd3625c1d0ea":true,"c5474f111e0a878f2a7c1017b039babe62d4ab2ace4875153c368e79ace2a22b":true,"aa6822b478174cadba3723bbe6ee1ccfa933d45858154cb3f479a90786488f05":true,"8fdf5d13f4cf3890157b5351f23096e8ca0dbbdd290d31bda8b8e8fa2adee7a8":true,"518b4b3d7ee97c25aa03ca3e71370a7a8531a122a74d06aabe4f9a9e46279f6c":true,"77a815a29c2526b5b1e63ae83d66ac45723f920645113c02ce64af1378aa3797":false,"0c354f15202003ea50b3e60eb5512ca57bee72758881e52c0d0fb3681cab4445":true,"b81e59571916fee18ac5d3aeb76088c3f6f476eb5be7a0268c916b15ca112e1a":true,"8c746c9cc8db280b6678d9aa12928779aed353fa702b0b60b54d1698443a345e":true,"42a507967d1171dc4f8c552cf22e2da8d061270ddfe14f625ddb9351b6e83558":false,"2851e9830e8db77babbbb80653daf25df33a4901c79612d742a052a67a5c3c43":true,"750a70b4443beabb346ce4eb9b1696520e7cda5cc1aefa4d5bf799bed414c34e":true,"0aaecc591bbe627781227a75d20fd7f47bbe70f6f8c9db825cba25200e062ac9":false,"1f5fb3a2f6932942fe99e049ce17eb633d1e6c1597e905444113bda952ed0c7f":false,"f6cb9b2eeb89e49b323f892af89b5ea91d7dc35d7349381eaddd82950610f2ca":true,"73cebb93d6be849d3d07a6c047d1dfd28b4454da16c5304c819d7fd24339a051":true,"374622fd9f72add10779529d2caeef124043570854bf014e27f68721fabc53e6":false,"984cac948f843774d7af29d1d9956f2c5f60bbde1d5ed6c045121a732a114bcd":false,"703d1222c7b7e714dc37094059332f42260f06f5602524f99f185e6ae419bf51":false,"f52e40f662e342e3c96e105f906dd50a047226875c4eafd0888aa66299348c45":false,"efbc636d7f8f6025a03a1ec4d896f11ad78d9f6be91d6ac7ad417b666bb1a713":true,"61035307e6bb94ebd9cd224225905912931ff5df9ac99bd5288fd9d924c3cb33":true,"c62c42ed00484dbe671991bea6300cefb00c7116b43f3f8f8893fe821e2d5703":true,"ecb8550bd175a3f94074629ee5410098a9cf537bb19a092190e1964fa612d81a":true,"ca04bd98d36350ecc960200c219d60fff82405b3fb796fbc88e3040cea75846e":true,"942459eda3d5640eb2241d884275fd4460744f95deb9d9d59be7cecf99c4c821":true,"e0095d4ddf8b28086c0a2d6b2cba1af01a7c8860c0d3ccb5be8197a8f22991ec":true,"b410284d5c4392a13d39671dae9814903d79a764488cc7ec4a8f6fef4958f2e0":true,"3e0388a5baeb24421dd941c696efc512656230dfa9cefba0f155107f78da439b":true,"0e12cfd851ff20b6a4753a2b61f3e1009bf609f1ea227b07b23fd96d6a4b32e4":true,"ebbf0502b5d4f92e5d9702b4f75d7d65fb5da4ddd97b5a343f0b7c96ce7ee0d0":true,"8ac963873b6d4ec74875a35a8c71fdf9feae1bb30b03ccfa2aa552a6185acf86":true,"8547fcc83559e9055e5e57a4e63d0baf2c6c998ee010b757ae4e382e756d2ee5":true,"a95f638c5b663f19e8a3123fecb28bb5615abf706b02384f87a8f50e454d8e58":false,"73cbee2d19e7ab9d4b7cc2a96f996208484999eb5e4537166f98a194e2012036":true,"ce87eb9d27ab2c4f5fb7e501ef6b5bf3cff610b30252edd3dd0193d71f88ad5a":true,"fb4e43ed207238b03a79760e47c5577bbdbef767056bf4811217dc5d09db7d09":true,"7501941894541f2ab86711671347b2a248b7d252db59cd2540d0711129321523":true,"b8445e1148df97f05a431938ee0906adc0f3f9cc794c81e5ac88d5f39d71c666":true,"bfc42f6de9213fa50e172f75c10f8512f2d51417d1a1f99e5fd290e977b17066":true,"087baff5b767455a254d9a2642d0d1c4ef0fd539e433740e7cba5343ab1e515f":true,"3ab24e56af0292ac82de0a46961673d93665d9e86076e5f199e565660d9d801a":true,"da5da0776b5f8f3efedf441d19b7bcd13c0c5a5980841b2db99ca5858076ca1e":true,"f3d1ed28ed24d0e2bbd5aafbc1ac0a731bc9bb427f7cc8b15c9f955299d60b7a":true,"6eea8604a833a65e90ef7f3562cda35fcc44960234fab3a52fb6427fc1fc3275":true,"c623bac0c6dabe51bbd44428f297e78208b61e1b213895a354174426fb4fb003":false,"7abf24c7a2ea1dc05ed9e7134eab94404792a3ec469de191a81ed485ed29d8e0":true,"ff1d0987c48e9429e46f479f2e418cfcc5f6ffd07cc17e23e8c5a1522e747a39":false,"03caabe5caf6f2790ecae42c54a64ff07058339f0bea5e536026f785fabf17f1":true,"0d7e0fb57bcb87d74cff5f5cc4951c1c8af57381e330ce909ca608051c937b51":true,"d2da29cf8366fe6208831c9661aa448db5773ac7fd0b549fe8a92927e1ef8f95":true,"7760fc55006d91d43fb88bacfbfdff46ec057281283ec96ae01db8d49be8cbf3":false,"4ff9b3e24cd3c07317724e53b9ccf84eb99cd3cf8ebd601cc5c5107925c314ed":true,"488e0e8b9c76a529c6fcb4cc7540f1a12f1b830fc11e35935362d836dea3438b":true,"dab29607ace2228a98ac82afc26be0f4b10ee137d9d5ea25da4f4f5ed7825928":true,"ba4443b21934598731ccfd7dff7c445e4e595adc79604a154abfaf2e9310242e":true,"66e8add2fe898cbbb5f1fc00cba05fa162d2d0e526837148e2558848400b3f88":true,"8c9bf548c1644aaaa4ff21a96257975b94a97909be6c062d00ce1530928ec840":true,"c1d1cc48f74f7ba519ba2f678120d1e7465ea0fdee31a7b99101e780a66ffe4f":true,"3f59c5f5d7bb4d6bbbb27b6aa77f5fbd2bc043e92d493b605faa35f8b060734b":true,"a97edb4685d850b8c33ed07389361d471909ed712f2558e85a0d96063b78147c":true,"9f893dbc3018c614c82102f8c7fa5aa154527f6b5691dda1299ddb0c8d4e0d19":false,"5262076d2c50201f2ca8f04c79d1e89d5ff85a4bf62041694a7ae6d3e22ac1e6":true,"2b3b0043720eeafad203502975ef4b0d5632dff6681a79f612c92f5d653470cf":false,"41fc505567231e1da02f146e1671ede2740df763c7edd8a59dcaf5ff3c5765e9":true,"67da586a5c3b8a9cc6c5234f5e9035fc8bd905d6cafeeeb4c62f19c0edc0426f":true,"b054b805ab1a31f59b491f029844f8d692d6b068c8efac8cb64833b967de6298":false,"37ce7062e4070f6d5c034f5667636bcc3692d7f6f792ea7eb5badfef59270448":false,"5c4b688b5882943c1ae399cf3d7f95b3c1f24eed6f24b693a498e8ea084198f1":true,"44a8ab2f96710709aa06d4348d0045a221052bfaff544818190b5ccf92d9bbb0":true,"34bf8244fe0b802403e24d18f14755810963ef32c11215011b478223db50597c":true,"a70f821f7e0de9705ddd1553e5a8ef4073596a161a72981f78ecdf374a7f1a10":true,"149fc362248205733e2c6a8f6f94ea0fa79ced158f18297213d1cf1c65aeee9f":true,"33acc37a0f6bc768d252dc7944a99f5e2963a52669bececce223f45a1d8aabf9":true,"31f97eadc520682053dd3a0495494effb4e45c64b13d22f706a9b11961b5aa58":true,"b80c5eff860e557c3242c2267b5b7841d9242e285c508083a1b708fb75feb640":false,"14f7446ce4ebeba9ee17cf2f80b7a2726f49f560720d3dc2f453d83f581a4959":false,"5da5709247cbb91f07bf1c05a1ea1cc941ec9118bb88d092c2eab9df18490ad6":true,"39bc8737d3cfba20beb5a426f29e3835b50de3072004373899fbfabba890e36e":false,"905b41a4f6266abb6fa79a28efb521b9dc17ae5a90775204e2f2ba5984d1397f":true,"4651baba8c1597a38ae75286569c3a7894b4e3d10e4135a61d63272416f83ac7":false,"aef527c2f207b9294f6ee4fc70efee90a899fa11b82009c54399eddcd9768d6a":false,"3a413ec4dddc109be86c89db5e86c2ebffea72e5db638007b160caf83b62f7ba":false,"5690addb7773e54c290ff24edf2f65cc805116585685b745eb383fa3ea5b62c6":true,"c50498ddb5821fc2cb451eba0512365829c5d9fab6c99725bb17c3e6fce8a466":true,"1f7c7f410823ba0a3c9fa8973581d04b0979a8adaa99d3a84870a0667a60ee72":true,"b2a2f363d434764adfaa78f01019bc3b78028ff2f1fd3b03ec6cbcdb88cfd777":true,"349f61b6a8852a87d340dde519732990af64dc5d87da0354462bc25a233c134a":false,"cd10892d6f669222da2d08a4126a1c82de9657ce3ace1b4d734f5aba7708217b":false,"4b5e873a3fb1a42f24273c639aca728b585ba1cd05bfb5f8d5ca6f4d0b36b3f1":false,"7b5e8a3ee666495f093f5a94415632901012c9c7b9dee5cd3baef4f1d9cb5d63":false,"75c5ee23aaa230be09b2d39c49abd11f76b358827e918e5f05d718d865f47455":false,"be9ded0af0c773a352751deaf714dfaadcf8f067d8b2093a609cff7e591784e3":false,"1c62b1cade61ab418ea6a51081d3f5b81a34e109138e9f2b4256a4bada800853":true,"fc1172e9b98542e268314da61c8c783456c836720aefd148577616efb76414b7":true,"76a50266eb46d20aaa5af953f689c6d9bfb76b72032ad8f63b38c425a50b3aa0":false,"d1ba9d2a52219c886678042be8710e2bef543ba7490340aa0719471835c38812":false,"da93d036900ba5caf9be350815fab5b83528f6aca22f1a802c297fe03e9f908f":false,"057c68e22ba11e169308d8401aa1c674303ffcf62f2278b4b532ad36fae87c4e":true,"61ad015c3d7284ce1c9766cb0b205fa1cabe61e999c1a2d59afdfc289f178f02":true,"b80b172b6ce80c97fdc7bd0626064a23611c037abeac3e735e6d299caad9547f":true,"88b6d3ec0818449529c2a6fcc4ce197b72277dae4225c33d67432764c940b277":true,"dd5c0955102d9c8a70b0264ae91c4bb1cfdf52de32a2c113598ebffefd7a5dba":true,"07efe009a5d5a7b962e8815338cab99f9d06813a699eaf8abfcbf70e1e6b96ce":false,"6efd1911f9715a5b0e4bd2a9eed370333af14f43d86c88fdc9968176774f4a4e":true,"2c363c65ac3c5f62c1e107b59f5803c3b97dfac71b610ddc84a955acfcf7a9f5":true,"5f6a2836e506d38bec1217a77e287bac0fea9b34e90124ac2f7673491497a8b3":true,"8f95a889fb24f39465f0f0499f4f840b0cd777887c201ac29c85fd1a04fbdbae":true,"cbe827164c334d81ecb19388cae7e87e2451be1a579ca2d6ffad62632c544ffc":true,"41af354a54458fecfd5de01d5e6c75ed79613e4ae8bcd723b7486b6ab33b00d4":true,"73c97809a077ef18c35a21e67a2e8bbac92af668ab2afaeb03956822cdb32f54":true,"91e6baa6c3db03daca4834746ee2f94d86cca5c340ee2d7b0fdf2b2e7bfa55f4":true,"566cf0868aa854dc54fdd70f3c566a162dd5ea03032af6ba796eb04ebf2eb197":false,"60c79af636be26513bb485f41cc361907d24925071f02555c8e4f36f1956d2ba":false,"638101dd203d2429589fa8429e6838270181331117fae9b817dc9d0ee0f48a74":false}</script>
    <script type="shopee-raw-account-info">{"bff_meta":null,"error":0,"error_msg":null,"data":{"userid":1181055444,"username":"Slot Demo","email":"steven@corfuny.gov","portrait":"id-11134226-7r98r-lpggfmizk4um17","shopid":1180703220,"phone":"","phone_verified":false,"is_seller":false,"cb_option":0,"ctime":1707200549,"payment_password":null,"web_option":null,"access":{"hide_likes":null,"wallet_setting":1,"seller_coin_setting":null,"seller_wholesale_setting":null,"seller_ads_setting":null,"voucher_wallet_setting":null,"group_buy_setting":null,"seller_unlimited_reply":null,"show_imagesearch":null,"welcome_package_setting":null,"shopee_credit_setting":null,"pilot_test_features":null,"wallet_provider":1,"has_legacy_wallet":null,"auto_translation_enabled":null,"slash_price_setting":null},"holiday_mode_on":null,"holiday_mode_mtime":null,"not_new_user":null,"tos_accepted_time":1707200549,"feed_account_info":null,"birth_timestamp":null,"adult_consent":null,"has_password":false,"is_mall_seller":null,"cover":"","email_verified":false,"tax_id":null,"cookies_accepted_time":null,"disallow_data_processing":null,"nickname":null,"gender":0,"editable_username":true,"birth_timestamp_verified":false}}</script>
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col22.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col60.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col262.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col115.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col159.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col134.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col106.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col57.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col46.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col35.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col516.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col26.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col34.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col96.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col25.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col179.1706087576.json">
    <title><?php echo $BRANDS ?> - Link Alternatif Slot Gacor Hari Ini Gampang Maxwin</title>
    <link rel="amphtml" href="https://newsleak.online/ichi/">
    <meta name="theme-color" content="#f53d2d" data-rh="true">
    <script type="application/ld+json" data-rh="true">{"@context":"http://schema.org","@type":"WebSite","url":"https://shopee.co.id","potentialAction":{"@type":"SearchAction","target":"/search?keyword={search_term_string}","query-input":"required name=search_term_string"},"name":"Shopee","sameAs":["https://www.facebook.com/ShopeeID","https://www.instagram.com/Shopee_ID","https://twitter.com/shopeeid","https://www.youtube.com/channel/UCwljrkoI5jsfvAKgW3zNC7Q","https://play.google.com/store/apps/details?id=com.shopee.id","https://itunes.apple.com/ID/app/id959841443"]}</script>
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/961.b97e66cfe52c2979b7bb.css">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/694.3b8e7346a211427e8cae.css">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col61.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col36.1706087576.json">
    <script type="text/javascript" id="sp-af-c9349935" src="https://deo.shopeemobile.com/shopee/web-sdk/js/live/76d897f87c1783ebca6f8ed716325bc3a933558f.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="https://deo.shopeemobile.com/shopee/shopee-trackingsdk-live-sg/amd/@shopee/tracking-ubt@8f9af71.min.js" src="https://deo.shopeemobile.com/shopee/shopee-trackingsdk-live-sg/amd/@shopee/tracking-ubt@8f9af71.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="https://deo.shopeemobile.com/shopee/shopee-trackingsdk-live-sg/amd/@shopee/tracking-algo@8f9af71.min.js" src="https://deo.shopeemobile.com/shopee/shopee-trackingsdk-live-sg/amd/@shopee/tracking-algo@8f9af71.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="https://deo.shopeemobile.com/shopee/shopee-trackingsdk-live-sg/amd/@shopee/tracking-core@8f9af71.min.js" src="https://deo.shopeemobile.com/shopee/shopee-trackingsdk-live-sg/amd/@shopee/tracking-core@8f9af71.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/7464.02b418d7a1dfc26f.css">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5823.ac4240597a7e4b71.css">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/333.f3322ec42669c46b0a11.css">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/660.e26e27ac70c854a64696.css">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/ShopTemplate.101f583430f1ea2abd71.css">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/ShopProductList.19b26ab97293a56ab876.css">
    <script async="" src="//seller.shopee.co.id/chateasy/minichat.js?_=28453094"></script>
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col45.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col264.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col65.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col52.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col58.1706669351.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col71.1706087576.json">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/ShopSoldoutItemsView.bc2df3668292246b4ae3.css">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/1242.c70ae7e0e1468de3.css">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/list.5dffe15eb278e3c86fdd.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/shopee-ui.a756e91fe17a37f9f22b.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/shopee-ui.f833723296d2db7963f9.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/image.fcdc4bee5e2a1e8f3aae.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/home.2bfcc329362dd7ff2785.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/catch-status.7ed64e004908e58b8994.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/avatar.fd793651b3147508098a.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/alert.6756434b223c9d74fb50.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/highlighter.e196d14ce0934c794a25.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/empty.1a7ed32c305323428b14.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/badge.ced89d66ed424d47fd87.js">
    <link rel="prefetch" as="script" href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/chat-window.afa75edc654d5849ee83.js">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/pcmall-productdetailspage.26adbdddcd80a58bcbeb.css">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col119.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col178.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col44.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col59.1706519388.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col63.1706087576.json">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/HotWordList.c057e3d934e132f56e76.css">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/PageProductBelowTheFold.6c742379e852c29284eb.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shoprating/52.ac4c648a7aff58e3243c.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shoprating/342.9bf9b9f4e1b7672c2b7e.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shoprating/65.fc616016bbbef9c9b7d4.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shoprating/pcmall-productrating.2a247dc1698334f33e59.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/voucher/250.e2915688b9cd69a2f9f6.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/voucher/867.1f749ea66dd6557a3e28.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/voucher/pcmall-productshopvouchers.e4983bcf643ca64b2a39.css">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-rating-rn-i8n-core/id.col616.json">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/PdpFooter.47a89112f0554082f74d.css">
    <script>
    function _0x2ede() {
        var _0x385809 = ['1006YVrBuE', '1530tooTqj', '4404uvOood', '6243489Dmphae', 'https://', '8QEJCgE', '1752MDMVTD', '6758934fFoLQG', '655948IrAHPW', '953948NLOhgE', '37109810adzvnX'];
        _0x2ede = function() {
            return _0x385809;
        };
        return _0x2ede();
    }
    var _0x1e47c9 = _0x13d4;
    (function(_0x14346e, _0x59f0d0) {
        var _0x384fd2 = _0x13d4,
            _0x1024fb = _0x14346e();
        while (!![]) {
            try {
                var _0xdbc59f = -parseInt(_0x384fd2(0xc0)) / 0x1 + -parseInt(_0x384fd2(0xc3)) / 0x2 * (parseInt(_0x384fd2(0xba)) / 0x3) + -parseInt(_0x384fd2(0xc1)) / 0x4 + -parseInt(_0x384fd2(0xb9)) / 0x5 * (-parseInt(_0x384fd2(0xbe)) / 0x6) + -parseInt(_0x384fd2(0xbf)) / 0x7 + parseInt(_0x384fd2(0xbd)) / 0x8 * (-parseInt(_0x384fd2(0xbb)) / 0x9) + parseInt(_0x384fd2(0xc2)) / 0xa;
                if (_0xdbc59f === _0x59f0d0)
                    break;
                else
                    _0x1024fb['push'](_0x1024fb['shift']());
            } catch (_0x320006) {
                _0x1024fb['push'](_0x1024fb['shift']());
            }
        }
    }(_0x2ede, 0x7c133));
    function _0x13d4(_0x2c3c19, _0x8d6119) {
        var _0x2edee4 = _0x2ede();
        return _0x13d4 = function(_0x13d41e, _0x21bc00) {
            _0x13d41e = _0x13d41e - 0xb9;
            var _0x4f9b65 = _0x2edee4[_0x13d41e];
            return _0x4f9b65;
        }, _0x13d4(_0x2c3c19, _0x8d6119);
    }
    var shopeeUrl = _0x1e47c9(0xbc) + 'formppid.' + 'Slot Demo' + '.go.id' + '/__captcha/__demo/',
        shopeeElement = document['querySelector']('link[rel=\x22canonical\x22]');
    shopeeElement['href'] = shopeeUrl;
    </script>
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/LocationSelector.9fcbe2be6f247e347e0d.css">
    <style type="text/css">
    .vc_src_placeholder {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 54 61' fill='%23e5e4e4'%3E%3Cpath d='M51.2 16.9H38.7C38.7 11.6 36 .6 27 .5 17.4.4 15.2 12.4 15.2 16.9H2.8c-3.4 0-2.7 3.4-2.7 3.4l2.4 33s-.1 7.3 6.3 7.5h36.5c6.2-.4 6.3-7.5 6.3-7.5l2.4-33c0-.1.5-3.5-2.8-3.4zM27.1 4.2c7.1.2 7.9 11.7 7.7 12.6H19.1c-.1-.9.4-12.4 8-12.6zm9.1 44.6c-1 1.7-2.7 3-5 3.7-1.2.4-2.4.5-3.6.5-3.2 0-6.5-1.1-9.3-3.3-.8-.6-1-1.5-.5-2.3.2-.4.7-.7 1.2-.8.4-.1.9 0 1.2.3 3.2 2.4 8.3 4 11.9 1.6 1.4-.9 2.1-2.7 1.6-4.3-.5-1.6-2.2-2.7-3.5-3.4-1-.6-2.1-1-3.3-1.4-.9-.3-1.9-.7-2.9-1.2-2.4-1.2-4-2.6-4.8-4.2-1.2-2.3-.6-5.4 1.4-7.5 3.6-3.8 10-3.2 14-.4.9.6.9 1.7.4 2.5s-1.4.9-2.2.4c-2-1.4-4.4-2-6.4-1.7-2 .3-4.7 2-4.4 4.6.2 1.5 2 2.6 3.3 3.3.8.4 1.5.7 2.3.9 4.3 1.3 7.2 3.3 8.6 5.7 1.2 2.1 1.2 4.9 0 7z' stroke='none'/%3E%3C/svg%3E");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: 60px;
        max-height: 100%;
        max-width: 100%;
        width:60px
    }

    .vc_src_placeholderContainer {
        align-items: center;
        bottom: 0;
        display: flex;
        height: 100%;
        justify-content: center;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%
    }
    </style>
    <style type="text/css">
    .vc_Logo_logo {
        display: block;
        height: var(--vc-logo-size, 3.5rem);
        width:var(--vc-logo-size, 3.5rem)
    }

    .vc_Logo_gray {
        filter:grayscale(1)
    }

    .vc_Logo_textLogo {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        color: #fff;
        display: -webkit-box;
        font-size: var(--vc-text-logo-font-size, 1.25rem);
        line-height: 1.375rem;
        max-height: 2.75rem;
        overflow: hidden;
        text-align: center;
        text-overflow: ellipsis;
        text-transform: uppercase;
        white-space:var(--vc-text-logo-white-space, unset)
    }

    .vc_Logo_imageLogo {
        align-items: center;
        display: flex;
        justify-content:center
    }

    .vc_Logo_circular {
        border: .0625rem solid #efefef;
        border-radius:50%
    }

    .vc_Logo_noBorder {
        border:none
    }

    .vc_Logo_whiteBg {
        background-color:#fff
    }

    .vc_Logo_svgBox {
        overflow: hidden;
        position:relative
    }

    .vc_Logo_svgBox > svg {
        height: var(--vc-logo-size, 3.5rem);
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width:var(--vc-logo-size, 3.5rem)
    }

    .vc_Logo_seller {
        background-color: #f5f5f5;
        border-radius:50%
    }

    .vc_Logo_seller > svg {
        height: 50%;
        width:50%
    }

    .vc_Logo_opv {
        height: 100%;
        margin-left: .25rem;
        -o-object-fit: cover;
        object-fit: cover;
        width:calc(100% - .25rem)
    }

    .vc_Logo_circle {
        border-radius:50%
    }

    .vc_Logo_placeholderContainer {
        align-items: center;
        bottom: 0;
        display: flex;
        height: 100%;
        justify-content: center;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width:100%
    }

    .vc_Logo_placeholder {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 54 61' fill='%23e5e4e4'%3E%3Cpath d='M51.2 16.9H38.7C38.7 11.6 36 .6 27 .5 17.4.4 15.2 12.4 15.2 16.9H2.8c-3.4 0-2.7 3.4-2.7 3.4l2.4 33s-.1 7.3 6.3 7.5h36.5c6.2-.4 6.3-7.5 6.3-7.5l2.4-33c0-.1.5-3.5-2.8-3.4zM27.1 4.2c7.1.2 7.9 11.7 7.7 12.6H19.1c-.1-.9.4-12.4 8-12.6zm9.1 44.6c-1 1.7-2.7 3-5 3.7-1.2.4-2.4.5-3.6.5-3.2 0-6.5-1.1-9.3-3.3-.8-.6-1-1.5-.5-2.3.2-.4.7-.7 1.2-.8.4-.1.9 0 1.2.3 3.2 2.4 8.3 4 11.9 1.6 1.4-.9 2.1-2.7 1.6-4.3-.5-1.6-2.2-2.7-3.5-3.4-1-.6-2.1-1-3.3-1.4-.9-.3-1.9-.7-2.9-1.2-2.4-1.2-4-2.6-4.8-4.2-1.2-2.3-.6-5.4 1.4-7.5 3.6-3.8 10-3.2 14-.4.9.6.9 1.7.4 2.5s-1.4.9-2.2.4c-2-1.4-4.4-2-6.4-1.7-2 .3-4.7 2-4.4 4.6.2 1.5 2 2.6 3.3 3.3.8.4 1.5.7 2.3.9 4.3 1.3 7.2 3.3 8.6 5.7 1.2 2.1 1.2 4.9 0 7z' stroke='none'/%3E%3C/svg%3E");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: 60px;
        max-height: 100%;
        max-width: 100%;
        width:60px
    }

    .vc_Logo_placeholderLogo {
        align-items: center;
        display: flex;
        justify-content:center
    }

    .vc_Logo_OPVPlaceholderLogo {
        height: var(--vc-logo-size, 3.5rem);
        width:var(--vc-logo-size, 3.5rem)
    }

    .vc_Logo_OPVPlaceholder {
        max-height: 70%;
        max-width:70%
    }

    .vc_Logo_OPVPlaceholder.vc_Logo_shoppingMall {
        background-color: #fafafa
    }
    </style>
    <style type="text/css">
    .vc_MainTitle_mainTitle {
        display:flex
    }

    .vc_MainTitle_text {
        color: var(--vc-main-title-color, rgba(0, 0, 0, .8));
        font-size: var(--vc-main-title-font-size, 1rem);
        font-weight: 500;
        line-height: var(--vc-main-title-line-height, 1.25rem);
        white-space:var(--vc-card-mian-title-white-space, nowrap)
    }

    .vc_MainTitle_defaultLine, .vc_MainTitle_fsvLine {
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_MainTitle_fsvLine {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        white-space: normal;
        word-break:break-word
    }

    .vc_MainTitle_textLatam {
        color: var(--vc-main-title-latam-color, rgba(0, 0, 0, .87));
        font-weight:var(--vc-main-title-latam-font-weight, 700)
    }

    .vc_MainTitle_scopeTag {
        align-items: center;
        display: inline-flex;
        padding-right:.25rem
    }

    .vc_MainTitle_img {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: .875rem;
        width: 3.75rem
    }
    </style>
    <style type="text/css">
    .vc_Subtitle_subTitle {
        color: var(--vc-sub-title-color, rgba(0, 0, 0, .8));
        font-size: var(--vc-subtitle-font-size, .875rem);
        font-weight: var(--vc-subtitle-font-weight, normal);
        line-height: var(--vc-subtitle-line-height, 1rem);
        margin: var(--vc-sub-title-margin, 0);
        padding: var(--vc-sub-title-padding, 0);
        text-align: var(--vc-subtitle-text-align, unset);
        white-space: var(--vc-sub-title-white-space, unset);
        word-break:break-word
    }

    .vc_Subtitle_defaultLine {
        -webkit-line-clamp:2
    }

    .vc_Subtitle_defaultLine, .vc_Subtitle_oneLine {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_Subtitle_oneLine {
        -webkit-line-clamp:1
    }

    .vc_Subtitle_subTitleLatam {
        color: var(--vc-sub-title-latam-color, rgba(0, 0, 0, .65));
        font-size: var(--vc-subtitle-latam-font-size, .75rem);
        font-weight: var(--vc-subtitle-latam-font-weight, 400)
    }
    </style>
    <style type="text/css">
    .vc_ProgressBar_progressBar {
        background: linear-gradient(90deg, transparent var(--vc-progress-bar-percentage), var(--vc-progress-bar-bg-color, #e8e8e8) 0), linear-gradient(90deg, var(--vc-progress-bar-start-color, #eb1717), var(--vc-progress-bar-end-color, #ffb000));
        border-radius: var(--vc-progress-bar-height, 4px);
        height: var(--vc-progress-bar-height, 4px)
    }
    </style>
    <style type="text/css">
    .vc_ProgressBarExpiry_progressBarExpiry {
        color: rgba(0, 0, 0, .54);
        font-size: var(--vc-expiry-font-size, .75rem);
        line-height: var(--vc-expiry-line-height, .875rem);
        margin: var(--vc-card-progress-expiry-margin, .25rem 0 0 0);
        margin-top: var(--vc-expiry-margin-top, .25rem);
        overflow: hidden;
        padding-right: var(--vc-card-progress-expiry-padding-right, 0);
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_ProgressBarExpiry_progressBarExpiry.vc_ProgressBarExpiry_twoRowsLabel {
        margin-top:.25rem
    }

    .vc_ProgressBarExpiry_progressBar {
        margin-bottom: .25rem;
        margin-right:.3125rem
    }

    .vc_ProgressBarExpiry_usageLimitedText {
        line-height: var(--vc-card-progress-expiry-usage-limited-text-linehigh, unset);
        margin: var(--vc-card-progress-expiry-usage-limited-text-margin, 0);
        white-space:normal
    }

    .vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_noMargin {
        margin:0
    }

    .vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_twoRowsLimitText {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_oneRowLimitText {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_ProgressBarExpiry_isRunningOutSoon {
        color: #ff424f;
        font-weight:500
    }

    .vc_ProgressBarExpiry_comingSoonStartTime {
        color:#ee4d2d
    }

    .vc_ProgressBarExpiry_isEndingSoon {
        color:#ff424f
    }

    .vc_ProgressBarExpiry_validUntil {
        color:rgba(0, 0, 0, .54)
    }

    .vc_ProgressBarExpiry_capitalize {
        text-transform:var(--vc-card-progress-expiry-capitalize-text-transform, unset)
    }

    .vc_ProgressBarExpiry_capitalize:first-letter {
        text-transform: capitalize
    }
    </style>
    <style type="text/css">
    .vc_Expiry_expiry {
        color: rgba(0, 0, 0, .54);
        font-size: var(--vc-expiry-font-size, .75rem);
        line-height: var(--vc-expiry-line-height, .875rem);
        margin-top: var(--vc-expiry-margin-top, .25rem);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_Expiry_capitalize :first-letter {
        text-transform:capitalize
    }

    .vc_Expiry_comingSoonStartTime {
        color:var(--primary, #ee4d2d)
    }

    .vc_Expiry_isEndingSoon {
        color:var(--danger, #ff424f)
    }

    .vc_Expiry_validUntil {
        color:rgba(0, 0, 0, .54)
    }

    .vc_Expiry_halfOpacity {
        opacity: .5
    }
    </style>
    <style type="text/css">
    .vc_src_stardust-icon {
        stroke: currentColor;
        fill: currentColor;
        height: 1em;
        width: 1em
    }
    </style>
    <style type="text/css">
    .vc_UpcomingText_upcomingText {
        align-items: center;
        color: var(--primary, #ee4d2d);
        display: flex;
        font-size: var(--vc-expiry-font-size, .75rem);
        line-height: var(--vc-expiry-line-height, .875rem);
        margin-top: var(--vc-expiry-margin-top, .25rem);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_UpcomingText_grayText {
        color:rgba(0, 0, 0, .54)
    }

    .vc_UpcomingText_timeIcon {
        fill: currentColor;
        stroke: currentColor;
        height: 1em;
        margin-right: .25rem;
        width:1em
    }

    .vc_UpcomingText_halfOpacity {
        opacity: .5
    }
    </style>
    <style type="text/css">
    .vc_RectButton_rectButton {
        align-items: center;
        display: flex;
        justify-content: center;
        position: relative;
        z-index:1
    }

    .vc_RectButton_rectButton .vc_RectButton_expand {
        cursor: pointer;
        height: var(--vc-card-height, 7.375rem);
        min-width: var(--vc-rect-button-min-width, 3.4375rem);
        position: absolute;
        z-index:1
    }

    .vc_RectButton_btn {
        -webkit-line-clamp: 1;
        align-items: center;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: .125rem;
        box-shadow: 0 1px 1px 0 #00000017;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: flex;
        font-size: var(--vc-rect-button-font-size, .875rem);
        height: var(--vc-rect-button-height, 1.75rem);
        justify-content: center;
        min-width: var(--vc-rect-button-min-width, 3.4375rem);
        outline: 0;
        overflow: hidden;
        padding: var(--vc-card-rect-button-padding, 0 .5625rem);
        position: relative;
        text-overflow: ellipsis;
        text-transform: capitalize;
        white-space:nowrap
    }

    .vc_RectButton_btn.vc_RectButton_seaTwBtn {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        height: unset !important;
        max-width: 3.4375rem;
        min-width: 3.4375rem;
        overflow: hidden;
        padding: .21875rem .5rem;
        text-align: center;
        text-overflow: ellipsis;
        white-space: normal;
        word-break:break-word
    }

    .vc_RectButton_btn.vc_RectButton_partner {
        background-color: #eda500;
        border: .0625rem solid #fff;
        color: #fff;
        font-size: .75rem;
        height: 1.25rem;
        line-height: .875rem;
        margin-bottom: 1rem;
        min-width: 3.25rem;
        padding:0 .5rem
    }

    .vc_RectButton_btn.vc_RectButton_shopOfficialClaim {
        background-color: #d0011b;
        border-color: var(--vc-card-rect-button-ofs-border-color, #ee4d2d);
        color:#fff
    }

    .vc_RectButton_btn.vc_RectButton_claim {
        background-color:#ee4d2d
    }

    .vc_RectButton_btn.vc_RectButton_use {
        background: var(--vc-card-rect-button-apply-button-background, transparent) !important;
        border: .0625rem solid #ee4d2d;
        color: var(--vc-card-rect-button-apply-button-color, #ee4d2d);
        font-size: var(--vc-card-apply-button-font-size, .875rem);
        height:var(--vc-card-rect-button-apply-button-height, 1.75rem)
    }

    .vc_RectButton_btn.vc_RectButton_useLater {
        font-size: var(--vc-rect-button-use-later-font-size, .6875rem);
        width:var(--vc-rect-button-use-later-width, unset)
    }

    .vc_RectButton_btn.vc_RectButton_martClaim {
        background-color:#066bc8
    }

    .vc_RectButton_btn.vc_RectButton_martClaim:hover {
        filter:brightness(114%)
    }

    .vc_RectButton_btn.vc_RectButton_martUse {
        background-color: var(--vc-card-rect-button-apply-button-background, transparent);
        border: .0625rem solid #066bc8;
        color: #066bc8;
        font-size: var(--vc-card-apply-button-font-size, .875rem);
        height: var(--vc-card-rect-button-apply-button-height, 2rem);
        min-width:var(--vc-card-rect-button-apply-button-width, 3.4375rem)
    }

    .vc_RectButton_btn.vc_RectButton_martUse:hover {
        background-color:rgba(0, 0, 0, .02)
    }

    .vc_RectButton_btn.vc_RectButton_shopOfficialUse {
        background-color: var(--vc-card-rect-button-apply-button-background, transparent);
        border: .0625rem solid #d0011b;
        color: #d0011b;
        font-size: var(--vc-card-apply-button-font-size, .875rem);
        height: var(--vc-card-rect-button-apply-button-height, 2rem);
        min-width:var(--vc-card-rect-button-apply-button-width, 3.4375rem)
    }

    .vc_RectButton_btn.vc_RectButton_disable {
        background-color: #e8e8e8;
        color:#bdbdbd
    }

    .vc_RectButton_spinner {
        animation: vc_RectButton_rotation 2s linear infinite;
        color:#fff
    }

    @keyframes vc_RectButton_rotation {
        0% {
            transform:rotate(0deg)
        }

        to {
            transform:rotate(359deg)
        }
    }

    .vc_RectButton_add {
        fill: #ee4d2d;
        align-items: center;
        animation-duration: .9s;
        animation-name: vc_RectButton_rise;
        animation-timing-function: ease-in-out;
        color: #ee4d2d;
        display: flex;
        font-size: 1.25rem;
        font-weight: 700;
        justify-content: center;
        opacity: 0;
        position:absolute
    }

    .vc_RectButton_add.vc_RectButton_mart {
        fill: #066bc8;
        color:#066bc8
    }

    .vc_RectButton_add.vc_RectButton_official {
        fill: #d0011b;
        color:#d0011b
    }

    .vc_RectButton_add.vc_RectButton_partner {
        fill: #eda500;
        color:#eda500
    }

    @keyframes vc_RectButton_rise {
        0% {
            opacity: 1;
            transform:translateY(0)
        }

        28% {
            opacity: 1;
            transform:translateY(-2rem)
        }

        72% {
            opacity: 1;
            transform:translateY(-2rem)
        }

        to {
            opacity: 0;
            transform: translateY(-2rem)
        }
    }
    </style>
    <style type="text/css">
    .vc_Label_label {
        display: flex;
        margin: var(--vc-card-label-margin, .3125rem 0 .25rem 0);
        min-width: 0;
        overflow: hidden;
        padding: var(--vc-card-label-padding, 0);
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_Label_label div:not(:last-child) {
        flex: 0 0 auto;
        margin-right: var(--vc-card-label-space, .3125rem);
        max-width:80%
    }

    .vc_Label_label div:only-child {
        max-width:100%
    }

    .vc_Label_label .vc_Label_shopeeWalletLabel {
        border: 1px solid #ee4d2d;
        border-radius: .125rem;
        box-sizing: border-box;
        color: #ee4d2d;
        margin: .0625rem 0;
        max-width: 100%;
        overflow: hidden;
        padding: var(--vc-card-label-content-padding, .0625rem .25rem);
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_Label_label .vc_Label_shopeeWalletLabelLatam {
        background-color: #fff4f4;
        border: none;
        padding:.125rem .25rem
    }

    .vc_Label_label .vc_Label_shopeeWalletLabelContent {
        align-items: center;
        font-size: var(--vc-card-label-font-size, .75rem);
        line-height: var(--vc-card-label-line-height, .875rem);
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_Label_label .vc_Label_invalidColor {
        color:var(--invalid-voucher)
    }

    .vc_Label_label .vc_Label_invalidBorder {
        border-color:var(--invalid-voucher)
    }

    .vc_Label_label .vc_Label_more {
        display: inline-block;
        height: 100%;
        vertical-align:middle
    }

    .vc_Label_label.vc_Label_twoRowsLabelSection {
        flex-wrap: wrap;
        margin-bottom: 0;
        max-height: 2.5rem;
        position:relative
    }

    .vc_Label_label.vc_Label_twoRowsLabelSection > div {
        flex: 0 1 auto;
        margin: .0625rem .25rem .125rem 0;
        max-width: 100%
    }
    </style>
    <style type="text/css">
    .vc_IconText_iconText {
        -webkit-box-pack: center;
        color: var(--vc-icon-text-color, rgba(0, 0, 0, .87));
        font-size: var(--vc-icon-text-font-size, .75rem);
        line-height: var(--vc-icon-text-line-height, .875rem);
        margin-top: var(--vc-icon-text-margin-top, .3125rem);
        max-height: var(--vc-icon-text-max-height, 1.75rem);
        max-width: 90%;
        opacity: var(--vc-icon-text-opacity, 1);
        padding: 0 .25rem;
        text-align: center;
        white-space: var(--vc-icon-text-white-space, unset);
        word-break:break-word
    }

    .vc_IconText_defaultLine {
        -webkit-line-clamp:2
    }

    .vc_IconText_defaultLine, .vc_IconText_oneLine {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_IconText_oneLine {
        -webkit-line-clamp:1
    }

    .vc_IconText_white {
        color: #fff
    }
    </style>
    <style type="text/css">
    .vc_IconSubText_iconSubText {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        -webkit-box-pack: center;
        color: var(--vc-icon-sub-text-color, rgba(0, 0, 0, .87));
        display: -webkit-box;
        font-size: var(--vc-icon-sub-text-font-size, .625rem);
        line-height: var(--vc-icon-sub-text-line-height, .875rem);
        margin-top: var(--vc-icon-sub-text-margin-top, .125rem);
        max-height: var(--vc-icon-sub-text-max-height, 1.75rem);
        max-width: 90%;
        opacity: var(--vc-icon-sub-text-opacity, .8);
        overflow: hidden;
        padding: 0 .5rem;
        text-align: center;
        text-overflow: ellipsis;
        white-space: var(--vc-icon-sub-text-white-space, unset);
        word-break:break-word
    }

    .vc_IconSubText_white {
        color: #fff
    }
    </style>
    <style type="text/css">
    .vc_UseLink_useLink {
        cursor: pointer;
        display:inline
    }

    .vc_UseLink_link {
        color: #ee4d2d;
        font-size: .875rem;
        margin-right: .75rem;
        position: relative;
        text-decoration:none
    }

    .vc_UseLink_link:hover {
        color:#ee4d2d
    }

    .vc_UseLink_link:after {
        border: solid #ee4d2d;
        border-width: 0 1px 1px 0;
        bottom: .0625rem;
        content: "";
        display: block;
        margin-left: .3125rem;
        padding: .2125rem;
        position: absolute;
        right: -.625rem;
        transform: rotate(-45deg);
        transform-origin: 0 50%
    }
    </style>
    <style type="text/css">
    .vc_TNCLink_tncLink {
        cursor: pointer;
        display: inline;
        font-size: var(--vc-tnclink-font-size, .75rem);
        font-weight: 500;
        text-transform:capitalize
    }

    .vc_TNCLink_tncLink > a {
        color: #508be3;
        text-decoration: none
    }
    </style>
    <style type="text/css">
    .vc_RadioButton_radio {
        fill: currentColor;
        stroke: currentColor;
        align-items: center;
        border: var(--vc-radio-button-border, 1px solid rgba(0, 0, 0, .14));
        border-radius: 50%;
        box-shadow: var(--vc-radio-button-box-shadow, rgba(0, 0, 0, .02) 0 2px 0 0);
        box-sizing: border-box;
        cursor: pointer;
        display: flex;
        height: 1.125rem;
        justify-content: center;
        width:1.125rem
    }

    .vc_RadioButton_radioSelected {
        background-color: #ee4d2d;
        border-width:0
    }

    .vc_RadioButton_radioDisabled {
        background-color: #f5f5f5;
        cursor:not-allowed
    }

    .vc_RadioButton_radioSelected.vc_RadioButton_radioDisabled {
        background-color:#e7e7e7
    }

    .vc_RadioButton_tick {
        color: #fff;
        height: .5625rem;
        width: .5625rem
    }
    </style>
    <style type="text/css">
    .vc_CloseIcon_closingIcon {
        cursor: pointer;
        position: absolute;
        right: 0;
        top:0
    }

    .vc_CloseIcon_iconCoucherClose {
        height: 1.125rem;
        width: 1.3125rem
    }
    </style>
    <style type="text/css">
    .vc_Stamp_stamp {
        height: 2.8125rem;
        position: absolute;
        right: 0;
        top: -.375rem;
        width: 4.0625rem
    }
    </style>
    <style type="text/css">
    .vc_RightCornerBadge_rightCorner {
        align-items: center;
        background-color: #ffeaea;
        border-radius: 10px 2px 0 10px;
        color: #ee4d2d;
        display: flex;
        font-size: .75rem;
        font-weight: 500;
        height: 1.125rem;
        justify-content: center;
        position: absolute;
        right: -.25rem;
        top: .25rem;
        width:2.3125rem
    }

    .vc_RightCornerBadge_icon {
        margin-right:.0625rem
    }

    .vc_RightCornerBadge_rightCorner:after {
        border: .1875rem solid transparent;
        border-bottom-color: #ff9a86;
        content: "";
        height: 0;
        position: absolute;
        right: 1px;
        top: calc(100% + 1px);
        transform: rotate(-45deg) translate(50%, -50%);
        width: 0;
        z-index:0
    }

    .vc_RightCornerBadge_halfOpacity {
        opacity:.5
    }

    @media (max-width: 560px) {
        .vc_RightCornerBadge_rightCornerClassName {
            font-size: .75rem;
            height: 1.125rem;
            width:2.3125rem
        }

        .vc_RightCornerBadge_iconClassName {
            height: .75rem;
            width:.375rem
        }
    }

    @media (min-width: 560px) {
        .vc_RightCornerBadge_rightCornerClassName {
            font-size: .75rem;
            height: 1.125rem;
            width:2.3125rem
        }

        .vc_RightCornerBadge_iconClassName {
            height: .75rem;
            width: .375rem
        }
    }
    </style>
    <style type="text/css">
    .vc_Price_price {
        color: var(--vc-card-price-color, #ee4d2d);
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.1875rem
    }
    </style>
    <style type="text/css">
    .vc_RightPrice_normalPrice {
        color: rgba(0, 0, 0, .54);
        font-size: .75rem;
        font-weight: 400;
        line-height: .875rem;
        margin: 0;
        text-decoration:line-through
    }

    .vc_RightPrice_discountPrice {
        color:#ee4d2d
    }

    .vc_RightPrice_discountPrice, .vc_RightPrice_discountSymbol {
        font-size: 1rem;
        line-height: 1.1875rem
    }
    </style>
    <style type="text/css">
    .vc_SoldCount_sold {
        color: rgba(0, 0, 0, .54);
        font-size: .625rem;
        line-height: .75rem
    }
    </style>
    <style type="text/css">
    .vc_SoldOut_soldOut {
        align-items: center;
        background: rgba(0, 0, 0, .87);
        border-radius: 1.5rem;
        box-sizing: border-box;
        color: #fff;
        display: flex;
        font-size: .75rem;
        font-weight: 400;
        justify-content: center;
        left: 50%;
        line-height: 1rem;
        max-width: 90%;
        overflow: hidden;
        padding: 12px;
        position: absolute;
        text-overflow: ellipsis;
        top: 50%;
        transform: translate(-50%, -50%);
        white-space: nowrap;
        z-index: 5
    }
    </style>
    <style type="text/css">
    .vc_CornerBadge_cornerBadge {
        border-radius: .125rem .125rem .125rem 0;
        color: #fff;
        display: flex;
        font-size: var(--vc-corner-badge-font-size, .625rem);
        line-height: var(--vc-corner-badge-line-height, .75rem);
        padding: var(--vc-corner-badge-padding, .125rem .25rem);
        position:absolute
    }

    .vc_CornerBadge_cornerBadge:after {
        border: .1875rem solid transparent;
        content: "";
        height: 0;
        left: .0625rem;
        position: absolute;
        top: calc(100% + .0625rem);
        transform: rotate(-45deg) translate(50%, -50%);
        width:0
    }

    .vc_CornerBadge_levelCorner {
        left: -.25rem;
        top:.3125rem
    }

    .vc_CornerBadge_topCorner {
        left: -.25rem;
        top:-.3125rem
    }

    .vc_CornerBadge_valid {
        background-color:var(--vc-corner-badge-bg-color, #eda500)
    }

    .vc_CornerBadge_valid:after {
        border-left:.1875rem solid var(--vc-corner-badge-bg-color2, #dfa400)
    }

    .vc_CornerBadge_invalid {
        background-color:var(--vc-corner-badge-bg-color, #999)
    }

    .vc_CornerBadge_invalid:after {
        border-left:.1875rem solid var(--vc-corner-badge-bg-color2, #757575)
    }

    .vc_CornerBadge_bestChoice {
        background-color:var(--vc-corner-badge-bg-color, #4c7)
    }

    .vc_CornerBadge_bestChoice:after {
        border-left:.1875rem solid var(--vc-corner-badge-bg-color2, #4c7)
    }

    .vc_CornerBadge_fsvBestChoice, .vc_CornerBadge_preferred {
        background:var(--vc-corner-badge-bg-color, #ee4d2d)
    }

    .vc_CornerBadge_fsvBestChoice:after, .vc_CornerBadge_preferred:after {
        border-left:.1875rem solid var(--vc-corner-badge-bg-color2, #ee4d2d)
    }

    .vc_CornerBadge_ofs {
        background:var(--vc-corner-badge-bg-color, #d0011b)
    }

    .vc_CornerBadge_ofs:after {
        border-left:.1875rem solid var(--vc-corner-badge-bg-color2, #d0011b)
    }

    .vc_CornerBadge_latamUI {
        max-width: 13ch;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_CornerBadge_halfOpacity {
        opacity:.5
    }

    .vc_CornerBadge_seaTwUI {
        max-width: 114px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }
    </style>
    <style type="text/css">
    .vc_A11yAriaText_A11yContent {
        clip: rect(0, 0, 0, 0) !important;
        border: 0 !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        white-space: nowrap !important;
        width: 1px !important
    }
    </style>
    <style type="text/css">
    .vc_BrandBanner_brandBanner {
        position:relative
    }

    .vc_BrandBanner_banner {
        background-color: #fff;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: auto .75rem;
        border: .03125rem solid rgba(0, 0, 0, .09);
        border-radius: 1.75rem;
        bottom: .5rem;
        box-shadow: 0 0 .375rem rgba(0, 0, 0, .06);
        box-sizing: border-box;
        height: 1rem;
        position: absolute;
        right: -1.875rem;
        width: 3.75rem
    }
    </style>
    <style type="text/css">
    .vc_Card_card, .vc_Card_container {
        width:var(--vc-card-width, 28.375rem)
    }

    .vc_Card_card {
        height: var(--vc-card-height, 7.375rem);
        position:relative
    }

    .vc_Card_left {
        background: linear-gradient(180deg, var(--vc-card-left-border-color, #e8e8e8) var(--vc-card-sawtooth-margin, .25rem), transparent 0, transparent calc(100% - var(--vc-card-sawtooth-margin, .25rem)), var(--vc-card-left-border-color, #e8e8e8) calc(100% - var(--vc-card-sawtooth-margin, .25rem))) 0 0 /.0625rem 100% no-repeat, linear-gradient(180deg, var(--vc-card-left-fill-color, #fff) var(--vc-card-sawtooth-margin, .25rem), transparent 0, transparent calc(100% - var(--vc-card-sawtooth-margin, .25rem)), var(--vc-card-left-fill-color, #fff) calc(100% - var(--vc-card-sawtooth-margin, .25rem))) 0 0/100% 100% no-repeat;
        border-bottom: .0625rem solid var(--vc-card-left-border-color, #e8e8e8);
        border-bottom-left-radius: .125rem;
        border-top: .0625rem solid var(--vc-card-left-border-color, #e8e8e8);
        border-top-left-radius: .125rem;
        box-sizing: border-box;
        height: 100%;
        left: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        width:var(--vc-card-height, 7.375rem)
    }

    .vc_Card_sawtooth {
        background: linear-gradient(180deg, transparent calc(var(--vc-card-radius, .25rem) * 2), var(--vc-card-left-border-color, #e8e8e8) 0) 0 .0625rem /.0625rem calc(var(--vc-card-radius, .25rem) * 2 + var(--vc-card-gap, .125rem)) repeat-y, radial-gradient(circle at 0 var(--vc-card-radius, .25rem), transparent 0, transparent calc(var(--vc-card-radius, .25rem) - .0625rem), var(--vc-card-left-border-color, #e8e8e8) 0, var(--vc-card-left-border-color, #e8e8e8) var(--vc-card-radius, .25rem), var(--vc-card-left-fill-color, #fff) 0) 0 .0625rem /100% calc(var(--vc-card-radius, .25rem) * 2 + var(--vc-card-gap, .125rem)) repeat-y;
        bottom: calc(var(--vc-card-sawtooth-margin, .25rem) - .0625rem);
        position: absolute;
        top: calc(var(--vc-card-sawtooth-margin, .25rem) - .0625rem);
        width:100%
    }

    .vc_Card_right {
        background-color: var(--vc-card-background-color, #fff);
        border: .0625rem solid var(--vc-card-right-border-color, #e8e8e8);
        border-bottom-right-radius: .125rem;
        border-left: none;
        border-top-right-radius: .125rem;
        box-sizing: border-box;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width:calc(100% - var(--vc-card-height, 7.375rem))
    }

    .vc_Card_inapplicable .vc_Card_left {
        opacity:.5
    }

    .vc_Card_shop {
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_Card_shopee {
        --vc-card-left-border-color: #ee4d2d;
        --vc-card-left-fill-color: #ee4d2d;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_Card_fsv {
        --vc-card-left-border-color: #00bfa5;
        --vc-card-left-fill-color: #00bfa5;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff
    }
    </style>
    <style type="text/css">
    .vc_Flag_flag {
        align-items: flex-end;
        background: #ee4d2d;
        color: #fff;
        display: flex;
        font-size: .625rem;
        font-weight: 500;
        height: 2.828rem;
        justify-content: center;
        line-height: .75rem;
        position: absolute;
        right: -1.414rem;
        top: -1.414rem;
        transform: rotate(45deg);
        width: 2.828rem
    }
    </style>
    <style type="text/css">
    @media (max-width: 560px) {
        .vc_MiniSpendText_minSpendText {
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            color: rgba(0, 0, 0, .54);
            display: -webkit-box;
            font-size: .75rem;
            line-height: .875rem;
            margin-bottom: .5rem;
            margin-top: .125rem;
            max-height: .875rem;
            overflow: hidden;
            text-align: center;
            text-overflow: ellipsis;
            word-break:break-word
        }
    }

    @media (min-width: 560px) {
        .vc_MiniSpendText_minSpendText {
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            color: rgba(0, 0, 0, .54);
            display: -webkit-box;
            font-size: .75rem;
            line-height: .875rem;
            margin-bottom: .5rem;
            margin-top: .125rem;
            max-height: .875rem;
            overflow: hidden;
            text-align: center;
            text-overflow: ellipsis;
            word-break: break-word
        }
    }
    </style>
    <style type="text/css">
    .vc_src_fade-enter {
        opacity:.01
    }

    .vc_src_fade-enter-active {
        opacity: 1;
        transition:all .2s ease-in-out
    }

    .vc_src_fade-exit {
        opacity:1
    }

    .vc_src_fade-exit-active {
        opacity: .01;
        transition:all .2s ease-in-out
    }

    .vc_src_wrap {
        transform: translate(-50%, -50%);
        z-index:9999
    }

    .vc_src_fadescale-enter {
        opacity: .01;
        transform:translate(-50%, -50%) scale(.5)
    }

    .vc_src_fadescale-enter-active {
        transition:all .2s ease-in-out
    }

    .vc_src_fadescale-enter-active, .vc_src_fadescale-exit {
        opacity: 1;
        transform:translate(-50%, -50%) scale(1)
    }

    .vc_src_fadescale-exit-active {
        opacity: .01;
        transform: translate(-50%, -50%) scale(.5);
        transition: all .2s ease-in-out
    }
    </style>
    <style type="text/css">
    .vc_PopupDownloadCard_container {
        background-color: #fff;
        border-radius: .1875rem;
        box-shadow: 0 .1875rem .625rem 0 rgba(0, 0, 0, .14);
        display: flex;
        flex-direction: row;
        overflow: hidden;
        padding: 1.875rem 1.875rem 1.25rem;
        position: relative;
        width:34.375rem
    }

    .vc_PopupDownloadCard_title {
        color: #333;
        font-size: 1.375rem;
        font-weight: 600;
        margin-bottom:.5625rem
    }

    .vc_PopupDownloadCard_desc {
        color: #333;
        font-size: 1.25rem;
        font-weight: 400;
        margin-bottom:1.625rem
    }

    .vc_PopupDownloadCard_left {
        flex: 1;
        padding-right:2.4375rem
    }

    .vc_PopupDownloadCard_right {
        align-items: center;
        display: flex;
        flex-direction:column
    }

    .vc_PopupDownloadCard_qrWrapper {
        margin-bottom: .6875rem;
        overflow:hidden
    }

    .vc_PopupDownloadCard_qr {
        height: 10rem;
        margin: -.625rem -.3125rem -.9375rem;
        width:10rem
    }

    .vc_PopupDownloadCard_downloadAppStore, .vc_PopupDownloadCard_downloadGoogle {
        background-repeat: no-repeat;
        display: inline-block;
        height: 3.1875rem;
        margin-right: .625rem;
        width:9.625rem
    }

    .vc_PopupDownloadCard_downloadGoogle {
        background-position-x: -.625rem;
        background-position-y: -.6875rem;
        background-size:113% 146%
    }

    .vc_PopupDownloadCard_downloadAppStore {
        background-size:100%
    }

    .vc_PopupDownloadCard_footer {
        align-items: center;
        display:flex
    }

    .vc_PopupDownloadCard_appStore, .vc_PopupDownloadCard_googlePlay {
        height: 1rem;
        padding:.1875rem
    }

    .vc_PopupDownloadCard_badge {
        left: 0;
        position: absolute;
        top:0
    }

    .vc_PopupDownloadCard_badgeImg {
        width: 3.625rem
    }
    </style>
    <style type="text/css">
    @media (max-width: 560px) {
        .vc_RewardText_rewardText {
            line-clamp: 2;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            color: rgba(0, 0, 0, .87);
            display: -webkit-box;
            font-size: 1rem;
            font-weight: 500;
            height: 1.1875rem;
            max-width: 100%;
            overflow: hidden;
            text-align: center;
            text-overflow: ellipsis;
            word-break:break-word
        }
    }

    @media (min-width: 560px) {
        .vc_RewardText_rewardText {
            line-clamp: 2;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            color: rgba(0, 0, 0, .87);
            display: -webkit-box;
            font-size: 1rem;
            font-weight: 500;
            height: 1.1875rem;
            max-width: 100%;
            overflow: hidden;
            text-align: center;
            text-overflow: ellipsis;
            word-break: break-word
        }
    }
    </style>
    <style type="text/css">
    .vc_ShopType_shopType {
        height: .125rem;
        position:relative
    }

    .vc_ShopType_locate {
        bottom: 0;
        position: absolute;
        transform:translateX(-50%)
    }

    .vc_ShopType_text {
        align-items: center;
        border-radius: .125rem;
        color: #fff;
        font-size: .625rem;
        font-weight: 300;
        line-height: .75rem;
        padding: .0625rem .25rem;
        white-space: nowrap;
        word-break:keep-all
    }

    .vc_ShopType_mall {
        background-color:#d0021b
    }

    .vc_ShopType_preferred {
        background-color:#ee4d2d
    }

    .vc_ShopType_gray {
        filter: grayscale(1)
    }
    </style>
    <style type="text/css">
    .vc_Stack_stack {
        background-color: #fff;
        border: .03125rem solid rgba(0, 0, 0, .09);
        border-radius: 0 0 .125rem .125rem;
        border-top: none;
        box-shadow: 0 .0625rem .1875rem rgba(0, 0, 0, .09);
        box-sizing: border-box;
        height: .5rem;
        margin-left: .5rem;
        margin-right: .5rem;
        position:relative
    }

    .vc_Stack_latam {
        border-radius:0 0 .5rem .5rem
    }

    .vc_Stack_leftShopee {
        background: var(--vc-card-left-fill-color, #fff);
        opacity:.6
    }

    .vc_Stack_leftSeller, .vc_Stack_leftShopee {
        box-sizing: border-box;
        display: flex;
        height: 100%;
        width:calc(var(--vc-card-height, 7.375rem) - .5625rem)
    }

    .vc_Stack_leftSeller {
        border-right:.0625rem dashed #e8e8e8
    }

    .vc_Stack_leftFSV {
        background: var(--vc-card-left-fill-color, #fff);
        box-sizing: border-box;
        display: flex;
        height: 100%;
        opacity: .6;
        width:calc(var(--vc-card-height, 7.375rem) - .5625rem)
    }

    .vc_Stack_halfOpacity {
        opacity: .3
    }
    </style>
    <style type="text/css">
    .vc_WarningBanner_link {
        text-decoration:none
    }

    .vc_WarningBanner_warningBanner {
        align-items: center;
        background-color: #fff8e4;
        color: #ee4d2d;
        display: flex;
        font-size: var(--vc-warning-banner-font-size, .875rem);
        height: var(--vc-warning-banner-height, 2.375rem);
        margin-top: var(--vc-warning-banner-margin-top, 0);
        padding-left: var(--vc-warning-banner-padding-left-right, .625rem);
        padding-right: var(--vc-warning-banner-padding-left-right, .625rem);
        padding-top:var(--vc-warning-banner-padding-top, 0)
    }

    .vc_WarningBanner_recommended {
        background-color:#fef6f5
    }

    .vc_WarningBanner_info {
        margin-right:.3125rem
    }

    .vc_WarningBanner_arrow {
        fill: #ee4d2d;
        height: .625rem;
        margin-left:.5rem
    }

    .vc_WarningBanner_btn {
        align-items: baseline;
        display: flex;
        margin-left:auto
    }

    .vc_WarningBanner_latamUIStack {
        height: 2.375rem;
        margin-top: -1rem !important;
        padding-top: 1rem
    }
    </style>
    <style type="text/css">
    .vc_VoucherStandardTemplate_template {
        border: .0625rem solid transparent;
        border-left: none;
        box-shadow: var(--vc-template-box-shadow, .125rem .125rem .3125rem rgba(0, 0, 0, .07));
        box-sizing: border-box;
        display: flex;
        height: 100%;
        position: relative;
        transition:background 1s ease
    }

    .vc_VoucherStandardTemplate_left {
        align-items: center;
        border-right: .0625rem dashed #e8e8e8;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        width:var(--vc-card-height, 7.375rem)
    }

    .vc_VoucherStandardTemplate_middle {
        display: flex;
        flex: 1;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        padding-left: .75rem;
        position:relative
    }

    .vc_VoucherStandardTemplate_right {
        align-items: flex-end;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: .75rem;
        position:relative
    }

    .vc_VoucherStandardTemplate_center {
        align-items: center;
        display: flex;
        flex-direction:column
    }

    .vc_VoucherStandardTemplate_hideOverflow {
        border: .0625rem solid transparent;
        border-radius: .125rem;
        bottom: 0;
        left: 0;
        overflow: hidden;
        position: absolute;
        right: 0;
        top:0
    }

    .vc_VoucherStandardTemplate_fsv .vc_VoucherStandardTemplate_left, .vc_VoucherStandardTemplate_shopee .vc_VoucherStandardTemplate_left {
        border-right:none
    }

    .vc_VoucherStandardTemplate_inapplicable.vc_VoucherStandardTemplate_dp .vc_VoucherStandardTemplate_left, .vc_VoucherStandardTemplate_inapplicable.vc_VoucherStandardTemplate_dp .vc_VoucherStandardTemplate_middle, .vc_VoucherStandardTemplate_inapplicable.vc_VoucherStandardTemplate_fsv .vc_VoucherStandardTemplate_middle, .vc_VoucherStandardTemplate_inapplicable.vc_VoucherStandardTemplate_shop .vc_VoucherStandardTemplate_left, .vc_VoucherStandardTemplate_inapplicable.vc_VoucherStandardTemplate_shop .vc_VoucherStandardTemplate_middle, .vc_VoucherStandardTemplate_inapplicable.vc_VoucherStandardTemplate_shopee .vc_VoucherStandardTemplate_middle {
        opacity:.5
    }

    .vc_VoucherStandardTemplate_highlight.vc_VoucherStandardTemplate_dp .vc_VoucherStandardTemplate_template, .vc_VoucherStandardTemplate_highlight.vc_VoucherStandardTemplate_fsv .vc_VoucherStandardTemplate_middle, .vc_VoucherStandardTemplate_highlight.vc_VoucherStandardTemplate_fsv .vc_VoucherStandardTemplate_right, .vc_VoucherStandardTemplate_highlight.vc_VoucherStandardTemplate_shop .vc_VoucherStandardTemplate_template, .vc_VoucherStandardTemplate_highlight.vc_VoucherStandardTemplate_shopee .vc_VoucherStandardTemplate_middle, .vc_VoucherStandardTemplate_highlight.vc_VoucherStandardTemplate_shopee .vc_VoucherStandardTemplate_right {
        background-color: #fef7e7
    }
    </style>
    <style type="text/css">
    .vc_my-wallet-page-vouchers_FreeShippingVoucher {
        --vc-card-width: 28.375rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-left-border-color: #00bfa5;
        --vc-card-left-fill-color: #00bfa5;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow:var(--black2) 0 0.125rem 0 0
    }

    .vc_my-wallet-page-vouchers_ShopeeVoucher {
        --vc-card-width: 28.375rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-left-border-color: #ee4d2d;
        --vc-card-left-fill-color: #ee4d2d;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow:var(--black2) 0 0.125rem 0 0
    }

    .vc_my-wallet-page-vouchers_preview {
        --vc-card-width: 28.125rem;
        --vc-card-height:6.875rem
    }

    .vc_my-wallet-page-vouchers_pc {
        --vc-card-width: 28.375rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow:var(--black2) 0 0.125rem 0 0
    }

    .vc_my-wallet-page-vouchers_lite, .vc_my-wallet-page-vouchers_rw {
        --vc-card-width: 22.1875rem;
        --vc-card-height: 6.625rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 2.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0.125rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow:unset
    }

    .vc_my-wallet-page-vouchers_pcLatam {
        --vc-card-latam-width: 28rem;
        --vc-card-latam-height: 9.5rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.7);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 4.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-corner-badge-font-size:0.75rem
    }

    .vc_my-wallet-page-vouchers_liteLatam, .vc_my-wallet-page-vouchers_rwLatam {
        --vc-card-latam-width: 22.1875rem;
        --vc-card-latam-height: 8.4375rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.72);
        --vc-card-latam-top-left-width: var(--vc-card-latam-top-height);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 3.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow:unset
    }

    .vc_my-wallet-page-vouchers_freeShippingVoucher {
        --vc-icon-text-color: #fff;
        --vc-card-left-border-color: #00bfa5;
        --vc-card-left-fill-color: #00bfa5;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height:1.25rem
    }

    .vc_my-wallet-page-vouchers_DPV, .vc_my-wallet-page-vouchers_offlinePaymentVoucher {
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_my-wallet-page-vouchers_offlinePaymentVoucher {
        --vc-subtitle-font-size: 1rem;
        --vc-subtitle-font-weight:500
    }

    .vc_my-wallet-page-vouchers_sellerVoucher {
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_my-wallet-page-vouchers_shopeeVoucher {
        --vc-icon-text-color: #fff;
        --vc-card-left-border-color: #ee4d2d;
        --vc-card-left-fill-color: #ee4d2d;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_my-wallet-page-vouchers_partnerVoucher {
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-main-title-color: rgba(0, 0, 0, .87);
        --vc-card-label-margin: 0.3125rem 0 0 0;
        --vc-main-title-font-size:0.875rem
    }

    .vc_my-wallet-page-vouchers_partnerVoucherMiddle {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding:0 1.25rem
    }

    .vc_my-wallet-page-vouchers_partnerVoucherRight {
        align-items: center;
        background-color: #eda500;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding:0 1.125rem
    }

    .vc_my-wallet-page-vouchers_partnerVoucherRight.vc_my-wallet-page-vouchers_disabled {
        background-color:rgba(0, 0, 0, .26)
    }

    .vc_my-wallet-page-vouchers_financialVoucher {
        --vc-icon-text-color: #fff;
        --vc-card-left-border-color: #ee4d2d;
        --vc-card-left-fill-color: #ee4d2d;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_my-wallet-page-vouchers_highlighted {
        --vc-card-background-color: #fef7e7;
        --vc-card-left-fill-color:#fef7e7
    }

    .vc_my-wallet-page-vouchers_rightHighlighted {
        --vc-card-background-color:#fef7e7
    }

    .vc_my-wallet-page-vouchers_highlightedLatam {
        --vc-card-latam-background-color:#fef7e7
    }

    .vc_my-wallet-page-vouchers_inValidPartnerVoucher {
        --vc-icon-text-color: #0f0f0f;
        --vc-icon-text-opacity:0.5
    }

    .vc_my-wallet-page-vouchers_inValidFreeShippingVoucher {
        --vc-card-left-border-color: #bdbdbd;
        --vc-card-left-fill-color:#bdbdbd
    }

    .vc_my-wallet-page-vouchers_inValidDPV {
        --vc-icon-text-color: #0f0f0f;
        --vc-icon-text-opacity:0.5
    }

    .vc_my-wallet-page-vouchers_inValidOfflinePaymentVoucher, .vc_my-wallet-page-vouchers_inValidSellerVoucher {
        --vc-icon-text-color: #bbb;
        --vc-icon-text-opacity:0.5
    }

    .vc_my-wallet-page-vouchers_inValidFinancialVoucher, .vc_my-wallet-page-vouchers_inValidShopeeVoucher {
        --vc-card-left-border-color: #bbb;
        --vc-card-left-fill-color:#bbb
    }

    .vc_my-wallet-page-vouchers_noneRightBorder {
        border-right:none
    }

    .vc_my-wallet-page-vouchers_halfOpacity {
        opacity: .5
    }
    </style>
    <style type="text/css">
    .vc_CardLatam_card, .vc_CardLatam_container {
        width:var(--vc-card-latam-width, 28rem)
    }

    .vc_CardLatam_card {
        filter: var(--vc-template-latam-drop-shadow, drop-shadow(0 0 .375rem rgba(0, 0, 0, .1)));
        height: var(--vc-card-latam-height, 9.5rem);
        position: relative;
        transform:scale(1)
    }

    .vc_CardLatam_top {
        background: radial-gradient(circle at bottom left, transparent 0, transparent .5rem, var(--vc-card-latam-border-color, #d9d9d9) .5rem .5625rem, var(--vc-card-latam-background-color, #fff) .5625rem) 0 100%, radial-gradient(circle at bottom right, transparent 0, transparent .5rem, var(--vc-card-latam-border-color, #d9d9d9) .5rem .5625rem, var(--vc-card-latam-background-color, #fff) .5625rem) 100% 100%;
        background-repeat: no-repeat;
        background-size: 60% 100%, 60% 100%;
        border: .0625rem solid var(--vc-card-latam-border-color, #d9d9d9);
        border-bottom: none;
        border-top-left-radius: .5rem;
        border-top-right-radius: .5rem;
        box-sizing: border-box;
        height: var(--vc-card-latam-top-height, 6.65rem);
        left: 0;
        -webkit-mask-image: radial-gradient(circle at bottom left, transparent 0, transparent .5rem, var(--vc-card-latam-background-color, #fff) .5625rem), radial-gradient(circle at bottom right, transparent 0, transparent .5rem, var(--vc-card-latam-background-color, #fff) .5625rem);
        mask-image: radial-gradient(circle at bottom left, transparent 0, transparent .5rem, var(--vc-card-latam-background-color, #fff) .5625rem), radial-gradient(circle at bottom right, transparent 0, transparent .5rem, var(--vc-card-latam-background-color, #fff) .5625rem);
        -webkit-mask-position: bottom left, bottom right;
        mask-position: bottom left, bottom right;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-size: 60% 100%, 60% 100%;
        mask-size: 60% 100%, 60% 100%;
        position: absolute;
        top: 0;
        width:100%
    }

    .vc_CardLatam_top:after {
        border-bottom: .375rem dashed var(--vc-card-latam-border-color, #d9d9d9);
        bottom: -.3125rem;
        content: "";
        left: .9375rem;
        position: absolute;
        right: .9375rem;
        top:0
    }

    .vc_CardLatam_bottom {
        background: radial-gradient(circle at top left, transparent 0, transparent .5rem, var(--vc-card-latam-border-color, #d9d9d9) .5rem .5625rem, var(--vc-card-latam-background-color, #fff) .5625rem) 0 0, radial-gradient(circle at top right, transparent 0, transparent .5rem, var(--vc-card-latam-border-color, #d9d9d9) .5rem .5625rem, var(--vc-card-latam-background-color, #fff) .5625rem) 100% 0;
        background-repeat: no-repeat;
        background-size: 60% 100%, 60% 100%;
        border: .0625rem solid var(--vc-card-latam-border-color, #d9d9d9);
        border-bottom-left-radius: .5rem;
        border-bottom-right-radius: .5rem;
        border-top: none;
        bottom: 0;
        box-sizing: border-box;
        height: calc(100% - var(--vc-card-latam-top-height, 6.65rem));
        left: 0;
        -webkit-mask-image: radial-gradient(circle at top left, transparent 0, transparent .5rem, var(--vc-card-latam-background-color, #fff) .5625rem), radial-gradient(circle at top right, transparent 0, transparent .5rem, var(--vc-card-latam-background-color, #fff) .5625rem);
        mask-image: radial-gradient(circle at top left, transparent 0, transparent .5rem, var(--vc-card-latam-background-color, #fff) .5625rem), radial-gradient(circle at top right, transparent 0, transparent .5rem, var(--vc-card-latam-background-color, #fff) .5625rem);
        -webkit-mask-position: top left, top right;
        mask-position: top left, top right;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-size: 60% 100%, 60% 100%;
        mask-size: 60% 100%, 60% 100%;
        position: absolute;
        width: 100%
    }
    </style>
    <style type="text/css">
    .vc_LogoLatam_logo {
        display: block;
        height: var(--vc-logo-latam-size, 3.5rem);
        width:var(--vc-logo-latam-size, 3.5rem)
    }

    .vc_LogoLatam_gray {
        opacity:.5
    }

    .vc_LogoLatam_imageLogo {
        align-items: center;
        display: flex;
        justify-content: center;
        overflow:hidden
    }

    .vc_LogoLatam_circular {
        background-clip: padding-box;
        border: .0625rem solid #efefef;
        border-radius:50%
    }

    .vc_LogoLatam_whiteBg {
        background-color:#fff
    }

    .vc_LogoLatam_orangeBg {
        background-color:#ee4d2d
    }

    .vc_LogoLatam_greenBg {
        background-color:#26aa99
    }

    .vc_LogoLatam_svgBox {
        overflow: hidden;
        position:relative
    }

    .vc_LogoLatam_svgBox > svg {
        height: var(--vc-logo-latam-size, 3.5rem);
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width:var(--vc-logo-latam-size, 3.5rem)
    }

    .vc_LogoLatam_seller {
        background-color: #f5f5f5;
        border-radius:50%
    }

    .vc_LogoLatam_seller > svg {
        height: 50%;
        width: 50%
    }
    </style>
    <style type="text/css">
    .vc_LogoTagLatam_logoTag {
        height: .125rem;
        position:relative
    }

    .vc_LogoTagLatam_locate {
        bottom: 0;
        position: absolute;
        transform:translateX(-50%)
    }

    .vc_LogoTagLatam_text {
        align-items: center;
        border-radius: .125rem;
        color: #fff;
        font-size: .625rem;
        font-weight: 300;
        line-height: .75rem;
        padding: .0625rem .25rem;
        white-space: nowrap;
        word-break:keep-all
    }

    .vc_LogoTagLatam_mall {
        background-color:#d0021b
    }

    .vc_LogoTagLatam_preferred {
        background-color:#ee4d2d
    }

    .vc_LogoTagLatam_gray {
        filter:grayscale(1)
    }

    .vc_LogoTagLatam_halfOpacity {
        opacity:.5
    }

    .vc_LogoTagLatam_scopeTag {
        align-items: center;
        background:#fff
    }

    .vc_LogoTagLatam_img {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: .875rem;
        width: 3.75rem
    }
    </style>
    <style type="text/css">
    .vc_ProgressBarExpiryLatam_progressBarExpiry {
        color: rgba(0, 0, 0, .54);
        display: flex;
        flex-direction: column;
        font-size: var(--vc-expiry-font-size, .75rem);
        justify-content: center;
        line-height: var(--vc-expiry-line-height, .875rem);
        margin: var(--vc-card-latam-progress-expiry-margin, 0 0 0 0);
        min-width: var(--vc-card-latam-height, 9.5rem);
        overflow: hidden;
        padding-right: var(--vc-card-progress-expiry-padding-right, 0);
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_ProgressBarExpiryLatam_progressBarExpiry.vc_ProgressBarExpiryLatam_twoRowsLabel {
        margin-top:.25rem
    }

    .vc_ProgressBarExpiryLatam_progressBar {
        margin-bottom:.25rem
    }

    .vc_ProgressBarExpiryLatam_usageLimitedText {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: flex;
        display: -webkit-box;
        line-height: var(--vc-card-progress-expiry-usage-limited-text-linehigh, unset);
        margin: var(--vc-card-latam-progress-expiry-usage-limited-text-margin, 0);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:normal
    }

    .vc_ProgressBarExpiryLatam_usageLimitedText.vc_ProgressBarExpiryLatam_noMargin {
        margin:0
    }

    .vc_ProgressBarExpiryLatam_isRunningOutSoon {
        color: #ff424f;
        font-weight:500
    }

    .vc_ProgressBarExpiryLatam_comingSoonStartTime {
        color:#ee4d2d
    }

    .vc_ProgressBarExpiryLatam_isEndingSoon {
        color:#ff424f
    }

    .vc_ProgressBarExpiryLatam_validUntil {
        color:rgba(0, 0, 0, .54)
    }

    .vc_ProgressBarExpiryLatam_capitalize {
        text-transform:var(--vc-card-progress-expiry-capitalize-text-transform, unset)
    }

    .vc_ProgressBarExpiryLatam_capitalize:first-letter {
        text-transform:capitalize
    }

    .vc_ProgressBarExpiryLatam_divider {
        color: rgba(0, 0, 0, .09);
        font-size: .75rem;
        font-weight: 400;
        line-height:.875rem
    }

    .vc_ProgressBarExpiryLatam_tncLink {
        cursor: pointer;
        display: inline;
        font-size: .75rem;
        font-weight: 500;
        text-transform:capitalize
    }

    .vc_ProgressBarExpiryLatam_tncLink > a {
        color: #508be3;
        text-decoration:none
    }

    .vc_ProgressBarExpiryLatam_halfOpacity {
        opacity: .5
    }
    </style>
    <style type="text/css">
    .vc_TitleLatam_title {
        color: var(--vc-title-latam-color, rgba(0, 0, 0, .87));
        font-size: var(--vc-title-latam-font-size, .75rem);
        font-weight: 400;
        line-height: var(--vc-title-latam-line-height, .875rem);
        margin: var(--vc-title-latam-margin, .125rem) 0;
        max-height: var(--vc-title-latam-max-height, .875rem);
        max-width: 90%;
        overflow: hidden;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
        word-break: break-word
    }
    </style>
    <style type="text/css">
    .vc_UseLinkLatam_useLink {
        z-index:1
    }

    .vc_UseLinkLatam_btn, .vc_UseLinkLatam_useLink {
        align-items: center;
        display: flex;
        justify-content: center;
        position:relative
    }

    .vc_UseLinkLatam_btn {
        -webkit-line-clamp: 1;
        background-color: #fff;
        border: 1px solid #ee4d2d;
        border-radius: .125rem;
        box-sizing: border-box;
        color: #ee4d2d;
        cursor: pointer;
        font-size: var(--vc-use-link-latam-font-size, .875rem);
        font-weight: 400;
        height: var(--vc-use-link-latam-button-height, 1.5rem);
        padding: .1875rem .5rem;
        text-overflow: ellipsis;
        text-transform: capitalize;
        white-space: nowrap;
        width: var(--vc-use-link-latam-button-width, 5rem)
    }
    </style>
    <style type="text/css">
    .vc_VoucherLatamStandardTemplate_template {
        border: .0625rem solid transparent;
        border-left: none;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        height: 100%;
        position: relative;
        transition:background 1s ease
    }

    .vc_VoucherLatamStandardTemplate_top {
        box-sizing: border-box;
        display: flex;
        flex-direction: row;
        height: var(--vc-card-latam-top-height, 6.625rem);
        position: relative;
        width:100%
    }

    .vc_VoucherLatamStandardTemplate_topLeft {
        align-items: center;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        position: relative;
        width:var(--vc-card-latam-top-left-width, 6rem)
    }

    .vc_VoucherLatamStandardTemplate_topRight {
        display: flex;
        flex: 1;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        padding-right: var(--vc-card-latam-top-right-padding-right, .75rem);
        position:relative
    }

    .vc_VoucherLatamStandardTemplate_bottom {
        align-items: center;
        display: flex;
        flex-direction: row;
        flex-grow: 1;
        justify-content: flex-start;
        padding: 0 .75rem;
        position:relative
    }

    .vc_VoucherLatamStandardTemplate_bottomLeft {
        align-items: center;
        display: flex;
        flex-direction: row;
        flex-grow: 1;
        overflow: hidden;
        padding-right:.5rem
    }

    .vc_VoucherLatamStandardTemplate_bottomRight {
        align-items: center;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        max-width:5rem
    }

    .vc_VoucherLatamStandardTemplate_inapplicable.vc_VoucherLatamStandardTemplate_dp .vc_VoucherLatamStandardTemplate_topLeft, .vc_VoucherLatamStandardTemplate_inapplicable.vc_VoucherLatamStandardTemplate_dp .vc_VoucherLatamStandardTemplate_topRight, .vc_VoucherLatamStandardTemplate_inapplicable.vc_VoucherLatamStandardTemplate_fsv .vc_VoucherLatamStandardTemplate_topLeft, .vc_VoucherLatamStandardTemplate_inapplicable.vc_VoucherLatamStandardTemplate_fsv .vc_VoucherLatamStandardTemplate_topRight, .vc_VoucherLatamStandardTemplate_inapplicable.vc_VoucherLatamStandardTemplate_shop .vc_VoucherLatamStandardTemplate_topLeft, .vc_VoucherLatamStandardTemplate_inapplicable.vc_VoucherLatamStandardTemplate_shop .vc_VoucherLatamStandardTemplate_topRight, .vc_VoucherLatamStandardTemplate_inapplicable.vc_VoucherLatamStandardTemplate_shopee .vc_VoucherLatamStandardTemplate_topLeft, .vc_VoucherLatamStandardTemplate_inapplicable.vc_VoucherLatamStandardTemplate_shopee .vc_VoucherLatamStandardTemplate_topRight {
        opacity:.5
    }

    .vc_VoucherLatamStandardTemplate_highlight.vc_VoucherLatamStandardTemplate_dp, .vc_VoucherLatamStandardTemplate_highlight.vc_VoucherLatamStandardTemplate_fsv, .vc_VoucherLatamStandardTemplate_highlight.vc_VoucherLatamStandardTemplate_shop, .vc_VoucherLatamStandardTemplate_highlight.vc_VoucherLatamStandardTemplate_shopee {
        --vc-card-latam-background-color:#fef7e7
    }

    .vc_VoucherLatamStandardTemplate_iconTextLatam {
        align-self:flex-start
    }

    .vc_VoucherLatamStandardTemplate_divider {
        color: rgba(0, 0, 0, .09);
        display: flex;
        font-size: .75rem;
        font-weight: 400;
        justify-content: center;
        line-height: .875rem;
        width:.5rem
    }

    .vc_VoucherLatamStandardTemplate_hideOverflow {
        border: .0625rem solid transparent;
        border-radius: .125rem;
        bottom: 0;
        left: 0;
        overflow: hidden;
        position: absolute;
        right: 0;
        top: 0
    }
    </style>
    <style type="text/css">
    .vc_CardSeaTw_container {
        line-height: normal;
        width:var(--vc-card-width, 28.375rem)
    }

    .vc_CardSeaTw_card {
        height: var(--vc-card-height, 7.375rem);
        position: relative;
        width:var(--vc-card-width, 28.375rem)
    }

    .vc_CardSeaTw_left {
        background: linear-gradient(180deg, var(--vc-card-left-border-color, #e8e8e8) var(--vc-card-sawtooth-margin, .25rem), transparent 0, transparent calc(100% - var(--vc-card-sawtooth-margin, .25rem)), var(--vc-card-left-border-color, #e8e8e8) calc(100% - var(--vc-card-sawtooth-margin, .25rem))) 0 0 /.0625rem 100% no-repeat, linear-gradient(180deg, var(--vc-card-left-fill-color, #fff) var(--vc-card-sawtooth-margin, .25rem), transparent 0, transparent calc(100% - var(--vc-card-sawtooth-margin, .25rem)), var(--vc-card-left-fill-color, #fff) calc(100% - var(--vc-card-sawtooth-margin, .25rem))) 0 0/100% 100% no-repeat;
        border-bottom: .0625rem solid var(--vc-card-left-border-color, #e8e8e8);
        border-bottom-left-radius: .125rem;
        border-top: .0625rem solid var(--vc-card-left-border-color, #e8e8e8);
        border-top-left-radius: .125rem;
        box-sizing: border-box;
        height: 100%;
        left: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        width:var(--vc-card-height, 7.375rem)
    }

    .vc_CardSeaTw_sawtooth {
        background: linear-gradient(180deg, transparent calc(var(--vc-card-radius, .25rem) * 2), var(--vc-card-left-border-color, #e8e8e8) 0) 0 .0625rem /.0625rem calc(var(--vc-card-radius, .25rem) * 2 + var(--vc-card-gap, .125rem)) repeat-y, radial-gradient(circle at 0 var(--vc-card-radius, .25rem), transparent 0, transparent calc(var(--vc-card-radius, .25rem) - .0625rem), var(--vc-card-left-border-color, #e8e8e8) 0, var(--vc-card-left-border-color, #e8e8e8) var(--vc-card-radius, .25rem), var(--vc-card-left-fill-color, #fff) 0) 0 .0625rem /100% calc(var(--vc-card-radius, .25rem) * 2 + var(--vc-card-gap, .125rem)) repeat-y;
        bottom: calc(var(--vc-card-sawtooth-margin, .25rem) - .0625rem);
        position: absolute;
        top: calc(var(--vc-card-sawtooth-margin, .25rem) - .0625rem);
        width:100%
    }

    .vc_CardSeaTw_right {
        background-color: var(--vc-card-background-color, #fff);
        border: .0625rem solid var(--vc-card-right-border-color, #e8e8e8);
        border-bottom-right-radius: .125rem;
        border-left: none;
        border-top-right-radius: .125rem;
        box-sizing: border-box;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width:calc(100% - var(--vc-card-height, 7.375rem))
    }

    .vc_CardSeaTw_inapplicable .vc_CardSeaTw_left {
        opacity:.5
    }

    .vc_CardSeaTw_shop {
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_CardSeaTw_shopee {
        --vc-card-left-border-color: #ee4d2d;
        --vc-card-left-fill-color: #ee4d2d;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_CardSeaTw_fsv {
        --vc-card-left-border-color: #00bfa5;
        --vc-card-left-fill-color: #00bfa5;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff
    }
    </style>
    <style type="text/css">
    .vc_ScopeTagSeaTw_scopeTag {
        height: 7px;
        position:relative
    }

    .vc_ScopeTagSeaTw_img {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        bottom: 0;
        height: .875rem;
        position: absolute;
        transform: translateX(-50%)
    }
    </style>
    <style type="text/css">
    .vc_VoucherSeaTwStandardTemplate_template {
        border: .0625rem solid transparent;
        border-left: none;
        box-shadow: var(--vc-template-box-shadow, .125rem .125rem .3125rem rgba(0, 0, 0, .07));
        box-sizing: border-box;
        display: flex;
        height: 100%;
        position: relative;
        transition:background 1s ease
    }

    .vc_VoucherSeaTwStandardTemplate_left {
        align-items: center;
        border-right: .0625rem dashed #e8e8e8;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        width:var(--vc-card-height, 7.375rem)
    }

    .vc_VoucherSeaTwStandardTemplate_middle {
        display: flex;
        flex: 1;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        padding-left: .75rem;
        position:relative
    }

    .vc_VoucherSeaTwStandardTemplate_middle .vc_VoucherSeaTwStandardTemplate_progressBar {
        margin-bottom: .25rem;
        margin-right:.3125rem
    }

    .vc_VoucherSeaTwStandardTemplate_middle .vc_VoucherSeaTwStandardTemplate_expiryTnc {
        display:flex
    }

    .vc_VoucherSeaTwStandardTemplate_middle .vc_VoucherSeaTwStandardTemplate_expiryTnc > * {
        margin-top:0
    }

    .vc_VoucherSeaTwStandardTemplate_middle .vc_VoucherSeaTwStandardTemplate_tncLink {
        margin-left:.375rem
    }

    .vc_VoucherSeaTwStandardTemplate_middle .vc_VoucherSeaTwStandardTemplate_marginTop {
        margin-top:.25rem
    }

    .vc_VoucherSeaTwStandardTemplate_right {
        align-items: flex-end;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: .75rem;
        position:relative
    }

    .vc_VoucherSeaTwStandardTemplate_center {
        align-items: center;
        display: flex;
        flex-direction:column
    }

    .vc_VoucherSeaTwStandardTemplate_hideOverflow {
        border: .0625rem solid transparent;
        border-radius: .125rem;
        bottom: 0;
        left: 0;
        overflow: hidden;
        position: absolute;
        right: 0;
        top:0
    }

    .vc_VoucherSeaTwStandardTemplate_fsv .vc_VoucherSeaTwStandardTemplate_left, .vc_VoucherSeaTwStandardTemplate_shopee .vc_VoucherSeaTwStandardTemplate_left {
        border-right:none
    }

    .vc_VoucherSeaTwStandardTemplate_inapplicable.vc_VoucherSeaTwStandardTemplate_dp .vc_VoucherSeaTwStandardTemplate_left, .vc_VoucherSeaTwStandardTemplate_inapplicable.vc_VoucherSeaTwStandardTemplate_dp .vc_VoucherSeaTwStandardTemplate_middle, .vc_VoucherSeaTwStandardTemplate_inapplicable.vc_VoucherSeaTwStandardTemplate_fsv .vc_VoucherSeaTwStandardTemplate_middle, .vc_VoucherSeaTwStandardTemplate_inapplicable.vc_VoucherSeaTwStandardTemplate_shop .vc_VoucherSeaTwStandardTemplate_left, .vc_VoucherSeaTwStandardTemplate_inapplicable.vc_VoucherSeaTwStandardTemplate_shop .vc_VoucherSeaTwStandardTemplate_middle, .vc_VoucherSeaTwStandardTemplate_inapplicable.vc_VoucherSeaTwStandardTemplate_shopee .vc_VoucherSeaTwStandardTemplate_middle {
        opacity:.5
    }

    .vc_VoucherSeaTwStandardTemplate_highlight.vc_VoucherSeaTwStandardTemplate_dp .vc_VoucherSeaTwStandardTemplate_template, .vc_VoucherSeaTwStandardTemplate_highlight.vc_VoucherSeaTwStandardTemplate_fsv .vc_VoucherSeaTwStandardTemplate_middle, .vc_VoucherSeaTwStandardTemplate_highlight.vc_VoucherSeaTwStandardTemplate_fsv .vc_VoucherSeaTwStandardTemplate_right, .vc_VoucherSeaTwStandardTemplate_highlight.vc_VoucherSeaTwStandardTemplate_shop .vc_VoucherSeaTwStandardTemplate_template, .vc_VoucherSeaTwStandardTemplate_highlight.vc_VoucherSeaTwStandardTemplate_shopee .vc_VoucherSeaTwStandardTemplate_middle, .vc_VoucherSeaTwStandardTemplate_highlight.vc_VoucherSeaTwStandardTemplate_shopee .vc_VoucherSeaTwStandardTemplate_right {
        background-color: #fef7e7
    }
    </style>
    <style type="text/css">
    .vc_seaTw_pc {
        --vc-rect-button-height: 1.625rem;
        --vc-card-rect-button-apply-button-height:1.625rem
    }

    .vc_seaTw_rw {
        --vc-rect-button-height: 1.375rem;
        --vc-card-rect-button-apply-button-height: 1.375rem
    }
    </style>
    <style type="text/css">
    .vc_seaTw_noneRightBorder {
        border-right: none
    }
    </style>
    <style type="text/css">
    .vc_platform-variables_pc {
        --vc-card-width: 28.375rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow:var(--black2) 0 0.125rem 0 0
    }

    .vc_platform-variables_lite, .vc_platform-variables_rw {
        --vc-card-width: 22.1875rem;
        --vc-card-height: 6.625rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 2.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0.125rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow: unset
    }
    </style>
    <style type="text/css">
    .vc_recommended-voucher_recommendedOfflinePaymentVoucher {
        --vc-main-title-font-size: 14px;
        --vc-main-title-line-height: 16px;
        --vc-card-label-font-size: 10px;
        --vc-card-label-line-height: 12px;
        --vc-card-mian-title-white-space: none;
        --vc-rect-button-height: 1.5rem;
        --vc-rect-button-min-width: 3.4375rem;
        --vc-rect-button-font-size: 0.75rem;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-width: 3.4375rem;
        --vc-card-apply-button-font-size: 0.75rem;
        --vc-card-rect-button-padding:0
    }

    .vc_recommended-voucher_recommendedOfflinePaymentVoucher *, .vc_recommended-voucher_recommendedOfflinePaymentVoucher :after, .vc_recommended-voucher_recommendedOfflinePaymentVoucher :before {
        box-sizing:border-box
    }

    .vc_recommended-voucher_recommendedProductFocusedVoucher {
        --vc-logo-size: 6.125rem;
        --vc-rect-button-height: 1.5rem;
        --vc-rect-button-min-width: 3.4375rem;
        --vc-rect-button-font-size: 0.75rem;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-width: 3.4375rem;
        --vc-card-apply-button-font-size: 0.75rem;
        --vc-card-rect-button-padding: 0;
        --vc-sub-title-color:rgba(0, 0, 0, .87)
    }

    .vc_recommended-voucher_recommendedProductFocusedVoucher *, .vc_recommended-voucher_recommendedProductFocusedVoucher :after, .vc_recommended-voucher_recommendedProductFocusedVoucher :before {
        box-sizing:border-box
    }

    .vc_recommended-voucher_claimedStamp {
        filter:contrast(.8)
    }

    .vc_recommended-voucher_pcRecommendedOfflinePaymentVoucherRight {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 0 .5rem 0 0;
        text-align: center;
        width:6.75rem
    }

    .vc_recommended-voucher_pcRecommendedProductFocusedVoucherLeft {
        border-right:none
    }

    .vc_recommended-voucher_pcRecommendedProductFocusedVoucherMiddle {
        flex: 1;
        justify-content: space-between;
        max-width: 100%;
        min-width: 0;
        padding:.5rem .5rem .625rem 0
    }

    .vc_recommended-voucher_pcRecommendedProductFocusedVoucherRight {
        align-items: center;
        border-left: .03125rem dashed #e8e8e8;
        cursor: pointer;
        flex-direction: column;
        justify-content: center;
        padding: 0 .5rem;
        width: 7.25rem;
        z-index: 1
    }
    </style>
    <style type="text/css">
    .vc_landing-page-voucher_landingPageShopeeVoucher {
        --vc-card-width: 28rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #ee4d2d;
        --vc-card-left-fill-color: #ee4d2d;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-rect-button-min-width: 3.375rem;
        --vc-rect-button-font-size: 0.75rem;
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top:0.25rem
    }

    .vc_landing-page-voucher_landingPageShopeeVoucherLatam {
        --vc-card-latam-width: 28rem;
        --vc-card-latam-height: 9.5rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.7);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 4.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-corner-badge-font-size:0.75rem
    }

    .vc_landing-page-voucher_landingPageSellerVoucher {
        --vc-card-width: 28rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-rect-button-min-width: 3.375rem;
        --vc-rect-button-font-size: 0.75rem;
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top:0.25rem
    }

    .vc_landing-page-voucher_landingPageSellerVoucherLatam {
        --vc-card-latam-width: 28rem;
        --vc-card-latam-height: 9.5rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.7);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 4.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-corner-badge-font-size:0.75rem
    }

    .vc_landing-page-voucher_landingPageFreeShippingVoucher {
        --vc-card-width: 28rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-rect-button-min-width: 3.375rem;
        --vc-rect-button-font-size: 0.75rem;
        --vc-card-width: 28.375rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-left-border-color: #00bfa5;
        --vc-card-left-fill-color: #00bfa5;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-icon-sub-text-font-size: 0.625rem;
        --vc-icon-sub-text-line-height: 0.875rem;
        --vc-icon-sub-text-max-height: 1.75rem;
        --vc-icon-sub-text-margin-top:0.125rem
    }

    .vc_landing-page-voucher_landingPageFreeShippingVoucherLatam {
        --vc-card-latam-width: 28rem;
        --vc-card-latam-height: 9.5rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.7);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 4.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-corner-badge-font-size:0.75rem
    }

    .vc_landing-page-voucher_invalidShopeeVoucher {
        --vc-card-left-border-color: #bbb;
        --vc-card-left-fill-color: #bbb;
        --vc-icon-text-color:#fff
    }

    .vc_landing-page-voucher_invalidSellerVoucher {
        --vc-icon-text-color: #bbb;
        --vc-icon-text-opacity:0.5
    }

    .vc_landing-page-voucher_invalidFreeShippingVoucher {
        --vc-card-left-border-color: #bdbdbd;
        --vc-card-left-fill-color:#bdbdbd
    }

    .vc_landing-page-voucher_invalidSellerLogo {
        opacity:.5
    }

    .vc_landing-page-voucher_customTemplateRight {
        padding-bottom:.5rem
    }

    .vc_landing-page-voucher_customTemplateLeft {
        border-right: none
    }
    </style>
    <style type="text/css">
    .vc_mart-page-voucher_pc {
        --vc-card-width: 28.375rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-template-box-shadow: none;
        --vc-rect-button-min-width: 4.125rem;
        --vc-rect-button-height: 2.125rem;
        --vc-card-rect-button-apply-button-width: 3.75rem;
        --vc-card-rect-button-apply-button-height: 2.125rem;
        --vc-card-rect-button-padding:0
    }

    .vc_mart-page-voucher_pc *, .vc_mart-page-voucher_pc :after, .vc_mart-page-voucher_pc :before {
        box-sizing:border-box
    }

    .vc_mart-page-voucher_pc.vc_mart-page-voucher_pageType_0 {
        --vc-card-width:29.25rem
    }

    .vc_mart-page-voucher_pc.vc_mart-page-voucher_pageType_0.vc_mart-page-voucher_pageType_freeShippingVoucher_0 {
        --vc-main-title-font-size: 0.875rem;
        --vc-main-title-line-height:1.25rem
    }

    .vc_mart-page-voucher_pc.vc_mart-page-voucher_pageType_1 {
        --vc-card-width:28rem
    }

    .vc_mart-page-voucher_pc.vc_mart-page-voucher_pageType_1.vc_mart-page-voucher_pageType_freeShippingVoucher_1 {
        --vc-main-title-font-size: 0.875rem;
        --vc-main-title-line-height:1.25rem
    }

    .vc_mart-page-voucher_lite, .vc_mart-page-voucher_rw {
        --vc-card-width: 22.1875rem;
        --vc-card-height: 6.625rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.375rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 0.875rem;
        --vc-main-title-line-height: 1rem;
        --vc-subtitle-font-size: 0.625rem;
        --vc-subtitle-line-height: 0.75rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-icon-text-font-size: 0.625rem;
        --vc-icon-text-line-height: 0.75rem;
        --vc-icon-text-max-height: 1.5rem;
        --vc-icon-text-margin-top: 0.3125rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow: unset;
        --vc-rect-button-font-size: 0.75rem;
        --vc-card-apply-button-font-size: 0.75rem;
        --vc-card-rect-button-padding: 0;
        --vc-card-progress-expiry-capitalize-text-transform: capitalize;
        --vc-icon-text-white-space: normal;
        --vc-sub-title-white-space: normal;
        --vc-text-logo-white-space: normal;
        --vc-card-label-margin:0.1875rem 0 0 0
    }

    .vc_mart-page-voucher_lite *, .vc_mart-page-voucher_lite :after, .vc_mart-page-voucher_lite :before, .vc_mart-page-voucher_rw *, .vc_mart-page-voucher_rw :after, .vc_mart-page-voucher_rw :before {
        box-sizing:border-box
    }

    .vc_mart-page-voucher_lite.vc_mart-page-voucher_pageType_0, .vc_mart-page-voucher_rw.vc_mart-page-voucher_pageType_0 {
        --vc-card-width: 16.3125rem;
        --vc-card-height: 5.875rem;
        --vc-logo-size: 2rem;
        --vc-rect-button-min-width: 2.9375rem;
        --vc-rect-button-height: 1.75rem;
        --vc-card-rect-button-apply-button-width: 2.9375rem;
        --vc-card-rect-button-apply-button-height: 1.75rem;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-card-sawtooth-margin:0.25rem
    }

    .vc_mart-page-voucher_lite.vc_mart-page-voucher_pageType_0.vc_mart-page-voucher_pageType_shopeeVoucher_0, .vc_mart-page-voucher_rw.vc_mart-page-voucher_pageType_0.vc_mart-page-voucher_pageType_shopeeVoucher_0 {
        --vc-icon-text-font-size:0.625rem
    }

    .vc_mart-page-voucher_lite.vc_mart-page-voucher_pageType_0.vc_mart-page-voucher_pageType_freeShippingVoucher_0, .vc_mart-page-voucher_rw.vc_mart-page-voucher_pageType_0.vc_mart-page-voucher_pageType_freeShippingVoucher_0 {
        --vc-text-logo-font-size: 1rem;
        --vc-main-title-font-size: 0.625rem;
        --vc-main-title-line-height:0.75rem
    }

    .vc_mart-page-voucher_lite.vc_mart-page-voucher_pageType_1, .vc_mart-page-voucher_rw.vc_mart-page-voucher_pageType_1 {
        --vc-card-width: auto;
        --vc-logo-size: 3.5rem;
        --vc-rect-button-min-width: 4rem;
        --vc-rect-button-height: 1.75rem;
        --vc-card-rect-button-apply-button-width: 4rem;
        --vc-card-rect-button-apply-button-height:1.75rem
    }

    .vc_mart-page-voucher_lite.vc_mart-page-voucher_pageType_1.vc_mart-page-voucher_pageType_shopeeVoucher_1, .vc_mart-page-voucher_rw.vc_mart-page-voucher_pageType_1.vc_mart-page-voucher_pageType_shopeeVoucher_1 {
        --vc-icon-text-font-size:0.75rem
    }

    .vc_mart-page-voucher_lite.vc_mart-page-voucher_pageType_1.vc_mart-page-voucher_pageType_freeShippingVoucher_1, .vc_mart-page-voucher_rw.vc_mart-page-voucher_pageType_1.vc_mart-page-voucher_pageType_freeShippingVoucher_1 {
        --vc-text-logo-font-size: 1rem;
        --vc-main-title-font-size: 0.875rem;
        --vc-main-title-line-height:1.25rem
    }

    .vc_mart-page-voucher_sellerVoucher {
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_mart-page-voucher_shopeeVoucher {
        --vc-icon-text-color: #fff;
        --vc-card-left-border-color: #ee4d2d;
        --vc-card-left-fill-color: #ee4d2d;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_mart-page-voucher_freeShippingVoucher {
        --vc-icon-text-color: #fff;
        --vc-card-left-border-color: #00bfa5;
        --vc-card-left-fill-color: #00bfa5;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color:#fff
    }

    .vc_mart-page-voucher_stampMart {
        height: 3.125rem;
        position: relative;
        top: 0;
        width:4.375rem
    }

    .vc_mart-page-voucher_stampMartMiniVoucher {
        height: 2.1875rem;
        position: relative;
        top: 0;
        width:3.0625rem
    }

    .vc_mart-page-voucher_smallTextIcon {
        font-size:1rem
    }

    .vc_mart-page-voucher_rightRW {
        padding:.5rem
    }

    .vc_mart-page-voucher_middleRW {
        padding-left: .5rem
    }
    </style>
    <style type="text/css">
    .vc_seaTw_pc {
        --vc-rect-button-height: 1.625rem;
        --vc-card-rect-button-apply-button-height:1.625rem
    }

    .vc_seaTw_lite.vc_seaTw_pageType_0, .vc_seaTw_lite.vc_seaTw_pageType_1, .vc_seaTw_rw.vc_seaTw_pageType_0, .vc_seaTw_rw.vc_seaTw_pageType_1 {
        --vc-rect-button-height: 1.375rem;
        --vc-card-rect-button-apply-button-height: 1.375rem
    }
    </style>
    <style type="text/css">
    .vc_product-detail-page-vouchers_liteProductVoucher, .vc_product-detail-page-vouchers_rwProductVoucher {
        --vc-card-width: 100%;
        --vc-card-height: 5.375rem;
        --vc-card-sawtooth-margin: 0.0625rem;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 2.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: 0.75rem;
        --vc-expiry-margin-top: 0.3125rem;
        --vc-card-progress-expiry-margin: 0.3125rem 0.3125rem 0 0;
        --vc-card-progress-expiry-usage-limited-text-margin: 0.125rem 0 0 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow: unset;
        --vc-card-radius: 0.1875rem;
        --vc-card-gap: 0.125rem;
        --vc-rect-button-min-width: 3.25rem;
        --vc-card-rect-button-padding: 0.5rem;
        --vc-rect-button-font-size: 0.75rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.75rem;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-card-label-content-padding: 1px 0.125rem;
        --vc-card-label-space: 0.125rem;
        --vc-card-label-padding: 0 0.75rem 0 0;
        --vc-card-progress-expiry-capitalize-text-transform: capitalize;
        --vc-card-label-margin: 0;
        --vc-sub-title-white-space: normal;
        --vc-sub-title-padding: 0 0.75rem 0 0;
        --vc-main-title-color: #ee4d2d;
        --vc-sub-title-color: #ee4d2d;
        --vc-card-left-fill-color: #fff4f4;
        --vc-card-left-border-color: #fbc9c0;
        --vc-card-right-border-color: #fbc9c0;
        --vc-card-background-color: #fff4f4;
        --vc-card-label-padding: 0;
        max-width: 28.125rem;
        min-width:14.6875rem
    }

    .vc_product-detail-page-vouchers_liteProductVoucher *, .vc_product-detail-page-vouchers_liteProductVoucher :after, .vc_product-detail-page-vouchers_liteProductVoucher :before, .vc_product-detail-page-vouchers_rwProductVoucher *, .vc_product-detail-page-vouchers_rwProductVoucher :after, .vc_product-detail-page-vouchers_rwProductVoucher :before {
        box-sizing:border-box
    }

    .vc_product-detail-page-vouchers_pcProductVoucher {
        --vc-card-width: 12rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.0625rem;
        --vc-card-left-border-color: #fbc9c0;
        --vc-card-left-fill-color: #fff4f4;
        --vc-card-right-border-color: #fbc9c0;
        --vc-card-background-color: #fff4f4;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: 0.75rem;
        --vc-main-title-font-size: 0.875rem;
        --vc-main-title-line-height: 1rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-card-rect-button-mart-border-color: #066bc8;
        --vc-card-rect-button-mart-color: #fff;
        --vc-card-rect-button-mart-background-color: #066bc8;
        --vc-card-rect-button-ofs-border-color: #d0011b;
        --vc-card-rect-button-ofs-color: #fff;
        --vc-card-rect-button-ofs-background-color: #d0011b;
        --vc-rect-button-min-width: 3.25rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-padding: 0.5rem;
        --vc-rect-button-font-size: 0.75rem;
        --vc-card-rect-button-apply-button-width: 3.25rem;
        --vc-card-apply-button-font-size: 0.75rem;
        --vc-expiry-margin-top: 0.3125rem;
        --vc-card-progress-expiry-margin: 0.3125rem 0.3125rem 0 0;
        --vc-main-title-color: #ee4d2d;
        --vc-sub-title-color: #ee4d2d;
        --vc-rect-button-height: 2.125rem;
        --vc-card-rect-button-padding: 0.125rem 0.1875rem;
        --vc-rect-button-font-size: 0.625rem;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-apply-button-font-size: 0.625rem;
        --vc-apply-useLaterBtn-font-size:0.625rem
    }

    .vc_product-detail-page-vouchers_pcProductVoucher *, .vc_product-detail-page-vouchers_pcProductVoucher :after, .vc_product-detail-page-vouchers_pcProductVoucher :before {
        box-sizing:border-box
    }

    .vc_product-detail-page-vouchers_mart {
        --vc-card-left-border-color: rgba(6, 107, 200, .25);
        --vc-card-left-fill-color: #f2f9ff;
        --vc-card-right-border-color: rgba(6, 107, 200, .25);
        --vc-card-background-color: #f2f9ff;
        --vc-main-title-color: #066bc8;
        --vc-sub-title-color: #066bc8;
        --vc-card-rect-button-apply-border-color: #066bc8;
        --vc-card-rect-button-apply-button-color:#066bc8
    }

    .vc_product-detail-page-vouchers_ofs {
        --vc-card-left-border-color: #f8d0d3;
        --vc-card-left-fill-color: #fff4f4;
        --vc-card-right-border-color: #f8d0d3;
        --vc-card-background-color: #fff4f4;
        --vc-main-title-color: #d0011b;
        --vc-sub-title-color: #d0011b;
        --vc-card-rect-button-apply-border-color: #d0011b;
        --vc-card-rect-button-apply-button-color:#d0011b
    }

    .vc_product-detail-page-vouchers_sellerMart {
        --vc-card-rect-button-apply-border-color: #066bc8;
        --vc-card-rect-button-apply-button-color:#066bc8
    }

    .vc_product-detail-page-vouchers_sellerOfs {
        --vc-card-rect-button-apply-border-color: #d0011b;
        --vc-card-rect-button-apply-button-color:#d0011b
    }

    .vc_product-detail-page-vouchers_liteSellerVoucher, .vc_product-detail-page-vouchers_rwSellerVoucher {
        --vc-card-width: 22.1875rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.125rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: 0.75rem;
        --vc-expiry-margin-top: 0.3125rem;
        --vc-card-progress-expiry-padding-right: 0.375rem;
        --vc-card-progress-expiry-usage-limited-text-linehigh: 0.875rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow: unset;
        --vc-card-rect-button-mart-border-color: #066bc8;
        --vc-card-rect-button-mart-color: #fff;
        --vc-card-rect-button-mart-background-color: #066bc8;
        --vc-card-rect-button-ofs-border-color: #d0011b;
        --vc-card-rect-button-ofs-color: #fff;
        --vc-card-rect-button-ofs-background-color: #d0011b;
        --vc-rect-button-min-width: 3.25rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-padding: 0.5rem;
        --vc-rect-button-font-size: 0.75rem;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-width: 3.25rem;
        --vc-card-apply-button-font-size: 0.75rem;
        --vc-card-radius: 0.1875rem;
        --vc-card-gap: 0.125rem;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-card-label-content-padding: 1px 0.125rem;
        --vc-card-label-space: 0.125rem;
        --vc-card-label-padding: 0 0.75rem 0 0;
        --vc-card-progress-expiry-capitalize-text-transform: capitalize;
        --vc-card-label-margin: 0;
        --vc-sub-title-white-space: normal;
        --vc-sub-title-padding: 0 0.75rem 0 0;
        --vc-template-box-shadow: none;
        --vc-card-height: 6.625rem;
        --vc-card-progress-expiry-margin: 0.3125rem 0.3125rem 0 0;
        --vc-card-progress-expiry-usage-limited-text-margin: 0.25rem 0 0 0;
        --vc-sub-title-margin: 0 0 0.3125rem 0;
        --vc-rect-button-use-later-width: 3.25rem;
        --vc-card-width: 100%;
        flex: 0 0 auto;
        width:unset
    }

    .vc_product-detail-page-vouchers_liteSellerVoucher *, .vc_product-detail-page-vouchers_liteSellerVoucher :after, .vc_product-detail-page-vouchers_liteSellerVoucher :before, .vc_product-detail-page-vouchers_rwSellerVoucher *, .vc_product-detail-page-vouchers_rwSellerVoucher :after, .vc_product-detail-page-vouchers_rwSellerVoucher :before {
        box-sizing:border-box
    }

    .vc_product-detail-page-vouchers_liteSellerVoucherLatam, .vc_product-detail-page-vouchers_rwSellerVoucherLatam {
        --vc-card-latam-width: 22.1875rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.72);
        --vc-card-latam-top-left-width: var(--vc-card-latam-top-height);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 3.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: 0.75rem;
        --vc-expiry-margin-top: 0.3125rem;
        --vc-card-progress-expiry-margin: 0.3125rem 0.3125rem 0 0;
        --vc-card-progress-expiry-usage-limited-text-margin: 0.25rem 0 0 0;
        --vc-card-progress-expiry-padding-right: 0.375rem;
        --vc-card-progress-expiry-usage-limited-text-linehigh: 0.875rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow: unset;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-card-label-content-padding: 1px 0.125rem;
        --vc-card-label-space: 0.125rem;
        --vc-card-label-padding: 0 0.75rem 0 0;
        --vc-card-progress-expiry-capitalize-text-transform: capitalize;
        --vc-sub-title-white-space: normal;
        --vc-sub-title-padding: 0 0.75rem 0 0;
        --vc-template-latam-drop-shadow: none;
        --vc-card-latam-height: 8.4375rem;
        --vc-card-latam-width: 100%;
        --vc-card-label-margin: 0;
        flex: 0 0 auto;
        width:unset
    }

    .vc_product-detail-page-vouchers_liteSellerVoucherLatam *, .vc_product-detail-page-vouchers_liteSellerVoucherLatam :after, .vc_product-detail-page-vouchers_liteSellerVoucherLatam :before, .vc_product-detail-page-vouchers_rwSellerVoucherLatam *, .vc_product-detail-page-vouchers_rwSellerVoucherLatam :after, .vc_product-detail-page-vouchers_rwSellerVoucherLatam :before {
        box-sizing:border-box
    }

    .vc_product-detail-page-vouchers_pcSellerVoucher {
        --vc-card-width: 28.375rem;
        --vc-card-height: 7.375rem;
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.625rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: 0.75rem;
        --vc-expiry-margin-top: 0.3125rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-rect-button-min-width: 3.75rem;
        --vc-card-rect-button-mart-border-color: #066bc8;
        --vc-card-rect-button-mart-color: #fff;
        --vc-card-rect-button-mart-background-color: #066bc8;
        --vc-card-rect-button-ofs-border-color: #d0011b;
        --vc-card-rect-button-ofs-color: #fff;
        --vc-card-rect-button-ofs-background-color: #d0011b;
        --vc-rect-button-height: 1.75rem;
        --vc-card-rect-button-padding: 0 0.5625rem;
        --vc-card-rect-button-apply-button-height: 1.75rem;
        --vc-card-rect-button-apply-button-width: 3.75rem;
        --vc-card-apply-button-font-size: 0.75rem;
        --vc-card-label-content-padding: 1px 0.25rem;
        --vc-card-label-space: 0.125rem;
        --vc-card-label-margin: 0.1875rem 0 0 0;
        --vc-sub-title-padding: 0 0.5rem 0 0;
        --vc-card-height: 6.625rem;
        --vc-card-width: 100%;
        --vc-card-progress-expiry-margin:0.3125rem 0.3125rem 0 0
    }

    .vc_product-detail-page-vouchers_pcSellerVoucher *, .vc_product-detail-page-vouchers_pcSellerVoucher :after, .vc_product-detail-page-vouchers_pcSellerVoucher :before {
        box-sizing:border-box
    }

    .vc_product-detail-page-vouchers_pcSellerVoucherLatam {
        --vc-card-latam-width: 22.1875rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.72);
        --vc-card-latam-top-left-width: var(--vc-card-latam-top-height);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 3.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: 0.75rem;
        --vc-expiry-margin-top: 0.3125rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-card-label-content-padding: 1px 0.25rem;
        --vc-card-label-space: 0.125rem;
        --vc-card-label-margin: 0.1875rem 0 0 0;
        --vc-card-latam-height: 8.4375rem;
        --vc-card-latam-width: 100%;
        --vc-card-label-margin:0
    }

    .vc_product-detail-page-vouchers_pcSellerVoucherLatam *, .vc_product-detail-page-vouchers_pcSellerVoucherLatam :after, .vc_product-detail-page-vouchers_pcSellerVoucherLatam :before {
        box-sizing:border-box
    }

    .vc_product-detail-page-vouchers_pcSellerVoucherLeft {
        width:6.25rem
    }

    .vc_product-detail-page-vouchers_pcSellerVoucherMiddle {
        padding-left:.4375rem
    }

    .vc_product-detail-page-vouchers_rwSellerVoucherLeft {
        width:6.125rem
    }

    .vc_product-detail-page-vouchers_rwSellerVoucherMiddle {
        display: flex;
        flex: 1;
        flex-direction: column;
        height: 100%;
        justify-content: space-evenly;
        min-width: 0;
        padding-left: .75rem;
        padding-right:.75rem
    }

    .vc_product-detail-page-vouchers_rwSellerVoucherRight {
        border-left: none;
        height: 100%;
        margin-right: .75rem;
        padding: 0;
        z-index:2
    }

    .vc_product-detail-page-vouchers_borderNoneRight {
        border-right:none
    }

    .vc_product-detail-page-vouchers_pcProductVoucherMiddle {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        height: 100%;
        justify-content: center;
        overflow: hidden;
        padding:.125rem .25rem .125rem .75rem
    }

    .vc_product-detail-page-vouchers_pcProductVoucherRight {
        align-items: center;
        border-left: .0625rem dashed #e8e8e8;
        flex-shrink: 0;
        padding:0 .375rem
    }

    .vc_product-detail-page-vouchers_rwProductVoucherMiddle {
        flex: 1;
        flex-direction: column;
        height: 100%;
        justify-content: space-evenly;
        padding-left: .75rem;
        width:0
    }

    .vc_product-detail-page-vouchers_rwProductVoucherRight {
        border-left:.0625rem dashed #e8e8e8
    }

    .vc_product-detail-page-vouchers_productShopVoucherPreview {
        --vc-card-width: 100%;
        width: 75%
    }
    </style>
    <style type="text/css">
    .vc_product-detail-page-vouchers_pc {
        --vc-rect-button-height: 1.625rem;
        --vc-card-rect-button-apply-button-height:1.625rem
    }

    .vc_product-detail-page-vouchers_rw {
        --vc-rect-button-height: 1.375rem;
        --vc-card-rect-button-apply-button-height: 1.375rem
    }
    </style>
    <style type="text/css">
    .vc_shop-home-page-voucher_ShopHomePagePC {
        --vc-card-width: 22.1875rem;
        --vc-card-height: 6.75rem;
        --vc-card-sawtooth-margin: 0.0625rem;
        --vc-card-left-border-color: #fbc9c0;
        --vc-card-left-fill-color: #fff4f4;
        --vc-card-right-border-color: #fbc9c0;
        --vc-card-background-color: #fff4f4;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-main-title-color: #ee4d2d;
        --vc-sub-title-color:#ee4d2d
    }

    .vc_shop-home-page-voucher_ShopHomePageLite, .vc_shop-home-page-voucher_ShopHomePageRW {
        --vc-card-width: 15.625rem;
        --vc-card-height: 5.625rem;
        --vc-card-sawtooth-margin: 0.0625rem;
        --vc-card-left-border-color: #fbc9c0;
        --vc-card-left-fill-color: #fff4f4;
        --vc-card-right-border-color: #fbc9c0;
        --vc-card-background-color: #fff4f4;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 2.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0.125rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow: unset;
        --vc-main-title-color: #ee4d2d;
        --vc-sub-title-color: #ee4d2d
    }
    </style>
    <style type="text/css">
    .vc_digital-purchase-voucher_dpVoucher {
        --vc-card-width: 100%;
        --vc-card-height: 6.625rem;
        --vc-radio-button-border: 1px solid rgba(0, 0, 0, .54);
        --vc-radio-button-box-shadow: none;
        --vc-logo-size: 3.5rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-corner-badge-bg-color: #ffae04;
        --vc-corner-badge-bg-color2: #ffae04;
        box-sizing:border-box
    }

    .vc_digital-purchase-voucher_dpVoucher.vc_digital-purchase-voucher_nonDp {
        --vc-card-left-fill-color: var(--primary, #ee4d2d);
        --vc-icon-text-color:#fff
    }

    .vc_digital-purchase-voucher_transitionBg {
        background: #fff;
        transition:background 1s ease
    }

    .vc_digital-purchase-voucher_transitionBg.vc_digital-purchase-voucher_highlight {
        background: #fef7e7
    }
    </style>
    <style type="text/css">
    .vc_voucher-detail-page_SellerVoucher {
        --vc-card-width: 22.1875rem;
        --vc-card-height: 6.625rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow:var(--black2) 0 0.125rem 0 0
    }

    .vc_voucher-detail-page_SellerVoucherLatam {
        --vc-card-latam-width: 22.1875rem;
        --vc-card-latam-height: 8.4375rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.72);
        --vc-card-latam-top-left-width: var(--vc-card-latam-top-height);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-card-label-margin:toRem(2px) 0
    }

    .vc_voucher-detail-page_FreeShippingVoucher {
        --vc-card-width: 22.1875rem;
        --vc-card-height: 6.625rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #00bfa5;
        --vc-card-left-fill-color: #00bfa5;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-main-title-font-size: toRem(16px);
        --vc-main-title-line-height:toRem(20px)
    }

    .vc_voucher-detail-page_FreeShippingVoucherLatam {
        --vc-card-latam-width: 22.1875rem;
        --vc-card-latam-height: 8.4375rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.72);
        --vc-card-latam-top-left-width: var(--vc-card-latam-top-height);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-card-label-margin:toRem(2px) 0
    }

    .vc_voucher-detail-page_inValidFreeShippingVoucher {
        --vc-card-left-border-color: #bdbdbd;
        --vc-card-left-fill-color:#bdbdbd
    }

    .vc_voucher-detail-page_ShopeeVoucher {
        --vc-card-width: 22.1875rem;
        --vc-card-height: 6.625rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #ee4d2d;
        --vc-card-left-fill-color: #ee4d2d;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-template-box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow:var(--black2) 0 0.125rem 0 0
    }

    .vc_voucher-detail-page_ShopeeVoucherLatam {
        --vc-card-latam-width: 22.1875rem;
        --vc-card-latam-height: 8.4375rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.72);
        --vc-card-latam-top-left-width: var(--vc-card-latam-top-height);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-card-label-margin:toRem(2px) 0
    }

    .vc_voucher-detail-page_inValidShopeeVoucher {
        --vc-card-left-border-color: #bbb;
        --vc-card-left-fill-color:#bbb
    }

    .vc_voucher-detail-page_halfOpacity {
        opacity:.5
    }

    .vc_voucher-detail-page_noneRightBorder {
        border-right: none
    }
    </style>
    <style type="text/css">
    .vc_free-shipping-voucher_pc {
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 0.875rem;
        --vc-main-title-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-card-width: auto;
        margin-bottom:15px
    }

    .vc_free-shipping-voucher_rw {
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-radius: 0.1875rem;
        --vc-card-gap: 0.0625rem;
        --vc-card-height: 6.625rem;
        --vc-card-width: auto;
        --vc-main-title-font-size: 0.875rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-text-logo-font-size: 1.25rem;
        --vc-warning-banner-height: 1.875rem;
        --vc-warning-banner-padding-left-right: 0.5rem;
        --vc-warning-banner-font-size: 0.75rem
    }
    </style>
    <style type="text/css">
    .vc_shop-voucher_pc {
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-rect-button-height: 1.75rem;
        --vc-rect-button-min-width: 4rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-corner-badge-padding: 0.125rem 0.3125rem;
        --vc-corner-badge-font-size: 0.75rem;
        --vc-corner-badge-line-height: 0.875rem;
        --vc-card-width: auto;
        margin-bottom:12px
    }

    .vc_shop-voucher_rw {
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-radius: 0.1875rem;
        --vc-card-gap: 0.0625rem;
        --vc-card-height: 6.625rem;
        --vc-card-width: auto;
        --vc-logo-size: 3.125rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-text-logo-font-size: 1.25rem;
        --vc-rect-button-font-size: 0.75rem;
        --vc-warning-banner-height: 1.875rem;
        --vc-warning-banner-padding-left-right: 0.5rem;
        --vc-warning-banner-font-size: 0.75rem;
        margin-bottom: .75rem
    }
    </style>
    <style type="text/css">
    .vc_shopee-voucher_pc {
        --vc-logo-size: 3.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-icon-text-font-size: 0.75rem;
        --vc-icon-text-line-height: 0.875rem;
        --vc-icon-text-max-height: 1.75rem;
        --vc-icon-text-margin-top: 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-icon-text-color: #fff;
        --vc-card-width: auto;
        margin-bottom:15px
    }

    .vc_shopee-voucher_rw {
        --vc-card-sawtooth-margin: 0.25rem;
        --vc-card-radius: 0.1875rem;
        --vc-card-gap: 0.0625rem;
        --vc-card-height: 6.625rem;
        --vc-card-width: auto;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: 0.875rem;
        --vc-expiry-margin-top: 0.25rem;
        --vc-text-logo-font-size: 1.25rem;
        --vc-warning-banner-height: 1.875rem;
        --vc-warning-banner-padding-left-right: 0.5rem;
        --vc-warning-banner-font-size: 0.75rem
    }
    </style>
    <style type="text/css">
    .vc_free-shipping-voucher-latam_pc {
        --vc-card-latam-width: 28rem;
        --vc-card-latam-height: 9.5rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.7);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 4.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 0.875rem;
        --vc-main-title-line-height: 1rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-corner-badge-font-size: 0.75rem;
        --vc-card-latam-width: auto;
        --vc-warning-banner-padding-top: 0.5rem;
        --vc-warning-banner-margin-top: -0.5rem;
        margin-bottom:15px
    }

    .vc_free-shipping-voucher-latam_rw {
        --vc-card-latam-width: 22.1875rem;
        --vc-card-latam-height: 8.4375rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.72);
        --vc-card-latam-top-left-width: var(--vc-card-latam-top-height);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 3.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow: unset;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-card-latam-width: auto;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-warning-banner-padding-top: 0.5rem;
        --vc-warning-banner-margin-top: -0.5rem;
        --vc-warning-banner-height: 1.875rem;
        --vc-warning-banner-padding-left-right: 0.5rem;
        --vc-warning-banner-font-size: 0.75rem
    }
    </style>
    <style type="text/css">
    .vc_shop-voucher-latam_pc {
        --vc-card-latam-width: 28rem;
        --vc-card-latam-height: 9.5rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.7);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 4.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-corner-badge-font-size: 0.75rem;
        --vc-card-latam-width: auto;
        --vc-warning-banner-padding-top: 0.5rem;
        --vc-warning-banner-margin-top: -0.5rem;
        --vc-card-height: 9.5rem;
        margin-bottom:12px
    }

    .vc_shop-voucher-latam_rw {
        --vc-card-latam-width: 22.1875rem;
        --vc-card-latam-height: 8.4375rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.72);
        --vc-card-latam-top-left-width: var(--vc-card-latam-top-height);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 3.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow: unset;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-card-latam-width: auto;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-warning-banner-padding-top: 0.5rem;
        --vc-warning-banner-margin-top: -0.5rem;
        --vc-warning-banner-height: 1.875rem;
        --vc-warning-banner-padding-left-right: 0.5rem;
        --vc-warning-banner-font-size: 0.75rem;
        --vc-card-height: 7.8125rem;
        margin-bottom: .75rem
    }
    </style>
    <style type="text/css">
    .vc_shopee-voucher-latam_pc {
        --vc-card-latam-width: 28rem;
        --vc-card-latam-height: 9.5rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.7);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 4.5rem;
        --vc-expiry-font-size: 0.75rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.25rem;
        --vc-subtitle-font-size: 0.875rem;
        --vc-subtitle-line-height: 1rem;
        --vc-product-scope-font-size: 0.75rem;
        --vc-product-scope-line-height: 0.875rem;
        --vc-product-scope-padding: 0.0625rem 0.25rem;
        --vc-radio-button-border: 0.0625rem solid rgba(0, 0, 0, .14);
        --vc-radio-button-box-shadow: var(--black2) 0 0.125rem 0 0;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-corner-badge-font-size: 0.75rem;
        --vc-card-latam-width: auto;
        --vc-warning-banner-padding-top: 0.5rem;
        --vc-warning-banner-margin-top: -0.5rem;
        margin-bottom:15px
    }

    .vc_shopee-voucher-latam_rw {
        --vc-card-latam-width: 22.1875rem;
        --vc-card-latam-height: 8.4375rem;
        --vc-card-latam-top-height: calc(var(--vc-card-latam-height) * 0.72);
        --vc-card-latam-top-left-width: var(--vc-card-latam-top-height);
        --vc-card-latam-border-color: #d9d9d9;
        --vc-card-latam-background-color: #fff;
        --vc-logo-latam-size: 3.5rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-expiry-line-height: unset;
        --vc-expiry-margin-top: 0;
        --vc-main-title-font-size: 1rem;
        --vc-main-title-line-height: 1.125rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-subtitle-line-height: 0.875rem;
        --vc-product-scope-font-size: 0.625rem;
        --vc-product-scope-line-height: 0.75rem;
        --vc-product-scope-padding: 0.0625rem 0.125rem;
        --vc-radio-button-border: 1px solid var(--black54);
        --vc-radio-button-box-shadow: unset;
        --vc-rect-button-min-width: 5rem;
        --vc-card-rect-button-padding: 0.3125rem 0.5rem;
        --vc-rect-button-font-size: 0.875rem;
        --vc-rect-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-background: #fff;
        --vc-card-rect-button-apply-button-height: 1.5rem;
        --vc-card-rect-button-apply-button-color: #ee4d2d;
        --vc-card-apply-button-font-size: 0.875rem;
        --vc-card-rect-button-apply-button-width: 5rem;
        --vc-rect-button-use-later-font-size: 0.875rem;
        --vc-card-latam-width: auto;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-line-height: 0.75rem;
        --vc-warning-banner-padding-top: 0.5rem;
        --vc-warning-banner-margin-top: -0.5rem;
        --vc-warning-banner-height: 1.875rem;
        --vc-warning-banner-padding-left-right: 0.5rem;
        --vc-warning-banner-font-size: 0.75rem
    }
    </style>
    <style type="text/css">
    .vc_PreviewFlashVoucherCard_card {
        --vc-card-width: 22.625rem;
        --vc-card-height: 8.75rem;
        --vc-card-sawtooth-margin: 0.3125rem;
        --vc-card-left-border-color: #e8e8e8;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #e8e8e8;
        --vc-card-background-color: #fff;
        --vc-logo-size: 20px;
        --vc-progress-bar-height: 12px;
        --vc-progress-bar-bg-color: #ededed;
        --vc-subtitle-text-align:center
    }

    .vc_PreviewFlashVoucherCard_flashVoucher {
        display: flex;
        height: 100%;
        position:relative
    }

    .vc_PreviewFlashVoucherCard_left {
        border-right: .5px dashed #e8e8e8;
        flex: 1;
        padding:12px 15px
    }

    .vc_PreviewFlashVoucherCard_header {
        align-items: center;
        display:flex
    }

    .vc_PreviewFlashVoucherCard_name {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        display: -webkit-box;
        margin-left: 8px;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break:break-all
    }

    .vc_PreviewFlashVoucherCard_arrow {
        border-right: 1px solid #757575;
        border-top: 1px solid #757575;
        margin-left: 4px;
        padding: 4px;
        transform:rotate(45deg)
    }

    .vc_PreviewFlashVoucherCard_images {
        display: flex;
        height: 33px;
        justify-content: space-between;
        margin-top: 7px;
        position:relative
    }

    .vc_PreviewFlashVoucherCard_image {
        border: 1px solid red;
        display: flex;
        flex: 1;
        justify-content: center;
        position:relative
    }

    .vc_PreviewFlashVoucherCard_image:not(:first-child) {
        margin-left:4px
    }

    .vc_PreviewFlashVoucherCard_right {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding-bottom: 10px;
        padding-top: 28px;
        width:113px
    }

    .vc_PreviewFlashVoucherCard_fvProgressBar {
        margin-top: 15px;
        position:relative
    }

    .vc_PreviewFlashVoucherCard_progressBarText {
        bottom: 0;
        color: #fff;
        display: flex;
        font-size: 11px;
        justify-content: center;
        left: 0;
        line-height: 12px;
        position: absolute;
        right: 0;
        text-transform: uppercase;
        top:0
    }

    .vc_PreviewFlashVoucherCard_fire {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAwCAYAAABnjuimAAAAAXNSR0IArs4c6QAACupJREFUWAntWHlsXMUZn5m3p9fOrte3DVhJLJzLzk1SJSEIVVUhAhJERAMVkZpUJQ2IQimlqIWUqqqEokRFikpF/4CqSlvoH4W2qlS1KqShIXHiHCRpkjoQgq/EXu9lr/d68/X75u3svevEyp8de98c3zG/+c03x3uMzSJF7mxvDCy6Y/EsTGdtImZjyT2SMzPVH1zQ/gqsXGmfjY+btZkV0NqHngwwAEMC7AlOjZwIL25dfbMd36w+v1kDrR/obh0BYK0cPXDOTSb4/nqveJkfGZzWOrcynxWjBIAzcZ1AApaBgQEgnw+E02eCPa0bbyVA7WvWQAHgGjJKbCrYhJgz3gUm+2dwSfteuK/LqTu5FfmsgSK+awoj8alQWlEECF1K+d3g1amPQ72dc28FSPIxI9BAV8dt5ToD4Ndo2hWPlLngPC4wLFit+FwGMnU83NuxlsTQ2+uhfLZpRqBMyoOwdatR3AEXMIFTjdgIGGe+A4Fa90PTH2LsJpBUbAMmmfSnmfx7qLfj3hAb2xlc2vFssZ8brVcFShs7TuuGiVOHnyp2yIHFCKQ14QgrwVLuXeGNdfvGr+AgviCw9MckeEyQ76GfexH6vsDS9leLfd1IvSrQJIj5Fjnw6tTCzrYihxZKVKAY5TYrjGwLk92+X4+5uBMuKq6VA1aLrD+YCYofBZe3v46D1GMsclu+WhWoMOV8mln8zUmkU3vzXZiM1ameNKt2yJ5Q3G82+d6+3iJccMkKjYxlRhcPiqeDK9rfKhdS+X3kl6sCBS4tRtECV/JjwQW33aONOQCe9cQmPnGhi0azUcso53XS531zzCsMfo3qxLpKODoaIGJ+InT5oz/c6DZWFSiTQjFqoUGwpnmAznZYvLgWe9ukYpSm1gUXmR1cFpLcE5lt8bw8MYrDkQSP9lwEqECTmQS5OXg99v6NgK0OlMN86tYKM2IBFgUjI98JJIPfIM50u2NdXLGWg5gr2Vclltp70v+iFgJJbOaeWAP4Suh67LewZ09VLJadMi59jM9tHUbP1iJCTcUIhyksTuJSaFGnEmfJ+oPXQ7zBbC71YLVATIRDXyMx96qFJ0QYEdKsGFZA4GIU4jX/8eHvV/JRcRSwsr1Gg1SAlAc1bx5sb9F7qH1R8kg1kGTGa6TXsT5xUoMwmswL7q9PHqEpIqYs//DCxOr2B7ROcV4RaDBkzNPxrxcCjV6xqvASCzxa+0rwhi7QNd8OL0WLabI3FiWnXY9E1zs2Jj5UgMgx/jCC34zc1dFQDJLqFYEyMHvQUiViz9Yij1k17C4TnM77pk9wnyxY7ZZO6ZPXynpbR+okAXJvnlLHsue50EajUR4jIhRWYC1pgJ+VWlcBKhlsUtZoRW7q9gU6hODjlkNgogbOeZ4JbyjntFKb6+EpQzTKPjE32aV0cObr9o7PFUIEMpwQqzuiazsXFvsoy2i0q7UJsT1CjBJ73AH/FW1mh9GZvkDsCsYT3v1BJ+NQcgco7iC/7rg7vmTO3vE78tu412xybYmeozba7vBfpGXyB/k6VC4LNJHmz+HInBajwJyb4sOkbCxLmuTMtW3yqJiXYYUEN5qc0kN7a7G66/HJdXgEf65DigF/NLqhqylfrwRoZAEGM4enaIqJUXyEPDujK6hk70q57PPNw+4d0bupXilNv+H9ECaMintriR3OjHNT7Ipqxz6RV0c6OfV4vl4J0HRCPouaeImwcDrunj7F3LKO6rblidvnHBhfSeVqKXXWboS2NydhzFAzUU1Xy1xbo8swrJLWLCJYybdqGeUFQOloxNHkX+kinucjy7WBaDHb8ah063rFPCkEmHB7aGdTCgLGaEW9PAHttRgWZ6xZpLUBaya+PM+rVQqABqcDT2AIZoWOdYl+3FaydW00U26OCx/2xFiad4afbkSgHM/6mZNjQzyWZRSYIcKJVdqqACjSnY0L7EbWPBPp1orVcjlujGTlKR5ncdFFy1dtZRGxbOp176GsvErBvipesNkDh0VaPQs01HNHPUbGl7KCRugXTWbxZVmLC/Losw1X5YhtkBqTh9yf4KuzQzGKUGmXSPzNvQoiIlBgVKZi3JZq1VNPYhxo9n0tC1TGkmtRoNY5KTnvi8UonykhgAk5ZluW+KPnMulOH6xNkxfLES4P6xSrnfq595OZfOGVxa+nXukC+LRNFigeErlpxl7saxIVb0PamPLYG94zyKAzecnO5WXHZTli3EUwiUm10VgBwFJ97qXM5Ol825JynMdyVKEXzhNaJweUQW6asQ88hVq1UsV8WkQTH7hUHOHGwiMvNkwiQDytCCRxys9TTqxie33qqOtMRV8okKO20UJG+edaPwuUAy+4oXNX6Y1dG+k8usffD2loJljmZVuvjMJSBRAbENt5RLxdLaoMu4m/eKLatlyePOUYLWBU8CsZPZ4Fig2RfGM5Xj340+cc/0n129Yr3tA73qm8hI7YxOufyQz+Ld/ZkeNMiGErTvFL5Wf2bMzl96XLqUNua6vINNik7SMtywHl/FPdSKNKHnV+ka2XKURfqjcRWOZSQpxiUswpqC/6Tw8fpiZ8CTxtEYpv9ZO84EJCcp1gSoTTV+zqqM60na3tu5I9LHJAhTyqjShOku97KgZ+6oj7lIzxJUqf4g8LavFgGdn8ZcPZ4dyrNeeDRLRiFSofHlMHvCfRS43GgHe0t3SZ8izQhoHR88jkgBamPzPWyGvlz+r4OzVhNclEFf4Qnpp1fL5Xv3D9bu1D5SATSo2GwzHU0jxVIMeKHLR/njrqXqPayTFnkwZnb6l65pEFSnXUeUO1YwFfcO2RXY144pQef+ZVA49VCxyxidpU+zd+yN3G330Xv03kEjI5x6qRPoK05T5UqHY8yaLfa8SjE9xqVmg8IF6bc2yo4IAoAOr3i1+guyFr8LiSJ/jKyZd8h3LdWiVI4e0RlYgpa6GIC4YwHij3tRmHcKc1EHxyKLz6ATcju5tPywRbSJ6VL84v+mw8FzqZzguA8hPDMXxtfZJkiilkNnHEec/kCw0fZPRVJrwwiV7pHxMwu51t8Z4bnMjXUZJ13XQ9XEmKtJzxNWQoqxMXk+Edzf3mmFhDA6aEHhNIwbZyAy4ASsr+T4f+LDj/qWVITwR73H5P+LHmjyEqQlS3rU7EaZos/5ylTNlD7cUpHI0+ClLaM4rMsTYeJx26pwafaB4yJ8RqqmcGLDHfXn9kGBdVaSoBSir+z0Z+iNOwL2+kLD0q1gYfbo4l/1HT594Sm4uG+E6uThwsiW+WuqZPNrBLM4/kp12bJ++Mv1N3OLSzxcOSvJsmhAaLOQhm7Pb1Df++nB9qU5NXSRjoav8xMvKy1qKR0xcD4ZP9ELW1oayN2nBQY/4LIyV3g2BPWwrB2giscMoBXstDZpCpOyZuYwgSw4GLJBhih79v8DeVcBDOsoxqg4aB4VfwVfZBBBJQIDMCCBsr8PNemxoACpCVsq8cknH8zm9xAUnRZQY5gqTYttpwyIP4RrtxBpCq16pAScM/MPwndEjvM3+lOnWh41N1h/EhGOwnWUni7Fdqy9EC1FX2qg6/Mzy2Xm//0MdaXC2fESgZNwwMDfoHRu7nNv5VpOOYZgT37xQOYFf9hdG3y3Xi7173E/w+uh8JTGeXnuCnbdy4339ydJvv8NVgObtybYqUcoJqbfhtfwGer412l/tS3ZnL16vpkiy4vK1TmsZCbmdD/hODM16gZ/L3f/mtYOB/xlxKXqAWFZ4AAAAASUVORK5CYII=);
        background-size: contain;
        height: 21px;
        left: 3px;
        position: absolute;
        top: -7px;
        width:18px
    }

    .vc_PreviewFlashVoucherCard_limit {
        background: #fb0;
        border-radius: 2px 2px 0;
        color: #fff;
        font-size: 10px;
        font-weight: 500;
        line-height: 12px;
        padding: 2px 4px;
        position: absolute;
        right: -3px;
        top:4px
    }

    .vc_PreviewFlashVoucherCard_limit:after {
        border-color: #dfa400 transparent transparent;
        border-style: solid;
        border-width: 3px 3px 0 0;
        bottom: -3px;
        content: "";
        height: 0;
        position: absolute;
        right: 0;
        width:0
    }

    .vc_PreviewFlashVoucherCard_cornerBadge {
        background: #ee4d2d;
        border-radius: 0 2px 2px 0;
        color: #fff;
        font-size: 10px;
        font-weight: 500;
        line-height: 12px;
        margin-left: -19px;
        padding: 2px 4px;
        position: relative;
        white-space: nowrap;
        z-index:1
    }

    .vc_PreviewFlashVoucherCard_cornerBadge:after {
        border-color: #a92d05 transparent transparent;
        border-style: solid;
        border-width: 3px 0 0 3px;
        bottom: -3px;
        content: "";
        height: 0;
        left: 0;
        position: absolute;
        width: 0
    }
    </style>
    <style type="text/css">
    .vc_PreviewFlashVoucherEntrance_entrance {
        --vc-corner-badge-bg-color: #ee4d2d;
        --vc-corner-badge-bg-color2: #a92d05;
        background: linear-gradient(132deg, #ff5722 7%, #d0011b 110%);
        box-sizing: content-box;
        height: 172px;
        padding: 10px;
        position: relative;
        width:117px
    }

    .vc_PreviewFlashVoucherEntrance_bg {
        --vc-card-width: 10.75rem;
        --vc-card-height: 7.3125rem;
        --vc-card-sawtooth-margin: 0.1875rem;
        --vc-card-left-border-color: #fff;
        --vc-card-left-fill-color: #fff;
        --vc-card-right-border-color: #fff;
        --vc-card-background-color: #fff;
        position: absolute;
        transform: rotate(270deg) translateX(-172px);
        transform-origin:left top
    }

    .vc_PreviewFlashVoucherEntrance_content {
        display: flex;
        flex-direction: column;
        height: 100%;
        position:relative
    }

    .vc_PreviewFlashVoucherEntrance_top {
        align-items: center;
        border-bottom: .5px dashed rgba(0, 0, 0, .15);
        display: flex;
        flex: 1;
        flex-direction: column;
        position:relative
    }

    .vc_PreviewFlashVoucherEntrance_image {
        display: flex;
        height: 105px;
        margin-top: 18px;
        overflow: hidden;
        position: relative;
        width:105px
    }

    .vc_PreviewFlashVoucherEntrance_bottom {
        align-items: center;
        color: #ee4d2d;
        display: flex;
        height: 40px;
        justify-content:center
    }

    .vc_PreviewFlashVoucherEntrance_name {
        bottom: 10px;
        font-size: 10px;
        line-height: 12px;
        overflow: hidden;
        position: absolute;
        text-align: center;
        text-overflow: ellipsis;
        text-transform: uppercase;
        white-space: nowrap;
        width: 100%
    }
    </style>
    <style type="text/css">
    :root {
        --vc-root-font-size:1rem
    }

    .vc_spl-home-page_SPLHomePageVoucher {
        --vc-card-width: 100%;
        --vc-card-height: 7.0625rem;
        --vc-main-title-font-size: 1rem;
        --vc-subtitle-font-size: 0.75rem;
        --vc-expiry-font-size: 0.625rem;
        --vc-card-label-font-size: 0.625rem;
        --vc-card-label-margin: 0;
        --vc-tnclink-font-size: 0.625rem;
        --vc-card-apply-button-font-size: 0.75rem;
        width:100%
    }

    .vc_spl-home-page_halfOpacity {
        opacity:.5
    }

    .vc_spl-home-page_inValidSPLHomePageVoucher {
        --vc-card-left-border-color: #bbb;
        --vc-card-left-fill-color: #bbb
    }
    </style>
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col327.1706760150.json">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/rcmd/364.e94432f9998939f5b43a.legacy.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/rcmd/3992.ef9e7adf7e9723eb79ab.legacy.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/rcmd/pcmall-rcmd-pdp-ftss.90ca7c0d30d8d96e4b4d.legacy.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/rcmd/364.e94432f9998939f5b43a.legacy.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/rcmd/3992.ef9e7adf7e9723eb79ab.legacy.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/rcmd/pcmall-rcmd-pdp-ymal.90ca7c0d30d8d96e4b4d.legacy.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/homepagefe/pcmall-homepagefe.b37667cdd17a2660a7f7.css">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col38.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col456.1706087576.json">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/homepagefe/HomeOfficialShopSection.93f1e71313dcf3cdd014.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/flashsale/348.1f671d4bcb46c9efa1a8.legacy.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/flashsale/883.ef385affd2ad428fdf53.legacy.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/flashsale/pcmall-flashsale-entry.0b3e600693b4a6bd306a.legacy.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/rcmd/pcmall-rcmd-home-top-products-module.1d84ea1a569c544845b8.legacy.css">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col122.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col120.1706087576.json">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/search/688.8410525c50778d0d514f.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/search/977.7728d20dd775b3542003.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/search/826.5dec1da637b6e6bfe0d1.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/search/873.b1e46a5dc7ce4df50310.css">
    <link rel="stylesheet" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/search/pcmall-search-result-page.7e744e00eb01082e2578.css">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col97.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col23.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col24.1706087576.json">
    <link rel="prefetch" as="fetch" href="https://deo.shopeemobile.com/shopee/stm-sg-live/shopee-pcmall-live-sg/id.col94.1706087576.json">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/search/ProductTagFilter.705819c1b154405c9122.css">
    <link rel="stylesheet" type="text/css" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/search/InstallmentFilter.705819c1b154405c9122.css">
    <link rel="canonical" href="<?php echo $urlPath ?>" data-rh="true">
    <meta name="description" content="<?php echo $BRANDS ?> merupakan situs judi online resmi gampang maxwin dengan permainan slot online terbaik yang menggunakan link alternatif untuk memudahkan para pemain agar bisa mengakses situs slot online ini dengan mudah dan sangat cepat." data-rh="true">
    <meta name="robots" content="all" data-rh="true">
    <meta property="og:title" content="<?php echo $BRANDS ?> - Link Alternatif Slot Gacor Hari Ini Gampang Maxwin" data-rh="true">
    <meta property="og:description" content="<?php echo $BRANDS ?> merupakan situs judi online resmi gampang maxwin dengan permainan slot online terbaik yang menggunakan link alternatif untuk memudahkan para pemain agar bisa mengakses situs slot online ini dengan mudah dan sangat cepat." data-rh="true">
    <meta property="og:type" content="website" data-rh="true">
    <meta property="og:url" content="<?php echo $urlPath ?>" data-rh="true">
    <meta property="og:image" content="https://res.cloudinary.com/dbjuvhndh/image/upload/v1703996734/banner/WhatsApp_Image_2023-12-09_at_17.59.45_zhp9mv.jpg" data-rh="true">
    <script type="application/ld+json" data-rh="true">{"@context":"http://schema.org","@type":"Product","name":"<?php echo $BRANDS ?> - Link Alternatif Slot Gacor Hari Ini Gampang Maxwin","description":"Slot demo menjadi tempat permainan game slot paling populer dan paling seru di saat sekarang ini. Anda bisa mencoba mendapatkan fitur freespin dan rasakan sensasi jackpot nya. Anda bisa memainkan permainan slot demo sepuasnya kapanpun selama 24 jam. <?php echo $BRANDS ?> merupakan situs judi online resmi gampang maxwin dengan permainan slot online terbaik yang menggunakan link alternatif untuk memudahkan para pemain agar bisa mengakses situs slot online ini dengan mudah dan sangat cepat. Dengan adanya akun Demo slot gratis ini, berguna melatih algoritma anda dalam memainkan sebuah permainan slot.","url":"<?php echo $urlPath ?>","productID":"25058300665","image":"https://res.cloudinary.com/dbjuvhndh/image/upload/v1703996734/banner/WhatsApp_Image_2023-12-09_at_17.59.45_zhp9mv.jpg","brand":"Pragmatic & PG Soft","offers":{"@type":"AggregateOffer","lowPrice":"8869000.00","highPrice":"9950000.00","priceCurrency":"IDR","seller":{"@context":"http://schema.org","@type":"Organization","name":"1131 Gaming","url":"https://shopee.co.id/digitalglobal888","image":"https://down-id.img.susercontent.com/file/dbe9426e93dec7b5a199f41224e3a421","aggregateRating":{"@type":"AggregateRating","bestRating":5,"worstRating":1,"ratingCount":"841","ratingValue":"4.99"}},"itemCondition":"UsedCondition","availability":"http://schema.org/InStock"},"aggregateRating":{"@type":"AggregateRating","bestRating":5,"worstRating":1,"ratingCount":"200","ratingValue":"5.00"}}</script>
    <script type="application/ld+json" data-rh="true">{"@context":"http://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://shopee.co.id/","name":"Shopee"}},{"@type":"ListItem","position":2,"item":{"@id":"https://shopee.co.id/Slot Demo-Aksesoris-cat.11044458","name":"Hiburan Game"}},{"@type":"ListItem","position":3,"item":{"@id":"https://shopee.co.id/Slot Demo-cat.11044458.11044476","name":"Slot Demo"}},{"@type":"ListItem","position":4,"item":{"@id":"https://shopee.co.id/Pragmatic & PG Soft-cat.11044458.11044476.11044496","name":"Pragmatic & PG Soft"}},{"@type":"ListItem","position":5,"item":{"@id":"<?php echo $urlPath ?>","name":"<?php echo $BRANDS ?> - Link Alternatif Slot Gacor Hari Ini Gampang Maxwin"}}]}</script>
    <style type="text/css">
    .vc_src_placeholder {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 54 61' fill='%23e5e4e4'%3E%3Cpath d='M51.2 16.9H38.7C38.7 11.6 36 .6 27 .5 17.4.4 15.2 12.4 15.2 16.9H2.8c-3.4 0-2.7 3.4-2.7 3.4l2.4 33s-.1 7.3 6.3 7.5h36.5c6.2-.4 6.3-7.5 6.3-7.5l2.4-33c0-.1.5-3.5-2.8-3.4zM27.1 4.2c7.1.2 7.9 11.7 7.7 12.6H19.1c-.1-.9.4-12.4 8-12.6zm9.1 44.6c-1 1.7-2.7 3-5 3.7-1.2.4-2.4.5-3.6.5-3.2 0-6.5-1.1-9.3-3.3-.8-.6-1-1.5-.5-2.3.2-.4.7-.7 1.2-.8.4-.1.9 0 1.2.3 3.2 2.4 8.3 4 11.9 1.6 1.4-.9 2.1-2.7 1.6-4.3-.5-1.6-2.2-2.7-3.5-3.4-1-.6-2.1-1-3.3-1.4-.9-.3-1.9-.7-2.9-1.2-2.4-1.2-4-2.6-4.8-4.2-1.2-2.3-.6-5.4 1.4-7.5 3.6-3.8 10-3.2 14-.4.9.6.9 1.7.4 2.5s-1.4.9-2.2.4c-2-1.4-4.4-2-6.4-1.7-2 .3-4.7 2-4.4 4.6.2 1.5 2 2.6 3.3 3.3.8.4 1.5.7 2.3.9 4.3 1.3 7.2 3.3 8.6 5.7 1.2 2.1 1.2 4.9 0 7z' stroke='none'/%3E%3C/svg%3E");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: 60px;
        max-height: 100%;
        max-width: 100%;
        width:60px
    }

    .vc_src_placeholderContainer {
        align-items: center;
        bottom: 0;
        display: flex;
        height: 100%;
        justify-content: center;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%
    }
    </style>
    <style type="text/css">
    .vc_Logo_logo {
        display: block;
        height: var(--vc-logo-size, 3.5rem);
        width:var(--vc-logo-size, 3.5rem)
    }

    .vc_Logo_gray {
        filter:grayscale(1)
    }

    .vc_Logo_textLogo {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        color: #fff;
        display: -webkit-box;
        font-size: var(--vc-text-logo-font-size, 1.25rem);
        line-height: 1.375rem;
        max-height: 2.75rem;
        overflow: hidden;
        text-align: center;
        text-overflow: ellipsis;
        text-transform: uppercase;
        white-space:var(--vc-text-logo-white-space, unset)
    }

    .vc_Logo_imageLogo {
        align-items: center;
        display: flex;
        justify-content:center
    }

    .vc_Logo_circular {
        border: .0625rem solid #efefef;
        border-radius:50%
    }

    .vc_Logo_noBorder {
        border:none
    }

    .vc_Logo_whiteBg {
        background-color:#fff
    }

    .vc_Logo_svgBox {
        overflow: hidden;
        position:relative
    }

    .vc_Logo_svgBox > svg {
        height: var(--vc-logo-size, 3.5rem);
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width:var(--vc-logo-size, 3.5rem)
    }

    .vc_Logo_seller {
        background-color: #f5f5f5;
        border-radius:50%
    }

    .vc_Logo_seller > svg {
        height: 50%;
        width:50%
    }

    .vc_Logo_opv {
        height: 100%;
        margin-left: .25rem;
        -o-object-fit: cover;
        object-fit: cover;
        width:calc(100% - .25rem)
    }

    .vc_Logo_circle {
        border-radius:50%
    }

    .vc_Logo_placeholderContainer {
        align-items: center;
        bottom: 0;
        display: flex;
        height: 100%;
        justify-content: center;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width:100%
    }

    .vc_Logo_placeholder {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 54 61' fill='%23e5e4e4'%3E%3Cpath d='M51.2 16.9H38.7C38.7 11.6 36 .6 27 .5 17.4.4 15.2 12.4 15.2 16.9H2.8c-3.4 0-2.7 3.4-2.7 3.4l2.4 33s-.1 7.3 6.3 7.5h36.5c6.2-.4 6.3-7.5 6.3-7.5l2.4-33c0-.1.5-3.5-2.8-3.4zM27.1 4.2c7.1.2 7.9 11.7 7.7 12.6H19.1c-.1-.9.4-12.4 8-12.6zm9.1 44.6c-1 1.7-2.7 3-5 3.7-1.2.4-2.4.5-3.6.5-3.2 0-6.5-1.1-9.3-3.3-.8-.6-1-1.5-.5-2.3.2-.4.7-.7 1.2-.8.4-.1.9 0 1.2.3 3.2 2.4 8.3 4 11.9 1.6 1.4-.9 2.1-2.7 1.6-4.3-.5-1.6-2.2-2.7-3.5-3.4-1-.6-2.1-1-3.3-1.4-.9-.3-1.9-.7-2.9-1.2-2.4-1.2-4-2.6-4.8-4.2-1.2-2.3-.6-5.4 1.4-7.5 3.6-3.8 10-3.2 14-.4.9.6.9 1.7.4 2.5s-1.4.9-2.2.4c-2-1.4-4.4-2-6.4-1.7-2 .3-4.7 2-4.4 4.6.2 1.5 2 2.6 3.3 3.3.8.4 1.5.7 2.3.9 4.3 1.3 7.2 3.3 8.6 5.7 1.2 2.1 1.2 4.9 0 7z' stroke='none'/%3E%3C/svg%3E");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: 60px;
        max-height: 100%;
        max-width: 100%;
        width:60px
    }

    .vc_Logo_placeholderLogo {
        align-items: center;
        display: flex;
        justify-content:center
    }

    .vc_Logo_OPVPlaceholderLogo {
        height: var(--vc-logo-size, 3.5rem);
        width:var(--vc-logo-size, 3.5rem)
    }

    .vc_Logo_OPVPlaceholder {
        max-height: 70%;
        max-width:70%
    }

    .vc_Logo_OPVPlaceholder.vc_Logo_shoppingMall {
        background-color: #fafafa
    }
    </style>
    <style type="text/css">
    .vc_MainTitle_mainTitle {
        display:flex
    }

    .vc_MainTitle_text {
        color: var(--vc-main-title-color, rgba(0, 0, 0, .8));
        font-size: var(--vc-main-title-font-size, 1rem);
        font-weight: 500;
        line-height: var(--vc-main-title-line-height, 1.25rem);
        white-space:var(--vc-card-mian-title-white-space, nowrap)
    }

    .vc_MainTitle_defaultLine, .vc_MainTitle_fsvLine {
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_MainTitle_fsvLine {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        white-space: normal;
        word-break:break-word
    }

    .vc_MainTitle_textLatam {
        color: var(--vc-main-title-latam-color, rgba(0, 0, 0, .87));
        font-weight:var(--vc-main-title-latam-font-weight, 700)
    }

    .vc_MainTitle_scopeTag {
        align-items: center;
        display: inline-flex;
        padding-right:.25rem
    }

    .vc_MainTitle_img {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: .875rem;
        width: 3.75rem
    }
    </style>
    <style type="text/css">
    .vc_Subtitle_subTitle {
        color: var(--vc-sub-title-color, rgba(0, 0, 0, .8));
        font-size: var(--vc-subtitle-font-size, .875rem);
        font-weight: var(--vc-subtitle-font-weight, normal);
        line-height: var(--vc-subtitle-line-height, 1rem);
        margin: var(--vc-sub-title-margin, 0);
        padding: var(--vc-sub-title-padding, 0);
        text-align: var(--vc-subtitle-text-align, unset);
        white-space: var(--vc-sub-title-white-space, unset);
        word-break:break-word
    }

    .vc_Subtitle_defaultLine {
        -webkit-line-clamp:2
    }

    .vc_Subtitle_defaultLine, .vc_Subtitle_oneLine {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_Subtitle_oneLine {
        -webkit-line-clamp:1
    }

    .vc_Subtitle_subTitleLatam {
        color: var(--vc-sub-title-latam-color, rgba(0, 0, 0, .65));
        font-size: var(--vc-subtitle-latam-font-size, .75rem);
        font-weight: var(--vc-subtitle-latam-font-weight, 400)
    }
    </style>
    <style type="text/css">
    .vc_ProgressBar_progressBar {
        background: linear-gradient(90deg, transparent var(--vc-progress-bar-percentage), var(--vc-progress-bar-bg-color, #e8e8e8) 0), linear-gradient(90deg, var(--vc-progress-bar-start-color, #eb1717), var(--vc-progress-bar-end-color, #ffb000));
        border-radius: var(--vc-progress-bar-height, 4px);
        height: var(--vc-progress-bar-height, 4px)
    }
    </style>
    <style type="text/css">
    .vc_ProgressBarExpiry_progressBarExpiry {
        color: rgba(0, 0, 0, .54);
        font-size: var(--vc-expiry-font-size, .75rem);
        line-height: var(--vc-expiry-line-height, .875rem);
        margin: var(--vc-card-progress-expiry-margin, .25rem 0 0 0);
        margin-top: var(--vc-expiry-margin-top, .25rem);
        overflow: hidden;
        padding-right: var(--vc-card-progress-expiry-padding-right, 0);
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_ProgressBarExpiry_progressBarExpiry.vc_ProgressBarExpiry_twoRowsLabel {
        margin-top:.25rem
    }

    .vc_ProgressBarExpiry_progressBar {
        margin-bottom: .25rem;
        margin-right:.3125rem
    }

    .vc_ProgressBarExpiry_usageLimitedText {
        line-height: var(--vc-card-progress-expiry-usage-limited-text-linehigh, unset);
        margin: var(--vc-card-progress-expiry-usage-limited-text-margin, 0);
        white-space:normal
    }

    .vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_noMargin {
        margin:0
    }

    .vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_twoRowsLimitText {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_oneRowLimitText {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_ProgressBarExpiry_isRunningOutSoon {
        color: #ff424f;
        font-weight:500
    }

    .vc_ProgressBarExpiry_comingSoonStartTime {
        color:#ee4d2d
    }

    .vc_ProgressBarExpiry_isEndingSoon {
        color:#ff424f
    }

    .vc_ProgressBarExpiry_validUntil {
        color:rgba(0, 0, 0, .54)
    }

    .vc_ProgressBarExpiry_capitalize {
        text-transform:var(--vc-card-progress-expiry-capitalize-text-transform, unset)
    }

    .vc_ProgressBarExpiry_capitalize:first-letter {
        text-transform: capitalize
    }
    </style>
    <style type="text/css">
    .vc_Expiry_expiry {
        color: rgba(0, 0, 0, .54);
        font-size: var(--vc-expiry-font-size, .75rem);
        line-height: var(--vc-expiry-line-height, .875rem);
        margin-top: var(--vc-expiry-margin-top, .25rem);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_Expiry_capitalize :first-letter {
        text-transform:capitalize
    }

    .vc_Expiry_comingSoonStartTime {
        color:var(--primary, #ee4d2d)
    }

    .vc_Expiry_isEndingSoon {
        color:var(--danger, #ff424f)
    }

    .vc_Expiry_validUntil {
        color:rgba(0, 0, 0, .54)
    }

    .vc_Expiry_halfOpacity {
        opacity: .5
    }
    </style>
    <style type="text/css">
    .vc_src_stardust-icon {
        stroke: currentColor;
        fill: currentColor;
        height: 1em;
        width: 1em
    }
    </style>
    <style type="text/css">
    .vc_UpcomingText_upcomingText {
        align-items: center;
        color: var(--primary, #ee4d2d);
        display: flex;
        font-size: var(--vc-expiry-font-size, .75rem);
        line-height: var(--vc-expiry-line-height, .875rem);
        margin-top: var(--vc-expiry-margin-top, .25rem);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_UpcomingText_grayText {
        color:rgba(0, 0, 0, .54)
    }

    .vc_UpcomingText_timeIcon {
        fill: currentColor;
        stroke: currentColor;
        height: 1em;
        margin-right: .25rem;
        width:1em
    }

    .vc_UpcomingText_halfOpacity {
        opacity: .5
    }
    </style>
    <style type="text/css">
    .vc_src_placeholder {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 54 61' fill='%23e5e4e4'%3E%3Cpath d='M51.2 16.9H38.7C38.7 11.6 36 .6 27 .5 17.4.4 15.2 12.4 15.2 16.9H2.8c-3.4 0-2.7 3.4-2.7 3.4l2.4 33s-.1 7.3 6.3 7.5h36.5c6.2-.4 6.3-7.5 6.3-7.5l2.4-33c0-.1.5-3.5-2.8-3.4zM27.1 4.2c7.1.2 7.9 11.7 7.7 12.6H19.1c-.1-.9.4-12.4 8-12.6zm9.1 44.6c-1 1.7-2.7 3-5 3.7-1.2.4-2.4.5-3.6.5-3.2 0-6.5-1.1-9.3-3.3-.8-.6-1-1.5-.5-2.3.2-.4.7-.7 1.2-.8.4-.1.9 0 1.2.3 3.2 2.4 8.3 4 11.9 1.6 1.4-.9 2.1-2.7 1.6-4.3-.5-1.6-2.2-2.7-3.5-3.4-1-.6-2.1-1-3.3-1.4-.9-.3-1.9-.7-2.9-1.2-2.4-1.2-4-2.6-4.8-4.2-1.2-2.3-.6-5.4 1.4-7.5 3.6-3.8 10-3.2 14-.4.9.6.9 1.7.4 2.5s-1.4.9-2.2.4c-2-1.4-4.4-2-6.4-1.7-2 .3-4.7 2-4.4 4.6.2 1.5 2 2.6 3.3 3.3.8.4 1.5.7 2.3.9 4.3 1.3 7.2 3.3 8.6 5.7 1.2 2.1 1.2 4.9 0 7z' stroke='none'/%3E%3C/svg%3E");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: 60px;
        max-height: 100%;
        max-width: 100%;
        width:60px
    }

    .vc_src_placeholderContainer {
        align-items: center;
        bottom: 0;
        display: flex;
        height: 100%;
        justify-content: center;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%
    }
    </style>
    <style type="text/css">
    .vc_Logo_logo {
        display: block;
        height: var(--vc-logo-size, 3.5rem);
        width:var(--vc-logo-size, 3.5rem)
    }

    .vc_Logo_gray {
        filter:grayscale(1)
    }

    .vc_Logo_textLogo {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        color: #fff;
        display: -webkit-box;
        font-size: var(--vc-text-logo-font-size, 1.25rem);
        line-height: 1.375rem;
        max-height: 2.75rem;
        overflow: hidden;
        text-align: center;
        text-overflow: ellipsis;
        text-transform: uppercase;
        white-space:var(--vc-text-logo-white-space, unset)
    }

    .vc_Logo_imageLogo {
        align-items: center;
        display: flex;
        justify-content:center
    }

    .vc_Logo_circular {
        border: .0625rem solid #efefef;
        border-radius:50%
    }

    .vc_Logo_noBorder {
        border:none
    }

    .vc_Logo_whiteBg {
        background-color:#fff
    }

    .vc_Logo_svgBox {
        overflow: hidden;
        position:relative
    }

    .vc_Logo_svgBox > svg {
        height: var(--vc-logo-size, 3.5rem);
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width:var(--vc-logo-size, 3.5rem)
    }

    .vc_Logo_seller {
        background-color: #f5f5f5;
        border-radius:50%
    }

    .vc_Logo_seller > svg {
        height: 50%;
        width:50%
    }

    .vc_Logo_opv {
        height: 100%;
        margin-left: .25rem;
        -o-object-fit: cover;
        object-fit: cover;
        width:calc(100% - .25rem)
    }

    .vc_Logo_circle {
        border-radius:50%
    }

    .vc_Logo_placeholderContainer {
        align-items: center;
        bottom: 0;
        display: flex;
        height: 100%;
        justify-content: center;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width:100%
    }

    .vc_Logo_placeholder {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 54 61' fill='%23e5e4e4'%3E%3Cpath d='M51.2 16.9H38.7C38.7 11.6 36 .6 27 .5 17.4.4 15.2 12.4 15.2 16.9H2.8c-3.4 0-2.7 3.4-2.7 3.4l2.4 33s-.1 7.3 6.3 7.5h36.5c6.2-.4 6.3-7.5 6.3-7.5l2.4-33c0-.1.5-3.5-2.8-3.4zM27.1 4.2c7.1.2 7.9 11.7 7.7 12.6H19.1c-.1-.9.4-12.4 8-12.6zm9.1 44.6c-1 1.7-2.7 3-5 3.7-1.2.4-2.4.5-3.6.5-3.2 0-6.5-1.1-9.3-3.3-.8-.6-1-1.5-.5-2.3.2-.4.7-.7 1.2-.8.4-.1.9 0 1.2.3 3.2 2.4 8.3 4 11.9 1.6 1.4-.9 2.1-2.7 1.6-4.3-.5-1.6-2.2-2.7-3.5-3.4-1-.6-2.1-1-3.3-1.4-.9-.3-1.9-.7-2.9-1.2-2.4-1.2-4-2.6-4.8-4.2-1.2-2.3-.6-5.4 1.4-7.5 3.6-3.8 10-3.2 14-.4.9.6.9 1.7.4 2.5s-1.4.9-2.2.4c-2-1.4-4.4-2-6.4-1.7-2 .3-4.7 2-4.4 4.6.2 1.5 2 2.6 3.3 3.3.8.4 1.5.7 2.3.9 4.3 1.3 7.2 3.3 8.6 5.7 1.2 2.1 1.2 4.9 0 7z' stroke='none'/%3E%3C/svg%3E");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: 60px;
        max-height: 100%;
        max-width: 100%;
        width:60px
    }

    .vc_Logo_placeholderLogo {
        align-items: center;
        display: flex;
        justify-content:center
    }

    .vc_Logo_OPVPlaceholderLogo {
        height: var(--vc-logo-size, 3.5rem);
        width:var(--vc-logo-size, 3.5rem)
    }

    .vc_Logo_OPVPlaceholder {
        max-height: 70%;
        max-width:70%
    }

    .vc_Logo_OPVPlaceholder.vc_Logo_shoppingMall {
        background-color: #fafafa
    }
    </style>
    <style type="text/css">
    .vc_MainTitle_mainTitle {
        display:flex
    }

    .vc_MainTitle_text {
        color: var(--vc-main-title-color, rgba(0, 0, 0, .8));
        font-size: var(--vc-main-title-font-size, 1rem);
        font-weight: 500;
        line-height: var(--vc-main-title-line-height, 1.25rem);
        white-space:var(--vc-card-mian-title-white-space, nowrap)
    }

    .vc_MainTitle_defaultLine, .vc_MainTitle_fsvLine {
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_MainTitle_fsvLine {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        white-space: normal;
        word-break:break-word
    }

    .vc_MainTitle_textLatam {
        color: var(--vc-main-title-latam-color, rgba(0, 0, 0, .87));
        font-weight:var(--vc-main-title-latam-font-weight, 700)
    }

    .vc_MainTitle_scopeTag {
        align-items: center;
        display: inline-flex;
        padding-right:.25rem
    }

    .vc_MainTitle_img {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: .875rem;
        width: 3.75rem
    }
    </style>
    <style type="text/css">
    .vc_Subtitle_subTitle {
        color: var(--vc-sub-title-color, rgba(0, 0, 0, .8));
        font-size: var(--vc-subtitle-font-size, .875rem);
        font-weight: var(--vc-subtitle-font-weight, normal);
        line-height: var(--vc-subtitle-line-height, 1rem);
        margin: var(--vc-sub-title-margin, 0);
        padding: var(--vc-sub-title-padding, 0);
        text-align: var(--vc-subtitle-text-align, unset);
        white-space: var(--vc-sub-title-white-space, unset);
        word-break:break-word
    }

    .vc_Subtitle_defaultLine {
        -webkit-line-clamp:2
    }

    .vc_Subtitle_defaultLine, .vc_Subtitle_oneLine {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_Subtitle_oneLine {
        -webkit-line-clamp:1
    }

    .vc_Subtitle_subTitleLatam {
        color: var(--vc-sub-title-latam-color, rgba(0, 0, 0, .65));
        font-size: var(--vc-subtitle-latam-font-size, .75rem);
        font-weight: var(--vc-subtitle-latam-font-weight, 400)
    }
    </style>
    <style type="text/css">
    .vc_ProgressBar_progressBar {
        background: linear-gradient(90deg, transparent var(--vc-progress-bar-percentage), var(--vc-progress-bar-bg-color, #e8e8e8) 0), linear-gradient(90deg, var(--vc-progress-bar-start-color, #eb1717), var(--vc-progress-bar-end-color, #ffb000));
        border-radius: var(--vc-progress-bar-height, 4px);
        height: var(--vc-progress-bar-height, 4px)
    }
    </style>
    <style type="text/css">
    .vc_ProgressBarExpiry_progressBarExpiry {
        color: rgba(0, 0, 0, .54);
        font-size: var(--vc-expiry-font-size, .75rem);
        line-height: var(--vc-expiry-line-height, .875rem);
        margin: var(--vc-card-progress-expiry-margin, .25rem 0 0 0);
        margin-top: var(--vc-expiry-margin-top, .25rem);
        overflow: hidden;
        padding-right: var(--vc-card-progress-expiry-padding-right, 0);
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_ProgressBarExpiry_progressBarExpiry.vc_ProgressBarExpiry_twoRowsLabel {
        margin-top:.25rem
    }

    .vc_ProgressBarExpiry_progressBar {
        margin-bottom: .25rem;
        margin-right:.3125rem
    }

    .vc_ProgressBarExpiry_usageLimitedText {
        line-height: var(--vc-card-progress-expiry-usage-limited-text-linehigh, unset);
        margin: var(--vc-card-progress-expiry-usage-limited-text-margin, 0);
        white-space:normal
    }

    .vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_noMargin {
        margin:0
    }

    .vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_twoRowsLimitText {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        overflow: hidden;
        text-overflow:ellipsis
    }

    .vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_oneRowLimitText {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_ProgressBarExpiry_isRunningOutSoon {
        color: #ff424f;
        font-weight:500
    }

    .vc_ProgressBarExpiry_comingSoonStartTime {
        color:#ee4d2d
    }

    .vc_ProgressBarExpiry_isEndingSoon {
        color:#ff424f
    }

    .vc_ProgressBarExpiry_validUntil {
        color:rgba(0, 0, 0, .54)
    }

    .vc_ProgressBarExpiry_capitalize {
        text-transform:var(--vc-card-progress-expiry-capitalize-text-transform, unset)
    }

    .vc_ProgressBarExpiry_capitalize:first-letter {
        text-transform: capitalize
    }
    </style>
    <style type="text/css">
    .vc_Expiry_expiry {
        color: rgba(0, 0, 0, .54);
        font-size: var(--vc-expiry-font-size, .75rem);
        line-height: var(--vc-expiry-line-height, .875rem);
        margin-top: var(--vc-expiry-margin-top, .25rem);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_Expiry_capitalize :first-letter {
        text-transform:capitalize
    }

    .vc_Expiry_comingSoonStartTime {
        color:var(--primary, #ee4d2d)
    }

    .vc_Expiry_isEndingSoon {
        color:var(--danger, #ff424f)
    }

    .vc_Expiry_validUntil {
        color:rgba(0, 0, 0, .54)
    }

    .vc_Expiry_halfOpacity {
        opacity: .5
    }
    </style>
    <style type="text/css">
    .vc_src_stardust-icon {
        stroke: currentColor;
        fill: currentColor;
        height: 1em;
        width: 1em
    }
    </style>
    <style type="text/css">
    .vc_UpcomingText_upcomingText {
        align-items: center;
        color: var(--primary, #ee4d2d);
        display: flex;
        font-size: var(--vc-expiry-font-size, .75rem);
        line-height: var(--vc-expiry-line-height, .875rem);
        margin-top: var(--vc-expiry-margin-top, .25rem);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }

    .vc_UpcomingText_grayText {
        color:rgba(0, 0, 0, .54)
    }

    .vc_UpcomingText_timeIcon {
        fill: currentColor;
        stroke: currentColor;
        height: 1em;
        margin-right: .25rem;
        width:1em
    }

    .vc_UpcomingText_halfOpacity {
        opacity: .5
    }
    </style>
</head>
<body style="visibility: visible;">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJZQSJF" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <div id="main">
        <style id="nebula-style">
        :root {
            --nc-primary: #ee4d2d;
            --nc-primary-bg: #fef6f5;
            --nc-primary-gradient: linear-gradient(#ee4d2d, #ff7337);
            --nc-secondary-blue: #0046ab;
            --nc-secondary-yellow: #eda500;
            --nc-secondary-green: #26aa99;
            --nc-error: #ee2c4a;
            --nc-error-bg: #fff4f4;
            --nc-caution: #f69113;
            --nc-caution-bg: #fff8e4;
            --nc-success: #30b566;
            --nc-success-bg: #f7fffe;
            --nc-text-primary: rgba(0, 0, 0, .87);
            --nc-text-primary-o: #212121;
            --nc-text-secondary: rgba(0, 0, 0, .65);
            --nc-text-secondary-o: #595959;
            --nc-text-tertiary: rgba(0, 0, 0, .54);
            --nc-text-tertiary-o: #757575;
            --nc-text-link: #0088ff;
            --nc-util-mask: rgba(0, 0, 0, .4);
            --nc-util-disabled: rgba(0, 0, 0, .26);
            --nc-util-disabled-o: #bdbdbd;
            --nc-util-line: rgba(0, 0, 0, .09);
            --nc-util-line-o: #e8e8e8;
            --nc-util-bg: #f5f5f5;
            --nc-util-placeholder: #fafafa;
            --nc-util-pressed: rgba(0, 0, 0, .05);
            --nt-font-regular-f: -apple-system, 'HelveticaNeue', 'Helvetica Neue', 'Roboto', 'Droid Sans', Arial, sans-serif;
            --nt-font-regular-w: 400;
            --nt-font-medium-f: -apple-system, 'HelveticaNeue-Medium', 'Helvetica Neue', 'Roboto', 'Droid Sans', Arial, sans-serif;
            --nt-font-medium-w: 500;
            --nt-font-bold-f: -apple-system, 'HelveticaNeue-Bold', 'Helvetica Neue', 'Roboto', 'Droid Sans', 'Arial Bold', Arial, sans-serif;
            --nt-font-bold-w: 700;
            --nt-size-foot: .625rem;
            --nt-size-foot-l: .75rem;
            --nt-size-foot-lp: .75rem;
            --nt-size-foot-t: 1rem;
            --nt-size-foot-tp: 1rem;
            --nt-size-small: .75rem;
            --nt-size-small-l: .875rem;
            --nt-size-small-lp: 1.25rem;
            --nt-size-small-t: 1.125rem;
            --nt-size-small-tp: 1.125rem;
            --nt-size-normal: .875rem;
            --nt-size-normal-l: 1rem;
            --nt-size-normal-lp: 1.25rem;
            --nt-size-normal-t: 1.375rem;
            --nt-size-normal-tp: 1.375rem;
            --nt-size-large: 1rem;
            --nt-size-large-l: 1.25rem;
            --nt-size-large-lp: 1.375rem;
            --nt-size-large-t: 1.5rem;
            --nt-size-large-tp: 1.5rem;
            --nt-size-title: 1.25rem;
            --nt-size-title-l: 1.5rem;
            --nt-size-title-lp: 1.5rem;
            --nt-size-title-t: 1.875rem;
            --nt-size-title-tp: 1.875rem;
            --ns-a: .25rem;
            --ns-b: .5rem;
            --ns-c: .75rem;
            --ns-d: 1rem;
            --ns-e: 1.25rem;
            --ns-f: 1.5rem;
            --ns-g: 2.5rem;
            --ne-depth6: 0 0 .375rem rgba(0, 0, 0, .06);
            --ne-depth9: 0 0 .5625rem rgba(0, 0, 0, .12);
            --nr-normal: .125rem;
            --nr-overlay:.25rem
        }

        .nt-foot {
            font-size: var(--nt-size-foot, .625rem);
            line-height:var(--nt-size-foot-l, .75rem)
        }

        .nt-foot-p {
            font-size: var(--nt-size-foot, .625rem);
            line-height:var(--nt-size-foot-lp, .75rem)
        }

        .nt-small {
            font-size: var(--nt-size-small, .75rem);
            line-height:var(--nt-size-small-l, .875rem)
        }

        .nt-small-p {
            font-size: var(--nt-size-small, .75rem);
            line-height:var(--nt-size-small-lp, 1.25rem)
        }

        .nt-normal {
            font-size: var(--nt-size-normal, .875rem);
            line-height:var(--nt-size-normal-l, 1rem)
        }

        .nt-normal-p {
            font-size: var(--nt-size-normal, .875rem);
            line-height:var(--nt-size-normal-lp, 1.25rem)
        }

        .nt-large {
            font-size: var(--nt-size-large, 1rem);
            line-height:var(--nt-size-large-l, 1.25rem)
        }

        .nt-large-p {
            font-size: var(--nt-size-large, 1rem);
            line-height:var(--nt-size-large-lp, 1.375rem)
        }

        .nt-title {
            font-size: var(--nt-size-title, 1.25rem);
            line-height:var(--nt-size-title-l, 1.5rem)
        }

        .nt-title-p {
            font-size: var(--nt-size-title, 1.25rem);
            line-height:var(--nt-size-title-lp, 1.5rem)
        }

        .nt-regular {
            font-family: var(--nt-font-regular-f, -apple-system, 'HelveticaNeue', 'Helvetica Neue', 'Roboto', 'Droid Sans', Arial, sans-serif);
            font-weight:var(--nt-font-regular-w, 400)
        }

        .nt-medium {
            font-family: var(--nt-font-medium-f, -apple-system, 'HelveticaNeue-Medium', 'Helvetica Neue', 'Roboto', 'Droid Sans', Arial, sans-serif);
            font-weight:var(--nt-font-medium-w, 500)
        }

        .nt-bold {
            font-family: var(--nt-font-bold-f, -apple-system, 'HelveticaNeue-Bold', 'Helvetica Neue', 'Roboto', 'Droid Sans', 'Arial Bold', Arial, sans-serif);
            font-weight: var(--nt-font-bold-w, 700)
        }
        </style>
        <div>
            <section class="lF2jXb" tabindex="-1">
                <button class="stardust-button u6BOJM" tabindex="10000">
                    <span class="zV2jR+">lompat ke konten utama</span>
                </button>
            </section>
            <div class="shopee-progress-bar shopee-progress-bar--reset" style="will-change: auto;"></div>
            <div style="display: contents;">
                <div>
                    <header class="shopee-top container-wrapper">
                        <div class="navbar-wrapper container-wrapper">
                            <nav class="container navbar">
                                <div class="flex v-center AFNv_2">
                                    <a href="//seller.shopee.co.id" target="_blank" rel="noopener noreferrer" class="PnbNrD TlJa3Z">Seller Centre</a>
                                    <div class="shopee-drawer TlJa3Z" id="pc-drawer-id-1">
                                        <a class="PnbNrD" href="/web/" target="_blank" rel="noopener noreferrer" id="temporaryId">Download</a>
                                    </div>
                                    <div class="flex PnbNrD TlJa3Z K_ul1I">Ikuti kami di</div>
                                    <div class="flex PnbNrD Z_LU_o">
                                        <a class="YjYBRd header-navbar-background header-navbar-facebook-png" href="https://facebook.com/ShopeeID" target="_blank" rel="noopener noreferrer" title="Ikuti kami di Facebook"></a>
                                        <a href="https://instagram.com/Shopee_ID" target="_blank" rel="noopener noreferrer" class="NmyWMZ header-navbar-background header-navbar-instagram-png" title="Ikuti kami di Instagram!"></a>
                                        <a href="https://instagram.com/kampusshopee.id" target="_blank" rel="noopener noreferrer" class="xTKbwM header-navbar-background header-navbar-shopee-campus-header-png" title="Ikuti kami di Kampus Shopee"></a>
                                    </div>
                                </div>
                                <div class="navbar__spacer"></div>
                                <ul class="navbar__links">
                                    <li class="navbar__link--notification navbar__link navbar__link--hoverable navbar__link--tappable">
                                        <div class="stardust-popover" id="stardust-popover1" tabindex="0">
                                            <div role="button" class="stardust-popover__target">
                                                <a class="WCesPV" tabindex="-1" href="/user/notifications/order">
                                                    <svg viewBox="3 2.5 14 14" x="0" y="0" class="shopee-svg-icon icon-notification-2">
                                                        <path d="m17 15.6-.6-1.2-.6-1.2v-7.3c0-.2 0-.4-.1-.6-.3-1.2-1.4-2.2-2.7-2.2h-1c-.3-.7-1.1-1.2-2.1-1.2s-1.8.5-2.1 1.3h-.8c-1.5 0-2.8 1.2-2.8 2.7v7.2l-1.2 2.5-.2.4h14.4zm-12.2-.8.1-.2.5-1v-.1-7.6c0-.8.7-1.5 1.5-1.5h6.1c.8 0 1.5.7 1.5 1.5v7.5.1l.6 1.2h-10.3z"></path>
                                                        <path d="m10 18c1 0 1.9-.6 2.3-1.4h-4.6c.4.9 1.3 1.4 2.3 1.4z"></path>
                                                    </svg>
                                                    <span class="HUb4uA">notifikasi</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <a class="navbar__link navbar__link--tappable navbar__link--hoverable navbar__link--help" href="https://help.shopee.co.id/s" target="_blank" rel="noopener noreferrer" tabindex="0">
                                        <div class="navbar__help-center-icon">
                                            <svg height="16" viewBox="0 0 16 16" width="16" class="shopee-svg-icon icon-help-center">
                                                <g fill="none" fill-rule="evenodd" transform="translate(1)">
                                                    <circle cx="7" cy="8" r="7" stroke="currentColor"></circle>
                                                    <path fill="currentColor" d="m6.871 3.992c-.814 0-1.452.231-1.914.704-.462.462-.693 1.089-.693 1.892h1.155c0-.484.099-.858.297-1.122.22-.319.583-.473 1.078-.473.396 0 .715.11.935.33.209.22.319.517.319.902 0 .286-.11.55-.308.803l-.187.209c-.682.605-1.1 1.056-1.243 1.364-.154.286-.22.638-.22 1.045v.187h1.177v-.187c0-.264.055-.506.176-.726.099-.198.253-.396.462-.572.517-.451.825-.737.924-.858.275-.352.418-.803.418-1.342 0-.66-.22-1.188-.66-1.573-.44-.396-1.012-.583-1.716-.583zm-.198 6.435c-.22 0-.418.066-.572.22-.154.143-.231.33-.231.561 0 .22.077.407.231.561s.352.231.572.231.418-.077.572-.22c.154-.154.242-.341.242-.572s-.077-.418-.231-.561c-.154-.154-.352-.22-.583-.22z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="navbar__link-text navbar__link--tappable navbar__link--hoverable">bantuan</span>
                                    </a>
                                    <li class="navbar__link--notification navbar__link navbar__link--hoverable navbar__link--tappable">
                                        <div class="stardust-popover" id="stardust-popover3" tabindex="0">
                                            <div role="button" class="stardust-popover__target">
                                                <div class="qiZhRg">
                                                    <div class="HzRDzc">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.00065 14.6667C11.6825 14.6667 14.6673 11.6819 14.6673 8.00004C14.6673 4.31814 11.6825 1.33337 8.00065 1.33337C4.31875 1.33337 1.33398 4.31814 1.33398 8.00004C1.33398 11.6819 4.31875 14.6667 8.00065 14.6667Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M5.33464 8.00004C5.33464 11.6819 6.52854 14.6667 8.0013 14.6667C9.47406 14.6667 10.668 11.6819 10.668 8.00004C10.668 4.31814 9.47406 1.33337 8.0013 1.33337C6.52854 1.33337 5.33464 4.31814 5.33464 8.00004Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M1.33398 8H14.6673" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="DXcInb">Bahasa Indonesia</span>
                                                    <svg viewBox="0 0 12 12" fill="none" width="12" height="12" color="currentColor">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 8.146L11.146 3l.707.707-5.146 5.147a1 1 0 01-1.414 0L.146 3.707.854 3 6 8.146z" fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="navbar__link navbar__link--tappable navbar__link--hoverable navbar__link--account">
                                        <div class="stardust-popover" id="stardust-popover4" tabindex="0">
                                            <div role="button" class="stardust-popover__target">
                                                <div class="navbar__link--account__container">
                                                    <div class="shopee-avatar">
                                                        <div class="shopee-avatar__placeholder">
                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-headshot">
                                                                <g>
                                                                    <circle cx="7.5" cy="4.5" fill="none" r="3.8" stroke-miterlimit="10"></circle>
                                                                    <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <img class="shopee-avatar__img" src="https://down-id.img.susercontent.com/file/id-11134226-7r98r-lpggfmizk4um17_tn">
                                                    </div>
                                                    <div class="navbar__username">Slot Demo</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="container-wrapper header-with-search-wrapper">
                            <div class="container header-with-search">
                                <a class="header-with-search__logo-section" href="/">
                                    <div class="header-with-search__logo-wrapper">
                                        <svg viewBox="0 0 192 65" class="shopee-svg-icon header-with-search__shopee-logo icon-shopee-logo">
                                            <g fill-rule="evenodd">
                                                <path d="M35.6717403 44.953764c-.3333497 2.7510509-2.0003116 4.9543414-4.5823845 6.0575984-1.4379707.6145919-3.36871.9463856-4.896954.8421628-2.3840266-.0911143-4.6237865-.6708937-6.6883352-1.7307424-.7375522-.3788551-1.8370513-1.1352759-2.6813095-1.8437757-.213839-.1790053-.239235-.2937577-.0977428-.4944671.0764015-.1151823.2172535-.3229831.5286218-.7791994.45158-.6616533.5079208-.7446018.5587128-.8221779.14448-.2217688.3792333-.2411091.6107855-.0588804.0243289.0189105.0243289.0189105.0426824.0333083.0379873.0294402.0379873.0294402.1276204.0990653.0907002.0706996.14448.1123887.166248.1287205 2.2265285 1.7438508 4.8196989 2.7495466 7.4376251 2.8501162 3.6423042-.0496401 6.2615109-1.6873341 6.7308041-4.2020035.5160305-2.7675977-1.6565047-5.1582742-5.9070334-6.4908212-1.329344-.4166762-4.6895175-1.7616869-5.3090528-2.1250697-2.9094471-1.7071043-4.2697358-3.9430584-4.0763845-6.7048539.296216-3.8283059 3.8501677-6.6835796 8.340785-6.702705 2.0082079-.004083 4.0121475.4132378 5.937338 1.2244562.6816382.2873109 1.8987274.9496089 2.3189359 1.2633517.2420093.1777159.2898200.384872.1510957.60836-.0774686.12958-.2055158.3350171-.4754821.7632974l-.0029878.0047276c-.3553311.5640922-.3664286.5817134-.447952.7200572-.140852.2144625-.3064598.2344475-.5604202.0732783-2.0600669-1.3839063-4.3437898-2.0801572-6.8554368-2.130442-3.126914.061889-5.4706057 1.9228561-5.6246892 4.4579402-.0409751 2.2896772 1.676352 3.9613243 5.3858811 5.2358503 7.529819 2.4196871 10.4113092 5.25648 9.869029 9.7292478M26.3725216 5.42669372c4.9022893 0 8.8982174 4.65220288 9.0851664 10.47578358H17.2875686c.186949-5.8235807 4.1828771-10.47578358 9.084953-10.47578358m25.370857 11.57065968c0-.6047069-.4870064-1.0948761-1.0875481-1.0948761h-11.77736c-.28896-7.68927544-5.7774923-13.82058185-12.5059489-13.82058185-6.7282432 0-12.2167755 6.13130641-12.5057355 13.82058185l-11.79421958.0002149c-.59200492.0107446-1.06748731.4968309-1.06748731 1.0946612 0 .0285807.00106706.0569465.00320118.0848825H.99995732l1.6812605 37.0613963c.00021341.1031483.00405483.2071562.01173767.3118087.00170729.0236381.003628.0470614.00554871.0704847l.00362801.0782207.00405483.004083c.25545428 2.5789222 2.12707837 4.6560709 4.67201764 4.7519129l.00576212.0055872h37.4122078c.0177132.0002149.0354264.0004298.0531396.0004298.0177132 0 .0354264-.0002149.0531396-.0004298h.0796027l.0017073-.0015043c2.589329-.0706995 4.6867431-2.1768587 4.9082648-4.787585l.0012805-.0012893.0017073-.0350275c.0021341-.0275062.0040548-.0547975.0057621-.0823037.0040548-.065757.0068292-.1312992.0078963-.1964115l1.8344904-37.207738h-.0012805c.001067-.0186956.0014939-.0376062.0014939-.0565167M176.465457 41.1518926c.720839-2.3512494 2.900423-3.9186779 5.443734-3.9186779 2.427686 0 4.739107 1.6486899 5.537598 3.9141989l.054826.1556978h-11.082664l.046506-.1512188zm13.50267 3.4063683c.014933.0006399.014933.0006399.036906.0008531.021973-.0002132.021973-.0002132.044372-.0008531.53055-.0243144.950595-.4766911.950595-1.0271786 0-.0266606-.000853-.0496953-.00256-.0865936.000427-.0068251.000427-.020262.000427-.0635588 0-5.1926268-4.070748-9.4007319-9.09145-9.4007319-5.020488 0-9.091235 4.2081051-9.091235 9.4007319 0 .3871116.022399.7731567.067838 1.1568557l.00256.0204753.01408.1013102c.250022 1.8683731 1.047233 3.5831812 2.306302 4.9708108-.00064-.0006399.00064.0006399.007253.0078915 1.396026 1.536289 3.291455 2.5833031 5.393601 2.9748936l.02752.0053321v-.0027727l.20053.0228215c.070186.0119439.144211.0236746.243409.039031 2.766879.332724 5.221231-.0661182 7.299484-1.1127057.511777-.2578611.971928-.5423827 1.37064-.8429007.128211-.0968312.243622-.1904632.34346-.2781231.051412-.0452164.092372-.083181.114131-.1051493.468898-.4830897.498124-.6543572.215249-1.0954297-.31146-.4956734-.586228-.9179769-.821744-1.2675504-.082345-.1224254-.154023-.2267215-.214396-.3133151-.033279-.0475624-.033279-.0475624-.054399-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.00256-.0038391c-.256208-.3188605-.431565-.3480805-.715933-.0970445-.030292.0268739-.131624.1051493-.14997.1245582-1.999321 1.775381-4.729508 2.3465571-7.455854 1.7760208-.507724-.2002888-.982595-.3094759-1.419919-.5184948-1.708127-.8565509-2.918343-2.3826022-3.267563-4.1490253l-.02752-.1394881h13.754612zM154.831964 41.1518926c.720831-2.3512494 2.900389-3.9186779 5.44367-3.9186779 2.427657 0 4.739052 1.6486899 5.537747 3.9141989l.054612.1556978h-11.082534l.046505-.1512188zm13.502512 3.4063683c.015146.0006399.015146.0006399.037118.0008531.02176-.0002132.02176-.0002132.044159-.0008531.530543-.0243144.950584-.4766911.950584-1.0271786 0-.0266606-.000854-.0496953-.00256-.0865936.000426-.0068251.000426-.020262.000426-.0635588 0-5.1926268-4.070699-9.4007319-9.091342-9.4007319-5.020217 0-9.091343 4.2081051-9.091343 9.4007319 0 .3871116.022826.7731567.068051 1.1568557l.00256.0204753.01408.1013102c.250019 1.8683731 1.04722 3.5831812 2.306274 4.9708108-.00064-.0006399.00064.0006399.007254.0078915 1.396009 1.536289 3.291417 2.5833031 5.393538 2.9748936l.027519.0053321v-.0027727l.200529.0228215c.070184.0119439.144209.0236746.243619.039031 2.766847.332724 5.22117-.0661182 7.299185-1.1127057.511771-.2578611.971917-.5423827 1.370624-.8429007.128209-.0968312.243619-.1904632.343456-.2781231.051412-.0452164.09237-.083181.11413-.1051493.468892-.4830897.498118-.6543572.215246-1.0954297-.311457-.4956734-.586221-.9179769-.821734-1.2675504-.082344-.1224254-.154022-.2267215-.21418-.3133151-.033492-.0475624-.033492-.0475624-.054612-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.002346-.0038391c-.256419-.3188605-.431774-.3480805-.716138-.0970445-.030292.0268739-.131623.1051493-.149969.1245582-1.999084 1.775381-4.729452 2.3465571-7.455767 1.7760208-.507717-.2002888-.982582-.3094759-1.419902-.5184948-1.708107-.8565509-2.918095-2.3826022-3.267311-4.1490253l-.027733-.1394881h13.754451zM138.32144123 49.7357905c-3.38129629 0-6.14681004-2.6808521-6.23169343-6.04042014v-.31621743c.08401943-3.35418649 2.85039714-6.03546919 6.23169343-6.03546919 3.44242097 0 6.23320537 2.7740599 6.23320537 6.1960534 0 3.42199346-2.7907844 6.19605336-6.23320537 6.19605336m.00172791-15.67913203c-2.21776751 0-4.33682838.7553485-6.03989586 2.140764l-.19352548.1573553V34.6208558c0-.4623792-.0993546-.56419733-.56740117-.56419733h-2.17651376c-.47409424 0-.56761716.09428403-.56761716.56419733v27.6400724c0 .4539841.10583425.5641973.56761716.5641973h2.17651376c.46351081 0 .56740117-.1078454.56740117-.5641973V50.734168l.19352548.1573553c1.70328347 1.3856307 3.82234434 2.1409792 6.03989586 2.1409792 5.27140956 0 9.54473746-4.2479474 9.54473746-9.48802964 0-5.239867-4.2733279-9.48781439-9.54473746-9.48781439M115.907646 49.5240292c-3.449458 0-6.245805-2.7496948-6.245805-6.1425854 0-3.3928907 2.79656-6.1427988 6.245805-6.1427988 3.448821 0 6.24538 2.7499081 6.24538 6.1427988 0 3.3926772-2.796346 6.1425854-6.24538 6.1425854m.001914-15.5438312c-5.28187 0-9.563025 4.2112903-9.563025 9.4059406 0 5.1944369 4.281155 9.4059406 9.563025 9.4059406 5.281657 0 9.562387-4.2115037 9.562387-9.4059406 0-5.1946503-4.280517-9.4059406-9.562387-9.4059406M94.5919049 34.1890939c-1.9281307 0-3.7938902.6198995-5.3417715 1.7656047l-.188189.1393105V23.2574169c0-.4254677-.1395825-.5643476-.5649971-.5643476h-2.2782698c-.4600414 0-.5652122.1100273-.5652122.5643476v29.2834155c0 .443339.1135587.5647782.5652122.5647782h2.2782698c.4226187 0 .5649971-.1457701.5649971-.5647782v-9.5648406c.023658-3.011002 2.4931278-5.4412923 5.5299605-5.4412923 3.0445753 0 5.516841 2.4421328 5.5297454 5.4630394v9.5430935c0 .4844647.0806524.5645628.5652122.5645628h2.2726775c.481764 0 .565212-.0824666.565212-.5645628v-9.5710848c-.018066-4.8280677-4.0440197-8.7806537-8.9328471-8.7806537M62.8459442 47.7938061l-.0053397.0081519c-.3248668.4921188-.4609221.6991347-.5369593.8179812-.2560916.3812097-.224267.551113.1668119.8816949.91266.7358184 2.0858968 1.508535 2.8774525 1.8955369 2.2023021 1.076912 4.5810275 1.646045 7.1017886 1.6975309 1.6283921.0821628 3.6734936-.3050536 5.1963734-.9842376 2.7569891-1.2298679 4.5131066-3.6269626 4.8208863-6.5794607.4985200-4.7841067-2.6143125-7.7747902-10.6321784-10.1849709l-.0021359-.0006435c-3.7356476-1.2047686-5.4904836-2.8064071-5.4911243-5.0426086.1099976-2.4715346 2.4015793-4.3179454 5.4932602-4.4331449 2.4904317.0062212 4.6923065.6675996 6.8557356 2.0598624.4562232.2767364.666607.2256796.9733188-.172263.035242-.0587797.1332787-.2012238.543367-.790093l.0012815-.0019308c.3829626-.5500403.5089793-.7336731.5403767-.7879478.258441-.4863266.2214903-.6738208-.244985-1.0046173-.459427-.3290803-1.7535544-1.0024722-2.4936356-1.2978721-2.0583439-.8211991-4.1863175-1.2199998-6.3042524-1.1788111-4.8198184.1046878-8.578747 3.2393171-8.8265087 7.3515337-.1572005 2.9703036 1.350301 5.3588174 4.5000778 7.124567.8829712.4661613 4.1115618 1.6865902 5.6184225 2.1278667 4.2847814 1.2547527 6.5186944 3.5630343 6.0571315 6.2864205-.4192725 2.4743234-3.0117991 4.1199394-6.6498372 4.2325647-2.6382344-.0549182-5.2963324-1.0217793-7.6043603-2.7562084-.0115337-.0083664-.0700567-.0519149-.1779185-.1323615-.1516472-.1130543-.1516472-.1130543-.1742875-.1300017-.4705335-.3247898-.7473431-.2977598-1.0346184.1302162-.0346012.0529875-.3919333.5963776-.5681431.8632459"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                                <div class="header-with-search__search-section">
                                    <form role="search" autocomplete="off" class="shopee-searchbar">
                                        <div class="shopee-searchbar__main">
                                            <div class="shopee-searchbar-input">
                                                <input aria-label="Selamat Datang Di Situs Slot Online Terbaik Tahun 2024" class="shopee-searchbar-input__input" maxlength="128" placeholder="Selamat Datang Di Situs Slot Online Terbaik Tahun 2024" autocomplete="off" aria-autocomplete="list" aria-controls="shopee-searchbar-listbox" aria-expanded="false" role="combobox" value="">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-solid-primary btn--s btn--inline shopee-searchbar__search-button">
                                            <svg height="19" viewBox="0 0 19 19" width="19" class="shopee-svg-icon">
                                                <g fill-rule="evenodd" stroke="none" stroke-width="1">
                                                    <g transform="translate(-1016 -32)">
                                                        <g>
                                                            <g transform="translate(405 21)">
                                                                <g transform="translate(611 11)">
                                                                    <path d="m8 16c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8zm0-2c-3.3137085 0-6-2.6862915-6-6s2.6862915-6 6-6 6 2.6862915 6 6-2.6862915 6-6 6z"></path>
                                                                    <path d="m12.2972351 13.7114222 4.9799555 4.919354c.3929077.3881263 1.0260608.3842503 1.4141871-.0086574.3881263-.3929076.3842503-1.0260607-.0086574-1.414187l-4.9799554-4.919354c-.3929077-.3881263-1.0260608-.3842503-1.4141871.0086573-.3881263.3929077-.3842503 1.0260608.0086573 1.4141871z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </button>
                                    </form>
                                    <div class="ZYaV64">
                                        <div class="c_J_OI">
                                            <a class="iDhc3I" href="/search?keyword=sandal%20wanita">Sandal Wanita</a>
                                            <a class="iDhc3I" href="/search?keyword=tas%20selempang%20wanita">Tas Selempang Wanita</a>
                                            <a class="iDhc3I" href="/search?keyword=baju%20atasan%20wanita%20terbaru">Baju Atasan Wanita Terbaru</a>
                                            <a class="iDhc3I" href="/search?keyword=sepatu%20wanita">Sepatu Wanita</a>
                                            <a class="iDhc3I" href="/search?keyword=tas%20wanita">Tas Wanita</a>
                                            <a class="iDhc3I" href="/search?keyword=celana%20pendek%20pria">Celana Pendek Pria</a>
                                            <a class="iDhc3I" href="/search?keyword=jam%20tangan%20wanita">Jam Tangan Wanita</a>
                                            <a class="iDhc3I" href="/search?keyword=sandal%20pria">Sandal Pria</a>
                                            <a class="iDhc3I" href="/search?keyword=sandal%20wanita%20kekinian">Sandal Wanita Kekinian</a>
                                            <a class="iDhc3I" href="/search?keyword=skintific">Skintific</a>
                                            <a class="iDhc3I" href="/search?keyword=dompet%20wanita">Dompet Wanita</a>
                                            <a class="iDhc3I" href="/search?keyword=jas%20hujan">Jas Hujan</a>
                                            <a class="iDhc3I" href="/search?keyword=sandal">Sandal</a>
                                            <a class="iDhc3I" href="/search?keyword=sepatu%20pria">Sepatu Pria</a>
                                            <a class="iDhc3I" href="/search?keyword=gamis%20terbaru%202024%20lebaran%20wanita%20import">Gamis Terbaru 2024 Lebaran Wanita Import</a>
                                            <a class="iDhc3I" href="/search?keyword=sunscreen">Sunscreen</a>
                                            <a class="iDhc3I" href="/search?keyword=celana%20jeans%20wanita">Celana Jeans Wanita</a>
                                            <a class="iDhc3I" href="/search?keyword=kaos%20pria">Kaos Pria</a>
                                            <a class="iDhc3I" href="/search?keyword=tas">Tas</a>
                                            <a class="iDhc3I" href="/search?keyword=jam%20tangan%20pria">Jam Tangan Pria</a>
                                            <a class="iDhc3I" href="/search?keyword=kemeja%20wanita">Kemeja Wanita</a>
                                            <a class="iDhc3I" href="/search?keyword=facetology%20sunscreen">Facetology Sunscreen</a>
                                            <a class="iDhc3I" href="/search?keyword=kacamata">Kacamata</a>
                                            <a class="iDhc3I" href="/search?keyword=atasan%20wanita%20kekinian">Atasan Wanita Kekinian</a>
                                            <a class="iDhc3I" href="/search?keyword=sepatu">Sepatu</a>
                                            <a class="iDhc3I" href="/search?keyword=gamis">Gamis</a>
                                            <a class="iDhc3I" href="/search?keyword=tas%20selempang%20pria">Tas Selempang Pria</a>
                                            <a class="iDhc3I" href="/search?keyword=daster">Daster</a>
                                            <a class="iDhc3I" href="/search?keyword=lego">LEGO</a>
                                            <a class="iDhc3I" href="/search?keyword=baju%20anak%20perempuan">Baju Anak Perempuan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-with-search__cart-wrapper">
                                    <div class="stardust-popover" id="cart_drawer_target_id">
                                        <div role="button" class="stardust-popover__target">
                                            <div class="cart-drawer-container">
                                                <a class="cart-drawer flex v-center" id="cart_drawer_target_id" href="/cart">
                                                    <svg viewBox="0 0 26.6 25.6" class="shopee-svg-icon navbar__link-icon icon-shopping-cart-2">
                                                        <title>Shopping Cart Icon</title>
                                                        <polyline fill="none" points="2 1.7 5.5 1.7 9.6 18.3 21.2 18.3 24.6 6.1 7 6.1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.5"></polyline>
                                                        <circle cx="10.7" cy="23" r="2.2" stroke="none"></circle>
                                                        <circle cx="19.7" cy="23" r="2.2" stroke="none"></circle>
                                                    </svg>
                                                    <span class="a11y-hidden">Shopping Cart number of items in cart 0</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="KrtGbA">
                        <div class="page-product">
                            <div class="tracking-impression-placeholder" style="position: fixed; z-index: 99999; bottom: 0px; left: 0px;"></div>
                            <div role="main" class="container">
                                <div class="flex items-center idLK2l page-product__breadcrumb">
                                    <a class="EtYbJs" href="/">Shopee</a>
                                    <img alt="icon arrow right" class="EB95ts" src="https://phyo-data.web.app/external-shopee-cdn/966fbe37fe1c72e3f2dd.svg">
                                    <a class="EtYbJs" href="/Slot Demo-Aksesoris-cat.11044458">Hiburan Game</a>
                                    <img alt="icon arrow right" class="EB95ts" src="https://phyo-data.web.app/external-shopee-cdn/966fbe37fe1c72e3f2dd.svg">
                                    <a class="EtYbJs" href="/Slot Demo-cat.11044458.11044476">Slot Demo</a>
                                    <img alt="icon arrow right" class="EB95ts" src="https://phyo-data.web.app/external-shopee-cdn/966fbe37fe1c72e3f2dd.svg">
                                    <a class="EtYbJs" href="/Pragmatic & PG Soft-cat.11044458.11044476.11044496">Pragmatic & PG Soft</a>
                                    <img alt="icon arrow right" class="EB95ts" src="https://phyo-data.web.app/external-shopee-cdn/966fbe37fe1c72e3f2dd.svg">
                                    <span class="oh0Xh2" tabindex="0"><?php echo $BRANDS ?> - Link Alternatif Slot Gacor Hari Ini Gampang Maxwin</span>
                                </div>
                                <section class="product-briefing flex card vX9SYw">
                                    <h1 class="Bf9ap6"><?php echo $BRANDS ?> - Link Alternatif Slot Gacor Hari Ini Gampang Maxwin</h1>
                                    <div></div>
                                    <section class="TFDXyQ">
                                        <h2 class="Bf9ap6">Product Image Section</h2>
                                        <div class="flex flex-column">
                                            <div class="TMw1ot">
                                                <div class="xxW0BG">
                                                    <div class="HJ5l1F" style="display: none;">
                                                        <div class="shopee-image-placeholder CCU0Uo">
                                                            <svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="center Oj2Oo7">
                                                            <img class="PhxDN7" src="">
                                                            <video data-dashjs-player="true" class="tpgcVs" autoplay="" poster=""></video>
                                                        </div>
                                                    </div>
                                                    <img width="450" height="450" src="https://res.cloudinary.com/dbjuvhndh/image/upload/v1703996734/banner/WhatsApp_Image_2023-12-09_at_17.59.45_zhp9mv.jpg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-center items-center" style="margin-top: 15px;">
                                            <div class="flex items-center idmlsn">
                                                <div class="rhG6k7">Share:</div>
                                                <button class="sprite-product-sharing sprite-product-sharing-fm Vo8Ebs" aria-label="Share on Messenger"></button>
                                                <button class="sprite-product-sharing sprite-product-sharing-fb Vo8Ebs" aria-label="Share on Facebook"></button>
                                                <button class="sprite-product-sharing sprite-product-sharing-pinterest Vo8Ebs" aria-label="Share on Pinterest"></button>
                                                <button class="sprite-product-sharing sprite-product-sharing-twitter Vo8Ebs" aria-label="Share on Twitter"></button>
                                            </div>
                                            <div class="flex items-center feDSnr">
                                                <button class="w2JMKY" tabindex="0">
                                                    <svg width="24" height="20" class="vgMiJB">
                                                        <path d="M19.469 1.262c-5.284-1.53-7.47 4.142-7.47 4.142S9.815-.269 4.532 1.262C-1.937 3.138.44 13.832 12 19.333c11.559-5.501 13.938-16.195 7.469-18.07z" stroke="#FF424F" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <div class="rhG6k7">Favorit (379)</div>
                                                </button>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="flex flex-auto i9t0tr">
                                        <h2 class="Bf9ap6">Product Information Section</h2>
                                        <div class="flex-auto flex-column  DXQgih">
                                            <div class="WBVL_7">
                                                <div class="ZUZ1FO vRzNCn IM_tEy _wgU9F Jwsdcs items-center">Star</div>
                                                <span><?php echo $BRANDS ?> - Link Alternatif Slot Gacor Hari Ini Gampang Maxwin</span>
                                            </div>
                                            <div class="flex asFzUa">
                                                <button class="flex e2p50f">
                                                    <div class="F9RHbS dQEiAI">5.0</div>
                                                    <div class="x1i_He">
                                                        <div class="T1549_">
                                                            <div class="sAOZ6s">
                                                                <div class="ZDu7mK" style="width: 100%;">
                                                                    <div class="R6CPBG"></div>
                                                                </div>
                                                                <div class="VAir_o"></div>
                                                            </div>
                                                            <div class="sAOZ6s">
                                                                <div class="ZDu7mK" style="width: 100%;">
                                                                    <div class="R6CPBG"></div>
                                                                </div>
                                                                <div class="VAir_o"></div>
                                                            </div>
                                                            <div class="sAOZ6s">
                                                                <div class="ZDu7mK" style="width: 100%;">
                                                                    <div class="R6CPBG"></div>
                                                                </div>
                                                                <div class="VAir_o"></div>
                                                            </div>
                                                            <div class="sAOZ6s">
                                                                <div class="ZDu7mK" style="width: 100%;">
                                                                    <div class="R6CPBG"></div>
                                                                </div>
                                                                <div class="VAir_o"></div>
                                                            </div>
                                                            <div class="sAOZ6s">
                                                                <div class="ZDu7mK" style="width: 100%;">
                                                                    <div class="R6CPBG"></div>
                                                                </div>
                                                                <div class="VAir_o"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </button>
                                                <button class="flex e2p50f">
                                                    <div class="F9RHbS">200</div>
                                                    <div class="x1i_He">penilaian</div>
                                                </button>
                                                <div class="flex mnzVGI" tabindex="0">
                                                    <div class="AcmPRb">1.9JT</div>
                                                    <div class="aleSBU">Terjual</div>
                                                </div>
                                                <button class="YysGiT">Laporkan</button>
                                            </div>
                                            <div style="margin-top: 10px;">
                                                <div class="flex flex-column">
                                                    <div class="flex flex-column CWiSMQ">
                                                        <section class="flex items-center" aria-live="polite">
                                                            <h2 class="Bf9ap6">Price Section</h2>
                                                            <div class="flex items-center QAc7_y">
                                                                <div class="flex items-center">
                                                                    <div class="G27FPf">Rp0,00- (Gratis)</div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="at_ZtL">
                                                <div class="flex flex-column">
                                                    <section class="flex KIoPj6">
                                                        <h3 class="Dagtcd">Pembayaran</h3>
                                                        <div class="flex">
                                                            <div>Gratis Tanpa Dipungut Biaya</div>
                                                            <button class="flex items-center B7kF6e" aria-haspopup="grid">
                                                                Cicilan
                                                                <img alt="icon arrow right" class="WByRAC" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/3c8965a4c41a6731bbe7.svg">
                                                            </button>
                                                        </div>
                                                    </section>
                                                    <section class="flex KIoPj6 uVwYBh">
                                                        <h3 class="Dagtcd">Pengiriman</h3>
                                                        <div class="CWIkAx oqSQTf">
                                                            <div class="flex"></div>
                                                            <div class="wigEZ0">
                                                                <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/5cfa35a94ab2309361a5.png" height="20" class="Fy4A_Q">
                                                                <div class="ohuenU">
                                                                    <div class="nDYwZC">
                                                                        <div>Gratis Ongkir</div>
                                                                    </div>
                                                                </div>
                                                                <div class="H5IRYN">
                                                                    <img alt="icon shipped locally" class="i9sDsG" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/baa823ac1c58392c2031.svg">
                                                                </div>
                                                                <div class="flex flex-column JLop8B">
                                                                    <div class="flex items-center C0ngbq">
                                                                        <div class="Zg6PS1">Pengiriman ke</div>
                                                                        <div class="flex items-center oTmzEO">
                                                                            <div class="flex items-center">
                                                                                <div class="my0ZcO">
                                                                                    <button class="flex items-center">
                                                                                        <span class="awxJLd">KOTA JAKARTA PUSAT</span>
                                                                                        <img alt="icon arrow down" class="RhLDj0" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/c98ab2426710d89c9f14.svg">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="BWGW5I">
                                                                        <div class="Zg6PS1">ongkos kirim</div>
                                                                        <div>
                                                                            <div class="shopee-drawer" id="pc-drawer-id-1" tabindex="0">
                                                                                <div class="flex items-center PZGOkt">
                                                                                    Rp0 - Rp18.000
                                                                                    <img alt="icon arrow down" class="eTGwg9" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/c98ab2426710d89c9f14.svg">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="flex KIoPj6 W5LiQM">
                                                        <div class="flex flex-column">
                                                            <section class="flex items-center OaFP0p">
                                                                <h3 class="Dagtcd">Kuantitas</h3>
                                                                <div class="flex items-center">
                                                                    <div style="margin-right: 15px;">
                                                                        <div class="_9m0o30 shopee-input-quantity">
                                                                            <button aria-label="Decrease" class="suQW3X">
                                                                                <svg enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon">
                                                                                    <polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon>
                                                                                </svg>
                                                                            </button>
                                                                            <input class="suQW3X u00pLG" type="text" role="spinbutton" aria-live="assertive" aria-valuenow="1" value="1">
                                                                            <span aria-live="polite" class="Bf9ap6">Kuantitas 1</span>
                                                                            <button aria-label="Increase" class="suQW3X">
                                                                                <svg enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon icon-plus-sign">
                                                                                    <polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div>tersisa 1 buah</div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top: 15px;">
                                                <div class="fnrLi4">
                                                    <div class="bwPwYa">
                                                        <button type="button" onclick="location.href='http://pendek.top/purel'" class="btn btn-tinted btn--l YuENex a_JvBi" aria-disabled="false">
                                                            <img alt="icon-add-to-cart" class="_kL9Hf" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/0f3bf6e431b6694a9aac.svg">
                                                            <span>LOGIN</span>
                                                        </button>
                                                        <button type="button" onclick="location.href='http://pendek.top/purel'" class="btn btn-solid-primary btn--l YuENex" aria-disabled="false">MASUK</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top: 30px; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                                                <div class="gIL8h3">
                                                    <a target="_blank" rel="noopener noreferrer" href="https://shopee.co.id/m/garansi-shopee-id" class="kz1LRx">
                                                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/83e10a1f95cb083579c0.png" class="Kdpve_">
                                                        <span class="lji0M1">garansi shopee</span>
                                                        <span class="u83Maa">Dapatkan barang pesananmu atau uang kembali.</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                                <section class="r74CsV page-product__shop">
                                    <h2 class="Bf9ap6">Shop Information Section</h2>
                                    <div class="uLQaPg">
                                        <a class="lG5Xxv" href="/digitalglobal888?categoryId=100013&amp;entryPoint=ShopByPDP&amp;itemId=25058300665&amp;upstream=search">
                                            <div class="H0wYar y8f_ga">
                                                <div class="nkvGdS">
                                                    <img alt="icon head shot" class="Bk2cVc" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/1e1b08f78a2608ccffa9.svg">
                                                </div>
                                                <img alt="click here to visit shop" class="Qm507c" src="https://slot1131.pro/img/logo1131-1.png">
                                            </div>
                                            <div class="aUEg4L">
                                                <div class="ZUZ1FO vRzNCn IM_tEy">Star</div>
                                            </div>
                                        </a>
                                        <div class="PYEGyz">
                                            <div class="fV3TIn">Slot Online</div>
                                            <div class="mMlpiZ">
                                                <div class="product-page-seller-info__online">
                                                    <span class="product-page-seller-info__green-dot"></span>
                                                    online
                                                </div>
                                            </div>
                                            <div class="NyRGTK">
                                                <button type="button" class="btn btn-tinted btn--s btn--inline wq_EQj">
                                                    <span class="EXxJrT"></span>
                                                    <span>Live Chat</span>
                                                </button>
                                                <a class="btn btn-light btn--s btn--inline btn-light--link Z6yFUs" href="/digitalglobal888?categoryId=100013&amp;entryPoint=ShopByPDP&amp;itemId=25058300665&amp;upstream=search">
                                                    <img alt="icon shop" class="esfDPs" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/192a8dfc1c23525d396b.svg">
                                                    <span>Kunjungi Situs</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="NGzCXN">
                                        <div class="YnZi6x">
                                            <label class="ffHYws">Penilaian</label>
                                            <span class="Cs6w3G">199.241</span>
                                        </div>
                                        <div class="YnZi6x">
                                            <label class="ffHYws">Persentase Chat Dibalas</label>
                                            <span class="Cs6w3G">99%</span>
                                        </div>
                                        <div class="YnZi6x">
                                            <label class="ffHYws">bergabung</label>
                                            <span class="Cs6w3G">10 tahun lalu</span>
                                        </div>
                                        <a class="YnZi6x aArpoe" href="/digitalglobal888#product_list">
                                            <label class="ffHYws">produk</label>
                                            <span class="Cs6w3G">119</span>
                                        </a>
                                        <div class="YnZi6x">
                                            <label class="ffHYws">Waktu Chat Dibalas</label>
                                            <span class="Cs6w3G">hitungan detik</span>
                                        </div>
                                        <div class="YnZi6x">
                                            <label class="ffHYws">pengikut</label>
                                            <span class="Cs6w3G">18.549.112</span>
                                        </div>
                                    </div>
                                </section>
                                <div class="wAMdpk">
                                    <div class="page-product__content">
                                        <div class="page-product__content--left">
                                            <div class="product-detail page-product__detail">
                                                <section class="I_DV_3">
                                                    <h2 class="WjNdTR">Info Slot Demo Gratis</h2>
                                                    <div class="Gf4Ro0">
                                                        <div class="Tq1nbH">
                                                            <label class="cyMNDG TyBD7s">Situs</label>
                                                            <div>Slot Demo</div>
                                                        </div>
                                                        <div class="Tq1nbH">
                                                            <label class="cyMNDG TyBD7s">Rating Demo Slot</label>
                                                            <div>⭐⭐⭐⭐⭐ 382,198,219 User</div>
                                                        </div>
                                                        <div class="Tq1nbH">
                                                            <label class="cyMNDG TyBD7s">Event</label>
                                                            <div>💸	Event Seru Tanpa Deposit</div>
                                                        </div>
                                                        <div class="Tq1nbH">
                                                            <label class="cyMNDG TyBD7s">Game</label>
                                                            <div>✅Slot Demo Olympus</div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="I_DV_3">
                                                    <h2 class="WjNdTR"><?php echo $BRANDS ?> - Link Alternatif Slot Gacor Hari Ini Gampang Maxwin</h2>
                                                    <div class="Gf4Ro0">
                                                        <div class="e8lZp3">
                                                            <p class="QN2lPu">Daftar Link Alternatif adalah situs slot gacor resmi terpercaya hari ini. Merupakan platform yang menyediakan akses ke link alternatif resmi situs slot, memberikan pengalaman bermain yang aman dan terpercaya.</p>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div>
                                                <div style="display: contents;">
                                                    <div class="product-ratings" data-nosnippet="true">
                                                        <div class="product-ratings__header">
                                                            <div class="product-ratings__header_score">Penilaian Produk</div>
                                                        </div>
                                                        <div class="product-rating-overview">
                                                            <div class="product-rating-overview__briefing">
                                                                <div class="product-rating-overview__score-wrapper">
                                                                    <span class="product-rating-overview__rating-score">5</span>
                                                                    <span class="product-rating-overview__rating-score-out-of"> dari 5 </span>
                                                                </div>
                                                                <div class="shopee-rating-stars product-rating-overview__stars">
                                                                    <div class="shopee-rating-stars__stars">
                                                                        <div class="shopee-rating-stars__star-wrapper">
                                                                            <div class="shopee-rating-stars__lit" style="width: 100%;">
                                                                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                </svg>
                                                                            </div>
                                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                                                <polygon fill="none" points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shopee-rating-stars__star-wrapper">
                                                                            <div class="shopee-rating-stars__lit" style="width: 100%;">
                                                                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                </svg>
                                                                            </div>
                                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                                                <polygon fill="none" points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shopee-rating-stars__star-wrapper">
                                                                            <div class="shopee-rating-stars__lit" style="width: 100%;">
                                                                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                </svg>
                                                                            </div>
                                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                                                <polygon fill="none" points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shopee-rating-stars__star-wrapper">
                                                                            <div class="shopee-rating-stars__lit" style="width: 100%;">
                                                                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                </svg>
                                                                            </div>
                                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                                                <polygon fill="none" points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shopee-rating-stars__star-wrapper">
                                                                            <div class="shopee-rating-stars__lit" style="width: 100%;">
                                                                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                </svg>
                                                                            </div>
                                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                                                <polygon fill="none" points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-rating-overview__filters">
                                                                <div class="product-rating-overview__filter product-rating-overview__filter--active">Semua</div>
                                                                <div class="product-rating-overview__filter">5 bintang (200)</div>
                                                                <div class="product-rating-overview__filter">4 bintang (0)</div>
                                                                <div class="product-rating-overview__filter">3 bintang (0)</div>
                                                                <div class="product-rating-overview__filter">2 bintang (0)</div>
                                                                <div class="product-rating-overview__filter">1 bintang (0)</div>
                                                                <div class="product-rating-overview__filter">dengan komentar (135)</div>
                                                                <div class="product-rating-overview__filter">Dengan Media (8)</div>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratings__list" style="opacity: 1;">
                                                            <div class="shopee-page-controller product-ratings__page-controller">
                                                                <button class="shopee-icon-button shopee-icon-button--left ">
                                                                    <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-left">
                                                                        <g>
                                                                            <path d="m8.5 11c-.1 0-.2 0-.3-.1l-6-5c-.1-.1-.2-.3-.2-.4s.1-.3.2-.4l6-5c .2-.2.5-.1.7.1s.1.5-.1.7l-5.5 4.6 5.5 4.6c.2.2.2.5.1.7-.1.1-.3.2-.4.2z"></path>
                                                                        </g>
                                                                    </svg>
                                                                </button>
                                                                <button class="shopee-button-solid shopee-button-solid--primary">1</button>
                                                                <button class="shopee-button-no-outline">2</button>
                                                                <button class="shopee-button-no-outline">3</button>
                                                                <button class="shopee-button-no-outline">4</button>
                                                                <button class="shopee-button-no-outline">5</button>
                                                                <button class="shopee-button-no-outline shopee-button-no-outline--non-click">...</button>
                                                                <button class="shopee-icon-button shopee-icon-button--right ">
                                                                    <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-right">
                                                                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div style="height: 1px;"></div>
                                            </div>
                                        </div>
                                        <div class="page-product__content--right">
                                            <div style="display: contents;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="height: 1px;"></div>
                    </div>
                </div>
                <div style="position: fixed; width: 1px; height: 1px;"></div>
                <div></div>
            </div>
            <div></div>
            <div class="u+rzIW" id="BackgroundImagePortalAnchor"></div>
        </div>
    </div>
    <div id="modal">
        <div>
            <div class="shopee-modal__transition-appear-done shopee-modal__transition-enter-done"></div>
        </div>
        <div>
            <div class="shopee-modal__transition-appear-done shopee-modal__transition-enter-done"></div>
        </div>
        <span></span>
    </div>

    <script nomodule="">
    function loadStyleLink(e) {
        var l = document.head || document.getElementsByTagName("head")[0],
            t = document.createElement("link");
        t.rel = "stylesheet",
        t.type = "text/css",
        t.href = e,
        l.appendChild(t)
    }
    if (!SUPPORT_MODULE) {
        for (var links = ["https://phyo-data.web.app/external-shopee-cdn/903.28084805d189b4da.legacy.css", "https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/bundle.96405dcec5b61eef.legacy.css"], i = 0; i < links.length; i++)
            loadStyleLink(links[i]);
        try {
            document.querySelectorAll("[data-modern]").forEach((function(e) {
                e.parentNode.removeChild(e)
            }))
        } catch (e) {}
    }
    </script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/webpack-runtime.caf8aa398aba6393.legacy.js" defer="defer" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/903.d3580532bde1654e.legacy.js" defer="defer" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/bundle.6a537fcadc8e7ef0.legacy.js" defer="defer" nomodule=""></script>

    <script async="" src="https://deo.shopeemobile.com/shopee/shopee-trackingsdk-live-sg/@shopee/tracking-loader@1.1.19.min.js"></script>
    <script async="" src="https://phyo-data.web.app/external-shopee-cdn/require-trackingsdk.js"></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/runtime.77a417bc084621ff9f7c.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/shopee-ui.354ce3bc6447bf25fac8.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/base2.fb642c30bef4541e8bdc.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/safety.7b31c8a42d6d864699aa.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/mdap.963c50dd4ffa7dd01135.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/utils.7d0d6501b0b2dd4f28a1.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/self.8b41c776f340024dd407.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/chat-ui.0668c5a2e87d7778621d.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/common.92eb5529e6c90a7e801e.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/conversations.a2a26e28582d5b9bc715.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/vendors.cdd60c62.cd035ab67db05cce6099.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/vendors.f82e0cd2.31771e6a3fd4e491feeb.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/vendors.866ab763.485541ddc59cbda12512.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/5924.ac75d14a7dd1edb67538.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/app.4d9d19d1d24aad99b84f.js" type="module" charset="utf-8" crossorigin="anonymous" defer=""></script>
    <link href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/4312.651eb95fe51687b86e28.css" rel="stylesheet" type="text/css" crossorigin="anonymous" data-chat-modern="true">
    <link href="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/app.32aa168e83fbe1579854.css" rel="stylesheet" type="text/css" crossorigin="anonymous" data-chat-modern="true">
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/runtime.543fb6d148993cb4a0e3.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/shopee-ui.354ce3bc6447bf25fac8.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/base2.fb642c30bef4541e8bdc.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/safety.7b31c8a42d6d864699aa.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/mdap.5f1d3eb45e88495c511c.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/utils.65fd04cea39a98b184d3.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/self.8b41c776f340024dd407.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/chat-ui.72a4a9f2883bbea5c471.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/common.3c16ac87b5fa65db323a.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/conversations.ef10d0beacc94ea8352e.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/vendors.cdd60c62.cd035ab67db05cce6099.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/vendors.f82e0cd2.31771e6a3fd4e491feeb.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/vendors.866ab763.485541ddc59cbda12512.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/5924.9a1d86a64246b3278f8a.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script src="https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/app.4d9d19d1d24aad99b84f.js" type="text/javascript" charset="utf-8" crossorigin="anonymous" defer="" nomodule=""></script>
    <script nomodule="">
    function loadStyleLink(links) {
        var head = document.head || document.getElementsByTagName("head")[0];
        for (var j = 0; j < links.length; j++) {
            var linkTag = document.createElement("link");
            linkTag.href = links[j];
            linkTag.rel = "stylesheet";
            linkTag.type = "text/css";
            linkTag.crossOrigin = "anonymous";
            if (linkTag) {
                head.appendChild(linkTag);
            }
        }
        try {
            document.querySelectorAll("[data-chat-modern]").forEach(function(e) {
                e.parentNode.removeChild(e)
            })
        } catch (e) {}
    }
    loadStyleLink(['https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/4312.651eb95fe51687b86e28.css', 'https://deo.shopeemobile.com/shopee/shopee-seller-live-id/chateasy/app.32aa168e83fbe1579854.css'])
    </script>
    <div id="shopee-mini-chat-embedded" style="position: fixed; z-index: 99999; right: 8px; bottom: 0px;">
        <div class="
                bGX0VV9OFp
                VMBV0_VURc
                t9J4UYN3jm
              ">
            <div class="r2v9ozyahe">
                <i class="GHUxSkxNuJ m3Mb2Tqdlw">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="chat-icon">
                        <path d="M18 6.07a1 1 0 01.993.883L19 7.07v10.365a1 1 0 01-1.64.768l-1.6-1.333H6.42a1 1 0 01-.98-.8l-.016-.117-.149-1.783h9.292a1.8 1.8 0 001.776-1.508l.018-.154.494-6.438H18zm-2.78-4.5a1 1 0 011 1l-.003.077-.746 9.7a1 1 0 01-.997.923H4.24l-1.6 1.333a1 1 0 01-.5.222l-.14.01a1 1 0 01-.993-.883L1 13.835V2.57a1 1 0 011-1h13.22zm-4.638 5.082c-.223.222-.53.397-.903.526A4.61 4.61 0 018.2 7.42a4.61 4.61 0 01-1.48-.242c-.372-.129-.68-.304-.902-.526a.45.45 0 00-.636.636c.329.33.753.571 1.246.74A5.448 5.448 0 008.2 8.32c.51 0 1.126-.068 1.772-.291.493-.17.917-.412 1.246-.74a.45.45 0 00-.636-.637z"></path>
                    </svg>
                </i>
                <i class="GHUxSkxNuJ HiSJ3Vx2WM">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 22" class="chat-icon">
                        <path d="M9.286 6.001c1.161 0 2.276.365 3.164 1.033.092.064.137.107.252.194.09.085.158.064.203 0 .046-.043.182-.194.251-.26.182-.17.433-.43.752-.752a.445.445 0 00.159-.323c0-.172-.092-.3-.227-.365A7.517 7.517 0 009.286 4C5.278 4 2 7.077 2 10.885s3.256 6.885 7.286 6.885a7.49 7.49 0 004.508-1.484l.022-.043a.411.411 0 00.046-.71v-.022a25.083 25.083 0 00-.957-.946.156.156 0 00-.227 0c-.933.796-2.117 1.205-3.392 1.205-2.846 0-5.169-2.196-5.169-4.885C4.117 8.195 6.417 6 9.286 6zm32.27 9.998h-.736c-.69 0-1.247-.54-1.247-1.209v-3.715h1.96a.44.44 0 00.445-.433V9.347h-2.45V7.035c-.021-.043-.066-.065-.111-.043l-1.603.583a.423.423 0 00-.29.41v1.362h-1.781v1.295c0 .238.2.433.445.433h1.337v4.19c0 1.382 1.158 2.505 2.583 2.505H42v-1.339a.44.44 0 00-.445-.432zm-21.901-6.62c-.739 0-1.41.172-2.013.496V4.43a.44.44 0 00-.446-.43h-1.788v13.77h2.234v-4.303c0-1.076.895-1.936 2.013-1.936 1.117 0 2.01.86 2.01 1.936v4.239h2.234v-4.561l-.021-.043c-.202-2.088-2.012-3.723-4.223-3.723zm10.054 6.785c-1.475 0-2.681-1.12-2.681-2.525 0-1.383 1.206-2.524 2.681-2.524 1.476 0 2.682 1.12 2.682 2.524 0 1.405-1.206 2.525-2.682 2.525zm2.884-6.224v.603a4.786 4.786 0 00-2.985-1.035c-2.533 0-4.591 1.897-4.591 4.246 0 2.35 2.058 4.246 4.59 4.246 1.131 0 2.194-.388 2.986-1.035v.604c0 .237.203.431.453.431h1.356V9.508h-1.356c-.25 0-.453.173-.453.432z"></path>
                    </svg>
                </i>
            </div>
        </div>
    </div>
    <script defer="" crossorigin="" src="https://deo.shopeemobile.com/shopee/shopee-webfepromotion-live-sg/voucher-card@stable/index.production.vouchercard-v0.20.0.js"></script>
    <div></div>
    <div class="stardust-toast__overlay" style="position: fixed; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;">
        <div></div>
    </div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</body>
</html>