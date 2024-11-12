{{-- TEMA 24 --}}
@php
    use Carbon\Carbon;

    // Parse the datetime fields using Carbon
    $datetimeAkad = Carbon::parse($form->datetimeAkad);
    $datetimeResepsi = Carbon::parse($form->datetimeResepsi);

    // Day and Month mappings (localized to Indonesian)
    $days = [
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu',
    ];

    $months = [
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember',
    ];

    // Format Akad and Resepsi date in Indonesian
    $formatDate = function ($datetime) use ($days, $months) {
        $englishDay = $datetime->format('l'); // Get the day (e.g., Sunday)
        $englishMonth = $datetime->format('F'); // Get the month (e.g., January)
        $indonesianDay = $days[$englishDay];
        $indonesianMonth = $months[$englishMonth];

        // Return formatted date in 'Day, d Month Y' format
        return ucfirst($indonesianDay) .
            ', ' .
            $datetime->format('d') .
            ' ' .
            $indonesianMonth .
            ' ' .
            $datetime->format('Y');
    };

    // Get Indonesian month names for both Akad and Resepsi
    $getIndonesianMonth = function ($datetime) use ($months) {
        $englishMonth = $datetime->format('F'); // Get the month in English (e.g., January)
        return $months[$englishMonth]; // Return the corresponding Indonesian month
    };

    $formattedDateAkad = $formatDate($datetimeAkad);
    $formattedDateResepsi = $formatDate($datetimeResepsi);

    // Indonesian month names only
    $indonesianMonthAkad = $getIndonesianMonth($datetimeAkad);
    $indonesianMonthResepsi = $getIndonesianMonth($datetimeResepsi);
@endphp
@php
    $nama_tamu = request('to');
@endphp

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>
        @if ($form->penempatanTulisan == 'Pria')
            {{ $form->namaPanggilanPria }} & {{ $form->namaPanggilanWanita }}
        @else
            {{ $form->namaPanggilanWanita }} & {{ $form->namaPanggilanPria }}
        @endif
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <style type="text/css">
        .wdp-comment-text img {

            max-width: 100% !important;

        }
    </style>

    <meta name='robots' content='noindex, nofollow' />

    <!-- This site is optimized with the Yoast SEO plugin v23.8 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $form->namaPanggilanPria }} dan {{ $form->namaPanggilanWanita }}" />
    <meta property="og:description"
        content="The Wedding Of {{ $form->namaPanggilanPria }} &#038; {{ $form->namaPanggilanWanita }} {{ $datetimeResepsi->format('d F Y') }} SPECIAL INVITATION : BUKA UNDANGAN 140523 {{ $form->namaPanggilanPria }} AND {{ $form->namaPanggilanWanita }} | JAWA TENGAH &#8220;Maha Suci Allah yang telah menciptakan manusia dengan berpasang-pasangan. Dengan memohon Rahmat dan Ridho Allah SWT, kami bermaksud mengundang Saudara/i dalam acara resepsi pernikahan kami.&#8221; (QS. Ar-Rum : 21) BRIDE | GROOM [&hellip;]" />
    <meta property="og:url" content="https://buka.undanganku.store/thema-24/" />
    <meta property="article:published_time" content="2024-08-16T11:21:32+00:00" />
    <meta property="article:modified_time" content="2024-11-03T07:57:51+00:00" />
    <meta property="og:image"
        content="https://buka.undanganku.store/wp-content/uploads/2024/03/US_06661.jpeg-scaled-e1674016897898.jpg" />
    <meta property="og:image:width" content="1190" />
    <meta property="og:image:height" content="1350" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="author" content="Admin" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="Admin" />
    <meta name="twitter:label2" content="Est. reading time" />
    <meta name="twitter:data2" content="3 minutes" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://buka.undanganku.store/thema-24/","url":"https://buka.undanganku.store/thema-24/","name":"Thema 24 -","isPartOf":{"@id":"https://buka.undanganku.store/#website"},"primaryImageOfPage":{"@id":"https://buka.undanganku.store/thema-24/#primaryimage"},"image":{"@id":"https://buka.undanganku.store/thema-24/#primaryimage"},"thumbnailUrl":"https://buka.undanganku.store/wp-content/uploads/2024/03/US_06661.jpeg-scaled-e1674016897898-903x1024.jpg","datePublished":"2024-08-16T11:21:32+00:00","dateModified":"2024-11-03T07:57:51+00:00","author":{"@id":"https://buka.undanganku.store/#/schema/person/5a03783691fee219df468136fff3fdc1"},"breadcrumb":{"@id":"https://buka.undanganku.store/thema-24/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://buka.undanganku.store/thema-24/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://buka.undanganku.store/thema-24/#primaryimage","url":"https://buka.undanganku.store/wp-content/uploads/2024/03/US_06661.jpeg-scaled-e1674016897898.jpg","contentUrl":"https://buka.undanganku.store/wp-content/uploads/2024/03/US_06661.jpeg-scaled-e1674016897898.jpg","width":1190,"height":1350},{"@type":"BreadcrumbList","@id":"https://buka.undanganku.store/thema-24/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://buka.undanganku.store/"},{"@type":"ListItem","position":2,"name":"Thema 24"}]},{"@type":"WebSite","@id":"https://buka.undanganku.store/#website","url":"https://buka.undanganku.store/","name":"","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://buka.undanganku.store/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"},{"@type":"Person","@id":"https://buka.undanganku.store/#/schema/person/5a03783691fee219df468136fff3fdc1","name":"Admin","image":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://buka.undanganku.store/#/schema/person/image/","url":"https://secure.gravatar.com/avatar/268d5af7a54b201067579b0715452843?s=96&d=mm&r=g","contentUrl":"https://secure.gravatar.com/avatar/268d5af7a54b201067579b0715452843?s=96&d=mm&r=g","caption":"Admin"},"sameAs":["http://sewaundangan.online"],"url":"https://buka.undanganku.store/author/admin/"}]}</script>
    <!-- / Yoast SEO plugin. -->


    <title>Thema 24 -</title>
    <link rel="alternate" type="application/rss+xml" title=" &raquo; Feed" href="https://buka.undanganku.store/feed/" />
    <link rel="alternate" type="application/rss+xml" title=" &raquo; Comments Feed"
        href="https://buka.undanganku.store/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title=" &raquo; Thema 24 Comments Feed"
        href="https://buka.undanganku.store/thema-24/feed/" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/buka.undanganku.store\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
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
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
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
    </script>
    <style id='wp-emoji-styles-inline-css'>
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
    <style id='wp-block-library-inline-css'>
        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px;
            --wp-block-synced-color: #7a00df;
            --wp-block-synced-color--rgb: 122, 0, 223;
            --wp-bound-block-color: var(--wp-block-synced-color)
        }

        @media (min-resolution:192dpi) {
            :root {
                --wp-admin-border-width-focus: 1.5px
            }
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131
        }

        :root .has-very-light-gray-color {
            color: #eee
        }

        :root .has-very-dark-gray-color {
            color: #313131
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3)
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec)
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671)
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59)
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf)
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc)
        }

        .has-regular-font-size {
            font-size: 1em
        }

        .has-larger-font-size {
            font-size: 2.625em
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal)
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge)
        }

        .has-text-align-center {
            text-align: center
        }

        .has-text-align-left {
            text-align: left
        }

        .has-text-align-right {
            text-align: right
        }

        #end-resizable-editor-section {
            display: none
        }

        .aligncenter {
            clear: both
        }

        .items-justified-left {
            justify-content: flex-start
        }

        .items-justified-center {
            justify-content: center
        }

        .items-justified-right {
            justify-content: flex-end
        }

        .items-justified-space-between {
            justify-content: space-between
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        html :where(.has-border-color) {
            border-style: solid
        }

        html :where([style*=border-top-color]) {
            border-top-style: solid
        }

        html :where([style*=border-right-color]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-color]) {
            border-left-style: solid
        }

        html :where([style*=border-width]) {
            border-style: solid
        }

        html :where([style*=border-top-width]) {
            border-top-style: solid
        }

        html :where([style*=border-right-width]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-width]) {
            border-left-style: solid
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        :where(figure) {
            margin: 0 0 1em
        }

        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
        }

        @media screen and (max-width:600px) {
            html :where(.is-position-sticky) {
                --wp-admin--admin-bar--position-offset: 0px
            }
        }
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
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
            --wp--preset--color--base: #f9f9f9;
            --wp--preset--color--base-2: #ffffff;
            --wp--preset--color--contrast: #111111;
            --wp--preset--color--contrast-2: #636363;
            --wp--preset--color--contrast-3: #A4A4A4;
            --wp--preset--color--accent: #cfcabe;
            --wp--preset--color--accent-2: #c2a990;
            --wp--preset--color--accent-3: #d8613c;
            --wp--preset--color--accent-4: #b1c5a4;
            --wp--preset--color--accent-5: #b5bdbc;
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
            --wp--preset--gradient--gradient-1: linear-gradient(to bottom, #cfcabe 0%, #F9F9F9 100%);
            --wp--preset--gradient--gradient-2: linear-gradient(to bottom, #C2A990 0%, #F9F9F9 100%);
            --wp--preset--gradient--gradient-3: linear-gradient(to bottom, #D8613C 0%, #F9F9F9 100%);
            --wp--preset--gradient--gradient-4: linear-gradient(to bottom, #B1C5A4 0%, #F9F9F9 100%);
            --wp--preset--gradient--gradient-5: linear-gradient(to bottom, #B5BDBC 0%, #F9F9F9 100%);
            --wp--preset--gradient--gradient-6: linear-gradient(to bottom, #A4A4A4 0%, #F9F9F9 100%);
            --wp--preset--gradient--gradient-7: linear-gradient(to bottom, #cfcabe 50%, #F9F9F9 50%);
            --wp--preset--gradient--gradient-8: linear-gradient(to bottom, #C2A990 50%, #F9F9F9 50%);
            --wp--preset--gradient--gradient-9: linear-gradient(to bottom, #D8613C 50%, #F9F9F9 50%);
            --wp--preset--gradient--gradient-10: linear-gradient(to bottom, #B1C5A4 50%, #F9F9F9 50%);
            --wp--preset--gradient--gradient-11: linear-gradient(to bottom, #B5BDBC 50%, #F9F9F9 50%);
            --wp--preset--gradient--gradient-12: linear-gradient(to bottom, #A4A4A4 50%, #F9F9F9 50%);
            --wp--preset--font-size--small: 0.9rem;
            --wp--preset--font-size--medium: 1.05rem;
            --wp--preset--font-size--large: clamp(1.39rem, 1.39rem + ((1vw - 0.2rem) * 0.767), 1.85rem);
            --wp--preset--font-size--x-large: clamp(1.85rem, 1.85rem + ((1vw - 0.2rem) * 1.083), 2.5rem);
            --wp--preset--font-size--xx-large: clamp(2.5rem, 2.5rem + ((1vw - 0.2rem) * 1.283), 3.27rem);
            --wp--preset--font-family--body: "Inter", sans-serif;
            --wp--preset--font-family--heading: Cardo;
            --wp--preset--font-family--system-sans-serif: -apple-system, BlinkMacSystemFont, avenir next, avenir, segoe ui, helvetica neue, helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif;
            --wp--preset--font-family--system-serif: Iowan Old Style, Apple Garamond, Baskerville, Times New Roman, Droid Serif, Times, Source Serif Pro, serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
            --wp--preset--spacing--20: min(1.5rem, 2vw);
            --wp--preset--spacing--30: min(2.5rem, 3vw);
            --wp--preset--spacing--40: min(4rem, 5vw);
            --wp--preset--spacing--50: min(6.5rem, 8vw);
            --wp--preset--spacing--60: min(10.5rem, 13vw);
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--spacing--10: 1rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :root {
            --wp--style--global--content-size: 620px;
            --wp--style--global--wide-size: 1280px;
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks {
            padding-top: var(--wp--style--root--padding-top);
            padding-bottom: var(--wp--style--root--padding-bottom);
        }

        .has-global-padding {
            padding-right: var(--wp--style--root--padding-right);
            padding-left: var(--wp--style--root--padding-left);
        }

        .has-global-padding>.alignfull {
            margin-right: calc(var(--wp--style--root--padding-right) * -1);
            margin-left: calc(var(--wp--style--root--padding-left) * -1);
        }

        .has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull)) {
            padding-right: 0;
            padding-left: 0;
        }

        .has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull))>.alignfull {
            margin-left: 0;
            margin-right: 0;
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks)>* {
            margin-block-start: 1.2rem;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks)> :first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks)> :last-child {
            margin-block-end: 0;
        }

        :root {
            --wp--style--block-gap: 1.2rem;
        }

        :root :where(.is-layout-flow)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-flow)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-flow)>* {
            margin-block-start: 1.2rem;
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-constrained)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)>* {
            margin-block-start: 1.2rem;
            margin-block-end: 0;
        }

        :root :where(.is-layout-flex) {
            gap: 1.2rem;
        }

        :root :where(.is-layout-grid) {
            gap: 1.2rem;
        }

        .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        body {
            background-color: var(--wp--preset--color--base);
            color: var(--wp--preset--color--contrast);
            font-family: var(--wp--preset--font-family--body);
            font-size: var(--wp--preset--font-size--medium);
            font-style: normal;
            font-weight: 400;
            line-height: 1.55;
            --wp--style--root--padding-top: 0px;
            --wp--style--root--padding-right: var(--wp--preset--spacing--50);
            --wp--style--root--padding-bottom: 0px;
            --wp--style--root--padding-left: var(--wp--preset--spacing--50);
        }

        a:where(:not(.wp-element-button)) {
            color: var(--wp--preset--color--contrast);
            text-decoration: underline;
        }

        :root :where(a:where(:not(.wp-element-button)):hover) {
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--wp--preset--color--contrast);
            font-family: var(--wp--preset--font-family--heading);
            font-weight: 400;
            line-height: 1.2;
        }

        h1 {
            font-size: var(--wp--preset--font-size--xx-large);
            line-height: 1.15;
        }

        h2 {
            font-size: var(--wp--preset--font-size--x-large);
        }

        h3 {
            font-size: var(--wp--preset--font-size--large);
        }

        h4 {
            font-size: clamp(1.1rem, 1.1rem + ((1vw - 0.2rem) * 0.767), 1.5rem);
        }

        h5 {
            font-size: var(--wp--preset--font-size--medium);
        }

        h6 {
            font-size: var(--wp--preset--font-size--small);
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: var(--wp--preset--color--contrast);
            border-radius: .33rem;
            border-color: var(--wp--preset--color--contrast);
            border-width: 0;
            color: var(--wp--preset--color--base);
            font-family: inherit;
            font-size: var(--wp--preset--font-size--small);
            font-style: normal;
            font-weight: 500;
            line-height: inherit;
            padding-top: 0.6rem;
            padding-right: 1rem;
            padding-bottom: 0.6rem;
            padding-left: 1rem;
            text-decoration: none;
        }

        :root :where(.wp-element-button:hover, .wp-block-button__link:hover) {
            background-color: var(--wp--preset--color--contrast-2);
            border-color: var(--wp--preset--color--contrast-2);
            color: var(--wp--preset--color--base);
        }

        :root :where(.wp-element-button:focus, .wp-block-button__link:focus) {
            background-color: var(--wp--preset--color--contrast-2);
            border-color: var(--wp--preset--color--contrast-2);
            color: var(--wp--preset--color--base);
            outline-color: var(--wp--preset--color--contrast);
            outline-offset: 2px;
            outline-style: dotted;
            outline-width: 1px;
        }

        :root :where(.wp-element-button:active, .wp-block-button__link:active) {
            background-color: var(--wp--preset--color--contrast);
            color: var(--wp--preset--color--base);
        }

        :root :where(.wp-element-caption, .wp-block-audio figcaption, .wp-block-embed figcaption, .wp-block-gallery figcaption, .wp-block-image figcaption, .wp-block-table figcaption, .wp-block-video figcaption) {
            color: var(--wp--preset--color--contrast-2);
            font-family: var(--wp--preset--font-family--body);
            font-size: 0.8rem;
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

        .has-base-color {
            color: var(--wp--preset--color--base) !important;
        }

        .has-base-2-color {
            color: var(--wp--preset--color--base-2) !important;
        }

        .has-contrast-color {
            color: var(--wp--preset--color--contrast) !important;
        }

        .has-contrast-2-color {
            color: var(--wp--preset--color--contrast-2) !important;
        }

        .has-contrast-3-color {
            color: var(--wp--preset--color--contrast-3) !important;
        }

        .has-accent-color {
            color: var(--wp--preset--color--accent) !important;
        }

        .has-accent-2-color {
            color: var(--wp--preset--color--accent-2) !important;
        }

        .has-accent-3-color {
            color: var(--wp--preset--color--accent-3) !important;
        }

        .has-accent-4-color {
            color: var(--wp--preset--color--accent-4) !important;
        }

        .has-accent-5-color {
            color: var(--wp--preset--color--accent-5) !important;
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

        .has-base-background-color {
            background-color: var(--wp--preset--color--base) !important;
        }

        .has-base-2-background-color {
            background-color: var(--wp--preset--color--base-2) !important;
        }

        .has-contrast-background-color {
            background-color: var(--wp--preset--color--contrast) !important;
        }

        .has-contrast-2-background-color {
            background-color: var(--wp--preset--color--contrast-2) !important;
        }

        .has-contrast-3-background-color {
            background-color: var(--wp--preset--color--contrast-3) !important;
        }

        .has-accent-background-color {
            background-color: var(--wp--preset--color--accent) !important;
        }

        .has-accent-2-background-color {
            background-color: var(--wp--preset--color--accent-2) !important;
        }

        .has-accent-3-background-color {
            background-color: var(--wp--preset--color--accent-3) !important;
        }

        .has-accent-4-background-color {
            background-color: var(--wp--preset--color--accent-4) !important;
        }

        .has-accent-5-background-color {
            background-color: var(--wp--preset--color--accent-5) !important;
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

        .has-base-border-color {
            border-color: var(--wp--preset--color--base) !important;
        }

        .has-base-2-border-color {
            border-color: var(--wp--preset--color--base-2) !important;
        }

        .has-contrast-border-color {
            border-color: var(--wp--preset--color--contrast) !important;
        }

        .has-contrast-2-border-color {
            border-color: var(--wp--preset--color--contrast-2) !important;
        }

        .has-contrast-3-border-color {
            border-color: var(--wp--preset--color--contrast-3) !important;
        }

        .has-accent-border-color {
            border-color: var(--wp--preset--color--accent) !important;
        }

        .has-accent-2-border-color {
            border-color: var(--wp--preset--color--accent-2) !important;
        }

        .has-accent-3-border-color {
            border-color: var(--wp--preset--color--accent-3) !important;
        }

        .has-accent-4-border-color {
            border-color: var(--wp--preset--color--accent-4) !important;
        }

        .has-accent-5-border-color {
            border-color: var(--wp--preset--color--accent-5) !important;
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

        .has-gradient-1-gradient-background {
            background: var(--wp--preset--gradient--gradient-1) !important;
        }

        .has-gradient-2-gradient-background {
            background: var(--wp--preset--gradient--gradient-2) !important;
        }

        .has-gradient-3-gradient-background {
            background: var(--wp--preset--gradient--gradient-3) !important;
        }

        .has-gradient-4-gradient-background {
            background: var(--wp--preset--gradient--gradient-4) !important;
        }

        .has-gradient-5-gradient-background {
            background: var(--wp--preset--gradient--gradient-5) !important;
        }

        .has-gradient-6-gradient-background {
            background: var(--wp--preset--gradient--gradient-6) !important;
        }

        .has-gradient-7-gradient-background {
            background: var(--wp--preset--gradient--gradient-7) !important;
        }

        .has-gradient-8-gradient-background {
            background: var(--wp--preset--gradient--gradient-8) !important;
        }

        .has-gradient-9-gradient-background {
            background: var(--wp--preset--gradient--gradient-9) !important;
        }

        .has-gradient-10-gradient-background {
            background: var(--wp--preset--gradient--gradient-10) !important;
        }

        .has-gradient-11-gradient-background {
            background: var(--wp--preset--gradient--gradient-11) !important;
        }

        .has-gradient-12-gradient-background {
            background: var(--wp--preset--gradient--gradient-12) !important;
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

        .has-xx-large-font-size {
            font-size: var(--wp--preset--font-size--xx-large) !important;
        }

        .has-body-font-family {
            font-family: var(--wp--preset--font-family--body) !important;
        }

        .has-heading-font-family {
            font-family: var(--wp--preset--font-family--heading) !important;
        }

        .has-system-sans-serif-font-family {
            font-family: var(--wp--preset--font-family--system-sans-serif) !important;
        }

        .has-system-serif-font-family {
            font-family: var(--wp--preset--font-family--system-serif) !important;
        }

        :root :where(.wp-block-calendar.wp-block-calendar table:where(:not(.has-text-color)) th) {
            background-color: var(--wp--preset--color--contrast-2);
            color: var(--wp--preset--color--base);
            border-color: var(--wp--preset--color--contrast-2)
        }

        :root :where(.wp-block-calendar table:where(:not(.has-text-color)) td) {
            border-color: var(--wp--preset--color--contrast-2)
        }

        :root :where(.wp-block-categories) {
            list-style-type: none;
        }

        :root :where(.wp-block-categories li) {
            margin-bottom: 0.5rem;
        }

        :root :where(.wp-block-post-comments-form textarea, .wp-block-post-comments-form input) {
            border-radius: .33rem
        }

        :root :where(.wp-block-loginout input) {
            border-radius: .33rem;
            padding: calc(0.667em + 2px);
            border: 1px solid #949494;
        }

        :root :where(.wp-block-post-terms .wp-block-post-terms__prefix) {
            color: var(--wp--preset--color--contrast-2);
        }

        :root :where(.wp-block-query-title span) {
            font-style: italic;
        }

        :root :where(.wp-block-quote :where(p)) {
            margin-block-start: 0;
            margin-block-end: calc(var(--wp--preset--spacing--10) + 0.5rem);
        }

        :root :where(.wp-block-quote :where(:last-child)) {
            margin-block-end: 0;
        }

        :root :where(.wp-block-quote.has-text-align-right.is-style-plain, .rtl .is-style-plain.wp-block-quote:not(.has-text-align-center):not(.has-text-align-left)) {
            border-width: 0 2px 0 0;
            padding-left: calc(var(--wp--preset--spacing--20) + 0.5rem);
            padding-right: calc(var(--wp--preset--spacing--20) + 0.5rem);
        }

        :root :where(.wp-block-quote.has-text-align-left.is-style-plain, body:not(.rtl) .is-style-plain.wp-block-quote:not(.has-text-align-center):not(.has-text-align-right)) {
            border-width: 0 0 0 2px;
            padding-left: calc(var(--wp--preset--spacing--20) + 0.5rem);
            padding-right: calc(var(--wp--preset--spacing--20) + 0.5rem)
        }

        :root :where(.wp-block-search .wp-block-search__input) {
            border-radius: .33rem
        }

        :root :where(.wp-block-separator) {}

        :root :where(.wp-block-separator:not(.is-style-wide):not(.is-style-dots):not(.alignwide):not(.alignfull)) {
            width: var(--wp--preset--spacing--60)
        }
    </style>
    <style id='wp-block-template-skip-link-inline-css'>
        .skip-link.screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important;
        }

        .skip-link.screen-reader-text:focus {
            background-color: #eee;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000;
        }
    </style>
    <link rel='stylesheet' id='wdp_style-css'
        href='https://buka.undanganku.store/wp-content/plugins/weddingpress/addons/comment-kit//css/wdp_style.css?ver=2.7.6'
        media='screen' />
    <style id='wdp_style-inline-css'>
        .wdp-wrapper {

            font-size: 14px
        }



        .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-avatar img {

            max-width: 28px;

            max-height: 28px;

        }

        .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content {

            margin-left: 38px;

        }

        .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment ul .wdp-comment-avatar img {

            max-width: 24px;

            max-height: 24px;

        }

        .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment ul ul .wdp-comment-avatar img {

            max-width: 21px;

            max-height: 21px;

        }
    </style>
    <link rel='stylesheet' id='wdp-centered-css-css'
        href='https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/wdp-centered-timeline.min.css?ver=6.6.2'
        media='all' />
    <link rel='stylesheet' id='wdp-horizontal-css-css'
        href='https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/wdp-horizontal-styles.min.css?ver=6.6.2'
        media='all' />
    <link rel='stylesheet' id='wdp-fontello-css-css'
        href='https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/wdp-fontello.css?ver=6.6.2'
        media='all' />
    <link rel='stylesheet' id='exad-main-style-css'
        href='https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/exad-styles.min.css?ver=6.6.2'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='widget-spacer-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-spacer.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='widget-heading-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='widget-divider-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeIn-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/fadeIn.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='e-animation-slideInUp-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/slideInUp.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='elementor-post-7-css'
        href='https://buka.undanganku.store/wp-content/uploads/elementor/css/post-7.css?ver=1730614620'
        media='all' />
    <link rel='stylesheet' id='weddingpress-wdp-css'
        href='https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/wdp.css?ver=3.0.1'
        media='all' />
    <link rel='stylesheet' id='kirim-kit-css'
        href='https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/guest-book.css?ver=3.0.1'
        media='all' />
    <link rel='stylesheet' id='e-animation-zoomIn-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/zoomIn.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInDown-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInDown.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='widget-text-editor-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='widget-counter-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-counter.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='widget-animated-headline-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/widget-animated-headline.min.css?ver=3.25.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-slideInLeft-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/slideInLeft.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='e-animation-slideInRight-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/slideInRight.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='e-animation-slideInDown-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/slideInDown.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='e-shapes-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/conditionals/shapes.min.css?ver=3.25.3'
        media='all' />
    <link rel='stylesheet' id='widget-form-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/widget-form.min.css?ver=3.25.0'
        media='all' />
    <link rel='stylesheet' id='widget-gallery-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/widget-gallery.min.css?ver=3.25.0'
        media='all' />
    <link rel='stylesheet' id='elementor-gallery-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css?ver=1.2.0'
        media='all' />
    <link rel='stylesheet' id='e-transitions-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/conditionals/transitions.min.css?ver=3.25.0'
        media='all' />
    <link rel='stylesheet' id='widget-lottie-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/widget-lottie.min.css?ver=3.25.0'
        media='all' />
    <link rel='stylesheet' id='elementor-post-37573-css'
        href='https://buka.undanganku.store/wp-content/uploads/elementor/css/post-37573.css?ver=1730620683'
        media='all' />
    <link rel='stylesheet' id='elementor-post-23160-css'
        href='https://buka.undanganku.store/wp-content/uploads/elementor/css/post-23160.css?ver=1730614620'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBaskervville%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CQuicksand%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.6.2'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="https://buka.undanganku.store/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://buka.undanganku.store/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://buka.undanganku.store/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://buka.undanganku.store/wp-json/wp/v2/posts/37573" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://buka.undanganku.store/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <link rel='shortlink' href='https://buka.undanganku.store/?p=37573' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://buka.undanganku.store/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbuka.undanganku.store%2Fthema-24%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://buka.undanganku.store/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbuka.undanganku.store%2Fthema-24%2F&#038;format=xml" />
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/uploads/fbrfg/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/uploads/fbrfg/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/uploads/fbrfg/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/uploads/fbrfg/site.webmanifest">
    <link rel="mask-icon" href="/wp-content/uploads/fbrfg/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/wp-content/uploads/fbrfg/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/wp-content/uploads/fbrfg/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="generator"
        content="Elementor 3.25.3; features: e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <style id='wp-fonts-local'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('https://buka.undanganku.store/wp-content/themes/twentytwentyfour/assets/fonts/inter/Inter-VariableFont_slnt,wght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('https://buka.undanganku.store/wp-content/themes/twentytwentyfour/assets/fonts/cardo/cardo_normal_400.woff2') format('woff2');
        }

        @font-face {
            font-family: Cardo;
            font-style: italic;
            font-weight: 400;
            font-display: fallback;
            src: url('https://buka.undanganku.store/wp-content/themes/twentytwentyfour/assets/fonts/cardo/cardo_italic_400.woff2') format('woff2');
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 700;
            font-display: fallback;
            src: url('https://buka.undanganku.store/wp-content/themes/twentytwentyfour/assets/fonts/cardo/cardo_normal_700.woff2') format('woff2');
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body data-rsssl=1
    class="post-template post-template-elementor_canvas single single-post postid-37573 single-format-standard wp-embed-responsive elementor-default elementor-template-canvas elementor-kit-7 elementor-page elementor-page-37573">
    <div data-elementor-type="wp-post" data-elementor-id="37573" class="elementor elementor-37573"
        data-elementor-post-type="post">
                {{-- COVER --}}
                @if (isset($imageOrders) && $imageOrders->isNotEmpty())
                @php $backgroundImage = null; @endphp
                @foreach ($imageOrders as $order)
                    @if (isset($order->image->fileImage) && $order->partName === 'cover')
                        @php
                            $backgroundImage = env('BACKEND_URL') . '/images/' . $order->image->fileImage;
                            break;
                        @endphp
                    @endif
                @endforeach
            @endif
    
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-1630e5b7 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no elementor-invisible"
                data-id="1630e5b7" data-element_type="section"
                data-settings='{
                         "background_background": "slideshow",
                         "animation": "fadeInDown",
                         "animation_mobile": "none",
                         "background_slideshow_gallery": [
                             { "id": 102, "url": "{{ $backgroundImage ?? '' }}" }
                         ],
                         "background_slideshow_ken_burns": "yes",
                         "animation_delay": 200,
                         "background_slideshow_loop": "yes",
                         "background_slideshow_slide_duration": 5000,
                         "background_slideshow_slide_transition": "fade",
                         "background_slideshow_transition_duration": 500,
                         "background_slideshow_ken_burns_zoom_direction": "in"
                     }'
                @if ($backgroundImage) style="background-image: url('{{ $backgroundImage }}'); background-size: cover; background-position: center;"> @endif>
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-64b773b3 wdp-sticky-section-no"
                    data-id="64b773b3" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-77ac5f67 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="77ac5f67" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">The Wedding Of</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6080d49f wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="6080d49f" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    @if ($form->penempatanTulisan == 'Pria')
                                        {{ $form->namaPanggilanPria }} & {{ $form->namaPanggilanWanita }}
                                    @else
                                        {{ $form->namaPanggilanWanita }} & {{ $form->namaPanggilanPria }}
                                    @endif
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-14a04cd1 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center wdp-sticky-section-no elementor-widget elementor-widget-divider"
                            data-id="14a04cd1" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                        <span class="elementor-divider__text elementor-divider__element">
                                            {{ strtoupper($formattedDateAkad) }}     
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-495ab412 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="495ab412" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-56f7e31c wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="56f7e31c" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">SPECIAL INVITATION :</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7a95c478 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="7a95c478" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    {{ $nama_tamu }}
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-611e7774 elementor-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button"
                            data-id="611e7774" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:2}"
                            data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm" href="#cover"
                                        id="tombol-buka">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-envira"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0 32c477.6 0 366.6 317.3 367.1 366.3L448 480h-26l-70.4-71.2c-39 4.2-124.4 34.5-214.4-37C47 300.3 52 214.7 0 32zm79.7 46c-49.7-23.5-5.2 9.2-5.2 9.2 45.2 31.2 66 73.7 90.2 119.9 31.5 60.2 79 139.7 144.2 167.7 65 28 34.2 12.5 6-8.5-28.2-21.2-68.2-87-91-130.2-31.7-60-61-118.6-144.2-158.1z">
                                                    </path>
                                                </svg> </span>
                                            <span class="elementor-button-text">BUKA UNDANGAN</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-92170fe wdp-sticky-section-no elementor-widget elementor-widget-html"
                            data-id="92170fe" data-element_type="widget" data-widget_type="html.default">
                            <div class="elementor-widget-container">
                                <script>
                                    jQuery(document).ready(function($) {
                                        $(document).on('click', '.close-popup', function(event) {
                                            elementorProFrontend.modules.popup.closePopup({}, event);
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-b73ff72 elementor-section-height-min-height animated-slow elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no elementor-invisible"
            data-id="b73ff72" data-element_type="section" id="cover"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_mobile&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}"
            {{-- subcover --}}
            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
                        @if (isset($order->image->fileImage) && $order->partName === 'subcover')
                                style="background-image: url('{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}'); background-size: cover; background-position: center;"> 
                                @endif
            @endforeach
            @endif
            >
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4236b34b wdp-sticky-section-no"
                    data-id="4236b34b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-835042d elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="835042d" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-58d76398 wdp-sticky-section-no"
                                    data-id="58d76398" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-182135f7 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="182135f7" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    {{ $datetimeAkad->format('d') }}
                                                    <br>
                                                    {{ $datetimeAkad->format('m') }}
                                                    <br>
                                                    {{ $datetimeAkad->format('y') }}    
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4c26f19d wdp-sticky-section-no"
                                    data-id="4c26f19d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5f5c1991 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="5f5c1991" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4c311a15 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="4c311a15" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                    {{ strtoupper($form->namaPanggilanPria) }}
                                                @else
                                                    {{ strtoupper($form->namaPanggilanWanita) }}
                                                @endif
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6f286d86 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                            data-id="6f286d86" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                        <span
                                                            class="elementor-divider__text elementor-divider__element">
                                                            AND </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6fa54807 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="6fa54807" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ strtoupper($form->namaPanggilanWanita) }}
                                                    @else
                                                        {{ strtoupper($form->namaPanggilanPria) }}
                                                    @endif
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8d9347 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="8d9347" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">SEMARANG |
                                                    JAWA TENGAH</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-39fd51f wdp-sticky-section-no elementor-widget elementor-widget-html"
                                            data-id="39fd51f" data-element_type="widget"
                                            data-widget_type="html.default">
                                            <div class="elementor-widget-container">
                                                <script>
                                                    var x = document.getElementById("song");
                                                    window.onbeforeunload = function() {
                                                        window.scrollTo(0, 0)
                                                    };
                                                    disableScrolling();
                                                    document.body.style.overflowY = "hidden";
                                                    document.body.style.heigth = "100vh";
                                                    document.getElementById("tombol-buka").onclick = function() {
                                                        myFunction();
                                                        if (bukaCover() !== undefined) {
                                                            bukaCover();
                                                        }
                                                        if (x != null) {
                                                            playAudio();
                                                        }
                                                        if (y != null) {
                                                            toggleAudio();
                                                        }
                                                    };

                                                    function myFunction() {
                                                        document.body.style.overflowY = "unset";
                                                        document.getElementById("tombol-buka").style.visibility = "hidden";
                                                        enableScrolling();
                                                        playAudio();
                                                    }

                                                    function disableScrolling() {
                                                        var x = window.scrollX;
                                                        var y = window.scrollY;
                                                        window.onscroll = function() {
                                                            window.scrollTo(x, y)
                                                        }
                                                    }

                                                    function enableScrolling() {
                                                        window.onscroll = function() {}
                                                    }

                                                    function playAudio() {
                                                        x.play()
                                                    }

                                                    function pauseAudio() {
                                                        x.pause()
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2c5074c5 wdp-sticky-section-no"
                                    data-id="2c5074c5" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-74b7fcf6 wdp-sticky-section-no elementor-widget elementor-widget-html"
                                            data-id="74b7fcf6" data-element_type="widget"
                                            data-widget_type="html.default">
                                            <div class="elementor-widget-container">
                                                <html lang="en" class="notranslate" translate="no">

                                                <head>
                                                    <meta name="google" content="notranslate" />
                                                </head>

                                                </html>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-29b87879 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="29b87879" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4858d1b1 wdp-sticky-section-no"
                    data-id="4858d1b1" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-57ea1626 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="57ea1626" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-28fcb0c elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="28fcb0c" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-541b62a0 wdp-sticky-section-no"
                                    data-id="541b62a0" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7a084921 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="7a084921" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ strtoupper(substr($form->namaPanggilanPria, 0, 1)) }}{{ strtoupper(substr($form->namaPanggilanWanita, 0, 1)) }}
                                                    @else
                                                        {{ strtoupper(substr($form->namaPanggilanWanita, 0, 1)) }}{{ strtoupper(substr($form->namaPanggilanPria, 0, 1)) }}
                                                    @endif
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-33371ef8 wdp-sticky-section-no"
                                    data-id="33371ef8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7749de95 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                            data-id="7749de95" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>&#8220;Maha Suci Allah yang telah menciptakan manusia dengan
                                                    berpasang-pasangan. Dengan memohon Rahmat dan Ridho Allah SWT, kami
                                                    bermaksud mengundang Saudara/i dalam acara resepsi pernikahan
                                                    kami.&#8221;</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-41a456a2 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                            data-id="41a456a2" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p><strong>(QS. Ar-Rum : 21)</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-43e2496f wdp-sticky-section-no"
                                    data-id="43e2496f" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-402ac0a5 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="402ac0a5" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-156d23ff wdp-sticky-section-no"
                    data-id="156d23ff" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-397977e7 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="397977e7" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-674da69f elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="674da69f" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6547e1e9 wdp-sticky-section-no"
                                    data-id="6547e1e9" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3fe8f4f8 wdp-sticky-section-no"
                                    data-id="3fe8f4f8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2a9aeb60 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="2a9aeb60" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">BRIDE |
                                                    GROOM</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ecc486 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="ecc486" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img fetchpriority="high" decoding="async" width="903"
                                                    height="1024"
                                                    {{-- FOTO MEMPELAI --}}
                                                    @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
                                                    @if (isset($order->image->fileImage) && $order->partName === 'mempelai-pria-wanita')
                                                            src="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}"
                                                                                    class="attachment-large size-large wp-image-1614" alt=""
                                                                                    srcset="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}"
                                                                                    sizes="(max-width: 903px) 100vw, 903px" /> @endif
                                                                                                @endforeach
                                                                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7a004b7a wdp-sticky-section-no"
                                    data-id="7a004b7a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-508d8a0c wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="508d8a0c" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1e818f37 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="1e818f37" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                    {{ strtoupper($form->namaLengkapPria) }}
                                                @else
                                                    {{ strtoupper($form->namaLengkapWanita) }}
                                                @endif
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4e71f2b7 elementor-widget-divider--view-line wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-divider"
                                            data-id="4e71f2b7" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-476ef5c1 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                            data-id="476ef5c1" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                                        Putra
                                                                    @else
                                                                        Putri
                                                                    @endif
                                                                    Dari :
                                                                </p>
                                                                <p>
                                                                    @if ($form->penempatanTulisan == 'Pria')
                                                                        {{ $form->namaOrtuPria }}
                                                                    @else
                                                                        {{ $form->namaOrtuWanita }}
                                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7a4a13e3 elementor-align-left elementor-mobile-align-left elementor-tablet-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
                                            data-id="7a4a13e3" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                    href="https://instagram.com{{ $form->usernameIg }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon">
                                                                <i aria-hidden="true"
                                                                    class="icon icon-instagram-2"></i> </span>
                                                            <span class="elementor-button-text">INSTAGRAM</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6e309a21 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="6e309a21" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                                        {{ strtoupper($form->namaLengkapWanita) }}
                                                                    @else
                                                                        {{ strtoupper($form->namaLengkapPria) }}
                                                                    @endif
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-20e7162f elementor-widget-divider--view-line wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-divider"
                                            data-id="20e7162f" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-342624ec wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                            data-id="342624ec" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                    Putri
                                                @else
                                                    Putra
                                                @endif
                                                Dari :
                                            </p>
                                            <p>
                                                @if ($form->penempatanTulisan == 'Pria')
                                                    {{ $form->namaOrtuWanita }}
                                                @else
                                                    {{ $form->namaOrtuPria }}
                                                @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3ac4e7a elementor-align-left elementor-mobile-align-left elementor-tablet-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
                                            data-id="3ac4e7a" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="https://instagram.com{{ $form->usernameIg }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon">
                                                                <i aria-hidden="true"
                                                                    class="icon icon-instagram-2"></i> </span>
                                                            <span class="elementor-button-text">INSTAGRAM</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-b11f3c0 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="b11f3c0" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
            {{-- BG-COUNTDOWN --}}
            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @php $galleryCount = 0; @endphp
            @foreach ($imageOrders as $order)
                @if (isset($order->image->fileImage) && $order->partName === 'background')
                    @php $galleryCount++; @endphp
                    @if ($galleryCount === 1)
                    style="background-image: url('{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}'); background-size: cover; background-position: center;"> 
                        @break @endif
                            @endif
                            @endforeach
                            @endif
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-269847f2 wdp-sticky-section-no"
                    data-id="269847f2" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-69d0335f elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="69d0335f" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1fcb2572 wdp-sticky-section-no"
                                    data-id="1fcb2572" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-775a9909 wdp-sticky-section-no"
                                    data-id="775a9909" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-65dbc626 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="65dbc626" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2
                                                    class="elementor-heading-title elementor-size-default">
                                                    WEDDING
                                                    <br>COUNTDOWN
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-522878b7 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-weddingpress-countdown"
                                            data-id="522878b7" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                            data-widget_type="weddingpress-countdown.default">
                                            <div class="elementor-widget-container">

                                                <div class="wpkoi-elements-countdown-wrapper">
                                                    <div
                                                        class="wpkoi-elements-countdown-container wpkoi-elements-countdown-label-block ">
                                                        <ul id="wpkoi-elements-countdown-522878b7"
                                                            class="wpkoi-elements-countdown-items"
                                                            data-date="{{ $datetimeAkad->format('F d Y g:i:s') }}">

                                                            <li class="wpkoi-elements-countdown-item">
                                                                <div
                                                                    class="wpkoi-elements-countdown-days">
                                                                    <span data-days
                                                                        class="wpkoi-elements-countdown-digits">00</span><span
                                                                        class="wpkoi-elements-countdown-label">Hari</span>
                                                                </div>
                                                            </li>
                                                            <li class="wpkoi-elements-countdown-item">
                                                                <div
                                                                    class="wpkoi-elements-countdown-hours">
                                                                    <span data-hours
                                                                        class="wpkoi-elements-countdown-digits">00</span><span
                                                                        class="wpkoi-elements-countdown-label">Jam</span>
                                                                </div>
                                                            </li>
                                                            <li class="wpkoi-elements-countdown-item">
                                                                <div
                                                                    class="wpkoi-elements-countdown-minutes">
                                                                    <span data-minutes
                                                                        class="wpkoi-elements-countdown-digits">00</span><span
                                                                        class="wpkoi-elements-countdown-label">Menit</span>
                                                                </div>
                                                            </li>
                                                            <li class="wpkoi-elements-countdown-item">
                                                                <div
                                                                    class="wpkoi-elements-countdown-seconds">
                                                                    <span data-seconds
                                                                        class="wpkoi-elements-countdown-digits">00</span><span
                                                                        class="wpkoi-elements-countdown-label">Detik</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>


                                                <script type="text/javascript">
                                                    jQuery(document).ready(function($) {
                                                        'use strict';
                                                        $("#wpkoi-elements-countdown-522878b7").countdown();
                                                    });
                                                </script>

                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-69bfe2a7 elementor-align-center elementor-mobile-align-center elementor-tablet-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="69bfe2a7" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="https://calendar.google.com/calendar/u/0/r/eventedit?text={{ urlencode($form->namaPanggilanPria . ' & ' . $form->namaPanggilanWanita) . ' WEDDING' }}&details=Akad+Nikah+%F0%9F%93%8C%F0%9F%93%86+Hari/Tanggal+:+{{ urlencode($datetimeAkad->format('d, F Y')) }}%E2%8F%B0+Jam+:+{{ urlencode($datetimeAkad->format('h:i A')) }}%F0%9F%8F%A0+Tempat+:+
                                         @if ($form->opsiAkad == 'Pria' || $form->opsiAkad == 'Wanita') {{ urlencode('Rumah Mempelai ' . $form->opsiAkad) }}
                                        @else
                                            {{ urlencode($form->opsiAkad) }} @endif
                                        %F0%9F%93%8D+Alamat+:+{{ urlencode($form->alamatAkad) }}+Resepsi+%F0%9F%93%8C%F0%9F%93%86+Hari/Tanggal+:+{{ urlencode($datetimeResepsi->format('d, F Y')) }}%E2%8F%B0+Jam+:+{{ urlencode($datetimeResepsi->format('h:i A')) }}+-+selesai%F0%9F%8F%A0+Tempat+:+hotel+/+rumah+/+masjid%F0%9F%93%8D+Alamat+:+{{ urlencode($form->alamatResepsi) }}+Ngunduh+Mantu+%F0%9F%93%8C%F0%9F%93%86+Hari/Tanggal+:+{{ urlencode($datetimeResepsi->format('d, F Y')) }}%E2%8F%B0+Jam+:+{{ urlencode($datetimeResepsi->format('h:i A')) }}+-+selesai%F0%9F%8F%A0+Tempat+:+
                                        @if ($form->opsiResepsi == 'Pria' || $form->opsiResepsi == 'Wanita') {{ urlencode('Rumah Mempelai ' . $form->opsiResepsi) }}
                                        @else
                                            {{ urlencode($form->opsiResepsi) }} @endif
                                        %F0%9F%93%8D+Alamat+:+{{ urlencode($form->alamatResepsi) }}&dates={{ $datetimeResepsi->format('Ymd\THis') }}/{{ $datetimeResepsi->copy()->addHours(5)->format('Ymd\THis') }}&location={{ urlencode($form->alamatResepsi) }}&pli=1"
                                                        target="_blank">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-calendar-alt"
                                                                    viewBox="0 0 448 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-button-text">SAVE
                                                                THE DATE</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-39bbd9a1 wdp-sticky-section-no"
                                    data-id="39bbd9a1" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-7139e54a elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="7139e54a" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5e28e089 wdp-sticky-section-no"
                    data-id="5e28e089" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-53d4dfa8 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="53d4dfa8" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5b73563d wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="5b73563d" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">WEDDING <br>SCHEDULE</h2>
                            </div>
                        </div>
                        <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-2163e20f elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                        data-id="2163e20f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-63ae679 wdp-sticky-section-no"
                                data-id="63ae679" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-297b3ef7 wdp-sticky-section-no"
                                data-id="297b3ef7" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9d30a39 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-counter"
                                        data-id="9d30a39" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                        data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.19.0 - 28-02-2024 */
                                                .elementor-counter .elementor-counter-number-wrapper {
                                                    display: flex;
                                                    font-size: 69px;
                                                    font-weight: 600;
                                                    line-height: 1
                                                }

                                                .elementor-counter .elementor-counter-number-prefix,
                                                .elementor-counter .elementor-counter-number-suffix {
                                                    flex-grow: 1;
                                                    white-space: pre-wrap
                                                }

                                                .elementor-counter .elementor-counter-number-prefix {
                                                    text-align: right
                                                }

                                                .elementor-counter .elementor-counter-number-suffix {
                                                    text-align: left
                                                }

                                                .elementor-counter .elementor-counter-title {
                                                    text-align: center;
                                                    font-size: 19px;
                                                    font-weight: 400;
                                                    line-height: 2.5
                                                }
                                            </style>
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-number-wrapper">
                                                    <span
                                                        class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number"
                                                        data-duration="2000"
                                                        data-to-value="{{ $datetimeAkad->format('d') }}"
                                                        data-from-value="0"
                                                        data-delimiter=",">0</span>
                                                    <span
                                                        class="elementor-counter-number-suffix"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1ff04669 wdp-sticky-section-no"
                                data-id="1ff04669" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c7a68ed wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="c7a68ed" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2
                                                class="elementor-heading-title elementor-size-default">
                                                {{ strtoupper($indonesianMonthAkad) }}
                                                <br>
                                                {{ $datetimeAkad->format('Y') }}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                        <div class="elementor-element elementor-element-6d8c019b wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="6d8c019b" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-5341aad5 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                                            data-id="5341aad5" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-327c01cf wdp-sticky-section-no"
                                                    data-id="327c01cf" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-57e9735d wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                                            data-id="57e9735d" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    AKAD NIKAH
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-73f735da elementor-widget-divider--view-line wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-divider"
                                                            data-id="73f735da" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                                            data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-36db1406 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                                            data-id="36db1406" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>
                                                                    {{ $formattedDateAkad }}
                                                                </p>
                                                                <p>{{ $datetimeAkad->format('h:i A') }} &#8211; Selesai
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-41e6d957 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                                            data-id="41e6d957" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p><strong>
                                                                        @if ($form->opsiAkad == 'Pria' || $form->opsiAkad == 'Wanita')
                                                                            Rumah Mempelai {{ $form->opsiAkad }}
                                                                        @else
                                                                            {{ $form->opsiAkad }}
                                                                        @endif
                                                                    </strong></p>
                                                                <p>{{ $form->alamatAkad }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-67b8f2b1 elementor-align-center elementor-mobile-align-center elementor-tablet-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button"
                                                            data-id="67b8f2b1" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}"
                                                            data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a class="elementor-button elementor-button-link elementor-size-sm" target="_blank"
   href="{{ $form->linkSherlokAkad }}" 
   style="color: #A57070; border-color: #A57070;">
    <span class="elementor-button-content-wrapper ig">
        <span class="elementor-button-icon elementor-align-icon-left">
            <svg aria-hidden="true" 
                 class="e-font-icon-svg e-fas-map-marker-alt" 
                 viewBox="0 0 384 512" 
                 xmlns="http://www.w3.org/2000/svg" 
                 style="fill: #A57070;">
                <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
            </svg>
        </span>
        <span class="elementor-button-text">OPEN MAPS</span>
    </span>
</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3a4a97d9 wdp-sticky-section-no"
                                                    data-id="3a4a97d9" data-element_type="column">
                                                    <div class="elementor-widget-wrap">
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-25c9bbdb wdp-sticky-section-no"
                                                    data-id="25c9bbdb" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-4236eb0d wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                                            data-id="4236eb0d" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    RESEPSI</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-11a9a906 elementor-widget-divider--view-line wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-divider"
                                                            data-id="11a9a906" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                                            data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-30911bc0 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                                            data-id="30911bc0" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>
                                                                    {{ $formattedDateResepsi }}
                                                                </p>
                                                                <p>{{ $datetimeResepsi->format('h:i A') }} &#8211;
                                                                    Selesai</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2a2e8911 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                                            data-id="2a2e8911" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p><strong>
                                                                        @if ($form->opsiResepsi == 'Pria' || $form->opsiResepsi == 'Wanita')
                                                                            Rumah Mempelai {{ $form->opsiResepsi }}
                                                                        @else
                                                                            {{ $form->opsiResepsi }}
                                                                        @endif
                                                                    </strong></p>
                                                                <p>{{ $form->alamatResepsi }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7483a378 elementor-align-center elementor-mobile-align-center elementor-tablet-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button"
                                                            data-id="7483a378" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}"
                                                            data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a class="elementor-button elementor-button-link elementor-size-sm" target="_blank"
                                                                    href="{{ $form->linkSherlokResepsi }}" 
                                                                    style="color: #A57070; border-color: #A57070;">
                                                                     <span class="elementor-button-content-wrapper ig">
                                                                         <span class="elementor-button-icon elementor-align-icon-left">
                                                                             <svg aria-hidden="true" 
                                                                                  class="e-font-icon-svg e-fas-map-marker-alt" 
                                                                                  viewBox="0 0 384 512" 
                                                                                  xmlns="http://www.w3.org/2000/svg" 
                                                                                  style="fill: #A57070;">
                                                                                 <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                                                             </svg>
                                                                         </span>
                                                                         <span class="elementor-button-text">OPEN MAPS</span>
                                                                     </span>
                                                                 </a>
                                                                 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                        @if (empty($form->liveYt))
                        @else
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-72bd190c elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                                data-id="72bd190c" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-706143bd wdp-sticky-section-no"
                                        data-id="706143bd" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2e1848a8 wdp-sticky-section-no"
                                        data-id="2e1848a8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2862a309 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                                data-id="2862a309" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-887be4b wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                                data-id="887be4b" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2
                                                        class="elementor-heading-title elementor-size-default">
                                                        LIVE<br>STREAMING</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-29443f85 wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                                data-id="29443f85" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Kami juga berencana untuk mempublikasian
                                                        pernikahan
                                                        kami secara
                                                        virtual melalui Zoom dan Live Instagram yang
                                                        bisa
                                                        anda ikuti melalui
                                                        link berikut :</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-30e489f7 elementor-align-center elementor-mobile-align-center elementor-tablet-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
                                                data-id="30e489f7" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                            href="{{ $form->liveYt }}"
                                                            style="color: #A57070;">
                                                            <span
                                                                class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-icon elementor-align-icon-left">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-camera"
                                                                        viewBox="0 0 512 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill="#A57070"
                                                                            d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="elementor-button-text"
                                                                    style="color: #A57070;">JOIN
                                                                    STREAMING</span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-19b43902 wdp-sticky-section-no"
                                        data-id="19b43902" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-4d096a75 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="4d096a75" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;tilt&quot;}">
            <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z" />
                </svg>
            </div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5e3428e2 wdp-sticky-section-no"
                    data-id="5e3428e2" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-de447f2 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="de447f2" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-40264c7e elementor-headline--style-highlight wdp-sticky-section-no elementor-widget elementor-widget-animated-headline"
                            data-id="40264c7e" data-element_type="widget"
                            data-settings="{&quot;marker&quot;:&quot;underline&quot;,&quot;highlighted_text&quot;:&quot;Our Love Story&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                            data-widget_type="animated-headline.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-headline">
                                    <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                        <span
                                            class="elementor-headline-dynamic-text elementor-headline-text-active">Our
                                            Love Story</span>
                                    </span>
                                </h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-8c10133 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="8c10133" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                                                                {{-- LOVE STORY --}}
                                                                <section
                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-3f7331b5 animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no elementor-invisible"
                                                                data-id="3f7331b5" data-element_type="section"
                                                                data-settings="{&quot;animation&quot;:&quot;slideInDown&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5b0f6080 animated-slow wdp-sticky-section-no elementor-invisible"
                                                                        data-id="5b0f6080" data-element_type="column"
                                                                        data-settings="{&quot;animation&quot;:&quot;slideInLeft&quot;,&quot;animation_mobile&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:30}">
                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                            <div class="elementor-element elementor-element-55a5b128 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                                                                data-id="55a5b128" data-element_type="widget"
                                                                                data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2
                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                        First Meet,</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-6efd8327 elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                                                                data-id="6efd8327" data-element_type="widget"
                                                                                data-widget_type="divider.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-divider">
                                                                                        <span class="elementor-divider-separator">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-1370bf84 wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                                                                data-id="1370bf84" data-element_type="widget"
                                                                                data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <p>
                                                                                        {{ $form->ceritaAwal }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c06b44 animated-slow wdp-sticky-section-no elementor-invisible"
                                                                        data-id="5c06b44" data-element_type="column"
                                                                        data-settings="{&quot;animation&quot;:&quot;slideInRight&quot;,&quot;animation_mobile&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:40}">
                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                            <div class="elementor-element elementor-element-1957f972 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                                                                data-id="1957f972" data-element_type="widget"
                                                                                data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2
                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                        Proposal,</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-1d61ec30 elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                                                                data-id="1d61ec30" data-element_type="widget"
                                                                                data-widget_type="divider.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-divider">
                                                                                        <span class="elementor-divider-separator">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-3ebb9aa3 wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                                                                data-id="3ebb9aa3" data-element_type="widget"
                                                                                data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <p>
                                                                                        {{ $form->ceritaJadian }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-69f0fcb0 animated-slow wdp-sticky-section-no elementor-invisible"
                                                                        data-id="69f0fcb0" data-element_type="column"
                                                                        data-settings="{&quot;animation&quot;:&quot;slideInLeft&quot;,&quot;animation_mobile&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:50}">
                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                            <div class="elementor-element elementor-element-272d4dea wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                                                                data-id="272d4dea" data-element_type="widget"
                                                                                data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2
                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                        Engagement,</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-2915a303 elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                                                                data-id="2915a303" data-element_type="widget"
                                                                                data-widget_type="divider.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-divider">
                                                                                        <span class="elementor-divider-separator">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-c8d540f wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                                                                data-id="c8d540f" data-element_type="widget"
                                                                                data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <p>
                                                                                        {{ $form->ceritaLamaran }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-69784052 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="69784052" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-beb7f03 wdp-sticky-section-no"
                    data-id="beb7f03" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2c65c8d2 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="2c65c8d2" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3c1e16f4 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="3c1e16f4" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-119ce190 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="119ce190" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-478eb753 wdp-sticky-section-no"
                                    data-id="478eb753" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7c89c51b wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="7c89c51b" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
{{-- BG RSVP --}}
@if (isset($imageOrders) && $imageOrders->isNotEmpty())
@php $galleryCount = 0; @endphp
@foreach ($imageOrders as $order)
    @if (isset($order->image->fileImage) && $order->partName === 'background')
        @php $galleryCount++; @endphp
        @if ($galleryCount === 2)
            <img decoding="async" width="1024"
                height="766"
                src="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}"
                class="attachment-large size-large wp-image-1616"
                alt=""
                srcset="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}"
                sizes="(max-width: 1024px) 100vw, 1024px" />
        @break

    @endif
@endif
@endforeach
@endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3932281f wdp-sticky-section-no"
                                    data-id="3932281f" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-778dde7d wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="778dde7d" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">RSVP</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-629e225c wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                            data-id="629e225c" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>*Kepada tamu undangan diharapkan untuk mengisi form kehadiran di
                                                    bawah ini</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6cc95146 elementor-button-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-form"
                                            data-id="6cc95146" data-element_type="widget"
                                            data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                            data-widget_type="form.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /* Loading spinner for button */
                                                    .loading-spinner {
                                                        border: 2px solid #f3f3f3;
                                                        border-radius: 50%;
                                                        border-top: 2px solid #3498db;
                                                        width: 16px;
                                                        height: 16px;
                                                        animation: spin 0.5s linear infinite;
                                                        display: inline-block;
                                                        margin-right: 5px;
                                                    }
                                                
                                                    @keyframes spin {
                                                        0% { transform: rotate(0deg); }
                                                        100% { transform: rotate(360deg); }
                                                    }
                                                
                                                    /* Disable button style */
                                                    .disabled-button {
                                                        opacity: 0.6;
                                                        cursor: not-allowed;
                                                    }
                                                </style>
                                                <form id="rsvpForm" class="elementor-form" method="post" name="rsvpnilamzen">
                                                    @csrf
                                                
                                                    <div class="elementor-form-fields-wrapper elementor-labels-above">
                                                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                                                            <label for="form-field-name" class="elementor-field-label">Nama</label>
                                                            <input size="1" type="text" name="form_fields[name]" id="form-field-name"
                                                                   class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Nama"
                                                                   value="Nama Tamu">
                                                        </div>
                                                        <div class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                                            <label for="form-field-email" class="elementor-field-label">Jumlah</label>
                                                            <input type="number" name="form_fields[email]" id="form-field-email"
                                                                   class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Jumlah"
                                                                   required="required" aria-required="true" min="" max="">
                                                        </div>
                                                        <div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                                            <label for="form-field-message" class="elementor-field-label">Konfirmasi</label>
                                                            <div class="elementor-field elementor-select-wrapper remove-before ">
                                                                <div class="select-caret-down-wrapper">
                                                                    <svg aria-hidden="true" class="e-font-icon-svg e-eicon-caret-down" viewBox="0 0 571.4 571.4"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M571 393Q571 407 561 418L311 668Q300 679 286 679T261 668L11 418Q0 407 0 393T11 368 36 357H536Q550 357 561 368T571 393Z"></path>
                                                                    </svg>
                                                                </div>
                                                                <select name="form_fields[message]" id="form-field-message"
                                                                        class="elementor-field-textual elementor-size-sm">
                                                                    <option value="1">Saya Akan Datang</option>
                                                                    <option value="0">Maaf, Saya Tidak Bisa Datang</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                            <button id="submitBtn" class="elementor-button elementor-size-sm" type="button"> <!-- Added id="submitBtn" -->
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-icon">
                                                                        <svg aria-hidden="true" class="e-font-icon-svg e-far-paper-plane" viewBox="0 0 512 512"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M440 6.5L24 246.4c-34.4 19.9-31.1 70.8 5.7 85.9L144 379.6V464c0 46.4 59.2 65.5 86.6 28.6l43.8-59.1 111.9 46.2c5.9 2.4 12.1 3.6 18.3 3.6 8.2 0 16.3-2.1 23.6-6.2 12.8-7.2 21.6-20 23.9-34.5l59.4-387.2c6.1-40.1-36.9-68.8-71.5-48.9zM192 464v-64.6l36.6 15.1L192 464zm212.6-28.7l-153.8-63.5L391 169.5c10.7-15.5-9.5-33.5-23.7-21.2L155.8 332.6 48 288 464 48l-59.4 387.3z"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <span class="elementor-button-text">SEND</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <script>
                                                    document.getElementById('submitBtn').addEventListener('click', function(event) {
                                                        event.preventDefault();
                                                    
                                                        let form = document.getElementById('rsvpForm');
                                                        let formData = new FormData(form);
                                                        let submitBtn = document.getElementById('submitBtn');
                                                    
                                                        // Show loading spinner and disable button
                                                        submitBtn.disabled = true;
                                                        submitBtn.classList.add('disabled-button');
                                                        submitBtn.innerHTML = '<span class="loading-spinner"></span> Sending...';
                                                    
                                                        // Get the slug from the current URL
                                                        let currentUrl = window.location.href;
                                                        let slug = currentUrl.split('/').pop(); // Assumes slug is at the end of the URL
                                                    
                                                        // Make the fetch request with the slug in the URL
                                                        fetch(`/submit-rsvp/${slug}`, {
                                                            method: 'POST',
                                                            headers: {
                                                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                                                'Accept': 'application/json',
                                                            },
                                                            body: formData
                                                        })
                                                        .then(response => response.json())
                                                        .then(data => {
                                                            if (data.success) {
                                                                form.reset();  // Clear the form after successful submission
                                                                document.getElementById('form-field-name').value = '';
                                                                document.getElementById('form-field-email').value = '';
                                                                document.getElementById('form-field-message').value = '1'; // Reset to default if needed
                                                            }
                                                        })
                                                        .catch(error => {
                                                            console.error('Error:', error);
                                                        })
                                                        .finally(() => {
                                                            // Re-enable button and remove loading spinner
                                                            submitBtn.disabled = false;
                                                            submitBtn.classList.remove('disabled-button');
                                                            submitBtn.innerHTML = 'SEND';
                                                        });
                                                    });
                                                                                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-3740f3b9 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="3740f3b9" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-32af913 wdp-sticky-section-no"
                    data-id="32af913" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5115f890 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="5115f890" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-649b297b elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="649b297b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7f7f6d24 wdp-sticky-section-no"
                                    data-id="7f7f6d24" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7aa82aee wdp-sticky-section-no"
                                    data-id="7aa82aee" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4b44bdce wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="4b44bdce" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">OUR GALLERY
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4d5a9ed9 wdp-sticky-section-no elementor-widget elementor-widget-gallery"
                                            data-id="4d5a9ed9" data-element_type="widget"
                                            data-settings="{&quot;gallery_layout&quot;:&quot;masonry&quot;,&quot;columns_tablet&quot;:3,&quot;columns&quot;:3,&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;lazyload&quot;:&quot;yes&quot;,&quot;columns_mobile&quot;:1,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
                                            data-widget_type="gallery.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-gallery__container">
                                                    @if (isset($imageOrders) && $imageOrders->isNotEmpty())
                                                    @foreach ($imageOrders as $order)
                                                        @if (isset($order->image->fileImage) && $order->partName === 'gallery')
                                                            <a class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                href="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}"
                                                                data-elementor-open-lightbox="yes"
                                                                data-elementor-lightbox-slideshow="4c19c2ea"
                                                                data-elementor-lightbox-title="{{ $order->image->fileImage }}"
                                                                data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MzUxLCJ1cmwiOiJodHRwczpcL1wvYnVrYS51bmRhbmdhbmt1LnN0b3JlXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDI0XC8wM1wvTVRYWF9NUjIwMjMxMDAzXzEyNDA1MTY0NS1zY2FsZWQtNi5qcGciLCJzbGlkZXNob3ciOiI0YzE5YzJlYSJ9">
                                                                <div class="e-gallery-image elementor-gallery-item__image"
                                                                    data-thumbnail="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}"
                                                                    data-width="2045"
                                                                    data-height="2560"
                                                                    aria-label=""
                                                                    role="img"></div>
                                                                <div
                                                                    class="elementor-gallery-item__overlay">
                                                                </div>
                                                            </a>
                                                        @endif
                                                    @endforeach
                                                @endif


                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        const galleryItems = document.querySelectorAll('.e-gallery-image');
                                                        galleryItems.forEach(item => {
                                                            const thumbnailUrl = item.getAttribute('data-thumbnail');
                                                            const img = new Image();
                                                            img.src = thumbnailUrl;
                                                            img.onload = function() {
                                                                item.setAttribute('data-width', img.naturalWidth);
                                                                item.setAttribute('data-height', img.naturalHeight);
                                                            };
                                                        });
                                                    });
                                                </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-457d3d70 wdp-sticky-section-no"
                                    data-id="457d3d70" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
        class="elementor-section elementor-top-section elementor-element elementor-element-599855c5 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
        data-id="599855c5" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
        {{-- BG-GIFT --}}
        @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @php $galleryCount = 0; @endphp
@foreach ($imageOrders as $order)
    @if (isset($order->image->fileImage) && $order->partName === 'background')
        @php $galleryCount++; @endphp
        @if ($galleryCount === 3)
            style="background-image: url('{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}'); background-size: cover; background-position: center;">
            @break @endif
        @endif
        @endforeach
        @endif

        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8869eef wdp-sticky-section-no"
                data-id="8869eef" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-6f8e218f elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                        data-id="6f8e218f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7c606c1b wdp-sticky-section-no"
                                data-id="7c606c1b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-13da3334 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="13da3334" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2
                                                class="elementor-heading-title elementor-size-default">
                                                LOVE<br>GIFT</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-20f416a0 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                        data-id="20f416a0" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Tanpa mengurangi rasa hormat, bagi anda yang ingin
                                                memberikan tanda kasih untuk mempelai, dapat melalui
                                                virtual account atau E-wallet</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a1f3d7f wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                        data-id="a1f3d7f" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Alamat Pengiriman Kado:
                                                {{ $form->alamatHadiah }}<br /><br /></p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-79b3f70a wdp-sticky-section-no elementor-widget elementor-widget-html"
                                        data-id="79b3f70a" data-element_type="widget"
                                        data-widget_type="html.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-element elementor-element-00463b1 reanimate up elementor-widget elementor-widget-html"
                                                data-id="00463b1" data-element_type="widget"
                                                data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    <div class="container">
                                                        <select id="dropdown">
                                                            <option value=" ">PILIH REKENING
                                                            </option>
                                                            <option value="{{ $form->noRek }}">
                                                                {{ $form->namaRekening }}</option>
                                                        </select><button id="copy-btn"
                                                            onclick="copyDropdown()">COPY</button>
                                                    </div>
                                                    <script>
                                                        function copyDropdown() {
                                                            var dropdown = document.getElementById("dropdown");
                                                            var selectedOption = dropdown.options[dropdown.selectedIndex].value;
                                                            var tempInput = document.createElement("input");
                                                            tempInput.value = selectedOption;
                                                            document.body.appendChild(tempInput);
                                                            tempInput.select();
                                                            document.execCommand("copy");
                                                            document.body.removeChild(tempInput);
                                                            alert("Rekening berhasil disalin: " + selectedOption)
                                                        }
                                                    </script>
                                                    <style>
                                                        .container {
                                                            display: flex
                                                        }

                                                        #Dropdown {
                                                            float: left;
                                                            color: #000
                                                        }

                                                        select {
                                                            border-radius: 0;
                                                            font-family: 'roboto' font-weight:700;
                                                            font-size: 11px;
                                                            width: 70%;
                                                            height: 40px;
                                                            border-color: #ffffff;
                                                            color: #aaa;
                                                            background-color: #fff
                                                        }

                                                        select:focus {
                                                            outline: none;
                                                            border-color: #ffffff
                                                        }

                                                        #copy-btn {
                                                            margin-left: 10px;
                                                            float: right;
                                                            border-radius: 0;
                                                            font-family: 'roboto' font-weight:700;
                                                            font-size: 10px;
                                                            border: solid;
                                                            border-width: 1px;
                                                            height: 40px;
                                                            border-color: #ffffff;
                                                            color: #ffffff;
                                                            width: 28%
                                                        }

                                                        #copy-btn:hover {
                                                            border-radius: 0;
                                                            font-family: 'roboto' font-weight:700;
                                                            font-size: 11px;
                                                            height: 40px;
                                                            border-color: #ffffff;
                                                            color: #000000;
                                                            background-color: #ffffff
                                                        }

                                                        #copy-btn:focus {
                                                            outline: none
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-737250fd elementor-align-center elementor-mobile-align-center elementor-tablet-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button"
                                        data-id="737250fd" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                        data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                    href="#">
                                                    <span
                                                        class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-wallet"
                                                                viewBox="0 0 512 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z">
                                                                </path>
                                                            </svg> </span>
                                                        <span class="elementor-button-text">KLIK
                                                            DISINI</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-444d9627 wdp-sticky-section-no"
                                data-id="444d9627" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
    class="elementor-section elementor-top-section elementor-element elementor-element-7bdb1c2 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
    data-id="7bdb1c2" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-24be3530 wdp-sticky-section-no"
            data-id="24be3530" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-3a4911b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                    data-id="3a4911b0" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4552fbb7 wdp-sticky-section-no"
                            data-id="4552fbb7" data-element_type="column">
                            <div class="elementor-widget-wrap">
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-39e9633f wdp-sticky-section-no"
                            data-id="39e9633f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1ecbd228 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                    data-id="1ecbd228" data-element_type="widget"
                                    data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-328a019c wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                    data-id="328a019c" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2
                                            class="elementor-heading-title elementor-size-default">
                                            BEST WISHES FOR
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2c73acea elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-divider"
                                    data-id="2c73acea" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                    data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                                <span
                                                    class="elementor-divider__text elementor-divider__element">
                                                    {{-- BEST WISHES --}}
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ strtoupper($form->namaPanggilanPria) }}
                                                        &
                                                        {{ strtoupper($form->namaPanggilanWanita) }}
                                                    @else
                                                        {{ strtoupper($form->namaPanggilanWanita) }}
                                                        &
                                                        {{ strtoupper($form->namaPanggilanPria) }}
                                                    @endif

                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-40870981 elementor-mobile-align-center elementor-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-weddingpress-guestbook"
                                    data-id="40870981" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                    data-widget_type="weddingpress-guestbook.default">
                                    <div class="elementor-widget-container">


                                        <div class="guestbook-box-content elementor-comment-box-wrapper"
                                            data-id="template11">
                                            <div class="comment-form-container">
                                                <form id="guestbookForm" class="elementor-form" method="post" name="guestbookForm">
                                                    @csrf
                                                    <div class="guestbook-label">
                                                        <label for="guestbook-name" class="">Tamu Undangan</label>
                                                    </div>
                                                    <input type="text" id="guestbook-name" name="guestbook_name" class="form-control" placeholder="Isikan Nama Anda" required>
                                                
                                                    <div class="guestbook-label">
                                                        <label for="guestbook-message" class="">Pesan</label>
                                                    </div>
                                                    <textarea id="guestbook-message" name="guestbook_message" class="form-control" rows="3" placeholder="Berikan Ucapan Dan Doa Restu" required></textarea>
                                                
                                                    <div class="elementor-button-wrapper">
                                                        <button id="submitGuestbookBtn" class="elementor-button-link elementor-button elementor-size-sm" type="button">
                                                            KIRIM UCAPAN
                                                        </button>
                                                    </div>
                                                </form>
                                                
                                            </div>

                                            <div id="hidden-avatar" style="display:none;">
                                                <img decoding="async"
                                                    src="https://buka.undanganku.store/wp-content/uploads/2024/03/avatardefault_92824-2.png"
                                                    title="avatardefault_92824-2.png"
                                                    alt="avatardefault_92824-2.png"
                                                    loading="lazy" />
                                            </div>

                                            <div class="guestbook-list">
                                                <div id="comments-section"></div>
                                            </div>
                                            
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function () {
                                                    const currentUrl = window.location.href;
                                                    const slug = currentUrl.split('/').pop();
                                                
                                                    fetchComments();
                                                
                                                    function fetchComments() {
                                                        fetch(`/comments/${slug}`)
                                                            .then(response => {
                                                                if (!response.ok) {
                                                                    throw new Error('Failed to fetch comments');
                                                                }
                                                                return response.json();
                                                            })
                                                            .then(comments => {
                                                                const commentsContainer = document.getElementById('comments-section');
                                                                commentsContainer.innerHTML = '';
                                                
                                                                comments.forEach(comment => {
                                                                    appendComment(comment);
                                                                });
                                                            })
                                                            .catch(error => console.error('Error fetching comments:', error));
                                                    }
                                                
                                                    function appendComment(comment) {
                                                        const commentsContainer = document.getElementById('comments-section');
                                                        const commentHTML = `
                                                            <div class="user-guestbook">
                                                                <div>
                                                                    <img decoding="async" src="https://buka.undanganku.store/wp-content/uploads/2024/03/avatardefault_92824-2.png" title="avatardefault_92824-2.png" alt="avatardefault_92824-2.png" loading="lazy" />
                                                                </div>
                                                                <div class="guestbook">
                                                                    <a class="guestbook-name">${comment.name}</a>
                                                                    <span class="wdp-confirm"><i class="fas fa-check-circle"></i></span>
                                                                    <div class="guestbook-message">${comment.comment}</div>
                                                                </div>
                                                            </div>
                                                        `;
                                                        commentsContainer.insertAdjacentHTML('afterbegin', commentHTML); // Insert at the top
                                                    }
                                                
                                                    document.getElementById('submitGuestbookBtn').addEventListener('click', function(event) {
                                                        event.preventDefault();
                                                
                                                        const name = document.getElementById('guestbook-name').value;
                                                        const message = document.getElementById('guestbook-message').value;
                                                        const submitBtn = document.getElementById('submitGuestbookBtn');
                                                
                                                        submitBtn.disabled = true;
                                                        submitBtn.innerHTML = '<span class="loading-spinner"></span> Sending...';
                                                
                                                        const formData = {
                                                            name: name,
                                                            comment: message
                                                        };
                                                
                                                        fetch(`/comments/${slug}`, {
                                                            method: 'POST',
                                                            headers: {
                                                                'Content-Type': 'application/json',
                                                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                                                'Accept': 'application/json'
                                                            },
                                                            body: JSON.stringify(formData)
                                                        })
                                                        .then(response => {
                                                            if (!response.ok) {
                                                                throw new Error('Failed to submit comment');
                                                            }
                                                            return response.json();
                                                        })
                                                        .then(newComment => {
                                                            document.getElementById('guestbook-name').value = '';
                                                            document.getElementById('guestbook-message').value = '';
                                                
                                                            appendComment(newComment); // Append the new comment at the top
                                                        })
                                                        .catch(error => console.error('Error submitting comment:', error))
                                                        .finally(() => {
                                                            submitBtn.disabled = false;
                                                            submitBtn.innerHTML = 'KIRIM UCAPAN';
                                                        });
                                                    });
                                                });
                                                </script>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7a8e6944 wdp-sticky-section-no"
                            data-id="7a8e6944" data-element_type="column">
                            <div class="elementor-widget-wrap">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<section
class="elementor-section elementor-top-section elementor-element elementor-element-50375fbc elementor-section-height-min-height elementor-section-items-bottom elementor-section-boxed elementor-section-height-default wdp-sticky-section-no"
data-id="50375fbc" data-element_type="section"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
{{-- BG-FOOTER --}}
@if (isset($imageOrders) && $imageOrders->isNotEmpty()) @php $galleryCount = 0; @endphp
@foreach ($imageOrders as $order)
@if (isset($order->image->fileImage) && $order->partName === 'background')
@php $galleryCount++; @endphp
@if ($galleryCount === 4)
    style="background-image: url('{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}'); background-size: cover; background-position: center;">
    @break @endif
@endif
@endforeach
@endif
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-792a3bf1 wdp-sticky-section-no"
        data-id="792a3bf1" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
            <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-13e5537f elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                data-id="13e5537f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7faedd27 wdp-sticky-section-no"
                        data-id="7faedd27" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-43308e2 elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-fixed animated-slow elementor-view-stacked elementor-shape-circle wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-weddingpress-audio"
                                data-id="43308e2" data-element_type="widget"
                                data-settings="{&quot;_position&quot;:&quot;fixed&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_rotateZ_effect&quot;:&quot;yes&quot;,&quot;motion_fx_rotateZ_direction&quot;:&quot;negative&quot;,&quot;motion_fx_rotateZ_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:1000,&quot;_animation_tablet&quot;:&quot;fadeIn&quot;,&quot;motion_fx_rotateZ_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                data-widget_type="weddingpress-audio.default">
                                <div class="elementor-widget-container">

                                    <script>
                                        var settingAutoplay = '';
                                        window.settingAutoplay = settingAutoplay === 'disable' ? false : true;
                                    </script>

                                    <div id="audio-container" class="audio-box">

                                        <audio id="song" loop>
                                            <source
                                                src="https://buka.undanganku.store/wp-content/uploads/2024/03/y2mate.com-Pengingat-Good-Morning-Everyone-Lirik-Lagu-1-1.mp3"
                                                type="audio/mp3">
                                        </audio>

                                        <div class="elementor-icon-wrapper"
                                            id="unmute-sound" style="display: none;">
                                            <div class="elementor-icon">
                                                <svg aria-hidden="true"
                                                    class="e-font-icon-svg e-far-play-circle"
                                                    viewBox="0 0 512 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="elementor-icon-wrapper"
                                            id="mute-sound" style="display: none;">
                                            <div class="elementor-icon">
                                                <svg aria-hidden="true"
                                                    class="e-font-icon-svg e-fas-compact-disc"
                                                    viewBox="0 0 496 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zM88 256H56c0-105.9 86.1-192 192-192v32c-88.2 0-160 71.8-160 160zm160 96c-53 0-96-43-96-96s43-96 96-96 96 43 96 96-43 96-96 96zm0-128c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5839055a wdp-sticky-section-no"
                        data-id="5839055a" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-3559afc6 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                data-id="3559afc6" data-element_type="widget"
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1ad37163 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                data-id="1ad37163" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Merupakan suatu kebahagiaan dan kehormatan bagi kami,
                                        apabila Bapak/Ibu/Saudara/i, berkenan hadir dan
                                        memberikan do’a restu kepada Kami.</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5912a7c7 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                data-id="5912a7c7" data-element_type="widget"
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-45ea6ca1 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="45ea6ca1" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2
                                        class="elementor-heading-title elementor-size-default">
                                        See You on Our Big Day</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5c48a401 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="5c48a401" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2
                                        class="elementor-heading-title elementor-size-default">
                                        @if ($form->penempatanTulisan == 'Pria')
                                            {{ strtoupper($form->namaPanggilanPria) }}
                                            &amp;
                                            {{ strtoupper($form->namaPanggilanWanita) }}
                                        @else
                                            {{ strtoupper($form->namaPanggilanWanita) }}
                                            &amp;
                                            {{ strtoupper($form->namaPanggilanPria) }}
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-537494d9 wdp-sticky-section-no"
                        data-id="537494d9" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-168aeba5 elementor-mobile-align-center elementor-widget-mobile__width-auto elementor-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-lottie"
                                data-id="168aeba5" data-element_type="widget"
                                data-settings="{&quot;source&quot;:&quot;external_url&quot;,&quot;source_external_url&quot;:{&quot;url&quot;:&quot;https:\/\/assets9.lottiefiles.com\/packages\/lf20_33oraRDqRH.json&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;link_to&quot;:&quot;custom&quot;,&quot;custom_link&quot;:{&quot;url&quot;:&quot;#cover&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                data-widget_type="lottie.default">
                                <div class="elementor-widget-container">
                                    <a class="e-lottie__container__link" href="#cover">
                                        <div class="e-lottie__container">
                                            <div class="e-lottie__animation"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</section>
    </div>
    <div data-elementor-type="popup" data-elementor-id="23160"
        class="elementor elementor-23160 elementor-location-popup"
        data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeIn&quot;,&quot;exit_animation&quot;:&quot;slideInUp&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}"
        data-elementor-post-type="elementor_library">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-569c51b3 elementor-section-height-min-height animated-slow notranslate elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no elementor-invisible"
            data-id="569c51b3" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:1000}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-29a68c7b wdp-sticky-section-no"
                    data-id="29a68c7b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-3b717344 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="3b717344" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c85fbca wdp-sticky-section-no"
                                    data-id="c85fbca" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-61d39cfa wdp-sticky-section-no"
                                    data-id="61d39cfa" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2d1d28e5 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="2d1d28e5" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-222b978 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="222b978" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">THE WEDDING
                                                    OF</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7bef1bad wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="7bef1bad" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">Imron</h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5dd9ce31 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                            data-id="5dd9ce31" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                        <span
                                                            class="elementor-divider__text elementor-divider__element">
                                                            & </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-155147f7 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="155147f7" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">Musyahadah
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a05e124 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="a05e124" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">Kpd Yth:
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-97d4673 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="97d4673" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">Nama Tamu
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-32fc14c close-popup wdp-sticky-section-no elementor-widget elementor-widget-html"
                                            data-id="32fc14c" data-element_type="widget"
                                            data-widget_type="html.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    .button-undangan {
                                                        border: none;
                                                        color: white;
                                                        padding: 5px 10px;
                                                        text-align: center;
                                                        text-decoration: none;
                                                        display: inline-block;
                                                        font-size: 16px;
                                                        margin: 5px 10px;
                                                        transition-duration: 0.4s;
                                                        cursor: pointer;
                                                    }

                                                    .button-undangan {
                                                        background-color: #7a7a7a;
                                                        color: #EEEEEE;
                                                        border: 3px solid #7a7a7a;
                                                    }

                                                    .button-undangan:hover {
                                                        background-color: #F4F4F4;
                                                        color: #7a7a7a;
                                                        border: 2px solid #F4F4F4;
                                                    }
                                                </style>

                                                <center>
                                                    <button onclick="playAudio()" class="button-undangan"><i
                                                            class="fa fa-envelope-open"></i> Buka Undangan
                                                    </button>


                                                </center>
                                                <script>
                                                    var x = document.getElementById("song");
                                                    var y = document.elementorProFrontend.modules.popup.closePopup("{}, event ");

                                                    function playAudio() {
                                                        x.play();
                                                    }

                                                    function pauseAudio() {
                                                        x.pause();
                                                    }
                                                </script>

                                                <script>
                                                    jQuery(document).ready(function($) {
                                                        $(document).on('click', '.close-popup', function(event) {
                                                            elementorProFrontend.modules.popup.closePopup({}, event);
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-579d39a2 wdp-sticky-section-no"
                                    data-id="579d39a2" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-27f1999a wdp-sticky-section-no elementor-widget elementor-widget-html"
                            data-id="27f1999a" data-element_type="widget" data-widget_type="html.default">
                            <div class="elementor-widget-container">
                                <html lang="en" class="notranslate" translate="no">

                                <head>
                                    <meta name="google" content="notranslate" />
                                </head>

                                </html>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-6f4a0116 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="6f4a0116" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-72be7bca wdp-sticky-section-no"
                                    data-id="72be7bca" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4cd1cdf7 wdp-sticky-section-no"
                                    data-id="4cd1cdf7" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7e751d30 wdp-sticky-section-no"
                                    data-id="7e751d30" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-260e5a97 wdp-sticky-section-no"
                                    data-id="260e5a97" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <link rel='stylesheet' id='e-motion-fx-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/modules/motion-fx.min.css?ver=3.25.0'
        media='all' />
    <link rel='stylesheet' id='e-popup-css'
        href='https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/conditionals/popup.min.css?ver=3.25.0'
        media='all' />
    <script id="wp-block-template-skip-link-js-after">
        (function() {
            var skipLinkTarget = document.querySelector('main'),
                sibling,
                skipLinkTargetID,
                skipLink;

            // Early exit if a skip-link target can't be located.
            if (!skipLinkTarget) {
                return;
            }

            /*
             * Get the site wrapper.
             * The skip-link will be injected in the beginning of it.
             */
            sibling = document.querySelector('.wp-site-blocks');

            // Early exit if the root element was not found.
            if (!sibling) {
                return;
            }

            // Get the skip-link target's ID, and generate one if it doesn't exist.
            skipLinkTargetID = skipLinkTarget.id;
            if (!skipLinkTargetID) {
                skipLinkTargetID = 'wp--skip-link--target';
                skipLinkTarget.id = skipLinkTargetID;
            }

            // Create the skip link.
            skipLink = document.createElement('a');
            skipLink.classList.add('skip-link', 'screen-reader-text');
            skipLink.href = '#' + skipLinkTargetID;
            skipLink.innerHTML = 'Skip to content';

            // Inject the skip link.
            sibling.parentElement.insertBefore(skipLink, sibling);
        }());
    </script>
    <script id="wdp_js_script-js-extra">
        var WDP_WP = {
            "ajaxurl": "https:\/\/buka.undanganku.store\/wp-admin\/admin-ajax.php",
            "wdpNonce": "4a4c929660",
            "jpages": "true",
            "jPagesNum": "5",
            "textCounter": "true",
            "textCounterNum": "500",
            "widthWrap": "",
            "autoLoad": "true",
            "thanksComment": "Terima kasih atas ucapan & doanya!",
            "thanksReplyComment": "Terima kasih atas balasannya!",
            "duplicateComment": "You might have left one of the fields blank, or duplicate comments",
            "insertImage": "Insert image",
            "insertVideo": "Insert video",
            "insertLink": "Insert link",
            "checkVideo": "Check video",
            "accept": "Accept",
            "cancel": "Cancel",
            "reply": "Balas",
            "textWriteComment": "Tulis Ucapan & Doa",
            "classPopularComment": "wdp-popular-comment",
            "textUrlImage": "Url image",
            "textUrlVideo": "Url video youtube or vimeo",
            "textUrlLink": "Url link",
            "textToDisplay": "Text to display",
            "textCharacteresMin": "Minimal 2 karakter",
            "textNavNext": "Selanjutnya",
            "textNavPrev": "Sebelumnya",
            "textMsgDeleteComment": "Do you want delete this comment?",
            "textLoadMore": "Load more",
            "textLikes": "Likes"
        };
    </script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/weddingpress/addons/comment-kit//js/wdp_script.js?ver=2.7.6"
        id="wdp_js_script-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/weddingpress/addons/comment-kit//js/libs/jquery.jPages.min.js?ver=0.7"
        id="wdp_jPages-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/weddingpress/addons/comment-kit//js/libs/jquery.textareaCounter.js?ver=2.0"
        id="wdp_textCounter-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/weddingpress/addons/comment-kit//js/libs/jquery.placeholder.min.js?ver=2.0.7"
        id="wdp_placeholder-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/weddingpress/addons/comment-kit//js/libs/autosize.min.js?ver=1.14"
        id="wdp_autosize-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/js/wdp-swiper.min.js"
        id="wdp-swiper-js-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/js/qr-code.js"
        id="weddingpress-qr-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/js/wdp-horizontal.js"
        id="wdp-horizontal-js-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/js/exad-scripts.min.js?ver=3.0.1"
        id="exad-main-script-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1"
        id="jquery-numerator-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0"
        id="elementor-gallery-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/lib/lottie/lottie.min.js?ver=5.6.6"
        id="lottie-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.25.0"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.25.3"
        id="elementor-webpack-runtime-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.25.3"
        id="elementor-frontend-modules-js"></script>
    <script src="https://buka.undanganku.store/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js">
    </script>
    <script src="https://buka.undanganku.store/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/buka.undanganku.store\/wp-admin\/admin-ajax.php",
            "nonce": "f010c0ba4c",
            "urls": {
                "assets": "https:\/\/buka.undanganku.store\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/buka.undanganku.store\/wp-json\/"
            },
            "settings": {
                "lazy_load_background_images": true
            },
            "popup": {
                "hasPopUps": true
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                },
                "x-twitter": {
                    "title": "X"
                },
                "threads": {
                    "title": "Threads"
                }
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/buka.undanganku.store\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script src="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.25.0"
        id="elementor-pro-frontend-js"></script>
    <script src="https://buka.undanganku.store/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js">
    </script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.25.3",
            "is_static": false,
            "experimentalFeatures": {
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_optimized_control_loading": true,
                "e_onboarding": true,
                "e_css_smooth_scroll": true,
                "theme_builder_v2": true,
                "home_screen": true,
                "landing-pages": true,
                "nested-elements": true,
                "editor_v2": true,
                "link-in-bio": true,
                "floating-buttons": true
            },
            "urls": {
                "assets": "https:\/\/buka.undanganku.store\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/buka.undanganku.store\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/buka.undanganku.store\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "3f137af5ae"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 37573,
                "title": "Thema%2024%20-",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="https://buka.undanganku.store/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.25.3"
        id="elementor-frontend-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.25.0"
        id="pro-elements-handlers-js"></script>
    <script id="weddingpress-wdp-js-extra">
        var cevar = {
            "ajax_url": "https:\/\/buka.undanganku.store\/wp-admin\/admin-ajax.php",
            "plugin_url": "https:\/\/buka.undanganku.store\/wp-content\/plugins\/weddingpress\/"
        };
    </script>
    <script src="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/js/wdp.min.js?ver=3.0.1"
        id="weddingpress-wdp-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/js/guest-form.js?ver=3.0.1"
        id="kirim-kit-js"></script>
</body>

</html>
