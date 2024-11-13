@include('layouts.head')

<body class="index-page" style="background-color: black">
    @include('layouts.header')

    <main class="main" style="background-color: black">
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Preloader -->
    <div id="preloader"></div>

    @include('layouts.script')
</body>

</html>
