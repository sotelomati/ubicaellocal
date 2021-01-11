<!DOCTYPE html>
<html lang="en">

<style>
  .columnas{
    color:white;
    font-size: 40px;
    border-right: 1px solid #d6d6d6;
    text-align:center;
    margin-bottom: 10px;
  }

  .columnas:hover {
    color:#52c9cc
  }

  .columnas:last-child{
    border:none;
  }

  .uel{
    font-size: 125px;
    text-align:center;
    font-family: 'Brush Script MT';
  }

  .uel a{
    color:white;
  }

 
</style>

<body>

    <?php
    include ("PHP/include/head.php");
    ?>

    <div class="container-fluid" style="background-color: #212121" >

        <div class="row justify-content-center">

          <div class="col-12 uel" > <a href="index.php" style="text-decoration:none;"> Ubica el local</a> </div>
    
          <div class="col-12 col-md-6 col-lg-3 columnas" style="color:#f00">Ofertas</div>
          <div class="col-12 col-md-6 col-lg-3 columnas" >Gluten Free</div>
          <div class="col-12 col-md-6 col-lg-3 columnas" >Servicio El Noble</div>
          <div class="col-12 col-md-6 col-lg-3 columnas" >Contacto</div>

        </div>

          
    </div>


</body>
</html>