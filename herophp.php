  <div class="navbar navbar-inverse ">
      <div class="navbar-inner"> 
            <a  class="brand"  href="herophp.php">Mis Pedidos por Cobrar o Cancelar</a>
            <a  class="brand"  href="hero.html">Mis historial de facturas </a>
         
            <a  class="brand"  href="personal_Insertar.php">Nuevo Usuario</a>
            <a  class="brand"  href="personal_Buscar.php">Busqueda Usuarios</a>
            <a  class="brand"  href="personal_Listar.php">Lista Usuarios</a>
            <a  class="brand"  href="VentasDelDia.php"> Ventas de Dia</a>
      <a  class="brand"  href="VentasMozo.php">Ventas del Mozo</a>
            <a   class="brand"  href="logout.php"> Salir</a>
        </div>
      
    </div>

    <?php
    // MySQL Connection
    $concc=mysql_connect("localhost", "DSproy", "DSproy") or die(mysql_error());
    mysql_select_db("puntoblanco") or die(mysql_error());
    
    if(! $concc )
    {
      die('No se puede conectar por: ' . mysql_error());
    }
    // Get all the data from the "example" table
    $result = mysql_query("SELECT * FROM comanda") 
    or die(mysql_error());  

    echo "<table class='table table-striped table-bordered'>";
    echo "<thead> <th>NumCom</th> <th>CodPer</th> <th>NumMesa</th> <th>Ver Productos</th> <th>Cobrar</th> <th>Eliminar</th> </thead>";
    // keeps getting the next row until there are no more to get
    while($row = mysql_fetch_array( $result )) {
      // Print out the contents of each row into a table

      echo "<tr><td>"; 
      echo $row[0];
      echo "</td><td>"; 
      echo $row[1];
      echo "</td><td>"; 
      echo $row[2];
      echo "</td><td>"; 
      echo "<a data-toggle='dropdown' href='./herophp2.php?NumCom=".$row['NumCom']."' class='btn btn-primary btn-small'>Ver Productos</a>";
      echo "</td><td>"; 
      echo "<a class='btn btn-danger' href='./Cobrar.php?NumCom=".$row['NumCom']."' class='btn btn-primary btn-small'>Cobrar</a>";
      echo "</td><td>"; 
      echo "<a class='btn btn-danger' href='./elimina.php?NumCom=".$row['NumCom']."'><i class='icon-trash icon-white'></i> Eliminar</a>";
      echo "</td></tr>"; 
    } 

    echo "</table>";
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
