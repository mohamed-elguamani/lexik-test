<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('partials._header')
</head>
<body>
    {{-- navbar --}}
    @include('partials._nav')

    <div class="container main-content">
        {{-- help messages --}}
    	@include('partials._help')
        {{-- main content --}}
        @yield('content')
    </div>
        {{-- footer --}}
        @include('partials._footer')
        {{-- required js files --}}
        @include('partials._scripts')
</body>

</html>
