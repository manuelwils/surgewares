<div>
    <head>
        <meta charset="UTF-8">
        <title>{{ $title }}</title>
        <meta property="og:url" content="{{ env('APP_URL') }}">
        <meta property="og:site_name" content="{{ env('APP_FULL_NAME') }}">
        <meta property="og:type" content="website">
        <link rel="canonical" href="{{ env('APP_URL') }}">
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
            .products-list {
                /* margin: auto; */
                margin-top: -80px;
                /* text-align: center; */
            }
            .flex-div {
                display: flex;
                justify-content: space-around;
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
        </style>
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    </head>
</div>