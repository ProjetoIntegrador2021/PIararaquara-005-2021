<html>
<head>
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet">
    <title>Estoque</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        /*body {
            padding: 0px;

        }*/
        #tabelaPecas{
            padding: 2000px;
        }
        button{
            margin: 2px;
        }
        .img-fluid {
            width: 100px;
        }
        #selectLocal {
            width: 340;
            /*width: auto;*/
        }

    </style>
     
</head>
<body>
  @hasSection('navbar')
        @yield('navbar')
    @endif
    @hasSection('body')
        @yield('body')
    @endif
    
    <script src="{{URL::to('js/app.js')}}" type="text/javascript">
    </script>
</body>
</html>