@include('include_part.head')
<body>
    <div id="app">
        @include('include_part.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('include_part.footer')
    @include('include_part.additional')
</body>
</html>
