<!DOCTYPE html>
<html lang="en">

    <?php
    include ("PHP/include/head.php");
    ?>

<style>

  .columnas{
    font-size: 40px;
    border-right: 1px solid #d6d6d6;
    text-align:center;
    margin-bottom: 10px;
  }

  .columnas:last-child{
    border:none;
  }

  .columnas a{
    color:white;
    text-decoration:none;
  }

  .columnas a:hover {
    color:#52c9cc;
  }

  .uel{
    font-size: 125px;
    text-align:center;
    font-family: 'Brush Script MT';
  }

  .uel a{
    color:white;
  }

  .uel a:hover{
    color:red;
    transition: color 1s;
  }

  .uel img{
    width: 100px;
    height: auto;
    margin-bottom:50px;
  }
 
</style>

<body>

    
    <div class="container-fluid" style="background-color: #212121" >

        <div class="row justify-content-center">

          <div class="col-12 uel" ><a href="index.php" style="text-decoration:none;"> <img src="Imagenes/descarga1.png" alt=""> Ubica el local</a> </div>
    
          <div class="col-12 col-md-6 col-lg-3 columnas"> <a href="#"  style="color:#f00"> Ofertas </a> </div>
          <div class="col-12 col-md-6 col-lg-3 columnas" > <a href="#"> Gluten Free </a> </div>
          <div class="col-12 col-md-6 col-lg-3 columnas" > <a href="#"> Servicio El Noble </a> </div>
          <div class="col-12 col-md-6 col-lg-3 columnas" > <a href="#">  Contacto </a></div>

        </div>

          
    </div>



</body>
</html>