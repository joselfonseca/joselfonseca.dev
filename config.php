<?php

return [
    'baseUrl' => 'http://localhost:3000',
    'production' => false,
    'siteName' => 'Jose Fonseca',
    'siteDescription' => 'Blog and personal site',
    'siteAuthor' => 'Jose Fonseca',

    // collections
    'collections' => [
        'posts' => [
            'sort' => ['-date'],
            'items' => function () {
                $client = new \GuzzleHttp\Client();
                $response = $client->get('https://dev.to/api/articles?username=joselfonseca');
                $posts = json_decode($response->getBody());
                return collect($posts)->map(function ($post) {
                    return [
                        'title' => $post->title,
                        'filename' => $post->slug,
                        'url' => $post->url,
                        'cover_image' => $post->cover_image,
                        'tag_list' => $post->tag_list,
                        'published_at' => \Illuminate\Support\Carbon::parse($post->published_at)->format('d M Y'),
                        'date' => \Illuminate\Support\Carbon::parse($post->published_at)->format('U')
                    ];
                });
            }
        ]
    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $content[0];
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
