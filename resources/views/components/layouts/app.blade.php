<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.header')

<body>

    @include('includes.nav')
    {{ $slot }}
    @include('includes.footer')

    @livewireScripts
</body>

</html>