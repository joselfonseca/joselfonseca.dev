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
    
@stop
