<!DOCTYPE html>
<html lang="en">

 <!-- <?php
    include ("PHP/include/head.php");
    ?>   -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubica el local</title>
    <link rel="stylesheet" type="text/css" href="Estilos/style.css" media="screen" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<style>

  .columnas{
    font-size: 30px;
    border-right: 1px solid #d6d6d6;
    text-align:center;
    margin-bottom: 15px;
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
    font-size: 95px;
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
    width: 80px;
    height: auto;
    margin-bottom:35px;
  }
 
</style>

<body>
 
    <div class="headTop">
    <div class="container-fluid" style="background-color: #212121; " >

        <div class="row justify-content-center">

          <div class="col-12 uel" ><a href="index.php" style="text-decoration:none;"> <img src="Imagenes/descarga1.png" alt=""> Ubica el local</a> </div>
    
          <div class="col-12 col-md-6 col-lg-3 columnas"> <a href="#"  style="color:#f00"> Ofertas </a> </div>
          <div class="col-12 col-md-6 col-lg-3 columnas" > <a href="#"> Gluten Free </a> </div>
          <div class="col-12 col-md-6 col-lg-3 columnas" > <a href="#"> Servicio El Noble </a> </div>
          <div class="col-12 col-md-6 col-lg-3 columnas" > <a href="#">  Contacto </a></div>
        </div>
          
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</body>
</html>