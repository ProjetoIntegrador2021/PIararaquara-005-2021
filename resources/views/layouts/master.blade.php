<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap4.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- jQuery -->
  <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->

  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="{{asset('AdminLTE/plugins/morris/morris.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('AdminLTE/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- jvectormap -->
  <script src="{{asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('AdminLTE/plugins/knob/jquery.knob.js')}}"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- datepicker -->
  <script src="{{asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <!-- Slimscroll -->
  <script src="{{asset('AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('AdminLTE/plugins/fastclick/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('AdminLTE/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--   <script src="{{asset('AdminLTE/dist/js/pages/dashboard.js')}}"></script> -->
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>


  <style>
    /*body {
            padding: 0px;

            }*/
            #TabelaPecas{
              padding: px;
            }
            #TabelaEquipamento{
              padding: px;

            }
            button{
              margin: 2px;
            }
            .img-fluid {
              width: 100px;
            }
            .img-alert{
              width: 20px;
            }
            .modal-danger{
              background-color: red;
            }
            .modal-warning{
            background-color: gold;
            }
            .modal-title-apagar{
              color: white;
            }
        /*#selectLocal {
            width: 340;
            /*width: auto;*/
            /*}*/
            .modal-success{
              background-color: #28B463;
            }

            #UserNome {
              width: 30px;
              /*width: auto;*/

            }
            #TabelaPecas{
              margin-left:auto;
              margin-right:auto;
              width:100%;
            }

            #TabelaEquipamento{
              margin-left:auto;
              margin-right:auto;
              width:100%;
            }

            #TabelaVermais{
              margin-left:auto;
              margin-right:auto;
              width:100%;
            }

            #TabelaUsuarios{
              margin-left:auto !important;
              margin-right:auto !important;
              width:100% !important;
              font-weight:normal !important;
            }

            #Usuariosidebar{
              text-align: center;

            }
            #LarguraUsuarios{

              width:100%;
              margin-left:auto;
              margin-right:auto;
            }

            #Funcioando{
              position: relative;
              margin-left:25%;
              top: -158px;
            }
            #Obsoleto{
              position: relative;
              margin-left:50%;
              top: -316px;
            }
            #Quebrado{

              position: relative;
              margin-left:75%;
              top: -474px;
            }
            #Estoque{
              height: 30%;
            }
            #DonutChart{
              width: 30%;
              height: 30%;
              top:-300px;
            }
          </style>


        </head>
        <body class="hold-transition sidebar-mini">
          <div class="wrapper" id="app">
            <!-- Sidebar -->
            @include('layouts.topbar')  
            @include('layouts.sidebar')  
            @yield('content') 

          </div>
        </body>
        </html>
