<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Senati</title>
    <script>
        $(document).ready(function(){
            $('#enlace01').on('click',function(){
                $.ajax({
                    type:"POST",
                    url:"mapas/mapa1.php",
                    success:function(response){
                        $("#zona").html(response);
                    }
                });
                return false;
            });
            $('#enlace02').on('click',function(){
                $.ajax({
                    type:"POST",
                    url:"mapas/mapa2.php",
                    success:function(response){
                        $("#zona").html(response);
                    }
                });
                return false;
            });
            $('#enlace03').on('click',function(){
                $.ajax({
                    type:"POST",
                    url:"mapas/mapa3.php",
                    success:function(response){
                        $("#zona").html(response);
                    }
                });
                return false;
            });
            $('#enlace04').on('click',function(){
                $.ajax({
                    type:"POST",
                    url:"mapas/mapa4.php",
                    success:function(response){
                        $("#zona").html(response);
                    }
                });
                return false;
            });
            $('#enlace05').on('click',function(){
                $.ajax({
                    type:"POST",
                    url:"mapas/mapa5.php",
                    success:function(response){
                        $("#zona").html(response);
                    }
                });
                return false;
            });
            $('#enlace06').on('click',function(){
                $.ajax({
                    type:"POST",
                    url:"mapas/mapa6.php",
                    success:function(response){
                        $("#zona").html(response);
                    }
                });
                return false;
            });
            $('#enlace07').on('click',function(){
                $.ajax({
                    type:"POST",
                    url:"mapas/mapa7.php",
                    success:function(response){
                        $("#zona").html(response);
                    }
                });
                return false;
            });
        })
    </script>
</head>
<body>
    <!--Banner-->
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="#"><img src="img/logosnt.png" width="100" alt=""></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#sedes">Sedes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        </ul>
    </div>
    </nav>

    <!--Sedes-->
    <div class="container" id="sedes">
        <div>
           <h1>Sedes de Senati</h1>
        </div>
        <div class="row">
      
            <div class="col-3" style="background-color: transparent; height:450px; overflow-y:scroll;">
                <!--Menú lateral izquierda-->
                <div>
                    <div>
                        <p class="sedesnt" >Villa el Salvador</p>
                    </div>
                    <div class="info">
                        <div class="row">
                                <div class="col-4">
                                    Dirección:
                                </div>
                                <div class="col-8">
                                    <a id="enlace01" href="">Av. Pachacutec Mza. A, Lote. 1 Z.I., Parque Industrial</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    Teléfono:
                                </div>
                                <div class="col-8">
                                    (01) 2877836
                                </div>
                            </div>
                                                     
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="sedesnt">San Martin de Porres</p>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-4">
                                    Dirección:
                                </div>
                                <div class="col-8">
                                    <a id="enlace02" href="">Esq. Isidro Alcibar y Mauro Valderrama S/N, Urb, Ingenieria</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    Teléfono:
                                </div>
                                <div class="col-8">
                                    +51 946 973 754 (Atención solo vía wsp)
                                </div>
                            </div>
                                               
                            
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="sedesnt">Surquillo</p>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-4">
                                    Dirección:
                                </div>
                                <div class="col-8">
                                    <a id="enlace03" href="">Av. Barbara D'Achille 230 Urb. La Calera de la Merced</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    Teléfono:
                                </div>
                                <div class="col-8">
                                    +51 946 973 754 (Atención solo vía wsp)
                                </div>
                            </div>
                                               
                            
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="sedesnt">San Juan de Lurigancho</p>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-4">
                                    Dirección:
                                </div>
                                <div class="col-8">
                                    <a id="enlace04" href="">Av. Canto Grande #114</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    Teléfono:
                                </div>
                                <div class="col-8">
                                    +51 946 973 754 (Atención solo vía wsp)
                                </div>
                            </div>
                                               
                            
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="sedesnt">Cercado de Lima</p>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-4">
                                    Dirección:
                                </div>
                                <div class="col-8">
                                    <a id="enlace05" href="">Av. 28 de Julio #715</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    Teléfono:
                                </div>
                                <div class="col-8">
                                    +51 946 973 754 (Atención solo vía wsp)
                                </div>
                            </div>
                                               
                            
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="sedesnt">Ventanilla</p>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-4">
                                    Dirección:
                                </div>
                                <div class="col-8">
                                    <a id="enlace06" href="">Av.Pedro Beltran #672, Urb. Ciudad Satelite</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    Teléfono:
                                </div>
                                <div class="col-8">
                                    +51 946 973 754 (Atención solo vía wsp)
                                </div>
                            </div>
                                               
                            
                        </div>
                    </div>
   
                </div>
                <div class="col-9" style="background-color: tranparent;">
                    <!--Resultados-->
                    <div id="zona">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d499488.98261667707!2d-77.31745714900647!3d-12.02577325446036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses-419!2spe!4v1681753987404!5m2!1ses-419!2spe" width="850" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
</body>


<footer style="background-color:blue; padding: 12px 0;text-align:center; height:50px; position:fixed; bottom:0; width:100%; "  >
    <p style="color:white;">Angela Alexandra Vegas Ayerve - 1474170</p>
              
</footer>
</html>