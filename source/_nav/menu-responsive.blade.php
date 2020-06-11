<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a title="{{ $page->siteName }} Live Coding" href="/open-source" class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/open-source') ? 'active text-blue' : '' }}">
                Open Source
            </a>
        </li>
        <li class="pl-4">
            <a title="{{ $page->siteName }} Live Coding" href="/videos" class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/videos') ? 'active text-blue' : '' }}">
                Videos and Series
            </a>
        </li>
        <li class="pl-4">
            <a title="{{ $page->siteName }} Blog" href="https://dev.to/joselfonseca" class="nav-menu__item hover:text-blue-500" target="_blank">
                Blog in dev.to
            </a>
        </li>
        <li class="pl-4">
            <a title="{{ $page->siteName }} Live Coding" href="/uses" class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/uses') ? 'active text-blue' : '' }}">
                What I use
            </a>
        </li>
    </ul>
</nav>
