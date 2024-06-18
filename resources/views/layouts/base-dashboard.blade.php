<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <!-- Icon Logo -->
    <link rel="icon" type="image" href="assets/img/favicon/favicon.png" />
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

    <!-- DataTables CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">

    <!-- Responsive Datatables CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css">

    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">

    <body>
        <div class="wrapper">
            @include('layouts.sidebar')
            <div class="main">
                @include('partials.navbar')
                @yield('content')
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    @stack('script')
    </body>
</html>