@extends('layouts.auth')
@section('auth')

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        @include('layouts.header')
        <div class="app-body">
            @include('layouts.sidebar')
            <main class="main">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    <footer class="app-footer">
        <div>
            <a href="https://coreui.io/pro/">CoreUI Pro</a>
            <span>© 2018 creativeLabs.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io/pro/">CoreUI Pro</a>
        </div>
    </footer>
</body>

<script type="text/javascript" src="js/app.js"></script>

@endsection