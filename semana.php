<?php

$semana=[
	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',	
];

shuffle($semana);

echo $semana['1'];



?>

<div id="r"></div>

<script>

semana=[
	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',
];

semana.sort();
semana.sort(function(a, b){return 0.5 - Math.random()});
document.getElementById('r').innerHTML += semana[0];

</script>