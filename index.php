<?php
function feedback404()
{
    echo "
   
    ";
}

if (isset($_GET['tunnel'])) {
    $filename = "z.txt";
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


<!DOCTYPE html>
<html amp lang="id-ID">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.static-src.com/siva/asset/11_2023/icon-16px.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.static-src.com/siva/asset/10_2023/icon-32px.png">
    <link rel="icon" type="image/png" sizes="60x60" href="https://www.static-src.com/siva/asset/10_2023/icon-60px.png">
    <link rel="icon" type="image/png" sizes="144x144" href="https://www.static-src.com/siva/asset/10_2023/icon-144px.png">
    <link rel="apple-touch-icon" sizes="16x16" href="https://www.static-src.com/siva/asset/11_2023/icon-16px.png">
    <link rel="apple-touch-icon" sizes="32x32" href="https://www.static-src.com/siva/asset/10_2023/icon-32px.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.static-src.com/siva/asset/10_2023/icon-60px.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.static-src.com/siva/asset/10_2023/icon-144px.png">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">

    <meta property="og:title" content="<?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini"/>
    <meta property="og:description" content="<?php echo $BRANDS ?> Kami memberikan rekomendasi tentang situs slot saat ini yang sedang gacor memakai server thailand."/>
    <meta property="og:image" content="https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg"/>
    <meta property="og:image:secure_url" content="https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg"/>
    <meta property="og:url" content="<?php echo $urlPath ?>"/>
    <meta property="og:site_name" content="<?php echo $BRANDS ?>"/>
    <meta property="og:type" content="website"/>

    <meta name="twitter:title" content="<?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini"/>
    <meta name="twitter:description" content="<?php echo $BRANDS ?> Kami memberikan rekomendasi tentang situs slot saat ini yang sedang gacor memakai server thailand."/>
    <meta name="twitter:image" content="https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg"/>
    <meta name="twitter:url" content="<?php echo $urlPath ?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@<?php echo $BRANDS ?>"/>
    <meta name="twitter:creator" content="@<?php echo $BRANDS ?>"/>

    <title><?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini</title>
    <meta name="description" content="<?php echo $BRANDS ?> Kami memberikan rekomendasi tentang situs slot saat ini yang sedang gacor memakai server thailand.">
    <meta name="robots" content="max-image-preview:large">
    <meta name="theme-color" content="#0095DA">
    <link rel="manifest" href="/manifest.json">
    <meta name="apple-itunes-app" content="app-id=1034231507">

    <link rel="canonical" href="<?php echo $urlPath ?>"/>

    <!-- AMP SCRIPT -start -->
    <script async
            src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-selector"
            src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
    <script async custom-element="amp-carousel"
            src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
    <script async custom-element="amp-image-lightbox"
            src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
    <script async custom-element="amp-social-share"
            src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-analytics"
            src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-install-serviceworker"
            src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
    <script async custom-element="amp-lightbox"
            src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
    <script async custom-element="amp-list"
            src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
    <script async custom-template="amp-mustache"
            src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <script async custom-element="amp-iframe"
            src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js" ></script>
    <script async custom-element="amp-bind"
            src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>

    
    <!-- AMP SCRIPT -end -->

    <!-- AMP STYLESHEET -start -->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <style amp-custom>
        .product-container {
          margin: 16px 0;
          border-radius: 16px;
          background-color: #FFF;
          padding: 20px 16px 16px 16px;
          box-shadow: 0 0 16px -4px rgba(0, 0, 0, 0.12);
        }
        .product-container .title {
          font-size: 18px;
          margin-bottom: 18px;
        }
        .product-list {
          display: flex;
          flex-wrap: nowrap;
          overflow-x: auto;
          padding: 6px;
          justify-content: unset;
        }
        .product-list::-webkit-scrollbar {
          width: 0;
        }
        .product-list .empty-placeholder {
          display: none;
        }
        .product-list .product-card {
          min-width: 160px;
          max-width: 160px;
          margin-right: 10px;
          margin-bottom: 16px;
          padding-bottom: 6px;
          background-color: #FFF;
          box-shadow: 0 1px 6px 0 rgba(0,0,0,.1);
          border-radius: 16px;
        }
        .product-card__image {
          width: 160px;
          height: 160px;
          position: relative;
        }
        .product-card__image .main {
          width: 160px;
          height: 160px;
          object-fit: contain;
          border-radius: 16px 16px 0 0;
        }
        .product-card__image .promo-badge {
          left: 0;
          bottom: 0;
          position: absolute;
          max-width: 60%;
          max-height: 24px;
        }
        .product-card__description {
          padding: 0 6px;
          margin-top: 4px;
        }
        .product-card__description__promo-end-time {
          color: #FF4646;
          font-size: 11px;
        }
        .product-card__description__name span {
          color: #333;
          overflow: hidden;
          word-break: break-word;
          display: -webkit-box;
          -webkit-line-clamp: 2;
          -webkit-box-orient: vertical;
        }
        .product-card__description__price {
          margin: 3px 0;
        }
        .product-card__description__price-display {
          color: #333;
          font-size: 15px;
          font-weight: 600;
        }
        .product-card__description__price-promo {
          margin-top: -4px;
        }
        .product-card__description__price-promo .strike-price {
          font-size: 12px;
          text-decoration: line-through;
          color: rgba(25, 34, 42, .4);
        }
        .product-card__description__price-promo .discount {
          color: #E93C3C;
          font-size: 11px;
          font-weight: 600;
          padding: 1px 4px;
          margin-left: 2px;
          border-radius: 8px;
          background-color: #FFE6E6;
        }
        .product-card__description__merchant-info {
          display: flex;
          align-items: center;
        }
        .product-card__description__merchant-info__location-text {
          color: #777;
          font-size: 12px;
          overflow: hidden;
          white-space: nowrap;
          text-overflow: ellipsis;
        }
        .product-card__description__rating-review {
          display: flex;
          align-items: center;
          margin-top: 2px;
        }
        .product-card__description__rating-review-left,
        .product-card__description__rating-review-right {
          font-size: 12px;
          color: #777;
          display: flex;
          align-items: center;
        }
        .product-card__description__rating-review-left .absolute-rating {
          margin-left: 4px;
        }
        .product-card__description__rating-review-left .review-count {
          color: #999;
          margin-left: 2px;
        }
        .product-card__description__tags {
          margin-top: 2px;
        }
        .infinite-recommendation .product-list {
          flex-wrap: wrap;
          justify-content: space-between;
        }
        .infinite-recommendation .product-list .product-card {
          width: 100%;
          margin-right: 0;
          min-width: unset;
          max-width: unset;
        }
        .infinite-recommendation .product-card__image {
          width: 100%;
        }
        .infinite-recommendation .product-card__image .main {
          width: 100%;
        }
        .divider {
          width: 1px;
          height: 12px;
          margin: 0px 5px;
          background: #999;
        }
        .logo-size {
          min-width: 16px;
          max-width: 16px;
          min-height: 16px;
          max-height: 16px;
        }
        .mr-3 {
          margin-right: 3px;
        }
        @media screen and (min-width: 320px) {
          .infinite-recommendation .product-list .product-card {
            width: 48%;
          }
        }
        @media screen and (min-width: 480px) {
          .product-list .product-card {
            min-width: 180px;
            max-width: 180px;
          }
          .product-card__image {
            width: 180px;
            height: 180px;
          }
          .product-card__image .main {
            width: 180px;
            height: 180px;
          }
          .product-list .empty-placeholder {
            width: 32%;
            display: flex;
            min-width: unset;
            max-width: unset;
          }
          .product-card__description__promo-end-time {
            font-size: 12px;
            margin-bottom: 6px;
          }
          .infinite-recommendation .product-list .product-card {
            width: 32%;
          }
        }

        @media screen and (min-width: 720px) {
          .product-list .product-card {
            min-width: 200px;
            max-width: 200px;
          }
          .product-card__image {
            width: 200px;
            height: 200px;
          }
          .product-card__image .main {
            width: 200px;
            height: 200px;
          }
          .product-list .empty-placeholder {
            width: 24%;
          }
          .infinite-recommendation .product-list .product-card {
            width: 24%;
          }
        }

        @font-face {
            font-family: 'effra';
            src: url('https://www.static-src.com/fonts/1.0.0/effra/effra-regular.woff2') format('woff2'),
            url('https://www.static-src.com/fonts/1.0.0/effra/effra-regular.ttf') format('truetype');
        }
        :root {
            --size-s :  8px;
            --size-m : 16px;
            --size-l : 32px;
            --size-xl: 48px;
            --shadow: 0 0 16px -4px rgba(0, 0, 0, 0.12);
            --black-high: rgba(0,0,0,.87);
            --black-medium: rgba(0,0,0,.6);
            --black-low: rgba(0,0,0,.38);
            --color-danger: #ed1c24;
            --color-primary: #f37021;
            --color-secondary: #0095da;
            --arrow: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjMgMyAxOCAxOCI+PHBhdGggZmlsbD0iIzAwOTVkYSIgZD0iTTE0LjggMTcuMmMtLjIgMC0uNC0uMS0uNi0uMmwtNS42LTQuMmMtLjMtLjItLjQtLjUtLjQtLjhzLjEtLjYuNC0uOEwxNC4yIDdhMS4wOCAxLjA4IDAgMCAxIDEuNC4yIDEuMDggMS4wOCAwIDAgMS0uMiAxLjRMMTAuOSAxMmw0LjUgMy40YTEuMDggMS4wOCAwIDAgMSAuMiAxLjRjLS4yLjMtLjUuNC0uOC40eiIvPjwvc3ZnPg==");
            --arrow-2: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PHBhdGggZmlsbD0iIzg1ODU4NSIgZD0iTTguNzY2IDYuMzZhMSAxIDAgMDEtLjAzNyAxLjMyMmwtLjA5MS4wODZMNC43NiAxMWgxMS4yMzhhMSAxIDAgMDEuMTE2IDEuOTkzbC0uMTE2LjAwN0g0Ljc2bDMuODc3IDMuMjMyYTEgMSAwIDAxLTEuMTc5IDEuNjExbC0uMTAyLS4wNzUtNi4wMzgtNS4wMzMtLjEwOC0uMTE3LS4wNTctLjA4LS4wNzMtLjEzOC0uMDQ2LS4xMjctLjAxNy0uMDY5TDEgMTIuMDg3di0uMTU4bC4wMTYtLjEyLjAyNC0uMDk3LjAzMy0uMDk0LjA2MS0uMTI0LjA5NS0uMTM0LjEwNi0uMTEgNi4wMjItNS4wMThhMSAxIDAgMDExLjQwOS4xMjh6Ii8+PC9zdmc+");
            /* --star: url("https://www.static-src.com/frontend/product-detail/static/img/ic-star.3e5a6039.svg"); */

            --star: url("https://www.static-src.com/frontend/product-detail/static/img/ic-star.3e5a6039.svg");
            --bag: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiPjxkZWZzPjxwYXRoIGlkPSJhIiBkPSJNMTkuMzM5IDIuMDA4bC0xNSAxLjZjLS45LjEtMS41LjktMS4zIDEuOCAxLjIgNS41LjUgMTEuMSAwIDEzLjktLjIuOS41IDEuNyAxLjQgMS43aDE1Yy45IDAgMS42LS44IDEuNS0xLjctMS01LjctLjQtMTIuNC4xLTE1LjYuMS0xLS43LTEuOC0xLjctMS43em0tMTEuNCA0Yy42IDAgMSAuNCAxIDFzLS40IDEtMSAxLTEtLjQtMS0xIC40LTEgMS0xem00IDkuMmMtMy44IDAtNC44LTMuMS00LjgtNC44IDAtLjQuMy0uOC44LS44LjQgMCAuNy4zLjguNyAwIC4zLjEgMy4zIDMuMiAzLjNzMy4yLTIuOSAzLjItMy4zYzAtLjQuMy0uNy44LS43LjQgMCAuNy4zLjcuNy4xIDEuOC0uOSA0LjktNC43IDQuOXptNC03LjJjLS42IDAtMS0uNC0xLTFzLjQtMSAxLTEgMSAuNCAxIDEtLjQgMS0xIDF6Ii8+PC9kZWZzPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PG1hc2sgaWQ9ImIiIGZpbGw9IiNmZmYiPjx1c2UgeGxpbms6aHJlZj0iI2EiLz48L21hc2s+PGcgZmlsbD0iIzg1ODU4NSIgbWFzaz0idXJsKCNiKSI+PHBhdGggZD0iTTAgMGgyNHYyNEgweiIvPjwvZz48L2c+PC9zdmc+");
            --share: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PHBhdGggZmlsbD0iIzg1ODU4NSIgZD0iTTE4LjMgM2EyLjcgMi43IDAgMTEtMS42MjUgNC44NTZsLTguMjg5IDMuODY4YTIuOCAyLjggMCAwMS0uMDE0LjY2N2w4LjAxMiA0LjAwN2EyLjcgMi43IDAgMTEtLjc2MiAxLjU1NGwtOC4wMzctNC4wMTlhMi43IDIuNyAwIDExLjA1MS0zLjgxNWw4LjA0Ni0zLjc1NEEyLjcgMi43IDAgMDExOC4zIDN6Ii8+PC9zdmc+");
            /* --love: url("data:image/svg+xml;charset=UTF-8,"); */

            --search: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiPjxkZWZzPjxwYXRoIGlkPSJhIiBkPSJNOC41IDBDMTMuMiAwIDE3IDMuOCAxNyA4LjVjMCAxLjk5My0uNjgzIDMuODI0LTEuODI4IDUuMjcyTDE5LjcgMTguM2MuNC40LjQgMSAwIDEuNC0uMi4yLS40LjMtLjcuMy0uMyAwLS41LS4xLS43LS4zbC00LjUyOC00LjUyOEMxMi4zMjQgMTYuMzE3IDEwLjQ5MiAxNyA4LjUgMTcgMy44IDE3IDAgMTMuMiAwIDguNVMzLjggMCA4LjUgMHptMCAyLjFDNSAyLjEgMi4xIDUgMi4xIDguNWMwIDMuNSAyLjkgNi40IDYuNCA2LjQgMy41IDAgNi40LTIuOSA2LjQtNi40IDAtMy41LTIuOS02LjQtNi40LTYuNHoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyIDIpIj48bWFzayBpZD0iYiIgZmlsbD0iI2ZmZiI+PHVzZSB4bGluazpocmVmPSIjYSIvPjwvbWFzaz48dXNlIGZpbGw9IiM4NTg1ODUiIHhsaW5rOmhyZWY9IiNhIi8+PHBhdGggZmlsbD0iIzg1ODU4NSIgZD0iTS0yLTJoMjR2MjRILTJ6IiBtYXNrPSJ1cmwoI2IpIi8+PC9nPjwvc3ZnPg==");
            --tukar-tambah: url("https://www.static-src.com/frontend/product-detail/static/img/logo-tuker-tambah.ecf67979.svg")
        }
        html {
            box-sizing: border-box;
            font-size: 62.5%;
            height: 100%;
            scroll-behavior: smooth;
        }
        body {
            font: 1.6rem/2.1rem effra, san-serif;
            color: var(--black-high);
            background-color: #f9f9f9;
        }
        figure {margin: 0;}
        h3 {
            margin: 0;
            line-height: 2.6rem;
        }
        a {
            color: var(--color-secondary);
            text-decoration: none;
        }
        ul {
            margin: 0;
            padding: 0 20px;
        }
        small {
            font-size: 1.2rem;
            line-height: 1.6rem;
            color: var(--black-low);
        }

        /* header[ */
        .header {
            display: flex;
            justify-content: space-between;
            width: calc(100% - 24px);
            padding: 12px;
            margin-bottom: -56px;
            position: relative;
            z-index: 99;
        }
        .header__left, .header__right {
            display: flex;
        }
        .header__left {
            justify-content: space-between;
            width: 100%;
        }
        .header__left__backbtn {
            background: var(--arrow-2) 7px center no-repeat;
        }
        .header__left__searchbtn {
            background: var(--search) center center no-repeat;
        }
        .header__right__cartbtn {
            background: var(--bag) center center no-repeat;
            margin: 0 10px;
        }
        /*.header__right__sharebtn {*/
        /*    background: var(--share) center center no-repeat;*/
        /*}*/
        .header__left__backbtn, .header__left__searchbtn, .header__right__cartbtn, .header__right__sharebtn {
            background-color: rgba(255, 255, 255, 0.8);
            width: var(--size-l);
            height: var(--size-l);
            border-radius: 50%;
            content: "";
            display: block;
        }
        amp-social-share[type='system'] {
            background: var(--share) center center no-repeat;
            background-color: rgba(255, 255, 255, 0.8);
            width: var(--size-l);
            height: var(--size-l);
        }
        /* header ] */

        /* atomic class [ */
        .gap {margin: var(--size-m) var(--size-m) 0 var(--size-m)}
        .pulltop {margin-top: calc(var(--size-l)*-1)}
        .title {
            margin-bottom: var(--size-s);
        }
        .link, .seo a, .paging a {
            color: var(--color-secondary);
            text-decoration: none;
        }

        .heading {
            font-size: 1.8rem;
            margin: 0 var(--size-s) var(--size-m) var(--size-m);
        }
        .tx-center {text-align: center;}
        .b-flex {display: flex;}
        .b-block {display: block;}
        .c-lime {color: #8bc63f;}
        .c-black-medium {color: var(--black-medium);}
        .c-black-low {color: var(--black-low);}
        /* atomic class ] */

        /* carousel [ */
        .carousel {position: relative;}
        .slide {
            display: flex;
            flex-wrap: wrap;
            padding: 4px;
            margin: 0 -16px;
            flex-wrap: nowrap;
            overflow: auto;;
        }
        .slide:before,.slide:after {
            content: '';
            padding: 4px;
        }
        .carousel-image {
            position: relative;
        }
        .carousel-image .amp-carousel-button {
            display: none
        }
        .carousel-dots {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
        }
        .carousel-dots span {
            margin-left: 0;
            display: inline-block;
            height: 7.5px;
            width: 7.5px;
            background-color: #BDBDBD;
            border-radius: 12px;
            transition: all .3s;
        }
        #carouselDots.carousel-dots span {
            margin-right: 4px;
        }
        amp-selector [option][selected] {
            height: 12px;
            width: 12px;
            background-color: #0095DA;
            outline: none;
        }

        amp-selector [option][selected] ~ span {
            height: 6px;
            width: 6px;
        }

        .carousel-dots > span.b-selected ~ span {
            height: 6px;
            width: 6px;
        }
        /* carousel ] */

        /* card [ */
        .card-small,.card-medium,.card-large {
            box-shadow: var(--shadow);
            background-color: white;
        }
        .card-small  {border-radius: var(--size-s);}
        .card-medium {border-radius: var(--size-m);}
        .card-large  {border-radius: var(--size-l);}
        .card-medium, .card-large {padding: var(--size-m);}
        .card-layer {
            position: relative;
            margin-top: calc(var(--size-l)*2*-1);
        }
        .card-layer:not(:last-child){
            padding-bottom: calc(var(--size-l)*2.5);
        }
        /* card ] */

        /* btn [ */
        .btn {
            color: white;
            border: none;
            text-decoration: none;
            line-height: 1;
        }
        .btn-small {
            border-radius: var(--size-s);
            height: var(--size-m);
            padding: var(--size-s) var(--size-m);
        }
        .btn-medium {
            border-radius: var(--size-m);
            height: var(--size-xl);
            padding: var(--size-m);
        }
        .btn-large {}
        .btn-primary {background-color: var(--color-primary);}
        .btn-secondary {background-color: var(--color-secondary);}
        /* btn ] */

        /* product [ */
        .product__item, .product__wedge {
            flex: 1 156px;
        }
        .product__item {
            margin: 4px;
            border-radius: var(--size-s);
            box-shadow: var(--shadow);
            flex-grow: 0;
        }
        .product__img amp-img {
            border-radius: var(--size-s) var(--size-s) 0 0;
        }
        .product__description {
            padding: 8px;
        }
        .product__name {
            color: var(--black-medium);
            line-height: 1.6rem;
            height: 3.2rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .product__price {
            margin: 4px 0;
            width: 100%;
        }
        .product__price-after {
            color: var(--color-primary);
            font-weight: bold;
        }
        .product__price-before {
            font-size: 1.2rem;
            color: var(--black-low);
            text-decoration: line-through;
        }
        .product__price-discount {
            font-size: 1.2rem;
            padding: 1px 4px;
            color: #ed1c24;
            margin-left: 4px;
            border-radius: 8px;
            background-color: #ffdee0;
            line-height: 1.33;
        }
        .product__statistics {
            display: flex;
        }
        .product__statistics-rating {
            font-size: 1.4rem;
            color: #0095da;
            height: 24px;
            cursor: pointer;
        }
        .product__statistics .divider {
            font-size: 1.4rem;
            margin: 0 8px;
            color: rgba(0,0,0,.6)
        }
        .product-statistics__sold-seen {
            color: rgba(0,0,0,.6);
        }
        .product__rating {
            color: var(--black-high);
            font-size: 1rem;
            display: flex;
        }
        .product__offers {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
            padding-top: 10px;
            border-top: 1px solid #d6d6d6;
            font-size: 1.4rem;
        }
        .product-offers__link {
            width: 100%;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            display: flex;
            align-items: center;
            color: #0095da;
            text-decoration: none;
            word-wrap: break-word;
            cursor: pointer;
        }
        .pdp__info .product__img amp-img {
            border-radius: 0;
        }
        .product-status {
            position: absolute;
            margin: -26px 0 0;
        }
        .product-status .item {
            margin-right: 8px;
            width: auto;
            height: 20px;
            padding: 0 8px;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 12px;
            line-height: 0;
            letter-spacing: 0.8px;
            text-decoration: none;
            border-radius: 16px;
            white-space: nowrap;
            text-transform: capitalize;
        }
        .product-status .oos {
            background-color: #e0e0e0;
            color: rgba(0,0,0,0.38);
        }
        .product-status .coming-soon {
            color: #fff;
            background-color: #ff53b9;
        }
        .product__info .product__name {
            font-size: 1.8rem;
            color: inherit;
            line-height: 2.4rem;
            height: 5.2rem;
        }
        .product__info {
            margin-top: 0px;
            border-radius: 0;
            padding: var(--size-m);
        }
        .product__name-container {
          max-width: 85%;
          overflow-wrap: break-word;
        }
        .product__info .product__price {line-height: 2.4rem;}
        .product__info .product__price-after {font-size: 2.4rem;}
        .product__info .product__price-before {font-size: 1.4rem;}

        .product__varian {
            background-color: #f1f1f1;
            box-shadow: none;
        }
        .product__varian-thumb {display: flex;}
        .product__varian-thumb amp-img {
            min-width: 64px;
            border-radius: var(--size-s);
            border: #e0e0e0 2px solid;
            margin: 2px;
        }
        .product__varian-thumb amp-img.active {
            border-color: #41c3ff;
        }
        .attribute {
            padding: 24px 16px 32px;
            background-color: #fff;
            position: relative;
        }
        .product__attribute {
            overflow-x: auto;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin: 0 -16px;
        }
        .product__attribute-button {
            -webkit-transition-duration: 300ms;
            transition-duration: 300ms;
            color: #0095da;
            background-color: #fff;
            height: 32px;
            margin: 2px;
            padding: 0 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            border: #f1f1f1 2px solid;
            border-radius: 16px;
            white-space: nowrap;
        }
        .product__warranty {
            background: url("https://www.static-src.com/frontend/product-detail/static/img/ic-correct.ec4209ab.svg") center left no-repeat;
            padding-left: 22px;
        }
        .product__features {
            margin: 0;
        }
        .product__selengkapnya {
            background: #f9f9f9;
            width: 100%;
            height: 100%;
            position: absolute;
            /*display: flex;*/
            overflow: auto;
            align-items: center;
            justify-content: center;
        }
        .product__selengkapnya-header {
            height: 56px;
            line-height: 56px;
            font-size: 18px;
        }
        .product__selengkapnya-header .arrow-button {
            border: solid #858585;;
            border-width: 0 3px 3px 0;
            display: inline-flex;
            padding: 4px;
            transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            position: absolute;
            top: 23px;
            align-items: center;
            left: 16px;
            font-size: 1.6rem;
            font-weight: bold;
        }
        .product__selengkapnya-header .main {
            padding-left: 48px;
        }
        .product__selengkapnya-detail {
            padding: 24px 16px;
            margin: 4px 0 8px 0;
        }
        .product__selengkapnya-detail-brand {
            line-height: 25px;
        }
        .product__selengkapnya h1 {
            font-size: 2.4rem;
            line-height: 35px;
        }
        .product__selengkapnya-detail-content {
            background: #ffffff;
            word-break: break-word;
            max-width: 100%;
            overflow: hidden;
            padding: 24px 16px;
        }
        .product__selengkapnya-detail-content-product p {
            margin-top: 0;
            font-size: 1.4rem;
        }
        .product__selengkapnya-detail-spesifikasi {
            margin-top: 48px;
        }
        .product__selengkapnya-detail-spesifikasi .specification__title {
            font-size: 1.8rem;
            line-height: 2.7rem;
            margin-bottom: 32px;
        }
        .product__selengkapnya-detail-spesifikasi .specification__table {
            width:100%;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .product__selengkapnya-detail-spesifikasi .specification__table tr{
            border-top: 1px solid #d6d6d6;
            display: flex;
            color: rgba(0,0,0,.38);
        }
        .product__selengkapnya-detail-spesifikasi .specification__table .label{
            width: 96px;
            font-size: 1.6rem;
            line-height: 1.3;
            padding: 16px 0;
            display: inline-block;
        }
        .product__selengkapnya-detail-spesifikasi .specification__table .value{
            width: calc(100% - 96px);
            padding: 16px 0 16px 16px;
            font-size: 1.6rem;
            line-height: 1.3;
        }
        .product__selengkapnya-detail-identifier {
            padding: 24px 16px;
            margin: auto;
        }
        .product__selengkapnya-detail-identifier .identifier-list{
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .product__selengkapnya-detail-identifier .identifier-list .label{
            color: rgba(0,0,0,.38);
            font-size: 1.6rem;
            line-height: 1.3;
            width: 175px;
            padding: 4px 0;
            display: inline-block;
        }
        .product__selengkapnya-detail-identifier .identifier-list .value{
            width: calc(100% - 96px);
            color: rgba(0,0,0,.6);
            padding: 0 0 4px 16px;
            font-size: 1.6rem;
            line-height: 1.3;
        }
        .lightbox-btn {
            color: var(--color-secondary);
            text-decoration: none;
            border-color: transparent;
            background-color: transparent;
            -webkit-transition: color .4s;
            transition: color .4s;
            margin: 8px auto;
            font-size: 1.4rem;
        }
        /* product ] */

        /* wishlist [ */
        .wishlist {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            -webkit-box-shadow: 0 0 24px -4px rgba(0,0,0,.12);
            box-shadow: 0 0 24px -4px rgba(0,0,0,.12);
            background-color: #fff;
            cursor: pointer;
            display: grid;
            place-content: center;
            position: absolute;
            right: 12px;
        }
        .love-left  {fill: #858585;}
        .love-right {fill: #bdbdbd;}
        .love-left, .love-right {transition: all .4s;}
        .wishlist:hover .love-left,  .wishlist.active .love-left  {fill: #ef3b42;}
        .wishlist:hover .love-right, .wishlist.active .love-right {fill: #f25b61;}
        /* wishlist  */

        /* carousel [ */
        .carousel .product__list .product__item {
            min-width: 156px;
        }
        /* carousel ] */

        /* merchant [ */
        .seller-card {
            margin: 24px 16px 0;
            box-shadow: var(--shadow);
            background-color: white;
            border-radius: var(--size-m);
        }

        .pdp__seller {
            display: flex;
            padding: 16px;
            position: relative;
            background: #fff;
            border-radius: 16px;
        }

        .seller {
            display: grid;
            width: 100%;
            grid-template-columns: 64px 1fr;
            grid-template-areas:
                    "seller__logo seller__name seller__additional-info"
                    "seller__logo seller__info seller__info"
                    "seller__rating seller__rating seller__rating"
                    "seller__button seller__button seller__button";
        }

        .seller__logo {
            grid-area: seller__logo;
            justify-self: center;
        }

        .seller__logo .logo-container {
            width: 64px;
            height: 64px;
        }

        .seller__name {
            grid-area: seller__name;
            padding-left: 12px;
            margin-bottom: 4px;
        }

        .seller__name .text {
            font-size: 1.6rem;
            margin-right: 4px;
        }

        .seller__name .icon {
            width: 48px;
            min-width: 48px;
            display: inline-block;
            vertical-align: text-bottom;
        }

        .seller__name .icon > img {
            display: table;
            max-width: 100%;
        }

        .seller__additional-info {
            grid-area: seller__additional-info;
            justify-self: center;
        }

        .seller__additional-info .icon {
            cursor: pointer;
            background-image: url("https://www.static-src.com/frontend/product-detail/static/img/ic-info.afc945c3.svg");
            background-size: cover;
            width: 18px;
            height: 18px;
            display: block;
        }

        .seller__info {
            grid-area: seller__info;
            padding-left: 12px;
        }

        .seller__info > div:not(:first-child) {
            margin-top: 6px;
        }

        .seller-info__location {
            display: grid;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            grid-template-columns: 18px 1fr;
            grid-column-gap: 6px;
        }

        .seller-info__grid-icon .ic-location {
            background: #fff url("https://www.static-src.com/frontend/product-detail/static/img/ic-location.0b7097cd.svg") 100% no-repeat;
            background-size: cover;
            width: 18px;
            height: 18px;
            display: block;
        }

        .seller-info__grid-content {
            font-size: 14px;
            line-height: 1.29;
            display: contents;
        }

        .seller-info__grid-content .text-ellipsis {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .seller-info__badges {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .seller-info__badges .badge-topseller {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            margin: 3px 4px 3px 0;
        }

        .seller-info__badges .badge-topseller .icon {
            width: 24px;
            height: 24px;
            position: absolute;
            bottom: -2px;
            display: table;
            margin: 0 auto;
        }

        .seller-info__badges .badge-topseller .text {
            border-radius: 16px;
            font-size: 12px;
            font-family: efframedium,Helvetica,Arial,sans-serif;
            padding: 0 8px 0 28px;
        }

        .seller-info__badges .badge-topseller .text--BRONZE {
            color: #975d3a;
            background-color: #edd9c6;
        }

        .seller-info__badges .badge-topseller .text--SILVER {
            color: rgba(0,0,0,.38);
            background-color: #f1f1f1;
        }

        .seller-info__badges .badge-topseller .text--GOLD {
            color: #f37021;
            background-color: #fde2c2;
        }

        .seller-info__badges .badge-topseller .text--DIAMOND {
            color: #0095da;
            background-color: #daf3ff;
        }

        .seller-info__badges .badge-topseller .text--OS {
            color: #0095da;
            background-color: #daf3ff;
        }

        .seller__rating {
            grid-area: seller__rating;
            justify-self: center;
            margin-top: 12px;
            width: 100%;
        }

        .seller-rating {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            grid-template-areas: "positive-review on-time-fulfillment active-response";
        }

        .seller-rating__positive-review {
            grid-area: positive-review;
        }

        .seller-rating__on-time-fulfillment {
            grid-area: on-time-fulfillment;
            border-left: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0;
        }

        .seller-rating__active-response {
            grid-area: active-response;
        }

        .seller-rating .value {
            font-size: 1.8rem;
            text-align: center;
        }

        .seller-rating .text {
            font-size: 1.4rem;
            text-align: center;
        }

        .seller__button {
            display: grid;
            grid-area: seller__button;
            grid-template-areas: "follow seller-chat";
            gap: 0 12px;
            grid-template-columns: repeat(2,calc(50% - 6px));
            grid-template-rows: 1fr;
            margin-top: 12px;
        }

        .seller__button .follow {
            grid-area: follow;
            padding: 0;
            height: 3.2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .seller__button .seller-chat {
            grid-area: seller-chat;
            color: #0095da;
            border: #e0e0e0 .2rem solid;
            -webkit-transition: background-color .4s, border-color .6s;
            transition: background-color .4s, border-color .6s;
            background-color: transparent;
            padding: 0;
            height: 3.2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .seller__button-ripple {
            padding: 0 2.4rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-box-align: center;
        }

        .seller__button-ripple > img {
            width: 18px;
            margin-right: 4px;
        }

        .merchant {
            position: relative;
            z-index: 2;
            padding-left: var(--size-xl);
            background: white url("https://www.static-src.com/frontend/product-detail/static/img/merchant.b2ec90c2.svg") no-repeat var(--size-m) var(--size-m);
        }
        .merchant__name-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .merchant__name {
            font-weight: 600;
        }
        .merchant__badge {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: var(--size-s);
        }
        .merchant__badge-wrapper {
            display: inline-flex;
            align-items: center;
            position: relative;
            margin: 3px 4px 3px 0;
        }
        .merchant__badge--icon {
            width: 24px;
            height: 24px;
            position: absolute;
        }
        .merchant__badge--top-rated {
            color: #f37021;
            background-color: #fde2c2;
            border-radius: 16px;
            font-size: 12px;
            font-family: efframedium,Helvetica,Arial,sans-serif;
            padding: 0 8px 0 28px;
        }
        .merchant__rating {
            padding-left: 20px;
            background: url("https://www.static-src.com/frontend/product-detail/static/img/star.151fd7d6.svg") center left no-repeat;
            background-size: 18px;
        }
        .merchant__location {
            padding-left: 20px;
            background: url("https://www.static-src.com/frontend/product-detail/static/img/ic-location.0b7097cd.svg") center left no-repeat;
            background-size: 18px;
        }
        /* merchant ] */

        /* shipping [ */
        .product__shipping {
            color: var(--black-high);
        }

        .aditional-info {
            margin-top: calc(var(--size-m)*-1);
            padding-top: var(--size-l);
            padding-left: var(--size-xl);
            font-size: 1.2rem;
            background: #e0e0e0 url("https://www.static-src.com/frontend/product-detail/static/img/ic-info.afc945c3.svg") no-repeat var(--size-m) var(--size-l);
            background-size: 22px;
        }
        /* shipping ] */

        /* card with arrow [ */
        .cwa {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .cwa:after {
            content: '';
            width: 18px;
            height: 18px;
            background-color: #0095da;
            -webkit-mask-image: var(--arrow);
            mask-image: var(--arrow);
            -webkit-mask-repeat: no-repeat;
            display: block;
            transform: rotate(180deg);
        }
        .cwa-logo {
            width: 80px;
            margin-right: var(--size-s);
        }
        .cwa-text {
            width: calc(100% - 108px);
        }
        .merchant.cwa {
            align-items: flex-start;
        }
        .merchant.cwa > div {width: calc(100% - 20px);}
        /* card with arrow ] */

        /* review [ */
        .review__wrapper {
            margin-top: var(--size-xl);
        }
        .review, .qna__item {
            padding: var(--size-m) 0;
        }
        .review__amt {line-height: 2.6rem;}
        .review__empty-message {
            font-size: 16px;
            text-align: center;
            color: rgba(0,0,0,.38);
            padding: 35px 16px;
            font-weight: 600;
        }
        .review__score {
            width: 88px;
            height: 28px;
            margin-top: -60px;
            margin-left: auto;
            display: grid;
            place-content: center left;
            font-size: var(--size-l);
            font-weight: bold;
            background: white var(--star) no-repeat 66px 9px;
            background-size: 38px;
        }
        .review__head {
            display: flex;
            justify-content: space-between;
        }
        .review__head-right, .like {
            line-height: 1;
            display: flex;
            align-items: center;
        }
        .review__content {color: var(--black-medium);}
        .review:not(:last-of-type), .qna__item:not(:last-of-type) {
            border-bottom: #ccc 1px solid;
        }
        .review .product__varian-thumb amp-img {border: none;}
        .see__all {
            display: block;
            font-weight: bold;
            text-align: center;
            margin-bottom: 16px;
            font-size: 1.4rem;
        }
        .star, .star div  {
            height: 16px;
            -webkit-mask-image: var(--star);
            mask-image: var(--star);
        }
        .star {
            position: relative;
            width: 80px;
            background-color: #bdbdbd;
        }
        .star div {
            position: absolute;
            background-color: #FEBF35;
        }
        .like, .qna__merchant {
            font-size: 1.4rem;
            color: var(--black-medium);
        }
        .like svg {
            transform: scale(.8);
            margin: 0 4px;
        }
        .like-arm {fill: #858585;}
        .like-finger {fill: #BDBDBD;}
        .like, .like-arm, .like-finger {transition: all .3s;}
        .like:hover, .like.active {color: var(--color-secondary);}
        .like:hover .like-arm, .like.active .like-arm {fill: #0072A7;}
        .like:hover .like-finger, .like.active .like-finger {fill: #0EB3FF;}
        .tridot, .qna__q:after, .qna__a:after {
            color: #858585;
            font-size: 2rem;
            font-weight: bold;
            transform: rotate(270deg);
        }
        /* review ] */

        /* qna [ */
        .qna {margin-top: 24px;}
        .qna__top {color: var(--black-medium);}
        .qna .product, .qna__cs, .qna__empty, .qna__btn {
            margin-bottom: var(--size-s);
        }
        .qna .product {
            display: flex;
            align-items: center;
            font-size: 1.4rem;
        }
        .qna .product__name {
            color: var(--black-high);
            height: auto;
            padding-left: 8px;
        }
        .qna .product amp-img {width: 64px;}
        .qna__cs, .qna__empty-desc {
            font-size: 1.2rem;
            line-height: 1.6rem;
        }
        .qna__btn {
            width: 100%;
            height: var(--size-l);
            border-radius: var(--size-s);
            border: #e0e0e0 2px solid;
            font-size: 1.4rem;
            display: grid;
            place-items: center;
        }
        .qna__empty {text-align: center;}
        .qna__empty-title {font-size: 1.6rem;}
        .qna__item small {
            display: block;
        }
        .qna__q, .qna__a {
            display: flex;
            align-items: flex-start;
        }
        .qna__q {margin-bottom: var(--size-s);}
        .qna__q:before, .qna__a:before {
            width: 20px;
        }
        .qna__q:before {
            content: "T:"
        }
        .qna__q:after, .qna__a:after {
            content: "...";
            margin-left: auto;
        }
        .qna__a:before {
            content: "J:"
        }
        .qna__a a {
            font-size: 1.4rem;
            padding-top: var(--size-s);
            display: block;
        }
        .qna__merchant-blibli {
            position: relative;
            background-color: #0eb3ff;
            color: #fff;
            height: 20px;
            padding: 0 8px;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 12px;
            line-height: 0;
            letter-spacing: 0.8px;
            text-decoration: none;
            border-radius: 16px;
            white-space: nowrap;
            text-transform: capitalize;
            left: 0;
        }
        .qna__merchant-blibli span {
            background-image: url("https://www.static-src.com/frontend/product-detail/static/img/customer-care.fd79246e.svg");
            background-size: cover;
            width: 14px;
            height: 14px;
            display: block;
            margin-right: 4px;
        }
        /* qna ] */

        /* recommendation [ */
        .recommendation__reviews {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .recommendation__review-count {
            color: rgba(0,0,0,.38);
            line-height: 1.4;
            margin-left: 3px;
            font-size: 12px;
        }
        /* ] recommendation */

        /* cta [ */
        .cta {
            position: fixed;
            z-index: 99;
            bottom: 76px;
            width: calc(100% - 32px);
            box-shadow: var(--shadow);
            background-color: white;
            border-radius: var(--size-l) var(--size-l) 0 0;
        }
        .cta-nobanner {
            position: fixed;
            z-index: 99;
            bottom: 0;
            width: calc(100% - 32px);
            box-shadow: var(--shadow);
            background-color: white;
            border-radius: var(--size-l) var(--size-l) 0 0;
        }
        .cta-button {
            float: right;
            display: flex;
            flex-direction: row;
            width: 100%;
        }
        .cta amp-img {
            max-width: 400px;
            margin: auto;
            display: block;
        }
        .cta-button-bag {
            display: table-cell;
            padding: 17px;
            width: 30%;
            background-color: #0095da;
            border-color: #0095da;
            background-image: url("https://www.static-src.com/frontend/product-detail/static/img/add-to-cart.09ac1971.svg");
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 16px;
        }
        .cta-button-buy {
            display: table-cell;
            color: #fff;
            background-color: #f37021;
            border-color: #f37021;
            padding: 15px 17px;
            width: 70%;
            text-align: center;
            border-radius: 16px;
        }
        .cta-button-let-me-know{
            width: 100%;
            cursor: not-allowed;
            color: #fff;
            display: table-cell;
            padding: 15px 17px;
            text-align: center;
            border-radius: 16px;
            background-color: #0095da;
            border-color: #0095da;
            -webkit-transition: background-color .4s, border-color .4s;
            transition: background-color .4s, border-color .4s;
        }
        .cta-button-wedge {
            width: 3vw;
        }
        /* cta ] */

        /* footer[ */
        .footer {
            border-top: #0eb3ff 7px solid;
        }
        .footer__top, .footer__btm {
            padding: var(--size-m);
        }
        .footer__btm {
            font-size: 1.2rem;
            background-color: #f1f1f1;
            padding-bottom: 100px;
        }

        .cs {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .cs__title {
            font-weight: bold;
            margin: 0 4px;
            color: var(--black-medium);
        }

        .seo, .tnc {
            font-size: 1.2rem;
            color: var(--black-medium);
        }
        .seo {
            position: relative;
            line-height: 18px;
        }
        .seo input {display: none;}
        #seo-more~label {
            color: #0095da;
            position: absolute;
            bottom: -10px;
            height: 50px;
            width: 100%;
            text-align: center;
            background: linear-gradient(0deg,rgba(255,255,255,1) 40%,rgba(255,255,255,0) 130%);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }
        #seo-more~label:before {
            content: 'Lihat selengkapnya ';
        }
        #seo-more~label:after {
            content: '';
            width: 14px;
            height: 14px;
            background: var(--arrow) no-repeat top right;
            transform: rotate(180deg);
            transition: all .3s;
            margin-bottom: 1px;
        }
        #seo-more:checked~.seo-content {
            max-height: 5950px;
        }
        #seo-more:checked~label:before {
            content: 'Lihat seperlunya ';
        }
        #seo-more:checked~label:after {
            transform: rotate(90deg);
        }
        .seo h1 {
            font-size: 1.2rem;
            font-weight: normal;
            text-align: justify;
        }
        .seo h2 {
            font-size: 14px;
        }
        .seo-content {
            max-height: 10px;
            padding-bottom: 30px;
            overflow: hidden;
            -webkit-transition: max-height .5s ease-in-out;
            -o-transition: max-height .5s ease-in-out;
            transition: max-height .5s ease-in-out;
        }

        .tnc {
            text-align: center;
        }
        /* footer ] */

        /* [ Journey */

        #branch-amp-journey {
            bottom:0;
            left:0;
            width:100%;
            height:76px;
            position:fixed;
            z-index: 100;
        }
        .hideme {
            width:100%;
            height:76px;
            left:0;
            background-color:none;
            position:fixed;
        }
        .close {
            width:24px;
            height:100%;
            right:0;
            z-index:10000;
            background-color:none;
            position:fixed;
        }

        .branch-amp-journey-inner {
            position:relative;
            width:100%;
            height:100%;
            z-index:9999;
        }
        .donotdisplay {
            display:none;
        }

        .flex-center {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .margin-bottom-0 {
            margin-bottom: 0;
        }
        .recommendation h2.recommendation__title {
            font-size: 1.8rem;
            line-height: 1.5;
        }
        h3.related-search__title {
            font-size: 1.8rem;
            line-height: 1.5;
            margin-bottom: var(--size-m);
        }
        .related-search__container {
            display: flex;
            flex-wrap: wrap;
            gap: var(--size-s);
        }
        .related-search__card {
            display: flex;
            gap: 4px;
            width: fit-content;
            color: var(--black-high);
            background: #fff;
            border: 1px solid #E0E0E0;
            border-radius: var(--size-s);
            padding: var(--size-s) var(--size-m) var(--size-s) 12px;
        }
        .related-search__icon {
            color: #BDBDBD;
        }
        .related-search__label {
            font-size: 1.4rem;
            line-height: 1.8rem;
        }

        .breadcrumb {
          padding: 8px 0;
          display: inline-block;
        }

        .breadcrumb__block {
          display: inline;
          font-size: 12px;
          margin-right: 5px;
          overflow-wrap: anywhere;
        }

        .breadcrumb__link,
        .breadcrumb__separator {
          display: inline;
          color: #0095da;
          font-size: 14px;
        }

        .breadcrumb__separator {
          margin-left: 5px;
          color: #333;
          font-size: 13px;
        }

        .icon-class {
          width: 1em;
          height: 1em;
          flex-shrink: 0;
          display: inline-block;
          vertical-align: middle;
          margin: 3px 3px;
        }

        .breadcrumb__block:last-child>span {
          color: #00000099;
          font-size: 14px;
        }

        .breadcrumb__link.last-index {
          color: #333;
          font-weight: 700;
        }

        /*   Journey ] */
    </style>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- AMP STYLESHEET -end -->
</head>
<body>

<!-- Star  t Service Worker AMP Javasript -->
<amp-install-serviceworker src="/serviceworker.js"
                           layout="nodisplay">
</amp-install-serviceworker>
<!-- End Service Worker AMP Javasript -->

<!-- Start Alexa AMP Certify Javasript -->
<amp-analytics type="alexametrics">
    <script type="application/json">
        { "vars": { "atrk_acct": "9o/vllak0EYlbz", "domain": "<?php echo $urlPath ?>" }}
    </script>
</amp-analytics>
<!-- End Alexa AMP Certify Javasript -->

<!--AMP GTM-->
<amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-NFL59ZZ&gtm.url=SOURCE_URL"
               data-credentials="include"></amp-analytics>
<!--AMP GTM-->

<!-- AMP HEADER -start -->
<header class="header">
    <div class="header__left">
        <a href="<?php echo $urlPath ?>" class="header__left__backbtn"></a>
        <a href="<?php echo $urlPath ?>/_search?searchTerm=" class="header__left__searchbtn"></a>
    </div>
    <div class="header__right">
        <a href="<?php echo $urlPath ?>" class="header__right__cartbtn"></a>
        <amp-social-share type="system"
                          width="32"
                          height="32"
                          data-param-text="<?php echo $BRANDS ?>"
                          data-param-url="<?php echo $urlPath ?>"
                          class="header__right__sharebtn">
        </amp-social-share>
    </div>
</header>
<!-- AMP HEADER -end -->

<!-- MAIN CONTENT -start -->
<main class="product">

    <div class="body-content">
        <!-- pdp info [ -->
        <section class="pdp__info">
            <div class="carousel-image">
                <amp-image-lightbox id="lightboxProduct" layout="nodisplay"></amp-image-lightbox>
                <amp-carousel
                  id="carousel"
                  width="400"
                  height="400"
                  layout="responsive"
                  type="slides"
                  on="slideChange:
                    carouselSelector.toggle(index=event.index, value=true),
                    carouselDots.goToSlide(index=event.index)">
                    
                    
                    
                    <figure class="product__img">
                        <amp-img on="tap:lightboxProduct"
                                 role="button"
                                 attribution="visualhunt"
                                 src="https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg"
                                 alt="<?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini"
                                 width="380"
                                 height="380"
                                 layout="responsive"
                                 tabindex="0">
                        </amp-img>
                    </figure>
                    
                    <figure class="product__img">
                        <amp-img on="tap:lightboxProduct"
                                 role="button"
                                 attribution="visualhunt"
                                 src="https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg"
                                 alt="<?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini"
                                 width="380"
                                 height="380"
                                 layout="responsive"
                                 tabindex="0">
                        </amp-img>
                    </figure>
                    
                    <figure class="product__img">
                        <amp-img on="tap:lightboxProduct"
                                 role="button"
                                 attribution="visualhunt"
                                 src="https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg"
                                 alt="<?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini"
                                 width="380"
                                 height="380"
                                 layout="responsive"
                                 tabindex="0">
                        </amp-img>
                    </figure>
                    
                    <figure class="product__img">
                        <amp-img on="tap:lightboxProduct"
                                 role="button"
                                 attribution="visualhunt"
                                 src="https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg"
                                 alt="<?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini"
                                 width="380"
                                 height="380"
                                 layout="responsive"
                                 tabindex="0">
                        </amp-img>
                    </figure>
                    
                    <figure class="product__img">
                        <amp-img on="tap:lightboxProduct"
                                 role="button"
                                 attribution="visualhunt"
                                 src="https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg"
                                 alt="<?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini"
                                 width="380"
                                 height="380"
                                 layout="responsive"
                                 tabindex="0">
                        </amp-img>
                    </figure>
                    
                    
                </amp-carousel>
                <amp-selector
                  id="carouselSelector"
                  on="select:carousel.goToSlide(index=event.targetOption)"
                  layout="container"
                >
                    <amp-carousel id="carouselDots" class="carousel-dots" height="16px">
                        
                        
                          <span option="0"></span>
                        
                          <span option="1"></span>
                        
                          <span option="2"></span>
                        
                          <span option="3"></span>
                        
                          <span option="4"></span>
                        
                        
                    </amp-carousel>
                </amp-selector>
            </div>
            <div class="product__info card-large card-layer">
                
                
                <a href="<?php echo $urlPath ?>">
                    <div class="wishlist">
                        <!-- <div class="wishlist active"> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path class="love-left" d="M11 5.20698C10.0999 3.50647 8.49886 2.35 6.39799 2.35C3.49544 2.35 1.0938 4.74992 1.0938 7.65039C1.0938 8.25038 1.0938 13.7496 11 19.65L11 5.20698Z"/>
                            <path class="love-right" d="M11 5.20698C11.9 3.50647 13.5011 2.35 15.602 2.35C18.5046 2.35 20.9062 4.74992 20.9062 7.65039C20.9062 8.25038 20.9062 13.7496 11 19.65L11 5.20698Z"/>
                        </svg>
                    </div>
                </a>
                <div class="product__name product__name-container"><?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini</div>
                
                <div class="product__price">
                    <div class="product__price-after">Rp25.000</div>
                    
                    
                    <span class="product__price-before">Rp50.000</span>
                    <span class="product__price-discount">50%</span>
                    
                </div>
                
                
                <div class="product__statistics">
                    <div class="product__statistics-rating">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 0.99524 0.99524">
                            <linearGradient id="a2w7k" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="0%" stop-color="#fdb813"></stop>
                                <stop offset="0%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="0.97712,0.4546,0.99524,0.38118,0.9374,0.33242,0.69556,0.29728,0.67176,0.27998,0.56364,0.06086,0.4994,0.02094,0.43518,0.06086,0.32704,0.28,0.30322,0.2973,0.06138,0.33244,0.00354,0.3812,0.02166,0.45462,0.19664,0.62518,0.20576,0.65318,0.16448,0.89402,0.1801,0.9521,0.2684,0.96952,0.48468,0.8558,0.51412,0.8558,0.73042,0.96952,0.76374,0.97786,0.8187,0.9521,0.83432,0.89402,0.79302,0.65318,0.80214,0.62518,0.97712,0.4546" fill="url(#a2w7k)"></polygon>
                        </svg>
                        
                        <a class="product-rating__count" href="<?php echo $urlPath ?>">(5)</a>
                    </div>
                    
                    <span class="divider">•</span>
                    <span class="product-statistics__sold-seen">Terjual 855</span>
                    
                </div>
                
                
            </div>
            <!-- pdp info ] -->

            <!-- PRODUCT DESC TAB -start -->
            

            


            

            <div class="card-large card-layer">
                <h3>Deskripsi produk</h3><br>
                <div>
                
                    
                    
                    <a href="<?php echo $urlPath ?>" class="product__warranty">Banyak Bonus New Member (Tanpa Syarat)</a><br>
                                    
                                    
                    <a href="<?php echo $urlPath ?>" class="product__warranty">Situs Paling Gacor</a><br>
                    
                    
                    
                    <a href="<?php echo $urlPath ?>" class="product__warranty">Garansi Anti Kekalahan</a>
                    
                </div>
                <br>
                <div class="product__features">
                    
                    <br>
                    <!--if arahin ke halaman pdp aslinya-->
                    <amp-lightbox scrollable id="my-lightbox" layout="nodisplay">
                        <div class="product__selengkapnya"
                             on="tap:my-lightbox.close"
                             role="button"
                             tabindex="0">
                            <div class="product__selengkapnya-header">
                                <div class="arrow-button"></div>
                                <div class="main">Bukti Gacor Bos</div>
                            </div>
                            <div class="product__selengkapnya-detail">
                                <h1><?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini</h1>
                                <div class="product__selengkapnya-detail-brand">
                                    
                                    
                                    
                                    <a href="<?php echo $urlPath ?>" class="product__warranty">Banyak Bonus New Member (Tanpa Syarat)</a><br>
                                    
                                    
                                    <a href="<?php echo $urlPath ?>" class="product__warranty">Situs Paling Gacor</a><br>
                                    
                                    
                                    
                                    <a href="<?php echo $urlPath ?>" class="product__warranty">Garansi Anti Kekalahan</a>
                                    
                                </div><br>
                            </div>
                            <div class="product__selengkapnya-detail-content">
                                <div class="product__selengkapnya-detail-content-product">
                                   #artikel
                                </div>
                                <div class="product__selengkapnya-detail-spesifikasi">
                                    <h5 class="specification__title">Spesifikasi</h5>
                                    <table class="specification__table">
                                        <tbody>
                                        
                                        
                                        <tr>
                                            <td class="label">Jenis</td>
                                            <td class="value">Slot Gacor</td>
                                        </tr>
                                        
                                        
                                        
                                        <tr>
                                            <td class="label">Brand</td>
                                            <td class="value"><?php echo $BRANDS ?></td>
                                        </tr>
                                        
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </amp-lightbox>
                    <button on="tap:my-lightbox" class="b-block tx-center lightbox-btn">
                        Selengkapnya
                    </button>
                </div>
            </div>
            <!-- PRODUCT DESC TAB -end -->
        </section>

        <section>
            
            

            <!-- merchant [ -->
            <section>
                <div class="seller-section">
                    <div class="seller-card">
                        <div class="pdp__seller">
                            <div class="seller">
                                <div class="seller__logo">
                                    <div class="logo-container">
                                        
                                        <amp-img src="https://res.cloudinary.com/djziww7yf/image/upload/t_Profile/v1707557971/seoo_aq0wrc.png"
                                                 width="64px"
                                                 height="64px">
                                        </amp-img>
                                        
                                    </div>
                                </div>
                                <div class="seller__name">
                                    
                                    <span class="text">MosiMosi</span>
                                    <i class="icon">
                                        <amp-img src="https://www.static-src.com/siva/asset/09_2023/FBB_New.png"
                                                 width="48px"
                                                 height="18px">
                                        </amp-img>
                                    </i>
                                    
                                </div>
                                
                                <div class="seller__info">
                                    <div class="seller-info__badges">
                                        
                                        <figure class="badge-topseller">
                                            <amp-img src="https://www.static-src.com/siva/asset/09_2023/os-logo-24px.png"
                                                 class="icon"
                                                 width="24px"
                                                 height="24px">
                                            </amp-img>
                                            <span class="text text--OS">Official Slot Gacor</span>
                                        </figure>
                                        
                                        
                                        <figure class="badge-topseller">
                                            <amp-img src="https://www.static-src.com/siva/asset/07_2020/icon-top-rated-diamond.png"
                                                 class="icon"
                                                 width="24px"
                                                 height="24px">
                                            </amp-img>
                                            <span class="text text--DIAMOND">Top rated</span>
                                        </figure>
                                        
                                    </div>
                                    <div class="seller-info__location">
                                        <div class="seller-info__grid-icon">
                                            <i class="ic-location"></i>
                                        </div>
                                        <div class="seller-info__grid-content">
                                            <span class="text-ellipsis">Tutor Deck?</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- merchant ] -->

            <!-- Other offer merchant -->
            

            
            <br>
            <!-- Other offer merchant ] -->

            <!-- shipping [ -->
            <div class="merchant card-medium gap cwa">
                <a href="<?php echo $urlPath ?>" class="product__shipping">
                    <div class="">
                        Cek web paling gacor
                        <div class="c-lime">
                            Hanya disini banyak bonus
                        </div>
                    </div>
                </a>
            </div>
            <div class="aditional-info card-medium gap">
                Estimasi gacor biasanya akan diberikan kepada member baru dengan deposit berapapun dan harap member jangan kaget jika menang terus.
            </div>
            <!-- shipping ] -->
        </section>

        <!-- review [ -->
        <section class="review__wrapper">
            <div class="review__amt b-flex">
                <h3 class="heading">Ulasan</h3>
                
                <a href="<?php echo $urlPath ?>">5 ulasan</a>
                
            </div>
            <div class="card-large">
                
                <div class="review__score card-medium">
                    4.8
                </div>
                
                
                
                <div class="review">
                    <div class="review__head">
                        <div>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        
                        </div>
                        <a href="<?php echo $urlPath ?>" class="review__head-right">
                            <span class="like">
                                834
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19">
                                    <g>
                                        <path class="like-arm"
                                              d="M4 19H2c-1.1 0-2-.9-2-2V6.8c0-1.1.9-2 2-2h2c.6 0 1 .4 1 1V18c0 .6-.4 1-1 1z"/>
                                        <path class="like-finger"
                                              d="M13.3 1.8V6h5.4c1.1 0 1.9.9 1.9 2l-.5 7.5c-.1 2-1.8 3.5-3.8 3.5H7.9c-.5 0-.9-.4-.9-.9V5.6c0-.4.1-.6.3-1L10 .8c.6-.8 1.7-1 2.5-.4.5.3.8.8.8 1.4z"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="tridot">...</span>
                        </a>
                    </div>
                    <div class="review__title"></div>
                    <div class="review__content">emang beneran gacor disini</div>

                    
                    <small> oleh Nurul</small>
                </div>
                
                <div class="review">
                    <div class="review__head">
                        <div>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        
                        </div>
                        <a href="<?php echo $urlPath ?>" class="review__head-right">
                            <span class="like">
                                974
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19">
                                    <g>
                                        <path class="like-arm"
                                              d="M4 19H2c-1.1 0-2-.9-2-2V6.8c0-1.1.9-2 2-2h2c.6 0 1 .4 1 1V18c0 .6-.4 1-1 1z"/>
                                        <path class="like-finger"
                                              d="M13.3 1.8V6h5.4c1.1 0 1.9.9 1.9 2l-.5 7.5c-.1 2-1.8 3.5-3.8 3.5H7.9c-.5 0-.9-.4-.9-.9V5.6c0-.4.1-.6.3-1L10 .8c.6-.8 1.7-1 2.5-.4.5.3.8.8.8 1.4z"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="tridot">...</span>
                        </a>
                    </div>
                    <div class="review__title"></div>
                    <div class="review__content">kirain promonya bohongan,eh ternyata aku salah sangka bneran dikasih dong bonus sama jackpotnya</div>

                    
                    <small> oleh n***a</small>
                </div>
                
                <div class="review">
                    <div class="review__head">
                        <div>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 50 50">
                            <linearGradient id="8qbzvvf" x1="0" x2="100%" y1="0" y2="0">
                                <stop offset="100%" stop-color="#fdb813"></stop>
                                <stop offset="100%" stop-color="#bdbdbd"></stop>
                            </linearGradient>
                            <polygon points="23,2,14,17,0,19,10,34,7,50,23,43,38,50,36,34,46,19,31,17" fill="url(#8qbzvvf)"></polygon>\
                        </svg>
                        
                        
                        </div>
                        <a href="<?php echo $urlPath ?>" class="review__head-right">
                            <span class="like">
                                675
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19">
                                    <g>
                                        <path class="like-arm"
                                              d="M4 19H2c-1.1 0-2-.9-2-2V6.8c0-1.1.9-2 2-2h2c.6 0 1 .4 1 1V18c0 .6-.4 1-1 1z"/>
                                        <path class="like-finger"
                                              d="M13.3 1.8V6h5.4c1.1 0 1.9.9 1.9 2l-.5 7.5c-.1 2-1.8 3.5-3.8 3.5H7.9c-.5 0-.9-.4-.9-.9V5.6c0-.4.1-.6.3-1L10 .8c.6-.8 1.7-1 2.5-.4.5.3.8.8.8 1.4z"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="tridot">...</span>
                        </a>
                    </div>
                    <div class="review__title"></div>
                    <div class="review__content"></div>

                    
                    <small> oleh R***e</small>
                </div>
                
                <a class="see__all" href="<?php echo $urlPath ?>">Lihat semua ulasan</a>
                
            </div>
        </section>

        
        <section class="related-search card-large">
            <h3 class="related-search__title">Pencarian terkait</h3>
            <div class="related-search__container">
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                            <?php echo $BRANDS ?>
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                            slot gacor
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                            slot x500
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                            slot online
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                            slot terpercaya
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                            <?php echo $BRANDS ?> terbaru
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                            <?php echo $BRANDS ?> x500
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                            <?php echo $BRANDS ?> gacor
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                            <?php echo $BRANDS ?> apk
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $urlPath ?>">
                    <div class="related-search__card">
                        <div class="related-search__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" preserveAspectRatio="xMidYMid meet" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.0519 9.69471C12.3453 10.7947 13.5173 12.032 14.5106 13.4134C14.7393 13.7314 14.7079 14.1647 14.4366 14.436C14.1646 14.708 13.7319 14.7394 13.4133 14.5107C12.0313 13.5174 10.7946 12.3454 9.69459 11.052C8.83325 11.6487 7.79059 12 6.66659 12C3.72592 12 1.33325 9.60737 1.33325 6.66671C1.33325 3.72604 3.72592 1.33337 6.66659 1.33337C9.60725 1.33337 11.9999 3.72604 11.9999 6.66671C11.9999 7.79137 11.6479 8.83404 11.0519 9.69471ZM6.66592 2.66671C4.45992 2.66671 2.66592 4.46071 2.66592 6.66671C2.66592 8.87271 4.45992 10.6667 6.66592 10.6667C8.87192 10.6667 10.6659 8.87271 10.6659 6.66671C10.6659 4.46071 8.87192 2.66671 6.66592 2.66671Z"/>
                            </svg>
                        </div>
                        <div class="related-search__label">
                           <?php echo $BRANDS ?> slot
                        </div>
                    </div>
                </a>
                
            </div>
        </section>
        
        <br>
        <!-- pencarian terkait ] -->

        <!-- cta [ -->
        <amp-state id="ctaJourney">
            <script type="application/json">
                {
                    "bannerExists": {
                        "style": "cta card-large"
                    },
                    "bannerNotExists": {
                        "style": "cta-nobanner card-large"
                    }
                }
            </script>
        </amp-state>
        <div class="cta card-large" [class]="ctaJourney[journeyState].style">
            <div class="cta-button">
                
                <a href="https://nusatara88.xyz/" class="cta-button-bag"></a>
                <div class="cta-button-wedge"></div>
                <a href="https://nusatara88.xyz/" class="cta-button-buy">
                    <b>DAFTAR</b>
                </a>
                
            </div>
        </div>
        <!-- cta ] -->
    </div>

    <footer class="footer">
        <div class="footer__top">
            <div class="cs">
                <amp-img
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbC1ydWxlPSJub256ZXJvIiBmaWxsPSJub25lIj48cGF0aCBkPSJNMjIuNCAxNC43NDNoLTMuNDg2di04LjRIMjIuNGMuODU3IDAgMS40ODYuNjg2IDEuNDg2IDEuNDg2VjEzLjJjMCAuODU3LS42ODYgMS41NDMtMS40ODYgMS41NDN6bS0yMC4xNzEgMEg0Ljk3TDUuNTQzIDYuNEgyLjIyOUMxLjMxNCA2LjQuNTcgNy4wMjkuNTcgNy43NzF2NS42YzAgLjc0My43NDMgMS4zNzIgMS42NTggMS4zNzJ6IiBmaWxsPSIjODU4NTg1Ii8+PHBhdGggZD0iTTE4Ljg1NyAyMC4zNDNIMTUuMDNjLS41NzIgMC0xLjA4Ni0uNTE0LTEuMDg2LTEuMiAwLS42ODYuNTE0LTEuMiAxLjA4Ni0xLjJIMTguNFY5LjcxNEMxOC40IDYgMTUuNjU3IDMuMDMgMTIuMjI5IDMuMDNjLTMuNDI5IDAtNi4xMTUgMy4wMjgtNi4xMTUgNi42ODV2NC43NDNjMCAuNjI5LS41MTQgMS4yLTEuMDg1IDEuMi0uNTcyIDAtMS4wODYtLjUxNC0xLjA4Ni0xLjJWOS43MTRjMC00Ljk3MSAzLjcxNC05LjAyOCA4LjM0My05LjAyOCA0LjYyOCAwIDguMjg1IDQuMDU3IDguMjg1IDkuMDI4djguNzQzYzAgMS4wMjktLjggMS44ODYtMS43MTQgMS44ODZ6IiBmaWxsPSIjQkRCREJEIi8+PHBhdGggZD0iTTE0Ljc0MyAyMS4zMTRoLTEuNjU3QTIuNTM3IDIuNTM3IDAgMCAxIDEwLjU3IDE4LjhhMi41MzcgMi41MzcgMCAwIDEgMi41MTUtMi41MTRoMS42NTdhMi41MzcgMi41MzcgMCAwIDEgMi41MTQgMi41MTQgMi41IDIuNSAwIDAgMS0yLjUxNCAyLjUxNHoiIGZpbGw9IiM4NTg1ODUiLz48L2c+PC9zdmc+"
                        alt="headsetd"
                        width="32"
                        height="32"
                        class="cs__img">
                </amp-img>
                <span class="cs__title">Butuh Bantuan?</span>
                <a class="link" href="https://nusatara88.xyz/">Hubungi Kami</a>
            </div>
            <article class="seo container">
                <input type="checkbox" name="" id="seo-more">
                <label for="seo-more"></label>

                <h2></h2>

                <section class="seo-content">
                  <div class="breadcrumb">
                    
                    <div class="breadcrumb__block">
                      <a href="<?php echo $urlPath ?>" class="breadcrumb__link router-link-active">
                        <span>Home</span>
                      </a>
                      <span class="breadcrumb__separator">
                      <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiPjxwYXRoIGQ9Ik0zNTQgNzA4bDE5NC0xOTYtMTk0LTE5NiA2MC02MCAyNTYgMjU2LTI1NiAyNTZ6Ii8+PC9zdmc+" class="icon-class">
                    </span>
                    </div>
                    
                    <div class="breadcrumb__block">
                      <a href="<?php echo $urlPath ?>"
                         class="breadcrumb__link router-link-active">
                        <span>Slot Gacor</span>
                      </a>
                      <span class="breadcrumb__separator">
                          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiPjxwYXRoIGQ9Ik0zNTQgNzA4bDE5NC0xOTYtMTk0LTE5NiA2MC02MCAyNTYgMjU2LTI1NiAyNTZ6Ii8+PC9zdmc+" class="icon-class">
                      </span>
                    </div>
                    
                    <div class="breadcrumb__block">
                      <a href="<?php echo $urlPath ?>"
                         class="breadcrumb__link router-link-active">
                        <span>Slot Online</span>
                      </a>
                      <span class="breadcrumb__separator">
                          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiPjxwYXRoIGQ9Ik0zNTQgNzA4bDE5NC0xOTYtMTk0LTE5NiA2MC02MCAyNTYgMjU2LTI1NiAyNTZ6Ii8+PC9zdmc+" class="icon-class">
                      </span>
                    </div>
                    
                    <div class="breadcrumb__block">
                      <a href="<?php echo $urlPath ?>"
                         class="breadcrumb__link router-link-active">
                        <span>Slot Terpercaya</span>
                      </a>
                      <span class="breadcrumb__separator">
                          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiPjxwYXRoIGQ9Ik0zNTQgNzA4bDE5NC0xOTYtMTk0LTE5NiA2MC02MCAyNTYgMjU2LTI1NiAyNTZ6Ii8+PC9zdmc+" class="icon-class">
                      </span>
                    </div>
                    
                    <div class="breadcrumb__block">
                      <a href="<?php echo $urlPath ?>"
                         class="breadcrumb__link router-link-active">
                        <span><?php echo $BRANDS ?></span>
                      </a>
                      <span class="breadcrumb__separator">
                          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiPjxwYXRoIGQ9Ik0zNTQgNzA4bDE5NC0xOTYtMTk0LTE5NiA2MC02MCAyNTYgMjU2LTI1NiAyNTZ6Ii8+PC9zdmc+" class="icon-class">
                      </span>
                    </div>
                    
                    <div class="breadcrumb__block">
                      <span><?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini</span>
                    </div>
                    
                  </div>
                 
                </section>
            </article>
        </div>
        <div class="footer__btm">
            <div class="tnc">
                Copyright © 2011- 2024 <?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini<br>
                All Rights Reserved<br>
                <a class="link" href="<?php echo $urlPath ?>">
                    Syarat &amp; Ketentuan
                </a> |
                <a class="link" href="<?php echo $urlPath ?>">
                    Kebijakan Privasi
                </a>
            </div>
        </div>
    </footer>
</main>
<!-- MAIN CONTENT -end -->



<!-- AMP ANALYTICS -start -->
<amp-analytics type="googleanalytics">
    <script type="application/json">
        {
            "vars": {
                "account": "UA-21718848-13"
            },
            "triggers": {
                "trackPageviewWithCustomUrl": {
                    "on": "visible",
                    "request": "pageview"
                }
            }
        }
    </script>
</amp-analytics>
<amp-analytics type="googleanalytics">
    <script type="application/json">
        {
            "vars": {
                "account": "UA-21718848-1"
            },
            "triggers": {
                "trackPageviewWithCustomUrl": {
                    "on": "visible",
                    "request": "pageview"
                }
            }
        }
    </script>
</amp-analytics>
<!-- AMP ANALYTICS -end -->

<!-- BREADCRUMBLIST SCHEMA MARKUP -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "<?php echo $urlPath ?>"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Slot Gacor",
            "item": "<?php echo $urlPath ?>"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "Pakaian",
            "item": "<?php echo $urlPath ?>"
        },
        {
            "@type": "ListItem",
            "position": 4,
            "name": "Slot Online",
            "item": "<?php echo $urlPath ?>"
        },
        {
            "@type": "ListItem",
            "position": 5,
            "name": "Slot Terpercaya",
            "item": "<?php echo $urlPath ?>"
        },
        {
            "@type": "ListItem",
            "position": 6,
            "name": "<?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini",
            "item": "<?php echo $urlPath ?>"
        }]
    }
</script>

<!-- STORE SCHEMA MARKUP -->
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Store",
        "name": "Seo Kimochi",
        "image": "https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Gudang Gacor"
        }
    }
</script>

<!-- PRODUCT SCHEMA MARKUP -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "<?php echo $BRANDS ?> ⚡️ Alternatif Link Situs Slot Gacor Maxwin Asli Gampang Menang Hari Ini",
        "image": ["https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg","https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg","https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg","https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg","https://res.cloudinary.com/dbbqiwivn/image/upload/v1714223936/slot-gacor_q6nrdw.jpg"],
        "description": "<?php echo $BRANDS ?> Kami memberikan rekomendasi tentang situs slot saat ini yang sedang gacor memakai server thailand.",
        "brand": "<?php echo $BRANDS ?>",
        "sku": "9TW-60021-01409",
        "offers": {
            "@type": "AggregateOffer",
            "offerCount": 1,
            "url": "<?php echo $urlPath ?>",
            "priceCurrency": "IDR",
            "lowPrice": "79000",
            "highPrice": "399000",
            "availability": "https://schema.org/InStock",
            "itemCondition": "https://schema.org/NewCondition",
            "seller": {
                "@type": "Organization",
                "name": "<?php echo $urlPath ?>"
            },
            "hasMerchantReturnPolicy": {
              "@type": "MerchantReturnPolicy",
              "applicableCountry": "ID",
              "returnPolicyCategory": "MerchantReturnFiniteReturnWindow",
              "merchantReturnDays": 15,
              "returnFees": "FreeReturn",
              "returnMethod": "ReturnByMail"
            }
        },
    "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "5",
    "reviewCount": "5"
    },
    "review": [{
    "@type": "Review",
    "name": "Nurul",
    "reviewBody": "emang beneran gacor disini",
    "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "1"
    },
    "datePublished": "13 Nov 2023",
    "author": {"@type": "Person", "name": "Nurul"}
    },
    {
    "@type": "Review",
    "name": "n***a",
    "reviewBody": "kirain promonya bohongan,eh ternyata aku salah sangka bneran dikasih dong bonus sama jackpotnya",
    "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "1"
    },
    "datePublished": "22 Oct 2023",
    "author": {"@type": "Person", "name": "n***a"}
    },
    {
    "@type": "Review",
    "name": "R***e",
    "reviewBody": "",
    "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "1"
    },
    "datePublished": "24 Dec 2022",
    "author": {"@type": "Person", "name": "R***e"}
    }
    ]
    
    }
</script>


</body>
</html>
