@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Open source - {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Open source - {{ $page->siteName }}" />
@endpush
@section('body')
    <h1>Open source work</h1>
    <p>I have created a few open source projects that are currently being maintained.</p>
    <div class="flex flex-wrap">
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4 bg-white">
                <h4>Laravel API</h4>
                <p>Laravel API started kit for creating REST apis, it uses Dingo API and some other packages, comes with Api Blueprint and OpenAPI 3</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://github.com/joselfonseca/laravel-api" target="_blank">See in Github</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4 bg-white">
                <h4>Lighthouse Graphql Passport Auth</h4>
                <p>Plugin to add passport and socialite authentication to GraphQL server in laravel</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://github.com/joselfonseca/lighthouse-graphql-passport-auth" target="_blank">See in Github</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4 bg-white">
                <h4>Docker Nginx PHP 7.3 Image</h4>
                <p>Docker image for PHP and laravel projects</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://github.com/joselfonseca/docker-nginx-php-73" target="_blank">See in Github</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4 bg-white">
                <h4>Docker Nginx PHP 7.4 Image</h4>
                <p>Docker image for PHP and laravel projects</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://github.com/joselfonseca/docker-nginx-php-74" target="_blank">See in Github</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4 bg-white">
                <h4>Docker Nginx PHP 7.3 dev Image</h4>
                <p>Docker image for developing PHP and laravel projects, it comes with node and docker installed, use it in development and CI pipelines</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://github.com/joselfonseca/docker-nginx-php-73-dev" target="_blank">See in Github</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4 bg-white">
                <h4>Docker Nginx PHP 7.4 dev Image</h4>
                <p>Docker image for developing PHP and laravel projects, it comes with node and docker installed, use it in development and CI pipelines</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://github.com/joselfonseca/docker-nginx-php-74-dev" target="_blank">See in Github</a>
            </div>
        </div>
        <div class="md:w-1/2 sm:w-full">
            <div class="m-4 rounded overflow-hidden shadow-lg p-4 bg-white">
                <h4>Laravel Tactician</h4>
                <p>Laravel implementation of the Tactician command bus</p>
                <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="https://github.com/joselfonseca/laravel-tactician" target="_blank">See in Github</a>
            </div>
        </div>
    </div>
@stop
