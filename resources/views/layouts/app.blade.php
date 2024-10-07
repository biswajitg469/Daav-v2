<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DAAV Management System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.css">

    <link rel="stylesheet" href="css/skin-green.css">

    <!-- JS -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script> --}}
    <script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script src="js/bootstrap.datetime.js"></script>
    <script src="js/bootstrap.password.js"></script>
    <script src="js/scripts.js"></script>

    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    {{--
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"> --}}
    <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <x-layouts.header />
    <x-layouts.sidebar />
    <!-- <div class="wrapper"> -->
    <div class="content-wrapper">
        <section class="content-header">
            {{ $title ?? '' }}
        </section>
        {{ $content ?? '' }}
        {{ $scripts ?? '' }}
    </div>
    <x-layouts.footer />
    <!-- </div> -->
</body>

</html>