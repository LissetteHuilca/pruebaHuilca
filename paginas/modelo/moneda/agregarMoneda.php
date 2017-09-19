<?php
  session_start();

  if (!isset($_SESSION['user'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
        }else{
            if(!$_SESSION['rol']==1){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
            }else{
 
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registro de fundación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/LogoSupportYou.png" />
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='../../../css/estiloRegistro.css' rel='stylesheet' type='text/css'>
    <link href="../../../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../../administrador.php"><img alt="LogoAplicacion" id="estilo_logo" src="../../../img/LogoSupportYou.png"></a>
            </div>

        </div>
    </nav>


    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">

            <div class="col-md-9">

                <div class="thumbnail">



                    <div>
                        <h3 id="colorTexto"> <span>Completa los datos de la organización</span> </h3>
                        <hr>

                    </div>


                    <div id="formulario">

                        <div class="row">

                            <div class="col-lg-8 col-lg-offset-2">

                                <h1>Registro</h1>

                                <hr id="linea">

                                <form action="guardarMoneda.php" id="contact-form" method="post">

                                    <div class="messages"></div>

                                    <div class="controls">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Nombre *</label>
                                                    <input id="form_name" type="text" name="nombre" class="form-control" required="required">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_city">Ciudad *</label>
                                                    <select id="selectbasic" method="post" name="ciudad" class="form-control" required>
                                                        <option value="" selected>Selecione</option> 
                                                        <?php
                                                        include_once("../../modelo/ciudad/CiudadCollector.php");
     
                                                            $id =1;
                                                            $CiudadCollectorObj = new CiudadCollector();

                                                            foreach ($CiudadCollectorObj->showCiudades() as $c){
                                                                $id =$c->getIdciudad();
                                                                echo "<option value= ".$c->getIdciudad(). ">". $c->getNombre(). "</option>";

                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" id="boton">
                                                
                                                <a href="view.php" id="botonRegresar" class="btn btn-info"> Volver </a>
                                                <button id="botonRegFund" type="submit" class="btn btn-default" name="enviar" >Registrar moneda</button>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <!-- /.8 -->


                        </div>
                        <!-- /.row-->



                    </div>

                    <div>

                        <hr>

                    </div>


                </div>



            </div>

        </div>

    </div>
    <!-- /.container -->




    <!-- /.container-->

    <footer id="footer1">


        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
<?php

}
        }
?>