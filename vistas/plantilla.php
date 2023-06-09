<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Inventory System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/icono-negro.png">
  <!--//! ========================  PLUGINS CSS  --> 

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!--//! ========================  PLUGINS JS  -->

    <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="vistas/dist/js/demo.js"></script>
  <script>
    $(document).ready(function () {
      $('.sidebar-menu').tree()
    })
  </script>
</head>

<!-- //!  CUERPO DOCUMENTO--> 
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
<!-- Site wrapper -->
<?php 

if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"]=="ok"){//si ya inicio sesion
    echo '<div class="wrapper">';



        // CABEZOTE
        include  "modulos/cabezote.php";
        //MENU LATERAL
        include  "modulos/menu.php"; 
        //CONTENIDO


        //*METODO DE RUTEO
        if(isset($_GET["ruta"])){ //CODIGO DE RUTEO EN .htacess para ocultar la ruta RUTEO AMIGABLE
          if($_GET["ruta"]=="inicio"||$_GET["ruta"]=="usuarios"||$_GET["ruta"]=="categorias"||$_GET["ruta"]=="productos"||$_GET["ruta"]=="clientes"||$_GET["ruta"]=="crear-venta"||$_GET["ruta"]=="reportes"||$_GET["ruta"]=="ventas"){

            include  "modulos/".$_GET["ruta"].".php";
            
          }else{
            include "modulos/404.php";
          }
        }else{
          include "modulos/inicio.php";
        }
        //FOOTER
        include  "modulos/footer.php";
        



    echo '</div>';
  }else{
    include "modulos/login.php";
  }

    ?>
  
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->

 

  <!-- Control Sidebar -->
  

<!-- ./wrapper -->
<script src="vistas/js/plantilla.js">  </script>

</body>
</html>
