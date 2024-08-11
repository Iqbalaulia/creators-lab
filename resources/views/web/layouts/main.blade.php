<!DOCTYPE html>
<html lang="id">

@include('web.layouts.head')

<body class="theme-color-10">

    {{-- loader skeleton --}}
    @include('web.components.loader-skeleton')
    {{-- end loader skeleton --}}

    {{-- header --}}
    @include('web.layouts.header')
    {{-- end header --}}

    {{-- content --}}
    @yield('content')
    {{-- end content --}}

    {{-- footer --}}
    @include('web.layouts.footer')
    {{-- end footer --}}

    {{-- scroll to top --}}
    @include('web.components.popup-information')
    {{-- end scroll to top --}}

    {{-- scroll to top --}}
    @include('web.components.scroll-top')
    {{-- end scroll to top --}}

    <!-- latest jquery-->
    <script src="{{ asset('assets/web/js/jquery-3.3.1.min.js') }}"></script>

    <!-- menu js-->
    <script src="{{ asset('assets/web/js/menu.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('assets/web/js/lazysizes.min.js') }}"></script>

    <!-- slick js-->
    <script src="{{ asset('assets/web/js/slick.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/web/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('assets/web/js/bootstrap-notify.min.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('assets/web/js/theme-setting.js') }}"></script>
    <script src="{{ asset('assets/web/js/script.js') }}"></script>

    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
</body>

</html>
