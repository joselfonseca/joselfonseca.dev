<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <div class="flex w-full bg-blue-700 h-2"></div>
        <header class="flex items-center shadow bg-white border-b h-16 py-4" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <div class="p-2 m-2 bg-blue-700 text-white rounded">JF</div>
                        <h1 class="text-lg md:text-2xl text-blue-800 font-semibold hover:text-blue-600 my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container mx-auto py-16 px-6">
            @yield('body')
        </main>

        <footer class="bg-blue-700 text-center text-white text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none">
                <li class="md:mr-2">
                    &copy; <a href="https://joselfonseca.dev" class="text-white hover:text-blue-300" title="Jose Fonseca website">Jose Fonseca</a> {{ date('Y') }}.
                </li>

                <li>
                    Built with <a href="http://jigsaw.tighten.co" class="text-white hover:text-blue-300" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" class="text-white hover:text-blue-300" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>

        <script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
