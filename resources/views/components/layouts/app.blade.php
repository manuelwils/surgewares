<!DOCTYPE html>
<html class="Homepage" lang="en">

    @livewire('components.header')

    <body class="Page-body">

        @livewire('components.nav')

        {{ $slot }}
        
        @livewire('components.footer')

        @livewireScripts
        <script src="{{ asset('assets/js/livewire-turbolinks.min.js') }}" data-turbolinks-eval="false"></script>
        <script type="text/javascript" src="{{ asset('assets/js/alpine.min.js') }}"></script>

    </body>

</html>