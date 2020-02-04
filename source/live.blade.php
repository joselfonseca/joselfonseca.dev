@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Live Coding - {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Live Coding - {{ $page->siteName }}" />
@endpush
@section('body')
    <h2>Live Coding #EStreamerCoders</h2>
    <div class="w-full flex flex-col md:flex-row">
        <div class="md:w-3/4 sm:w-full">
            <div class="aspect-ratio-16/9 relative">
                <iframe class="absolute" src="https://player.twitch.tv/?channel=joselfonseca" width="100%" height="100%" frameborder="0" allowfullscreen="true" scrolling="no"></iframe>
            </div>
        </div>
        <div class="md:w-1/4 sm:w-full">
            <iframe src="https://www.twitch.tv/embed/joselfonseca/chat" frameborder="0" scrolling="no" height="100%" width="100%"></iframe>
        </div>
    </div>
    <h4>See past videos in <a href="/videos" class=""> this link </a></h4>
@stop
