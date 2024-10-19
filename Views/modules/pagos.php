<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
</head>
<body>
<div class="container mt-3">
    <h2>Pagos</h2>

    
  <form action="" method="post">
   

  <label for="">Clave de Alumno</label>
<!--TOMAR LOS VALORES DE LA CONSULTA A LA TABLA GRADOS-->
  <select name="id_alummno" id="" class="form-control mt-3">
  </select>

  <label for="">Monto de pago</label>
  <!---TOMAR LOS VALORES DE LA CONSULTA A LA TABLA NIVELES-->
  <input type="text" class="form-control mt-3" name="monto_pago">

  <label for="">Mes de pago</label>
  <input type="date" class="form-control mt-3" name="mes_pago" id="">

  <label for="">Concepto de pago</label>
  <textarea name="concepto" id="" cols="30" class="form-control mt-3" ></textarea>

  
  </form>
  

</div>
</body>
</html>