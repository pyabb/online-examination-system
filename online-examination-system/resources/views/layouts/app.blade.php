<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

    <x-section.head>
        <x-slot name="css">
            {{ $css ?? '' }}
        </x-slot>
    </x-section.head>

    <body class="app sidebar-mini ltr dark-mode">
        <x-common.global-loader />
        <div class="page">
            <div class="page-main">
                <!-- app header -->
                <x-section.header />

                <!-- app sidebar -->
                <x-section.sidebar />

                <!-- app content -->
                {{ $slot }}

                <!-- app country selector -->
                {{--<x-common.country-selector />--}}

                <!-- app footer -->
                <x-section.footer />
            </div>
        </div>

        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
        <x-section.asset-js>
            {{ $asset_js }}
        </x-section.asset-js>
    </body>
</html>
