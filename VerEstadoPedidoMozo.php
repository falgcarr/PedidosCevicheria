<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
 <div class="navbar navbar-inverse ">
      <div class="navbar-inner"> 
            <a  class="brand"  href="pedidosMozo.php">Regresar</a>
            <a   class="brand"  href="logout.php"> Salir</a>
              
            
          
        </div>
      
    </div>

    <div class="container">
    <h1>Pedidos </h1>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">


    <?php
    // MySQL Connection
    $CodigoComanda=$_GET['NumCom'];
    $concc=mysql_connect("localhost", "DSproy", "DSproy") or die(mysql_error());
    mysql_select_db("puntoblanco") or die(mysql_error());
    
    if(! $concc )
    {
      die('No se puede conectar por: ' . mysql_error());
    }
    // Get all the data from the "example" table

    //SELECT `comanda`.`NumCom` , `producto`.`NomPro`  FROM comanda, producto, detallecomanda WHERE `detallecomanda`.`CodPro` = `producto`.`CodPro`  AND `comanda`.`NumCom` ='".$CodigoComanda."' AND `comanda`.`NumCom` = `detallecomanda`.`NumCom`
    $result = mysql_query("SELECT `comanda`.`NumCom` , `producto`.`CodPro` , `producto`.`NomPro` , `detallecomanda`.`Cant` , `detallecomanda`.`estadoComanda` FROM comanda, producto, detallecomanda WHERE `detallecomanda`.`CodPro` = `producto`.`CodPro`  AND `comanda`.`NumCom` = `detallecomanda`.`NumCom` AND`comanda`.`NumCom` ='".$CodigoComanda."'") 
    or die(mysql_error()); 
    

contar($result);

 function contar($result)
   {
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead> <th>Numcomanda</th> <th>CodPlato</th> <th>NombrePlato</th>  <th> Cantidad </th> <th> Estado </th> <th> CambiarEstado </th>  </thead>";
 while($row = mysql_fetch_array( $result )) {
  
      
      
       
              echo "<tr><td>";
      echo $row[0];
      echo "</td><td>"; 
      echo $row[1];
      echo "</td><td>"; 
      echo $row[2];
      echo "</td>";
      echo "<td>"; 
      echo $row[3];
      echo "</td>";
      echo "<td>"; 
      echo $row[4];
      echo "</td>";
      if ($row[4]=='R'){
      echo "<td>"; 
       echo "$row[3]";
      echo " <a class='btn btn-danger' href='./CambiarEstadoPedido.php?NumCom=".$row[0]."&CodPro=".$row[1]."&Cant=".$row[3]."'><i class='icon-trash icon-white'></i>RecogerCocina</a>";
      echo "</td>";
      }
      echo "</tr>"; 
      
      
      

 }
     
 echo "</table>";
   }

   

   
    ?>


    <div id="windowTitleDialog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true">
        <div class="modal-header">
          <a href="#" class="close" data-dismiss="modal">&times;</a>
          <h3>Listado de Productos</h3>
          </div>

        <div class="modal-body">   
        </div>


          <div class="modal-footer">
          <a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
          <a href="#" class="btn btn-primary" onclick="okClicked ();">OK</a>
          </div>
  </div>

<script type="text/javascript">
            $(function(){
                // Indica el nombre del archivo a cargar
                $("#windowTitleDialog").load("modal2.php"); 
            });
        </script>

<script>
        $(document).on("click", ".open-Modal", function () {
        var variable = $(this).data('id');
        $(".modal-header");
        });
      </script>
      

      <script>
      $(document).ready(function() {
        $('#windowTitleDialog').bind('show', function () {
          document.getElementById ("xlInput").value = document.title;
          });
        });
      function closeDialog () {
        $('#windowTitleDialog').modal('hide'); 
        };
      function okClicked () {
        document.title = document.getElementById ("xlInput").value;
        closeDialog ();
        };
      </script>

      



      </div>

      <!-- Example row of columns -->

      <hr>

      <footer>
        <p></p>
      </footer>

    </div> <!-- /container -->




















    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>



    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-modal.js"></script>


  </body>
</html>
