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
    <div class="w-full mb-4">
        <div class="github-card" data-github="joselfonseca/laravel-api" data-width="100%" data-theme="default"></div>
    </div>
    <div class="w-full mb-4">
        <div class="github-card" data-github="joselfonseca/lighthouse-graphql-passport-auth" data-width="100%" data-theme="default"></div>
    </div>
    <div class="w-full mb-4">
        <div class="github-card" data-github="joselfonseca/docker-nginx-php-73" data-width="100%" data-theme="default"></div>
    </div>
    <div class="w-full mb-4">
        <div class="github-card" data-github="joselfonseca/laravel-tactician" data-width="100%" data-theme="default"></div>
    </div>
@stop
