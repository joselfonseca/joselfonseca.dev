@extends('_layouts.master')

@section('body')
    <div class="mb-8">
        <h1>About Me</h1>

        <img src="/assets/img/jose-fonseca.jpg"
             alt="Jose Fonseca"
             class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right -my-16 md:ml-10">

        <p class="mb-6">Systems engineer, passionate for web development and software architecture. 10+ years of experience working with software and App development. Vinyl House music lover and passionate for cars.</p>

        <p class="mb-6">I am currently a software architect at <a href="https://domandtom.com" target="_blank">Dom and Tom inc</a>  working with development teams, project managers, designers and UX.</p>
    </div>
    <div class="mt-16">
        <h2>Skills</h2>
        <h4>Backend & Frontend</h4>
        <div class="flex items-stretch justify-between">
            <div class="w-1/4 m-4 max-w-sm rounded overflow-hidden shadow-lg">
                <img class="px-16 py-2 w-full h-64" src="/assets/img/laravel-logo.svg" alt="Laravel">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Laravel Framework</div>
                    <p class="text-gray-700 text-base">
                        I've been working with Laravel since version 4.1, from full monolith websites and applications to REST and GraphQL APIs.
                    </p>
                </div>
            </div>
            <div class="w-1/4 m-4 max-w-sm rounded overflow-hidden shadow-lg">
                <img class="px-2 py-4 w-full h-64" src="/assets/img/node-js-logo.svg" alt="Node JS">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Node JS</div>
                    <p class="text-gray-700 text-base">
                        I've worked with different Node JS frameworks, building full REST and GraphQL APIs and microservices.
                    </p>
                </div>
            </div>
            <div class="w-1/4 m-4 max-w-sm rounded overflow-hidden shadow-lg">
                <img class="px-16 py-2 w-full h-64" src="/assets/img/react-logo.svg" alt="React">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">React JS</div>
                    <p class="text-gray-700 text-base">
                        I work with react JS for frontend interfaces, using redux for state management, Apollo GraphQL for API data fetching and many other libraries.
                    </p>
                </div>
            </div>
            <div class="w-1/4 m-4 max-w-sm rounded overflow-hidden shadow-lg">
                <img class="px-16 py-2 h-64" src="/assets/img/vue-logo.svg" alt="Vue JS">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Vue JS</div>
                    <p class="text-gray-700 text-base">
                        I work with vue JS for frontend interfaces mostly in Laravel Nova.
                    </p>
                </div>
            </div>
        </div>
        <h4>Devops</h4>
        <div class="flex items-stretch justify-between">
            <div class="w-1/3 m-2 max-w-sm rounded overflow-hidden shadow-lg">
                <img class="px-16 py-4 w-full h-32" src="/assets/img/aws-logo.svg" alt="AWS">
                <div class="px-6 py-6">
                    <div class="font-bold text-xl mb-2">AWS</div>
                    <p class="text-gray-700 text-base">
                        I work with AWS services to deploy and monitor applications. Most used services are RDS, EC2, Route 53, Cloudfront, S3, SES, SNS.
                    </p>
                </div>
            </div>
            <div class="w-1/3 m-2 max-w-sm rounded overflow-hidden shadow-lg">
                <img class="px-4 py-4 w-full h-32" src="/assets/img/gcp-logo.svg" alt="Google Cloud Platform">
                <div class="px-6 py-6">
                    <div class="font-bold text-xl mb-2">Google cloud Platform</div>
                    <p class="text-gray-700 text-base">
                        I am a <a href="https://www.credential.net/0ebde791-50e8-4640-ae40-24091151126f" target="_blank">Google cloud certified professional cloud architect</a>. Currently using Compute Engine and Firebase to host a few projects.
                    </p>
                </div>
            </div>
            <div class="w-1/3 m-2 max-w-sm rounded overflow-hidden shadow-lg">
                <img class="px-8 py-6 w-full h-32" src="/assets/img/docker-logo.svg" alt="Docker">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Docker</div>
                    <p class="text-gray-700 text-base">
                        I run all my projects using docker containers for development, staging and production environments, orchestrating them with docker-compose, Rancher server and Kubernetes.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-16">
    <h2>Latest from the blog</h2>
        @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
            <div class="flex flex-col md:flex-row md:-mx-6">
                @foreach ($row as $post)
                    <div class="w-full md:w-1/2 md:mx-6">
                        @include('_components.post-preview-inline')
                    </div>

                    @if (! $loop->last)
                        <hr class="block md:hidden w-full border-b mt-2 mb-6">
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
@stop
