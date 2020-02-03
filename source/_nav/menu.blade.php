<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Open Source" href="/open-source" class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/open-source') ? 'active text-blue-600' : '' }}">
        Open Source
    </a>

    <a title="{{ $page->siteName }} Live Coding" href="/live" class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/live') ? 'active text-blue-600' : '' }}">
        Live Coding
    </a>

    <a title="{{ $page->siteName }} Blog" href="https://dev.to/joselfonseca" class="ml-6 text-gray-700 hover:text-blue-600" target="_blank">
        Blog in dev.to
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>
</nav>
