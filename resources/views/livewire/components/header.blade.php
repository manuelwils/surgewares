<div>
    <head>
        <!-- Basic Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Surgewares Technologies Limited - Innovating for a brighter future through technology. Explore our cutting-edge solutions and products.">
        <meta name="keywords" content="Surgewares, technology, innovation, solutions, products">

        <!-- Open Graph Tags (for social media sharing) -->
        <meta property="og:title" content="Surgewares Technologies Limited">
        <meta property="og:description" content="Innovating for a brighter future through technology. Explore our cutting-edge solutions and products.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ env('APP_URL') }}">
        <meta property="og:image" content="{{ env('APP_URL') }}/og-image.jpg">
        <meta property="og:image:alt" content="Surgewares Technologies Limited Logo">

        <!-- Twitter Card Tags (for Twitter sharing) -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@SurgewaresTech">
        <meta name="twitter:title" content="Surgewares Technologies Limited">
        <meta name="twitter:description" content="Innovating for a brighter future through technology. Explore our cutting-edge solutions and products.">
        <meta name="twitter:image" content="{{ env('APP_URL') }}/twitter-image.jpg">
        <meta name="twitter:image:alt" content="Surgewares Technologies Limited Logo">

        <!-- Favicon (32x32 pixels) -->
        <link rel="icon" type="image/png" href="{{ env('APP_URL') }}/favicon.png" sizes="32x32">
        <link rel="canonical" href="{{ env('APP_URL') }}">

        <!-- Page Title -->
        <title>{{ $title ?? "Surgewares Technologies Limited - Innovating for a Brighter Future" }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <style data-navigate-once>
            :root {
                --font-1: "Google Sans Display";
                --color-gray: #dddddd;
                --color-dark-gray: #333333;
            }
            body {
                --font-1: "Google Sans Display";
                --font-body: var(--font-1);
                --font-headline: var(--font-1);
                --font-list-title: var(--font-1);
                --font-promo-title: var(--font-1);
                --font-promo-description: var(--font-1);
                --font-rte-body: var(--font-1);
                --font-pull-quote: var(--font-2);
            }
            @media all and (min-width:0px) and (max-width: 625px) {
                .Homepage-backgroundImage {
                    display: none;
                }
            }
            @media all and (min-width: 768px) {
                .products-list {
                    /* margin: auto; */
                    margin-top: -80px; */
                    /* text-align: center; */
                }
            }
            .block {
                display: block;
                width: 100%;
            }
            .flex-div {
                width: 100%;
                display: flex;
                justify-content: space-around;
                border: 1px solid #777;
                padding: 10px;
            }
            .flex {
                display: flex;
                width: 33%;
            }
            .see-all {
                text-decoration: underline;
                color: #777;
                padding: 0px 10px; 
            }
            .color {
                color: #2a69b4;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    </head>
</div>