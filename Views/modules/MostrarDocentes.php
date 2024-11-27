<body>
<div class="container mt-3">
<h2>Lista de Personal</h2>


<div class="table-sorting table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>Clave Docente</th>
                                            <th>Nombre Completo</th>
                                            <th>Dirección</th>
                                            <th>Entidad</th>
                                            <th>Localidad</th>
                                            <th>Fecha de Ingreso</th>
                                            <th>Perfil Profesional</th>
                                            <th>Funciones</th>
                                            <th>Editar</th>
                                            
											
                                        </tr>
                                    </thead>
                                    <tbody>
</div>

<?php

$docentes=DocentesCtr::mostrarDocentes();   
foreach ($docentes as $docente)
{

?>
<tr>
<td><?php echo $docente["clave_docente"]?></td>
<td><?php echo $docente["nombre_docente"],'&nbsp;',$docente["primer_apellido"],'&nbsp;',$docente["segundo_apellido"]?></td>
<td><?php echo $docente["domicilio"]?></td>
<td><?php echo $docente["entidad"]?></td>
<td><?php echo $docente["localidad"]?></td>
<td><?php echo $docente["fecha_ingreso"]?></td>
<td><?php echo $docente["preparacion_profesional"]?></td>
<td><?php echo $docente["funcion"]?></td>
<td>
<a href="editar-docentes/<?php echo $docente["id"]?>" class="btn btn-warning">Editar</a>
</td>
</tr>
<?php
}
?>
</table>