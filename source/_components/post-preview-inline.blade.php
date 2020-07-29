<div class="flex flex-col mb-4 w-full p-6 rounded overflow-hidden shadow-lg bg-white">
    <img src="{{ $post->cover_image }}" class="m-4">
    <h2 class="text-3xl mt-0">
        <a href="{{ $post->url }}" title="Read more - {{ $post->title }}" target="_blank" class="text-gray-900 font-extrabold">{{ $post->title }}</a>
    </h2>
    <p class="text-gray-700 font-medium my-2">
        Published: {{ $post->published_at }}
    </p>
    <a href="{{ $post->url }}" title="Read more - {{ $post->title }}" target="_blank" class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Read</a>
</div>
