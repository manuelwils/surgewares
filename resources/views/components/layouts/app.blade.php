<!DOCTYPE html>
<html class="Homepage" lang="en">

    @livewire('components.header')

    <body class="Page-body">

        @livewire('components.nav')

        {{ $slot }}
        
        @livewire('components.footer')

    </body>

</html>