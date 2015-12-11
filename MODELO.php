<?php
function conectar()
{
/*el $ significa que es una variable*/
	$cadena= mysqli_connect("localhost","root","","Escuela") 
	or die("Error" .mysql_error($cadena));
	return $cadena;

}
function desconectar()
{

	mysql_close($cadena);
}

function insertar($numControl,$nombre,$App,$Apm)
{
	$con=conectar();
	/*mysql_query(conexion,consulta);*/
	mysqli_query($con,
		"insert into Alumnos values('$numControl','$nombre','$App','$Apm')");
if ($sql){
			echo "<script language='JavaScript'>
			alert('Bien Hecho')</script>";
		}
		else{
			echo "<script language='JavaScript'>
			alert('Bien Hecho')</script>";
}


	desconectar($con);
}
?>