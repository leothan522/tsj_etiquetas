<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after, ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b, strong {
            font-weight: bolder
        }

        code, kbd, pre, samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button, select {
            text-transform: none
        }

        [type=button], [type=reset], [type=submit], button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu, ol, ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder, textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button], button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio, canvas, embed, iframe, img, object, svg, video {
            display: block;
            vertical-align: middle
        }

        img, video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *, ::before, ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ route('web.perfil') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Profile') }}</a>
                {{--<a href="{{ route('chat.directo') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                   target="_blank">Chat Directo</a>--}}
                <a href="{{ url('/dashboard') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-2">{{ __('Log in') }}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            {{--<svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100">
                <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                      fill="#FF2D20"/>
            </svg>--}}
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="450px" height="200px" viewBox="0 0 450 200" enable-background="new 0 0 450 200" xml:space="preserve">  <image id="image0" width="450" height="200" x="0" y="0"
                                                                                                                                                                                                                                                               href="data:image/png;base64,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" />
</svg>
        </div>

        {{--<div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <a href="https://laravel.com/docs"
                   class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Documentation</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laravel has wonderful documentation covering every aspect of the framework. Whether you are
                            a newcomer or have prior experience with Laravel, we recommend reading our documentation
                            from beginning to end.
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                    </svg>
                </a>

                <a href="https://laracasts.com"
                   class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round"
                                      d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Laracasts</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
                            Check them out, see for yourself, and massively level up your development skills in the
                            process.
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                    </svg>
                </a>

                <a href="https://laravel-news.com"
                   class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Laravel News</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laravel News is a community driven portal and newsletter aggregating all of the latest and
                            most important news in the Laravel ecosystem, including new package releases and tutorials.
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                    </svg>
                </a>

                <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Vibrant Ecosystem</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com"
                                    class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>,
                            <a href="https://vapor.laravel.com"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>,
                            <a href="https://nova.laravel.com"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>,
                            and <a href="https://envoyer.io"
                                   class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a>
                            help you take your projects to the next level. Pair them with powerful open source libraries
                            like <a href="https://laravel.com/docs/billing"
                                    class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>,
                            <a href="https://laravel.com/docs/dusk"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>,
                            <a href="https://laravel.com/docs/broadcasting"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>,
                            <a href="https://laravel.com/docs/horizon"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>,
                            <a href="https://laravel.com/docs/sanctum"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>,
                            <a href="https://laravel.com/docs/telescope"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>,
                            and more.
                        </p>
                    </div>
                </div>
            </div>
        </div>--}}

        {{--<div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center gap-4">
                    <a href="https://github.com/sponsors/taylorotwell"
                       class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>
                        Sponsor
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})<br>
                {{ hola() }}
            </div>
        </div>--}}
    </div>
</div>
</body>
@include('sweetalert::alert')
</html>
