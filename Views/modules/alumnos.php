

<div class="container mt-3">
  
  <h2>Registro de Alumnos-Lactantes</h2>
  <form action="" method="post">
    <div class="row">
      <div class="col-md-3">
      <label for="">Curp</label>
      <input type="text" class="form-control mt-3" placeholder="CURP" name="curp">    
      </div>
    
    <div class="col-md-3">
    <label for="">Apellido Paterno</label>
    <input type="text" class="form-control mt-3" placeholder="Apellido Paterno" name="apellido_paterno">
    </div>
   <div class="col-md-3">
   <label for="">Apellido Materno</label>
   <input type="text" class="form-control mt-3" placeholder="Apellido Materno" name="apellido_materno">
   </div>
   <div class="col-md-3">
   <label for="">Nombre</label>
   <input type="text" class="form-control mt-3" placeholder="Nombre" name="nombre">
   </div>
   <div class="col-md-3">
   <label for="">Sexo</label>
  <select name="sexo" id="" class="form-control mt-3">
    <option value="1">Masculino</option>
    <option value="2">Femenino</option>

  </select>
   </div>
  <div class="col-md-3">
  <label for="">Fecha de Nacimiento</label>
  <input type="date" class="form-control mt-3" name="fecha_nacimiento" id="">

  </div>
  <div class="col-md-3">
  <label for="">Grado</label>
<!--TOMAR LOS VALORES DE LA CONSULTA A LA TABLA GRADOS-->
  <select name="id_grado" id="" class="form-control mt-3">
  </select>

  </div>  
  
<div class="col-md-3">
<label for="">Nivel</label>
  <!---TOMAR LOS VALORES DE LA CONSULTA A LA TABLA NIVELES-->
  <select name="id_nivel" id="" class="form-control mt-3">
    <option value="1">Lactantes</option>
  </select>

</div>  <br><br>
<hr>
 
  <div class="col-md-3">
  <label for="">Apellido paterno del tutor</label>
  <input type="text" class="form-control mt-3" name="apellido_paternotutor">

  </div>
  
<div class="col-md-3">
<label for="">Apellido materno del tutor</label>
  <input type="text" class="form-control mt-3" name="apellido_maternotutor">

</div>  
<div class="col-md-3">
<label for="">Nombre del tutor</label>
  <input type="text" class="form-control mt-3" name="nombre_tutor">

</div>  
<div class="col-md-3">
<label for="">Domicilio</label>
  <input type="text" class="form-control mt-3" name="domicilio">
</div>  
<div class="col-md-3">
  <label for="">Télefono Fijo</label>
  <input type="text" name="telefono_fijo" id="" class="form-control">
</div>
<div class="col-md-3">
  <label for="">Télefono de emergencia</label>
  <input type="text" name="telefono_emergencia" id="" class="form-control">
</div>
  
<hr>
<div class="form-group">
                <button class="btn btn-primary" type="submit" id="registra_alumno" name="btn_registrar">Registrar</button>
                

              
             
            </div>
  </form>
  
    
  
</div>

