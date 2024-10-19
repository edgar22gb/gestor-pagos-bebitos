<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bitacoras </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
</head>
<body>

<div class="container mt-3">
  <h2>Registro de Bitacoras</h2>
  <form action="" method="post">
    <label for="">Curp</label>
<!--EL CURP SE OBTIENE DE LOS DATOS DE LA TABLA ALUMNOS-->
    <select name="id_estudiante" id="" class="form-control mt-3"></select>

  <label for="">Fecha de Ingreso</label>
  <input type="date" class="form-control mt-3" name="fecha_nacimiento" id="">

 <label for="">Tipo de ingreso</label>
<select name="tipo_ingreso" id="" class="form-control mt-3">
<option value="entrada">Entrada</option>
<option value="salida">Salida</option>

</select>
  <label for="">Hora de ingreso</label>
  <input type="time" class="form-control mt-3" name="domicilio">
  </form>
  
    
  
</div>

</body>
</html>
