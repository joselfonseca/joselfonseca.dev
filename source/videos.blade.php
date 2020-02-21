@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Videos - {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Videos - {{ $page->siteName }}" />
@endpush
@section('body')
    <h1>Video series and tutorials</h1>
    <p>I've recorded a few video series and tutorials about Laravel, PHP, Docker and more.</p>
    <div class="flex flex-wrap">
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4">
                <h4>Constuyendo Eventis con Laravel Nova</h4>
                <div class="aspect-ratio-16/9 relative">
                    <iframe class="absolute" width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLWIk9Jo3Sp-Vu_qYOFUkwSMTjZMefbyiu" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>Live coding using Laravel Nova to build a simple Events app (Spanish).</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://www.youtube.com/playlist?list=PLWIk9Jo3Sp-Vu_qYOFUkwSMTjZMefbyiu" target="_blank">See all videos</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4">
                <h4>Dockerizando</h4>
                <div class="aspect-ratio-16/9 relative">
                    <iframe class="absolute" width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLWIk9Jo3Sp-V36ddy-x0_O_inB2s8_ALw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>Live coding talking about docker in Node JS and Laravel PHP (Spanish).</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://www.youtube.com/playlist?list=PLWIk9Jo3Sp-V36ddy-x0_O_inB2s8_ALw" target="_blank">See all videos</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4">
                <h4>AWS and Rancher Server</h4>
                <div class="aspect-ratio-16/9 relative">
                    <iframe class="absolute" width="100%" height="100%" src="https://www.youtube.com/embed/qCzD5YhFluI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>Installing Rancher server in AWS to run docker containers (Spanish).</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://www.youtube.com/watch?v=qCzD5YhFluI" target="_blank">See in Youtube</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4">
                <h4>GraphQL with Prisma</h4>
                <div class="aspect-ratio-16/9 relative">
                    <iframe class="absolute" width="100%" height="100%" src="https://www.youtube.com/embed/qfW3dX8Myxg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>Using Prisma and Node JS to create a GraphQL server (Spanish).</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://www.youtube.com/watch?v=qfW3dX8Myxg" target="_blank">See in Youtube</a>
            </div>
        </div>
    </div>
    <h2>Meet-ups and talks</h2>
    <div class="flex flex-wrap">
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4">
                <h4>PEUMConf 2018 - Serverless GraphQL</h4>
                <div class="aspect-ratio-16/9 relative">
                    <iframe class="absolute" width="100%" height="100%" src="https://www.youtube.com/embed/yLD4gh0kLGE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>Talk in PEUMConf 2018 talking about serverless GraphQL (Spanish).</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://www.youtube.com/watch?v=yLD4gh0kLGE" target="_blank">See in Youtube</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4">
                <h4>Lunch and Learn for Software Gurus</h4>
                <div class="aspect-ratio-16/9 relative">
                    <iframe class="absolute" width="100%" height="100%" src="https://www.youtube.com/embed/0u8Sgv8-U_M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>Talking about APIs for the Mexican tech magazine (Spanish).</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://www.youtube.com/watch?v=0u8Sgv8-U_M" target="_blank">See in Youtube</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4">
                <h4>GraphQL and Laravel</h4>
                <div class="aspect-ratio-16/9 relative">
                    <iframe class="absolute" width="100%" height="100%" src="https://www.youtube.com/embed/JAiBv5cO_tw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>Talk about GraphQL in Laravel (Spanish).</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://www.youtube.com/watch?v=JAiBv5cO_tw" target="_blank">See in Youtube</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4">
                <h4>PHP Colombia Meet-up</h4>
                <div class="aspect-ratio-16/9 relative">
                    <iframe class="absolute" width="100%" height="100%" src="https://www.youtube.com/embed/dkgg9XzYFwI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>Meet-up talking about APIs in general (Spanish).</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://www.youtube.com/watch?v=dkgg9XzYFwI" target="_blank">See in Youtube</a>
            </div>
        </div>
    </div>
@stop
