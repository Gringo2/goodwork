<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased p-32">


        <svg class="w-12" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="400" width="400" height="400" rx="40" transform="rotate(-90 0 400)" fill="#2E3173" />
            <g filter="url(#filter0_dd_38_6)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M56.3693 220.009C65.2136 284.086 115.928 334.796 180.008 343.633L185.47 349.497C193.379 357.989 206.831 357.989 214.74 349.497L220.233 343.6C284.125 334.679 334.679 284.125 343.6 220.233L349.497 214.74C357.989 206.831 357.989 193.379 349.497 185.47L343.633 180.008C334.796 115.928 284.086 65.2136 220.009 56.3693L214.74 50.7126C206.831 42.2211 193.379 42.2211 185.47 50.7126L180.232 56.3362C115.966 65.0968 65.0968 115.966 56.3362 180.232L50.7126 185.47C42.2211 193.379 42.2211 206.831 50.7126 214.74L56.3693 220.009ZM370 200C370 293.888 293.888 370 200 370C106.112 370 30 293.888 30 200C30 106.112 106.112 30 200 30C293.888 30 370 106.112 370 200Z"
                    fill="white" />
            </g>
            <g filter="url(#filter1_d_38_6)">
                <circle cx="200" cy="200" r="120" fill="white" />
            </g>
            <g filter="url(#filter2_i_38_6)">
                <path d="M141.667 208.333L175 241.667L258.334 158.333" stroke="#2E3173" stroke-width="30" stroke-linecap="round"
                    stroke-linejoin="round" />
            </g>
            <defs>
                <filter id="filter0_dd_38_6" x="26" y="30" width="348" height="348" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_38_6" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                    <feBlend mode="normal" in2="effect1_dropShadow_38_6" result="effect2_dropShadow_38_6" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_38_6" result="shape" />
                </filter>
                <filter id="filter1_d_38_6" x="76" y="80" width="248" height="248" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_38_6" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_38_6" result="shape" />
                </filter>
                <filter id="filter2_i_38_6" x="126.667" y="143.333" width="146.667" height="117.333"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow_38_6" />
                </filter>
            </defs>
        </svg>



        <h1>Welcome</h1>
    </body>
</html>
