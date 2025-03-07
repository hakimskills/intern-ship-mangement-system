<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <script src="{{asset('js/javaS.js')}}"></script>


    <style>
        html,
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-weight: bold;
            font-family: "Poppins", sans-serif;
        }

        .main {
            height: 100vh;
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .wrapper,
        .slide {
            position: relative;
            width: 100%;
            height: 100%;

        }

        .slide {
            overflow: hidden;

        }

        .slide::before {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: 10;
        }

        .slide .image-data {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
            z-index: 100;

        }


        /* swiper button css */
        .nav-btn {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        .swiper-button-next {
            right: 50px;
        }

        .swiper-button-prev {
            left: 50px;

        }

        .nav-btn {
            position: absolute;
            bottom: 10px;
            width: 30px;
            height: 30px;

            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }

        .nav-btn::before,
        .nav-btn::after {
            font-size: 25px;
            color: #6c63ff;
            position: absolute;
            top: 50%;
        }

        .swiper-pagination-bullet {
            opacity: 1;
            height: 12px;
            width: 12px;
            background-color: #fff;
            visibility: hidden;
        }

        .swiper-pagination-bullet-active {
            border: 2px solid #fff;
            background-color: #6c63ff;
        }

        @media screen and (max-width: 568px) {
            .nav-btn {
                visibility: hidden;
            }

            .swiper-pagination-bullet {
                visibility: visible;
            }

            * {
                font-size: 14px;


            }

            .slide .image-data {

                top: 60%;

            }

        }

        @media screen and (max-width: 650px) {
            .off {
                display: none;
            }

            .on {
                visibility: visible;
            }


        }


    </style>

</head>
<body class="antialiased">


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<div id="content">

    @extends('layouts.app2')
    @section('content')

        <section class="main swiper mySwiper">
            <div class="wrapper swiper-wrapper">
                <div class="slide swiper-slide">
                    <div class="  image-data">
                        <img class="off" style="width: 520px;height: 220px;margin-right: 4rem;margin-bottom: 20px;"
                             src="stud.png">


                        <h5>
                            <span class="text" style="color: #6c63ff"> STUDENTS </span>
                            <br>
                            Every student has the ability to access their profile and send internship requests,
                            which will be reviewed by the head of the department at a later time. They can also
                            check for any internship positions offered by companies. Additionally, students
                            receive updates and notifications regarding the status of their requests.
                        </h5>
                    </div>
                </div>

                <div class="slide swiper-slide">
                    <div class="  image-data">
                        <img style="width: 220px;height: 220px" src="manager.png">
                        <h5>
                            <span class="text" style="color: #6c63ff"> THE HEAD OF DEPARTMENT</span>
                            <br>
                            In addition to being able to view his profile,
                            he has the ability to access and manage a list of internship requests.
                            This includes the option to individually accept or refuse each request from students.
                        </h5>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <div class="  image-data">
                        <svg style="height: 220px;width: 220px; margin: 20px auto" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 149.59 183.06">
                            <defs>
                                <style>.cls-1, .cls-6 {
                                        fill: #6c63ff;
                                    }

                                    .cls-2 {
                                        fill: #8982ff;
                                    }

                                    .cls-3 {
                                        fill: #fff;
                                    }

                                    .cls-4, .cls-7 {
                                        fill: #ccc;
                                    }

                                    .cls-4, .cls-5, .cls-6 {
                                        fill-rule: evenodd;
                                    }

                                    .cls-5 {
                                        fill: #3c3c3c;
                                    }</style>
                            </defs>
                            <title>Asset 8</title>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="cls-1"
                                          d="M148.79,34.34l.8-.43-5.13-9.07-.83.42h0l-10,5.12h0l-1.52.77a2.66,2.66,0,0,1-1.94.17l-3.64-1.09a5.19,5.19,0,0,0-3.62.23l-.3.13h0a7,7,0,0,0-4.16-.37l-3.49.75a3.16,3.16,0,0,1-2-.25l-.76-.36h0l-9.67-4.84h0l-.57-.29-4.3,8.59.48.24,8.9,5.28h0l.21.12,4.47,2.65,0,0a2.1,2.1,0,0,0,.09,2.93,2,2,0,0,0,1.46.6h.07a2.15,2.15,0,0,0,.83-.2s0,0,0,0a2,2,0,0,0,.6,1.21,2,2,0,0,0,1.41.57h.06a1.53,1.53,0,0,0,.3,0s0,0,0,0a2.07,2.07,0,0,0,.62,1.62,2,2,0,0,0,1.44.58h.06a2,2,0,0,0,.77-.17l0,0a1.91,1.91,0,0,0,.56,1.1,1.89,1.89,0,0,0,1.33.54h.06a1.84,1.84,0,0,0,1.34-.62L123,50h0l.69.48a1.9,1.9,0,0,0,1.09.34,1.88,1.88,0,0,0,1.55-.81,1.92,1.92,0,0,0,.35-1.06s0,0,0,0a1.93,1.93,0,0,0,.53.07,2,2,0,0,0,1.44-.61,1.94,1.94,0,0,0,.56-1.38s0,0,0,0a1.79,1.79,0,0,0,.57.08h.09a2.06,2.06,0,0,0,1.49-.71,2.11,2.11,0,0,0,.51-1.5s0,0,0,0a2.33,2.33,0,0,0,.53.06,2.26,2.26,0,0,0,2.12-3s0,0,0,0l4.07-2.14h0l10.11-5.36Zm-34.21,9.54h0l-.49.54a1.31,1.31,0,0,1-.91.41,1.27,1.27,0,0,1-.92-.36,1.26,1.26,0,0,1-.05-1.77l2.12-2.32a1.24,1.24,0,0,1,.9-.42h0a1.28,1.28,0,0,1,.94,2.13h0ZM117,46h0l0,0a1.19,1.19,0,0,1-1.76-1.6l1.63-1.79h0l.18-.19a1.18,1.18,0,0,1,.84-.38h0a1.14,1.14,0,0,1,.82.33,1.18,1.18,0,0,1,0,1.65Zm2.44,2.23a1.19,1.19,0,0,1-.87.4,1.24,1.24,0,0,1-1-2.07l1.76-1.93h0a1.27,1.27,0,0,1,.81-.41h.12a1.23,1.23,0,0,1,.91,2.06Zm2.62,1.54a1.06,1.06,0,0,1-.76.35,1.07,1.07,0,0,1-.82-1.79l1.58-1.73a1,1,0,0,1,.76-.35h0a1.07,1.07,0,0,1,.79,1.79h0Zm3.61-.26a1.06,1.06,0,0,1-1.48.26l-.6-.41a0,0,0,0,1,0,0l.66-.73a1.85,1.85,0,0,0,.49-1.08,0,0,0,0,1,0,0l.51.41.34.3h0a1.06,1.06,0,0,1,.25.68A1,1,0,0,1,125.66,49.5Zm7.81-5.86a1.42,1.42,0,0,1-2,0l-.19-.19h0l-2.18-2.11a.42.42,0,0,0-.68.15.4.4,0,0,0,.1.45l1.25,1.2.94.91a1.26,1.26,0,0,1,.07,1.73,1.29,1.29,0,0,1-.9.43,1.27,1.27,0,0,1-.92-.35l-.33-.33h0l-2.18-2.11a.42.42,0,0,0-.59,0,.41.41,0,0,0,0,.59l2.18,2.11a1.17,1.17,0,0,1-1.61,1.7h0l-.24-.21h0l-.12-.13h0l-1.92-1.56h0a1.85,1.85,0,0,0-1.35-.51,1.67,1.67,0,0,0-.39.05s0,0,0,0a2.07,2.07,0,0,0-2.13-2.07l-.31,0s0,0,0,0a2,2,0,0,0-.61-1.58,2,2,0,0,0-1.47-.57,2.7,2.7,0,0,0-.41.06s0,0,0,0a2.1,2.1,0,0,0-2.18-2.15,2.08,2.08,0,0,0-1.49.68l-1.51,1.65h0l-4.83-2.86h0l-8.84-5.24,3.55-7.1,9.63,4.81h0l.06,0,.27.14h0l.48.23a3.88,3.88,0,0,0,1.73.4,3.84,3.84,0,0,0,.83-.09l3.49-.75a6.24,6.24,0,0,1,2.82,0,0,0,0,0,1,0,0l-5.58,2.47a1.55,1.55,0,0,0,.63,3l.3,0,6.21-1.22a3.53,3.53,0,0,1,2.17.28,29.26,29.26,0,0,1,8.61,6.33h0A1.42,1.42,0,0,1,133.47,43.64Zm4.77-4.75-.38.2-.43.23h0l-3.28,1.81h0a30.23,30.23,0,0,0-8.67-6.3,4.29,4.29,0,0,0-2.69-.35l-6.21,1.23h-.14a.72.72,0,0,1-.29-1.37l6.57-2.91h0l.47-.21a4.45,4.45,0,0,1,3-.19l3.64,1.09a3.47,3.47,0,0,0,2.55-.23l1.32-.66h0L144,26l4.28,7.57-10.08,5.33Z"/>
                                    <path class="cls-2"
                                          d="M79.22,37.2l1-1h0l1.34-1.35a.71.71,0,0,0,0-1,.64.64,0,0,0-.93,0l-2.37,2.39-1-1.08h0L76,33.72a.64.64,0,0,0-.93,0,.71.71,0,0,0,0,1l2.27,2.49-1,1h0L75,39.56a.7.7,0,0,0,0,1,.64.64,0,0,0,.93,0l2.36-2.39,1,1.08h0l1.29,1.41a.64.64,0,0,0,.93,0,.71.71,0,0,0,0-1Z"/>
                                    <rect class="cls-3" x="61.32" y="70.62" width="43.25" height="9.61"/>
                                    <polygon class="cls-3"
                                             points="42.1 181.14 32.49 181.14 22.88 181.14 22.88 104.26 51.71 104.26 51.71 181.14 42.1 181.14"/>
                                    <polygon class="cls-3"
                                             points="126.19 133.09 126.19 181.14 114.17 181.14 114.17 125.88 126.19 133.09"/>
                                    <rect class="cls-3" x="73.33" y="157.12" width="19.22" height="24.03"/>
                                    <path class="cls-3"
                                          d="M114.17,125.88v55.26H92.55v-24H73.33v24H51.71V80.23h62.46Zm-9.61,24V145.1h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61V97.05h-4.8v4.81Zm0-9.61V87.44h-4.8v4.81ZM95,149.91V145.1h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61V97.05h-4.8v4.81Zm0-9.61V87.44h-4.8v4.81Zm-9.61,57.66V145.1h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61V97.05h-4.8v4.81Zm0-9.61V87.44h-4.8v4.81Zm-9.61,57.66V145.1h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61V97.05h-4.8v4.81Zm0-9.61V87.44h-4.8v4.81Zm-9.61,57.66V145.1h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61v-4.81h-4.8v4.81Zm0-9.61V97.05h-4.8v4.81Zm0-9.61V87.44h-4.8v4.81Z"/>
                                    <rect class="cls-1" x="99.76" y="145.1" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="99.76" y="135.49" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="99.76" y="125.88" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="99.76" y="116.27" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="99.76" y="106.66" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="99.76" y="97.05" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="99.76" y="87.44" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="90.15" y="145.1" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="90.15" y="135.49" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="90.15" y="125.88" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="90.15" y="116.27" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="90.15" y="106.66" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="90.15" y="97.05" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="90.15" y="87.44" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="80.54" y="145.1" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="80.54" y="135.49" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="80.54" y="125.88" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="80.54" y="116.27" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="80.54" y="106.66" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="80.54" y="97.05" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="80.54" y="87.44" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="70.93" y="145.1" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="70.93" y="135.49" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="70.93" y="125.88" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="70.93" y="116.27" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="70.93" y="106.66" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="70.93" y="97.05" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="70.93" y="87.44" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="61.32" y="145.1" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="61.32" y="135.49" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="61.32" y="125.88" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="61.32" y="116.27" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="61.32" y="106.66" width="4.81" height="4.8"/>
                                    <rect class="cls-1" x="61.32" y="97.05" width="4.81" height="4.81"/>
                                    <rect class="cls-1" x="61.32" y="87.44" width="4.81" height="4.81"/>
                                    <path class="cls-1"
                                          d="M51.71,106.18a1.92,1.92,0,0,1-1.93-1.92v-24a1.92,1.92,0,0,1,1.93-1.92h9.61a1.92,1.92,0,1,1,0,3.84H53.63v22.11A1.92,1.92,0,0,1,51.71,106.18Z"/>
                                    <path class="cls-1"
                                          d="M114.17,127.8a1.92,1.92,0,0,1-1.92-1.92V82.15h-7.69a1.92,1.92,0,1,1,0-3.84h9.61a1.93,1.93,0,0,1,1.93,1.92v45.65A1.93,1.93,0,0,1,114.17,127.8Z"/>
                                    <path class="cls-1"
                                          d="M104.56,82.15H61.32a1.93,1.93,0,0,1-1.93-1.92V70.62a1.93,1.93,0,0,1,1.93-1.92h43.24a1.93,1.93,0,0,1,1.93,1.92v9.61A1.93,1.93,0,0,1,104.56,82.15ZM63.24,78.31h39.4V72.54H63.24Z"/>
                                    <path class="cls-1"
                                          d="M51.71,183.06a1.92,1.92,0,0,1-1.93-1.92v-75h-25v75a1.93,1.93,0,0,1-3.85,0V104.26a1.92,1.92,0,0,1,1.93-1.92H51.71a1.92,1.92,0,0,1,1.92,1.92v76.88A1.92,1.92,0,0,1,51.71,183.06Z"/>
                                    <path class="cls-1"
                                          d="M126.19,183.06a1.92,1.92,0,0,1-1.93-1.92v-47l-8.16-4.9v51.86a1.93,1.93,0,0,1-3.85,0V125.88a1.91,1.91,0,0,1,1-1.67,1.93,1.93,0,0,1,1.93,0l12,7.21a1.93,1.93,0,0,1,.94,1.65v48A1.92,1.92,0,0,1,126.19,183.06Z"/>
                                    <path class="cls-1"
                                          d="M92.55,183.06a1.92,1.92,0,0,1-1.92-1.92V159H75.25v22.1a1.92,1.92,0,0,1-3.84,0v-24a1.92,1.92,0,0,1,1.92-1.93H92.55a1.92,1.92,0,0,1,1.92,1.93v24A1.92,1.92,0,0,1,92.55,183.06Z"/>
                                    <path class="cls-1"
                                          d="M32.49,183.06a1.92,1.92,0,0,1-1.93-1.92V113.87a1.93,1.93,0,0,1,3.85,0v67.27A1.92,1.92,0,0,1,32.49,183.06Z"/>
                                    <path class="cls-1"
                                          d="M42.1,183.06a1.92,1.92,0,0,1-1.93-1.92V113.87a1.93,1.93,0,0,1,3.85,0v67.27A1.92,1.92,0,0,1,42.1,183.06Z"/>
                                    <path class="cls-1"
                                          d="M131,183.06H18.07a1.92,1.92,0,1,1,0-3.84H131a1.92,1.92,0,0,1,0,3.84Z"/>
                                    <path class="cls-1"
                                          d="M51.71,99H32.49a1.92,1.92,0,1,1,0-3.84H51.71a1.92,1.92,0,0,1,0,3.84Z"/>
                                    <path class="cls-4"
                                          d="M27.07,29.37c4,0,7.21-1.24,7.21-2.76S31,23.85,27.07,23.85s-7.21,1.24-7.21,2.76,3.24,2.76,7.21,2.76Z"/>
                                    <polygon class="cls-4"
                                             points="31.96 21.7 33.19 31.5 21.17 36.53 21.87 21.7 31.96 21.7"/>
                                    <path class="cls-4"
                                          d="M54.15,45.2l-.5.26-8,4-.35.17s-.71-2.13-1.1-3.25v0a4.1,4.1,0,0,0-.24-.6l0,.07c-.11.44-.23.87-.32,1.29-.25,1-.47,2-.68,3H11c-.25-1.08-.53-2.23-.86-3.49l0-.14,0-.07c0-.1,0,.07-.13-.35L8.56,49.48l-.4-.43v0L0,44.13l5.91-13.5a18,18,0,0,1,1.6-2.18,3.63,3.63,0,0,1,1.59-.83L13,26.84l7-1.37a2.74,2.74,0,0,1,.69-.1L23,27.55a6.42,6.42,0,0,0,8.31-.21l2.24-1.91a63.92,63.92,0,0,1,6.85,1.38c2.47.51,4.68,1,4.78,1l.19.09a6.05,6.05,0,0,1,2.3,2.74Z"/>
                                    <path class="cls-5"
                                          d="M22.53,2.72,20.58,7a5.39,5.39,0,0,0,1.35,3.61l9.39,3.74L34.22,12l0-6.83-.83-.36L32.6,2,26.28.54Z"/>
                                    <path class="cls-4"
                                          d="M36.36,12.3c-.28-.7-.74-.34-1.1.12C35.36,7,32.51,4.3,32.51,4.3H21.83a11.27,11.27,0,0,0-2.76,8.08c-.36-.45-.81-.76-1.07-.08-.48,1.24.66,2.95.43,4.69-.14,1.18.79,1.06,1.38.74a21,21,0,0,0,1.07,3.16c1.11,2.59,4.32,5,6.28,5s5.13-2.38,6.28-5a15.33,15.33,0,0,0,1.08-3.18c.59.34,1.55.47,1.4-.72-.22-1.74.92-3.45.44-4.69Z"/>
                                    <path class="cls-6"
                                          d="M35.66,9.35s0-.11,0-.19a12.36,12.36,0,0,1-.51-2.28C35.11,3.09,31.55,0,27.16,0s-7.94,3.09-7.94,6.88a10.92,10.92,0,0,1-.66,2.47Z"/>
                                    <path class="cls-4"
                                          d="M22.48,1.32a8.79,8.79,0,0,1,2.39-1A1.34,1.34,0,0,1,25,.76V6.28a1.24,1.24,0,0,1-2.47,0Z"/>
                                    <path class="cls-4"
                                          d="M29.25.25a8.15,8.15,0,0,1,2.36.94V6.28a1.23,1.23,0,1,1-2.46,0V.76a1.06,1.06,0,0,1,.1-.51Z"/>
                                    <path class="cls-6"
                                          d="M36.84,9.46c0,.56-.3,1-.69,1H18.08c-.39,0-.69-.43-.69-1s.3-1,.69-1H36.16c.38,0,.68.43.68,1Z"/>
                                    <rect class="cls-1" x="16.95" y="41.98" width="8.15" height="1.1"/>
                                    <rect class="cls-1" x="28.31" y="38.02" width="8.18" height="5.06"/>
                                    <path class="cls-4"
                                          d="M33.83,38.33H31.2a.3.3,0,0,1-.3-.31v-.51a.29.29,0,0,1,.3-.3h2.63a.29.29,0,0,1,.3.3V38a.3.3,0,0,1-.3.31Z"/>
                                    <rect class="cls-7" x="32.65" y="39.18" width="3.48" height="0.39"/>
                                    <rect class="cls-7" x="32.65" y="40.11" width="3.48" height="0.39"/>
                                    <rect class="cls-7" x="32.65" y="41.04" width="3.48" height="0.39"/>
                                </g>
                            </g>
                        </svg>
                        <h5>
                            <span class="text" style="color: #6c63ff"> THE INTERNSHIP MANAGER </span>
                            <br>
                            When accessing his profile, he can view the list of requests that the head of the department has already accepted.
                            Additionally, he has the ability to offer internship positions for his company and make them publicly available for students.
                            furthermore he can mark the absences of students and rate their performance during their internship period.
                        </h5>
                    </div>
                </div>
                @guest
                    <div class="slide swiper-slide">
                        <div class="image-data">
                            <h5>
                <span class="text" style="font-weight: normal">What are you waiting for!,

                </span>

                                <a  href="{{ route('register') }}" style="text-decoration: none;color: #6c63ff">
                                    Sign up
                                </a>
                                <br>
                                <br>
                                <span class="text" style="font-weight: normal">Or you already have an account?,

                </span>

                                <a  href="{{ route('login') }}" style="text-decoration: none;color: #6c63ff" >
                                    login
                                </a>
                                <br>
                            </h5>
                        </div>
                    </div>
                @endguest
            </div>
            <div class="swiper-pagination"></div>


        </section>
        <div class="swiper-button-next nav-btn" style="color: #6c63ff;font-weight: bold"></div>
        <div class="swiper-button-prev nav-btn" style="color: #6c63ff;font-weight: bold"></div>

        <!-- Swiper JS -->
        <script src="JS/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->

        <script src="{{asset('js/javaS.js')}}"></script>
        <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


@endsection

</body>
</html>
