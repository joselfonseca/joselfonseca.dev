@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Contact</h1>
    <p class="mb-8">You can find me in Github and Twitter</p>
    <div class="w-full flex flex-col md:flex-row">
        <div class="md:w-1/2 sm:w-full m-4">
            <div class="github-card" data-github="joselfonseca" data-width="100%" data-theme="medium"></div>
        </div>
        <div class="md:w-1/2 sm:w-full m-4">
            <a class="twitter-timeline" href="https://twitter.com/Joselfonseca?ref_src=twsrc%5Etfw">Tweets by Joselfonseca</a>
        </div>
    </div>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@stop
