<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
</head>
<body>

<div class="container mt-3">
  <h2>Registro de Alumnos</h2>
  <form action="" method="post">
    <label for="">Curp</label>
    <input type="text" class="form-control mt-3" placeholder="CURP" name="curp">
  <label for="">Apellido Paterno</label>
    <input type="text" class="form-control mt-3" placeholder="Apellido Paterno" name="apellido_paterno">
  <label for="">Apellido Materno</label>
  <input type="text" class="form-control mt-3" placeholder="Apellido Materno" name="apellido_materno">
  <label for="">Nombre</label>
  <input type="text" class="form-control mt-3" placeholder="Nombre" name="nombre">
  <label for="">Sexo</label>
  <select name="sexo" id="" class="form-control mt-3">
    <option value="1">Masculino</option>
    <option value="2">Femenino</option>

  </select>

  <label for="">Fecha de Nacimiento</label>
  <input type="date" class="form-control mt-3" name="fecha_nacimiento" id="">

  <label for="">Grado</label>
<!--TOMAR LOS VALORES DE LA CONSULTA A LA TABLA GRADOS-->
  <select name="id_grado" id="" class="form-control mt-3">
  </select>

  <label for="">Nivel</label>
  <!---TOMAR LOS VALORES DE LA CONSULTA A LA TABLA NIVELES-->
  <select name="id_nivel" id="" class="form-control mt-3"></select>

  <label for="">Apellido paterno del tutor</label>
  <input type="text" class="form-control mt-3" name="apellido_paternotutor">

  <label for="">Apellido materno del tutor</label>
  <input type="text" class="form-control mt-3" name="apellido_maternotutor">

  <label for="">Nombre del tutor</label>
  <input type="text" class="form-control mt-3" name="nombre_tutor">

  <label for="">Domicilio</label>
  <input type="text" class="form-control mt-3" name="domicilio">
  </form>
  
    
  
</div>

</body>
</html>
