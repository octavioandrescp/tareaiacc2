<?php
$examenes = array('23.569.569' => 4.5, '16.257.788' => 3.9, '15.325.816' => 5.7, '12.259.167' => 3.4,
'13.748.985' => 7);
echo "<h2>LISTA DE ALUMNOS CON RUT:</h2>";
foreach($examenes as $rut=>$calif):
echo "<p> RUT: $rut , calificacion: $calif</p>";
endforeach;
echo "<h2>RESULTADOS:</h2>";
$califMax = 0;
$rutCalifmax = 0;
foreach($examenes as $rut=>$calif):
if($calif > $califMax){$califmax = $calif;
$rutCalifmax = $rut;
}

endforeach;
echo "<p>1) El Rut con la nota mas alta es: $rut</p>";
$suma = 0;
$counter =0;
foreach($examenes as $rut=>$calif):
$suma = $suma + $calif;
endforeach;
$promedio = $suma/count($examenes);
echo "<p>2) El Promedio del curso es: $promedio</p>";
$alumnosAprobados = 0;
foreach($examenes as $rut=>$calif):
if($calif >=4){
$alumnosAprobados++;
}
endforeach;
echo "<p>3) Alumnos aprobados: $alumnosAprobados</p>";
$alumnosReprobados = 0;
foreach($examenes as $rut=>$calif):
if($calif < 4){
$alumnosReprobados++;
}
endforeach;
echo "<p>4) Alumnos Reprobados: $alumnosReprobados</p>";
$porcentajeDeRep = ($alumnosReprobados*100)/count($examenes);

echo "<p>5) Porcentaje de alumnos reprobados: $porcentajeDeRep%</p>";
$alumnosProces= count($examenes);

echo "<p>6) Cantidad de alumnos: $alumnosProces En total</p>";
?>