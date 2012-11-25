<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Perfil</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-1.2.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
        <script src="./Recursos/tabla.js"></script>


    </head>
    <body>

        <div data-role="page" data-theme= "a">

            <div data-role="header" data-theme ="b" style=" height: 167px;"><!--background-image: url(banner.png); -->
                <div data-theme = "d" STYLE="background: #0052a0;">
                    <h2> <p align="center" >Asignatura: Aplicaciones en el Web y Redes Inal&aacute;mbricas</br>
                            Taller: Pruebas de Rendimiento</br>
                            Profesor: Lu&iacute;s Hernando Garc&iacute;a</br></p></h2>

                </div>
            </div><!-- /header -->


            <div data-role="content" data-theme = "a">	
                <div class="ui-grid-b">
                    <div class="ui-block-a" style="width:10%; margin:3%">

                        <img src="./Recursos/mio.jpeg"  alt="mio" align="left"> 
                    </div>

                    <div class="ui-block-b"  align="center" style="width:30%; margin:3%">               


                        <form name="formMiPerfil" action="" method="post" enctype="multipart/form-data">
                            <div data-role="fieldcontain" >
                                <label for="basic" data-mini="true" >Documento Usuario:</label><br> 
                                <input type="text" name="documento" id="documento" value="" data-mini="true"   style="width:200px;height:30px;"  required=""><br>
                            </div>
                            <div data-role="fieldcontain" >
                                <label for="basic" data-mini="true"  >Fecha:</label><br> 
                                <input data-mini="true" type="text" id="datepicker" style="width:200px;height:30px;"  required="" ><br>
                            </div> 
                            <div data-role="fieldcontain">
                                <label for="basic" data-mini="true" >Hora: </label> <br>
                                <input type="text" name="hora" id="hora" value="" data-mini="true"   style="width:200px;height:30px;"  required=""><br>
                            </div> 
                            <div data-role="fieldcontain"  >
                                <label for="basic" data-mini="true" >Minutos Espera:</label><br>
                                <input type="text" name="min" id="min" value="" data-mini="true"   style="width:200px;height:30px;"  required=""><br>
                            </div> 
                            <div data-role="fieldcontain" >
                                <label for="basic" data-mini="true"  >Estacion origen:</label> <br>
                                <input type="text" name="estO" id="estO" value="" data-mini="true"   style="width:200px;height:30px;"  required=""><br>
                            </div> 
                            <div data-role="fieldcontain" >
                                <label for="basic" data-mini="true"   >Estacion destino:</label> <br>
                                <input type="text" name="estD" id="estD" value="" data-mini="true"   style="width:200px;height:30px;"  required=""><br>
                            </div> 
                            <div data-role="controlgroup" data-type="horizontal" data-mini="true">
                                <input  data-role="button" value="Insertar" type="submit" STYLE=" background-color: #0000FF;"/> 
                                <input  data-role="button" value="Consultar" type="submit" STYLE=" background-color: #0000FF;"/> 

                                <input  data-role="button" value="Modificar" type="submit" STYLE=" background-color: #0000FF;"/> 

                                <input  data-role="button" value="Eliminar" type="submit" STYLE=" background-color: #0000FF;"/> 

                            </div>
                        </form>



                    </div>
                    <div class="ui-block-c" style="width:40%; " >
                        <table border="1"  bordercolor="blue" id="tabla">
                            <tr>
                                <th>Cod.Viaje</th>
                                <th>Doc. Pasajero</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Minutos Espera</th>
                                <th>Estacion Origen</th>
                                <th>estacion Destino</th>
                                <th>Opciones</th>
                            </tr>
                            

                          

                        </table>

                    </div>

                </div>



            </div><!-- /content -->

            <div data-role="footer" data-theme = "b"STYLE=" background: #0052a0;"  align=center">
                <h4><p align="center" color="white">UNIVERSIDAD DEL VALLE</br>
                        Taller Carga y Estres</p></h4>
            </div>


        </div><!-- /page -->
        <script>
            $(function() {
                $( "#datepicker" ).datepicker();
            });
        </script>

    </body>




</html>
