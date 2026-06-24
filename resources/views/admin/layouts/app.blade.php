<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

        <title>
            @yield('title') 
            @yield('description')
        </title>
          
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="{{ asset('css/admin.css') }}"
          rel="stylesheet">

    @stack('styles')
</head>
<body>

@include('admin.partials.navbar')

@include('admin.partials.sidebar')

<div class="content-area">

    @include('admin.partials.page-header')

    <div class="admin-content-wrapper">
        @yield('content')
    </div>

</div>

@include('admin.partials.footer')

@include('admin.partials.scripts')

@stack('scripts')

</body>
</html>