<!doctype html>
<html lang="{{ env('LOCALE') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(isset($article))
        <title>{{ $article->title }}</title>
        <meta property="og:title" content="{{ $article->title }}">
        <meta property="og:description" content="{{ $article->short_content }}">
        <meta property="og:url" content="{{ route('article', ['category_slug' => $article->category->slug, 'article_slug' => $article->slug]) }}">
    @else
        <title>{{ \Illuminate\Support\Facades\Lang::get('basic.title_page') }}</title>
    @endif

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="h-full" id="app">
    <div class="container px-8 mx-auto xl:px-5 max-w-screen pt-5 pb-2 lg:pt-8">
        <nav>
            <div class="flex flex-wrap justify-between md:flex-nowrap md:gap-10">
                <div
                    class="order-1 hidden w-full flex-col items-center justify-start md:order-none md:flex md:w-auto md:flex-1 md:flex-row md:justify-end">
                    <a class="px-5 py-2 text-sm font-medium text-gray-600 hover:text-blue-500 dark:text-gray-400"
                       target="" rel="" href="{{ route('index') }}">
                        {{ __('home.home_page') }}
                    </a>
                    <a class="px-5 py-2 text-sm font-medium text-gray-600 hover:text-blue-500 dark:text-gray-400"
                       target="" rel="" href="{{ route('blog') }}">
                        Blog
                    </a>
                </div>
                <div class="flex w-full items-center justify-between md:w-auto">
{{--                    <a class="w-28 dark:hidden" href="#">--}}
{{--                        <img alt="Logo"--}}
{{--                             width="132" height="52"--}}
{{--                             sizes="(max-width: 640px) 100vw, 200px"--}}
{{--                             src="https://stablo.web3templates.com/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fcijrdavx%2Fproduction%2Fe8fa4f57a95067e838d7aa5a4f80042137d9f5b6-132x52.svg%3Fw%3D132%26auto%3Dformat&w=640&q=75"--}}
{{--                             style="color: transparent;">--}}
{{--                    </a>--}}
                    <a href="#">
                        <h1 class="text-[4rem]" style="font-family: 'Satisfy', cursive;">Owsianka <span class="text-sm">BLOG</span></h1>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <main class="py-4">
        {{ $slot }}
        @yield('content')
    </main>


</div>
{{--<footer class="bg-white shadow dark:bg-gray-900 mt-8">--}}
{{--    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">--}}
{{--        <div class="sm:flex sm:items-center sm:justify-between">--}}
{{--            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">--}}
{{--                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo"/>--}}
{{--                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>--}}
{{--            </a>--}}
{{--            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                       class="mr-4 hover:underline md:mr-6 ">{{ \Illuminate\Support\Facades\Lang::get('basic.about') }}</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                       class="mr-4 hover:underline md:mr-6">{{ \Illuminate\Support\Facades\Lang::get('basic.policy') }}</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                       class="mr-4 hover:underline md:mr-6 ">{{ \Illuminate\Support\Facades\Lang::get('basic.rules') }}</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#" class="hover:underline">{{ \Illuminate\Support\Facades\Lang::get('basic.contact') }}</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>--}}
{{--        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a--}}
{{--                href="https://flowbite.com/" class="hover:underline">Owsianka™</a>. All Rights Reserved.</span>--}}
{{--    </div>--}}
{{--</footer>--}}
@livewireScripts
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/languages/php.min.js"></script>
<script>hljs.highlightAll();</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
        integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
