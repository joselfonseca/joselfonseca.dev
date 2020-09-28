@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Tools - {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Tools - {{ $page->siteName }}" />
@endpush
@section('body')
    <h1>What do I use for my work and hobbies?</h1>
    <p>We all use different tools, here is a list of different tools I use in different situations</p>
    <h3>Hardware for work</h3>
    <ul>
        <li>
            Macbook Pro 15-inch 2018, Core i7, 32GB RAM, 250 SSD disk
        </li>
        <li>
            Samsung curve monitor 22" as a second screen
        </li>
        <li>
            Ubuntu Desktop PC, Rizen 5 3600, 16GB Ram, 250 SSD disk (I use this when I need the MackBook to be free or I leave it at the office)
        </li>
    </ul>
    <h3>Software for work</h3>
    <ul>
        <li>
            <a href="https://www.jetbrains.com/phpstorm/" target="_blank">PHP Storm</a> as IDE for PHP projects
        </li>
        <li>
            <a href="https://visualstudio.microsoft.com/" target="_blank">Visual Studio</a> as editor for node js projects
        </li>
        <li>
            <a href="https://tableplus.com/" target="_blank">Table plus</a> to connect to databases
        </li>
        <li>
            <a href="https://desktop.github.com/" target="_blank">Github desktop</a> to manage git projects
        </li>
        <li>
            <a href="https://www.postman.com/" target="_blank">Postman</a> to test API's or trouble shoot them
        </li>
        <li>
            <a href="https://www.sketch.com/" target="_blank">Sketch</a> to see the designs and mockups sent by the designers and export assets.
        </li>
        <li>
            <a href="https://docs.docker.com/docker-for-mac/" target="_blank">Docker for mac</a> to run the docker containers.
        </li>
    </ul>
    <h3>Software for Streaming or recording Live Coding</h3>
    <ul>
        <li>
            <a href="https://www.telestream.net/screenflow/overview.htm" target="_blank">Screen Flow</a> to record and edit videos
        </li>
        <li>
            <a href="https://www.ableton.com/en/live/" target="_blank">Ableton Live 10</a> to record and edit audio
        </li>
    </ul>
    <h3>Hardware for streaming live coding</h3>
    <ul>
        <li>
            <a href="https://www.amazon.com/M-Audio-Vocal-Studio-Recording-Microphone/dp/B004MZG1IO/ref=sr_1_5?adgrpid=81792663296&gclid=EAIaIQobChMI7JnPi-S95wIVmYvICh3x5Ab4EAAYASAAEgI9LfD_BwE&hvadid=402245660567&hvdev=c&hvlocphy=1003659&hvnetw=g&hvpos=1t1&hvqmt=e&hvrand=120474844618842468&hvtargid=kwd-299612812049&hydadcr=22340_11226439&keywords=m+audio+microphone&qid=1581021513&sr=8-5" target="_blank">M Audio Vocal Studio</a> USB microphone to record the voice
        </li>
        <li>
            <a href="https://www.amazon.com/gp/product/B06XF7VHTQ/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&psc=1" target="_blank">Pioneer DJM250MK2</a> As audio interface for the input on background music.
        </li>
    </ul>
    <h3>Hardware for DJ</h3>
    <ul>
        <li>
            <a href="https://www.amazon.com/-/es/Pioneer-DDJ1000SRT-Controlador-de-DJ/dp/B07VYW5D36/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2IFA8NAO4RSDC&dchild=1&keywords=pioneer+ddj+1000+srt&qid=1601257327&sprefix=pioneer+ddj+1000%2Caps%2C211&sr=8-1" target="_blank">Pioneer DDJ 1000 SRT</a> as a DJ controller
        </li>
        <li>
            <a href="https://www.amazon.com/gp/product/B06XHFQSRT/ref=ppx_yo_dt_b_asin_title_o02_s00?ie=UTF8&psc=1" target="_blank">Stanton T.62 MKII</a> - 2 turntables
        </li>
        <li>
            <a href="https://www.amazon.com/gp/product/B001GVJ9XG/ref=ppx_yo_dt_b_asin_title_o01_s00?ie=UTF8&psc=1" target="_blank">Ortofon Omega</a> - 2 Phono Cartridges for thee turntables
        </li>
        <li>
            <a href="https://www.amazon.com/gp/product/B01M1AU6LR/ref=ppx_yo_dt_b_asin_title_o01_s00?ie=UTF8&psc=1" target="_blank">Tascam PORTABLE DIGITAL RECORDER-RED</a> As a digital recorder for my DJ sets.
        </li>
    </ul>
    <h3>Software for DJ</h3>
    <ul>
        <li>
            <a href="https://www.ableton.com/en/live/" target="_blank">Ableton Live 10</a> to record and edit audio
        </li>
        <li>
            <a href="https://serato.com/dj/pro" target="_blank">Serato DJ pro</a> to use alongside the Pioneer DJ controller
        </li>
        <li>
            <a href="https://www.amazon.com/Native-Instruments-Traktor-Scratch-A6/dp/B007PLBAE2/ref=sr_1_5?crid=2FKPJSCIQNPOR&keywords=native+instruments+audio+6&qid=1581022321&sprefix=native+ins%2Caps%2C228&sr=8-5" target="_blank">Native Instruments Traktor Scratch A6</a> to use digital music in the turntables
        </li>
    </ul>
@stop
