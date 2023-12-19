<body>
    @include('layouts.head')
    <header>
        @include('layouts.nav')
    </header>
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>

