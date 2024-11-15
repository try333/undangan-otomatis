{{-- TEMA 37 --}}
@php
    use Carbon\Carbon;

    // Parse the datetime fields using Carbon
    $datetimeAkad = Carbon::parse($form->datetimeAkad);
    $datetimeResepsi = Carbon::parse($form->datetimeResepsi);

    $timestamp = $datetimeAkad->timestamp;

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .wdp-comment-text img {

            max-width: 100% !important;

        }
    </style>
    <meta name="robots" content="noindex, nofollow">
    <!-- This site is optimized with the Yoast SEO plugin v23.8 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $form->namaPanggilanPria }} dan {{ $form->namaPanggilanWanita }}">
    <meta property="og:description"
        content="{{ $form->namaPanggilanPria }} &#038; {{ $form->namaPanggilanWanita }}  INVITE YOU TO CELEBRATE AT THEIR WEDDING SPECIAL INVITATION : BUKA UNDANGAN {{ $form->namaPanggilanPria }}  &#038; {{ $form->namaPanggilanWanita }}  Join on Our Big Day {{ $datetimeResepsi->format('d F Y') }} {{ $form->alamatResepsi }} &#8211; PROMISE &#8211; Maha Suci Allah yang telah menciptakan manusia dengan berpasang-pasangan. Dengan memohon Rahmat dan Ridho Allah SWT, kami bermaksud mengundang Saudara/i dalam acara resepsi [&hellip;]">
    <meta property="og:url" content="https://buka.undanganku.store/thema-37/">
    <meta property="article:published_time" content="2024-09-02T09:12:20+00:00">
    <meta property="article:modified_time" content="2024-09-02T09:12:59+00:00">
    <meta property="og:image"
        content="
    @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
            @if (isset($order->image->fileImage) && $order->partName === 'cover')
                {{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}
                @break @endif
        @endforeach
    @endif
">
    <meta name="author" content="Admin">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:label1" content="Written by">
    <meta name="twitter:data1" content="Admin">
    <meta name="twitter:label2" content="Est. reading time">
    <meta name="twitter:data2" content="9 minutes">
    <script type="application/ld+json" class="yoast-schema-graph">
			{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://buka.undanganku.store/thema-37/","url":"https://buka.undanganku.store/thema-37/","name":"Thema 37 -","isPartOf":{"@id":"https://buka.undanganku.store/#website"},"primaryImageOfPage":{"@id":"https://buka.undanganku.store/thema-37/#primaryimage"},"image":{"@id":"https://buka.undanganku.store/thema-37/#primaryimage"},"thumbnailUrl":"https://buka.undanganku.store/wp-content/uploads/2024/03/cew-1-scaled-7.jpg","datePublished":"2024-09-02T09:12:20+00:00","dateModified":"2024-09-02T09:12:59+00:00","author":{"@id":"https://buka.undanganku.store/#/schema/person/5a03783691fee219df468136fff3fdc1"},"breadcrumb":{"@id":"https://buka.undanganku.store/thema-37/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://buka.undanganku.store/thema-37/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://buka.undanganku.store/thema-37/#primaryimage","url":"https://buka.undanganku.store/wp-content/uploads/2024/03/cew-1-scaled-7.jpg","contentUrl":"https://buka.undanganku.store/wp-content/uploads/2024/03/cew-1-scaled-7.jpg","width":2324,"height":2560},{"@type":"BreadcrumbList","@id":"https://buka.undanganku.store/thema-37/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://buka.undanganku.store/"},{"@type":"ListItem","position":2,"name":"Thema 37"}]},{"@type":"WebSite","@id":"https://buka.undanganku.store/#website","url":"https://buka.undanganku.store/","name":"","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://buka.undanganku.store/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"},{"@type":"Person","@id":"https://buka.undanganku.store/#/schema/person/5a03783691fee219df468136fff3fdc1","name":"Admin","image":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://buka.undanganku.store/#/schema/person/image/","url":"https://secure.gravatar.com/avatar/268d5af7a54b201067579b0715452843?s=96&d=mm&r=g","contentUrl":"https://secure.gravatar.com/avatar/268d5af7a54b201067579b0715452843?s=96&d=mm&r=g","caption":"Admin"},"sameAs":["http://sewaundangan.online"],"url":"https://buka.undanganku.store/author/admin/"}]}
		</script> <!-- / Yoast SEO plugin. -->
    <title>Thema 37 -</title>
    <link rel="alternate" type="application/rss+xml" title=" » Feed" href="https://buka.undanganku.store/feed/">
    <link rel="alternate" type="application/rss+xml" title=" » Comments Feed"
        href="https://buka.undanganku.store/comments/feed/">
    <link rel="alternate" type="application/rss+xml" title=" » Thema 37 Comments Feed"
        href="https://buka.undanganku.store/thema-37/feed/">
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/buka.undanganku.store\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7"
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
    <style id="wp-emoji-styles-inline-css">
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
    <style id="wp-block-library-inline-css">
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
    <style id="global-styles-inline-css">
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
    </style>
    <style id="wp-block-template-skip-link-inline-css">
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
    <link rel="stylesheet" id="wdp_style-css"
        href="https://buka.undanganku.store/wp-content/plugins/weddingpress/addons/comment-kit//css/wdp_style.css?ver=2.7.6"
        media="screen">
    <style id="wdp_style-inline-css">
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
    <link rel="stylesheet" id="wdp-centered-css-css"
        href="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/wdp-centered-timeline.min.css?ver=6.7"
        media="all">
    <link rel="stylesheet" id="wdp-horizontal-css-css"
        href="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/wdp-horizontal-styles.min.css?ver=6.7"
        media="all">
    <link rel="stylesheet" id="wdp-fontello-css-css"
        href="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/wdp-fontello.css?ver=6.7"
        media="all">
    <link rel="stylesheet" id="exad-main-style-css"
        href="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/exad-styles.min.css?ver=6.7"
        media="all">
    <link rel="stylesheet" id="elementor-frontend-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="widget-spacer-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-spacer.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="widget-heading-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="widget-divider-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="e-animation-fadeIn-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/fadeIn.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="e-animation-slideInUp-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/slideInUp.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="swiper-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5"
        media="all">
    <link rel="stylesheet" id="e-swiper-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="elementor-post-7-css"
        href="https://buka.undanganku.store/wp-content/uploads/elementor/css/post-7.css?ver=1730614620"
        media="all">
    <link rel="stylesheet" id="weddingpress-wdp-css"
        href="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/wdp.css?ver=3.0.1"
        media="all">
    <link rel="stylesheet" id="kirim-kit-css"
        href="https://buka.undanganku.store/wp-content/plugins/weddingpress/assets/css/guest-book.css?ver=3.0.1"
        media="all">
    <link rel="stylesheet" id="e-animation-zoomIn-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/zoomIn.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="e-animation-fadeInDown-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInDown.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="widget-text-editor-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="e-shapes-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/conditionals/shapes.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="widget-image-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="widget-social-icons-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/widget-social-icons.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="e-apple-webkit-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="e-animation-pulse-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-pulse.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="e-animation-fadeInUp-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.css?ver=3.25.3"
        media="all">
    <link rel="stylesheet" id="widget-countdown-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/widget-countdown.min.css?ver=3.25.0"
        media="all">
    <link rel="stylesheet" id="widget-lottie-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/widget-lottie.min.css?ver=3.25.0"
        media="all">
    <link rel="stylesheet" id="widget-gallery-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/widget-gallery.min.css?ver=3.25.0"
        media="all">
    <link rel="stylesheet" id="elementor-gallery-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css?ver=1.2.0"
        media="all">
    <link rel="stylesheet" id="e-transitions-css"
        href="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/css/conditionals/transitions.min.css?ver=3.25.0"
        media="all">
    <link rel="stylesheet" id="elementor-post-42019-css" href="{{ asset('css/post-42019.css?ver=1730614857') }}"
        media="all">
    <link rel="stylesheet" id="elementor-post-23160-css"
        href="https://buka.undanganku.store/wp-content/uploads/elementor/css/post-23160.css?ver=1730614620"
        media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDidact+Gothic%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CGreat+Vibes%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDosis%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.7"
        media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script src="https://buka.undanganku.store/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://buka.undanganku.store/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://buka.undanganku.store/wp-json/">
    <link rel="alternate" title="JSON" type="application/json"
        href="https://buka.undanganku.store/wp-json/wp/v2/posts/42019">
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://buka.undanganku.store/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.7">
    <link rel="shortlink" href="https://buka.undanganku.store/?p=42019">
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://buka.undanganku.store/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbuka.undanganku.store%2Fthema-37%2F">
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://buka.undanganku.store/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbuka.undanganku.store%2Fthema-37%2F&amp;format=xml">
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
    <style class="wp-fonts-local">
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
</head>

<body data-rsssl="1"
    class="post-template post-template-elementor_canvas single single-post postid-42019 single-format-standard wp-embed-responsive elementor-default elementor-template-canvas elementor-kit-7 elementor-page elementor-page-42019">
    <div data-elementor-type="wp-post" data-elementor-id="42019" class="elementor elementor-42019"
        data-elementor-post-type="post">
        <section {{-- COVER --}}
            class="elementor-section elementor-top-section elementor-element elementor-element-3ff1fd68 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no elementor-invisible"
            data-id="3ff1fd68" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInDown&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:200}"
            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
                        @if (isset($order->image->fileImage) && $order->partName === 'cover')
                                style="background-image: url('{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}');"> @endif
            @endforeach
            @endif
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-502d43e3 wdp-sticky-section-no"
                    data-id="502d43e3" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7d5ee06c wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="7d5ee06c" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    {{-- COVER --}}
                                    @if ($form->penempatanTulisan == 'Pria')
                                        {{ $form->namaPanggilanPria }} & {{ $form->namaPanggilanWanita }}
                                    @else
                                        {{ $form->namaPanggilanWanita }} & {{ $form->namaPanggilanPria }}
                                    @endif
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7ea51dc3 elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                            data-id="7ea51dc3" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider"> <span class="elementor-divider-separator"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7d92b85a elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                            data-id="7d92b85a" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider"> <span class="elementor-divider-separator"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-674c7afb wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="674c7afb" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">INVITE YOU TO CELEBRATE AT
                                    THEIR WEDDING</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6c16ea24 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="6c16ea24" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6354ffbf wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="6354ffbf" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">SPECIAL INVITATION :</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6fe3ba0f wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="6fe3ba0f" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">{{ $nama_tamu }}</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7a0f6ae3 elementor-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button"
                            data-id="7a0f6ae3" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:2}"
                            data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper"> <a
                                        class="elementor-button elementor-button-link elementor-size-sm"
                                        href="#cover" id="tombol-buka"> <span
                                            class="elementor-button-content-wrapper"> <span
                                                class="elementor-button-icon"> <svg aria-hidden="true"
                                                    class="e-font-icon-svg e-fab-envira" viewBox="0 0 448 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0 32c477.6 0 366.6 317.3 367.1 366.3L448 480h-26l-70.4-71.2c-39 4.2-124.4 34.5-214.4-37C47 300.3 52 214.7 0 32zm79.7 46c-49.7-23.5-5.2 9.2-5.2 9.2 45.2 31.2 66 73.7 90.2 119.9 31.5 60.2 79 139.7 144.2 167.7 65 28 34.2 12.5 6-8.5-28.2-21.2-68.2-87-91-130.2-31.7-60-61-118.6-144.2-158.1z">
                                                    </path>
                                                </svg> </span> <span class="elementor-button-text">BUKA UNDANGAN</span>
                                        </span> </a> </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-2577257f elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="2577257f" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-24a2e123 wdp-sticky-section-no"
                                    data-id="24a2e123" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2b141cd9 wdp-sticky-section-no"
                                    data-id="2b141cd9" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-51e3838c wdp-sticky-section-no elementor-widget elementor-widget-html"
                            data-id="51e3838c" data-element_type="widget" data-widget_type="html.default">
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
            class="elementor-section elementor-top-section elementor-element elementor-element-6163a1f6 elementor-section-height-min-height animated-slow notranslate elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no elementor-invisible"
            data-id="6163a1f6" data-element_type="section" id="cover"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_tablet&quot;:&quot;fadeIn&quot;,&quot;animation_mobile&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:450}"
            {{-- subcover --}}
            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
                        @if (isset($order->image->fileImage) && $order->partName === 'subcover')
                                style="background-image: url('{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}');"> @endif
            @endforeach
            @endif

            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-90ec174 wdp-sticky-section-no"
                    data-id="90ec174" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-772d5172 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="772d5172" data-element_type="widget" data-widget_type="heading.default">
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
                        <div class="elementor-element elementor-element-6c51a6ae elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center wdp-sticky-section-no elementor-widget elementor-widget-divider"
                            data-id="6c51a6ae" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider"> <span class="elementor-divider-separator"> <span
                                            class="elementor-divider__text elementor-divider__element"> Join on Our Big
                                            Day </span> </span> </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-17cbfa7 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="17cbfa7" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-22ec13d5 wdp-sticky-section-no elementor-widget elementor-widget-html"
                            data-id="22ec13d5" data-element_type="widget" data-widget_type="html.default">
                            <div class="elementor-widget-container">
                                <meta name="google" content="notranslate">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-96791e3 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="96791e3" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    {{ strtoupper($formattedDateAkad) }}
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-350f75cb wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="350f75cb" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    {{ $form->kota }} - {{ $form->provinsi }}
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7a2386db wdp-sticky-section-no elementor-widget elementor-widget-html"
                            data-id="7a2386db" data-element_type="widget" data-widget_type="html.default">
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
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-49285cc7 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="49285cc7" data-element_type="section"
            data-settings="{&quot;shape_divider_bottom&quot;:&quot;curve-asymmetrical&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
            <div class="elementor-shape elementor-shape-bottom" data-negative="true"> <svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill"
                        d="M615.2,96.7C240.2,97.8,0,18.9,0,0v100h1000V0C1000,19.2,989.8,96,615.2,96.7z"></path>
                </svg> </div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-26dd01d0 wdp-sticky-section-no"
                    data-id="26dd01d0" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1c6212c5 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="1c6212c5" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2bd4817f animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="2bd4817f" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">- PROMISE -</h2>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-239d6a98 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="239d6a98" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-51dcfd17 wdp-sticky-section-no"
                                    data-id="51dcfd17" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6ec9719c animated-slow wdp-sticky-section-no elementor-invisible"
                                    data-id="6ec9719c" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInDown&quot;,&quot;animation_mobile&quot;:&quot;fadeInDown&quot;,&quot;animation_delay&quot;:80}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-680849a wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="680849a" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Maha Suci Allah yang telah menciptakan manusia dengan
                                                    berpasang-pasangan. Dengan memohon Rahmat dan Ridho Allah SWT, kami
                                                    bermaksud mengundang Saudara/i dalam acara resepsi pernikahan kami.
                                                </p>
                                                <p>&nbsp;</p>
                                                <p><em><strong>(QS Ar-Rum : 21)</strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4440989 wdp-sticky-section-no"
                                    data-id="4440989" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-68ddf417 elementor-section-height-min-height elementor-section-full_width elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="68ddf417" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5c105089 wdp-sticky-section-no"
                    data-id="5c105089" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-539409ce wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="539409ce" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4f5ab1ce animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="4f5ab1ce" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:80}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">ARE GETTING MARRIED</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-514fa27d animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="514fa27d" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:80}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">- GROOM AND BRIDE -</h2>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7cbf8fa elementor-section-height-min-height elementor-section-boxed elementor-section-height-default wdp-sticky-section-no"
                            data-id="7cbf8fa" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2120b9bc wdp-sticky-section-no"
                                    data-id="2120b9bc" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4fb3fdb5 animated-slow wdp-sticky-section-no elementor-invisible"
                                    data-id="4fb3fdb5" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:45}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-61e2f944 animated-fast wdp-sticky-section-no elementor-widget elementor-widget-image"
                                            data-id="61e2f944" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_rotateZ_effect&quot;:&quot;yes&quot;,&quot;motion_fx_rotateZ_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:45,&quot;end&quot;:58}},&quot;motion_fx_rotateZ_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img fetchpriority="high"
                                                    decoding="async" width="272" height="300"
                                                    class="attachment-medium size-medium wp-image-345" alt=""
                                                    {{-- FOTO MEMPELAI --}}
                                                    @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                    @if (isset($order->image->fileImage) && $order->partName === 'mempelai-pria')
                                                            src="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}" /> @endif
                                                @else
                                                    @if (isset($order->image->fileImage) && $order->partName === 'mempelai-wanita') src="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}" /> @endif
                                                    @endif
                                                @endforeach
                                                @endif

                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2953c3af wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="2953c3af" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    -
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ $form->namaLengkapPria }}
                                                    @else
                                                        {{ $form->namaLengkapWanita }}
                                                    @endif
                                                    -
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7cf0448b wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="7cf0448b" data-element_type="widget"
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
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-51fa6663 elementor-widget elementor-widget-text-editor"
                                            data-id="51fa6663" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ $form->namaOrtuPria }}
                                                    @else
                                                        {{ $form->namaOrtuWanita }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-32b9adfb elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                            data-id="32b9adfb" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider"> <span
                                                        class="elementor-divider-separator"> </span> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-10e9464f wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="10e9464f" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p class="m-0">
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ $form->alamatPria }}
                                                    @else
                                                        {{ $form->alamatWanita }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-70d16b8d elementor-shape-square elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons"
                                            data-id="70d16b8d" data-element_type="widget"
                                            data-widget_type="social-icons.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-social-icons-wrapper elementor-grid"> <span
                                                        class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-96b8df3"
                                                            href="https://instagram.com/{{ $form->usernameIg }}"
                                                            target="_blank"> <span
                                                                class="elementor-screen-only">Instagram</span> <svg
                                                                class="e-font-icon-svg e-fab-instagram"
                                                                viewBox="0 0 448 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                                </path>
                                                            </svg> </a> </span>
                                                    {{-- <span class="elementor-grid-item"> <a
                                                            class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-5d238e2"
                                                            target="_blank"> <span
                                                                class="elementor-screen-only">Twitter</span> <svg
                                                                class="e-font-icon-svg e-fab-twitter"
                                                                viewBox="0 0 512 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                </path>
                                                            </svg> </a> </span>  --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-37fa8242 animated-slow wdp-sticky-section-no elementor-invisible"
                                    data-id="37fa8242" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:45}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-25b65e04 animated-fast wdp-sticky-section-no elementor-widget elementor-widget-image"
                                            data-id="25b65e04" data-element_type="widget"
                                            data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_rotateZ_effect&quot;:&quot;yes&quot;,&quot;motion_fx_rotateZ_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:45,&quot;end&quot;:58}},&quot;_animation&quot;:&quot;none&quot;,&quot;motion_fx_rotateZ_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img decoding="async" width="272" height="300"
                                                    class="attachment-medium size-medium wp-image-346" alt=""
                                                    {{-- FOTO MEMPELAI --}}
                                                    @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
                                                @if ($form->penempatanTulisan == 'Pria')
                                                @if (isset($order->image->fileImage) && $order->partName === 'mempelai-wanita')
                                                        src="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}" /> @endif
                                                @else
                                                    @if (isset($order->image->fileImage) && $order->partName === 'mempelai-pria') src="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}" /> @endif
                                                    @endif
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-72e19f6e wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="72e19f6e" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    -
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ $form->namaLengkapWanita }}
                                                    @else
                                                        {{ $form->namaLengkapPria }}
                                                    @endif
                                                    -
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-c06f17 wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="c06f17" data-element_type="widget"
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
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3f2537c8 elementor-widget elementor-widget-text-editor"
                                            data-id="3f2537c8" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ $form->namaOrtuWanita }}
                                                    @else
                                                        {{ $form->namaOrtuPria }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7f7abf4b elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                            data-id="7f7abf4b" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider"> <span
                                                        class="elementor-divider-separator"> </span> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5a80cf9 wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="5a80cf9" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ $form->alamatWanita }}
                                                    @else
                                                        {{ $form->alamatPria }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a6cea23 elementor-shape-square elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons"
                                            data-id="a6cea23" data-element_type="widget"
                                            data-widget_type="social-icons.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-social-icons-wrapper elementor-grid"> <span
                                                        class="elementor-grid-item"> <a
                                                            class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-96b8df3"
                                                            href="https://instagram.com/{{ $form->usernameIg }}"
                                                            target="_blank"> <span
                                                                class="elementor-screen-only">Instagram</span> <svg
                                                                class="e-font-icon-svg e-fab-instagram"
                                                                viewBox="0 0 448 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                                </path>
                                                            </svg> </a> </span>
                                                    {{-- <span class="elementor-grid-item"> <a
                                                            class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-5d238e2"
                                                            target="_blank"> <span
                                                                class="elementor-screen-only">Twitter</span> <svg
                                                                class="e-font-icon-svg e-fab-twitter"
                                                                viewBox="0 0 512 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                </path>
                                                            </svg> </a> </span>  --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-39e06cbb wdp-sticky-section-no"
                                    data-id="39e06cbb" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-ed8e0d2 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="ed8e0d2" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" {{-- BG-MAIN --}}
            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @php $galleryCount = 0; @endphp
@foreach ($imageOrders as $order)
@if (isset($order->image->fileImage) && $order->partName === 'background')
@php $galleryCount++; @endphp
@if ($galleryCount === 1)
    style="background-image: url('{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}');">
    @break @endif
            @endif
            @endforeach
            @endif
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-14290ba2 wdp-sticky-section-no"
                    data-id="14290ba2" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1b9ffc15 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="1b9ffc15" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:30,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">We are going to</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-55c96a6a animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="55c96a6a" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Celebrate Our Love</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-14f2ac5c elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
                            data-id="14f2ac5c" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper"> <a
                                        class="elementor-button elementor-button-link elementor-size-xs"
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
                                        <span class="elementor-button-content-wrapper"> <span
                                                class="elementor-button-icon"> <svg aria-hidden="true"
                                                    class="e-font-icon-svg e-fas-calendar-check" viewBox="0 0 448 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M436 160H12c-6.627 0-12-5.373-12-12v-36c0-26.51 21.49-48 48-48h48V12c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v52h128V12c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v52h48c26.51 0 48 21.49 48 48v36c0 6.627-5.373 12-12 12zM12 192h424c6.627 0 12 5.373 12 12v260c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V204c0-6.627 5.373-12 12-12zm333.296 95.947l-28.169-28.398c-4.667-4.705-12.265-4.736-16.97-.068L194.12 364.665l-45.98-46.352c-4.667-4.705-12.266-4.736-16.971-.068l-28.397 28.17c-4.705 4.667-4.736 12.265-.068 16.97l82.601 83.269c4.667 4.705 12.265 4.736 16.97.068l142.953-141.805c4.705-4.667 4.736-12.265.068-16.97z">
                                                    </path>
                                                </svg> </span> <span class="elementor-button-text">Save The Date</span>
                                        </span> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-744a7d6b elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="744a7d6b" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3f8845e2 wdp-sticky-section-no"
                    data-id="3f8845e2" data-element_type="column">
                    <div class="elementor-widget-wrap"> </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2bb59d57 wdp-sticky-section-no"
                    data-id="2bb59d57" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-426e739e wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="426e739e" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4c873d5 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="4c873d5" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:30}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">CEREMONY &amp; PARTY</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2595ed9d animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="2595ed9d" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:40}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">- THE WEDDING EVENT -</h2>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-632ac877 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="632ac877" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4939e79a wdp-sticky-section-no"
                                    data-id="4939e79a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2fa9178a animated-slow elementor-widget-divider--view-line wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-divider"
                                            data-id="2fa9178a" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:45}"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider"> <span
                                                        class="elementor-divider-separator"> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-752c693b wdp-sticky-section-no"
                                    data-id="752c693b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-6ac6d36f animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="6ac6d36f" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;pulse&quot;,&quot;_animation_delay&quot;:45}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">DON'T MISS
                                                    IT</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-39594c87 wdp-sticky-section-no"
                                    data-id="39594c87" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-19af96f5 animated-slow elementor-widget-divider--view-line wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-divider"
                                            data-id="19af96f5" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:45}"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider"> <span
                                                        class="elementor-divider-separator"> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-4ae5f7e0 animated-slow elementor-countdown--label-block wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-countdown"
                            data-id="4ae5f7e0" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:50}"
                            data-widget_type="countdown.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-countdown-wrapper" data-date="{{ $timestamp }}">
                                    <div class="elementor-countdown-item"><span
                                            class="elementor-countdown-digits elementor-countdown-days"></span> <span
                                            class="elementor-countdown-label">Days</span></div>
                                    <div class="elementor-countdown-item"><span
                                            class="elementor-countdown-digits elementor-countdown-hours"></span> <span
                                            class="elementor-countdown-label">Hours</span></div>
                                    <div class="elementor-countdown-item"><span
                                            class="elementor-countdown-digits elementor-countdown-minutes"></span>
                                        <span class="elementor-countdown-label">Minutes</span>
                                    </div>
                                    <div class="elementor-countdown-item"><span
                                            class="elementor-countdown-digits elementor-countdown-seconds"></span>
                                        <span class="elementor-countdown-label">Seconds</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-4cf387b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="4cf387b3" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-37034209 animated-slow wdp-sticky-section-no elementor-invisible"
                                    data-id="37034209" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:55}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3b37f36e wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="3b37f36e" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-15e5113e wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="15e5113e" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Akad Nikah
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-740e58da elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                            data-id="740e58da" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider"> <span
                                                        class="elementor-divider-separator"> </span> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-757a16a5 wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="757a16a5" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    <b>{{ $datetimeAkad->format('d, F Y') }}</b>
                                                    <br>
                                                    {{ $datetimeAkad->format('h:i A') }}
                                                    &#8211; Selesai
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-476e2e55 elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                            data-id="476e2e55" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider"> <span
                                                        class="elementor-divider-separator"> </span> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4427c9cf wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="4427c9cf" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    <b>
                                                        @if ($form->opsiAkad == 'Pria' || $form->opsiAkad == 'Wanita')
                                                            Rumah Mempelai {{ $form->opsiAkad }}
                                                        @else
                                                            {{ $form->opsiAkad }}
                                                        @endif

                                                    </b>
                                                    <br>
                                                    {{ $form->alamatAkad }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f7e5e3d elementor-button-success elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
                                            data-id="f7e5e3d" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a
                                                        class="elementor-button elementor-button-link elementor-size-xs"
                                                        href="https://www.google.co.id/maps/place/Jl.+Prof.+DR.+Drs+Notonagoro,+Karang+Malang,+Caturtunggal,+Kec.+Depok,+Kabupaten+Sleman,+Daerah+Istimewa+Yogyakarta+55281/@-7.7745013,110.3785049,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a59b4fe07a7f9:0x2f7c4fd3d72616bb!8m2!3d-7.7745013!4d110.3806936">
                                                        <span class="elementor-button-content-wrapper"> <span
                                                                class="elementor-button-icon"> <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-map-marker-alt"
                                                                    viewBox="0 0 384 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                                    </path>
                                                                </svg> </span> <span class="elementor-button-text">Open
                                                                Maps</span> </span> </a> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-65e9ae45 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="65e9ae45" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1f7b7881 wdp-sticky-section-no"
                                    data-id="1f7b7881" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3c8ed00e wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="3c8ed00e" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-35d9580a elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-lottie"
                                            data-id="35d9580a" data-element_type="widget"
                                            data-settings="{&quot;source&quot;:&quot;external_url&quot;,&quot;source_external_url&quot;:{&quot;url&quot;:&quot;https:\/\/assets8.lottiefiles.com\/packages\/lf20_dj5wyazf.json&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
                                            data-widget_type="lottie.default">
                                            <div class="elementor-widget-container">
                                                <div class="e-lottie__container">
                                                    <div class="e-lottie__animation"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-58ebed5e animated-slow wdp-sticky-section-no elementor-invisible"
                                    data-id="58ebed5e" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:50}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-324f21c3 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="324f21c3" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-67512a0e wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="67512a0e" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Resepsi</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-c76c07f elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                            data-id="c76c07f" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider"> <span
                                                        class="elementor-divider-separator"> </span> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-23aca0db wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="23aca0db" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    <b>{{ $datetimeResepsi->format('d, F Y') }}</b>
                                                    <br>
                                                    {{ $datetimeResepsi->format('h:i A') }}
                                                    &#8211; Selesai
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-16c036c elementor-widget-divider--view-line wdp-sticky-section-no elementor-widget elementor-widget-divider"
                                            data-id="16c036c" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider"> <span
                                                        class="elementor-divider-separator"> </span> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7cbfaa61 wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="7cbfaa61" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    <b>
                                                        @if ($form->opsiResepsi == 'Pria' || $form->opsiResepsi == 'Wanita')
                                                            Rumah Mempelai {{ $form->opsiResepsi }}
                                                        @else
                                                            {{ $form->opsiResepsi }}
                                                        @endif

                                                    </b>
                                                    <br>
                                                    {{ $form->alamatResepsi }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6be3a53e elementor-button-success elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
                                            data-id="6be3a53e" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a
                                                        class="elementor-button elementor-button-link elementor-size-xs"
                                                        href="https://www.google.co.id/maps/place/Gowongan,+Kec.+Jetis,+Kota+Yogyakarta,+Daerah+Istimewa+Yogyakarta/@-7.7860401,110.3624416,16z/data=!3m1!4b1!4m5!3m4!1s0x2e7a582ff92a924d:0x5323bda9ddc34e7a!8m2!3d-7.784509!4d110.3651385">
                                                        <span class="elementor-button-content-wrapper"> <span
                                                                class="elementor-button-icon"> <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-map-marker-alt"
                                                                    viewBox="0 0 384 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                                    </path>
                                                                </svg> </span> <span class="elementor-button-text">Open
                                                                Maps</span> </span> </a> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-37aee506 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="37aee506" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-63192684 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="63192684" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1caf15a wdp-sticky-section-no"
                                    data-id="1caf15a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2dc966cb wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="2dc966cb" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3b91c26d animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="3b91c26d" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:40}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">- RSVP -
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-40d69f43 wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="40d69f43" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>*Kepada tamu undangan diharapkan untuk mengisi&nbsp; form kehadiran
                                                    di bawah ini</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6f7fa07f wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-forms"
                                            data-id="6f7fa07f" data-element_type="widget"
                                            data-widget_type="weddingpress-forms.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="elementor-wdp-form-wrapper elementor-wdp-form-button-align-fullwidth">
                                                    <form id="rsvpForm" class="wdp-form wdp-wa-form"
                                                        id="wdp-wa-form-6f7fa07f" method="post" name="rsvpnilamzen">
                                                        @csrf

                                                        <div class="wdp-form-fields-wrapper">
                                                            <div class="wdp-form-field-nama"> <label
                                                                    for="wdp-form-nama-6f7fa07f" class=""> Nama
                                                                </label> <input type="text"
                                                                    name="form_fields[name]" id="form-field-name"
                                                                    class="wdp-form-nama" placeholder=""
                                                                    value="" required>
                                                            </div>
                                                            <div class="wdp-form-field-jumlah"> <label
                                                                    for="wdp-form-jumlah-6f7fa07f" class="">
                                                                    Jumlah </label>
                                                                <input name="form_fields[email]" id="form-field-email"
                                                                    class="wdp-form-jumlah" type="text"
                                                                    placeholder="" value="" pattern="[0-9]*"
                                                                    required>
                                                            </div> <input name="wdp-form-pesan" class="wdp-form-pesan"
                                                                id="wdp-form-pesan-6f7fa07f" type="hidden"
                                                                value="hide">
                                                            <div class="wdp-form-field-option wdp-option-type-select">
                                                                <label
                                                                    for="wdp-form-option-6f7fa07f wdp-form-option-6f7fa07f"
                                                                    class=" "> Konfirmasi </label>
                                                                <select name="form_fields[message]"
                                                                    id="form-field-message"
                                                                    class="wdp-form-option wdp-form-option"
                                                                    required="1">
                                                                    <option value="1" selected="selected">Saya
                                                                        Akan Datang</option>
                                                                    <option value="0">Maaf,
                                                                        Saya Tidak Bisa Datang</option>
                                                                </select>
                                                            </div>
                                                            <div class="wdp-form-field-submit"> <button type="button"
                                                                    class="wdp-form-button" id="submitBtn"> Kirim
                                                                </button> </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <script>
                                                    document.getElementById('submitBtn').addEventListener('click', function(event) {
                                                        event.preventDefault();

                                                        let form = document.getElementById('rsvpForm');
                                                        let formData = new FormData(form);
                                                        let submitBtn = document.getElementById('submitBtn');

                                                        // Show loading spinner and disable button
                                                        submitBtn.disabled = true;
                                                        submitBtn.classList.add('disabled-button');
                                                        submitBtn.innerHTML = '<span class="loading-spinner"></span> Mengirim...';

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
                                                                    form.reset(); // Clear the form after successful submission
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
                                                                submitBtn.innerHTML = 'Kirim';
                                                            });
                                                    });
                                                </script>
                                                <script>
                                                    ! function(t, r) {
                                                        "use strict";

                                                        function n(e, a) {
                                                            var t, r = e.find(".wdp-form-nama"),
                                                                n = e.find(".wdp-form-option"),
                                                                o = e.find(".lp-form-user-phone"),
                                                                d = e.find(".wdp-form-pesan"),
                                                                p = e.find(".wdp-form-jumlah"),
                                                                c = e.data("waapi");
                                                            if (a ? (r = r[0].value, d = d[0].value, p = p[0].value, o = o[0].value) : (r = r.val(), o = o.val(), d = d
                                                                    .val(), p = p.val()), r && n && d && c) {
                                                                if (1 < n.length)
                                                                    for (var f = 0; f < n.length; f++) "radio" === n[f].type && n[f].checked && (t = n[f].value);
                                                                else t = n.val();
                                                                return t && (c = c.replace("%25option%25", encodeURI(t))), r && (c = c.replace("%25nama%25", encodeURI(
                                                                    r))), d && (c = c.replace("%25pesan%25", encodeURI(d))), p && (c = c.replace("%25jumlah%25",
                                                                    encodeURI(p))), o && (o = o.replace(/^8/g, "08").replace(/^0/g, "0").replace(/^620/g, "62")
                                                                    .replace(/^0/g, "62"), c = c.replace("[whatsapp_number]", o)), e.attr("data-waapi", c), c
                                                            }
                                                            return c
                                                        }
                                                        t("#wdp-wa-form-6f7fa07f").on("change keypress keyup", function(e) {
                                                            n(t(this), !0)
                                                        }).submit(e => {
                                                            e.preventDefault(), e.stopPropagation();
                                                            var a = n(t(e.target), !1);
                                                            setTimeout(function() {
                                                                r.location = a
                                                            }, 1e3)
                                                        })
                                                    }(jQuery, window);
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a0c97b5 wdp-sticky-section-no"
                    data-id="a0c97b5" data-element_type="column">
                    <div class="elementor-widget-wrap"> </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-2aadee23 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="2aadee23" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;tilt&quot;}">
            <div class="elementor-shape elementor-shape-bottom" data-negative="false"> <svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z"></path>
                </svg> </div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6762ed49 wdp-sticky-section-no"
                    data-id="6762ed49" data-element_type="column">
                    <div class="elementor-widget-wrap"> </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1d6dbe34 wdp-sticky-section-no"
                    data-id="1d6dbe34" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-d93f50d wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="d93f50d" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-62ab6c57 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="62ab6c57" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:30}"
                            data-widget_type="heading.default">
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
                        <div class="elementor-element elementor-element-e4873fa animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="e4873fa" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:40}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">- OUR LOVE STORY -</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6dd12763 wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-timeline"
                            data-id="6dd12763" data-element_type="widget"
                            data-widget_type="weddingpress-timeline.default">
                            <div class="elementor-widget-container">
                                <div class="twae-vertical twae-wrapper twae-one-sided-wrapper">
                                    <div
                                        class="twae-timeline-centered twae-timeline-sm twae-line twae-one-sided-timeline">
                                        <article class="twae-timeline-entry twae-right-aligned">
                                            <div class="twae-timeline-entry-inner"> <time
                                                    class="twae-label-extra-label"> <span class="twae-label">First
                                                        Meet</span> <span class="twae-extra-label"></span>
                                                </time>
                                                <div class="twae-bg-orange twae-icon"><i aria-hidden="true"
                                                        class="fas fa-heart"></i></div>
                                                <div class="twae-bg-orange twae-data-container"> <span
                                                        class="twae-title"></span>
                                                    <div class="twae-timeline-img"><img decoding="async"
                                                            width="118" height="150"
                                                            class="attachment-thumbnail size-thumbnail"
                                                            alt="" {{-- AWAL KETEMU --}}
                                                            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
                                                    @if (isset($order->image->fileImage) && $order->partName === 'awal-ketemu')
                                                            src="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}"> @endif
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="twae-description">
                                                        <p>{{ $form->ceritaAwal }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="twae-timeline-entry twae-right-aligned">
                                            <div class="twae-timeline-entry-inner"> <time
                                                    class="twae-label-extra-label"> <span
                                                        class="twae-label">Proposal</span> <span
                                                        class="twae-extra-label"></span> </time>
                                                <div class="twae-bg-orange twae-icon"><i aria-hidden="true"
                                                        class="fas fa-heart"></i></div>
                                                <div class="twae-bg-orange twae-data-container"> <span
                                                        class="twae-title"></span>
                                                    <div class="twae-timeline-img"><img loading="lazy"
                                                            decoding="async" width="131" height="150"
                                                            class="attachment-thumbnail size-thumbnail"
                                                            alt="" {{-- JADIAN --}}
                                                            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
                                                            @if (isset($order->image->fileImage) && $order->partName === 'jadian')
                                                                    src="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}"> @endif
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="twae-description">
                                                        <p>{{ $form->ceritaJadian }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="twae-timeline-entry twae-right-aligned">
                                            <div class="twae-timeline-entry-inner"> <time
                                                    class="twae-label-extra-label"> <span
                                                        class="twae-label">Engagement</span> <span
                                                        class="twae-extra-label">Januari 2022</span> </time>
                                                <div class="twae-bg-orange twae-icon"><i aria-hidden="true"
                                                        class="fas fa-heart"></i></div>
                                                <div class="twae-bg-orange twae-data-container"> <span
                                                        class="twae-title"></span>
                                                    <div class="twae-timeline-img"><img loading="lazy"
                                                            decoding="async" width="128" height="150"
                                                            class="attachment-thumbnail size-thumbnail"
                                                            alt="" {{-- LAMARAN --}}
                                                            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @foreach ($imageOrders as $order)
                                                    @if (isset($order->image->fileImage) && $order->partName === 'lamaran')
                                                            src="{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}"> @endif
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="twae-description">
                                                        {{ $form->ceritaLamaran }}
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3429fccc wdp-sticky-section-no"
                    data-id="3429fccc" data-element_type="column">
                    <div class="elementor-widget-wrap"> </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-59a3a625 elementor-section-height-min-height elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="59a3a625" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a25ed43 wdp-sticky-section-no"
                    data-id="a25ed43" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-473e367d wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="473e367d" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7efa9afd animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="7efa9afd" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:30}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    @if ($form->penempatanTulisan == 'Pria')
                                        {{ strtoupper($form->namaPanggilanPria) }} &amp;
                                        {{ strtoupper($form->namaPanggilanWanita) }}
                                    @else
                                        {{ strtoupper($form->namaPanggilanWanita) }} &amp;
                                        {{ strtoupper($form->namaPanggilanPria) }}
                                    @endif
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-156c8885 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="156c8885" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:40}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">- OUR GALLERY -</h2>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-4b9361e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="4b9361e7" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5799e02c wdp-sticky-section-no"
                                    data-id="5799e02c" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7e236863 wdp-sticky-section-no"
                                    data-id="7e236863" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4c19c2ea wdp-sticky-section-no elementor-widget elementor-widget-gallery"
                                            data-id="4c19c2ea" data-element_type="widget"
                                            data-settings="{&quot;gallery_layout&quot;:&quot;masonry&quot;,&quot;columns_tablet&quot;:3,&quot;columns&quot;:3,&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;columns_mobile&quot;:2,&quot;lazyload&quot;:&quot;yes&quot;,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
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
                                                                        data-width="2045" data-height="2560"
                                                                        aria-label="" role="img"></div>
                                                                    <div class="elementor-gallery-item__overlay">
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
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2fbc5f4e wdp-sticky-section-no"
                                    data-id="2fbc5f4e" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-5dc46664 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
            data-id="5dc46664" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" {{-- BG-GIFT --}}
            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @php $galleryCount = 0; @endphp
@foreach ($imageOrders as $order)
@if (isset($order->image->fileImage) && $order->partName === 'background')
@php $galleryCount++; @endphp
@if ($galleryCount === 2)
    style="background-image: url('{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}');">
    @break @endif
            @endif
            @endforeach
            @endif

            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f65e8ec wdp-sticky-section-no"
                    data-id="3f65e8ec" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3872dbe1 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="3872dbe1" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3ad2a27b wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="3ad2a27b" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1f363096 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="1f363096" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:30}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        @if ($form->penempatanTulisan == 'Pria')
                                            {{ strtoupper($form->namaPanggilanPria) }} &amp;
                                            {{ strtoupper($form->namaPanggilanWanita) }}
                                        @else
                                            {{ strtoupper($form->namaPanggilanWanita) }} &amp;
                                            {{ strtoupper($form->namaPanggilanPria) }}
                                        @endif
                                    </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2246a5b1 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="2246a5b1" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:40}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">- WEDDING GIFT -</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-23cfb793 elementor-widget-divider--view-line_icon elementor-view-default elementor-widget-divider--element-align-center wdp-sticky-section-no elementor-widget elementor-widget-divider"
                            data-id="23cfb793" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider"> <span class="elementor-divider-separator">
                                        <div class="elementor-icon elementor-divider__element"> <svg
                                                aria-hidden="true" class="e-font-icon-svg e-fas-heart"
                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                </path>
                                            </svg></div>
                                    </span> </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-66d47f14 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="66d47f14" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-15c5a68e wdp-sticky-section-no"
                                    data-id="15c5a68e" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5071c55b wdp-sticky-section-no"
                                    data-id="5071c55b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-57603597 wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="57603597" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan
                                                    jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi
                                                    kado secara cashless.</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-494cfabb wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
                                            data-id="494cfabb" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Alamat Pengiriman Kado:<br><br></p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-251c9651 wdp-sticky-section-no elementor-widget elementor-widget-html"
                                            data-id="251c9651" data-element_type="widget"
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
                                                            </select>
                                                            <button id="copy-btn"
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
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-487d367b wdp-sticky-section-no"
                                    data-id="487d367b" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-9249885 elementor-section-height-min-height elementor-section-items-top elementor-section-boxed elementor-section-height-default wdp-sticky-section-no"
            data-id="9249885" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-15fd4cff wdp-sticky-section-no"
                    data-id="15fd4cff" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-41eaea01 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                            data-id="41eaea01" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7699e94e wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="7699e94e" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    @if ($form->penempatanTulisan == 'Pria')
                                        {{ strtoupper($form->namaPanggilanPria) }} &amp;
                                        {{ strtoupper($form->namaPanggilanWanita) }}
                                    @else
                                        {{ strtoupper($form->namaPanggilanWanita) }} &amp;
                                        {{ strtoupper($form->namaPanggilanPria) }}
                                    @endif
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-738b4633 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                            data-id="738b4633" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">- WISH US -</h2>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-2bb4c3f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="2bb4c3f5" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1f8bf99 wdp-sticky-section-no"
                                    data-id="1f8bf99" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2d2af6a1 wdp-sticky-section-no"
                                    data-id="2d2af6a1" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-10dab801 elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-guestbook"
                                            data-id="10dab801" data-element_type="widget"
                                            data-widget_type="weddingpress-guestbook.default">
                                            <div class="elementor-widget-container">
                                                <div class="guestbook-box-content elementor-comment-box-wrapper"
                                                    data-id="Nama Undangan">
                                                    <div class="comment-form-container">
                                                        <form id="guestbookForm" class="elementor-form"
                                                            method="post" name="guestbookForm">
                                                            @csrf
                                                            <div class="guestbook-label"> <label class="">
                                                                    Nama </label>
                                                            </div>
                                                            <input type="text" id="guestbook-name"
                                                                name="guestbook_name" class="form-control"
                                                                placeholder="Isikan Nama Anda" required>
                                                            <div class="guestbook-label"> <label class="">
                                                                    Pesan </label></div>
                                                            <textarea id="guestbook-message" name="guestbook_message" class="form-control" rows="3"
                                                                placeholder="Berikan Ucapan Dan Doa Restu" required></textarea>
                                                            <div class="elementor-button-wrapper"> <button
                                                                    type="submit"
                                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                                    id="submitGuestbookBtn">
                                                                    Kirimkan Ucapan </button> </div>
                                                        </form>
                                                    </div>
                                                    <div id="hidden-avatar" style="display:none;"><img
                                                            decoding="async"
                                                            src="https://buka.undanganku.store/wp-content/uploads/2024/03/placeholder-18.png"
                                                            title="placeholder.png" alt="placeholder.png"
                                                            loading="lazy"></div>
                                                    <div class="guestbook-list">
                                                        <div id="comments-section"></div>
                                                    </div>

                                                    <script>
                                                        document.addEventListener('DOMContentLoaded', function() {
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
                                                            <div><img decoding="async"
                                                                    src="https://buka.undanganku.store/wp-content/uploads/2024/03/placeholder-18.png"
                                                                    title="placeholder.png" alt="placeholder.png"
                                                                    loading="lazy"></div>
                                                            <div class="guestbook"> <a
                                                                    class="guestbook-name">${comment.name}</a><span
                                                                    class="wdp-confirm"><i
                                                                        class="fas fa-check-circle"></i> </span>
                                                                <div class="guestbook-message">
                                                                    ${comment.comment}
                                                                </div>
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
                                                                submitBtn.innerHTML = '<span class="loading-spinner"></span> Mengirim...';

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
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-35cac875 wdp-sticky-section-no"
                                    data-id="35cac875" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-473d8ecf elementor-section-height-min-height elementor-section-items-bottom elementor-section-boxed elementor-section-height-default wdp-sticky-section-no"
            data-id="473d8ecf" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;mountains&quot;}"
            {{-- BG-FOOTER --}}
            @if (isset($imageOrders) && $imageOrders->isNotEmpty()) @php $galleryCount = 0; @endphp
@foreach ($imageOrders as $order)
@if (isset($order->image->fileImage) && $order->partName === 'background')
@php $galleryCount++; @endphp
@if ($galleryCount === 3)
    style="background-image: url('{{ env('BACKEND_URL') . '/images/' . $order->image->fileImage }}');">
    @break @endif
            @endif
            @endforeach
            @endif
            <div class="elementor-background-overlay"></div>
            <div class="elementor-shape elementor-shape-top" data-negative="false"> <svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" opacity="0.33"
                        d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
                    </path>
                    <path class="elementor-shape-fill" opacity="0.66"
                        d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z">
                    </path>
                    <path class="elementor-shape-fill"
                        d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z">
                    </path>
                </svg> </div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-17feae34 wdp-sticky-section-no"
                    data-id="17feae34" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-17284541 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="17284541" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-35b95df8 wdp-sticky-section-no"
                                    data-id="35b95df8" data-element_type="column">
                                    <div class="elementor-widget-wrap"> </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-562d2a70 wdp-sticky-section-no"
                                    data-id="562d2a70" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7623b566 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="7623b566" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4b6423f4 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                            data-id="4b6423f4" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:30}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila
                                                    Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do’a restu kepada
                                                    Kami.</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-188b7597 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
                                            data-id="188b7597" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-75a68d74 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="75a68d74" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">See You on
                                                    Our Big Day</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-56a384 wdp-sticky-section-no elementor-widget elementor-widget-heading"
                                            data-id="56a384" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    @if ($form->penempatanTulisan == 'Pria')
                                                        {{ ucfirst($form->namaPanggilanPria) }} &amp;
                                                        {{ ucfirst($form->namaPanggilanWanita) }}
                                                    @else
                                                        {{ ucfirst($form->namaPanggilanWanita) }} &amp;
                                                        {{ ucfirst($form->namaPanggilanPria) }}
                                                    @endif

                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-25be9736 wdp-sticky-section-no"
                                    data-id="25be9736" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7258afd9 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
                            data-id="7258afd9" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5db16122 wdp-sticky-section-no"
                                    data-id="5db16122" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-43e88208 wdp-sticky-section-no"
                                    data-id="43e88208" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5d94e91e elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-fixed animated-slow elementor-view-stacked elementor-shape-circle wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-weddingpress-audio"
                                            data-id="5d94e91e" data-element_type="widget"
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
                                                            src="https://sewaundangan.online/wp-content/uploads/2024/03/y2mate.com-Pengingat-Good-Morning-Everyone-Lirik-Lagu-1-8.mp3"
                                                            type="audio/mp3">
                                                    </audio>

                                                    <div class="elementor-icon-wrapper" id="unmute-sound"
                                                        style="display: none;">
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

                                                    <div class="elementor-icon-wrapper" id="mute-sound"
                                                        style="display: none;">
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
                                        <div class="elementor-element elementor-element-619e3309 elementor-mobile-align-center elementor-widget-mobile__width-auto elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-lottie"
                                            data-id="619e3309" data-element_type="widget"
                                            data-settings="{&quot;source&quot;:&quot;external_url&quot;,&quot;source_external_url&quot;:{&quot;url&quot;:&quot;https:\/\/assets10.lottiefiles.com\/packages\/lf20_DYHlIeGOIM.json&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;link_to&quot;:&quot;custom&quot;,&quot;custom_link&quot;:{&quot;url&quot;:&quot;#cover&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}"
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
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5f4be4a8 wdp-sticky-section-no"
                                    data-id="5f4be4a8" data-element_type="column">
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
            class="elementor-section elementor-top-section elementor-element elementor-element-6cb43ff1 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
            data-id="6cb43ff1" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1828ea22 wdp-sticky-section-no"
                    data-id="1828ea22" data-element_type="column">
                    <div class="elementor-widget-wrap">
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
            "wdpNonce": "2014ec01c7",
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
    <script src="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/lib/lottie/lottie.min.js?ver=5.6.6"
        id="lottie-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0"
        id="elementor-gallery-js"></script>
    <script
        src="https://buka.undanganku.store/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.25.0"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.25.3"
        id="elementor-webpack-runtime-js"></script>
    <script src="https://buka.undanganku.store/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.25.3"
        id="elementor-frontend-modules-js"></script>
    <script src="https://buka.undanganku.store/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js">
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
            "nonce": "7504a8affc",
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
                "floatingButtonsClickTracking": "3f27077ec4"
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
                "id": 42019,
                "title": "Thema%2037%20-",
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
