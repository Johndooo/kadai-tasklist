<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task List v2.0</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            .ctnr {padding: 0 10px; text-align:center;}
            .ctnr table td {padding: 5px; text-align:left;}
            h1 {font-size:22px;margin: 0 0 30px;}
            table {margin:0 0 30px;}
            .clearfix {
                background: none;
                display:block;
                width:100%;
            }
            .clearfix::after {
                  content: '';
                  display: block;
                  clear: both;
                }
            input[type="submit"],
            input[type="reset"] {
                display:block;
                margin: 0 auto;
                min-width: 200px;
            }
            .btn {
                min-width: 200px;
            }
        </style>
    </head>

    <body>
        @include('commons.navbar')
        @include('commons.error_messages')

        @yield('content')
    </body>
</html>
